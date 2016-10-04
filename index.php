<?php
    $json = file_get_contents("evenements/fichier.json");
    $json_data = json_decode($json);
?>

<!doctype html>
<html class="no-js" lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>BOWLING ALMA</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="fonts/font-awesome.css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <!--NAVBAR DU SITE-->
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">BOWLING RENNES</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">accueil</a></li>
                    <li><a href="#">votre évenement</a></li>
                    <li><a href="#">News</a></li>
                    <li><a href="#">infos + contact</a></li>
                    <li><a href="#">Tarifs</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i>
                    </a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i>
                    </a></li>
                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i>
                    </a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!--HEADER -->
    <section class="header">
        <div>
            <img class="img-responsive center-block" src="img/logo.jpg" alt="BOWLING RENNES ALMA">
            <div class="separator-header center-block"></div>
            <h1 class="text-center">BOWLING RENNES</h1>
            <h2 class="text-center">complexe de loisirs</h2>
            <p class="text-center">Bowling Rennes, 2 rue du Bosphore, 35200 Rennes / Tel. 02 99 50 65 53 - mail. bowlingrennes@free.fr</p>
            <p class="text-center"></p>
        </div>
    </section>

    <!--section ACCUEIL-->
    <section class="col-md-12 text-center accueil">
        <h2>Bienvenue sur le site du Bowling de Rennes Alma</h2>
        <div class="col-md-3 block1">
            <div class="icon1"><a href="#"><i class="fa fa-gamepad fa-5x" aria-hidden="true"></i></a></div>
            <h3 class="titre1">Horaires</h3>
            <p class="resum">Pour une soirée détente, entre amis, collègues de travail ou en famille, venez profiter du Bowling de Rennes
                ! Nous sommes ouverts TOUS LES JOURS, à partir de 14h, sans exception! Découvrez notre salle séminaire pour
                vos événements privés et professionnels. (repas, location de salle pour formation, team-building, réunion,
                apéritif...)
            </p>
        </div>
        <div class="col-md-3 block2">
            <div class="icon1"><a href="#"><i class="fa fa-gamepad fa-5x" aria-hidden="true"></i></a>
            </div>
            <h3 class="titre1">Anniversaire</h3>
            <p class="resum">En famille, entre amis ou entre collègues, Idéal pour l'anniversaire de votre enfant.
            </p>
        </div>
        <div class="col-md-3 block3">
            <div class="icon1"><a href="#"><i class="fa fa-gamepad fa-5x" aria-hidden="true"></i></a>
            </div>
            <h3 class="titre1">Soirée entreprise</h3>
            <p class="resum">Chef d'entreprise, responsable de projets ou simplement preneur d'initiatives, nous trouvons des solutions pour
                organiser votre soirée entreprise avec parties de bowling et repas.
            </p>
        </div>
        <div class="col-md-3 block4">
            <div class="icon1"><a href="#"><i class="fa fa-gamepad fa-5x" aria-hidden="true"></i></a>
            </div>
            <h3 class="titre1">Soirées à thèmes</h3>
            <p class="resum">Le Bowling de Rennes Alma organise tout au long de l'année des évènements ponctuels, tels que des soirées à thèmes
                (tatouages éphémères, salsa, kizomba, cabaret, concours de beauté...)
            </p>
        </div>
    </section>

    <!--section BOWLING-->
    <section class="index-bowling">
        <div class="text-index-bowling">
            <div class="img-bowling1"></div>
            <h3>Bowling Sportifs</h3>
            <p>La pratique du bowling sportif vous intéresse ? Le Bowling de Rennes Alma accueille des clubs de bowling qui
                s'entraînent toutes les semaines, pour faire des compétitions tout au long de l'année. Venez assister aux
                cours tous les mercredis à partir de 19h pour apprendre les bases du bowling.</p>
            <a href="http://www.bowlingrennes.com/cariboost_files/R_C3_A8glement_20de_20la_20Ligue_20Bowling_20Rennes.pdf">
                <button class="btn">Bowling Sportif</button>
            </a>
        </div>
        <div class="text-index-bowling">
            <div class="img-bowling2"></div>
            <h3>Chèques-Cadeaux ?</h3>
            <p>C'est bientôt l'anniversaire d'un proche, avez-vous pensé aux chèques-cadeaux ?</p>
        </div>
        <div class="text-index-bowling">
            <div class="img-bowling3"></div>
            <h3>Pour les enfants </h3>
            <p>Toutes nos pistes sont équipées de Bumpers (barrières) pour que les enfants puissent jouer comme des grands.
                Des boules légères sont également là pour les enfants</p>
        </div>
    </section>

    <!-- Carousel -->
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
            <li data-target="#carousel-example-generic" data-slide-to="4"></li>

        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="img/bar1.jpg" alt="...">
                <div class="carousel-caption">

                </div>
            </div>
            <div class="item">
                <img src="img/bar2.jpg" alt="...">
                <div class="carousel-caption">

                </div>
            </div>

            <div class="item">
                <img src="img/bar3.jpg" alt="...">
                <div class="carousel-caption">

                </div>
            </div>

            <div class="item">
                <img src="img/bar4.jpg" alt="...">
                <div class="carousel-caption">

                </div>
            </div>


        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>





    <!-- Nos Soirées Hover text -->
    <div class="container">
        <div class="row space">
            <div class="col-md-3">
                <div class="cuadro_intro_hover ">
                    <p>
                        <img src="<?php echo $json_data->url; ?>" class="center-block" alt="">
                    </p>
                    <div class="caption">
                        <div class="blur"></div>
                        <div class="caption-text">
                            <h3><?php echo $json_data->date; ?></h3>
                            <p><?php echo $json_data->content; ?></p>
                            <a class=" btn btn-default" href="#"><span class="glyphicon glyphicon-plus"> INFO</span></a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-3">
                <div class="cuadro_intro_hover ">
                    <p>
                        <img src="img/soiree2.jpg" class="center-block" alt="">
                    </p>
                    <div class="caption">
                        <div class="blur"></div>
                        <div class="caption-text">
                            <h3>Tous les jeudis (or première semaine du mois)</h3>
                            <p>Entrée libre et gratuite 20h-21h</p>
                            <a class=" btn btn-default" href="#"><span class="glyphicon glyphicon-plus"> INFO</span></a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-3">
                <div class="cuadro_intro_hover ">
                    <p>
                        <img src="img/soiree3.jpg" class="center-block" alt="">
                    </p>
                    <div class="caption">
                        <div class="blur"></div>
                        <div class="caption-text">
                            <h3>Tous les mercredis</h3>
                            <p>Cours gratuits de bowling</p>
                            <a class=" btn btn-default" href="#"><span class="glyphicon glyphicon-plus"> INFO</span></a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-3">
                <div class="cuadro_intro_hover ">
                    <p>
                        <img src="img/soiree4.jpg" class="center-block" alt="">
                    </p>
                    <div class="caption">
                        <div class="blur"></div>
                        <div class="caption-text">
                            <h3>Tous les 1ers vendredis du mois</h3>
                            <p>Kizomba-bachata avec BREIZH DANCE entrée gratuite</p>
                            <a class=" btn btn-default" href="#"><span class="glyphicon glyphicon-plus"> INFO</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="row space">
            <div class="col-md-3">


            </div>
            <div class="col-md-3">
                <div class="cuadro_intro_hover ">
                    <p>
                        <img src="img/soiree5.png" class="center-block" alt="">
                    </p>
                    <div class="caption">
                        <div class="blur"></div>
                        <div class="caption-text">
                            <h3>Tous les jeudis (or première semaine du mois)</h3>
                            <p>Entrée libre et gratuite 20h-21h</p>
                            <a class=" btn btn-default" href="#"><span class="glyphicon glyphicon-plus"> INFO</span></a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-3">
                <div class="cuadro_intro_hover ">
                    <p>
                        <img src="img/soiree6.png" class="center-block" alt="">
                    </p>
                    <div class="caption">
                        <div class="blur"></div>
                        <div class="caption-text">
                            <h3>Tous les mercredis</h3>
                            <p>Cours gratuits de bowling</p>
                            <a class=" btn btn-default" href="#"><span class="glyphicon glyphicon-plus"> INFO</span></a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-3">

            </div>
        </div>
    </div>








    <!--Script à garder à la fin du HTML-->
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')
    </script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script> 




    <!--Script à garder à la fin du HTML-->
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')
    </script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>


    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
        (function (b, o, i, l, e, r) {
            b.GoogleAnalyticsObject = l;
            b[l] || (b[l] =
                function () {
                    (b[l].q = b[l].q || []).push(arguments)
                });
            b[l].l = +new Date;
            e = o.createElement(i);
            r = o.getElementsByTagName(i)[0];
            e.src = 'https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e, r)
        }(window, document, 'script', 'ga'));
        ga('create', 'UA-XXXXX-X', 'auto');
        ga('send', 'pageview');
    </script>
</body>

</html>