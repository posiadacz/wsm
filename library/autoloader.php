<?php

function wsmAutoload($name) {
    try{
        $ex = explode('_', $name);
        $filePath = 'library';
        $exSize = count($ex);
        $i = 1;
        foreach($ex as $part){
            $filePath .= '/';
            if($i != $exSize){
                $part[0] = strtolower($part[0]);
            }
            $filePath .= $part;
            $i++;
        }
        
        $filePath .= '.php';
        require_once $filePath;
    } catch (Exception $ex) {
        throw new MissingException("Unable to load $name.");
    }
}

 spl_autoload_register('wsmAutoload');