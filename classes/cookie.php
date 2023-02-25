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

    /**
     * Method to remove cookie from $_COOKIE array
     * @param string $cookieName Name of cookie
     * @param string $path Path where cookie must be removed
     * @param string $domain Domain where cookie must be removed
     */
    public static function removeCookie(
        string $cookieName,
        string $path,
        string $domain
    ) {
        setcookie($cookieName, '', time() - 3600, $path, $domain);
    }

    /**
     * Method to get cookie value from $_COOKIE array by its name
     * @param string $cookieName Name of gettable cookie
     * @return string Cookie value
     */
    public static function getCookie(string $cookieName)
    {
        if (array_key_exists($cookieName, $_COOKIE)) {
            return $_COOKIE[$cookieName];
        }
    }

    /**
     * Method to check if cookie exists by its name
     * @param string $cookieName Name of checkable cookie
     * @return bool True or false statement which depends on checking result
     */
    public static function exists(string $cookieName): bool
    {
        if (array_key_exists($cookieName, $_COOKIE)) {
            return true;
        }

        return false;
    }
}
