<?php
/**
 * Created by PhpStorm.
 * User: Cyrille_able
 * Date: 19/02/2018
 * Time: 18:58
 */

namespace LiiarAuto\Http\Controllers;


use LiiarAuto\User;

class liiarController extends Controller
{

    public function dashboard($id)
    {
        $user=\Illuminate\Foundation\Auth\User::where('id','=',$id);
        return view('pages/dashboard')->with('user',$user);
    }

    public function formContrat()
    {
        return view('pages/form_contrat');
    }

    public function assureur()
    {
        return view('pages/assureur');
    }

}