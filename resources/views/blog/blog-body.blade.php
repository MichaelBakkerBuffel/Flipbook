@extends ('layouts.main')

@section('content')

        <div class="container">
            <div class="row">
                <div class="col-md-8">
                        <!-- Breadcrumbs -->
                        <div class="breadcrumb">
                            <a href="/">Home</a> >

                            @foreach ($categories as $category)
                                @if ($post->category_id == $category->id)
                                    <a href="">{{$category->title}}</a>
                                @endif
                            @endforeach

                            > <a href="">{{ $post->title }}</a>
                            
                        </div>
                        <article>
                            <div class="article-body-heading">
                                <h2>{{ $post->title }}</h2>
                            </div>
                            <div class="blog-author-forhumans-wrapper">
                                <p class="blog-author-forhumans">{{ $post->author->name }}</p>
                                <p class="blog-author-forhumans">/</p>
                                <p class="blog-author-forhumans">{{ $post->created_at->diffForHumans() }}</p>
                            </div>
                            <p class="blog-excerpt">{!!html_entity_decode($post->body) !!}</p>
                        </article>
                </div>

                <div class="col-md-4">
                    @include('layouts.sidebar')
                </div>
            </div>
        </div>

 @endsection