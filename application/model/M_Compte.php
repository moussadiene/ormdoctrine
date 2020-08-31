<?php
    namespace application\model;
	use core\Model;

	class M_Compte extends Model{

        public function __construct(){
			parent::__construct();
		}
		
		function add($compte){
			if($this->db != null)
			{
				$this->db->persist($compte);
				$this->db->flush();

				return $compte->getId();
			}
		}

		public function getList()
		{
			if($this->db != null)
			{
				return $this->db->getRepository('Compte')->findAll();
			}
		}

		public function getCompteById($id)
		{
			if($this->db != null)
			{
				return $this->db->createQuery("SELECT c FROM Compte c WHERE c.id = " . $id)->getSingleResult();
			}
		}
		public function getCompteByMatricule($mat)
		{
			if($this->db != null)
			{
				return $this->db->getRepository('Compte')->findBy(array('matricule' => $mat));
			}
		}

		public function getCompteByType($typecompte_id)
		{
			if($this->db != null)
			{
				return $this->db->getRepository('Compte')->findBy(array('typecompte_id' => $typecompte_id));
			}
		}
		public function liste()
		{
			if($this->db != null)
			{
				return $this->db->createQuery("SELECT c FROM Compte c")->getResult();
			}
		}

		public function getClientsByMatricule($mat)
		{
			if($this->db != null)
			{
				return $this->db->createQuery("SELECT c FROM Client c WHERE c.matricule='$mat'")->getOneOrNullResult();
				//return $this->db->getRepository('Client')->findBy(array('matricule' => $mat));
			}
		}

		public function getCompteByLibelle($lib)
		{
			if($this->db != null)
			{
				return $this->db->createQuery("SELECT c FROM TypeCompte c WHERE c.libelle='$lib'")->getOneOrNullResult();
				//return $this->db->getRepository('TypeCompte')->findBy(array('libelle' => $lib));
			}
		}

	}
