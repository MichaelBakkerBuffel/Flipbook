@extends ('layouts.main')

@section('content')

        <div class="container">
                <div class="row">

                @foreach($posts as $post)

                    <h2>{{ $post->title }}</h2>
                    <p>{{ $post->excerpt }}</p>
                    <p>{{ $post->author->name }}</p>
                    <p>{{ $post->created_at->diffForHumans() }}</p>


                @endforeach

                </div>

                {{ $posts->links() }}   

                       @include('layouts.sidebar')


                </div>
        </div>

 @endsection
