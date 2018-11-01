<!DOCTYPE html>
<html>
<head>
  <title>Froala Design Blocks - Skeleton</title>
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  <link type="text/css" rel="stylesheet" href="<?php echo get_bloginfo('template_directory');?>/dist/css/froala_blocks.css">
  <link type="text/css" rel="stylesheet" href="<?php echo get_bloginfo('template_directory');?>/style.css">
  <?php wp_head(); ?>
</head>

  <body>
  <!-- Insert HTML for contents. -->

<!-- Headers 2 -->
  <header>
    <div class="container text-center">
      <nav class="navbar">
        <a class="ml-auto mr-auto" href="http://localhost/formativeforestandbird/">
            <img src="<?php echo get_bloginfo('template_directory');?>/dist/imgs/logo.svg" height="70" alt="image">
          </a>
      </nav>
    </div>
  </header>

  <!-- Headers 3 -->
    <header>
      <div class="container">
        <nav class="navbar navbar-expand-md">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav0" aria-controls="navbarNav0" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          <div class="collapse navbar-collapse" id="navbarNav0">
            <?php 
            //output the main nav
            $args = array(
              'theme-location'=>'main-menu',
              'container'=>'ul',
              'menu_class'=>'navbar-nav'
            );
            wp_nav_menu($args);
           ?>
            <!-- <ul class="navbar-nav mr-auto ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="https://www.froala.com">Home<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.froala.com">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.froala.com">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.froala.com">Volunteer</a>
              </li>
            </ul> -->
          </div>
        </nav>
      </div>
    </header>