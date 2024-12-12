<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  @include('home.css')

  <title>
    Giftos
  </title>

</head>

<body>
  <div class="hero_area">
    @include('home.header')
    
    <!-- slider section -->
   
  <!-- shop section -->

 
  <!-- end shop section -->
    @include('home.product')
  <!-- contact section -->
    @include('home.contact') 
  <br><br><br>
  <!-- end contact section -->

   
  <!-- info section -->

    @include('home.footer')

  <!-- end info section -->
  <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="{{asset('js/custom.js')}}"></script>

</body>

</html>