<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // CREATION PRODUITS
        $produit = new Product();
        $produit->name_product = "Lemon Haze";
        $produit->description = "Namek vous propose cette fabuleuse lemon haze fruitée, puissante et fraîche avec de très belles têtes.";
        $produit->image_product= "LemonHaze.png";
        $produit->size = 3;
        $produit->thc_rate = 1;
        $produit->cbd_rate = 26;
        $produit->culture = "intérieur";
        $produit->price_ht = 18.570;
        $produit->available = 6;
        $produit->category_id = 1;
        $produit->save();

        // CREATION PRODUITS
        $produit = new Product();
        $produit->name_product = "24K";
        $produit->description = "Namek vous propose cette incroyable 24k fruitée au goût d'agrumes avec de subtiles notes épicées et de belles têtes résineuses. Cette variété vous offrira un parfait mélange d'arômes entre le fruité et l'épicé.";
        $produit->image_product= "24K.png";
        $produit->size = 3;
        $produit->thc_rate = 1;
        $produit->cbd_rate = 24;
        $produit->culture = "intérieur";
        $produit->price_ht = 18.570;
        $produit->available = 10;
        $produit->category_id = 1;
        $produit->save();

        // CREATION PRODUITS
        $produit = new Product();
        $produit->name_product = "Amnezia";
        $produit->description = "Namek vous propose cette magnifique Amnesia au goût épicé avec d'étonnantes notes poivrées et de pain d'épices avec un subtile goût de noisettes en fin de bouche.";
        $produit->image_product= "Amnezia.png";
        $produit->size = 3;
        $produit->thc_rate = 1;
        $produit->cbd_rate = 28;
        $produit->culture = "intérieur";
        $produit->price_ht = 18.570;
        $produit->available = 12;
        $produit->category_id = 1;
        $produit->save();

        // CREATION PRODUITS
        $produit = new Product();
        $produit->name_product = "Gelato";
        $produit->description = "Namek vous propose cette divine Gelato fruitée, douce avec des notes d'agrumes et de mangue bien mûre. Avec de belles têtes résineuses et parfaitement manucurées, cette variété vous offrira des arômes puissants en bouche ainsi qu'un effet très relaxant.";
        $produit->image_product= "Gelato.png";
        $produit->size = 3;
        $produit->thc_rate = 1;
        $produit->cbd_rate = 25;
        $produit->culture = "intérieur";
        $produit->price_ht = 18.570;
        $produit->available = 22;
        $produit->category_id = 1;
        $produit->save();

        // CREATION PRODUITS
        $produit = new Product();
        $produit->name_product = "Moon Rock";
        $produit->description = "Namek vous propose cette Moon Rock, La fleur de cannabis CBD Moonrock est une variété de chanvre avec des notes florales prononcées. Ses qualités et ses effets rapides, elle les tient de sa préparation méticuleuse. La fleur est d’abord trempée dans de l’extraction de cannabidiol avant d’être mise dans du pollen.";
        $produit->image_product= "MoonRock.png";
        $produit->size = 3;
        $produit->thc_rate = 1;
        $produit->cbd_rate = 22;
        $produit->culture = "intérieur";
        $produit->price_ht = 20.330;
        $produit->available = 11;
        $produit->category_id = 1;
        $produit->save();

        // CREATION PRODUITS
        $produit = new Product();
        $produit->name_product = "OG Kush";
        $produit->description = "Namek vous propose cette OG Kush. est de la plus haute qualité et dégage des arômes exquis et un parfum impressionnant qui remplit immédiatement la pièce lorsque le sac est ouvert.";
        $produit->image_product= "OGKush.png";
        $produit->size = 3;
        $produit->thc_rate = 1;
        $produit->cbd_rate = 20;
        $produit->culture = "intérieur";
        $produit->price_ht = 18.570;
        $produit->available = 10;
        $produit->category_id = 1;
        $produit->save();

        /* PRODUIT RESINES */

        // CREATION PRODUITS
        $produit = new Product();
        $produit->name_product = "Bubble Gum";
        $produit->description = "Son toucher est collant, ses arômes sont généreux tout comme la maturité des trichromes qui laissent place à des saveurs de chewing gum, offrant une résine CBD d’exception";
        $produit->image_product= "BubbleGum.png";
        $produit->size = 3;
        $produit->thc_rate = 1;
        $produit->cbd_rate = 16;
        $produit->culture = "Namek";
        $produit->price_ht = 14.760;
        $produit->available = 11;
        $produit->category_id = 1;
        $produit->save();

        // CREATION PRODUITS
        $produit = new Product();
        $produit->name_product = "Royal Straw";
        $produit->description = "Un bouquet composé de trichomes qui offrent douceurs fruitées avec un toucher gras et mousseux.";
        $produit->image_product= "RoyalStraw.png";
        $produit->size = 3;
        $produit->thc_rate = 1;
        $produit->cbd_rate = 16;
        $produit->culture = "Namek";
        $produit->price_ht = 14.760;
        $produit->available = 8;
        $produit->category_id = 1;
        $produit->save();

        // CREATION PRODUITS
        $produit = new Product();
        $produit->name_product = "Black Afghan";
        $produit->description = "Namek vous propose ce surprenant Hash, fabriqué artisanalement en Suisse par un maître du Haschish, il est d'habitude impossible d'obtenir un taux aussi élevé de CBD naturellement. ";
        $produit->image_product= "BlackAfghan.png";
        $produit->size = 3;
        $produit->thc_rate = 1;
        $produit->cbd_rate = 33;
        $produit->culture = "Namek";
        $produit->price_ht = 14.760;
        $produit->available = 5;
        $produit->category_id = 1;
        $produit->save();

        // CREATION PRODUITS
        $produit = new Product();
        $produit->name_product = "Caramelo";
        $produit->description = "Bien équilibrée, ses saveurs sont joueuses mais difficiles à nommer tel le caramel. Le Caramelo est une référence parmi nos meilleures ventes de résines CBD.";
        $produit->image_product= "Caramelo.png";
        $produit->size = 3;
        $produit->thc_rate = 1;
        $produit->cbd_rate = 10;
        $produit->culture = "Namek";
        $produit->price_ht = 16.620;
        $produit->available = 6;
        $produit->category_id = 1;
        $produit->save();

        // CREATION PRODUITS
        $produit = new Product();
        $produit->name_product = "Lemon Kush";
        $produit->description = "Par son odeur citronnée, la fleur de CBD Lemon Kush justifie son nom et sa réputation. À la fois Indica et Sativa, elle possède une apparence marquée par sa couleur camaïeu vert et ses têtes denses. Son goût acidulé assure une expérience agréable, en plus de ses vertus relaxantes.";
        $produit->image_product= "LemonKush.png";
        $produit->size = 3;
        $produit->thc_rate = 1;
        $produit->cbd_rate = 10;
        $produit->culture = "Namek";
        $produit->price_ht = 16.620;
        $produit->available = 13;
        $produit->category_id = 1;
        $produit->save();

        // CREATION PRODUITS
        $produit = new Product();
        $produit->name_product = "Marocain Gold";
        $produit->description = "Ce hashish ressemble en tout point à son cousin marocain thc. Pour beaucoup, c'est l'un des meilleurs du marché grâce à sa haute qualité et à son goût unique.";
        $produit->image_product= "MarocainGold.png";
        $produit->size = 3;
        $produit->thc_rate = 1;
        $produit->cbd_rate = 40;
        $produit->culture = "Namek";
        $produit->price_ht = 16.620;
        $produit->available = 22;
        $produit->category_id = 1;
        $produit->save();

        /* HUILE */
        // CREATION PRODUITS
        $produit = new Product();
        $produit->name_product = "Spectrum 5%";
        $produit->description = "Cette huile est purifiée et exempte de chlorophylle et a donc un goût très doux. Notre formule contient également des terpènes naturels pour un effet d’entourage maximal !";
        $produit->image_product= "Huile5.png";
        $produit->size = 10;
        $produit->thc_rate = 0.05;
        $produit->cbd_rate = 5;
        $produit->culture = "Namek";
        $produit->price_ht = 23.120;
        $produit->available = 5;
        $produit->category_id = 2;
        $produit->save();

        // CREATION PRODUITS
        $produit = new Product();
        $produit->name_product = "Spectrum 10%";
        $produit->description = "Cette huile est purifiée et exempte de chlorophylle et a donc un goût très doux. Notre formule contient également des terpènes naturels pour un effet d’entourage maximal !";
        $produit->image_product= "Huile10.png";
        $produit->size = 10;
        $produit->thc_rate = 0.05;
        $produit->cbd_rate = 10;
        $produit->culture = "Namek";
        $produit->price_ht = 37.050;
        $produit->available = 3;
        $produit->category_id = 2;
        $produit->save();

        // CREATION PRODUITS
        $produit = new Product();
        $produit->name_product = "Spectrum 15%";
        $produit->description = "Cette huile est purifiée et exempte de chlorophylle et a donc un goût très doux. Notre formule contient également des terpènes naturels pour un effet d’entourage maximal !";
        $produit->image_product= "Huile15.png";
        $produit->size = 10;
        $produit->thc_rate = 0.05;
        $produit->cbd_rate = 15;
        $produit->culture = "Namek";
        $produit->price_ht = 55.620;
        $produit->available = 7;
        $produit->category_id = 2;
        $produit->save();

        /* CBN */
        // CREATION PRODUITS
        $produit = new Product();
        $produit->name_product = "Huile CBN 2.5%";
        $produit->description = "Comme l’huile de CBD et de CBG, l’huile de CBN ne provoque pas le « high » typique associé au cannabis. Notre huile CBN à spectre complet est hautement purifiée et a donc un goût de graines de chanvre très doux. En raison de la purification, toute la chlorophylle a été éliminée, laissant une huile de couleur jaune clair.";
        $produit->image_product= "CBN2-5.png";
        $produit->size = 10;
        $produit->thc_rate = 0.05;
        $produit->cbd_rate = 2.5;
        $produit->culture = "Namek";
        $produit->price_ht = 27.760;
        $produit->available = 2;
        $produit->category_id = 2;
        $produit->save();

        // CREATION PRODUITS
        $produit = new Product();
        $produit->name_product = "Huile CBN 5%";
        $produit->description = "Comme l’huile de CBD et de CBG, l’huile de CBN ne provoque pas le « high » typique associé au cannabis. Notre huile CBN à spectre complet est hautement purifiée et a donc un goût de graines de chanvre très doux. En raison de la purification, toute la chlorophylle a été éliminée, laissant une huile de couleur jaune clair.";
        $produit->image_product= "CBN5.png";
        $produit->size = 10;
        $produit->thc_rate = 0.05;
        $produit->cbd_rate = 5;
        $produit->culture = "Namek";
        $produit->price_ht = 37.050;
        $produit->available = 11;
        $produit->category_id = 2;
        $produit->save();

        // CREATION PRODUITS
        $produit = new Product();
        $produit->name_product = "Huile CBN 10%";
        $produit->description = "Comme l’huile de CBD et de CBG, l’huile de CBN ne provoque pas le « high » typique associé au cannabis. Notre huile CBN à spectre complet est hautement purifiée et a donc un goût de graines de chanvre très doux. En raison de la purification, toute la chlorophylle a été éliminée, laissant une huile de couleur jaune clair.";
        $produit->image_product= "CBN10.png";
        $produit->size = 10;
        $produit->thc_rate = 0.05;
        $produit->cbd_rate = 10;
        $produit->culture = "Namek";
        $produit->price_ht = 55.620;
        $produit->available = 11;
        $produit->category_id = 2;
        $produit->save();



        /* BONBON */

        // CREATION PRODUITS
        $produit = new Product();
        $produit->name_product = "Bonbon - Myrtille";
        $produit->description = "Nos gommes Vegan CBD à la myrtille sont des édibles de première qualité et vous offrent un moyen amusant et facile d'obtenir du CBD à spectre complet de haute qualité dans le cadre de votre routine quotidienne !";
        $produit->image_product= "Myrtille.png";
        $produit->size = 50;
        $produit->thc_rate = 1;
        $produit->cbd_rate = 10;
        $produit->culture = "Namek";
        $produit->price_ht = 12.5;
        $produit->available = 3;
        $produit->category_id = 3;
        $produit->save();

        // CREATION PRODUITS
        $produit = new Product();
        $produit->name_product = "Bonbon - Framboise ";
        $produit->description = "Nos gommes Vegan CBD à la framboise sont des édibles de première qualité et vous offrent un moyen amusant et facile d'obtenir du CBD à spectre complet de haute qualité dans le cadre de votre routine quotidienne !";
        $produit->image_product= "Framboise.png";
        $produit->size = 50;
        $produit->thc_rate = 1;
        $produit->cbd_rate = 10;
        $produit->culture = "Namek";
        $produit->price_ht = 11.610;
        $produit->available = 5;
        $produit->category_id = 3;
        $produit->save();

        // CREATION PRODUITS
        $produit = new Product();
        $produit->name_product = "Bonbon - Banane ";
        $produit->description = "Nos gommes Vegan CBD à la bananae sont des édibles de première qualité et vous offrent un moyen amusant et facile d'obtenir du CBD à spectre complet de haute qualité dans le cadre de votre routine quotidienne !";
        $produit->image_product= "Banane.png";
        $produit->size = 50;
        $produit->thc_rate = 1;
        $produit->cbd_rate = 10;
        $produit->culture = "Namek";
        $produit->price_ht = 11.610;
        $produit->available = 5;
        $produit->category_id = 3;
        $produit->save();

        // CREATION PRODUITS
        $produit = new Product();
        $produit->name_product = "Bonbon - Pomme ";
        $produit->description = "Nos gommes Vegan CBD à la pomme sont des édibles de première qualité et vous offrent un moyen amusant et facile d'obtenir du CBD à spectre complet de haute qualité dans le cadre de votre routine quotidienne !";
        $produit->image_product= "Pomme.png";
        $produit->size = 50;
        $produit->thc_rate = 1;
        $produit->cbd_rate = 10;
        $produit->culture = "Namek";
        $produit->price_ht = 11.610;
        $produit->available = 5;
        $produit->category_id = 3;
        $produit->save();

    }
}
