<?php
	namespace application\model;

	use core\Model;

class M_TypeCompte extends Model{

        public function __construct(){
			parent::__construct();
		}
		function add($typecompte){
			if($this->db != null)
			{
				$this->db->persist($typecompte);
				$this->db->flush();

				return $typecompte->getId();
			}
		}

		public function getList()
		{
			if($this->db != null)
			{
				return $this->db->getRepository('TypeCompte')->findAll();
			}
		}

		public function getTypeCompteById($id)
		{
			if($this->db != null)
			{
				return $this->db->createQuery("SELECT tc FROM TypeCompte tc WHERE tc.id = " . $id)->getSingleResult();
			}
		}
		

	
	}
