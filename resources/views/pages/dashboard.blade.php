@extends('layout.autre_template')
@section('content')
    <div class="row" style="background: #B9F6CA">
        <div class="container">
            <br>
            <div class="col-md-12" >
                <div class="col-md-8" style="font-size: 30px">
                    <p style="margin-left: 30px">
                        <img src="images\user_male2-128.png">

                            
                    </p>

                </div>
                <div class="col-md-4 text-center">
                    <div class="btn-lg btn-default pull-right " style="margin-right:40px;margin-top:40px;width: 190px ">
                        <a href="">
                            <i class="icon-envelope"></i> Messagerie
                        </a>
                    </div>
                </div>
            </div>
            <hr>
        </div>
    </div>




    <hr>

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <!-- Left column -->
                <a href="#"><strong><i class="icon-home"></i> Menu </strong></a>

                <hr>

                <ul class="list-unstyled">
                    <li class="nav-header"> <a href="#" data-toggle="collapse" data-target="#userMenu">
                            <h5>Gestion des contrats<i class="glyphicon glyphicon-chevron-down"></i></h5>
                        </a>
                        <ul class="list-unstyled admin-menu collapse in" id="userMenu">
                            <li class="active"><a href="#" data-target-id="contrat"><i class="icon-search"></i> Voir contrat</a></li>
                                <li><a href="#" data-target-id="contrat"><i class="glyphicon glyphicon-trash"></i> Resilier<span class="badge badge-info">4</span></a></li>
                            <li><a href="#" data-target-id="renouveler"><i class="icon-recycle"></i> Renouveler</a></li>
                        </ul>
                    </li>
                    <li class="nav-header">
                        <a href="#" data-toggle="collapse" data-target="#menu2">
                            <h5>Gestion des sinistres<i class="glyphicon glyphicon-chevron-right"></i></h5>
                        </a>

                        <ul class="list-unstyled collapse" id="menu2">
                            <li><a href="#" ata-target-id="sinistre">Declarer un sinistre</a></li>
                            <li><a href="#" ata-target-id="sinistre">Etat des déclarations</a></li>
                        </ul>
                    </li>
                    <li class="nav-header">
                        <a href="#" data-toggle="collapse" data-target="#menu3">
                            <h5>Gestion du profil<i class="glyphicon glyphicon-chevron-right"></i></h5>
                        </a>

                        <ul class="list-unstyled collapse" id="menu3">
                            <li><a href="#" ata-target-id="profil"><i class="glyphicon glyphicon-circle"></i> Modifier profil</a></li>
                        </ul>
                    </li>
                </ul>

                <hr>

                <a href="#"><strong><i class="glyphicon glyphicon-link"></i> Ressources</strong></a>

                <hr>

                <ul class="nav nav-pills nav-stacked">
                    <li class="nav-header"></li>
                    <li><a href="#"><i class="glyphicon glyphicon-list-alt"></i> Documentation</a></li>
                    <li><a href="#"><i class="glyphicon glyphicon-book"></i> Blog</a></li>
                    <li><a href="#"><i class="glyphicon glyphicon-star"></i> FAQ</a></li>
                </ul>

                <hr>
                <ul class="nav nav-pills nav-stacked">
                    <li class="nav-header"></li>
                    <li><a href="#"><i class="icon-sign-out"></i> Se déconnecter</a></li>
                </ul>

            </div><!-- /col-3 -->
            <div class="col-md-9">

                <!-- column 2 -->
                <ul class="list-inline pull-right">
                    <li><a href="#"><i class="glyphicon glyphicon-cog"></i></a></li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-comment"></i><span class="count">3</span></a><ul class="dropdown-menu" role="menu"><li><a href="#">1. Is there a way..</a></li><li><a href="#">2. Hello, admin. I would..</a></li><li><a href="#"><strong>All messages</strong></a></li></ul></li>
                    <li><a href="#"><i class="glyphicon glyphicon-user"></i></a></li>
                </ul>
                <a href="#"><strong><i class="glyphicon glyphicon-dashboard"></i> Bienvenue chez vous </strong></a>

                <hr>

                <div class="row">
                    <div class="col-md-9 well admin-content" id="home">
                        @include('includes.profil')
                    </div>
                    <div class="col-md-9 well admin-content" id="contrat">
                        @include('includes.contrat')
                    </div>
                    <div class="col-md-9 well admin-content" id="profil">
                        @include('includes.profil')
                    </div>
                    <div class="col-md-9 well admin-content" id="sinistre">
                        @include('includes.sinistre')
                    </div>



                </div><!--/row-->




            </div><!--/col-span-9-->
        </div>
    </div>

    <!-- /Main -->

    <footer class="text-center">This Bootstrap 3 dashboard layout is compliments of <a href="http://www.bootply.com/85850"><strong>Bootply.com</strong></a></footer>


@endsection