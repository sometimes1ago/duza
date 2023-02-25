<?php

class Error
{
    public function __construct(
        protected string $message
    ) {
        $this->message = $message;
    }

    public function message(): string
    {
        return $this->message;
    }
}
