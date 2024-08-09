<?php
/*
* This is use to display Header
*/

?>
<html>
<head>
  <title>TEK2D</title>
	<?php wp_head(); ?>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	</head>
<body class="bg-color">
<header>
    <div class="container">
      <nav class="navbar navbar-expand-lg custom-navbar">
        <div class="container-fluid">
			<div class="tek2d-logo">
          <a class="navbar-brand" href="https://new.tek2d.com/"><?php the_custom_logo() ?></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
		</div>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
  <?php 
wp_nav_menu(array(
    'theme_location' => 'primary',
    'menu_class' => 'navbar-nav me-auto mb-2 mb-lg-0',
    'add_li_class' => 'nav-item',
    'add_a_class' => 'nav-link'
));
			?>
            <div class="header-button">
              <a href="#">Get Started</a>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>
