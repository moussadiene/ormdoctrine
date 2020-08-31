<?php
	namespace application\model;

use core\Model;

//require_once './application/entities/Client.php';
class M_Client extends Model{

        public function __construct(){
			parent::__construct();
		}


		function searchClientbyCNI(){
			
		}
		function getMat(){
			
		}


		public function add($client){
			if($this->db != null)
			{
				$this->db->persist($client);
				$this->db->flush();
	
				return $client->getId();
			}
		}

		public function getList(){
			if($this->db != null)
			{
				return $this->db->getRepository('Client')->findAll();
			}
		}
		public function getClientById($id)
		{
			if($this->db != null)
			{
				return $this->db->createQuery("SELECT c FROM Client c WHERE c.id = " . $id)->getSingleResult();
			}
		}

		public function liste()
		{
			if($this->db != null)
			{
				return $this->db->createQuery("SELECT c FROM Client c")->getResult();
			}
		}

		public function getClientsByMatricule($mat)
		{
			if($this->db != null)
			{
				return $this->db->getRepository('Client')->findBy(array('matricule' => $mat));
			}
		}

	}
