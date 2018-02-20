<?php

namespace LiiarAuto\Http\Controllers;

use Illuminate\Http\Request;
use LiiarAuto\Http\Controllers\Assurance\PrimesBrutesController;

class FormulaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $contrat;
    protected $souscripteur;
    protected $vehicule;
    protected $garantie;

    protected $rc;

    public function index()
    {
        return view('pages/formulaire');
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
        $this->rc=new PrimesBrutesController();

        $this->contrat=$request->contrat;
        $this->souscripteur=$request->souscripteur;
        $this->vehicule=$request->vehicule;
        $this->garantie=$request->garantie;

        return view('pages/devis', $request);
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
