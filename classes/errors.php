<?php

/**Error repository class */
final class Errors
{
    /** 
     * @var array Errors storage */
    private static array $errors = [];

    /**
     * Method which add new error into errors storage
     * @param string $message Error message
     */
    public static function newError(string $message): void
    {
        self::$errors[] = new Error($message);
    }

    /**
     * Method which get last error from errors storage
     * @return Error Last error from storate
     */
    public static function getLastError()
    {
        return array_shift(self::$errors);
    }

    /**
     * Method which gives all errors from storage
     * @return array Error storage
     */
    public static function getAll(): array
    {
        return self::$errors;
    }

    /**
     * Method which check has eny errors into storate
     * @return bool True of false statement after checking
     */
    public static function hasAny(): bool
    {
        if (count(self::$errors) > 0) {
            return true;
        }

        return false;
    }
}
