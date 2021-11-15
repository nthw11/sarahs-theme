<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>

</head>

<body>


  <nav id="navbar-div">
    <div class="logo-div">
      <a class="nav-link" href="<?php echo site_url('/') ?>">
        <img src="<?php echo get_theme_file_uri('/img/Sarah_Wallace_logo-2.png') ?>" alt="logo">
      </a>
    </div><!-- .logo-div -->
    <span id="toggle-nav" onclick="toggleNav()">
      <i class="fa fa-bars"></i>
    </span>

    <ul id="navlist">
      <li <?php if (is_page('home')) echo 'class="active"' ?>>
        <a class="nav-link" href="<?php echo site_url('/') ?>">Home</a>
      </li>

      <li <?php if (is_page('about')) echo 'class="active"' ?>>
        <a class="nav-link" href="<?php echo site_url('/about') ?>">About</a>
      </li>

      <li <?php if (is_page('contact')) echo 'class="active"' ?>>
        <a class="nav-link" href="<?php echo site_url('/contact') ?>">Contact</a>
      </li>

      <li <?php if (is_page('order')) echo 'class="active"' ?>>
        <a class="nav-link" href="<?php echo site_url('/order') ?>">Order</a>
      </li>

    </ul>

  </nav>


  <div class="main-page-body">