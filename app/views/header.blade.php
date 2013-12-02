<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>Invoice Ninja</title>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.js" type="text/javascript"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
        

    <!--
	<script src="{{ asset('js/typeahead.js') }}" type="text/javascript"></script>		
	<link rel="stylesheet" type="text/css" href="{{ asset('css/typeahead.js-bootstrap.css') }}"/>	
	-->

	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}"/>	
	<script src="{{ asset('js/bootstrap.js') }}" type="text/javascript"></script>			
	<!-- <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap-theme.min.css"> -->
	

	{{-- Basset::show('bootstrapper.css') --}}
	{{-- Basset::show('bootstrapper.js') --}}
	

	<script src="{{ asset('js/bootstrap-combobox.js') }}" type="text/javascript"></script>		
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-combobox.css') }}"/>	

	<link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.dataTables.css') }}">
    <script type="text/javascript" src="{{ asset('js/jquery.dataTables.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/knockout-3.0.0.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/knockout.mapping-latest.js') }}"></script>
    <script src="{{ asset('js/knockout-sortable.js') }}" type="text/javascript"></script>		
	<link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.css') }}"/>
	
	<script src="{{ asset('js/jspdf.source.js') }}" type="text/javascript"></script>		
	<script src="{{ asset('js/jspdf.plugin.split_text_to_size.js') }}" type="text/javascript"></script>		
	
	<script src="{{ asset('js/bootstrap-datepicker.js') }}" type="text/javascript"></script>		
	<link rel="stylesheet" type="text/css" href="{{ asset('css/datepicker.css') }}"/>
	
	<script src="{{ asset('js/script.js') }}" type="text/javascript"></script>		

	<style type="text/css">

	
	body > div.container {
		/*max-width: 850px;*/
	}

	label.control-label {
		font-weight: normal !important;
	}


	div.panel {
		padding-left: 0px !important;
		padding-right: 0px !important;
	}

	.form-actions {
	    margin: 0;
	    background-color: transparent;
	    text-align: center;
	}

	/*
	.form-horizontal {
		max-width: 750px;
		margin: 0 auto;
	}
	*/

	/*
	.form-group {
		width: 50%;
    	margin: 0 auto;
	}
	*/

	/* DataTables and BootStrap */
	.dataTables_wrapper {
		padding-top: 16px;
	}

	table.table thead > tr > th {
		border-bottom-width: 0px;
	}

	#DataTables_Table_0_length label {
		font-weight: normal;
		padding-bottom: 10px;		
	}

	div.dataTables_paginate.paging_bootstrap  {
		margin-top: -30px;
	}

	table.table tbody tr.odd {
		background-color: #f9f9f9;
	}

	table.table tbody tr:hover {
		background-color: #f0f0f0 !important;
	}


	/*
	table.table thead .sorting,
	table.table thead .sorting_asc,
	table.table thead .sorting_desc,
	table.table thead .sorting_asc_disabled,
	table.table thead .sorting_desc_disabled {
	    cursor: pointer;
	    *cursor: hand;
	}
	 
	table.table thead .sorting { background: url('images/sort_both.png') no-repeat center right; }
	table.table thead .sorting_asc { background: url('images/sort_asc.png') no-repeat center right; }
	table.table thead .sorting_desc { background: url('images/sort_desc.png') no-repeat center right; }
	 
	table.table thead .sorting_asc_disabled { background: url('images/sort_asc_disabled.png') no-repeat center right; }
	table.table thead .sorting_desc_disabled { background: url('images/sort_desc_disabled.png') no-repeat center right; }
	*/
	

	/* Hover nav */
	.sidebar-nav {
	    padding: 9px 0;
	}

	.dropdown-menu .sub-menu {
	    left: 100%;
	    position: absolute;
	    top: 0;
	    visibility: hidden;
	    margin-top: -1px;
	}

	.dropdown-menu li:hover .sub-menu {
	    visibility: visible;
	}

	.dropdown:hover .dropdown-menu {
	    display: block;
	}

	.nav-tabs .dropdown-menu, .nav-pills .dropdown-menu, .navbar .dropdown-menu {
	    margin-top: 0;
	}

	.navbar .sub-menu:before {
	    border-bottom: 7px solid transparent;
	    border-left: none;
	    border-right: 7px solid rgba(0, 0, 0, 0.2);
	    border-top: 7px solid transparent;
	    left: -7px;
	    top: 10px;
	}
	.navbar .sub-menu:after {
	    border-top: 6px solid transparent;
	    border-left: none;
	    border-right: 6px solid #fff;
	    border-bottom: 6px solid transparent;
	    left: 10px;
	    top: 11px;
	    left: -6px;
	}


	.invoice-table {
		border-style: none !important;
	}

	table.invoice-table tbody tr:hover {
		background-color: #FFFFFF !important;
	}

	.invoice-table td {
		padding: 2px !important;
	}

	.invoice-table td input,
	.invoice-table td textarea {
		border: none !important;
		width: 100%;
	}

	.invoice-table th {
		border-top: 1px solid #ddd !important;		
	}

	.invoice-table td.hide-border,
	.invoice-table th.hide-border {
		border-style: none !important;
	}

	.fa-bars {
		cursor: move !important;
	}

	</style>

  </head>

  <body>

  	@if (App::environment() != ENV_DEVELOPMENT)  	
  	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-46031341-1', 'sketch-out.com');
	  ga('send', 'pageview');

	</script>
	@endif

	<div class="container">

	<p/>
	<div>		
		<span style="font-size:30px">Invoice Ninja</span>		
		<div style="float:right;text-align:right">
			@if (Auth::user()->registered)

			@else			
			{{ Button::sm_primary('Sign up', array('data-toggle'=>'modal', 'data-target'=>'#signUpModal')); }} &nbsp;
			{{ link_to('account/details', 'My Account'); }}
			@endif
			<p class="text-danger">This is a sample site, the data is erased.</p>
		</div>		
	</div>

	<p style="clear: both"/>
	<nav class="navbar navbar-default" role="navigation">

	  <div class="navbar-header">
	    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
	      <span class="sr-only">Toggle navigation</span>
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	    </button>
	    <!-- <a class="navbar-brand" href="#">Invoice Ninja</a> -->
	  </div>

	  <div class="collapse navbar-collapse" id="navbar-collapse-1">
	    <ul class="nav navbar-nav" style="font-weight: bold">
	    	{{-- HTML::nav_link('home', 'Home') --}}
	    	{{ HTML::menu_link('client') }}
	    	{{ HTML::menu_link('invoice') }}
	    	{{ HTML::menu_link('payment') }}
	    	{{ HTML::menu_link('credit') }}
	    	{{-- HTML::nav_link('reports', 'Reports') --}}
	    </ul>
		<ul class="nav navbar-nav navbar-right">	      
	      <li class="dropdown">
	        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Recently Viewed <b class="caret"></b></a>
	        <ul class="dropdown-menu">	        		        	
	        	@if (count(Session::get(RECENTLY_VIEWED)) == 0)
	          		<li><a href="#">No items</a></li>
	          	@else
	          		@foreach (Session::get(RECENTLY_VIEWED) as $link)
	          			<li><a href="{{ $link->url }}">{{ $link->name }}</a></li>	
	          		@endforeach
	          	@endif
	        </ul>
	      </li>
	    <form class="navbar-form navbar-left" role="search">
	      <div class="form-group">
	        <input type="text" id="search" class="form-control" placeholder="Search">
	      </div>
	    </form>
	    </ul>	    
	  </div><!-- /.navbar-collapse -->
	</nav>
	
	@if (Session::has('message'))
		<div class="alert alert-info">{{ Session::get('message') }}</div>
	@endif

	@yield('content')		

		</div>
	</div>


	@if (!Auth::user()->registered)
	<div class="modal fade" id="signUpModal" tabindex="-1" role="dialog" aria-labelledby="signUpModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	        <h4 class="modal-title" id="myModalLabel">Sign Up</h4>
	      </div>

	      <div style="padding-right:20px" onkeyup="validateSignUp()" onkeydown="checkForEnter(event)">
	    	{{ Former::open(); }}
	    	{{ Former::populate(Auth::user()) }}
	    	{{ Former::text('first_name'); }}
	    	{{ Former::text('last_name'); }}
	    	{{ Former::text('email'); }}	    	
			{{ Former::password('password'); }}
			{{ Former::close(); }}
		  </div>

	      <div class="modal-footer">	      	
	      	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-primary" onclick="submitSignUp()">Save</button>	      	
	      </div>
	    </div>
	  </div>
	</div>
	@endif
	
		

  </body>

  <script type="text/javascript">

		@if (!Auth::user()->registered)
  		function validateSignUp(showError) 
  		{
  			var isValid = true;
  			$(['first_name','last_name','email','password']).each(function(i, field) {
  				var $input = $('#'+field),
  					val = $.trim($input.val());
  				var isValid = val && val.length > (field == 'password' ? 6 : 0);
  				if (isValid && field == 'email') {
  					isValid = isValidEmailAddress(val);
  				}
  				if (isValid) {
  					$input.closest('div.form-group').removeClass('has-error');
  					$input.closest('div.form-group').addClass('has-success');
  				} else {
  					isValid = false;
  					$input.closest('div.form-group').removeClass('has-success');
  					if (showError) {
  						$input.closest('div.form-group').addClass('has-error');
  					}
  				}
  			});
  			return isValid;
  		}

  		function submitSignUp()
  		{
  			if (!validateSignUp(true)) {
  				return;
  			}
  		}

  		function checkForEnter(event)
  		{
			if (event.keyCode === 13){
				event.preventDefault();		     	
	            submitSignUp();
	            return false;
	        }
        }
  		@endif

  		$(function() {

  			@if (Auth::user()->is_guest)
	      	if (isStorageSupported()) {
        		localStorage.setItem('guest_key', '{{ Auth::user()->password }}');
        	}
  			@endif

			@if (!Auth::user()->registered)
  			validateSignUp();
  			@endif

  			@yield('onReady')
  		});

  </script>

</html>