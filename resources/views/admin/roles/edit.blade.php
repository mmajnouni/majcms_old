<x-admin-master>
    @section('content')

        @if(session()->has('role-update'))
            <div class="alert alert-success">
                {{session('role-update')}}
            </div>
        @endif
            <h2>Edit Role: {{$roles->name}}</h2>
      <div class="row">


          <div class="col-sm-6">
              <form action="{{route('role.update', $roles->id)}}" method="post">
                  @csrf
                  @method('put')
                  <label for="name">Name: </label>
                  <input type="text" name="name" id="name" value="{{$roles->name}}">
                  <button class="btn btn-danger">Update</button>
              </form>
          </div>
      </div>
        @if($permissions->isNotEmpty())
        <div class="row">
            <div class="col-lg-12">
                <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered" id="dataTable" width="100%">
                                                <thead>
                                                <tr>
                                                    <th>Option</th>
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>Slug</th>
                                                    <th>Delete</th>
                                                </tr>
                                                </thead>
                                                <tfoot>
                                                    <tr>
                                                        <th>Option</th>
                                                        <th>ID</th>
                                                        <th>Name</th>
                                                        <th>Slug</th>
                                                        <th>Delete</th>
                                                    </tr>
                                                </tfoot>
                                                <tbody>
                                                @foreach($permissions as $permission)
                                                <tr>
                                                    <td>
                                                        <input class="custom-checkbox" type="checkbox"
                                                               @foreach($roles->permission as $role_permission)
                                                               @if($role_permission->slug == $permission->slug)
                                                               checked
                                                            @endif
                                                            @endforeach
                                                        >
                                                    </td>
                                                    <td>{{$permission->id}} </td>
                                                    <td>{{$permission->name}} </td>
                                                    <td>{{$permission->slug}} </td>
                                                    <td><button class="btn btn-danger">Delete</button> </td>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
            </div>
        </div>
            @endif
    @endsection
</x-admin-master>
