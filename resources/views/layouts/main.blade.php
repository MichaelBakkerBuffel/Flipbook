<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <title>Mantelzorg</title>

        <link href='https://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css">
        <link rel="stylesheet" href="{{ url('/') }}/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ url('/') }}/css/custom.css">
</head>
<body>
        <header>
                <nav class="navbar navbar-default navbar-fixed-top second-color">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#the-navbar-collapse" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#">Logo</a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="the-navbar-collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li {{{ (Request::is('/') ? 'class=active' : '') }}} ><a href="{{ url('/') }}">Home</a></li>
                                <li {{{ (Request::is('category/1') ? 'class=active' : '') }}} ><a href="{{ url('/category/1') }}">Voeding</a></li>
                                <li {{{ (Request::is('category/2') ? 'class=active' : '') }}} ><a href="{{ url('/category/2') }}">Valpreventie</a></li>
<<<<<<< HEAD
                                <li {{{ (Request::is('instanties') ? 'class=active' : '') }}} ><a href="{{ url('/instanties') }}">Instanties</a></li> 
=======
                                <li {{{ (Request::is('instanties') ? 'class=active' : '') }}} ><a href="{{ url('/instanties') }}">Instanties</a></li>
>>>>>>> a84e10dc04b4e0e9246dcf97b02d7b6dd7e137c2
                                <li {{{ (Request::is('mantelcheck') ? 'class=active' : '') }}} ><a href="{{ url('/mantelcheck') }}">Mantelzorgtest</a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container -->
                </nav>
        </header>

        @yield('content')

        <footer class="second-color">
            <div class="container">
                    <div class="row">
                            <div class="col-md-8">
                                    <p class="copyright">&copy; 2017 - Flippies</p>
                            </div>
                            <div class="col-md-4">
                                    <nav>
                                            <ul class="social-icons">
                                                    <li><a href="#" class="i fa fa-facebook"></a></li>
                                                    <li><a href="#" class="i fa fa-twitter"></a></li>
                                                    <li><a href="#" class="i fa fa-google-plus"></a></li>
                                                    <li><a href="#" class="i fa fa-github"></a></li>
                                            </ul>
                                    </nav>
                            </div>
                    </div>
            </div>
        </footer>

        <script src="{{ url('/') }}/js/bootstrap.min.js"></script>
               <!-- jQuery 2.2.3 -->
        <script src="http://flipbook.dev/public/backend/js/jquery-2.2.3.min.js"></script>



</body>
</html>
