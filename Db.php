<?php
//CONNECTION DB
class Db 
{

    public static function getConnection()
    {
        //CREATE PDO OBJECT & CONNECTION DB
        $user = 'estelle';
        $pass ='Sf9GxBP8Qj';
        try
        {
            return new PDO('mysql:host=gy19415-002.eu.clouddb.ovh.net:35243;dbname=mailToAction_Estelle;charset=utf8', $user, $pass);
                echo 'You are connected';
                echo'<br>';

        } catch(Exception $e) 
        {
            die('Erreur : Sorry, You are not connected'.$e->getMessage());
        }
    }
}

//$pdo = Db::getConnection();