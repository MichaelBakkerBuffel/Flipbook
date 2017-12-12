@extends ('layouts.main')

@section('content')

        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    @foreach($posts as $post)
                        <article>
                            <div class="article-heading">
                                <h2>{{ $post->title }}</h2>
                            </div>
                            <p>{{ $post->excerpt }}</p>
                            <p>{{ $post->author->name }}</p>
                            <p>{{ $post->created_at->diffForHumans() }}</p>
                        </article>
                    @endforeach

                    <!-- pagination -->
                    {{ $posts->links() }}
                </div>

                <div class="col-md-4">
                    @include('layouts.sidebar')
                </div>
            </div>
        </div>

 @endsection