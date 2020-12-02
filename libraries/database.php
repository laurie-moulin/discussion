<?php 

require_once 'libraries/function.php';

//retourne une connection à la base de données

function getPdo() : PDO
{
    $bdd = new PDO('mysql:host=localhost;dbname=discussion', 'root', 'root' );
    return $bdd;
}


//INSERER EN BASE DE DONNEE

function insert_bdd($loginHash, $passwordHash) 
{
    $bdd = getPdo();
    $insertDatabase = $bdd->prepare("INSERT INTO utilisateurs(login, password) VALUES(?, ?)");
    $insertDatabase->execute(array($loginHash, $passwordHash));

    return $insertDatabase;

}

//REQUETE LOGIN EXISTANT

function check_loginexist($loginHash){

    $bdd = getPdo();
    $reqlogin = $bdd->prepare("SELECT * FROM utilisateurs WHERE login = ?");
    $reqlogin->execute(array($loginHash));
    $loginexist = $reqlogin->rowCount();

    return $loginexist;

}

function update_data($loginHash, $passwordHash){
    $bdd = getPdo();
    $insertmdp = $bdd->prepare("UPDATE utilisateurs SET login = ? , password = ? WHERE id = ?");
    $insertmdp->execute(array($loginHash, $passwordHash, $_SESSION['id'])); 

}



