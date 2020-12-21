<?php

//FONCTION CHECK REMPLISSAGE CHAMPS PAGE INSCRIPTION

function check_empty($login, $password, $password2){

    $msg = "";


    if(empty($login) OR empty($password)){
        $msg = "Veuillez remplir toute les informations demandés";
    }
    else{
        return 1;
    }

  return $msg;   
}

//FONCTION CHECK MDP PAGE INSCRIPTION & PROFIL

function check_password($password, $password2){

    $msg = "";
    $passwordHash = sha1($password);
    $passwordHash2 = sha1($password2);


    if($passwordHash != $passwordHash2){
        $msg = "Les mots de passe ne correspondent pas";
    }
    elseif(strlen($passwordHash)<5){
        $msg = "Le mot de passe doit contenir au moins 5 caractères";
    }
    else{
        return 1;
    }

    return $msg;
}

//FONCTION CHECK LOGIN PAGE INSCRIPTION & PROFIL

function check_login($login){

    $msg = "";
    $loginHash = htmlspecialchars($login);

    check_loginexist($loginHash);

    if(strlen($loginHash)<=4){
        $msg = "Le login doit contenir au moins 4 caractères";
    }
    elseif(check_loginexist($loginHash) == 1){
        $msg = "Le login existe déjà";
    }
    else{
        return 1;
    }

    return $msg;

}

//FONCTION CHECK REMPLISSAGE CHAMPS PAGE connexion

function check_empty_connect($login, $password){

    $msg = "";

    if(empty($login) OR empty($password)){
        $msg = "Veuillez remplir toute les informations demandés";
    }
    else{
        return 1;
    }

  return $msg;   
}

//FONCTION CONNEXION 

function connexion($login, $password){

    $bdd = getPdo(); 
    $requser = $bdd ->prepare("SELECT * FROM utilisateurs WHERE login = ? AND password = ?");
    $requser ->execute(array($login, $password));
    $userexist = $requser->rowCount();

    if($userexist == 0){
        $msg = "Mauvais Login ou Mot de passe";
    }
    else{
        $userinfo = $requser->fetch();
        $_SESSION['id'] = $userinfo['id'];
        $_SESSION['login'] = $userinfo['login'];
        $_SESSION['password'] = $userinfo['password'];
        header("Location: profil.php?id=".$_SESSION['id']);
        return 1;
    }

    return $msg;

}

function display_msg($data){

  select_msg();

while ($result = $data-> fetch(PDO::FETCH_ASSOC)){
  if ($i == 0){
    foreach ($result as $key => $value){
      echo "<p>$key</p>";
    }
    $i++;
  }
  foreach ($result as $key => $value) {
    if ($key == "posté le jour/mois/année"){
      date_default_timezone_set('Europe/Paris');
      $value =  date("d-m-Y", strtotime($value));  ;
    echo "<p>$value</p>";
    }
    else
      echo "<p>" .nl2br($value). "</p>";
  }
}

return $result;

}

?>