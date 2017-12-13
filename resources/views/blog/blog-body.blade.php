@extends ('layouts.main')

@section('content')

        <div class="container">
            <div class="row">
                <div class="col-md-8">
                        <article>
                            <div class="article-body-heading">
                                <h2>{{ $post->title }}</h2>
                            </div>
                            <p class="blog-author-forhumans">{{ $post->author->name }}</p>
                            <p class="blog-author-forhumans">/</p>
                            <p class="blog-author-forhumans">{{ $post->created_at->diffForHumans() }}</p>
                            <p class="blog-excerpt">{{ $post->body }}</p>
                        </article>
                </div>

                <div class="col-md-4">
                    @include('layouts.sidebar')
                </div>
            </div>
        </div>

 @endsection