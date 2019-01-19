<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    {!! Html::style('https://fonts.googleapis.com/css?family=Raleway:100,600') !!}
    {!! Html::style('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css') !!}
    {!! Html::style('https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css') !!}
    {!! Html::style('https://use.fontawesome.com/releases/v5.6.3/css/all.css') !!}
    {!! Html::style('./css/style.css') !!}


    <!-- Styles -->
    <style>

    </style>
    @yield('head')
</head>
<body>

<div>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                        aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="{{ asset('img/logo.png') }}"/></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="../navbar-static-top/">The list of Contact</a></li>
                    <li><a href="../navbar-fixed-top/">Add Contact</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
    </nav>

    <div style="height: 150px">

    </div>

    <div class="content">

        @yield('body')
    </div>


    <footer class="footer">
            <div class="text-center">
                <p>
                    © 2019 Nabil Boudlal, made with ☕️
                </p>
                <p>
                    <a href=""><i class="fab fa-linkedin"></i></a>
                    <a href=""><i class="fab fa-github"></i></a>
                </p>
            </div>
    </footer>

</div>


<script src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>


@yield('script')
</body>
</html>
