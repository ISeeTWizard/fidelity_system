<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Fidelity System</title>



  <meta property="og:title" content="Fidelity System">
  <meta property="og:type" content="article">
  <meta property="og:url" content="http://fidelity-system.eliza.family">
  <meta property="og:image" content="">
  <meta property="og:description" content="Fidelity System">
  <meta property="fb:admin" content="">

  <link rel="stylesheet" href="<?php __DIR__.'/css/normalize.css'?>">
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/v4-shims.js"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/style.min.css">

</head>
<body>
  <h1>Welcome to the fidelity system - Alpha version</h1>
  <?php

  require_once __DIR__.'/../vendor/autoload.php';
  $configs = require __DIR__.'/../config/app.conf.php';
  use Service\DBConnector;
  DBConnector::setConfig($configs['db']);

  $map = [
      '/login' => __DIR__ . '/../src/Controller/login.php',
      '' => __DIR__ . '/../src/Controller/login.php',
      '/register' => __DIR__ . '/../src/Controller/register.php'
  ];

  $url = $_SERVER['REQUEST_URI'];

  if (substr($url, 0, strlen('/index.php')) == '/index.php') {
      $url = substr($url, strlen('/index.php'));
  } else if ($url == '/') {
      $url = '';
  }

  if (array_key_exists($url, $map)) {
      include $map[$url];
  }
?>

  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
