<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LoginsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // CREATION USER
        $logins = new User();
        $logins->last_name="Rossi";
        $logins->first_name="Gabriel";
        $logins->title="Monsieur";
        $logins->birth_date='2004-04-29';
        $logins->phone_number= 788237818;
        $logins->username= "admin";
        $logins->email= "admin@namekcbd.ch";
        $logins->password= "Admin2023";
        $logins->function_id=1;
        $logins->address_id=1;
        $logins->getRememberToken();
        $logins->save();

        // CREATION USER
        $logins = new User();
        $logins->last_name="Pilet";
        $logins->first_name="Laetitia";
        $logins->title="Madame";
        $logins->birth_date='2003-09-09';
        $logins->phone_number= 785647346;
        $logins->username= "lpilet";
        $logins->email= "lpilet@namekcbd.ch";
        $logins->password= "alpha-1";
        $logins->function_id=3;
        $logins->address_id=2;
        $logins->getRememberToken();
        $logins->save();
    }
}
