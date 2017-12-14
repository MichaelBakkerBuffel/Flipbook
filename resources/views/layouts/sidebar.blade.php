
{{--  Search bar --}} 
<aside class="right-sidebar">
    <div class="search-widget">
        <form action="{{ route('blog') }}">
            <div class="input-group">
                <input type="text" class="form-control input-lg" value="{{ request('term') }}" name="term" placeholder="Zoeken naar...">
                    <span class="input-group-btn">
                        <button class="btn btn-lg btn-default" type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
        </form>
    </div>
        
    {{-- Categorie --}}
    <div class="widget">
        <div class="widget-heading">
            <h4>Categorieën</h4>
        </div>
        <div class="widget-body">
            <ul class="categories">
                @foreach ($categories as $category)
                <li>
                    <a href="{{ route('category', $category->id) }}"><i class="fa fa-angle-right"></i> {{ $category->title }} </a>
                    <span class="badge pull-right"> {{ $category->posts->count() }} </span>
                </li>
                @endforeach
            </ul>
        </div>
    </div>

    {{-- Populair posts --}}
    <div class="widget">
        <div class="widget-heading">
            <h4>Populaire Posts</h4>
        </div>
        <div class="widget-body">
            <ul class="popular-posts">
                <li>
                    <div class="post-image">
                        <a href="#">
                            <img src="{{ url('/') }}/img/Post_Image_5_thumb.jpg" />
                        </a>
                    </div>
                    <div class="post-body">
                        <h6><a href="#">Blog Post #5</a></h6>
                        <div class="post-meta">
                            <span>36 minutes ago</span>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="post-image">
                        <a href="#">
                            <img src="{{ url('/') }}/img/Post_Image_4_thumb.jpg" />
                        </a>
                    </div>
                    <div class="post-body">
                        <h6><a href="#">Blog Post #4</a></h6>
                        <div class="post-meta">
                            <span>36 minutes ago</span>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="post-image">
                        <a href="#">
                            <img src="{{ url('/') }}/img/Post_Image_3_thumb.jpg" />
                        </a>
                    </div>
                    <div class="post-body">
                        <h6><a href="#">Blog Post #3</a></h6>
                        <div class="post-meta">
                            <span>36 minutes ago</span>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    
</aside>