@extends ('layouts.main')

@section('content')

<<<<<<< HEAD
    <div class="container blokken">
      <div class="col-md-12 row ">
        <div class="col-md-4">
          <div class="card card-styling">
            <div class="module">
              <p class="card-text-styling"><a href="/public/mezzo">Mezzo</a></p>
                <hr class="card-hr">
            </div>
              <div class="card-body">
                 <p class="card-copy"><a href="/public/mezzo">Mezzo is de landelijke vereniging die opkomt voor iedereen die belangeloos zorgt voor een naaste.</a></p>
              </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card card-styling">
            <div class="module">
              <p class="card-text-styling">BMZM</p>
                <hr class="card-hr">
            </div>
              <div class="card-body">
                 <p class="card-copy">De mantelzorgmakelaar is er in de eerste plaats voor mantelzorgers.</p>
              </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card card-styling">
            <div class="module">
              <p class="card-text-styling">Mantelzorglijn</p>
                <hr class="card-hr">
            </div>
              <div class="card-body">
                 <p class="card-copy">Mantelzorgers kunnen hier terecht voor informatie, ondersteuning of gewoon een luisterend oor.</p>
              </div>
          </div>
        </div>
      </div>
    </div>

      <div class="container blokken">
        <div class="col-md-12 row ">
          <div class="col-md-4">
            <div class="card card-styling">
              <div class="module">
                <p class="card-text-styling">WMO-loket</p>
                  <hr class="card-hr">
              </div>
                <div class="card-body">
                   <p class="card-copy">Gemeenten moeten ervoor zorgen dat mensen zo lang mogelijk thuis kunnen blijven wonen.</p>
                </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card card-styling">
              <div class="module">
                <p class="card-text-styling">Wellzo</p>
                  <hr class="card-hr">
              </div>
                <div class="card-body">
                   <p class="card-copy">WELLZO weet mensen te motiveren. Door perspectief te laten ontdekken. Door mensen te verbinden. Van jong tot oud.</p>
                </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card card-styling">
              <div class="module">
                <p class="card-text-styling">Play Mantelzorg</p>
                  <hr class="card-hr">
              </div>
                <div class="card-body">
                   <p class="card-copy">Playmantelzorg is een video-website voor en door mantelzorgers. de site laat zien wat mantelzorgen betekent in het leven van alledag.</p>
                </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container blokken">
        <div class="col-md-12 row ">
          <div class="col-md-4">
            <div class="card card-styling">
              <div class="module">
                <p class="card-text-styling">Apotheker</p>
                  <hr class="card-hr">
              </div>
                <div class="card-body">
                   <p class="card-copy">De apotheker weet alles over medicijnen. En over het combineren van medicijnen.</p>
                </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card card-styling">
              <div class="module">
                <p class="card-text-styling">Mantelzorg cafes</p>
                  <hr class="card-hr">
              </div>
                <div class="card-body">
                   <p class="card-copy">Het mantelzorgcafe is een ontmoetingsplek voor de mantelzorger, met of zonder de verzorgde en biedt mantelzorgers de gelegenheid even de stad in te lopen.</p>
                </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card card-styling">
              <div class="module">
                <p class="card-text-styling">Applicaties</p>
                  <hr class="card-hr">
              </div>
                <div class="card-body">
                   <p class="card-copy">Hieronder zijn enkele applicaties uitgelicht met de primaire functies en het doel van de applicatie.</p>
                </div>
            </div>
          </div>
        </div>
      </div>



    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    @endsection
=======
<div class="jumbotron bodyblock-offset">
  <div class="container text-center">
    <h1>Welkom!</h1>
    <p>Hier vindt u informatie over voeding en valpreventie voor mantelzorgers</p>
  </div>
</div>

