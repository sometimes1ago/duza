<?php

spl_autoload_register(function ($classname) {
    include_once "classes/" . str_replace("\\", "/", strtolower($classname)) . '.php';
});

function includeTemplate($templateName, $variables = [])
{
    $root = $_SERVER['DOCUMENT_ROOT'] . '/templates/';

    try {
        if (is_string($templateName) && $templateName !== '') {
            if (file_exists($root . $templateName)) {
                extract($variables);
                require_once $root . $templateName;
            } else {
                throw new Exception('Данного подключаемого файла не существует');
            }
        } else {
            throw new Exception('Имя подключаемого шаблона не может быть пустым!');
        }
    } catch (Exception $ex) {
        echo $ex->getMessage();
    }
}

session_start();
