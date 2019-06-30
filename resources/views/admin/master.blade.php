<!DOCTYPE html>
<html lang="en">
<head>

	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Admin</title>
	<meta name="description" content="">
	<meta name="author" content="Nahian">
	<meta name="keyword" content="">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="{{asset('public')}}/matro/css/bootstrap.min.css" rel="stylesheet">
	<link href="{{asset('public')}}/matro/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="{{asset('public')}}/matro/css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="{{asset('public')}}/matro/css/style-responsive.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->
	

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="{{asset('public')}}/matro/css/ie.css" rel="stylesheet">
	<![endif]-->
	
	<!--[if IE 9]>
		<link id="ie9style" href="{{asset('public')}}/matro/css/ie9.css" rel="stylesheet">
	<![endif]-->
		
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="{{asset('public')}}/matro/img/favicon.ico">
	<!-- end: Favicon -->
	
		
		
		
</head>

<body>
		<!-- start: Header -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="{{url('/')}}"><span>HOME</span></a>
								
				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">
						
						<!-- start: Notifications Dropdown -->
						
						<!-- end: Notifications Dropdown -->
						<!-- start: Message Dropdown -->
						
						<!-- end: Message Dropdown -->
						
						<!-- start: User Dropdown -->
						<li class="dropdown">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white user"></i> {{Session('UserSession')}}
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li class="dropdown-menu-title">
 									<span>Account Settings</span>
								</li>
								<li><a href="#"><i class="halflings-icon user"></i> Profile</a></li>
								<li><a href="{{url('/logout')}}"><i class="halflings-icon off"></i> Logout</a></li>
							</ul>
						</li>
						<!-- end: User Dropdown -->
					</ul>
				</div>
				<!-- end: Header Menu -->
				
			</div>
		</div>
	</div>
	<!-- start: Header -->
	
		<div class="container-fluid-full">
		<div class="row-fluid">
				
			<!-- start: Main Menu -->
			

          @include('admin.slidebar')




			<!-- end: Main Menu -->
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<!-- start: Content -->
			<div id="content" class="span10">


            @yield('body')


            </div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		
	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>
	
	<div class="clearfix"></div>
	
	<footer>

		<p>
			<span style="text-align:left;float:right">&copy; 2019 SEBAGURU </span>
			
		</p>

	</footer>
	
	<!-- start: JavaScript-->

		<script src="{{asset('public')}}/matro/js/jquery-1.9.1.min.js"></script>
	<script src="{{asset('public')}}/matro/js/jquery-migrate-1.0.0.min.js"></script>
	
		<script src="{{asset('public')}}/matro/js/jquery-ui-1.10.0.custom.min.js"></script>
	
		<script src="{{asset('public')}}/matro/js/jquery.ui.touch-punch.js"></script>
	
		<script src="{{asset('public')}}/matro/js/modernizr.js"></script>
	
		<script src="{{asset('public')}}/matro/js/bootstrap.min.js"></script>
	
		<script src="{{asset('public')}}/matro/js/jquery.cookie.js"></script>
	
		<script src='{{asset('public')}}/matro/js/fullcalendar.min.js'></script>
	
		<script src='{{asset('public')}}/matro/js/jquery.dataTables.min.js'></script>

		<script src="{{asset('public')}}/matro/js/excanvas.js"></script>
	<script src="{{asset('public')}}/matro/js/jquery.flot.js"></script>
	<script src="{{asset('public')}}/matro/js/jquery.flot.pie.js"></script>
	<script src="{{asset('public')}}/matro/js/jquery.flot.stack.js"></script>
	<script src="{{asset('public')}}/matro/js/jquery.flot.resize.min.js"></script>
	
		<script src="{{asset('public')}}/matro/js/jquery.chosen.min.js"></script>
	
		<script src="{{asset('public')}}/matro/js/jquery.uniform.min.js"></script>
		
		<script src="{{asset('public')}}/matro/js/jquery.cleditor.min.js"></script>
	
		<script src="{{asset('public')}}/matro/js/jquery.noty.js"></script>
	
		<script src="{{asset('public')}}/matro/js/jquery.elfinder.min.js"></script>
	
		<script src="{{asset('public')}}/matro/js/jquery.raty.min.js"></script>
	
		<script src="{{asset('public')}}/matro/js/jquery.iphone.toggle.js"></script>
	
		<script src="{{asset('public')}}/matro/js/jquery.uploadify-3.1.min.js"></script>
	
		<script src="{{asset('public')}}/matro/js/jquery.gritter.min.js"></script>
	
		<script src="{{asset('public')}}/matro/js/jquery.imagesloaded.js"></script>
	
		<script src="{{asset('public')}}/matro/js/jquery.masonry.min.js"></script>
	
		<script src="{{asset('public')}}/matro/js/jquery.knob.modified.js"></script>
	
		<script src="{{asset('public')}}/matro/js/jquery.sparkline.min.js"></script>
	
		<script src="{{asset('public')}}/matro/js/counter.js"></script>
	
		<script src="{{asset('public')}}/matro/js/retina.js"></script>

		<script src="{{asset('public')}}/matro/js/custom.js"></script>
	<!-- end: JavaScript-->
	
</body>
</html>
