<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Liste de tous les repas') }}
        </h2>
    </x-slot>

    <div class="py-12" style="font-size: 13px">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Consultez la liste de tous les repas!") }}


                </div>
                {{-- <div class="container">
                    @if($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{$message}}</p>
                </div>
                @endif

                </div> --}}
                <div class="container">
                    @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

                </div>
                <div class="p-6 text-gray-900">
                 <a href="{{route('create_repas')}}">
                 <button class='btn btn-primary'>Créer un repas</button>
                 </a>
                </div>
                <div class="p-6 text-gray-900">
                    <h1>Vous avez en ce moment {{$repas->count()}} Repas dans la base de donnée</h1>

    <table id="repas" class="table table-striped table-bordered" style="width:100%">
        <thead>
        <tr>
        <th>Id</th>
        <th>Categorie</th>
        <th>Nom</th>
        <th>Description</th>
        <th>Prix</th>
        <th>étoile</th>
        <th>Image</th>
        <th>Date et heure</th>
        <th width="280px">Action</th>
            </tr>
        </thead>
        <tbody>
    @foreach($repas as $repa)
    <tr>
        <td>{{$repa->id}}</td>
        <td>{{$repa->categorie}}</td>
        <td>{{$repa->name}}</td>
        <td>{{$repa->description}}</td>
        <td>{{$repa->prix}}</td>
        <td>{{$repa->rating}}</td>
        <td><img src="{{ asset('uploads/repas/'.$repa->profile_image) }}" width="70px" height="70px" alt="Image"></td>
        <td>{{$repa->created_at->format('d/m/Y à H:i')}}</td>
        <td>
            <form action="{{ url('destroyRepas/'.$repa->id) }}" method="post">
                @csrf
                {{-- <a class="btn btn-success text-white" style="font-size:12px" href="">Show</a> --}}
                <a class="btn btn-primary" style="font-size:12px" href="{{ url('editRepas/'.$repa->id) }}">Editer</a>&nbsp;
                <a class="btn btn-danger" style="font-size:12px" href="{{ url('destroyRepas/'.$repa->id) }}">
                    @method('DELETE')
                    <button type="submit" class="">Delete</button>
                </a>
            </form>
        </td>
    </tr>
    @endforeach
        </tbody>

        <tfoot>
            <tr>
       <th>Id</th>
        <th>Categorie</th>
        <th>Nom</th>
        <th>Description</th>
        <th>Prix</th>
        <th>étoile</th>
        <th>Image</th>
        <th>Date et heure</th>
        <th width="280px">Action</th>
            </tr>
        </tfoot>
    </table>


    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap4.min.js"></script>


    <script type="text/javascript">
    	$(document).ready(function () {
    $('#repas').DataTable();
        });
    </script>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
