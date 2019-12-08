<!DOCTYPE html>
<html lang="en">
    <head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">

    <title>PHP Sample Project</title>
    //the use of / is knowing automatically in public folder
    <!-- Bootstrap core CSS -->
    <link href="/frontend/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/frontend/carousel.css" rel="stylesheet">

	<!-- My Custom Style -->
	<link href="/frontend/css/my_style.css" rel="stylesheet">

  	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/frontend/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="/frontend/popper.min.js"></script>
    <script src="/frontend/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="/frontend/holder.min.js"></script>
    
</head>
  <body cz-shortcut-listen="true">

    <header>
		<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
		
		<a class="navbar-brand" href="index.php">PHP Sample Project</a>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
				<a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item">
				<a class="nav-link" href="course">Courses</a>
            </li>

            <li class="nav-item">
				<a class="nav-link" href="gallery">Gallery</a>
            </li>

            <li class="nav-item">
				<a class="nav-link" href="about_us">About Us</a>
            </li>

            <li class="nav-item">
				<a class="nav-link" href="contact_us">Contact Us</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="test">Test</a>
                  </li>
      
          </ul>

          @if (Route::has('login'))
            
                @if (Auth::check())
                    <li class="nav-item">
                    <a href="{{ url('/backend/dashboard') }}">Backend Dashboard</a>
                    </li>
                @else
                    <li class="nav-item right" style="list-style-type:none;">
                    <a href="{{ url('/login') }}">Login</a>
                    </li>

                    <li class="nav-item right" style="list-style-type:none;">
                    <a href="{{ url('/register') }}">Register</a>
                    </li>
                @endif
            
        @endif

          <!-- <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form> -->
		  
        </div>
      </nav>
    </header>

<main role="main">
@include('layouts.frontend.slider')