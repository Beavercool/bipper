<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

    <style type="text/css">
        p.blocktext {
              margin-left: auto;
              margin-right: auto;
              width: 30em
              }       
    </style> 
</head>

<body class="text">
    <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-3 bg-dark text-white border-bottom">
      <a href="/" class="d-flex align-items-center text-white text-decoration-none">
       <!-- поменяю лого в названии <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="me-2" viewBox="0 0 118 94" role="img"><title>Bootstrap</title><path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z" fill="currentColor"></path></svg> -->
        <img style="margin-bottom:-40px; margin-left:10px; margin-top:0px; width: 50px; height: 50px; border-radius: 21px 21px 0 0;" src="https://img.icons8.com/fluency/48/undefined/robot.png">
        <span class="fs-4" style="margin-top: 10px;">Bip-Bot</span>
      </a>

      <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
        <a class="btn me-3 py-2 text-white text-decoration-none" style=" margin-top: 10px;" href="/main">Features</a>
        <a class="btn me-3 py-2 text-white text-decoration-none" style= " margin-top: 10px;" href="/about">About</a>
        <a class="btn me-3 py-2 text-white text-decoration-none"style=" margin-top: 10px;" href="/zip-form">Burlachivator</a>
        <a class="btn py-2 text-white text-decoration-none" style=" margin-top: 10px;" href="/pricing">Pricing</a>
      </nav>
        <a class="btn btn-warning" style="margin-left:10px; margin-top: 10px;" href="/review">Review</a>
    </div>
    @yield('main_content')
    <footer class="py-5">
      <!-- это короче низ,не трож этот див если не придумал как сделать отступ -->
     <div class="row">
      <<div class="col-6 col-md-2 mb-3">
      <li class="nav-item mb-2"><h5><a href="#" class="nav-link p-0 text-muted">UP</a></h5></li>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a class="nav-link p-0 text-muted"></a></li>
          <li class="nav-item mb-2"><a class="nav-link p-0 text-muted"></a></li>
          <li class="nav-item mb-2"><a class="nav-link p-0 text-muted"></a></li>
          <li class="nav-item mb-2"><a class="nav-link p-0 text-muted"></a></li>
          <li class="nav-item mb-2"><a class="nav-link p-0 text-muted"></a></li>
        </ul>
      </div>
  
      <div class="col-6 col-md-2 mb-3">
        <h5></h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a class="nav-link p-0 text-muted">About Us</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">API</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">To-Do</a></li>
        </ul>
      </div>

      <!--<div class="col-6 col-md-2 mb-3">
        <h5>Section</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
          <li class="nav-item mb-2"><a href="/to_do_list/index.php" class="nav-link p-0 text-muted">About</a></li>
        </ul>
      </div>-->

      <div class="col-md-5 offset-md-1 mb-3">

      @if($errors->any())
      <div class= "alert alert-danger">
        <ul>
          @foreach($errors->all() as $error)
            <li>{{$error}}</li>
          
            @endforeach
        </ul>
      </div>
      @endif
        <form method="post" action=/contactform>
        @csrf
          <h5>Subscribe to our newsletter</h5>
          <p>Monthly digest of what's new and exciting from us.</p>
          <div class="d-flex flex-column flex-sm-row w-100 gap-2">
            <label for="contactform" class="visually-hidden">Email address</label>
            <input type="email1" name="email1" id="email1" placeholder="Type email" class="form-control">
            <button type="submit" class="btn btn-success">Send</button>
          </div>
        </form>
      </div>
    </div>

    <div class=" ">
      <p class="blocktext">© 2022 Company, Inc. All rights reserved.</p>
      <ul class="list-unstyled d-flex">
        <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"></use></svg></a></li>
        <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"></use></svg></a></li>
        <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"></use></svg></a></li>
      </ul>
    </div>
  </footer>
<div class="container">

</div>

</body>
</html>