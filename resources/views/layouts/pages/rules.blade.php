<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Filler Form online test') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/index.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
</head>

<body class="antialiased">
    @include('layouts.components.navigation')

    <div class="main">
        <h5>Lorem Ipsum</h5>
        <br>
        <div class="link_p"></div>
        <div class="link_pl">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere ullam voluptatibus quo possimus nulla id tempore corporis accusantium ducimus necessitatibus.</p>
        </div>
        <br>
        <div class="link_p"></div>
        <div class="link_pl">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere ullam voluptatibus quo possimus nulla id tempore corporis accusantium ducimus necessitatibus.</p>
        </div>
        <br>
        <div class="link_p"></div>
        <div class="link_pl">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere ullam voluptatibus quo possimus nulla id tempore corporis accusantium ducimus necessitatibus.</p>
        </div>
        <br>
        <div class="link_p"></div>
        <div class="link_pl">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere ullam voluptatibus quo possimus nulla id tempore corporis accusantium ducimus necessitatibus.</p>
        </div>
        <br>
        <div class="link_p"></div>
        <div class="link_pl">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere ullam voluptatibus quo possimus nulla id tempore corporis accusantium ducimus necessitatibus.</p>
        </div>
        <br>
        <div class="link_p"></div>
        <div class="link_pl">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere ullam voluptatibus quo possimus nulla id tempore corporis accusantium ducimus necessitatibus.</p>
        </div>
        <br>
        <br>
        <h5>Lorem Ipsum</h5>
        <br>
        <div class="link_p"></div>
        <div class="link_pl">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere ullam voluptatibus quo possimus nulla id tempore corporis accusantium ducimus necessitatibus.</p>
        </div>
        <br>
        <div class="link_p"></div>
        <div class="link_pl">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere ullam voluptatibus quo possimus nulla id tempore corporis accusantium ducimus necessitatibus.</p>
        </div>
        <br>
        <div class="link_p"></div>
        <div class="link_pl">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere ullam voluptatibus quo possimus nulla id tempore corporis accusantium ducimus necessitatibus.</p>
        </div>
        <br>
        <div class="link_p"></div>
        <div class="link_pl">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere ullam voluptatibus quo possimus nulla id tempore corporis accusantium ducimus necessitatibus.</p>
        </div>
        <br>
        <div class="link_p"></div>
        <div class="link_pl">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere ullam voluptatibus quo possimus nulla id tempore corporis accusantium ducimus necessitatibus.</p>
        </div>
        <br>
        <div class="link_p"></div>
        <div class="link_pl">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere ullam voluptatibus quo possimus nulla id tempore corporis accusantium ducimus necessitatibus.</p>
        </div>
        <br><br>
        <form action="/exam" method="get">
    <p>
        <input type="checkbox" value="checkbox" id="chkBox" />I HAVE READ AND ACCEPT THE <a href="">TERMS & CONDITIONS</a>

    </p>
    <br/>
    <input disabled="disabled" type="submit" id="btnSubmit" class="button-grey" value="Start Exam" />
</form>
    <br><br>
</body>

</html>