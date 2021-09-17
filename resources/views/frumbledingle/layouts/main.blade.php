<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Frumbledingle - @yield('page_title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <style>
        main > .container {
  padding: 60px 15px 0;
}

    </style>
    @yield('page_style')
</head>

<body class="d-flex flex-column h-100">

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">
            <div class="container">
                <a class="navbar-brand" href="{{ route('frumbledingle.home') }}">
                    <i class="fa fa-object-group"></i> Frumbledingle Corp
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#appNavbar" aria-controls="appNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="appNavbar">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item {{ Route::is('frumbledingle.home') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('frumbledingle.home') }}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item {{ Route::is('frumbledingle.locations') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('frumbledingle.locations') }}">Locations</a>
                    </li>
                    <li class="nav-item {{ Route::is('frumbledingle.items') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('frumbledingle.items') }}">Items</a>
                    </li>
                    <li class="nav-item {{ Route::is('frumbledingle.categories') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('frumbledingle.categories') }}">Categories</a>
                    </li>
                    <li class="nav-item {{ Route::is('frumbledingle.report') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('frumbledingle.report') }}">Report</a>
                    </li>
                </ul>
                
                </div>
            </div>
        </nav>
    </header>

    <main role="main" class="flex-shrink-0">
        <div class="container" id="app-container">
            @yield('content')
        </div>
    </main>

    <footer class="footer mt-auto py-3">
        <div class="container">
            <span class="text-muted">
                &copy; {{ date('Y') }} {{ config('app.name') }}
            </span>
        </div>
    </footer>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    @yield('xtra-scripts')
    <script src=" {{ asset('js/frumbledingle/app.js') }}"></script>
</body>

</html>