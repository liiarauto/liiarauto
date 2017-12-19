<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Estate &mdash; Free HTML5 Bootstrap Website Template by FreeHTML5.co</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
    <meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive"
    />
    <meta name="author" content="FreeHTML5.co" />

    <!-- 
//////////////////////////////////////////////////////

FREE HTML5 TEMPLATE 
DESIGNED & DEVELOPED by FreeHTML5.co

Website: 		http://freehtml5.co/
Email: 			info@freehtml5.co
Twitter: 		http://twitter.com/fh5co
Facebook: 		https://www.facebook.com/fh5co

//////////////////////////////////////////////////////
-->

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon.ico">
    <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    <!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'> -->

    <!-- Animate.css -->
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{asset('css/icomoon.css')}}">
    <!-- Bootstrap  -->
    {{--
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}"> --}}
    <!-- Flexslider  -->
    <link rel="stylesheet" href="{{asset('css/flexslider.css')}}">
    <!-- Theme style  -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <!-- Modernizr JS -->
    <script src="{{asset('js/modernizr-2.6.2.min.js')}}"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
<script src="js/respond.min.js"></script>
<![endif]-->
    <style>
        .code .center {
            /* border: 1px solid #2ca02c; */
            color: #F9BE36;
            margin: 50px;
            border-radius: 10px;
        }
    </style>

</head>

<body>




    <div id="fh5co-page">
        <header id="fh5co-header" role="banner" style="margin-bottom:20px">
            <div class="container">
                <div class="row">
                    <div class="header-inner">
                        <h1>
                            <a href="index.html">SII
                                <span>N.</span>
                            </a>
                        </h1>
                        <nav role="navigation">
                            <ul>
                                <li>
                                    <a href="buy.html">Services</a>
                                </li>
                                <li>
                                    <a href="rent.html">Assureurs</a>
                                </li>
                                <li>
                                    <a href="properties.html">Properties</a>
                                </li>
                                <li class="call">
                                    <a href="tel://123456789">
                                        <i class="icon-phone"></i> +225 57947428</a>
                                </li>
                                <!-- <li class="cta"><a href="contact.html">Nous contacter</a></li> -->
                                <li class="cta">
                                    <a href="contact.html">Connexion</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>

        {!! Form::open(['url' => 'foo/bar']) !!}
        <div class="container">
            <div class="row">
                <div class="panel panel-default col-md-8 col-md-offset-2">
                    <div class="panel-heading">
                        <h3 class="panel-title">Le Contrat</h3>
                    </div>
                    <div class="panel-body">
                            <div class="form-group">
                                <label for="date">Date de prise d'effet</label>
                                <div class="input-group col-md-12">
                                    <input name="date_effet" type="date" class="form-control" placeholder="Username" aria-describedby="sizing-addon1">
                                </div>

                            </div>
                            <div class="form-group">
                                <label for="date">Périodicité</label>
                                <div class="input-group">
                                    <select name="periodicite" id="" class="form-control">
                                        <option value="">Annuelle</option>
                                        <option value="">Mensuelle</option>
                                        <option value="">Trimestrielle</option>
                                        <option value="">Semestrielle</option>
                                    </select>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="panel panel-default col-md-8 col-md-offset-2">
                    <div class="panel-heading">
                        <h3 class="panel-title">Les Garanties</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <input name="g_rc" type="checkbox" aria-label="..." checked>
                                        </span>
                                        <input type="text" class="form-control" value="Responsabilité civile" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <input type="checkbox" aria-label="...">
                                        </span>
                                        <input type="text" class="form-control" value="Responsabilité civile" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <input type="checkbox" aria-label="...">
                                        </span>
                                        <input type="text" class="form-control" value="Responsabilité civile" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <input type="checkbox" aria-label="...">
                                        </span>
                                        <input type="text" class="form-control" value="Responsabilité civile" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <input type="checkbox" aria-label="...">
                                        </span>
                                        <input type="text" class="form-control" value="Responsabilité civile" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <input type="checkbox" aria-label="...">
                                        </span>
                                        <input type="text" class="form-control" value="Responsabilité civile" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <input type="checkbox" aria-label="...">
                                        </span>
                                        <input type="text" class="form-control" value="Responsabilité civile" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <input type="checkbox" aria-label="...">
                                        </span>
                                        <input type="text" class="form-control" value="Responsabilité civile" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="panel panel-default col-md-8 col-md-offset-2">
                    <div class="panel-heading">
                        <h3 class="panel-title">Le Véhicule</h3>
                    </div>
                    <div class="panel-body">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="ivplate">Immatriculation du véhicule</label>
                                    <div class="input-group col-md-12">
                                        <input name="immatriculation" type="text" class="form-control ivplate">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group col-md-12">
                                        <label for="categorie">Catégorie/Usage</label>
                                        <select name="categorie" id="" class="form-control">
                                            <option value="">Promenade et affaires</option>
                                            <option value="">Location</option>
                                            <option value="">Véhicules de société</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="number">Nombre de place assises</label>
                                    <div class="input-group col-md-12">
                                        <input name="nombre_places_assises" type="date" class="form-control number">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="date">Date de prenière mise en circulation</label>
                                    <div class="input-group col-md-12">
                                        <input name="date_premiere_mise_en_circulation" type="date" class="form-control ivplate">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="ivplate">Marque</label>
                                    <div class="input-group col-md-12">
                                        <label for="marque"></label>
                                        <select name="marque" id="" class="form-control">
                                            <option value="">Mercedes</option>
                                            <option value="">Toyota</option>
                                            <option value="">BMW</option>
                                            <option value="">Audi</option>
                                            <option value="">Dacia</option>
                                            <option value="">Ford</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group col-md-12">
                                        <label for="puissance">Puissqnce fiscale</label>
                                        <select name="puissance" id="" class="form-control">
                                            <option value="">1 CV</option>
                                            <option value="">2 CV</option>
                                            <option value="">3 CV</option>
                                            <option value="">4 CV</option>
                                            <option value="">5 CV</option>
                                            <option value="">6 CV</option>
                                            <option value="">7 CV</option>
                                            <option value="">8 CV</option>
                                            <option value="">9 CV</option>
                                            <option value="">10 CV</option>
                                            <option value="">11 CV</option>
                                            <option value="">12 CV</option>
                                            <option value="">+ de 12 CV</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group col-md-12">
                                        <label for="energie">Energie</label>
                                        <select name="energie" class="form-control">
                                            <option value="">Essence</option>
                                            <option value="">Diesel</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group col-md-12">
                                        <label for="zone">Zone de circulaion</label>
                                        <select name="zone" class="form-control">
                                            <option value="">Zone 1</option>
                                            <option value="">Zone 2</option>
                                            <option value="">Zone 3</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="panel panel-default col-md-8 col-md-offset-2">
                    <div class="panel-heading">
                        <h3 class="panel-title">Profil de l'assuré</h3>
                    </div>
                    <div class="panel-body">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group col-md-12">
                                        <label for="firstname">Nom</label>
                                        <input type="text" class="form-control" placeholder="" aria-describedby="sizing-addon1">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group col-md-12">
                                        <label for="lastname">Prenom</label>
                                        <input type="text" class="form-control" placeholder="" aria-describedby="sizing-addon1">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group col-md-12">
                                        <label for="sexe">Sexe</label>
                                        <select name="sexe" id="" class="form-control">
                                            <option value="m">Homme</option>
                                            <option value="f">Femme</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group col-md-12">
                                        <label for="date">Date de naissance</label>
                                        <input type="date" name="date_de_naissance" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group col-md-12">
                                        <label for="tel">Téléphone</label>
                                        <input name="tel" type="tel" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group col-md-12">
                                        <label for="email">Email</label>
                                        <input name="email" type="email" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group col-md-12">
                                        <label for="profession">Profession</label>
                                        <select name="profession" id="" class="form-control">
                                            <option value="">Agent commercial</option>
                                            <option value="">Agent de recouvrement</option>
                                            <option value="">Agriculteur</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group col-md-12">
                                        <label for="date">Date de délivrance du permis</label>
                                        <input type="date" name="date_delivrance_permis" id="" class="form-control" />
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="panel panel-default col-md-8 col-md-offset-2">
                    <div class="panel-heading">Termes du contrat</div>
                    <div class="panel-body">
                        <div class="warning">
                            <input type="checkbox" name="agree">  J'accepte <a href="http://">les termes du contrat</a> 
                        </div>
                            <button type="submit" class="btn btn-primary pull-right">Souscrire</button>
                    </div>
                </div>
                <div class="col-md-8 col-md-offset-2">
                </div>
            </div>
        </div>
    {!! Form::close() !!}

        <footer id="fh5co-footer" role="contentinfo">

            <div class="container">
                <div class="col-md-3 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
                    <h3>About Us</h3>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the
                        blind texts.
                    </p>
                    <p>
                        <a href="#" class="btn btn-primary btn-outline with-arrow btn-sm">I'm button
                            <i class="icon-arrow-right"></i>
                        </a>
                    </p>
                </div>
                <div class="col-md-6 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
                    <h3>Our Services</h3>
                    <ul class="float">
                        <li>
                            <a href="#">Web Design</a>
                        </li>
                        <li>
                            <a href="#">Branding &amp; Identity</a>
                        </li>
                        <li>
                            <a href="#">Free HTML5</a>
                        </li>
                        <li>
                            <a href="#">HandCrafted Templates</a>
                        </li>
                    </ul>
                    <ul class="float">
                        <li>
                            <a href="#">Free Bootstrap Template</a>
                        </li>
                        <li>
                            <a href="#">Free HTML5 Template</a>
                        </li>
                        <li>
                            <a href="#">Free HTML5 &amp; CSS3 Template</a>
                        </li>
                        <li>
                            <a href="#">HandCrafted Templates</a>
                        </li>
                    </ul>

                </div>



                <div class="col-md-2 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
                    <h3>Follow Us</h3>
                    <ul class="fh5co-social">
                        <li>
                            <a href="#">
                                <i class="icon-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon-google-plus"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>


                <div class="col-md-12 fh5co-copyright text-center">
                    <p>&copy; 2016 Free HTML5 template. All Rights Reserved.
                        <span>Designed with
                            <i class="icon-heart"></i> by
                            <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a> Demo Images by
                            <a href="http://unsplash.com/" target="_blank">Unsplash</a>
                        </span>
                    </p>
                </div>

            </div>
        </footer>
    </div>


    <!-- jQuery -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <!-- jQuery Easing -->
    <script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
    <!-- Bootstrap -->
    {{--
    <script src="js/bootstrap.min.js"></script> --}}
    <!-- Waypoints -->
    <script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
    <!-- Flexslider -->
    <script src="{{asset('js/jquery.flexslider-min.js')}}"></script>

    <!-- MAIN JS -->
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script>

</body>

</html>