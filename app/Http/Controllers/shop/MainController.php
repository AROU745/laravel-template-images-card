<?php

namespace App\Http\Controllers\shop;

use App\Http\Controllers\Controller;
use App\Models\Produit;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        //SELECT * FROM produits;
        $produits = Produit::all();
        //dd($produits);
        //echo "text";
        return view('shop.index', ['produits' => $produits]);
    }
}
