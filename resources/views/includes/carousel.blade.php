
<!-- Carousel
================================================== -->
<div id="myCarousel" class="carousel" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <!--
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        -->
    </ol>
    <div class="carousel-inner">
        <div class="item active">
            <img class="first-slide" src="/images/auto.jpg" >
            <div class="container">
                <div class="carousel-caption">
                    <h1 style="color: #F5F5F5">
                        <a style="text-decoration: none" href="" class="typewrite" data-period="2000"
                            data-type='[ "Bonjour, ici vous pouvez souscrire à un contrat d&apos;assurance"
                                       , "chez tous les assureurs du marché"
                                       , " et vous pouvez vous faire livrer votre attestation."
                                       , "Alors ne perdez plus de temps, cliquez juste en bas !" ]'>
                            <span class="wrap"></span>
                        </a>


                    </h1>

                    <div class="btn" style="width:300px;background-color:transparent;border:2px solid #FFB74D;color: #FFB74D;font-weight: 100">Souscrivez !</div>


                </div>
            </div>
        </div>
        <!--
        <div class="item">
            <img class="first-slide" src="/images/auto.jpg" >
            <div class="container">
                <div class="carousel-caption">
                    <h2>Choisissez votre assureur</h2>
                    <p>
                        Vous retrouverez ici tous les assureurs ainsi choisissez votre produit,ensuite<br>
                    </p>
                </div>
            </div>
        </div>
        <div class="item" >
            <img class="first-slide" src="/images/auto.jpg" >
            <div class="container">
                <div class="carousel-caption">
                    <h2>Souscrivez à une offre assurance</h2>
                    <p>Paiement digital et possibilite de livraison des attestations<br>
                </div>
            </div>
        </div>
        -->
        <div class="row featurette" id="poster">
            <form action="" method="post" class="form-inline" style="text-align: center">
                <div class="form-group">
                    <select name="besoin" class="form-control" style="width:400px;height:46px;border-color: #2ca02c;background-color: transparent;color:orange " >
                        <option>Selectionnez votre besoin</option>
                        <option>Assurance auto</option>
                        <option>Assurance habitation</option>
                    </select>

                    <select name="besoin" class="form-control" style="width:400px;height:46px;border-color: #2ca02c;background-color: transparent ;color:orange";>
                        <option>Selectionnez votre ville</option>
                        <option>Agboville</option>
                        <option>Guiglo</option>
                    </select>

                </div>
                <div class="form-group">
                    <button type="submit" name="valider" class="form-control" style="width:300px;background-color:transparent;border-color: #2ca02c;color: white">valider</button>
                </div>
            </form>
        </div>
    </div>
</div>
