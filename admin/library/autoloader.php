<?php

 spl_autoload_register(function ($name) {
    try{
        $filePath = 'library/' . str_replace("_", "/", $name) . '.php';
        require_once $filePath;
    } catch (Exception $ex) {
        throw new MissingException("Unable to load $name.");
    }
});