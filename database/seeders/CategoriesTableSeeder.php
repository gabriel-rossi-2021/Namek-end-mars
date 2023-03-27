<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorie= new Category();
        $categorie->name_category = "Plantes CBD";
        $categorie->description_category = "Nos fleurs et nos résines sont issues d’une culture respectueuse de l’environnement et du consommateur, garanties sans pesticides ni fongicides. ";
        $categorie->image_category = "catPlantesGris.jpeg";
        $categorie->image_category_no_bg = "catPlantes.png";
        $categorie->save();

        $categorie= new Category();
        $categorie->name_category = "Huiles CBD";
        $categorie->description_category = "Nos extraits sont les méthodes les plus couramment utilisées pour ajouter du CBD de haute qualité à votre routine quotidienne ! Nous n’utilisons que du chanvre biologique 100% naturel et les huiles de support les plus puissantes du marché pour nous assurer que nous vous offrons la meilleure expérience possible !";
        $categorie->image_category = "catHuilesGris.jpeg";
        $categorie->image_category_no_bg = "catHuile.png";
        $categorie->save();

        $categorie= new Category();
        $categorie->name_category = "Bonbons CBD";
        $categorie->description_category = "Nos bonbons au CBD de qualité supérieure sont la façon la plus délicieuse et la plus agréable d’ajouter du CBD de haute qualité à votre routine quotidienne !";
        $categorie->image_category = "catBonbonGris.jpeg";
        $categorie->image_category_no_bg = "catBonbons.png";
        $categorie->save();
    }
}
