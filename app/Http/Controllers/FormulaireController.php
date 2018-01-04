<?php

namespace LiiarAuto\Http\Controllers;

use Illuminate\Http\Request;

use LiiarAuto\Http\Controllers\Assurance\PrimesBrutesController as PB;
use LiiarAuto\Http\Controllers\Assurance\PrimesFractionneesController as PF;

class FormulaireController extends Controller
{
    protected $data;
    protected $primesBrutes;
    protected $primesFractionnees;

    public function __construct()
    {
        $this->primesBrutes = new PB();
        $this->primesFractionnees = new PF();
        $this->data = array();
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
        $zone = $request['vehicule']['zone'];
        $nbMois = $request['contrat']['periodicite'];
        $nbPersonnes = $request['vehicule']['nombre_places_assises'];
        $chargeUtile = 20;
        $data = array();

        $this->data['contrat'] = $request['contrat'];
        $this->data['vehicule'] = $request['vehicule'];
        $this->data['souscripteur'] = $request['souscripteur'];
        $this->data['garantie'] = $request['garantie'];
        // return compact('request');
        // return $request;
        if($request['garantie']['rc']=="on")
        {
            $r['brute'] = $this->primesBrutes->rC($categorie,$puissance,$energie,$chargeUtile,$nbPersonnes,$zone);
            $r['fractionnee'] = $this->primesFractionnees->rC($categorie,$puissance,$energie,$chargeUtile,$nbPersonnes,$zone,$nbMois);
            $this->data['garanties']['rc'] = $r;
            // return $r;
            // return compact('result');
        }
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
