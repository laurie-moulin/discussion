<?php
session_start();

require_once 'libraries/function.php';
require_once 'libraries/database.php';

if (isset($_SESSION['id'])) {
  if (isset($_POST['submit'])) {
    $message = htmlspecialchars($_POST['message']);
    com_insert($message, $date);
  }
} else {
  header("location:connexion.php");
}

$bdd = getPdo();
$data = $bdd->prepare('SELECT message, login ,date  FROM messages INNER JOIN utilisateurs ON messages.id_utilisateur = utilisateurs.id ORDER BY date');
$data->execute();
$result = $data->fetchAll(PDO::FETCH_ASSOC);

?>


<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="discussion.css">
  <!-- font awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">

  <title>Discussion Brain Tech</title>
</head>


<body>

  <header>
    <?php include("nav.php"); ?>
  </header>

  <main>

    <section class="section container-fluid">
      <div class="row ">

      <div class="col s12 l3 ">
        <h2 class=" indigo-text text-darken-4 center-align">CHAT</h2><br>
        <p class="center-align"><i class="large material-icons blue-text text-darken-3">chat</i></p>
        <p class="center-align"><img src="ressources/photo.jpg" alt="" class="circle z-depth-2 responsive-img center-align"></p>
        </div>

        <div class="col s12 l6 offset-l1">

        <div class="scroller">
          <?php
          foreach ($result as $key => $value) {
            echo "<div class=\"orange lighten-4\">";
            echo "<p class=\" orange-text text-darken-4 \">" . $value['login'] . " &nbsp &nbsp &nbsp " . $value['date'] . "</p>" . $value['message'] .

              "</div>";
          }
          ?>
          </div>

          <form action="discussion.php" method="POST">
            <div class="input-field">
              <textarea name="message" class="materialize-textarea" rows="5" cols="33" required></textarea>
              <label for="textarea1">Aa</label>
              <button class="btn waves-effect waves-light orange darken-4 right" name="submit"><span>Send</span><i class="material-icons right">send</i></button>
            </div><br>

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