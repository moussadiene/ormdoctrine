<?php
namespace application\controller;

use application\model\M_Client;
use application\model\M_Compte;
use application\model\M_Entreprise;
use application\model\M_TypeCompte;

use Client;
use Compte;
use core\Controller;

use TypeCompte;

class C_Compte extends Controller{

        public function __construct(){
            parent::__construct();
        }

        public function index(){
            $entreprisedao = new M_Entreprise();
            $clientdao = new M_Client();
            $comptedao = new M_Compte();
            $typecomptedao = new M_TypeCompte();
            $data['listeClient'] = $clientdao->liste();
            $data['listeEntreprise'] = $entreprisedao->getList();
            $data['listeCompte'] = $comptedao->getList();
            $data['listeTypeCompte'] = $typecomptedao->getList();
            $this->view->load("compte/compte_iframe",$data);
        }

        public function lister()
        {
            $entreprisedao = new M_Entreprise();
            $clientdao = new M_Client();
            $comptedao = new M_Compte();
            $typecomptedao = new M_TypeCompte();
            $data['listeClient'] = $clientdao->liste();
            $data['listeEntreprise'] = $entreprisedao->getList();
            $data['listeCompte'] = $comptedao->getList();
            $data['listeTypeCompte'] = $typecomptedao->getList();
            return $data;
        }
        public function getAll()
        {

            $entreprisedao = new M_Entreprise();
            $clientdao = new M_Client();
            $comptedao = new M_Compte();
            $typecomptedao = new M_TypeCompte();

            // $data['listeClient'] = $clientdao->liste();
            // $data['listeEntreprise'] = $entreprisedao->getList();
            // $data['listeCompte'] = $comptedao->liste();
            // $data['listeTypeCompte'] = $typecomptedao->getList();

            $i = 0;
            foreach($comptedao->liste() as $value){

                $data[$i] = [
                    'id' => $value->getId(),
                    'numero' => $value->getNumero(),
                    'typeCompte' => $value->getTypeCompte()->getLibelle()
                ];

                //$data[$i] =  (array) $value;
                $i++;
            }
            echo json_encode($data);
            //$this->view->load("compte/compte_iframe",$data);
        }

        public function addCompte() {

            extract($_POST);

            if(isset($choix_type_compte)){

                $comptedao = new M_Compte();
                $compte = new Compte();

                $client = new Client();
                $client = $comptedao->getClientsByMatricule($matricule);

                $compte->setClient($client);

                $typecompte = new TypeCompte();
                $typecompte = $comptedao->getCompteByLibelle($choix_type_compte);
                $compte->setTypeCompte($typecompte);

                $compte->setNumero($this->codeAleatoire());
                $compte->setRib($this->cleRip());
                $compte->setSolde(10000);
                $compte->setDateOuverture($this->getDateNow());

                if($choix_type_compte == "courant"){
                    $compte->setAgios(10000);
                }
                if($choix_type_compte == "simple"){
                    $compte->setFraisOuverture(20000);
                    $compte->setRemuneration(10000);
                }
                if($choix_type_compte == "bloque"){
                    $compte->setFraisOuverture(20000);
                    $compte->setRemuneration(10000);
                    $compte->setDateDebut($date_debut);
                    $compte->setDateFin($date_fin);
                }

                $data = $this->lister();

                $data['notif'] = $comptedao->add($compte);
                echo json_encode($data);
            }

        echo "vous n'avez pas le droit";

        }

        private function codeAleatoire()
        {
            $string = "";
            $chaine = "2643789ABDCEFGHJKMNPRTUVW";
            srand((double)microtime()*1000000);
            for($i=0; $i<8; $i++)
            {
                $string .= $chaine[rand()%strlen($chaine)];
            }
            return $string;
        }

        private function cleRip()
        {
            $string = "";
            $chaine = "012643789";
            srand((double)microtime()*1000000);
            do{
                for($i=0; $i<2; $i++)
                {
                    $string .= $chaine[rand()%strlen($chaine)];
                }
            }while($string=="99" || $string=="98");

            return intval($string);
        }

        private function getDateNow(){
            $tz_object = new \DateTimeZone('UTC');
            $datetime = new \DateTime();
            $datetime->setTimezone($tz_object);
            return $datetime->format('Y\-m\-d');
        }
    }

?>
