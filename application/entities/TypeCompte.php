<?php
    use Doctrine\ORM\Mapping as ORM;
    use Doctrine\Common\Collections\ArrayCollection;


    /**
     * @ORM\Entity @ORM\Table(name="typecompte")
    **/
    class TypeCompte{
        /** 
         * @ORM\Id
         * @ORM\Column(type="integer") 
         * @ORM\GeneratedValue
         **/
        private $id;

        /**
         * @ORM\Column(type="string")
         **/
        private $libelle;

         /**
         * One typecompte has many comptes. This is the inverse side.
         * @ORM\OneToMany(targetEntity="Compte", mappedBy="typecompte")
         */
        private $comptes;

        public function __construct(){
            $this->comptes = new ArrayCollection();

        }

        public function getID(){return $this->id;}
        public function getComptes(){return $this->comptes;}
        public function getLibelle(){return $this->libelle;}

        public function setID($id){ $this->id = $id;}
        public function setComptes($comptes){ $this->compte = $comptes;}
        public function setLibelle($libelle){ $this->libelle = $libelle;}

    }

?>