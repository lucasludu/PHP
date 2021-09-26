<?php

    spl_autoload_register(function ($classname) {
        $file = $classname . ".php";
        include_once($file);
    });

?>