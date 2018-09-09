<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	{{-- TITLE --}}
	@yield('title')

	{{-- CSRF TOKEN --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="noindex, nofollow">
    <link rel="shortcut icon" href="">

    {{-- STYLES --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/main.css') }}" rel="stylesheet">
	<link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
	<link href="{{ asset('css/fullcalendar.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/fullcalendar.print.min.css') }}" rel="stylesheet">

</head>
<body>
	
	{{-- MAIN CONTAINER --}}
	
	<div class="container-fluid">
	    <div class="row">
	        <div class="col-2" id="sticky-sidebar">
	            <div class="sticky-top">
	            	<div class="logo"><a href="#"><img src="{{asset('images/logo.png')}}" width="40" class="img-fluid"></a> SafeRide Car Rental</div>
	            	<div class="admin-welcome">
	            		<div class="media">
						  <img src="{{asset('/images/admin-dummy.png')}}">
						  <div class="media-body ml-2">
						    <h5 class="mt-0 mb-0">Welcome</h5>
						   	<small>Administrator Admin</small>
						  </div>
						</div>
	            	</div>

	            	<h5 class="title">GENERAL</h5>
	                <ul class="list-unstyled sidelinks">
	                	<li>
	                		<a href="{{ URL::to('/') }}">
	                			<i class="fa fa-home"></i> Home
	                		</a>
	                	</li>
	                	<li>
	                		<a href="{{ URL::to('reservation') }}">
	                			<i class="fa fa-edit"></i> Reservation
	                		</a>
	                	</li>
	                	<li>
	                		<a href="{{ URL::to('sales-invoice') }}">
	                			<i class="fa fa-file-alt"></i> Sales Invoice
	                		</a>
	                	</li>
	                	<li>
	                		<a href="{{ URL::to('payment') }}">
	                			<i class="fa fa-credit-card"></i> Payment
	                		</a>
	                	</li>
	                	<li>
	                		<a href="{{ URL::to('customers') }}">
	                			<i class="fa fa-users"></i> Customers
	                		</a>
	                	</li>
	                	<li>
	                		<a href="{{ URL::to('rates') }}">
	                			<i class="fa fa-chart-bar"></i> Rates
	                		</a>
	                	</li>
	                	<li>
	                		<a href="{{ URL::to('master-records') }}">
	                			<i class="fa fa-file-contract"></i> Master Records
	                		</a>
	                	</li>
	                	<li>
	                		<a href="{{ URL::to('reports') }}">
	                			<i class="fa fa-copy"></i> Reports
	                		</a>
	                	</li>
	                </ul>
	            </div>
	        </div>
	        <div class="col-md-10 pl-0 pr-0" id="main">
		        @include('template.header')		

		        <div class="pl-3 pr-3">
		           @yield('content')
		         </div>

		        @include('template.footer')
	        </div>
	    </div>
	
	</div>
		
	
	
	{{-- SCRIPT --}}
	<script src="{{ asset('js/jquery-3.2.1.slim.min.js') }}"></script>
	<script src="{{ asset('js/popper.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<script src="{{ asset('js/jquery-ui.min.js') }}"></script>
	<script src="{{ asset('js/moment.min.js') }}"></script>
	<script src="{{ asset('js/fullcalendar.min.js') }}"></script>
</body>
</html>