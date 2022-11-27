<x-admin-master>
    @section('content')
        <div class="row">
            <div class="col-sm-3">
                <form action="{{route('role.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control">
                        <div>
                            @error('name')
                                <span><strong>{{$message}}</strong></span>
                            @enderror
                        </div>
                        <button class="btn btn-primary btn-block">Create</button>
                    </div>

                </form>
            </div>

            <div class="col-sm-9">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Roles</h6>
                    </div>
                    <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered" id="dataTable" width="100%">
                                                    <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Name</th>
                                                        <th>Slug</th>

                                                    </tr>
                                                    </thead>
                                                    <tfoot>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Name</th>
                                                            <th>Slug</th>

                                                        </tr>
                                                    </tfoot>
                                                    <tbody>
                                                    @foreach($roles as $role)
                                                    <tr>
                                                        <td>{{$role->id}} </td>
                                                        <td>{{$role->name}} </td>
                                                        <td>{{$role->slug}} </td>
                                                    </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                </div>
            </div>
        </div>


    @endsection
</x-admin-master>
