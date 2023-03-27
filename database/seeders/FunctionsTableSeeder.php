<?php

namespace Database\Seeders;

use App\Models\Functions;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FunctionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $functions= new Functions();
        $functions->name_function = "admin";
        $functions->save();

        $functions= new Functions();
        $functions->name_function = "moderateur";
        $functions->save();

        $functions= new Functions();
        $functions->name_function = "client";
        $functions->save();
    }
}
