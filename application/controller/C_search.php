<?php
namespace application\controller;

use core\Controller;
use  application\model\M_Client;

    class C_search extends Controller{

        public function __construct(){
            parent::__construct();
        }

        public function index(){
            $arg = func_get_args();
            if(isset($arg)){
                $client = new M_Client();
                $client->setCni($arg[0]);
                $req = $client->searchClientbyCNI();

               // echo json_encode($req);
                foreach($req as $row){
                    echo '<option value="'.$row['cni'].'">';
                    echo '<p>'.$row['prenom'].' '.$row['nom'].'</p>';
                }

            }
             //$this->view->load("client/V_add");
        }
    }
?>