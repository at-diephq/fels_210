<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Flewer" />
    <meta name="author" content="" />

    @section('title')
        {{trans('message.project')}}
    @show

    @section('css')
        {{ Html::style('bower_components/bootstrap/dist/css/bootstrap.min.css') }}
    @show

</head>
<body class="page-body">

    <div class="container">
        <div class="main-content">

            @include('layouts.header')

            <!-- include the alert template here -->
            @include('template.alert')
            @include('template.error')

            @yield('content')

            @include('layouts.footer')

        </div>
    </div>

    @section('js')
        {{ Html::style('bower_components/jquery/dist/jquery.min.js') }}
        {{ Html::style('bower_components/bootstrap/dist/js/bootstrap.min.js') }}
    @show
</body>
</html>
