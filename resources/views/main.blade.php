@section('title')Bip-Bot @endsection
@extends('layout')
@section('main_content')   

<!DOCTYPE html>
<html lang="en">
  <head>
  
    <link rel="icon" type="image/x-icon" href="https://img.icons8.com/dusk/64/undefined/bot--v1.png"> <!-- это иконка котора должа отображаться в вкладке,но она не работает --> 
    <link rel="manifest" href="/site.webmanifest">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet"> --хуй знает куда ведёт-- --> 

    <style type="text/css">
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <!-- <link href="product.css" rel="stylesheet"> -- такого файла нет -->
  </head>
  <body>
    
<main>
  <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <h1 class="display-4 fw-normal">Bip-Bot</h1>
      <p class="lead fw-normal">Make your first bot!</p>
      <a class="btn btn-outline-secondary" href="/pricing">Here goes!</a>
    </div>
    
    <div class="product-device shadow-sm d-none d-md-block"></div>
    <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
  </div>

  <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
    <div class="col-sm bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
      <div class="my-3 py-3">
        <h2 class="display-5">Bot for Telegram</h2>
        <p class="lead"> </p>
      </div>
      <div class="bg-light shadow-sm mx-auto text-center" style="width: 90%; height: 300px; border-radius: 21px 21px 0 0;">><img style="margin-top: 10px; margin-right: 10px; width: 80%; height: 250px; border-radius: 21px 21px 0 0;" src="https://img.icons8.com/ios-filled/250/undefined/telegram-app.png"></div>
    </div>

    <div class="col-sm bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
      <div class="my-3 p-3">
        <h2 class="display-5">Bot for Discord</h2>
        <p class="lead"> </p>
      </div>
      <div class="bg-light shadow-sm mx-auto text-center" style="width: 100%; height: 300px; border-radius: 21px 21px 0 0;"><img style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;" src="https://img.icons8.com/carbon-copy/200/undefined/discord-new-logo.png"></div>
    </div>

    <div class="col-sm bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
      <div class="my-3 p-3">
        <h2 class="display-5">Bot for Viber</h2>
        <p class="lead"> </p>
      </div>
      <div class="bg-light shadow-sm mx-auto text-center" style="width: 90%; height: 300px; border-radius: 21px 21px 0 0;"><img style="width: 80%; height: 280px; border-radius: 21px 21px 0 0;" src="https://img.icons8.com/ios-filled/250/undefined/viber--v1.png"></div>
    </div>

    <div class="col-sm bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
      <div class="my-3 py-3">
        <h2 class="display-5">Bot for WhatsApp</h2>
        <p class="lead"> </p>
      </div>
      <div class="bg-light shadow-sm mx-auto text-center" style="width: 100%; height: 300px; border-radius: 21px 21px 0 0;"><img style="width: 80%; height: 300px; border-radius: 21px 21px" src="https://img.icons8.com/wired/256/undefined/whatsapp.png"></div>
    </div>
  </div>

    <!-- <script src="../assets/dist/js/bootstrap.bundle.min.js"></script> --хуй знает куда ведёт-- -->

      
  </body>
</html>

@endsection