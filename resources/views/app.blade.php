<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tips</title>

        <link rel="stylesheet" href="{{ asset( 'css/app.css' ) }}">

        <style>
            .active {
                background: #999;
            }
        </style>

    </head>
    <body>
        
        {{-- Container --}}
        <div class="container">
            
            {{-- Menú de navegación --}}
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a href="#" class="navbar-brand">Tips</a>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item {{ request()->is( '/' ) ? 'active' : '' }}">
                        <a href="{{ route( 'home' ) }}" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item {{ request()->is( 'nosotros' ) ? 'active' : '' }}">
                        <a href="{{ route( 'about' ) }}" class="nav-link">Nosotros</a>
                    </li>
                </ul>
            </nav>
            {{-- Fin Menú de navegación --}}
            
            @yield('content')

            <hr>

            <p>
                La ruta es: {{ request()->path() }}
            </p>

            <p>
                La ruta completa es: {{ request()->url() }}
            </p>
            
        </div>
        {{-- Fin Container --}}


    </body>
</html>
