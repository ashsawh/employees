<!DOCTYPE html>
<html>

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        {!! Html::script('js/jquery.min.js') !!}
        {!! Html::script('js/bootstrap.min.js') !!}
        {!! Html::script('js/app.js') !!}

        {!! Html::style('css/bootstrap.min.css') !!}
        {!! Html::style('css/demo.css') !!}
        {!! Html::style('css/header-second-bar.css') !!}
        {!! Html::style('css/app.css') !!}

        <link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

        @yield('header')

    </head>

    <body>
        @yield('body')

        <footer>
            @yield('footer')
        </footer>
    </body>
</html>
