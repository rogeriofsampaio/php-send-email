<?php
  error_reporting(E_ALL ^ E_NOTICE);
  require_once ("mostra-alerta.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>My Store</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,700,500' rel='stylesheet' type='text/css'>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-fixed-top navbar-dark bg-inverse">
      <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2">
        &#9776;
      </button>
      <div class="collapse navbar-toggleable-xs" id="exCollapsingNavbar2">
        <a class="navbar-brand" href="./">My Store</a>
        <ul class="nav navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="./contato.php">Contato <span class="sr-only">(current)</span></a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container">
      <div class="main">
          <?php
            mostrarAlerta("success");
            mostrarAlerta("danger");
          ?>
