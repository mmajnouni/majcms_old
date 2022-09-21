<x-admin-master>
    @section('content')
        <h1 class="h3 mb-4 text-gray-800">View All Posts</h1>
            @if(Session::has('message'))
                <div class="alert alert-danger">{{Session::get('message')}}</div>
        @elseif(Session::has('createMessage'))
            <div class="alert alert-success">{{Session::get('createMessage')}}</div>
            @endif
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Owner</th>
                            <th>Title</th>
                            <th>Image</th>
                             <th>Created At</th>
                            <th>Updated At</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Owner</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                        </tr>
                         <tbody>
                            @foreach($posts as $post)
                                <tr>
                                    <td>{{$post->id}}</td>
                                    <th>{{$post->user->name}}</th>
                                    <td>{{$post->title}}</td>
                                    <td><div><img height="40px" src="{{asset($post->post_image)}}"></div></td>
                                    <td>{{$post->created_at->diffForHumans()}}</td>
                                    <td>{{$post->updated_at->diffForHumans()}}</td>
                                    <td>
                                        <form method="post" action="{{route('post.destroy', $post->id)}}" enctype="multipart/form-data" >
                                            @csrf
                                            @method('DELETE')

                                          <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                         </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endsection
    @section('scripts')
            <!-- Page level plugins -->
            <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
            <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

            <!-- Page level custom scripts -->
            <script src="{{asset('js/demo/datatables-demo.js')}}"></script>
        @endsection
</x-admin-master>
