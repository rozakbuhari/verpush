<!DOCTYPE html>
<html>
    <head>
        <!-- Material icons font -->
         <link href="<?= URL; ?>css/material-icons.css" rel="stylesheet">
        <!-- Materialize style-sheet -->
         <link href="<?= URL; ?>css/materialize.min.css" rel="stylesheet">
        <!-- Styles -->
         <link href="<?= URL; ?>css/styles.css" rel="stylesheet">
	    <title><?= isset($title) ? $title : "Aplikasi Perpustakaan Mini" ?> - Verpush</title>
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
      <li><a href="#!">Tentang</a></li>
      <li class="divider"></li>
      <li><a href="<?= URL ?>auth/logout">Keluar</a></li>
    </ul>
  </header>
  <ul id="slide-out" class="side-nav fixed left-nav">
      <li>
          <div class="userView grey lighten-3">
            <a href="#"><span class="name"><?= $_SESSION['user']->fullname ?></span></a>
            <a href="#"><span class="email"><?= $_SESSION['user']->email ?></span></a>
          </div>
      </li>

      <?php foreach ($this->Auth->items as $nav): ?>
          <li>
              <a href="<?= $nav['link']; ?>" class="waves-effect">
                  <i class="material-icons"><?= $nav['icon'] ?></i><?= $nav['label'] ?></a>
          </li>
      <?php endforeach; ?>

      <li><div class="divider"></div></li>
      <li><a href="#!" class="waves-effect"><i class="material-icons">help</i>Tentang</a></li>
  </ul>
  <div class="row amber accent-3 main-title white-text">
	  <div class="col s12">
			<h5><i class="material-icons">dashboard</i> <?= isset($title) ? $title : "Verpush" ?></h5>
	  </div>
  </div>
  <main class="container">
