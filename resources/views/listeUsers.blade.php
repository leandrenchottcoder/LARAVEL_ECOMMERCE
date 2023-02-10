<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Liste de tous les utilisateurs') }}
        </h2>
    </x-slot>

    <div class="py-12" style="font-size: 13px">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Consultez la liste de tous les utilisateurs!") }}
                </div>
                 <div class="container">
                    @if($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{$message}}</p>
                </div>
                @endif

                </div>

                <div class="p-6 text-gray-900">
                    <h1>Vous avez en ce moment {{$users->count()}}</h1>

                    <table id="students" class="table table-striped table-bordered" style="width:100%">
        <thead>
        <tr>
       <th>Id</th>
        <th>Nom Complet</th>
        <th>Email</th>
        <th>Password</th>
        <th>admin</th>
        <th>Date et heure</th>
        <th width="280px">Action</th>
            </tr>
        </thead>
        <tbody>
    @foreach($users as $user)
    <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->password}}</td>
        <td>{{$user->admin}}</td>
        <td>{{$user->created_at->format('d/m/Y à H:i')}}</td>
        <td>
            <form action="{{route('destroy_user', $user->id)}}" method="post">
                @csrf
                {{-- <a class="btn btn-success text-white" style="font-size:12px"  href="">Show</a> --}}
                <a class="btn btn-primary" style="font-size:12px" href="{{route('edit_user', $user->id)}}">Editer</a>
                <a class="btn btn-danger" style="font-size:12px" href="{{route('destroy_user', $user->id)}}">
                    @method('DELETE')
                    <button type="submit" class="" style="font-size:12px">Delete</button>
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
        <th>Password</th>
        <th>admin</th>
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
