<?php

    namespace Config;

    class Autoload {

        public static function Start() {

            spl_autoload_register(function ($classname) {

                $filename = dirname(__DIR__) . "/" . str_replace("\\", "/", $classname) . ".php";
                include_once($filename);
        
            });

        }

    }

    


?>