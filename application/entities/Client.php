<?php


    use Doctrine\ORM\Mapping as ORM;
    use Doctrine\Common\Collections\ArrayCollection;
    /**
     * @ORM\Entity 
     * @ORM\Table(name="client")
     */
    class Client{
        /**
         * @ORM\Id
         * @ORM\Column(type="integer")
         * @ORM\GeneratedValue
         **/
        private $id;

        /**
         * @ORM\Column(type="string",unique=true)
         */
        private $matricule;
         /**
         * @ORM\Column(type="string",unique=true)
         */
        private $cni;
        /**
         * @ORM\Column(type="string") 
         **/
        private $nom;
        /**
         * @ORM\Column(type="string")
         **/
        private $prenom;
        /**
         * @ORM\Column(type="string") 
         **/
        private $sexe;
        /**
         * @ORM\Column(type="string")
         **/
        private $dateNaiss;
        /**
         * @ORM\Column(type="string") 
         **/
        private $telephone;
        /**
         * @ORM\Column(type="string") 
         **/
        private $adresse;
        /**
         * @ORM\Column(type="string")
        **/
        private $email;
        /**
         * @ORM\Column(type="string",nullable=true)
         **/
        private $salaire;
        /**
         * @ORM\Column(type="string",nullable=true)
         **/
        private $login;
        /**
         * @ORM\Column(type="string",nullable=true)
         **/
        private $password;
        /**
         * One client has many comptes. This is the inverse side.
         * @ORM\OneToMany(targetEntity="Compte", mappedBy="client")
         */
        private $comptes;

         /**
         * Many compte have one client. This is the owning side.
         * @ORM\ManyToOne(targetEntity="Entreprise", inversedBy="clients")
         * @ORM\JoinColumn(name="entreprise_id", referencedColumnName="id")
         */
        private $entreprise; //clé etrangere du client

        public function __construct(){
            $this->comptes = new ArrayCollection();
        }

        //Getters
        public function getID(){return $this->id;}
        public function getCni(){return $this->cni;}
        public function getMatricule(){return $this->matricule;}
        public function getPrenom(){return $this->prenom;}
        public function getNom(){return $this->nom;}
        public function getSexe(){return $this->sexe;}
        public function getDateNaiss(){return $this->dateNaiss;}
        public function getTelephone(){return $this->telephone;}
        public function getAdresse(){return $this->adresse;}
        public function getEmail(){return $this->email;}
        public function getSalaire(){return $this->salaire;}
        public function getLogin(){return $this->login;}
        public function getPassword(){return $this->password;}

        public function getCompte(){return $this->comptes;}
        public function getEntreprise(){return $this->entreprise;}

        //Setters

        public function setID($id){$this->id = $id; }
        public function setCni($cni){ $this->cni = $cni;}
        public function setMatricule($mat){ $this->matricule = $mat;}
        public function setNom($nom){ $this->nom = $nom;}
        public function setPrenom($prenom){ $this->prenom = $prenom;}
        public function setSexe($sexe){ $this->sexe = $sexe;}
        public function setDateNaiss($dateNaiss){ $this->dateNaiss = $dateNaiss;}
        public function setTelephone($telephone){ $this->telephone = $telephone;}
        public function setAdresse($adresse){ $this->adresse = $adresse;}
        public function setEmail($email = null){ $this->email = $email;}
        public function setSalaire($salaire = null){ $this->salaire = $salaire;}
        public function setLogin($login = null){ $this->login = $login;}
        public function setPassword($password = null){ $this->password = $password;}

        public function setEntreprise($entreprise = null){ $this->entreprise = $entreprise;}
        public function setCompte($comptes){ $this->comptes = $comptes;}


    }
?>