<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{  asset('assets/frontend/form_asset/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{  asset('assets/frontend/form_asset/css/owl.carousel.min.css')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{  asset('assets/frontend/form_asset/css/bootstrap.min.css')}}">
    
    <!-- Style -->
    <link rel="stylesheet" href="{{  asset('assets/frontend/form_asset/css/style.css')}}">

    <title>Login</title>
  </head>
  <body>
  

  <div class="d-md-flex half">
    <div class="bg" style="background-image: url('{{  asset('assets/frontend/form_asset/images/bg_1.jpg')}}');"></div>
    <div class="contents">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-12">
            <div class="form-block mx-auto">
              <div class="text-center mb-5">
              <h3>Login to <strong>Logistics</strong></h3>
              <!-- <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p> -->
              </div>
              <form action="{{route('login.data')}}" method="post">
                @csrf
                <div class="form-group first">
                  <label for="username">Username</label>
                  <input type="text" class="form-control" name="username" placeholder="your-email@gmail.com" id="username">
                </div>
                <div class="form-group last mb-3">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" name="password" placeholder="Your Password" id="password">
                </div>
                
                <div class="d-sm-flex mb-5 align-items-center">
                  <label class="control control--checkbox mb-3 mb-sm-0"><span class="caption">Remember me</span>
                    <input type="checkbox" checked="checked"/>
                    <div class="control__indicator"></div>
                  </label>
                  <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span> 
                </div>

                <input type="submit" value="Log In" class="btn btn-block btn-primary">

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    
  </div>
    
    

    <script src="{{  asset('assets/frontend/form_asset/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{  asset('assets/frontend/form_asset/js/popper.min.js')}}"></script>
    <script src="{{  asset('assets/frontend/form_asset/js/bootstrap.min.js')}}"></script>
    <script src="{{  asset('assets/frontend/form_asset/js/main.js')}}"></script>
  </body>
</html>