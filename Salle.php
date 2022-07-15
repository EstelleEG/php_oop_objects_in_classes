<?php 

    class Salle {
        
        public int $id;
        public int $num;
    
        public function __construct(int $id, int $num) {
            $this->setId($id);
            $this->setNum($num);
        }

        public function getId(): int {
            return $this->id;
        }

        public function getNum(): int {
            return $this->num;
        }


        public function setId(int $id)
        {
            $this->id = $id; 
        }

        public function setNum(int $num)
        {
            $this->num = $num; 
        }

        // public function getSalle(){
        //     $pdo = Db::getConnection();
        //     //SQL REQUEST : Get all Salles with coursId = 1
        //     $query = $pdo->query('SELECT * FROM Salle WHERE num =' .$this->getNum());//num 23
        //     // I have an array of objects
        //     $salle = $query->fetchAll(); 
        //     echo '<pre>';
        //     var_dump($salle);

        // }

          //METHOD TO DISPLAY COURS VIA THE OBJECT 'SALLE' (LINKING 2 CLASSES = COURS and SALLE)
          public function getCours(){

            $pdo = Db::getConnection();

            //SQL REQUEST : Get all cours with salle id
            $query = $pdo->query('SELECT * FROM Cours WHERE salle_id =' .$this->getId());//id 1

            // I have an array of objects
            $cours = $query->fetchAll(); 
           
            //parse the array with foreach and make each email an object
            $coursArray = array();

            foreach($cours as $cour){
                //I loop on each cours and i fetch each input
                $id = $cour['id']; //['sql']
                $nom = $cour['nom'];
                $salle = $this; //object SALLE 

                //create objects
                $coursObjects = new Cours($salle, $id, $nom);

                //add each object into the array
                array_push($coursArray, $coursObjects);
            }
            return $coursArray;


        }


    }