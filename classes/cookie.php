<?php

/**
 * Object oriented wrapper around setcookie function
 */
final class Cookie
{

    /**
     * Method to write cookie in $_COOKIE array
     * @param string $cookieName Name of cookie
     * @param string $cookieValue Value of cookie
     * @param int $expirationTime Lifetime for cookie
     * @param string $path Path where cookie will be available
     * @param string $domain Domain where coolie will be available
     * @param bool $secure Cookie security flag
     * @param bool $httpOnly Http only connection flag
     */
    public static function setCookie(
        string $cookieName,
        string $cookieValue,
        int $expirationTime,
        string $path,
        string $domain,
        bool $secure = false,
        bool $httpOnly = false
    ) {
        setcookie($cookieName, $cookieValue, $expirationTime, $path, $domain, $secure, $httpOnly);
    }

    public static function removeCookie(
        string $cookieName,
        string $path,
        string $domain
    ) {
        setcookie($cookieName, '', time() - 3600, $path, $domain);
    }

    public static function getCookie(string $cookieName)
    {
        if (array_key_exists($cookieName, $_COOKIE)) {
            return $_COOKIE[$cookieName];
        }
    }
}
