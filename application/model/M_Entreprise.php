<?php
	namespace application\model;

	use core\Model;

class M_Entreprise extends Model{

        public function __construct(){
			parent::__construct();
		}
		function add($entreprise){
			if($this->db != null)
			{
				$this->db->persist($entreprise);
				$this->db->flush();

				return $entreprise->getId();
			}
		}

		public function getList()
		{
			if($this->db != null)
			{
				return $this->db->getRepository('Entreprise')->findAll();
			}
		}

		public function getEntrepriseById($id)
		{
			if($this->db != null)
			{
				return $this->db->createQuery("SELECT e FROM Entreprise e WHERE e.id = " . $id)->getSingleResult();
			}
		}
		

	
	}
