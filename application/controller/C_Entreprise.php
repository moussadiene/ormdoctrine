<?php
namespace application\controller;

use application\entities\TypeCompte;
use application\model\M_Client;
use application\model\M_Compte;
use application\model\M_Entreprise;
use application\model\M_TypeCompte;
use application\service\Service;
use Client;
use Compte;
use core\Controller;
use Entreprise;
use TypeCompte as GlobalTypeCompte;

class C_Entreprise extends Controller{

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $entreprisedao = new M_Entreprise();
        $clientdao = new M_Client();
        $data['listClient'] = $clientdao->getList();
        $data['listEntreprise'] = $entreprisedao->getList();
        $this->view->load("client/client_iframe",$data);
    }

    public function search() {

        $r_entr[] = $_GET['recherche'];
        $entreprisedao = new M_Entreprise();

        echo json_encode( $r_entr, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP);

        //echo json_decode($r_entr);
    }

    public function getAll()
    {
        $entreprisedao = new M_Entreprise();
        $clientdao = new M_Client();
        $data['listClient'] = $clientdao->getList();
        $data['listEntreprise'] = $entreprisedao->getList();
        echo json_encode( $data, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP);

        //$this->view->load("client/client_iframe",$data);
    }
    public function addEntreprise() {

        extract($_POST);
       
        if(isset($nom_entreprise)){

        
            $ent = new Entreprise();
            $ent->setNomEntreprise($nom_entreprise);
            $ent->setTelephone($tel_entreprise);
            $ent->setAdresse($adr_entreprise);
            $ent->setEmail($email_entreprise);
            $ent->setBudjet($budget_entreprise);
            
            $entreprisedao = new M_Entreprise();
            $data['res']= $entreprisedao->add($ent);
            $data['listeEntreprise'] = $entreprisedao->getList();

            $clientdao = new M_Client();
            $data['listeClient'] = $clientdao->getList();

            echo json_encode( $data, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP);
            //$this->view->load("client/client_iframe",$data);
        }

        echo " vous n'avez pas le droit d'acces";
    }

    public function getDateNow(){
        $tz_object = new \DateTimeZone('UTC');
        $datetime = new \DateTime();
        $datetime->setTimezone($tz_object);
        return $datetime->format('Y\-m\-d');
    }
    }

?>
