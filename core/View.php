<?php
namespace core;
    class View{

        public function __construct(){}

        public function load(){
            $num = func_num_args();
            $args = func_get_args();
            if($num == 1){
                $this->chargerDonnees($args[0]);
            }else{
                $this->chargerDonnees($args[0], $args[1]);
            }
        }

        private function chargerDonnees($page, $args = array()){
            $data = $args;
            //extract($dara);
            $page = 'application/view/'.$page.'.php';
            if(file_exists($page)){
                require_once $page;
            }else{
                echo 'la vue '.$page.' n\'existe pas ! ';
            }
        }

    }

?>