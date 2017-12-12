@extends ('layouts.main')

@section('content')

<div class="jumbotron bodyblock-offset">
  <div class="container text-center">
    <h1>Welkom!</h1>      
    <p>Doe de mantelcheck!</p>
  </div>
</div>

<div class="container text-center">
	<div class="row">
		<div class="col-md-4 bodyblock">
			<div class="bodyblock-padding second-color">
				<h3>Kopje</h3>
				<img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
				<p>hier komt text</p>
				<button>Dit is een knop</button>
			</div>
	    </div>
	    <div class="col-md-4 bodyblock">
		     <div class="bodyblock-padding second-color">
				<h3>Kopje</h3>
				<img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
				<p>hier komt text</p>
				<button>Dit is een knop</button>
			</div>
	    </div>
	    <div class="col-md-4 bodyblock">
			 <div class="bodyblock-padding second-color">
				<h3>Kopje</h3>
				<img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
				<p>hier komt text</p>
				<button>Dit is een knop</button>
			</div>
	    </div>
	</div>
</div>

<div class="backgroudcolor-offset third-color">
	<div class="container text-center">
		<div class="row">
			<div class="col-sm-12 hulp-bij-mantelzorg">
				<h1>Hulp bij mantelzorg</h1>
				<p>Hier komt text te staan</p>
				<button>Dit is een knop</button>
			</div>
		</div>
	</div>
</div>


<div class="container text-center">
	<div class="row">
		<div class="col-sm-12 ">
			<h1>Handige tips</h1>
			<p>Hier komt tekst te staan</p>
		</div>
	</div>
	<div class="row text-left">
		<div class="col-sm-4">
			<ul>
				<li>Hier</li>
				<li>Komen</li>
				<li>Tips</li>
				<li>Te</li>
				<li>Staan</li>
			</ul>
		</div>
		<div class="col-sm-4">
			<ul>
				<li>Hier</li>
				<li>Komen</li>
				<li>Tips</li>
				<li>Te</li>
				<li>Staan</li>
			</ul>
		</div>
		<div class="col-sm-4">
			<ul>
				<li>Hier</li>
				<li>Komen</li>
				<li>Tips</li>
				<li>Te</li>
				<li>Staan</li>
			</ul>
		</div>
	</div>
</div>

       {{--  <div class="container">
                <div class="row">
                    
                        <div class="col-md-8">
                                <article class="post-item">
                                        <div class="post-item-image">
                                                <a href="post.html">
                                                        <img src="img/Post_Image_1.jpg" alt="">
                                                </a>
                                        </div>
                                        <div class="post-item-body">
                                                <div class="padding-10">
                                                        <h2><a href="post.html">Lorem ipsum dolor sit amet, consectetur adipisicing elit</a></h2>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos voluptas, blanditiis impedit repellat harum, eaque saepe aspernatur quo magnam obcaecati dolor! Deleniti quod repellendus non iste architecto, voluptate excepturi velit.</p>
                                                </div>

                                                <div class="post-meta padding-10 clearfix">
                                                        <div class="pull-left">
                                                                <ul class="post-meta-group">
                                                                        <li><i class="fa fa-user"></i><a href="#"> Admin</a></li>
                                                                        <li><i class="fa fa-clock-o"></i><time> February 12, 2016</time></li>
                                                                        <li><i class="fa fa-tags"></i><a href="#"> Blog</a></li>
                                                                        <li><i class="fa fa-comments"></i><a href="#">4 Comments</a></li>
                                                                </ul>
                                                        </div>
                                                        <div class="pull-right">
                                                                <a href="post.html">Continue Reading &raquo;</a>
                                                        </div>
                                                </div>
                                        </div>
                                </article>
                                <article class="post-item">
                                        <div class="post-item-image">
                                                <a href="post.html">
                                                        <img src="img/Post_Image_2.jpg" alt="">
                                                </a>
                                        </div>
                                        <div class="post-item-body">
                                                <div class="padding-10">
                                                        <h2><a href="post.html">Lorem ipsum dolor sit amet, consectetur adipisicing elit</a></h2>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos voluptas, blanditiis impedit repellat harum, eaque saepe aspernatur quo magnam obcaecati dolor! Deleniti quod repellendus non iste architecto, voluptate excepturi velit.</p>
                                                </div>

                                                <div class="post-meta padding-10 clearfix">
                                                        <div class="pull-left">
                                                                <ul class="post-meta-group">
                                                                        <li><i class="fa fa-user"></i><a href="#"> Admin</a></li>
                                                                        <li><i class="fa fa-clock-o"></i><time> February 12, 2016</time></li>
                                                                        <li><i class="fa fa-tags"></i><a href="#"> Blog</a></li>
                                                                        <li><i class="fa fa-comments"></i><a href="#">4 Comments</a></li>
                                                                </ul>
                                                        </div>
                                                        <div class="pull-right">
                                                                <a href="post.html">Continue Reading &raquo;</a>
                                                        </div>
                                                </div>
                                        </div>
                                </article>
                                <article class="post-item">
                                        <div class="post-item-image">
                                                <a href="post.html">
                                                        <img src="img/Post_Image_3.jpg" alt="">
                                                </a>
                                        </div>
                                        <div class="post-item-body">
                                                <div class="padding-10">
                                                        <h2><a href="post.html">Lorem ipsum dolor sit amet, consectetur adipisicing elit, consectetur adipisicing elit</a></h2>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos voluptas, blanditiis impedit repellat harum, eaque saepe aspernatur quo magnam obcaecati dolor! Deleniti quod repellendus non iste architecto, voluptate excepturi velit.</p>
                                                </div>

                                                <div class="post-meta padding-10 clearfix">
                                                        <div class="pull-left">
                                                                <ul class="post-meta-group">
                                                                        <li><i class="fa fa-user"></i><a href="#"> Admin</a></li>
                                                                        <li><i class="fa fa-clock-o"></i><time> February 12, 2016</time></li>
                                                                        <li><i class="fa fa-tags"></i><a href="#"> Vue Js</a>, <a href="#"> Laravel</a></li>
                                                                        <li><i class="fa fa-comments"></i><a href="#">4 Comments</a></li>
                                                                </ul>
                                                        </div>
                                                        <div class="pull-right">
                                                                <a href="post.html">Continue Reading &raquo;</a>
                                                        </div>
                                                </div>
                                        </div>
                                </article>



                                <nav>
                                    <ul class="pager">
                                        <li class="previous disabled"><a href="#"><span aria-hidden="true">&larr;</span> Newer</a></li>
                                        <li class="next"><a href="#">Older <span aria-hidden="true">&rarr;</span></a></li>
                                    </ul>
                                </nav>
                        </div>    
                       @include('layouts.sidebar')
                </div> --}}
        </div>
 @endsection
