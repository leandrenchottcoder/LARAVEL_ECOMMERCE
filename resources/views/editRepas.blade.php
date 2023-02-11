<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Modifier un repas') }}
        </h2>
    </x-slot>

    <div class="py-12" style="font-size: 13px">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Modifier un repas ") }}


                </div>

                <div class="container">

<div class="container">
    <div class="row">
        <div class="col-md-12">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4>Modifier un repas avec son image
                        <a href="{{ route('liste_repas') }}" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('updateRepas/'.$repas->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for="">Catégorie du repas</label>
                            <input type="text" name="categorie" value="{{$repas->categorie}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Nom du repas</label>
                            <input type="text" name="name" value="{{$repas->name}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Description</label>
                            <input type="text" name="description" value="{{$repas->description}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Prix du repas</label>
                            <input type="text" name="prix" value="{{$repas->prix}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Note du repas</label>
                            <input type="text" name="rating" value="{{$repas->rating}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Image du repas</label>
                            <input type="file" name="profile_image" class="form-control">
                            <img src="{{ asset('uploads/repas/'.$repas->profile_image) }}" width="70px" height="70px" alt="Image">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Modifier un repas</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
