<x-admin-master>
    @section('content')
        <h1>User Profile: {{$user->name}}</h1>
        <div class="row">
            <div class="col-sm-6">
                <form method="post" action="{{route('user.profile.update', $user->id)}}" enctype="multipart/form-data" >
                    @csrf
                    @method('PUT')
                    <div class="mb-4">
                        <img src="{{asset($user->avatar)}}" alt="" width="200px">
                    </div>
                    <div class="form-group">
                        <input type="file" name="avatar">
                    </div>
                    <div class="form-group">
                        <label for="username">User Name </label>
                        <input type="text" name="username" class="form-control" id="username" aria-describedby="" readonly
                               value="{{$user->username}}">
                    </div>
                  <div class="form-group">
                    <label for="name">Name </label>
                    <input type="text" name="name" class="form-control
                        @error('name')
                        is-invalid
                        @enderror
" id="name" aria-describedby=""
                           value="{{$user->name}}">
                      @error('name')
                      <div class="invalid-feedback">{{$message}}</div>
                      @enderror
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control
                        @error('email')
                        is-invalid
                        @enderror" id="email" aria-describedby=""
                           value="{{$user->email}}">
                      @error('email')
                      <div class="invalid-feedback">{{$message}}</div>
                      @enderror
                  </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control
                            @error('password')
                            is-invalid
                            @enderror" id="password" aria-describedby=""
                               value="{{$user->password}}">
                        @error('password')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
{{--                    <div class="form-group">--}}
{{--                        <label for="password_confirm">Password Confirmation</label>--}}
{{--                        <input type="password" name="password_confirm" class="form-control--}}
{{--                            @error('password_confirm')--}}
{{--                            is-invalid--}}
{{--                            @enderror" id="password_confirm" aria-describedby=""--}}
{{--                               value="{{$user->password}}">--}}
{{--                        @error('password_confirm')--}}
{{--                        <div class="invalid-feedback">{{$message}}</div>--}}
{{--                        @enderror--}}
{{--                    </div>--}}
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    @endsection
</x-admin-master>
