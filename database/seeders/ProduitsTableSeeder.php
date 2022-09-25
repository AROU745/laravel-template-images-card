<?php

namespace Database\Seeders;

use App\Models\Produit;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;
use PhpParser\Node\Expr\New_;

class ProduitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $produit = new \App\Models\Produit();
        $produit->nom = "veste5";
        $produit->prix_ht = 29;
        $produit->description = "Veste d'ete";
        $produit->photo_principale = "veste5.jpeg";
        $produit->save();

        $produit = new \App\Models\Produit();
        $produit->nom = "t-shirt sans dessin sois";
        $produit->prix_ht = 15;
        $produit->description = "Personnalisable";
        $produit->photo_principale = "shirt1.jpg";
        $produit->save();

        $produit = new \App\Models\Produit();
        $produit->nom = "t-shirt sans dessin coton";
        $produit->prix_ht = 18;
        $produit->description = "personnalisable";
        $produit->photo_principale = "shirt3.jpg";
        $produit->save();

        $produit = new \App\Models\Produit();
        $produit->nom = "t-shirt sans dessin tissu";
        $produit->prix_ht = 18;
        $produit->description = "Personnalisable";
        $produit->photo_principale = "shirt2.jpg";
        $produit->save();

        $produit = new \App\Models\Produit();
        $produit->nom = "veste6";
        $produit->prix_ht = 25;
        $produit->description = "Veste du riche pologne";
        $produit->photo_principale = "veste6.png";
        $produit->save();

        $produit = new \App\Models\Produit();
        $produit->nom = "veste2";
        $produit->prix_ht = 30;
        $produit->description = "Veste de paris";
        $produit->photo_principale = "veste2.jpg";
        $produit->save();

        $produit = new \App\Models\Produit();
        $produit->nom = "veste3";
        $produit->prix_ht = 32;
        $produit->description = "Veste d'itali";
        $produit->photo_principale = "veste3.jpg";
        $produit->save();

        $produit = new \App\Models\Produit();
        $produit->nom = "veste4";
        $produit->prix_ht = 34;
        $produit->description = "Veste louis vuitton";
        $produit->photo_principale = "veste4.jpg";
        $produit->save();

        $produit = new \App\Models\Produit();
        $produit->nom = "veste7";
        $produit->prix_ht = 39;
        $produit->description = "Veste louis Cordland";
        $produit->photo_principale = "veste7.jpg";
        $produit->save();
    }
}
