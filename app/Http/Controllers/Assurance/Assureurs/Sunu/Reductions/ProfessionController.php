<?php

namespace LiiarAuto\Http\Controllers\Assurance\Assureurs\Sunu\Reductions;

use Illuminate\Http\Request;

class ProfessionController extends Controller
{
    public function rC($rcFractionnee, $redProfession)
    {
        return ceil($rcFractionnee*$redProfession);
    }

    public function defenseEtRecours($drFractionnee, $redProfession)
    {
        return ceil($drFractionnee*$redProfession);
    }

    public function incendie($incendieFractionnee, $redProfession)
    {
        return ceil($incendieFractionnee*$redProfession);
    }

    public function volVolAgressionEtVolAccessoires($volFractionnee, $redProfession)
    {
        return ceil($volFractionnee*$redProfession);
    }

    public function brisDeGlaces($brisFracrionnee, $redProfession)
    {
        return ceil($brisFracrionnee*$redProfession);
    }
}
