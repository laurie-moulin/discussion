<?php 
session_start();

require_once 'libraries/function.php';
require_once 'libraries/database.php';


if(isset($_POST['submit'])){
  $login = htmlspecialchars($_POST['login']);
  $password = sha1($_POST['password']);

  if(check_empty_connect($login, $password) == 1){

    if(connexion($login, $password) == 1){

    }
    else{
      echo connexion($login, $password);   
    }
  }
  else{
    echo check_empty_connect($login, $password);
    echo var_dump(check_empty_connect($login, $password));
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

    <title>Connexion Brain Tech</title>
</head>

<style>
header{
    background-image: linear-gradient(to left bottom, #6d92c9, #729ecf, #79aad3, #83b6d7, #90c1db);
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

              <div class="col s12 l4 offset-l4">
                <h2 class="flow-text indigo-text text-darken-4">Log In To Your Account</h2><br>

                <form action="connexion.php" method="POST" >
                  <div class="input-field">
                    <i class="material-icons grey-text text-darken-4 prefix">account_circle</i>
                    <input type="text" id="login" name="login">
                    <label class="grey-text" for="login">Login</label>
                  </div>
                  <div class="input-field">                    <i class="material-icons grey-text text-darken-4 prefix">lock</i>
                    <input type="password" id="password" name="password">
                    <label class="grey-text" for="password">Password</label>
                  </div><br>

                
                  <div class="input-field center">
                    <button class="btn waves-effect waves-light blue lighten-2" name="submit">Log In</button>
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