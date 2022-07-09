<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/fonts.css" rel="stylesheet" type="text/css">
    <link href="fontawesome-free-6.0.0-web/css/solid.min.css" rel="stylesheet">
    <link href="fontawesome-free-6.0.0-web/css/fontawesome.min.css" rel="stylesheet" type="text/css">
    <title>Document</title>
    <!-- @if(!Session::has('adminloginId'))
        <script type="text/javascript">
            window.location.href="{{url('adminlogin')}}";
        </script>
    @endif -->
</head>
<body>
<div class="container-fluid p-0">
            <div class="create">
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6 m-auto">
                     <!-- <script>alert("{{Session('msg')}}")</script>
                     @if(Session::has('error'))
                    <p class="text-danger">{{ Session::get('error') }}</p>
                    @endif
                    @if(Session::has('success'))
                        <p class="text-success">{{ Session::get('success') }}</p>
                    @endif  -->
                    <form action="{{ route('checkadmin')}}" method="POST">
                        @csrf
                        <div class="heading">Admin Login</div>
                        @if(Session::has('success'))
                        <div class="alert alert-success">{{Session::get('success')}}</div>
                        @endif
                        @if(Session::has('fail'))
                        <div class="alert alert-danger">{{Session::get('fail')}}</div>
                        @endif
                        <div class="name">
                            <i class="fa-solid fa-envelope"></i>
                            <input type="text" name="username" placeholder="Enter User Name" value="{{old('username')}}">
                            <span class="text-danger">@error('username') {{$message}} @enderror</span>
                        </div>
                        <div class="name">
                            <i class="fa-solid fa-lock"></i>
                            <input type="password" name="password" placeholder="Enter Your Password">
                            <span class="text-danger">@error('password') {{$message}} @enderror</span>
                        </div>
                        <div class="sign-up-btn">
                            <button type="submit">LOGIN TO DASHBOARD</button>
                        </div>
                        <!-- <div class="already">Don't have an account? <a href="/signup">Create Your Account</a></div> -->
                    </form>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>  
</body>
</html>