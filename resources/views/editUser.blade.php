<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Modifier un User') }}
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

<form action="{{route('update_user', $user->id)}}" method="post">
    @csrf

    @method('PUT')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nom complet</strong>
                <input type="text" name="name" value="{{$user->name}}" class="form-control" placeholder="Entrez votre nom complet">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email</strong>
                <input type="email" name="email" value="{{$user->email}}" class="form-control" placeholder="Entrez votre email">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Password</strong>
                <input type="password" name="password" value="{{$user->password}}" class="form-control" placeholder="Entrez votre password">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Admin accès</strong>
                <input type="text" name="admin" value="{{$user->admin}}" class="form-control" placeholder="configurer les accès">
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
