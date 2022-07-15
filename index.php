<?php 
require ('./Eleve.php');
require ('./Cours.php');
require ('./Salle.php');
require ('./Db.php');

//////////////////////////////////////////////////////////////////////////////////
// DISPLAY ELEVE

/////////////////////////////////////////////////////////////////////////////
//DISPLAY getElevesByObjectCours :
//$eleve = new Eleve('', '', '', 0); 
//echo'<br>';
//$eleve->setCours();
//$eleve->getElevesByObjectCours(); //display the Eleves that I have under coursId 3

//$elevesArray = $eleve->getElevesByObjectCours(); //I display all Eleves as an array
//echo'<pre>';
//var_dump($elevesArray);
//echo'</pre>';
//echo'<br>';


//////////////////////////////////////////////////////////////////////////////////
//method to DISPLAY EACH ELEVE :
// foreach($elevesArray as $eleve){
//      echo $eleve->displayOneEleve();
// }


//////////////////////////////////////////////////////////////////////////////////
//method to DISPLAY AGE :
//$eleve->displayAgeNextYear();
// $cours = new Cours(0, '',1);
// echo $cours->displayCours();



//////////////////////////////////////////////////////////////////////////////////
// // DISPLAY ELEVES VIA THE OBJECT 'COURS'
//  $cours = new Cours(2, 'Ashtanga', 2);
//  $mesEleves = $cours->getEleves();

//  foreach($mesEleves as $eleve){
//      $eleve->displayEleve();
//  }



////////////////////////////////////////////////////////////////////////////////////
// DISPLAY cours via the object 'SALLE'
$salle = new Salle(5, 0);
echo'<br>';
// $salle->setNum(3);
$mesCours = $salle->getCours(); //here, i get salle id 3 , num 21

foreach($mesCours as $cour){
    $cour->displayCours();
}

$eleve = new Eleve($mesCours[0], 19, 'Gregoire', 'Estelle');


//////////////////////////////////////////////////////////////////////////////////
// // INSERT DATAS OF CLASS ELEVE, INTO DB
$eleve->save();




