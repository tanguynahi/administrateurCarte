<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Administrateur;
use Database\Seeders\AdminSeeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\View;
use App\Http\Requests\StoreAdministrateurRequest;
use App\Http\Requests\UpdateAdministrateurRequest;
use Psy\CodeCleaner\FunctionReturnInWriteContextPass;

class AdministrateurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $title = 'Tableau de bord';
        // $ = 'Tableau de bord';
        return view('dashboards.index', compact('title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function listePersonnel()
    {
        $personnels = Administrateur::where('profil', 2)->get();
        $title = 'Listes des Personnel BMI';
        $soustitre = 'Personnels BMI';
        return view('dashboards.personnels.index', compact('personnels', 'title', 'soustitre'));
    }
    public function create()
    {
        $title = 'Ajouter un  Personnel BMI';
        $soustitre = 'Personnels BMI';
        return view('dashboards.personnels.create', compact('title', 'soustitre'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAdministrateurRequest $request)
    {
        //
        try {
            DB::beginTransaction();
            $verifier = User::where('email', $request->email)->first();
            $adv = Administrateur::where('email', $request->email)->first();
            if (!empty($verifier) || !empty($adv)) {
                return redirect()->back()->with('error', 'Désole ce utilisateur existe deja !! email Occupe!!');
            }
            $lien_photo = '';
            if ($request->hasFile('lien_photo')) {
                $file_name = md5(uniqid()) . '.' . $request->file('lien_photo')->extension();
                $request->file('lien_photo')->storeAs('images-personnel/', $file_name);
                $lien_photo = 'src-files/images-personnel/' . $file_name;
            }

            // creation d'utilisateur
            // l'utilisateur a un contact
            $motDePasse = generateUniqueCode2();
            $nom_prenoms = $request->nom . ' ' . $request->prenom;
            $email = $request->email;
            $user = User::create([
                "name" => $nom_prenoms, // Ajout du champ name
                "email" => $email,
                'password' => Hash::make($motDePasse),
            ]);
            // Assigner le rôle
            $user->assignRole('administrateur');

            $personnel =  Administrateur::create([
                "user_id" => $user->id,
                "nom" => $request->nom,
                "prenom" => $request->prenom,
                "contact" => $request->contact,
                "email" => $user->email ?? $email,
                "genre" => $request->genre,
                "profil" => ADMIN(),
                "adresse" => $request->adresse,
                "poste" => $request->poste,
                "profession" => $request->profession,
                "matricule" =>  $request->matricule,
                "lien_photo" =>  $lien_photo,
            ]);
            // dd($request->all(),$user,$personnel);
            $domaine = _domaine(); // nom de dommaine
            // envoyer de mail
            $sujet = "Creation de compter sur la plateforme de BMI";
            $message = "Bonjour, " . $nom_prenoms . "<br>
                        Matricule : $request->matricule
                        <p>
                                <br>
                                Votre nouvel identifiant  vient d'être créer, ci-après vos paramètres : <br>
                                <br>
                                Login : $email<br>
                                Mot de passe : $motDePasse <br />
                                <br>
                                NB: Pensez à modifier votre mot de passe. <br>
                                <br>
                                Connectez vous à votre espace client à partir ce lien : <br>
                                <br> $domaine" . "connexion <br>
                                <br>
                                Plus d'infos sur nos services : $domaine" . "nous-contacter <br>
                                <br>
                                Nous vous remercions de la confiance que vous nous accordez. <br>
                                Cordialement, <br>
                                L'équipe Ligne, disponible 7j/7 via votre espace client <br>
                                - Pour une assistance technique <br>
                                - Pour une assistance commerciale
                                <br><br>
                                Ceci est un mail automatique, vous ne pouvez pas y répondre. <br>
                                Contactez-nous directement via votre espace client via la rubrique MESSAGE. <br>
                        </p>
                                ";

            $url = appelApiEmail();
            $template = View::make('dashboards.email', ['contenumess' => $message])->render();
            $data = [
                'provider' => 'BMI-PLATEFORME <info@mail-taseti.com>',
                "key_rsa" => 're_2i7H3Ynf_KRVm9VwTsrwrfF8isCBYvyyE',
                "destination" => $email ??  $personnel->email,
                "sujet" => $sujet,
                "message" => $template
            ];
            $retourAPI = Http::post($url, $data);
            $res = $retourAPI->json();
            if ($retourAPI->status() == 200) {
                (int)$code = $res['status'];
                if ($code != 200) {
                    $message = "Une erreur s'est produite " . $code . ", DETAIL: " . messageBrut($res['message']) . " ERR: Envoye Paiement adhesion";
                    Log::ajoutLOG($message);
                    // $module = "Envoyer de Mail a la creation Mutualiste";
                    // $action = "Echec d'envoyer de mail  : $message";
                    // Logs::saveLog($module, $action);
                } else {
                    // $module = "Envoyer de Mail a la creation Mutualiste";
                    // $action = "Email envoyer avec success   : $mutualiste->nom , $mutualiste->prenom sur son email  $mutualiste->email";
                    // Logs::saveLog($module, $action);
                }
            } else {
                Log::error("Erreur lors de l'envoi de l'email. Statut API : " . $retourAPI->status());
                // $module = "Envoyer de Mail a la creation Mutualiste";
                // $action = "Erreur lors de l'envoi de l'email. Statut API : " . $retourAPI->status();
                // Logs::saveLog($module, $action);
            }
            DB::commit();
            return redirect()->route('personnels.index')->with('succes', 'le personnel BMI à été ajouter avec succès');
        } catch (\Throwable $th) {

            DB::rollBack();
            Log::error('Erreur interne du serveur: ' . $th->getMessage());
            return  redirect()->back()->with('error', 'Erreur interne du serveur: ');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $personnel = Administrateur::find($id);
        $title = 'Ajouter un  Personnel BMI';
        $soustitre = 'Personnels BMI';
        // dd($personnel);
        return view('dashboards.personnels.show', compact('title', 'soustitre', 'personnel'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Administrateur $administrateur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAdministrateurRequest $request, Administrateur $administrateur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Administrateur $administrateur) {}

    public function desactive($id)
    {
        // dd($id);
        $personnel = Administrateur::find($id);
        $personnel->status = DESACTIVE();
        $personnel->save();
        return redirect()->route('personnels.index')->with('succes', 'Vous avez desactiver un compte avec succes');
    }
    public function reactive($id)
    {
        // dd($id);
        $personnel = Administrateur::find($id);
        $personnel->status = ACTIVE();
        $personnel->save();
        return redirect()->route('personnels.index')->with('succes', 'Vous avez ré-active un compte avec succes');
    }

    // profil de l'utilisateur connecter
    public function profileUser()
    {
        $personnel = auth()->user()->administrateur;
        // dd($user);
        $user = User::find($personnel->user_id);
        $title = 'Profil Utilisateur';
        $soustitre = 'Profil';
        // dd($user,$personnel);
        return view('dashboards.profils.index', compact('title', 'soustitre', 'personnel', 'user'));
    }
    // mise a jour profils
    public function miseAjourInfos(Request $request)
    {
        try {
            DB::beginTransaction();
            // dd($request->all());
            $personnel = Administrateur::find($request->idPersonne);
            if (empty($request->idPersonne) || empty($personnel)) {
                return redirect()->back()->with('error', 'une erreur s est produite id inexistant ');
            }
            if (!empty($request->photos)) {
                $lien_photo = '';
                if ($request->hasFile('photos')) {
                    $file_name = md5(uniqid()) . '.' . $request->file('photos')->extension();
                    $request->file('photos')->storeAs('images-personnel/', $file_name);
                    $lien_photo = 'src-files/images-personnel/' . $file_name;
                }
            } else {
                $lien_photo = $personnel->lien_photo;
            }
            $personnel->nom = $request->nom;
            $personnel->prenom = $request->prenom;
            $personnel->profession = $request->profession;
            $personnel->contact = $request->contact;
            $personnel->email = $request->email;
            $personnel->lien_photo = $lien_photo;
            $personnel->genre = $request->genre;
            $personnel->save();
            DB::commit();
            return redirect()->route('utisateurProfil')->with('succes', "Informations personnel modifié avec succée");
        } catch (\Throwable $th) {
            DB::rollBack();
        }
    }


    public function modifierAcces(Request $request)
    {


         // Validation des champs
         $request->validate([
            'motpasseActuel' => ['required'],
            'newpasse' => ['required', 'min:8'],
            'confirmpasse' => ['required', 'same:newpasse'],
        ], [
            'motpasseActuel.required' => 'Le mot de passe actuel est obligatoire.',
            'newpasse.required' => 'Le nouveau mot de passe est requis.',
            'newpasse.min' => 'Le nouveau mot de passe doit contenir au moins 8 caractères.',
            'confirmpasse.required' => 'Veuillez confirmer votre nouveau mot de passe.',
            'confirmpasse.same' => 'Les mots de passe ne correspondent pas.',
        ]);
        // dd($request->all());
        $user = Auth::user(); // Récupérer l'utilisateur connecté
            //   dd($request->all() ,$user->password);
        // Vérifier si l'ancien mot de passe est correct
        if (!Hash::check($request->motpasseActuel, Auth::user()->password)) {
            return back()->withErrors(['motpasseActuel' => 'Le mot de passe actuel est incorrect.']);
        }

        // Mettre à jour le mot de passe
        $user->password = Hash::make($request->newpasse);
        $user->save();

        return back()->with('succes', 'Mot de passe mis à jour avec succès.');
    }

}
