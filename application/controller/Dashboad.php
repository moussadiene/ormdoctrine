<?php
namespace application\controller;

use core\Controller;


class Dashboad extends Controller{

        public function __construct(){
            parent::__construct();
            require_once 'bootstrap.php';
        }

        public function index(){
            $data['ok'] = 1;
            $this->view->load("template/layout",$data);
            //$this->view->load("client/client",$data);

        }

    }

?>
