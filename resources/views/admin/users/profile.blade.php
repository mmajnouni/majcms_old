<x-admin-master>
    @section('content')
        <h1>User Profile: {{$user->name}}</h1>
        <div class="row">
            <div class="col-sm-6">
                <form method="post" action="{{route('user.profile.update', $user->id)}}" enctype="multipart/form-data" >
                    @csrf
                    @method('PUT')
                    <div class="mb-4">
                        <img src="{{$user->avatar}}" alt="" width="200px">
                    </div>
                    <div class="form-group">
                        <input type="file" name="avatar">
                    </div>
                    <div class="form-group">
                        <label for="username">User Name </label>
                        <input type="text" name="username" class="form-control" id="username" aria-describedby="" readonly
                               value="{{$user->username}}">
                        @error('username')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                  <div class="form-group">
                    <label for="name">Name </label>
                    <input type="text" name="name" class="form-control" id="name" aria-describedby=""
                           value="{{$user->name}}">
                      @error('name')
                      <div class="alert alert-danger">{{$message}}</div>
                      @enderror
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control" id="email" aria-describedby=""
                           value="{{$user->email}}">
                      @error('email')
                      <div class="alert alert-danger">{{$message}}</div>
                      @enderror
                  </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="text" name="password" class="form-control" id="password" aria-describedby="">
                        @error('password')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password_confirm">Password Confirmation</label>
                        <input type="text" name="password_confirm" class="form-control" id="password_confirm" aria-describedby="">
                        @error('password_confirm')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    @endsection
</x-admin-master>
