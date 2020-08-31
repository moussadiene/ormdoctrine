<?php
    //require "application/config/Autoloader.php";
  namespace core;

use config\Autoloader;
use core\Model;

    class Core{

        public function __construct(){

            new Model();
           
            if(!isset($_GET['url'])){
                $_GET['url'] = Autoloader::welcome_params()['welcome_controller'];
            }
           
            if(isset($_GET['url'])){

                $url = explode('/',$_GET['url']); // permet de definir un la maniere de separation d'un chaine

                

                $file = "application/controller/" . $url[0] . ".php";
               
                if(file_exists($file)){ // c'est pour gerer l'existance du ficher
                   
                    $namespace = "application\controller\\";
                    
                    $class = $url[0];

                    $controller = $namespace.$class;   // inclusion du name space dans l'instatiation
                   
                    $controller = new $controller(); // c'est la recuperation du constructeur par defaut //objet
                                                //echo $controller;
                    if(isset($url[1])){
                        $method = $url[1];       //c'est pour tester si on a saisie une methode ou pas
                        if($method == ""){
                            $method = "index";
                        }
                        if(method_exists($controller, $method)){
                            if(isset($url[2])){
                                $controller->$method($url[2]);
                            }else{
                                $controller->{$method}();
                            }
                        }else{
                            echo "la methode  ".$method." n existe pas dans le controller ".$url[0];
                        }
                    }else{
							$controller->{"index"}();
					}
                }else{
                    // var_dump($url);
                    // exit();
                        echo "Le controller " . $url[0]. " n existe pas !";
                }
            }else{
                echo '<h2>Le controller par defaut nest pas encore gerer</h2>';
            }
        }
    }

?>