<div class="container text-center">
    <div class="row flex">
        <div class="col-md-4 bodyblock">
            <div class="bodyblock-padding second-color">
                <h1>Voeding</h1>
                <div class="img-container"><img src="img/voeding.jpg" class="img-responsive" alt="Image"></div>
                <p>Bent u op zoek naar informatie over voeding?</p>
                <a href="category/1"><button>Meer informatie</button></a>
            </div>
        </div>
        <div class="col-md-4 bodyblock">
             <div class="bodyblock-padding second-color">
                <h1>Valpreventie</h1>
                <div class="img-container"><img src="img/valpreventie.jpg" class="img-responsive" alt="Image"></div>
                <p>Bent u op zoek naar informatie over valpreventie?</p>
                 <a href="category/2"><button>Meer informatie</button> </a>
            </div>
        </div>
        <div class="col-md-4 bodyblock">
             <div class="bodyblock-padding second-color">
                <h1>Mantelzorgtest</h1>
                <div class="img-container"><img src="img/mantelcheck.jpg" class="img-responsive" alt="Image"></div>
                <p>Niet zeker of u mantelzorger bent?</p>
                <a href="mantelcheck"><button>Doe de test</button></a>
            </div>
        </div>
    </div>
</div>

<div class="backgroudcolor-offset third-color">
    <div class="container text-center">
        <div class="row">
            <div class="col-sm-12 hulp-bij-mantelzorg">
                <h1>Hulp bij mantelzorg</h1>
                <p>Bij het geven van zorg komt veel bij kijken! In veel gevallen kunt u hulp krijgen of vergoedingen</p>
                <button>Meer informatie</button>
            </div>
        </div>
    </div>
</div>


<div class="container text-center">
    <div class="row">
        <div class="col-sm-12 ">
            <h1>Handige tips</h1>
        </div>
    </div>
    <div class="row text-left tips">
        <div class="col-sm-4">
            <ul>
                <li>Zorg dat de oudere niet te gehaast opstaat en snel even van woonkamer naar keuken of omgekeerd loopt. Dit gehaast kan duizeligheid veroorzaken of ervoor zorgen dat de oudere struikelt</li>

                <li>Drempels verhogen het risico op vallen. Een oudere kan er makkelijk achter blijven haken, struikelen en zo vallen. Drempels zouden daarom het best verwijderd kunnen worden. Is dit niet mogelijk zorg dan dat de drempels schuin afgewerkt zijn, dit verkleind de kans op struikelen</li>

                <li>Zorg voor meubilair dat hoog is, zodat opstaan makkelijk gaat. Ook moet het meubilair leuningen bevatten voor steun</li>
            </ul>
        </div>
        <div class="col-sm-4">
            <ul>
                <li>Zorg dat woonkamer en keuken toegankelijk zijn en niet te vol staan. Hoe toegankelijker/ruimer de ruimtes, des te kleiner de kans op vallen</li>

                <li>Zorg dat de vloeren schoon en droog zijn. Bakboter bijvoorbeeld zorgt dat de vloer glad wordt, wat weer valgevaar met zich meebrengt. Hetzelfde geldt voor als de vloer gedweild is</li>

                <li>Zorg dat losse kabels niet over de vloer slingeren. Een oudere kan hier makkelijk in blijven haken en vallen. Losse kabels kunnen weggewerkt worden door bijvoorbeeld kabelgoten</li>
            </ul>
        </div>
        <div class="col-sm-4">
            <ul>
                <li>Een bed zou de juiste hoogte moeten hebben, waardoor een oudere makkelijk eruit kan komen, maar ook makkelijk erin. Hulpmiddelencentra verkopen allerhande steunen en zelfs verstelbare bedden om zo opstaan en in bed gaan te vermakkelijken</li>

                <li>Een nachtlampje is handig, om zo voldoende zicht te creëren</li>

                <li>Pantoffels worden geadviseerd, omdat ze antislip bevatten en zo het risico op vallen verkleinen, MAAR: denk erom waar de pantoffels worden uitgetrokken. Als ze in het pad liggen kan iemand er over struikelen en vallen.</li>

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
>>>>>>> a84e10dc04b4e0e9246dcf97b02d7b6dd7e137c2
