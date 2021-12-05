<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link rel="stylesheet" href="styleshit.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
        <title>{{ config('app.name') }}</title>
        <style>
            .backgr2 {
  /* Use "linear-gradient" to add a darken background effect to the image (photographer.jpg). This will make the text easier to read */
 

  /* Set a specific height */
  width: 100%;
  
  height: 6px;
  background-size: cover;
  /* Position and center the image to scale nicely on all screens */
  background-position: center;
  background-repeat: no-repeat;


}


        </style>
    </head>
    <body>
        @section('sidebar')
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container">
                    <a class="navbar-brand" href="{{ URL::to('/') }}">{{ config('app.name') }}</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarScroll">
                        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ URL::to('/') }}">{{ __('research project') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ URL::to('/galery') }}">{{ __('team') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ URL::to('/regional') }}">{{ __('regional synthesis report') }}</a>
                            </li>
							<li class="nav-item">
                                <a class="nav-link" href="{{ URL::to('/contact') }}">{{ __('Contact') }}</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ __('Other') }}
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                                    <li><a class="dropdown-item" href="{{ URL::to('https://taxdesignation.org/') }}">{{ __('taxdesignation.org/') }}</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="d-flex">
                            <a class="btn btn-outline-info" href="{{ URL::to('/register') }}">{{ __('Register') }}</a>
                            <div class="mx-1"></div>
                            <a class="btn btn-outline-success" href="{{ URL::to('/login') }}">{{ __('Login') }}</a>
                        </div>
                    </div>
                </div>
            </nav>
            
        <?php if (URL::current() == url('/')) : ?><a href="#ide"><div class="backgr1"></div></a>
        <?php else: ?> 
        <div class="backgr2"></div>
        <?php endif; ?>
        @show

        <div class="container" ID="ide">
            @yield('content')

            <footer class="pt-4 my-md-5 pt-md-5 border-top">
                <div class="row">
                    <div class="col-12 col-md">
                        <img class="mb-2" src="{{ asset('/images/logo.png') }}" alt="{{ config('app.name') }}" width="200" height="100">
                        <small class="d-block mb-3 text-muted">&copy; {{ date('Y') }}</small>
                    </div>
            </footer>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    </body>
</html>
