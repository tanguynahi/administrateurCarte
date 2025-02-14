<?php

namespace Database\Seeders\permissions;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    $permissions = [
        'Ajouter un admininistrateur',
        'Afficher un admininistrateur',
        'Modifier un admininistrateur',
        'Supprimer un admininistrateur',
        'Ajouter un parametre',
        'Afficher un parametre',
        'Modifier un parametre',
        'Supprimer un parametre',
        'Ajouter un type de compte',
        'Afficher un type de compte',
        'Modifier un type de compte',
        'Supprimer un type de compte',
        'Ajouter un paiement',
        'Afficher un paiement',
        'Modifier un paiement',
        'Supprimer un paiement',
        'Ajouter un type de piece',
        'Afficher un type de piece',
        'Modifier un type de piece',
        'Supprimer un type de piece',
        'Ajouter une ville',
        'Afficher une ville',
        'Modifier une ville',
        'Supprimer une ville',
        'Ajouter un mutualiste',
        'Afficher un mutualiste',
        'Modifier un mutualiste',
        'Supprimer un mutualiste',
        'Ajouter une actualite',
        'Afficher une actualite',
        'Modifier une actualite',
        'Supprimer une actualite',
        'Ajouter une direction',
        'Afficher une direction',
        'Modifier une direction',
        'Supprimer une direction',
        'Ajouter une cotisation',
        'Afficher une cotisation',
        'Modifier une cotisation',
        'Supprimer une cotisation',
        'Ajouter un projet',
        'Afficher un projet',
        'Modifier un projet',
        'Supprimer un projet',
        'Ajouter des images au projet',
        'Afficher des images au projet',
        'Modifier des images au projet',
        'Supprimer des images au projet',
        'Ajouter un accompagnement',
        'Afficher un accompagnement',
        'Modifier un accompagnement',
        'Supprimer un accompagnement',
        'Ajouter un droit d\'ahdesion',
        'Afficher un droit d\'ahdesion',
        'Modifier un droit d\'ahdesion',
        'Supprimer un droit d\'ahdesion',
        'Ajouter une cotisation de mutualiste',
        'Afficher une cotisation de mutualiste',
        'Modifier une cotisation de mutualiste',
        'Supprimer une cotisation de mutualiste',
        'Ajouter un projet de mutualiste',
        'Afficher un projet de mutualiste',
        'Modifier un projet de mutualiste',
        'Supprimer un projet de mutualiste',
        'Ajouter un slide',
        'Afficher un slide',
        'Modifier un slide',
        'Supprimer un slide',
        'voir la liste des administrateur',
        'voir la liste des parametres',
        'voir la liste des codes de validation',
        'voir la liste des types de compte',
        'voir la liste des paiements',
        'voir la liste des types de paiement',
        'voir la liste des villes',
        'voire la liste des mutualistes',
        'voir la liste des actualites',
        'voir la liste des directions',
        'voir la liste des cotisations',
        'voir la liste des images de projets',
        'voir la liste des accompagnements',
        'voir la liste des droits d\'adhesion',
        'voir la liste de cotisations des mutualistes',
        'voir la liste de projets des mutualistes',
        'voir la liste des images de slides',
        'gerer les codes de validation',
        'voir la liste des projets',
        'voir la liste de ses paiements',
        'voir la liste de ses accompagnements',
        'voir la liste de ses droits d\'adhesion',
        'voir la liste de ses cotisations',
        'voir la liste de ses projets',
        'Afficher le detail d\'un projet de mutualiste',
        'Afficher le detail d\'une actualite',
        'Afficher le detail d\'un projet',
        'Afficher son profil',
    ];

    foreach ($permissions as $permission) {
        Permission::create([
            'name' => $permission,
            'guard_name' => 'web',
        ]);
    }
}

}
