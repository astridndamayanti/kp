<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="{{asset('bootstrap/css/bootstrap.css')}}">
  <!-- Place your kit's code here -->
  <!-- fontawesom -->
  <script src="https://kit.fontawesome.com/70d50d2d9f.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="{{asset('fontawesome/css/fontawesome.css')}}">
  <link rel="stylesheet" href="{{asset('fontawesome/css/brands.css')}}">
  <link rel="stylesheet" href="{{asset('fontawesome/css/regular.css')}}">
  <link rel="stylesheet" href="{{asset('fontawesome/css/solid.css')}}">
  <link rel="stylesheet" href="{{asset('fontawesome/css/svg-with-js.css')}}">
  <link rel="stylesheet" href="{{asset('fontawesome/css/v4-shims.css')}}">
  <script src="{{asset('fontawesome/js/all.js')}}"></script>
  <!-- custom css and js-->
  <link rel="stylesheet" href="{{asset('custom/css/style.css')}}">
  {{-- <link rel="icon" type="text/css" href="{}"> --}}
  
  <script src="{{asset('custom/js/script.js')}}"></script>
  <title>Class Guru</title>
</head>

<!-- body -->

<body class="body">
  <!-- content -->
  <div class="content">
    <!-- navbar -->
    @include('guru.includes._navbar')
    <!-- tutup navbar -->
    <!-- judul -->

    <!-- judul -->
    <!-- card -->
    @include('guru.includes._sidebar')

  </div>
  <!-- card -->
  <!-- content -->

  <!-- footer -->
    @include('guru.includes._footer')
  <!-- footer -->

  <!-- body -->

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="{{asset('adminn/assets/vendor/jquery/jquery.js')}}"></script>
  <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/swiper.min.js')}}"></script>
  <script>
    function facebook() {
      window.open("https://www.facebook.com/pages/SMK-Wikrama-Bogor/51870946745");
    }
  </script>
</body>

</html>