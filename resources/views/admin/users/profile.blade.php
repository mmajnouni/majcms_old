<x-admin-master>
    @section('content')
        <h1>User Profile: {{$user->name}}</h1>
        <div class="row">
            <div class="col-sm-6">
                <form method="post" action="" enctype="multipart/form-data" >
                    @csrf
                    <div class="mb-4">
                        <img src="https://picsum.photos/id/1006/150/150" alt="">
                    </div>
                    <div class="form-group">
                        <input type="file">
                    </div>
                  <div class="form-group">
                    <label for="name">Name </label>
                    <input type="text" name="name" class="form-control" id="name" aria-describedby=""
                           placeholder="{{$user->name}}">
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control" id="email" aria-describedby=""
                           placeholder="{{$user->email}}">
                  </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="text" name="password" class="form-control" id="password" aria-describedby="">
                    </div>
                    <div class="form-group">
                        <label for="password_confirm">Password Confirmation</label>
                        <input type="text" name="password_confirm" class="form-control" id="password_confirm" aria-describedby="">
                    </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    @endsection
</x-admin-master>
