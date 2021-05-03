@extends('app')
@section('content')
<div class="container" style="min-height: 60vh">
    <div class="row">
        @foreach ($posts as $post)
        <div class="card col-md-4" style="width: 18rem;">
            <img class="card-img-top" src="{{ $post->image }}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{ $post->title }}</h5>
                <p class="card-text">{{ $post->short_description }}</p>
                <a href="#" class="btn btn-primary">Read more</a>
            </div>
        </div>
        @endforeach
    </div>
    <div style="margin: 20px">
        {{ $posts->links() }}
    </div>
</div>
@endsection
