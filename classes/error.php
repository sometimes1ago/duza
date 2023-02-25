<?php

/**
 * Error object class
 */
class Error
{
    public function __construct(
        protected string $message
    ) {
        $this->message = $message;
    }

    /**
     * Method to get error message
     * @return string Error message
     */
    public function message(): string
    {
        return $this->message;
    }
}
