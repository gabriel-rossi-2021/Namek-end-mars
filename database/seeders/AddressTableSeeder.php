<?php

namespace Database\Seeders;

use App\Models\Address;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AddressTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // CREATION ADDRESS 1
        $address= new Address();
        $address->city = "Bussigny";
        $address->NPA = 1030;
        $address->street = "Chemin de Rente";
        $address->street_number = 4;
        $address->country = "Suisse";
        $address->save();

        // CREATION ADDRESS 2
        $address= new Address();
        $address->city = "Bussigny";
        $address->NPA = 1030;
        $address->street = "Avenue St-Germain";
        $address->street_number = 34;
        $address->country = "Suisse";
        $address->save();
    }
}
