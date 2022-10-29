<x-admin-master>
    @section('content')
        <h1>Users</h1>
        @if(session('delete-user'))
    <div class="alert alert-danger">
            {{session('delete-user')}}
    </div>
        @endif
        <table class="table" id="dataTable">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">UserName</th>
                <th scope="col">Avatar</th>
                <th scope="col">Name</th>
                <th scope="col">Registered Date</th>
                <th scope="col">Profile Updated at</th>
                <td>Delete</td>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">UserName</th>
                <th scope="col">Avatar</th>
                <th scope="col">Name</th>
                <th scope="col">Registered Date</th>
                <th scope="col">Profile Updated at</th>
                <td>Delete</td>
            </tr>
            </tfoot>
            <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->username}}</td>
                <td>
                    <img src="{{asset($user->avatar)}}" height="50px" alt="">
                </td>
                <td>{{$user->name}}</td>
                <td>{{$user->created_at->diffForHumans()}}</td>
                <td>{{$user->updated_at->diffForHumans()}}</td>
                <td>
                    <form action="{{route('user.destroy', $user->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn-danger">Delete</button>
                    </form></td>

            </tr>
            @endforeach
            </tbody>
        </table>
    @endsection
    @section('scripts')
        <!-- Page level plugins -->
            <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
            <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

            <!-- Page level custom scripts -->
            <script src="{{asset('js/demo/datatables-demo.js')}}"></script>
        @endsection
</x-admin-master>
