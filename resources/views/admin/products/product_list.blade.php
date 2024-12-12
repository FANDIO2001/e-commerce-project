<!DOCTYPE html>
<html>
  <head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dark Bootstrap Admin </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
            .div_deg{
                display:flex;
                justify-content:center;
                align-items:center;
            }

            th,td{
              border:1px solid green;

              padding:10px;
            }
            table{
              text-align:center;
              width: 75%;
              border:1px solid green;
            }
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
        <div class="container-fluid">
        <table>
                    <tr style="background-color:green; color:white;">
                      <th>Title</th>
                      <th>Description</th>
                      <th>Photo</th>
                      <th>Price</th>
                      <th>Category</th>
                      <th>Quantity</th>
                      <th colspan="2">Action</th>
                    </tr>
                    @foreach ($data as $data)
                      
                      <tr>
                        <td>{{$data->title}}</td>
                        <td>{{$data->description}}</td>
                        <td><img src="produts/{{$data->photo}}" alt="products"width="90px" height="90px"></td>
                        <td>{{$data->price}}</td>
                        <td>{{$data->category}}</td>
                        <td>{{$data->quantity}}</td>
                        <td>
                        <a href="{{url('edite_product',$data->id)}}" class="btn btn-success">Up</a>
                         
                        </td>
                        <td>
                        
                          <a   href="{{url('delet_product',$data->id)}}" class="btn btn-danger">Del</a>
                        </td>
                      </tr>
                    @endforeach
                  </table>
                 
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