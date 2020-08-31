<?php

namespace config;

    class Autoloader{
        //charger le controller par defaut
        // public static function accueil(){

        //     return array(
        //                 'accueil_controller' => 'C_Compte'
        //             );
        // }

        public static function register(){
            spl_autoload_register(array(__CLASS__,'autoload'));
        }

        public static function autoload($class){

            //echo __DIR__.$class;
            $ok = str_replace("config","", __DIR__.$class);
           // require_once str_replace("\\","/",$ok.".php");
            // die();

            // if(file_exists("config/".$class.".php")){
            //     require_once "config/".$class.".php";
            // }
            // else if(file_exists("application/controller/".$class.".php")){
            //     require_once "application/controller/".$class.".php";
            // }
            // else if(file_exists("application/entities/".$class.".php")){
            //     require_once "application/entities/".$class.".php";
            // }
            // else if(file_exists("application/model/".$class.".php")){
            //     require_once "application/model/".$class.".php";
            // }
            // else if(file_exists("application/service/".$class.".php")){
            //     require_once "application/service/".$class.".php";
            // }
            // else if(file_exists("core/".$class.".php")){
            //     require_once "core/".$class.".php";
            // }

            if(file_exists(str_replace("\\","/",$ok.".php"))){
                require_once str_replace("\\","/",$ok.".php");
            }else{
                echo $class." non charger";
            }

        }
        public static function welcome_params(){
            return array(
                        'welcome_controller' => 'Dashboad'
                        );
        }
    }
    Autoloader::register();
?>