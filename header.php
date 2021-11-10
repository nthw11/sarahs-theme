<!DOCTYPE html>
<html lang="en">

<head>
  <?php wp_head(); ?>

</head>
<nav class="navbar">

  <ul>
    <li class="nav-item  <?php if (is_page('home')) echo 'class="active"' ?>">
      <a class="nav-link" href="<?php echo site_url('/home') ?>">Home</a>
    </li>

    <li class="nav-item" <?php if (is_page('about')) echo 'class="active"' ?>">
      <a class="nav-link" href="<?php echo site_url('/about') ?>">About</a>
    </li>
    <li class="nav-item" <?php if (is_page('contact')) echo 'class="active"' ?>">
      <a class="nav-link" href="<?php echo site_url('/contact') ?>">Contact</a>
    </li>

  </ul>

</nav>


<body>
  <div class="main-page-body">