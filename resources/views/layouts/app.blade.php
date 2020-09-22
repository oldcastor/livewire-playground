<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Livewire basics</title>

    <link rel="stylesheet" href="css/bulma.css">

    <style>
        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }
    </style>

    <style>
        body {
            font-family: 'Nunito';
        }
    </style>
    @livewireStyles
</head>

<body class="antialiased">


    <div class="hero is-dark is-bold is-small">
        <div class="tabs is-boxed is-centered">
            <ul>
                @foreach (App\Models\Menus\MainMenu::all() as $menu)
                <li @if (url($menu->path) == url()->current())
                    class="is-active"
                    @endif><a href="{{$menu->path}}">{{$menu->caption}}</a></li>
                @endforeach

            </ul>
        </div>
    </div>




    @yield('body')
    @livewireScripts
</body>

</html>