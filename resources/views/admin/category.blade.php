<!DOCTYPE html>
<html>
  <head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dark Bootstrap Admin </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
      @include('admin.css')
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

        <style>
            input[type='text']{
                width: 500px;
            }
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
           <h1 class="h5 no-margin-bottom text-light">Add Category</h1>
                <div class="div_deg">
                    
                    <br>
                    <form action="{{url('add_category')}}" method="post">
                          @csrf
                        <input type="text" name="category"  class="form-control"><br>
                        <input type="submit" value="Add a new Category" class="btn btn-success">
                    </form>
                </div>

             
         </div>
             
            
        </div>
       
        
          @include('admin.footer')
          <div class="ml-5">
                  <table>
                    <tr style="background-color:green; color:white;">
                      <th>Category Name</th>
                      <th colspan="2">Action</th>
                    </tr>
                    @foreach ($data as $data)
                      
                      <tr>
                        <td>{{$data->category_name}}</td>
                        <td>
                        <a href="{{url('edit_category',$data->id)}}" class="btn btn-success">Up</a>
                         
                        </td>
                        <td>
                        
                          <a   href="{{url('delete_category',$data->id)}}" class="btn btn-danger">Del</a>
                        </td>
                      </tr>
                    @endforeach
                  </table>
                </div>
      </div>
    </div>
    <!-- JavaScript files-->
            <!-- <script>onclick="confirmation(event)" 
              function confirmation(event){
                event.preventDefault();

                var urlToRedirect = event.currentTarget.getAttribute('href');
                console.log(urlToRedirect);

                swal=({
                  'title': "Are You Sure To Delete This",
                  'text': "This Delete Will Be Permanent",
                  'icon': "Warning",
                  'buttons': true,
                  'dangerMode':true,
                })

                .then((willCancel)=>{
                    if (willCancel) {
                      window.location.href=urlToRedirect;
                    }
                });
              }
            </script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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