<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Airbit Assignment</title>

    {!! Html::style('https://fonts.googleapis.com/css?family=Raleway:100,600') !!}
    {!! Html::style('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css') !!}
    {!! Html::style('https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css') !!}
    {!! Html::style('https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css') !!}
    {!! Html::style('https://use.fontawesome.com/releases/v5.6.3/css/all.css') !!}
    {!! Html::style('https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.css') !!}
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
                <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('img/logo.png') }}"/></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ url('/contacts') }}">The list of Contact</a></li>
                    <li><a href="{{ url('/contacts/create') }}">Add Contact</a></li>
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
                <p class="footer-icon">
                    <a href="https://www.linkedin.com/in/nabilboudlal"><i class="fab fa-linkedin"></i></a>
                    <a href="https://github.com/boudlal"><i class="fab fa-github"></i></a>
                </p>
            </div>
    </footer>

</div>

{!! Html::script('https://code.jquery.com/jquery-2.2.4.min.js') !!}
{!! Html::script('https://code.jquery.com/ui/1.12.1/jquery-ui.js') !!}
{!! Html::script('https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js') !!}
{!! Html::script('https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.js') !!}

<script>
    $( function() {
        $( "#datepicker" ).datepicker();
    } );

    @include('layout.toast')

</script>

@yield('script')
</body>
</html>
