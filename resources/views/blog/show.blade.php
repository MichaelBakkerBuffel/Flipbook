@extends ('layouts.main')

@section('content')

        <div class="container">
                <div class="row">

                @foreach($posts as $post)

                    <h2>{{ $post->title }}</h2>
                    <p>{{ $post->excerpt }}</p>

                @endforeach

                </div>

                       @include('layouts.sidebar')
                </div>
        </div>

 @endsection
