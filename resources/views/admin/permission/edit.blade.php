<x-admin-master>
    @section('content')
        @if(session()->has('permission-update'))
            <div class="alert alert-success">
                {{session('permission-update')}}
            </div>
        @endif
    <h2>Edit Permission: {{$permission->name}} </h2>
        <div class="row">


            <div class="col-sm-6">
                <form action="{{route('permission.update', $permission->id)}}" method="post">
                    @csrf
                    @method('put')
                    <label for="name">Name: </label>
                    <input type="text" name="name" id="name" value="{{$permission->name}}">
                    <button class="btn btn-danger">Update</button>
                </form>
            </div>
        </div>
    @endsection
</x-admin-master>
