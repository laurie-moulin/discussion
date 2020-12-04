<?php
session_start();

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="index.css">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
        integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <title>Brain Tech</title>
</head>

<body>
    <header>

    <?php include("nav.php"); ?>

    </header>

    <main>
        <!-- services / tabs -->

        <section class="container-fluid section scrollspy" id="services">
            <div class="row">
                <div class="col s12 l5">
                    <h2 class="Orange-text text-darken-4">About BrainTech...</h2>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam atque, rem minus eius
                        suscipit nostrum,
                        aliquam impedit ab harum voluptates accusamus illum totam. Libero vel dignissimos, suscipit
                        excepturi atque
                        natus?</p>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam atque, rem minus eius
                        suscipit nostrum,
                        aliquam impedit ab harum voluptates accusamus illum totam. Libero vel dignissimos, suscipit
                        excepturi atque
                        natus?</p>
                </div>
                <div class="col s12 l6 offset-l1 ">
                    <ul class="tabs">
                        <li class="tab col s6">
                            <a href="#photography" class="black-text text-darken-4">Laboratory</a>
                        </li>
                        <li class="tab col s6">
                            <a href="#editing" class="black-text text-darken-4">School</a>
                        </li>
                    </ul>
                    <div class="col s12" id="photography">
                        <p class="flow-text orange-text text-darken-4">Laboratory</p>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam atque, rem minus eius
                            suscipit nostrum,
                            aliquam impedit ab harum voluptates accusamus illum totam. Libero vel dignissimos, suscipit
                            excepturi atque
                            natus?</p>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam atque, rem minus eius
                            suscipit nostrum,
                            aliquam impedit ab harum voluptates accusamus illum totam. Libero vel dignissimos, suscipit
                            excepturi atque
                            natus?</p>
                    </div>
                    <div class="col s12" id="editing">
                        <p class="flow-text orange-text text-darken-4 ">School</p>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam atque, rem minus eius
                            suscipit nostrum,
                            aliquam impedit ab harum voluptates accusamus illum totam. Libero vel dignissimos, suscipit
                            excepturi atque
                            natus?</p>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam atque, rem minus eius
                            suscipit nostrum,
                            aliquam impedit ab harum voluptates accusamus illum totam. Libero vel dignissimos, suscipit
                            excepturi atque
                            natus?</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- parallax -->

        <div class="parallax-container">
            <div class="parallax">
                <img src="ressources/vr21.jpg" class="responsive-img">
            </div>
        </div>

        <!-- CARDS -->

        <section class="container-fluid" id="cards">
            <div class="row">
                <div class="col l4">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="ressources/girl-tech.jpeg">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Girl Power<i
                                    class="material-icons right">more_vert</i></span>
                            <p><a href="#">Read more</a></p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Girl Power<i
                                    class="material-icons right">close</i></span>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis facere explicabo quasi
                                eligendi, excepturi voluptas. Sed ex animi repudiandae natus. Aut distinctio officia
                                libero aliquam ratione. Culpa ullam ipsam eligendi.</p>
                        </div>
                    </div>
                </div>

                <div class="col l4">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="ressources/code.jpeg">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Code Life<i
                                    class="material-icons right">more_vert</i></span>
                            <p><a href="#">Read more</a></p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Code life<i
                                    class="material-icons right">close</i></span>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis facere explicabo quasi
                                eligendi, excepturi voluptas. Sed ex animi repudiandae natus. Aut distinctio officia
                                libero aliquam ratione. Culpa ullam ipsam eligendi.</p>
                        </div>
                    </div>
                </div>

                <div class="col l4">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="ressources/vr.jpeg">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">VR<i
                                    class="material-icons right">more_vert</i></span>
                            <p><a href="#">Read more</a></p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">VR<i
                                    class="material-icons right">close</i></span>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ut dignissimos sapiente
                                praesentium tempora rerum voluptatem veritatis maxime consequuntur vitae. Debitis
                                tempora quasi ab voluptas repellat laborum assumenda eaque? Hic, voluptate.
                            </p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col l4">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="ressources/people.jpeg">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Co-working<i
                                    class="material-icons right">more_vert</i></span>
                            <p><a href="#">Read more</a></p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Co-working<i
                                    class="material-icons right">close</i></span>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet esse molestias fugit
                                consequuntur asperiores, perferendis impedit illum exercitationem consectetur culpa,
                                iusto, enim hic vitae a ullam quae ratione beatae? Velit!
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col l4">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="ressources/men.jpeg">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">
                                Nice shirts<i class="material-icons right">more_vert</i></span>
                            <p><a href="#">Read more</a></p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">
                                Nice shirts<i class="material-icons right">close</i></span>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa aperiam et, placeat
                                veniam animi dignissimos consequuntur quam enim, ab libero iure. Molestiae nulla eveniet
                                ullam expedita eligendi enim culpa ad!
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col l4">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="ressources/work.jpeg">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Work<i
                                    class="material-icons right">more_vert</i></span>
                            <p><a href="#">Read more</a></p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Work<i
                                    class="material-icons right">close</i></span>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident alias obcaecati sunt
                                ducimus! Voluptate vero sint delectus, aspernatur laboriosam et iusto ducimus aliquam
                                eos consequatur, corrupti ratione soluta nulla ipsa?
                            </p>
                        </div>
                    </div>
                </div>

            </div>

        </section>

        <!-- CONTACT -->

        <section class="section container-fluid scrollspy" id="contact">
            <div class="row ">
              <div class="col s12 l4 offset-l3">
                <h2 class="green-text text-darken-2">Contact</h2>

                <form action="" >
                  <div class="input-field">
                    <i class="material-icons prefix">email</i>
                    <input type="email" id="email">
                    <label for="email">Your email</label>
                  </div>
                  <div class="input-field">
                    <i class="material-icons prefix">message</i>
                    <textarea id="message" class="materialize-textarea"></textarea>
                    <label for="message">Your message</label>
                  </div>
                
                  <div class="input-field center">
                    <button class="btn green">SUBMIT</button>
                  </div>
                </form>
              </div>
            </div>
        
          </section>

    </main>

      <!-- footer -->

      <?php include("footer.php"); ?>


    <!-- Compiled and minified JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.sidenav').sidenav();
            $(".dropdown-trigger").dropdown();
            $('.materialboxed').materialbox();
            $('.parallax').parallax();
            $('.tabs').tabs();
            $('.datepicker').datepicker({
                disableWeekends: true
            });
            $('.tooltipped').tooltip()
            $('.scrollspy').scrollSpy()
        });
    </script>

</body>