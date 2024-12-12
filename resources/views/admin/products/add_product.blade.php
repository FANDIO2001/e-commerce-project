<!DOCTYPE html>
<html>
  <head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dark Bootstrap Admin </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <style>
    </style>
      @include('admin.css')
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
      @include('admin.header')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      @include('admin.sider')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

            <h2 class="h5 no-margin-bottom">Dashboard</h2>
          </div>
        </div>
        <div class="container">
            <form  method="post" action="{{url('create_product')}}" enctype="multipart/form-data">
             @csrf
             <label for="">Title</label>
            <input type="text" name="title"  class="form-control" ><br>
            <label for="">Description</label>
            <textarea name="description" value="" class="form-control"></textarea><br>
            <label for="">Photo</label>
            <input type="file" name="photo"  class="form-control" ><br>
            <label for="">Price</label>
            <input type="text" name="price"  class="form-control"><br>
            <label for="">Category</label>
           <select name="category" id="" class="form-control">
            @foreach ($category as $category)
               <option value="{{$category->category_name}}">{{$category->category_name}}</option>
            @endforeach
           
           </select><br>
            Quantity
            <input type="number" name="quantity"  class="form-control" ><br>
            
            <input type="submit" value="Add Product" class="btn btn-success ml-5 mb-4">
        </form>
        </div>
        
          @include('admin.footer')
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="{{asset('admincss/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/popper.js/esm/popper.min.js')}}"> </script>
    <script src="{{asset('admincss/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('admincss/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('admincss/js/charts-home.js')}}"></script>
    <script src="{{asset('admincss/js/front.js')}}"></script>
  </body>
</html>