@section('title')Bip-Bot @endsection
@extends('layout')
@section('main_content')   
<!doctype html>
<html lang="en">
  <head>
  
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="manifest" href="/site.webmanifest">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
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
    <link href="product.css" rel="stylesheet">
  </head>
  <body>
    
<main>
  <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <h1 class="display-4 fw-normal">Bip-Bot</h1>
      <p class="lead fw-normal">Make your first bot!</p>
      <a class="btn btn-outline-secondary" href="#">Coming soon</a>
    </div>
    
    <div class="product-device shadow-sm d-none d-md-block"></div>
    <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
  </div>

  <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
    <div class="bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
      <div class="my-3 py-3">
        <h2 class="display-5">Bot for Telegram</h2>
        <p class="lead"> </p>
      </div>
      <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">><img style="width: 150px; height: 150px;" src="data:image/png;base64,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"></div>
    </div>
    <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
      <div class="my-3 p-3">
        <h2 class="display-5">Bot for Discord</h2>
        <p class="lead"> </p>
      </div>
      <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">><img style="width: 190px; height: 150px;" src="https://i.pinimg.com/originals/19/09/10/190910840fbc6d833ff3523a2122a9b9.jpg"></div>
    </div>
  </div>

  <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
    <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
      <div class="my-3 p-3">
        <h2 class="display-5">Bot for Viber</h2>
        <p class="lead"> </p>
      </div>
      <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">><img style="width: 190px; height: 150px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS67Tfp6_evwkLhIqfBxkF2-d40uSAIPRB_QQ&usqp=CAU"></div>
    </div>
    <div class="bg-primary me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
      <div class="my-3 py-3">
        <h2 class="display-5">Bot for WhatsApp</h2>
        <p class="lead"> </p>
      </div>
      <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">><img style="width: 190px; height: 150px;" src="data:image/png;base64,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"></div>
    </div>
  </div>

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>

    @endsection