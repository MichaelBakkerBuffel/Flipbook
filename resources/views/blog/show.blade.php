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
                            <p class="blog-author-forhumans">{{ $post->author->name }}</p>
                            <p class="blog-author-forhumans">/</p>
                            <p class="blog-author-forhumans">{{ $post->created_at->diffForHumans() }}</p>
                            <p class="blog-excerpt">{{ $post->excerpt }}</p>
                            <button class="readmore">Lees meer</button>
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