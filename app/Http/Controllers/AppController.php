<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sauvees;
use App\Models\Sauveteur;
use App\Models\Bateau;

class AppController extends Controller
{
    //
    public function read(Request $req)
    {
    
        $sauveeInit = Sauvees::where('x', $req->x)->first();
        $id_sauvteur= $sauvee->sauveteur_id;
        $sauvteur = Sauveteur::where('id',$id_sauvteur);
        $id_bateau= $sauvteur->bateau_id;
        $bateau = Bateau::where('id',$id_bateau);
        return [$sauvee,$sauvteur,$bateau];

    }
}
