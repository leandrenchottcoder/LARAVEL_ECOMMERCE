<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Modifier une commande') }}
        </h2>
    </x-slot>

    <div class="py-12" style="font-size: 13px">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Mettre à jour ") }}


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

<form action="{{route('update_commande', $commande->id)}}" method="post">
    @csrf

    @method('PUT')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nom</strong>
                <input type="text" name="nom_complet" value="{{$commande->nom_complet}}" class="form-control" placeholder="Entrez votre nom complet">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Prenom</strong>
                <input type="email" name="email" value="{{$commande->email}}" class="form-control" placeholder="Entrez votre email">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Ville</strong>
                <input type="text" name="ville" value="{{$commande->ville}}" class="form-control" placeholder="Entrez votre ville">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Commune</strong>
                <input type="text" name="commune" value="{{$commande->commune}}" class="form-control" placeholder="Entrez votre commune">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Prenom</strong>
                <input type="text" name="tel1" value="{{$commande->tel1}}" class="form-control" placeholder="Entrez votre numéro">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tel2</strong>
                <input type="text" name="tel2" value="{{$commande->tel2}}" class="form-control" placeholder="Entrez votre numéro">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description</strong>
                <input type="text" name="description" value="{{$commande->description}}" class="form-control" placeholder="Entrez votre description">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Status</strong>
                <input type="text" name="status" value="{{$commande->status}}" class="form-control" placeholder="Entrez le status de la commande">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary mt-5">submit</button>
        </div>
    </div>

</form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
