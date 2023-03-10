<?php

use App\Models\Repas;
use App\Models\User;


// use Barryvdh\DomPDF\PDF;
// use Barryvdh\DomPDF\Facade\PDF;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProfileController;
use App\Models\Commande;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\File;
// use PDF;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// LES ROUTE POUR L'ACCUEIL
Route::get('/', function () {
    return view('bienvenu');
})->name('bienvenu');

Route::get('/index', [IndexController::class, 'index'])->name('ecommerce.index');
// Route::get('/listeUsers', [IndexController::class, 'foo'])->name('listeUsers');
Route::get('/contact/create', [IndexController::class, 'contact'])->name('ecommerce.contact');
Route::get('/commande/create', [IndexController::class, 'commande'])->name('ecommerce.commande');
Route::get('/repas', [IndexController::class, 'repas'])->name('ecommerce.repas');
Route::get('/about', [IndexController::class, 'about'])->name('ecommerce.about');
Route::post('/contact/create', [indexController::class, 'store'])->name('ecommerce.store');
Route::post('/commande/create', [indexController::class, 'commande_store'])->name('ecommerce.commande_store');


// Route::get('/post/{id}', [indexController::class, 'show'])->name('posts.show');
// ROUTE POUR LE DASHBORD
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


// ROUTE POUR LA LISTE DES UTILISATEURS
Route::get('/listeUsers', function () {
    if (!Gate::allows('access-admin')) {
        abort('403');
    }
    $users = User::all();
    return view('listeUsers', compact('users'));
})->middleware(['auth', 'verified'])->name('listeUsers');

//ROUTE POUR LA AFFICHER UN USER A MODIFIER DANS LE PROFIL DE L'UTILISATEUR OU ADMINISTRATEUR
Route::get('/EditUser/{user}', function (User $user) {
    if (!Gate::allows('access-admin')) {
        abort('403');
    }
    return view('editUser', compact('user'));
})->middleware(['auth', 'verified'])->name('edit_user');

//ROUTE POUR MODIFIER UN USER DANS LE PROFIL DE L'UTILISATEUR OU ADMINISTRATEUR
Route::put('/UpdateUser/{user}', function (Request $request, User $user) {
    if (!Gate::allows('access-admin')) {
        abort('403');
    }
    $request->validate([]);
    $user->update($request->all());
    return redirect()->route('listeUsers')->with('success', 'Cet utilisateur ?? ete mise ?? jour avec succ??s');
})->middleware(['auth', 'verified'])->name('update_user');

//ROUTE POUR SUPPRIMER UN USER DANS LE PROFIL DE L'UTILISATEUR OU ADMINISTRATEUR
Route::delete('/destroy_user/{user}', function (User $user) {
    $user->delete();
    return redirect()->route('listeUsers')->with('success', 'Utilisateur supprim?? avec succ??s');
})->middleware(['auth', 'verified'])->name('destroy_user');


//ROUTE POUR LA LISTE DE TOUTE LES CONTACTS DANS LE PROFIL DE L'UTILISATEUR OU ADMINISTRATEUR
Route::get('/listeContact', function () {
    $contacts = Contact::all();
    return view('listeContact', compact('contacts'));
})->middleware(['auth', 'verified'])->name('liste');

//ROUTE POUR LA AFFICHER LES COMMANDES A MODIFIER DANS LE PROFIL DE L'UTILISATEUR OU ADMINISTRATEUR
Route::get('/EditCommande/{commande}', function (Commande $commande) {
    return view('editCommande', compact('commande'));
})->middleware(['auth', 'verified'])->name('edit_commande');

//ROUTE POUR LA AFFICHER UN A CONTACT DANS LE PROFIL DE L'UTILISATEUR OU ADMINISTRATEUR
Route::get('/AfficheContact/{contact}', function (Contact $contact) {
    return view('afficheContact', compact('contact'));
})->middleware(['auth', 'verified'])->name('affiche_contact');

//ROUTE POUR MODIFIER UNE COMMANDE DANS LE PROFIL DE L'UTILISATEUR OU ADMINISTRATEUR
Route::put('/UpdateCommande/{commande}', function (Request $request, Commande $commande) {
    $request->validate([]);
    $commande->update($request->all());
    return redirect()->route('liste_commande')->with('success', 'cette commande ?? ete mise ?? jour avec succ??s');
})->middleware(['auth', 'verified'])->name('update_commande');

//ROUTE POUR LA LISTE DE TOUTES LES COMMANDE DANS LE PROFIL DE L'UTILISATEUR OU ADMINISTRATEUR
Route::get('/listeCommande', function () {
    $commandes = Commande::all();
    return view('listeCommande', compact('commandes'));
})->middleware(['auth', 'verified'])->name('liste_commande');


