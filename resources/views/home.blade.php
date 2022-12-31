<x-home-master>

@section('content')
    <h1>home</h1>


        <!-- Blog Post -->
    @foreach($post as $posts)
        <div class="card mb-4">
            <img class="card-img-top" src="{{$posts->post_image}}" alt="Card image cap">
            <div class="card-body">
                <h2 class="card-title">{{$posts->title}}</h2>
                <p class="card-text">{{Str::limit($posts->body, '300', '...')}}</p>
                <a href="{{route('post', $posts->id)}}" class="btn btn-primary">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">
                Posted on {{$posts->updated_at}} by
                <a href="">{{$posts->user->name}}</a>
            </div>
        </div>
        @endforeach



        <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">
            <li class="page-item">
                <a class="page-link" href="#">&larr; Older</a>
            </li>
            <li class="page-item disabled">
                <a class="page-link" href="#">Newer &rarr;</a>
            </li>
        </ul>
@endsection
</x-home-master>
