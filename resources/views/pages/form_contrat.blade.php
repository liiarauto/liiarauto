@extends('layout.autre_template')
@section('content')

<div class="container">
    <div class="col-md-12">

        <section>
            <div class="wizard">
                <div class="wizard-inner">
                    <div class="connecting-line"></div>
                    <ul class="nav nav-tabs" role="tablist">

                        <li role="presentation" class="active">
                            <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                            <span class="round-tab">
                                1
                            </span>
                            </a>
                        </li>

                        <li role="presentation" class="disabled">
                            <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                            <span class="round-tab">
                                2
                            </span>
                            </a>
                        </li>
                        <li role="presentation" class="disabled">
                            <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
                            <span class="round-tab">
                                3
                            </span>
                            </a>
                        </li>

                        <li role="presentation" class="disabled">
                            <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
                            <span class="round-tab">
                                4
                            </span>
                            </a>
                        </li>
                    </ul>
                </div>

                <form role="form">
                    <div class="text-center">
                        <br>
                        <h3>Formulaire de souscription auto</h3>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane active" role="tabpanel" id="step1">
                            <div class="step1">
                                <div class="container">
                                    <div class="row">
                                        <div class="panel panel-default col-md-8 col-md-offset-2 animate-box" data-animate-effect="fadeIn">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">Profil de l'assuré</h3>
                                            </div>
                                            <div class="panel-body">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="input-group col-md-12">
                                                            <label for="firstname">Nom</label>
                                                            <input name="souscripteur[nom]" type="text" class="form-control firstname">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="input-group col-md-12">
                                                            <label for="lastname">Prenom</label>
                                                            <input name="souscripteur[prenom]" type="text" class="form-control lastname">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="input-group col-md-12">
                                                            <label for="sexe">Sexe</label>
                                                            <select name="souscripteur[sexe]" id="" class="form-control">
                                                                <option value="m">Homme</option>
                                                                <option value="f">Femme</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="input-group col-md-12">
                                                            <label for="date">Date de naissance</label>
                                                            <input type="date" name="souscripteur[date_de_naissance]" class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="input-group col-md-12">
                                                            <label for="tel">Téléphone</label>
                                                            <input name="souscripteur[tel]" type="tel" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="input-group col-md-12">
                                                            <label for="email">Email</label>
                                                            <input name="souscripteur[email]" type="email" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="input-group col-md-12">
                                                            <label for="profession">Profession</label>
                                                            <select name="souscripteur[profession]" id="" class="form-control">
                                                                <option value="Agent commercial">Agent commercial</option>
                                                                <option value="Agent de recouvrement">Agent de recouvrement</option>
                                                                <option value="Agriculteur">Agriculteur</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="input-group col-md-12">
                                                            <label for="date">Vous avez eu votre permis en</label>
                                                            <input type="date" name="souscripteur[annee_permis]" id="" class="form-control" />

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="list-inline pull-right">
                                <li><button type="button" class="btn btn-primary next-step">Suivant</button></li>
                            </ul>
                        </div>
                        <div class="tab-pane" role="tabpanel" id="step2">
                            <div class="step2">

                                <div class="container">
                                    <div class="col-md-12">
                                        <div class="panel panel-default col-md-8 col-md-offset-2 animate-box" data-animate-effect="fadeIn">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">Le Véhicule</h3>
                                            </div>
                                            <div class="panel-body">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="ivplate">Immatriculation du véhicule</label>
                                                        <div class="input-group col-md-12">
                                                            <input name="vehicule[immatriculation]" type="text" class="form-control ivplate">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="input-group col-md-12">
                                                            <label for="categorie">Catégorie/Usage</label>
                                                            <select name="vehicule[categorie]" id="" class="form-control">
                                                                <option value="1">Promenade et affaires</option>
                                                                <option value="2">Location</option>
                                                                <option value="3">Véhicules de société</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="number">Nombre de place assises</label>
                                                        <div class="input-group col-md-12">
                                                            <input name="vehicule[nombre_places_assises]" type="number" class="form-control number">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="date">Date de la premiere mise en circulation</label>
                                                        <div class="input-group col-md-12">
                                                            <input name="vehicule[date_premiere_mise_circulation]" type="date" class="form-control ivplate">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="ivplate">Marque</label>
                                                        <div class="input-group col-md-12">
                                                            <label for="marque"></label>
                                                            <select name="vehicule[marque]" id="" class="form-control">
                                                                <option value="Mercedes">Mercedes</option>
                                                                <option value="Toyota">Toyota</option>
                                                                <option value="BMW">BMW</option>
                                                                <option value="Audi">Audi</option>
                                                                <option value="Dacia">Dacia</option>
                                                                <option value="Ford">Ford</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="input-group col-md-12">
                                                            <label for="puissance">Puissance fiscale</label>
                                                            <select name="vehicule[puissance]" id="" class="form-control">
                                                                <option value="1">1 CV</option>
                                                                <option value="2">2 CV</option>
                                                                <option value="3">3 CV</option>
                                                                <option value="4">4 CV</option>
                                                                <option value="5">5 CV</option>
                                                                <option value="6">6 CV</option>
                                                                <option value="7">7 CV</option>
                                                                <option value="8">8 CV</option>
                                                                <option value="9">9 CV</option>
                                                                <option value="10">10 CV</option>
                                                                <option value="12">11 CV</option>
                                                                <option value="13">12 CV</option>
                                                                <option value="14">+ de 12 CV</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="input-group col-md-12">
                                                            <label for="vehicule[energie]">Energie</label>
                                                            <select name="vehicule[energie]" class="form-control">
                                                                <option value="E">Essence</option>
                                                                <option value="D">Diesel</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="input-group col-md-12">
                                                            <label for="zone">Zone de circulaion</label>
                                                            <select name="vehicule[zone]" class="form-control">
                                                                <option value="1">Zone 1</option>
                                                                <option value="2">Zone 2</option>
                                                                <option value="3">Zone 3</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="date">Charge utile</label>
                                                        <div class="input-group col-md-12">
                                                            <input name="vehicule[charge_utile]" type="number" class="form-control ivplate">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="list-inline pull-right">
                                <li><button type="button" class="btn btn-default prev-step">Retoour</button></li>
                                <li><button type="button" class="btn btn-primary next-step">Suivant</button></li>
                            </ul>
                        </div>

                        <div class="tab-pane" role="tabpanel" id="step3">
                            <div class="step44">
                                <div class="container">
                                    <div class="row">
                                        <div class="panel panel-default col-md-8 col-md-offset-2 animate-box" data-animate-effect="fadeIn">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">Le Contrat</h3>
                                            </div>
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <label for="date">Date de prise d'effet</label>
                                                    <div class="input-group col-md-12">
                                                        <input name="contrat[date_effet]" type="date" class="form-control" placeholder="Username" aria-describedby="sizing-addon1">
                                                    </div>

                                                </div>
                                                <div class="form-group">
                                                    <label for="date">Périodicité</label>
                                                    <div class="input-group">
                                                        <select name="contrat[periodicite]" id="" class="form-control">
                                                            <option value="1">Annuelle</option>
                                                            <option value="2">Mensuelle</option>
                                                            <option value="3">Trimestrielle</option>
                                                            <option value="4">Semestrielle</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                </div>
                            </div>
                            <ul class="list-inline pull-right">
                                <li><button type="button" class="btn btn-default prev-step">Retour</button></li>
                                <li><button type="button" class="btn btn-primary btn-info-full next-step">Suivant</button></li>
                            </ul>
                        </div>
                        <div class="tab-pane" role="tabpanel" id="complete">
                            <div class="step44">
                                <div class="container">
                                    <div class="row">
                                        <div class="panel panel-default col-md-8 col-md-offset-2 animate-box" data-animate-effect="fadeIn">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">Les Garanties</h3>
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <div class="input-group">
                                        <span class="input-group-addon">
                                            <input name="garantie[rc]" type="checkbox" class="bg-blue" checked disabled>
                                            <input name="garantie[rc]" type="hidden" value="on">
                                        </span>
                                                                <input type="text" class="form-control" value="Responsabilité civile" disabled>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <div class="input-group">
                                        <span class="input-group-addon">
                                            <input name="garantie[vol]" type="checkbox" aria-label="...">
                                        </span>
                                                                <input type="text" class="form-control" value="Vol" disabled>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <div class="input-group">
                                        <span class="input-group-addon">
                                            <input name="garantie[bris_glace]" type="checkbox" aria-label="...">
                                        </span>
                                                                <input type="text" class="form-control" value="Bris de glace" disabled>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <div class="input-group">
                                        <span class="input-group-addon">
                                            <input name="garantie[vol_main_armee]" type="checkbox" aria-label="...">
                                        </span>
                                                                <input type="text" class="form-control" value="Vol à mains armées" disabled>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <div class="input-group">
                                        <span class="input-group-addon">
                                            <input type="checkbox" aria-label="...">
                                        </span>
                                                                <input type="text" class="form-control" value="Responsabilité civile" disabled>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <div class="input-group">
                                        <span class="input-group-addon">
                                            <input type="checkbox" aria-label="...">
                                        </span>
                                                                <input type="text" class="form-control" value="Responsabilité civile" disabled>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <div class="input-group">
                                        <span class="input-group-addon">
                                            <input type="checkbox" aria-label="...">
                                        </span>
                                                                <input type="text" class="form-control" value="Responsabilité civile" disabled>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
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

                            </div>
                            <ul class="list-inline pull-right">
                                <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                                <li><button type="button" class="btn btn-primary btn-info-full next-step">Valider</button></li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </form>
            </div>
        </section>
    </div>
</div>
@endsection