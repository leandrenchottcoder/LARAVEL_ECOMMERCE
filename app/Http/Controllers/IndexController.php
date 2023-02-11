<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use App\Models\Contact;
use App\Models\Repas;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class IndexController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    // public function foo()
    // {
    //     if (!Gate::allows('access-admin')) {
    //         abort('403');
    //     }
    //     return view('/listeUsers');
    // }

    public function index(){

        return view('ecommerce.index');
    }
    public function contact(){

        return view('ecommerce.contact');
    }
    public function commande(){

        return view('ecommerce.commande');
    }
    public function commande_store(Request $request){

        $request->validate([
            'nom_complet' => 'required',
            'email' => 'required',
            'ville' => 'required',
            'commune' => 'required',
            'tel1' => 'required',
            'tel2' => 'required',
            'description' => 'required',
            'status',
        ]);

        Commande::create($request->all());
        return redirect()->route('ecommerce.commande')->with('success', 'commande envoyé avec success. Nous vous contacterons dans les minutes qui suivront');
    }
    public function store(Request $request){

        $request->validate([
            'nom_complet' => 'required',
            'email' => 'required',
            'ville' => 'required',
            'sujet' => 'required',
            'tel' => 'required',
        ]);

        Contact::create($request->all());
        return redirect()->route('ecommerce.contact')->with('success', 'Message envoyé avec success.');
    }

    public function datatable(){

        return view('liste');
    }
    public function repas(){
        $repas = Repas::all();

        return view('ecommerce.repas', compact('repas'));
    }
    public function about(){

        return view('ecommerce.about');
    }




}
