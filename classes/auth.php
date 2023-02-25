<?php

/**
 * Authentification class management
 */
final class Auth
{
    /**
     * Method which authentificates user by login and password
     * @param string $login User`s login
     * @param string $password User`s password
     * @return bool True or false statement based on authentification result
     */
    public static function login(string $login, string $password): bool
    {
        $db = Database::getInstance();

        $data = $db->fetch(
            "SELECT * FROM `users` WHERE `login` = :login AND `password` = :password",
            [
                'login' => $login,
                'password' => hash('sha256', $password)
            ]
        );

        if (!empty($data)) {
            $user = new User($data['id'], $data['login'], $data['password'], $data['email'], $data['role']);
            $_SESSION['user'] = $user;

            return true;
        }

        return false;
    }

    public static function isAuthentificated(): bool
    {
        if (isset($_SESSION['user'])) {
            return true;
        }

        return false;
    }

    /**
     * Method which authentificates user by login and password and writes remember token
     * @param string $login User`s login
     * @param string $password User`s password
     * @return bool True or false statement based on authentification result
     */
    public static function loginWithCookies(string $login, string $password): bool
    {
        if (self::login($login, $password)) {
            $token = self::generateToken(64);
            $userIdToInject = $_SESSION['user']->getId();

            self::injectToken($userIdToInject, $token);

            Cookie::setCookie('rememberToken', $token, time() + 3600, '/', '.odospk.ru');

            return true;
        }

        return false;
    }

    /**
     * Method which authentificates user by remember token written in $_COOKIE array
     * @param string $token Written token into $_COOKIE array
     * @return bool True or false statement based on authentification result
     */
    public static function loginByToken(string $token): bool
    {
        $db = Database::getInstance();

        $data = $db->fetch(
            "SELECT `id`, `login`, `password`, `email`, `role` FROM `users` WHERE `remember_token` = :token",
            ['token' => $token]
        );

        if (!empty($data)) {
            $user = new User($data['id'], $data['login'], $data['password'], $data['email'], $data['role']);
            $_SESSION['user'] = $user;

            return true;
        }

        return false;
    }

    /**
     * Method which logout user with erasing session and cookie data
     * @return void Nothing
     */
    public static function logout(): void
    {
        Cookie::removeCookie('rememberToken', '/', '.odospk.ru');
        unset($_SESSION['user']);
        session_destroy();
    }

    /**
     * Method which generates token for authentificated user
     * @param string $length Lenght of generatable token
     * @return string Generated token
     */
    private static function generateToken(int $length): string
    {
        $alphabet = 'qwertyuiopasdfghjjklzxcvbnmQWERTYUIOOASDFGHJKKLZXCVBNM1234567890';

        $token = '';

        for ($i = 0; $i < $length; $i++) {
            $index = rand(0, strlen($alphabet) - 1);
            $token .= $alphabet[$index];
        }

        return $token;
    }

    /**
     * Method to inject token to database for authentificated user
     * @param int $userIdToInject Authentificated user`s id
     * @param string $token Generated token to inject to user
     */
    private static function injectToken(int $userIdToInject, string $token): void
    {
        $db = Database::getInstance();

        $db->query(
            "UPDATE `users` SET `remember_token` = :rememberToken WHERE `id` = :userId",
            [
                'rememberToken' => $token,
                'userId' => $userIdToInject,
            ]
        );
    }
}
