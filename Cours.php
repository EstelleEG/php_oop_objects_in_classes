<?php 

    class Cours {
        
        public int $id;
        public string $nom;
        //public string $salleId;
        public Salle $salle; //object


        public function __construct(Salle $salle, int $id, string $nom) {
            $this->setId($id);
            $this->setNom($nom);
            //$this->setSalleId($salleId);
            $this->setSalle($salle); //object
        }

        public function getId(): int {
            return $this->id;
        }

        public function getNom(): string {
            return $this->nom;
        }

        // public function getSalleId(): int {
        //     return $this->salleId;
        // }

        public function getSalle(): Salle {  //object
            return $this->salle;
        }


        public function setId(int $id)
        {
            $this->id = $id; 
        }

        public function setNom(string $nom)
        {
            $this->nom = $nom; 
        }

        // public function setSalleId(int $salleId)
        // {
        //     $this->salleId = $salleId; 
        // }

        public function setSalle(Salle $salle) //object
        {
             $this->salle = $salle; 
        }

        
        // public function getCours(){
        //     $pdo = Db::getConnection();
        //     //SQL REQUEST : Get all eleves with coursId = 1
        //     $query = $pdo->query('SELECT * FROM Cours WHERE salle_id =' .$this->getSalleId());//id 3
           
        //     // I have an array of objects
        //     $cours = $query->fetchAll(); 
        //     echo '<pre>';
        //     var_dump($cours);
        //  }



        // public function displayCours(){
        //     $pdo = Db::getConnection();
        //     $query = $pdo->query('SELECT * FROM Cours');
        //     //I have an array of objects
        //     $cours = $query->fetchAll(); 
        //     $this->getNom();
        //     echo "Aujourd'hui, nous avons cours de " .$this->nom;
        // }



        //METHOD TO DISPLAY ELEVES VIA THE OBJECT 'COURS' (LINKING 2 CLASSES = Eleves and Cours)
        public function getEleves(){

            $pdo = Db::getConnection();

            //SQL REQUEST : Get all eleves with cours object
            $query = $pdo->query('SELECT * FROM Eleve WHERE cours_id =' .$this->getId());//id 1

            // I have an array of objects
            $eleve = $query->fetchAll(); 
           
            //parse the array with foreach and make each email an object
            $elevesArray = array();

            foreach($eleve as $el){
                //I loop on each eleve and i fetch each input
                $id = $el['id']; //['sql']
                $nom = $el['nom'];
                $prenom = $el['prenom'];
                //$coursId = $el['cours_id'];
                $cours = $this; //object COURS 

                //create objects
                $elevesObjects = new Eleve($cours, $id, $nom, $prenom);

                //add each object into the array
                array_push($elevesArray, $elevesObjects);
            }
            return $elevesArray;
        }




          // display a cours with nom
          public function displayCours(){
            echo $this->getNom();
            echo'<br>';
            echo $this->getId();
    }
   

    

}