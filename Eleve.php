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
            if($prenom == 'Estelle'){
                $this->setAge(39);
            }
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



        //SAVE DATAS IN THE DB //ADD
        public function save(){
            $pdo = Db::getConnection();
           
            $query = 'INSERT INTO Eleve (nom, prenom, cours_id) 
            VALUES(:nom, :prenom, :cours_id)';

            $preparedQuery = $pdo->prepare($query);

            $preparedQuery->bindParam(':nom', $this->nom);
            $preparedQuery->bindParam(':prenom', $this->prenom);
            $course_id = $this->getCours()->getId();
            $preparedQuery->bindParam(':cours_id', $course_id);

            $preparedQuery->execute();
            echo "Data inserted successfully";
       }


    //    //UPDATE DATAS IN THE DB
    //    public function updateName($nameUpdated){
    //     $pdo = Db::getConnection();
       
    //     $query = "UPDATE Eleve SET nom = :nomUpdated WHERE nom = :nom"; //sql query

    //     $preparedQuery = $pdo->prepare($query);

    //     $preparedQuery->bindParam(':nomUpdated',$nameUpdated);
    //     $preparedQuery->bindParam(':nom',$this->nom);
    //     $preparedQuery->execute();
        
        // $preparedQuery = $pdo->execute([
        //     'newNom' =>'zaliUpdated', 
        //     'oldNom' =>'zali'
        // ]);

        // echo "Data updated successfully";
        // }


    //////////////////DELETE DATAS IN THE DB///////////////////////////
       public function deleteName($nom){
        $pdo = Db::getConnection();

        $query = "DELETE FROM Eleve WHERE nom = :nom"; //sql query

        $preparedQuery = $pdo->prepare($query);
        $preparedQuery->bindParam(':nom', $nom);
        $preparedQuery->execute();
        echo "Data deleted successfully";
        }

    }