<html>
        <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
				<meta name="viewport" content="width=device-width, initial-scale=1">
				<title>Chemisfun - Learning media</title>
				<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
				<meta content="utf-8" http-equiv="encoding">
				<meta name="viewport" content="width=device-width, initial-scale=1.0">
				<meta content="width=device-width" name="viewport"></meta>
				<meta content="eLearning, Project Base Learning, Authentic Assessment" name="Keywords"></meta>
				<meta content="Learning Management System for Project Base Learning ." name="Description"></meta>

				<link rel="shortcut icon" href="<?php echo base_url('assets/images/logo.png') ?>" type="image/x-icon">
				<link href="<?php echo base_url('assets/app.css')?>" rel="stylesheet">
				<link href="<?php echo base_url('assets/jquery/jquery-ui.css')?>" rel="stylesheet">
				<link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
				<link href="<?php echo base_url('assets/jquery/dataTables.jqueryui.css')?>" rel="stylesheet">

        </head>
        <body>

			<nav class="navbar navbar-primary">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle Navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="/">Pblaams</a>
					</div>

					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<!--if (Auth::user())
								@if (Auth::user()->role==1)-->
								<li class="dropdown">
								<a class="dropdown-toggle" type="button" id="menu2" data-toggle="dropdown" aria-expanded="false">
								Manajemen Data 
								<span class="caret"></span>
								</a>
								<ul class="dropdown-menu" role="menu" aria-labelledby="menu2">
									<li role="presentation">
									<a role="menuitem" tabindex="-1" href="/user">User</a>
									</li>
									<li role="presentation">
									<a role="menuitem" tabindex="-1" href="/homebase">Homebase</a>
									</li>
								</ul>
								</li>							
								<li class="dropdown">
								<a class="dropdown-toggle" type="button" id="menu3" data-toggle="dropdown" aria-expanded="false">
								Pengaturan 
								<span class="caret"></span>
								</a>
								<ul class="dropdown-menu" role="menu" aria-labelledby="menu3">
									<li role="presentation">
									<a role="menuitem" tabindex="-1" href="/user">Tema</a>
									</li>
									<li role="presentation">
									<a role="menuitem" tabindex="-1" href="/homebase">Tata Letak</a>
									</li>
								</ul>
								</li>							
								<!--@elseif (Auth::user()->role==0)-->
								<li class="dropdown">
								<a class="dropdown-toggle" type="button" id="menu2" data-toggle="dropdown" aria-expanded="false">
								Perkuliahan 
								<span class="caret"></span>
								</a>
								<ul class="dropdown-menu" role="menu" aria-labelledby="menu2">
									<li role="presentation">
									<a role="menuitem" tabindex="-1" href="/user">User</a>
									</li>
									<li role="presentation">
									<a role="menuitem" tabindex="-1" href="/homebase">Homebase</a>
									</li>
								</ul>
								</li>
								<li class="dropdown">
								<a class="dropdown-toggle" type="button" id="menu3" data-toggle="dropdown" aria-expanded="false">
								Penilaian 
								<span class="caret"></span>
								</a>
								<ul class="dropdown-menu" role="menu" aria-labelledby="menu3">
									<li role="presentation">
									<a role="menuitem" tabindex="-1" href="/user">User</a>
									</li>
									<li role="presentation">
									<a role="menuitem" tabindex="-1" href="/homebase">Homebase</a>
									</li>
								</ul>
								</li>
								<li class="dropdown">
								<a class="dropdown-toggle" type="button" id="menu4" data-toggle="dropdown" aria-expanded="false">
								Test 
								<span class="caret"></span>
								</a>
								<ul class="dropdown-menu" role="menu" aria-labelledby="menu4">
									<li role="presentation">
									<a role="menuitem" tabindex="-1" href="/user">User</a>
									</li>
									<li role="presentation">
									<a role="menuitem" tabindex="-1" href="/homebase">Homebase</a>
									</li>
								</ul>
								</li>
								<li class="dropdown">
								<a class="dropdown-toggle" type="button" id="menu5" data-toggle="dropdown" aria-expanded="false">
								Pesan 
								<span class="caret"></span>
								</a>
								<ul class="dropdown-menu" role="menu" aria-labelledby="menu5">
									<li role="presentation">
									<a role="menuitem" tabindex="-1" href="/user">User</a>
									</li>
									<li role="presentation">
									<a role="menuitem" tabindex="-1" href="/homebase">Homebase</a>
									</li>
								</ul>
								</li>
								<!--@endif
							@endif-->
								
						</ul>

						<ul class="nav navbar-nav navbar-right">
							<!--@if (Auth::guest())-->
								<li><a href="/auth/login">Login</a></li>
								<li><a href="/auth/register">Register</a></li>
							<!--@else-->
								<li class="dropdown">
									<a class="dropdown-toggle" type="button" id="menu1" data-toggle="dropdown" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
									<ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
										<li  role="presentation"><a  role="menuitem" tabindex="-1" href="/auth/logout">Profile</a></li>
										<li  role="presentation"><a  role="menuitem" tabindex="-1" href="/auth/logout">Setting</a></li>
										<li role="presentation" class="divider"></li>
										<li  role="presentation"><a  role="menuitem" tabindex="-1" href="/auth/logout">Logout</a></li>
									</ul>
								</li>
							<!--@endif-->
						</ul>
					</div>
				</div>
			</nav>
