<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Administrateur;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $user = User::create([
            "name" => "Admin", // Ajout du champ name
            "email" => "admin@gmail.com",
            "password" => Hash::make('12345678')
        ]);

        // Assigner le rôle
        $user->assignRole('super-administrateur');

        Administrateur::create([
            "user_id" => $user->id,
            "nom" => "Super",
            "prenom" => "Admin",
            "contact" => "0707070707",
            "email" => $user->email,
            "genre" => "Homme",
            "profil" => SA(),
            "adresse" => "Abidjan, Cocody Riviera Palmeraie",
        ]);
    }
}
