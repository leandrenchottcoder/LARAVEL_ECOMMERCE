<?php

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
    return redirect()->route('listeUsers')->with('success', 'Cet utilisateur à ete mise à jour avec succès');
})->middleware(['auth', 'verified'])->name('update_user');

//ROUTE POUR SUPPRIMER UN USER DANS LE PROFIL DE L'UTILISATEUR OU ADMINISTRATEUR
Route::delete('/destroy_user/{user}', function (User $user) {
    $user->delete();
    return redirect()->route('listeUsers')->with('success', 'Utilisateur supprimé avec succès');
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
    return redirect()->route('liste_commande')->with('success', 'cette commande à ete mise à jour avec succès');
})->middleware(['auth', 'verified'])->name('update_commande');

//ROUTE POUR LA LISTE DE TOUTES LES COMMANDE DANS LE PROFIL DE L'UTILISATEUR OU ADMINISTRATEUR
Route::get('/listeCommande', function () {
    $commandes = Commande::all();
    return view('listeCommande', compact('commandes'));
})->middleware(['auth', 'verified'])->name('liste_commande');

//ROUTE POUR LA LISTE DE TOUTES LES COMMANDE EN PDF DANS LE PROFIL DE L'UTILISATEUR OU ADMINISTRATEUR
// Route::get('/listeCommandePdf', function () {
//     $commandes = Commande::all();
//     $pdf = PDF::loadView('/listeCommande', compact('commandes'));
//     return $pdf->download('listecommande.pdf');
// })->middleware(['auth', 'verified'])->name('liste_commande_pdf');


//ROUTE POUR LA SUPPRIME UN CONTACT DANS LE PROFIL DE L'UTILISATEUR OU ADMINISTRATEUR
Route::delete('/destroy_contact/{contact}', function (Contact $contact) {
    $contact->delete();
    return redirect()->route('liste')->with('success', 'Contact supprimé avec succès');
})->middleware(['auth', 'verified'])->name('destroy');

//ROUTE POUR SUPPRIMER UNE COMMANDE DANS LE PROFIL DE L'UTILISATEUR OU ADMINISTRATEUR
Route::delete('/destroy_commande/{commande}', function (Commande $commande) {
    $commande->delete();
    return redirect()->route('liste_commande')->with('success', 'Commande supprimé avec succès');
})->middleware(['auth', 'verified'])->name('destroy_commande');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
