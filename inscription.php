<?php 

require_once 'libraries/function.php';
require_once 'libraries/database.php';


if (isset($_POST["submit"])){

  $login = $_POST["login"];
  $password = $_POST["password"];
  $password2 = $_POST["password2"];

  $loginHash = htmlspecialchars($login);
  $passwordHash = sha1($password);
  $passwordHash2 = sha1($password2);


  if(check_empty($login, $password, $password2) == 1){
    if(check_login($login) == 1){
      if(check_password($password, $password2) == 1){
        insert_bdd($loginHash, $passwordHash);
        header("location:connexion.php");
      }
      else{
        $msg = check_password($password, $password2);
      }
    }
    else{
      $msg = check_login($login);
    }
  }
  else{
    $msg = check_empty($login, $password, $password2);
  }

}

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="inscription_connexion.css">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
        integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">

    <title>Inscription Brain Tech</title>
</head>

<style>
header{
    background-image: linear-gradient(to bottom, #5b886c, #679879, #73a786, #7fb893, #8cc8a0);
}

.responsive-img{
    width: 50%; 
}

</style>

<body>

<header> 
<?php include("nav.php"); ?>
</header>

<main>

<section class="section container-fluid scrollspy" id="contact">
            <div class="row ">
            <div class="col s12 l5 offset-l1">
        <h2 class="center-align green-text text-darken-4">Join us ! </h2>
        <p class="center-align">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam atque, rem minus eius suscipit nostrum,
          aliquam impedit ab harum voluptates accusamus illum totam. Libero vel dignissimos, suscipit excepturi atque
          natus?<br>
          <img src="ressources/logo.png" class="responsive-img"></p>
      
      </div>
              <div class="col s12 l4 offset-l1">
                <h2 class="flow-text green-text text-darken-4">Registration</h2><br>

                <form action="inscription.php" method="POST" >
                  <div class="input-field">
                    <i class="material-icons grey-text text-darken-4 prefix">account_circle</i>
                    <input type="text" id="login" name="login">
                    <label class="grey-text" for="login">Login</label>
                  </div>
                  <div class="input-field">
                    <i class="material-icons grey-text text-darken-4 prefix">lock</i>
                    <input type="password" id="password" name="password">
                    <label class="grey-text" for="password">Password</label>
                  </div>
                  <div class="input-field">
                    <i class="material-icons grey-text text-darken-4 prefix">lock</i>
                    <input type="password" id="password2" name="password2">
                    <label class="grey-text" for="password2">Confirmation Password</label>

                     <?php 
                    if(isset($msg)){
                      echo $msg;
                    }
                    ?>

                  </div><br>
                
                  <div class="input-field center">
                    <button name="submit" class="btn waves-effect waves-light green"><i class="material-icons left">add</i>REGISTER</button>
                  </div>
                </form>
              </div>
            </div>
        
          </section>


</main>

<footer>
<?php include("footer.php"); ?>
</footer>

</body>

</html>