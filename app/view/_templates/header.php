<!DOCTYPE html>
<html>
    <head>
        <!-- Material icons font -->
         <link href="<?php echo URL; ?>css/material-icons.css" rel="stylesheet">
        <!-- Materialize style-sheet -->
         <link href="<?php echo URL; ?>css/materialize.min.css" rel="stylesheet">
        <!-- Styles -->
         <link href="<?php echo URL; ?>css/styles.css" rel="stylesheet">

        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
<body>
  <header>
    <div class="navbar-fixed">
    	<nav class="amber darken-1">
    		<div class="nav-wrapper">
          <ul>
    				<li>
    					<a href="#" data-activates="slide-out" class="button-collapse">
    						<i class="material-icons">menu</i>
    					</a>
    				</li>
    			</ul>
          <div class="brand-logo hide-on-med-and-down">
            <div class="row">
              <div class="col s12">
                <strong>Ver</strong>push
              </div>
            </div>
          </div>
    			<ul id="nav-mobile" class="right">
		            <li>
		              <a class="dropdown-button" href="#!" data-activates="top-dropdown" data-beloworigin="true" data-constrainwidth="false">
		                <i class="material-icons">more_vert</i>
		              </a>
		            </li>
    			</ul>
    		</div>
    	</nav>

    </div>
    <ul id="top-dropdown" class="dropdown-content">
      <li><a href="#!" class="waves-effect">Administrator</a></li>
      <li><a href="#!">Tentang</a></li>
      <li class="divider"></li>
      <li><a href="#!">Keluar</a></li>
    </ul>
  </header>
  <ul id="slide-out" class="side-nav fixed left-nav">
    <li>
      <div class="userView grey lighten-3">
        <a href="#"><img src="<?php echo URL; ?>img/rozakbuhari.jpg" alt="Photo" class="circle"></a>
        <a href="#"><span class="name">Fathurozak</span></a>
        <a href="#"><span class="email">rozakbuhari@gmail.com</span></a>
      </div>
    </li>
    <li><a href="<?php echo URL; ?>" class="waves-effect"><i class="material-icons">dashboard</i>Beranda</a></li>
    <li><a href="<?php echo URL; ?>books" class="waves-effect"><i class="material-icons">book</i>Buku</a></li>
    <li><a href="<?php echo URL; ?>members" class="waves-effect"><i class="material-icons">assignment_ind</i>Member</a></li>
    <li><a href="<?php echo URL; ?>borrows" class="waves-effect"><i class="material-icons">assignment_ind</i>Pinjaman</a></li>
    <li><div class="divider"></div></li>
    <li><a href="#!" class="waves-effect"><i class="material-icons">help</i>Tentang</a></li>
  </ul>
  <main class="container">
