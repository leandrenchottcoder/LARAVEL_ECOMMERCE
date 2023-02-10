<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contactez nous') }}
        </h2>
    </x-slot>

    <div class="py-12" style="font-size: 13px">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Contact ") }}


                </div>
                <div class="container">
                    @if($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input. <br><br>
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="" method="post">
    @csrf

    @method('PUT')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nom</strong>
                <input type="text" name="nom_complet" value="{{$contact->nom_complet}}" class="form-control" placeholder="Entrez votre nom complet" value="Read Only/Disabled" disabled>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Prenom</strong>
                <input type="email" name="prenom" value="{{$contact->email}}" class="form-control" placeholder="Entrez votre email" value="Read Only/Disabled" disabled>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Ville</strong>
                <input type="text" name="ville" value="{{$contact->ville}}" class="form-control" placeholder="Entrez votre ville" value="Read Only/Disabled" disabled>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Prenom</strong>
                <input type="text" name="tel" value="{{$contact->tel}}" class="form-control" placeholder="Entrez votre numéro" value="Read Only/Disabled" disabled>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description</strong>
                <input type="text" name="sujet" value="{{$contact->sujet}}" class="form-control" placeholder="Entrez votre description" value="Read Only/Disabled" disabled>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date et heure d'envoie du message</strong>
                <input type="text" name="created_at" value="{{$contact->created_at}}" class="form-control" placeholder="Entrez le status de la commande" value="Read Only/Disabled" disabled>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <a class="btn btn-primary mt-5" href="{{route('liste')}}">Retour</a>
        </div>
    </div>

</form>
                </div>


            </div>
        </div>
        </div>
    </div>
</x-app-layout>
