<?php
namespace core;
    class Model{

        //protected $entityManager;
        protected $db;
        public function __construct()
        {
            require "bootstrap.php";
            $this->db = $entityManager;
            //$this->db = $this->getConnexion();
        }

        // public function getConnexion(){
        //     try {
        //         $host = Database::connexion()['host'];
        //         $user = Database::connexion()['user'];
        //         $password = Database::connexion()['password'];
        //         $database = Database::connexion()['database'];

        //         $dsn = "mysql:host=$host;dbname=$database";        //Domaine serveur name ::autrement dit nom de domaine

        //         $this->db = new \PDO($dsn,$user,$password,array(\PDO::ATTR_ERRMODE=>\PDO::ERRMODE_EXCEPTION));

        //     } catch (\PDOException $ex) {
        //         die('Erreur : '.$ex->getMessage());
        //     }

        //     return $this->db;
        // }
    }
?>