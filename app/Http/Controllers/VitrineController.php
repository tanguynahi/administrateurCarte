<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Administrateur;

class VitrineController extends Controller
{
    //
    public function qrcodeView($id)
    {
        $personne = Administrateur::find($id);
        dd("la views de silue:" ,$personne->nom);
    }
}
