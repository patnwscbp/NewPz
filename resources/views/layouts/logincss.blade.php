<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
	<link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.min.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="{{ asset('js/vendor/jquery-1.9.1.min.js') }}"><\/script>')</script>
	<script src="{{ asset('js/main.js') }}"></script>
	 <script src="{{ asset('js/app.js') }}"></script>
<style>
    body {
        font-family: 'Prompt', sans-serif;
        font-size: 16px;
      }       
    .title {
        font-size: 36px;
        color: #ffffff;
           }
     .subtitle {
        font-size: 36px;
         color: #ffffff;
            }
    .subtitle2 {
        font-size: 28px;
         color: #ffffff;
            }
    .content {
        text-align: center;
            }
    .m-b-md {
        margin-bottom: 30px;
            }
    .help-block{
        color: #ff0000;
            }
        </style>
    
</head>
<body>
     @yield('content')
</body>
</html>
