<?php
    namespace core;

    use core\View;

    class Controller{

        protected $view;

        public function __construct(){
            $this->view = new View();
        }
    }

?>