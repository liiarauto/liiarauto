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
    <title>SIIN - Auto</title>
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

        #fh5co-page {
            background-color: #dfdddd !important;
        }

        .v {
            margin-bottom: 0px;
        }

        .b-table{
            text-align:right;
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
                            <a href="{{url('/')}}">SII
                                <span>N.</span>
                            </a>
                        </h1>
                        <nav role="navigation">
                            <ul>
                                <li>
                                    <a href="{{url('/')}}">Accueil</a>
                                </li>
                                <li>
                                    <a href="{{url('domaines')}}">Assureurs</a>
                                </li>
                                <li>
                                    <a href="buy.html">Services</a>
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

        <div class="container">
            <div class="row">
                <div class="panel panel-default col-md-4 col-md-offset-2 animate-box" data-animate-effect="fadeIn">
                    <div class="panel-heading">
                        <h3 class="panel-title lead" style="font-weight:bolder">Profil de l'assuré</h3>
                    </div>
                    <div class="panel-body">
                        {{--
                        <p>Gren CISSE Al-Karid</p> --}}
                        <p>{{$souscripteur['nom']}} {{$souscripteur['prenom']}}</p>
                        {{--
                        <p>57947428</p> --}}
                        <p>{{$souscripteur['tel']}}</p>
                        {{--
                        <p>grencisse@gmail.com</p> --}}
                        <p>{{$souscripteur['email']}}</p>
                        {{--
                        <p>
                            <strong>Prodession: </strong>Developpeur</p> --}}
                        <p>
                            <strong>Profession: </strong>{{$souscripteur['profession']}}</p>
                    </div>
                </div>
                <div class="panel panel-default col-md-4 animate-box" data-animate-effect="fadeIn">
                    <div class="panel-heading">
                        <h3 class="panel-title lead" style="font-weight:bolder">Références du contrat</h3>
                    </div>
                    <div class="panel-body">
                        <table class="">
                            <tr>
                                <td>
                                    <p>réf</p>
                                </td>
                                <td>
                                    <p>QAAAAAAAA012S</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Périodicité</p>
                                </td>
                                <td>
                                    <p>{{$contrat['periodicite']}}</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Date de prise d'effet&nbsp;&nbsp;</p>
                                </td>
                                <td>
                                    <p>{{$contrat['date_effet']}}</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Date de fin&nbsp;&nbsp;</p>
                                </td>
                                <td>
                                    <p>{{$contrat['date_effet']}}</p>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-md-8 col-md-offset-2 animate-box" style="padding:0px;border-radius:0px">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        Informations du véhicule
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse " role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                        <table class="table table-condensed" style="border:0px  background-color:#3097d1; ">
                                                <tr style="border:0px">
                                                    <td style="border:0px">Immatriculation du vehicule</td>
                                                    <td style="border:0px">Catégorie/Usage</td>
                                                    <td style="border:0px">Nombre de places assises</td>
                                                </tr>
                                                <tr>
                                                    <td style="border:0px">{{$vehicule['immatriculation']}}</td>
                                                    <td style="border:0px">{{$vehicule['categorie']}}</td>
                                                    <td style="border:0px">{{$vehicule['nombre_places_assises']}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Date de mise en circulaion</td>
                                                    <td>Marque</td>
                                                    <td>Puissance</td>
                                                </tr>
                                                <tr>
                                                    <td style="border:0px">{{$vehicule['date_premiere_mise_circulation']}}</td>
                                                    <td style="border:0px">{{$vehicule['marque']}}</td>
                                                    <td style="border:0px">{{$vehicule['puissance']}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Energie</td>
                                                    <td>Zone</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td style="border:0px">{{$vehicule['energie']}}</td>
                                                    <td style="border:0px">{{$vehicule['zone']}}</td>
                                                </tr>
                                            </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{--  <div class="bg-primary col-md-8 panel panel-primary col-md-offset-2 animate-box" style="background-color:#3097d1; border-radius:0px"
                    data-animate-effect="fadeIn">
                    <div class="panel-heading">
                        <h3 class="panel-title lead" style="font-weight:bolder">Informations du véhicule</h3>
                    </div>
                    <div class="panel-body">
                        <table class="table table-condensed" style="border:0px">
                            <tr style="border:0px">
                                <td>Immatriculation du vehicule</td>
                                <td>Catégorie/Usage</td>
                                <td>Nombre de places assises</td>
                            </tr>
                            <tr>
                                <td style="border:0px">{{$vehicule['immatriculation']}}</td>
                                <td style="border:0px">{{$vehicule['categorie']}}</td>
                                <td style="border:0px">{{$vehicule['nombre_places_assises']}}</td>
                            </tr>
                            <tr>
                                <td>Date de mise en circulaion</td>
                                <td>Marque</td>
                                <td>Puissance</td>
                            </tr>
                            <tr>
                                <td style="border:0px">{{$vehicule['date_premiere_mise_circulation']}}</td>
                                <td style="border:0px">{{$vehicule['marque']}}</td>
                                <td style="border:0px">{{$vehicule['puissance']}}</td>
                            </tr>
                            <tr>
                                <td>Energie</td>
                                <td>Zone</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td style="border:0px">{{$vehicule['energie']}}</td>
                                <td style="border:0px">{{$vehicule['zone']}}</td>

                            </tr>
                        </table>
                    </div>  
                </div>--}}
                <div class="panel panel-default col-md-8 col-md-offset-2 animate-box" data-animate-effect="fadeIn">
                    <div class="panel-heading">
                        <h3 class="panel-title lead" style="font-weight:bolder">Garanties souscrites</h3>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-condensed">
                                <thead>
                                    <tr>
                                        <td>#</td>
                                        <td>Garanties</td>
                                        <td>Franchises</td>
                                        <td>Primes annuelles</td>
                                        <td>Primes périodiques</td>
                                        <td>Primes nettes</td>
                                    </tr>
                                </thead>
                                <?php $i=1 ?> @foreach($garanties as $garantie)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$garantie['garantie']}}</td>
                                    <td>-</td>
                                    <td>{{$garantie['brute']}}</td>
                                    <td>{{$garantie['fractionnee']}}</td>
                                    <td>{{$garantie['nette']}}</td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default col-md-4 col-md-offset-6 animate-box" data-animate-effect="fadeIn">
                        <div class="panel-heading">
                            <h3 class="panel-title lead" style="font-weight:bolder">DECOMPTE DES PRIMES</h3>
                        </div>
                        <div class="panel-body">
                            <table class="" style="width:100%">
                                <tr>
                                    <td>
                                        <p>Prime nette</p>
                                    </td>
                                    <td class="b-table">
                                        <p>{{$bilan['somme_primes_nettes']}}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Accessoires</p>
                                    </td>
                                    <td class="b-table">
                                        <p>{{$bilan['accessoires']}}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Taxes&nbsp;&nbsp;</p>
                                    </td>
                                    <td class="b-table">
                                        <p>{{$bilan['taxes']}}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>FGA&nbsp;&nbsp;</p>
                                    </td>
                                    <td class="b-table">
                                        <p>{{$bilan['fga']}}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>CEDEAO&nbsp;&nbsp;</p>
                                    </td>
                                    <td class="b-table">
                                        <p>{{$bilan['cedeao']}}</p>
                                    </td>
                                </tr>
                                <tr style="font-weight:bolder">
                                    <td>
                                        <p>PRIME TTC&nbsp;&nbsp;</p>
                                    </td>
                                    <td class="b-table">
                                        <p>{{$bilan['primettc']}}</p>
                                    </td>
                                </tr>

                            </table>
                        </div>
                    </div>
                <div class="panel panel-default col-md-8 col-md-offset-2 animate-box" data-animate-effect="fadeIn">
                    <div class="panel-heading">Validation du contrat</div>
                    <div class="panel-body">
                        <div class="warning">
                            <input type="checkbox" name="agree"> J'accepte
                            <a href="http://">les termes du contrat</a>
                        </div>
                        <button type="submit" class="btn btn-primary pull-right">Valider</button>
                    </div>
                </div>
                <div class="col-md-8 col-md-offset-2">
                </div>
            </div>
        </div>
    </div>


    <!-- jQuery -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <!-- jQuery Easing -->
    <script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
    <!-- Bootstrap -->

    <script src="js/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
    <!-- Flexslider -->
    <script src="{{asset('js/jquery.flexslider-min.js')}}"></script>

    <!-- MAIN JS -->
    <script src="{{asset('js/main.js')}}"></script>
    {{--
    <script src="{{asset('js/app.js')}}"></script> --}}

</body>

</html>