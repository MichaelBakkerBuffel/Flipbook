@extends ('layouts.main')

@section('content')

        <div class="container">
            <div class="row">
                <div class="col-md-8">
                 @if (! $posts->count())
                    <div class="alert alert-warning">
                        <p>Geen resultaten</p>
                    </div>
                @else
                @if ($term = request(''))
                    <div class="alert alert-info">
                        <p>Zoekresultaten<strong>{{ $term }}</strong></p>
                    </div>
                @endif

                    @foreach($posts as $post)
                        <article>
                            <div class="article-heading">
                                <h2>{{ $post->title }}</h2>
                            </div>
                            <div class="blog-author-forhumans-wrapper">
                                <p class="blog-author-forhumans">{{ $post->author->name }}</p>
                                <p class="blog-author-forhumans">/</p>
                                <p class="blog-author-forhumans">{{ $post->created_at->diffForHumans() }}</p>
                            </div>
                            <p class="blog-excerpt">{{ $post->excerpt }}</p>
                            <a href="post/{{ $post->id }}" class="readmore">Lees meer</a>
                        </article>
                    @endforeach

                    @endif

                    <!-- pagination -->
                    {{ $posts->links() }}
                </div>

                <div class="col-md-4">
                    @include('layouts.sidebar')
                </div>
            </div>
        </div>

 @endsection