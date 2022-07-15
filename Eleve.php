<?php 

    class Eleve {
        
        public int $id;
        public string $nom;
        public string $prenom;
        public int $age;
        //public int $coursId;
        public Cours $cours;//object


        public function __construct(Cours $cours, int $id, string $nom, string $prenom) {

            $this->setId($id);
            $this->setNom($nom);
            $this->setPrenom($prenom);
            //$this->setCoursId($coursId);
            $this->setAge(20); //set by default, everytime I create an object
            $this->setCours($cours); //object

        }

        public function getId(): int {
            return $this->id;
        }

        public function getAge(): int {
            return $this->age;
        }

        public function getNom(): string {
            return $this->nom;
        }

        public function getPrenom(): string {
            return $this->prenom;
        }

        // public function getCoursId(): int {
        //     return $this->coursId;
        // }

        public function getCours(): Cours //object
        {
            return $this->cours;
        }


        public function setId(int $id)
        {
            $this->id = $id; 
        }

        public function setNom(string $nom)
        {
            $this->nom = $nom; 
        }

        public function setPrenom(string $prenom)
        {
            $this->prenom = $prenom; 
        }

        public function setAge(int $age)
        {
            $this->age = $age; 
        }

        // public function setCoursId(int $coursId)
        // {
        //     $this->coursId = $coursId; 
        // }

        public function setCours(Cours $cours) //object
        {
            $this->cours = $cours;
        }



        // display one eleve with nom prenom
         public function displayEleve(){
             echo $this->getPrenom();
             echo ' ';
             echo $this->getNom();
             echo'<br>';
     }

        // public function displayAgeNextYear(){
        //     $this->setAge($this->getAge()+1);
        //     echo $this->getAge();
        // }

    }