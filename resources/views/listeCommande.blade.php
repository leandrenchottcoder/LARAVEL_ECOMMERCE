<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Liste de toutes les commandes') }}
        </h2>
    </x-slot>

    <div class="py-12" style="font-size: 13px">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Consultez la liste de toutes les commandes!") }}


                </div>
                <div class="container">
                    @if($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{$message}}</p>
                </div>
                @endif

                </div>
                {{-- <div class="p-6 text-gray-900">
                 <a href="{{ route('liste_commande_pdf') }}">
                 <button class='btn btn-primary'>Generate PDF</button>
                 </a>
                </div> --}}
                <div class="p-6 text-gray-900">
                    <h1>Vous avez en ce moment {{$commandes->count()}} commande</h1>

    <table id="students" class="table table-striped table-bordered" style="width:100%">
        <thead>
        <tr>
        <th>Id</th>
        <th>Nom Complet</th>
        <th>Email</th>
        <th>Ville</th>
        <th>Commune</th>
        <th>Tel1</th>
        <th>Tel2</th>
        <th>Description</th>
        <th>Status</th>
        <th>Date et heure</th>
        <th width="280px">Action</th>
            </tr>
        </thead>
        <tbody>
    @foreach($commandes as $commande)
    <tr>
        <td>{{$commande->id}}</td>
        <td>{{$commande->nom_complet}}</td>
        <td>{{$commande->email}}</td>
        <td>{{$commande->ville}}</td>
        <td>{{$commande->commune}}</td>
        <td>{{$commande->tel1}}</td>
        <td>{{$commande->tel2}}</td>
        <td>{{$commande->description}}</td>
        @if ($commande->status === "En attente" || $commande->status === "En Attente" )
        <td><button class="text-danger">{{$commande->status}}</button></td>

            @else
        <td><button class="text-success">{{$commande->status}}</button></td>

        @endif
        <td>{{$commande->created_at->format('d/m/Y à H:i')}}</td>
        <td>
            <form action="{{route('destroy_commande', $commande->id)}}" method="post">
                @csrf
                {{-- <a class="btn btn-success text-white" style="font-size:12px" href="">Show</a> --}}
                <a class="btn btn-primary" style="font-size:12px" href="{{route('edit_commande', $commande->id)}}">Editer</a>&nbsp;
                <a class="btn btn-danger" style="font-size:12px" href="{{route('destroy_commande', $commande->id)}}">
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
        <th>Nom Complet</th>
        <th>Email</th>
        <th>Ville</th>
        <th>Commune</th>
        <th>Tel1</th>
        <th>Tel2</th>
        <th>Description</th>
        <th>Status</th>
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
    $('#students').DataTable();
        });
    </script>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
