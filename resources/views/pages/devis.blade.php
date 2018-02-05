@extends('layout.autre_template')
@section('content')
        <div class="container">
            <br>
            <div class="row">
                <div class="panel panel-default col-md-4 col-md-offset-2 animate-box" data-animate-effect="fadeIn">
                    <div class="panel-heading">
                        <h3 class="panel-title lead" style="font-weight:bolder">Profil de l'assuré</h3>
                    </div>
                    <div class="panel-body">
                        {{--  <p>Gren CISSE Al-Karid</p>  --}}
                        <p>{{$souscripteur['nom']}} {{$souscripteur['prenom']}}</p>
                        {{--  <p>57947428</p>  --}}
                        <p>{{$souscripteur['tel']}}</p>
                        {{--  <p>grencisse@gmail.com</p>  --}}
                        <p>{{$souscripteur['email']}}</p>
                        {{--  <p><strong>Prodession: </strong>Developpeur</p>  --}}
                        <p><strong>Prodession: </strong>{{$souscripteur['profession']}}</p>
                    </div>
                </div>
                <div class="panel panel-default col-md-4 animate-box" data-animate-effect="fadeIn">
                    <div class="panel-heading">
                        <h3 class="panel-title lead" style="font-weight:bolder">Références du contrat</h3>
                    </div>
                    <div class="panel-body">
                        <table class="">
                            <tr>
                                <td><p>réf</p></td>
                                <td><p>QAAAAAAAA012S</p></td>
                            </tr>
                            <tr>
                                <td><p>Périodicité</p></td>
                                <td><p>{{$contrat['periodicite']}}</p></td>
                            </tr>
                            <tr>
                                <td><p>Date de prise d'effet&nbsp;&nbsp;</p></td>
                                <td><p>{{$contrat['date_effet']}}</p></td>
                            </tr>
                            <tr>
                                <td><p>Date de fin&nbsp;&nbsp;</p></td>
                                <td><p>{{$contrat['date_effet']}}</p></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="bg-primary col-md-8 panel panel-primary col-md-offset-2 animate-box" style="background-color:#3097d1; border-radius:0px" data-animate-effect="fadeIn">
                    <div class="panel-heading">
                        <h3 class="panel-title lead" style="font-weight:bolder">Informations du véhicule</h3>
                    </div>
                    <div class="panel-body">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="ivplate">Immatriculation du véhicule</label>
                                <div class="input-group col-md-12">
                                    <p class="text-default v">{{$vehicule['immatriculation']}}</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="categorie">Catégorie/Usage</label>
                                <div class="input-group col-md-12">
                                    <p class="text-default v">{{$vehicule['categorie']}}</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="number">Nombre de place assises</label>
                                <div class="input-group col-md-12">
                                    <p class="text-default v">{{$vehicule['nombre_places_assises']}}</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="date">Date de prenière mise en circulation</label>
                                <div class="input-group col-md-12">
                                        <p class="text-default v">{{$vehicule['date_premiere_mise_circulation']}}</p>
                                    {{--  <input name="vehicule[date_premiere_mise_circulation]" type="date" class="form-control ivplate">  --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="ivplate">Marque</label>
                                <div class="input-group col-md-12">
                                        <p class="text-default v">{{$vehicule['marque']}}</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="puissance">Puissqnce fiscale</label>
                                <div class="input-group col-md-12">
                                    <p class="text-default v">{{$vehicule['puissance']}}</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="vehicule[energie]">Energie</label>
                                <div class="input-group col-md-12">
                                    <p class="text-default v">{{$vehicule['energie']}}</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="zone">Zone de circulaion</label>
                                <div class="input-group col-md-12">
                                    <p class="text-default v">{{$vehicule['zone']}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                                        <td>Primes périodiaques</td>
                                    </tr>
                                </thead>
                                <tr>
                                    <td>1</td>
                                    <td>Responsabilité civile</td>
                                    <td>-</td>
                                    <td>14659451</td>
                                    <td>14595964</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Responsabilité civile</td>
                                    <td>-</td>
                                    <td>14659451</td>
                                    <td>14595964</td>
                                </tr>
                            </table>
                        </div>
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

@endsection