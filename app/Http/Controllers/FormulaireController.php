<?php

namespace LiiarAuto\Http\Controllers;

use Illuminate\Http\Request;

use LiiarAuto\Http\Controllers\Assurance\Base\PrimesBrutesController as PB;
use LiiarAuto\Http\Controllers\Assurance\Assureurs\Sunu\PrimesFractionneesController as PF;
use LiiarAuto\Http\Controllers\Assurance\Assureurs\Sunu\PrimesNettesController as PN;
use LiiarAuto\Http\Controllers\Assurance\Assureurs\Sunu\BilanController as Bilan;

class FormulaireController extends Controller
{
    protected $data;
    protected $primesBrutes;
    protected $primesFractionnees;
    protected $primesNettes;
    protected $bilan;

    public function __construct()
    {
        $this->primesBrutes = new PB();
        $this->primesFractionnees = new PF();
        $this->primesNettes = new PN();
        $this->data = array();
        $this->bilan = new Bilan();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('formulaire');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categorie = $request['vehicule']['categorie'];
        $puissance = $request['vehicule']['puissance'];
        $energie = $request['vehicule']['energie'];
        $valeurV = $request['vehicule']['valeur_venale'];
        $valeurN = $request['vehicule']['valeur_neuve'];
        $zone = $request['vehicule']['zone'];
        $nbMois = $request['contrat']['periodicite'];
        $nbPersonnes = $request['vehicule']['nombre_places_assises'];
        $chargeUtile = 20;

        $this->data['contrat'] = $request['contrat'];
        $this->data['vehicule'] = $request['vehicule'];
        $this->data['souscripteur'] = $request['souscripteur'];
        $this->data['garantie'] = $request['garantie'];
        //$this->bilan['somme_primes_fractionnees'] = 0;
        //$this->bilan['somme_primes_nettes'] = 0;

        if(isset($request['garantie']['rc']))
        {
            $r['garantie'] = "Responsabilité civile";
            $r['brute'] = $this->primesBrutes->rC($categorie,$puissance,$energie,$chargeUtile,$nbPersonnes,$zone);
            $r['fractionnee'] = $this->primesFractionnees->rC($categorie,$puissance,$energie,$chargeUtile,$nbPersonnes,$zone,$nbMois);
            $r['nette'] = $this->primesNettes->rC($r['fractionnee'],0.05,0,0.2);
            $this->bilan->sommeFractionnee($r['fractionnee']);
            $this->bilan->sommeNette($r['nette']);
            $this->bilan->setFga($r['nette']);
            $this->data['garanties']['rc'] = $r;
        }

        if(isset($request['garantie']['bris_glaces']))
        {
            $r['garantie'] = "Bris de glaces";
            $r['brute'] = $this->primesBrutes->brisDeGlaces($categorie,$valeurN);
            $r['fractionnee'] = $this->primesFractionnees->brisDeGlaces($categorie,$valeurN,$nbMois);
            $r['nette'] = $this->primesNettes->brisDeGlaces($r['fractionnee'],0.05,0.2,0.2,0.05);
            $this->bilan->sommeFractionnee($r['fractionnee']);
            $this->bilan->sommeNette($r['nette']);
            $this->data['garanties']['bris_glace'] = $r;
        }

        if(isset($request['garantie']['incendie']))
        {
            $r['garantie'] = "Incendie";
            $r['brute'] = $this->primesBrutes->incendie($categorie,1,$valeurV);
            $r['fractionnee'] = $this->primesFractionnees->incendie($categorie,1,$valeurV,$nbMois);
            $r['nette'] = $this->primesNettes->incendie($r['fractionnee'],0.05,0.2,0.2,0.05);
            $this->bilan->sommeFractionnee($r['fractionnee']);
            $this->bilan->sommeNette($r['nette']);
            $this->data['garanties']['incendie'] = $r;
        }
        
        if(isset($request['garantie']['avance_recours']))
        {
            $r['garantie'] = "Avance sur recours";
            $r['brute'] = $this->primesBrutes->avanceSurRecours();
            $r['fractionnee'] = $this->primesFractionnees->avanceSurRecours($nbMois);
            $r['nette'] = $this->primesNettes->avanceSurRecours($r['fractionnee'],0.05,0.2,0.2,0.05);
            $this->bilan->sommeFractionnee($r['fractionnee']);
            $this->bilan->sommeNette($r['nette']);
            $this->data['garanties']['avance_recours'] = $r;
        }
        
        if(isset($request['garantie']['defense_recours']))
        {
            $r['garantie'] = "Défense et recours";
            $r['brute'] = $this->primesBrutes->defenseEtRecours($categorie);
            $r['fractionnee'] = $this->primesFractionnees->defenseEtRecours($categorie, $puissance, $energie, $chargeUtile, $nbPersonnes, $zone, $nbMois);
            $r['nette'] = $this->primesNettes->defenseEtRecours($r['fractionnee'],0.05,0,0.2);
            $this->bilan->sommeFractionnee($r['fractionnee']);
            $this->bilan->sommeNette($r['nette']);
            $this->data['garanties']['defense_recours'] = $r;
        }

        if(isset($request['garantie']['personnes_transportees']))
        {
            $r['garantie'] = "Personnes transportées";
            $r['brute'] = $this->primesBrutes->indPersonnesTransportees($nbPersonnes, 1);
            $r['fractionnee'] = $this->primesFractionnees->indPersonnesTransportees($nbPersonnes, 1, $nbMois);
            $r['nette'] = $this->primesNettes->indPersonnesTransportees($r['fractionnee']);
            $this->bilan->sommeFractionnee($r['fractionnee']);
            $this->bilan->sommeNette($r['nette']);
            $this->data['garanties']['personnes_transportees'] = $r;
        }
        
        /**
         * Obtention du blian
         */
        $this->bilan->setAccessoires($categorie, $nbMois);
        $this->data['bilan'] = $this->bilan->getBilan();

        /**
         * Resultat final
         */
        $result = $this->data;
        // return $result;
        // return compact('result');
        // return view('devis', $request);
        // return view('devis', compact('result'));
        return view('devis', $result);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
