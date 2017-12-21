
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
                     <li>
                       <a href="{{ $category->id }}?term=video">Video / Filmpjes</a>
                     </li>
                @endforeach
            </ul>

        </div>
    </div>

</aside>