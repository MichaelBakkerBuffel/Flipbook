
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
            <h4>Categoriën</h4>
        </div>
        <div class="widget-body">
            <ul class="categories">
                <li>
                    <a href="#"><i class="fa fa-angle-right"></i> Web Development</a>
                    <span class="badge pull-right">10</span>
                </li>
                <li>
                    <a href="#"><i class="fa fa-angle-right"></i> Web Design</a>
                    <span class="badge pull-right">10</span>
                </li>
                <li>
                    <a href="#"><i class="fa fa-angle-right"></i> General</a>
                    <span class="badge pull-right">10</span>
                </li>
                <li>
                    <a href="#"><i class="fa fa-angle-right"></i> DIY</a>
                    <span class="badge pull-right">10</span>
                </li>
                <li>
                    <a href="#"><i class="fa fa-angle-right"></i> Facebook Development</a>
                    <span class="badge pull-right">10</span>
                </li>
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