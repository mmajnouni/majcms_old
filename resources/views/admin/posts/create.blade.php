<x-admin-master>
    @section('content')
        <h2>Create</h2>
   <form method="post" action="{{route('post.store')}}" enctype="multipart/form-data" >
       @csrf
     <div class="form-group">
       <label for="title">Title</label>
       <input type="text" name="title" class="form-control" id="title" aria-describedby="" placeholder="Enter Title">
     </div>
     <div class="form-group">
       <label for="file">File</label>
       <input type="file" name="post_image" class="form-control-file" id="post_image">
     </div>
       <div class="form-group">
           <textarea name="body" id="body" cols="30" rows="10" class="form-control"></textarea>
       </div>
     <button type="submit" class="btn btn-primary">Submit</button>
   </form>

    @endsection
</x-admin-master>
