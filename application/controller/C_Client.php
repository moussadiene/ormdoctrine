<?php
namespace application\controller;

use application\model\M_Client;
use application\model\M_Compte;
use application\model\M_Entreprise;
use application\service\Service;
use Client as GlobalClient;
use core\Controller;
use Entreprise;

class C_Client extends Controller{

        public function __construct(){
            parent::__construct();
        }

        public function index(){

            $entreprisedao = new M_Entreprise();
            $clientdao = new M_Client();
            
            $data['listeClient'] = $clientdao->getList();
            $data['listeEntreprise'] = $entreprisedao->getList();
            $this->view->load("template/layout",$data);
        }

        public function getAll()
        { 
            $entreprisedao = new M_Entreprise();
            $clientdao = new M_Client();
            //$data['listeClient'] = $clientdao->liste();
            //$data['listeEntreprise'] = $entreprisedao->getList();
            // var_dump($data);
            // die;
            
            /** postman */
            $data = [];
            $i = 0;
            foreach($entreprisedao->getList() as $value){

                $data[$i] = [
                    'id' => $value->getId(),
                    'nomEntreprise' => $value->getNomEntreprise()
                ];

                //$data[$i] =  (array) $value;
                $i++;
            }

            echo json_encode($data);
            //$this->view->load("client/client_iframe",$data);

        }
        public function addClient() {

            extract($_POST);
            if(isset($valider)){
                $client = new GlobalClient();
                $entreprisedao = new M_Entreprise();
                $clientdao = new M_Client();
                $client->setCni($cni);
                $client->setMatricule(Service::codeAleatoire());
                $client->setNom($nom);
                $client->setPrenom($prenom);
                $client->setAdresse($adresse);
                $client->setDateNaiss($dateNaiss);

                if($choix_salaire){
                    $entreprise = $entreprisedao->getEntrepriseById($entreprise);
                    $client->setSalaire($salaire);
                    $client->setEntreprise($entreprise);
                }

                $client->setSexe($sexe);
                $client->setEmail($email);
                $client->setTelephone($telephone);

                $data['info']  = $clientdao->add($client);
                $data['listeClient'] = $clientdao->getList();
                $data['listeEntreprise'] = $Entreprisedao->getList();

                echo json_encode($data);

            }

            echo "vous n'avez pas le droit";
            // var_dump($info);
            // exit();

           //$this->view->load("template/layout",$data );

        }
        public function addEntreprise() {

            extract($_POST);
            if(isset($valider)){
                $entreprise = new Entreprise();
                $entreprisedao = new M_Entreprise();
                $clientdao = new M_Client();

                $entreprise->setNomEntreprise($nomEntreprise);
                $entreprise->setAdresse($adresseEntreprise);
                $entreprise->setTelephone($telEntreprise);
                $entreprise->setEmail($emailEntreprise);
                $entreprise->setBudjet($budget);

                $data['info']  = $clientdao->add($entreprise);
                $data['listeClient'] = $clientdao->getList();
                $data['listeEntreprise'] = $entreprisedao->getList();
                echo json_encode($data);
            }
           //$this->view->load("client/V_add",$data['res'] );

        }

        public function getDateNow(){
            $tz_object = new \DateTimeZone('UTC');
            $datetime = new \DateTime();
            $datetime->setTimezone($tz_object);
            return $datetime->format('Y\-m\-d');
        }
    }

?>