//ROUTE POUR LA LISTE DE TOUS LES REPAS DANS LE PROFIL DE L'UTILISATEUR OU ADMINISTRATEUR
Route::get('/listeRepas', function () {
    $repas = Repas::all();
    return view('listeRepas', compact('repas'));
})->middleware(['auth', 'verified'])->name('liste_repas');

//ROUTE POUR CREER DES REPAS DANS LE PROFIL DE L'UTILISATEUR OU ADMINISTRATEUR
Route::get('/createRepas', function () {
    return view('createRepas');
})->middleware(['auth', 'verified'])->name('create_repas');

//ROUTE POUR VALIDER  UN REPAS  CREER DANS LE PROFIL DE L'UTILISATEUR OU ADMINISTRATEUR
Route::post('/storeRepas', function (Request $request) {
    $repas = new Repas;
    $repas->categorie = $request->input('categorie');
    $repas->name = $request->input('name');
    $repas->description = $request->input('description');
    $repas->prix = $request->input('prix');
    $repas->rating = $request->input('rating');
    if ($request->hasfile('profile_image')) {
        $file = $request->file('profile_image');
        $extention = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extention;
        $file->move('uploads/repas/', $filename);
        $repas->profile_image = $filename;
    }
    $repas->save();
    return redirect()->back()->with('status', 'Repas et Image ajouter avec succ??s');
})->middleware(['auth', 'verified'])->name('store_repas');

//ROUTE POUR EDITER UN REPAS DANS LE PROFIL DE L'UTILISATEUR OU ADMINISTRATEUR
Route::get('/editRepas/{id}', function ($id) {
    $repas = Repas::find($id);
    return view('editRepas', compact('repas'));
})->middleware(['auth', 'verified'])->name('editer_repas');

//ROUTE POUR VALIDER  UN REPAS EDITER DANS LE PROFIL DE L'UTILISATEUR OU ADMINISTRATEUR
Route::put('/updateRepas/{id}', function (Request $request, $id) {
    $repas = Repas::find($id);
    $repas->categorie = $request->input('categorie');
    $repas->name = $request->input('name');
    $repas->description = $request->input('description');
    $repas->prix = $request->input('prix');
    $repas->rating = $request->input('rating');

    if ($request->hasfile('profile_image')) {
        $destination = 'uploads/repas/' . $repas->profile_image;
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $file = $request->file('profile_image');
        $extention = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extention;
        $file->move('uploads/repas/', $filename);
        $repas->profile_image = $filename;
    }

    $repas->update();
    return redirect()->back()->with('status', 'Repas et  image modifier avec succ??s');
})->middleware(['auth', 'verified'])->name('update_repas');


//ROUTE POUR SUPPRIMER  UN REPAS  DANS LE PROFIL DE L'UTILISATEUR OU ADMINISTRATEUR
Route::delete('/destroyRepas/{id}', function ($id) {
    $repas = Repas::find($id);
    $destination = 'uploads/repas/' . $repas->profile_image;
    if (File::exists($destination)) {
        File::delete($destination);
    }
    $repas->delete();
    return redirect()->back()->with('status', 'Repas et Image supprim?? avec succ??s');
})->middleware(['auth', 'verified'])->name('destroy_repas');



//ROUTE POUR LA LISTE DE TOUTES LES COMMANDE EN PDF DANS LE PROFIL DE L'UTILISATEUR OU ADMINISTRATEUR
// Route::get('/listeCommandePdf', function () {
//     $commandes = Commande::all();
//     $pdf = PDF::loadView('/listeCommande', compact('commandes'));
//     return $pdf->download('listecommande.pdf');
// })->middleware(['auth', 'verified'])->name('liste_commande_pdf');


//ROUTE POUR LA SUPPRIME UN CONTACT DANS LE PROFIL DE L'UTILISATEUR OU ADMINISTRATEUR
Route::delete('/destroy_contact/{contact}', function (Contact $contact) {
    $contact->delete();
    return redirect()->route('liste')->with('success', 'Contact supprim?? avec succ??s');
})->middleware(['auth', 'verified'])->name('destroy');

//ROUTE POUR SUPPRIMER UNE COMMANDE DANS LE PROFIL DE L'UTILISATEUR OU ADMINISTRATEUR
Route::delete('/destroy_commande/{commande}', function (Commande $commande) {
    $commande->delete();
    return redirect()->route('liste_commande')->with('success', 'Commande supprim?? avec succ??s');
})->middleware(['auth', 'verified'])->name('destroy_commande');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
