<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="{{ asset('favicon.png') }}">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

  <!-- Bootstrap CSS -->
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link href="{{ asset('css/tiny-slider.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <title>E-Market</title>
</head>
	<body>

        					<!-- Start Header/Navigation -->
        <nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">
            <div class="container">
                <a class="navbar-brand" href="{{ route('user.dashboard') }}">E-Market<span>.</span></a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarsFurni">
                    <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">

                        <li class="{{ request()->routeIs('user.shop') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('user.shop') }}">Accueil</a>
                        </li>
                        <li class="{{ request()->routeIs('user.about') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('user.about') }}">A propos de nous</a>
                        </li>
                        <li class="{{ request()->routeIs('user.contact') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('user.contact') }}">Contactez nous</a>
                        </li>
                    </ul>

                    <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                        <li><a class="nav-link" href="#"><img src="{{ asset('images/user.svg') }}"></a></li>
                        <li><a class="nav-link" href="{{ route('user.cart') }}"><img src="{{ asset('images/cart.svg') }}"></a></li>
                    </ul>
                </div>
            </div>
        </nav>
<!-- End Header/Navigation -->
		<!-- End Header/Navigation -->



        <main>
            @yield('content')
        </main>

        <!-- Footer -->
        @include('user.navigation.footer')

        <!-- Scripts -->
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

        @yield('scripts')  <!-- Pour les scripts personnalisés -->

    </body>

</html>
