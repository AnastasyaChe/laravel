<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Новостной сайт</title>

  <!-- Bootstrap core CSS -->
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="{{asset('assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="{{asset('assets/css/clean-blog.min.css')}}" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <!-- Page Header -->
  <x-site-header></x-site-header>

  <!-- Main Content -->
  <div class="container">
    @yield('content')
  </div>

  <hr>

  <!-- Footer -->
  <x-site-footer></x-site-footer>

  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset('assetsvendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Custom scripts for this template -->
  <script src="{{ asset('assets/js/clean-blog.min.js')}}"></script>
@stack('js')
</body>

</html>
