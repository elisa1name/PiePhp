<?php
    spl_autoload_register(function ($pClassName) {
        $pClassName = str_replace("\\" , DIRECTORY_SEPARATOR, $pClassName) . '.php';
        if(file_exists($pClassName)) {
            require_once $pClassName;
        }
        else {
            require_once 'src'.DIRECTORY_SEPARATOR. $pClassName;
        }
    });