<?php
namespace core;

    class Database{

            public static function connexion(){
                return array(
                    'host' => 'localhost',
                    'user' => 'djine',
                    'password' => 'mosila21',
                    'database' => 'bp_doctrine',
                    );
            }
    }
?>