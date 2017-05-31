<?php

namespace App\Http\Controllers;

use App\produit;
use Illuminate\Http\Request;

class produitController extends Controller
{

    public function show (){

        $produits = produit::all();
        /*foreach ($produits as $produit){

            echo $produit->name . " : ";
            echo $produit->marque;
            echo "<br>";
        }*/

        return response()->json($produits);
    }

    public function new (){

        $produit = new produit();
        $produit->name="Pc";
        $produit->marque="Dell";

        $produit->save();

    }
    //
}
