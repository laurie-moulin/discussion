       <!-- Dropdown Structure -->
       <ul id="dropdown1" class="dropdown-content ">
            <li><a class="orange-text" href="inscription.php">Inscription</a></li>
            <li><a class="orange-text" href="connexion.php">Connexion</a></li>
            <li class="divider"></li>
            <li><a class="orange-text" href="#!">Discussion</a></li>
        </ul>

        <nav class="nav-wrapper transparent">
            <div class="container-fluid">
                <ul class="left hide-on-med-and-down">
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="#services">Actualités</a></li>
                    <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Espace Membre<i
                                class="material-icons right">arrow_drop_down</i></a></li>

                    <li><a href="#" class="tooltipped btn-floating btn-small orange darken-4" data-tooltip="Instagram">
                            <i class="fab fa-instagram"></i>
                        </a></li>
                    <li><a href="#" class="tooltipped btn-floating btn-small orange darken-4" data-tooltip="Facebook">
                            <i class="fab fa-facebook"></i>
                        </a></li>
                    <li><a href="#" class="tooltipped btn-floating btn-small orange darken-4" data-tooltip="Twitter">
                            <i class="fab fa-twitter"></i>
                        </a></li>
                </ul>
                <ul class="sidenav orange lighten-2" id="mobile-menu">
                    <li><a href="#photo's">Accueil</a></li>
                    <li><a href="#services">Actualités</a></li>
                    <!-- <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Espace Membre<i class="material-icons right">arrow_drop_down</i></a></li> -->
                </ul>

                <a href="" class="right brand-logo">BrainTech</a>
                <a href="" class="sidenav-trigger" data-target="mobile-menu">
                    <i class="material-icons">menu</i>
                </a>
            </div>
        </nav>

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