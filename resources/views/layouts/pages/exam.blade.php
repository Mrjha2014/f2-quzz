



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
       <div class="test_box">
        <div class="test_hed">
            <div class="titel">
                <a class="navbar-brand" href="/"> <img src="img/Path 1.png" alt=""></a>
                <a aria-current="page" href="/">Filler Form</a>
            </div>
            <div class="row">
                <div class="col-1">
                </div>
                <div class="col-3 ">
                    <div class="hed_mar">
                        <h5>Candidate Name</h5>
                        <P> {{ Auth::user()->name }} </P>
                        <h5>Exam Name</h5>
                        <P>Some Name</P>
                    </div>
                </div>
                <div class="col-3">
                    <div class="hed_mar">
                        <h5>Remaining Time</h5>
                        <P>00:00</P>
                        <h5>Subject Name</h5>
                        <P>Some Name</P>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <img class="test_img" src="https://www.w3schools.com/howto/img_avatar.png" alt="Avatar">
    <br>
    </div>
    <div class="qustion">

@foreach ($qustion as $item)
  <h6><b>Q {{$item->qid}}. </b>{{$item->qustion}}</h6>
@endforeach
    </div>

    <div class="options">
        <p><b>A. </b>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Et, officiis perspiciatis? Quidem corporis iusto voluptatum?</p>
        <p><b>B. </b>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Et, officiis perspiciatis? Quidem corporis iusto voluptatum?</p>
        <p><b>C. </b>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Et, officiis perspiciatis? Quidem corporis iusto voluptatum?</p>
        <p><b>D. </b>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Et, officiis perspiciatis? Quidem corporis iusto voluptatum?</p>
    </div>
    <div class="options_btn_row">
        <div class="row">
            <div class="col-10">
                <button class="options_btn">A</button>
                <button class="options_btn">B</button>
                <button class="options_btn">C</button>
                <button class="options_btn">D</button>
            </div>
        </div>
    </div>
    <div class="options_btn_are">
        <div class="options_btn_row">
            <div class="row">
                <div class="col-12">
                    <button class="options_btn revew_btn1">Save & Next</button>
                    <button class="options_btn revew_btn2 btn btn-danger">Clear</button>
                    <button class="options_btn revew_btn3">Save & Mark for Review</button>
                    <button class="options_btn revew_btn3">Mark for Review & Next</button>
                </div>
            </div>
        </div>
    </div>
    <div class="submit_area">
        <div class="row">
            <div class="col-9">
                <button class="options_btn ">&lt;&lt;Back</button>
                <button class="options_btn revew_btn2">Next &gt;&gt;</button>
            </div>
            <div class="col-3">
                <button class="options_btn btn btn-success ">Submit</button>
            </div>
        </div>
    </div>
    </div>
    </body>
</html>
