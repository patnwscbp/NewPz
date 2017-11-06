<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
   	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('sys/css/font-awesome.min.css') }}" rel="stylesheet">
	<link href="{{ asset('sys/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('sys/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('sys/css/bootstrap-social.css') }}" rel="stylesheet">
	<link href="{{ asset('sys/css/bootstrap-select.css') }}" rel="stylesheet">
	<link href="{{ asset('sys/css/fileinput.min.css') }}" rel="stylesheet">
	<link href="{{ asset('sys/css/awesome-bootstrap-checkbox.css') }}" rel="stylesheet">
	<link href="{{ asset('sys/css/style.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">

	
	<!-- Java Script -->
	<script src="{{ asset('sys/js/jquery.min.js') }}"></script>
	<script src="{{ asset('sys/js/bootstrap-select.min.js') }}"></script>
	<script src="{{ asset('sys/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('sys/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('sys/js/dataTables.bootstrap.min.js') }}"></script>
	<script src="{{ asset('sys/js/Chart.min.js') }}"></script>
	<script src="{{ asset('sys/js/fileinput.js') }}"></script>
	<script src="{{ asset('sys/js/chartData.js') }}"></script>
	<script src="{{ asset('sys/js/main.js') }}"></script>
	<style>
    body {
        font-family: 'Prompt', sans-serif;
        font-size: 16px;
      }       
    .title {
        font-size: 36px;
        color: #f60000;
           }
	.olo {
        font-size: 18px;
        color: #f60000;
           }	
     .subtitle {
        font-size: 36px;
         color: #ffffff;
            }
	.suss{
			font-size: 36px;
		color: #04b206;
		}	
    .subtitle2 {
        font-size: 28px;
        
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
<div class="brand clearfix">
		<a href="index.html" class="logo"><img src="{{ asset('sys/img/logo.jpg') }}" class="img-responsive" alt=""></a>
		<span class="menu-btn"><i class="fa fa-bars"></i></span>
		<ul class="ts-profile-nav">
			<li class="ts-account">
				<a href="#"><img src="img/ts-avatar.jpg" class="ts-avatar hidden-side" alt=""> {{ Auth::user()->name }} <i class="fa fa-angle-down hidden-side"></i></a>
				<ul>
					<li><a href="#">My Account</a></li>
					<li><a href="#">Edit Account</a></li>
					<li><a href="#">Logout</a></li>
				</ul>
			</li>
		</ul>
	</div>

	<div class="ts-main-content">
		<nav class="ts-sidebar">
			<li class="ts-label"><img src="{{ asset('img/pz.png') }}" class="img-responsive" alt=""></li>
			<ul class="ts-sidebar-menu">
				<li class="ts-label">Main</li>
				<li><a href="index.html"><i class="fa fa-dashboard"></i> Dashboard</a></li>
				<li><a href="tables.html"><i class="fa fa-table"></i> VPS</a></li>
				<li><a href="forms.html"><i class="fa fa-edit"></i> Dedicated</a></li>
				<li><a href="charts.html"><i class="fa fa-pie-chart"></i> Domain</a></li>
				<!-- Account from above -->
				<ul class="ts-profile-nav">
					<li class="ts-account">
						<a href="#"><img src="img/ts-avatar.jpg" class="ts-avatar hidden-side" alt=""> {{ Auth::user()->name }} <i class="fa fa-angle-down hidden-side"></i></a>
						<ul>
							<li><a href="#">My Account</a></li>
							<li><a href="#">Edit Account</a></li>
							<li><a href="#">Logout</a></li>
						</ul>
					</li>
				</ul>

			</ul>
		</nav>
		<div class="content-wrapper">
			<div class="container-fluid">
					@yield('content')
			</div>
		</div>
	</div>   
</body>
</html>
