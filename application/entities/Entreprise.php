<?php
    use Doctrine\ORM\Mapping as ORM;
    use Doctrine\Common\Collections\ArrayCollection;

    /**
     * @ORM\Entity 
     * @ORM\Table(name="entreprise")
    **/
    class Entreprise{
        /**
         * @ORM\Id 
         * @ORM\Column(type="integer") 
         * @ORM\GeneratedValue 
         **/
        private $id;

        /**
         * @ORM\Column(type="string") 
         **/
        private $nomEntreprise;
        /**
         * @ORM\Column(type="string",unique=true) 
         **/
        private $adresse ;
        /**
         * @ORM\Column(type="string") 
         **/
        private $telephone;
        /**
         * @ORM\Column(type="string") 
         **/
        private $email;
        /**
         * @ORM\Column(type="string",nullable=true)
         **/
        private $login;
        /**
         * @ORM\Column(type="string",nullable=true) 
         **/
        private $password;
        /**
         * @ORM\Column(type="decimal") 
         **/
        private $budget;

        /**
         * One entreprise has many comptes. This is the inverse side.
         * @ORM\OneToMany(targetEntity="Compte", mappedBy="entreprise")
         */
        private $comptes;

        /**
         * One client has many comptes. This is the inverse side.
         * @ORM\OneToMany(targetEntity="Client", mappedBy="entreprise")
         */
        private $clients;

        public function __construct(){ 
            $this->comptes = new ArrayCollection();
            $this->clients = new ArrayCollection();
        }
        //Getters
        public function getId(){return $this->id;}
        public function getNomEntreprise(){return $this->nomEntreprise;}
        public function getTelephone(){return $this->telephone;}
        public function getAdresse(){return $this->adresse;}
        public function getEmail(){return $this->email;}
        public function getLogin(){return $this->login;}
        public function getPassword(){return $this->password;}
        public function getBudget(){return $this->budget;}

        public function getComptes(){return $this->comptes;}
        public function getClient(){return $this->clients;}

       //Setters
       public function setNomEntreprise($nomEntreprise){ $this->nomEntreprise = $nomEntreprise;}
       public function setTelephone($telephone){ $this->telephone = $telephone;}
       public function setAdresse($adresse){ $this->adresse = $adresse;}
       public function setEmail($email){ $this->email = $email;}
       public function setLogin($login = null){ $this->login = $login;}
       public function setPassword($password = null){ $this->password = $password;}
       public function setBudjet($budget){ $this->budget = $budget;}

       public function setComptes($comptes){ $this->comptes = $comptes;}
       public function setClient($clients){ $this->clients = $clients;}
    }

?>