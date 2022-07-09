<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>This is Home Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/fonts.css" rel="stylesheet" type="text/css">
    <link href="fontawesome-free-6.0.0-web/css/solid.min.css" rel="stylesheet">
    <link href="fontawesome-free-6.0.0-web/css/fontawesome.min.css" rel="stylesheet" type="text/css">

    <!-- 
        aos
     -->
     <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

<style>
    /* Video recorder CSS*/
    button {
  margin: 0 3px 10px 0;
  padding-left: 2px;
  padding-right: 2px;
  /* width: 99px; */
}

button:last-of-type {
  margin: 0;
}

p.borderBelow {
  margin: 0 0 20px 0;
  padding: 0 0 20px 0;
}

video {
  vertical-align: top;
  --width: 25vw;
  width: var(--width);
  height: calc(var(--width) * 0.5625);
}

video:last-of-type {
  margin: 0 0 20px 0;
}

video#gumVideo {
  margin: 0 10px 10px 0;
}

</style>


    <!-- Location Map Javascript   -->

<!---  Location Map Javascript code End  --> 
</head>

<body>
<!-- {{dump ("loginId");}} -->
    <div class="container-fluid p-0">
        <div class="hdr">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-12 col-sm-4 col-md-4 col-lg-4 float-left">
                        <div class="logo">Crime Reporting</div>
                    </div>
                    <div class="col-12 col-sm-4 col-md-4 col-lg-4 float-right">
                        <div class="search-bar">
                            <input type="text" name="search" placeholder="Search here">
                            <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <!-- Navigation Bar -->
        <div class="nav-background" data-aos="flip-right">
            <div class="container">
                <div class="row">
                <div class="col-12 col-sm-8 col-md-8 col-lg-8 float-left">
                    <nav class="navbar navbar-expand-lg navbar-light m-0">
                        <div class="container-fluid p-0">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="/home">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " aria-current="page" href="/crimepage">Crime Report</a>
                                    </li>
                                     <!-- <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="/crimeblog"
                                            id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            Crime Blog
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                            <li><a class="dropdown-item" href="/crimeblog">theft</a></li>
                                            <li><a class="dropdown-item" href="/crimeblog">Child kidnapping</a></li>
                                            <li><a class="dropdown-item" href="/crimeblog">Women Rights</a></li>
                                        </ul>
                                    </li> -->
                                    <li class="nav-item">
                                        <a class="nav-link" href="/crimeblog">Crime Blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">About Us</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="col-12 col-sm-4 col-md-4 col-lg-4 float-left">
                    <div class="login">
                        @if(Session::has('loginId'))
                        <a href="/logout" class="hvr-sweep-to-bottom">LOGOUT</a>
                        @else
                        <a href="/signin" class="hvr-sweep-to-bottom">Login</a>
                        <a href="/signup" class="hvr-sweep-to-bottom">SignUp</a>
                        @endif
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
        <!-- Navigation Bar End -->
        <div class="clearfix"></div>



        @yield('body')



        <!-- Footer Start -->
        <div class="footer-bg">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-3 col-md-3 col-lg-3 float-left">
                        <div class="info">
                            <h2>USE FULL LINK</h2>
                            <ul>
                                <li><a href="#"><i class="fa-solid fa-house-chimney"></i>Home</a></li>
                                <li><a href="#"><i class="fa-solid fa-align-left"></i>Crime Report</a></li>
                                <li><a href="#"><i class="fa-solid fa-bars"></i>Crime Blog</a></li>
                                <li><a href="#"><i class="fa-solid fa-address-card"></i>About Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-sm-3 col-md-3 col-lg-3 float-left">
                        <div class="info">
                            <h2>Information</h2>
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Crime Blog</a></li>
                                <li><a href="#">Crime Report</a></li>
                                <li><a href="#">About Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-sm-3 col-md-3 col-lg-3 float-left">
                        <div class="info">
                            <h2>Help Lines</h2>
                            <ul>
                                <li><a href="#"><i class="fa-solid fa-kit-medical"></i>Rescue 1122</a></li>
                                <li><a href="#"><i class="fa-solid fa-phone"></i>Police Emergency 15</a></li>
                                <li><a href="#"><i class="fa-solid fa-fire-extinguisher"></i>Fire Brigade 16</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-sm-3 col-md-3 col-lg-3 float-left">
                        <div class="infor">
                            <h2>About Us</h2>
                            <ul>
                                <p>In this website every user can easily report a crime with the use of form and also send audio and video through every person can aware of the crimes happens near it.</p>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
    </div>
    <script src="js/script.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="js/jquery.flexisel.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {

            $("#flexiselDemo2").flexisel({
                enableResponsiveBreakpoints: true,
                visibleItems: 4,
                itemsToScroll: 3,
                animationSpeed: 1000,
                autoPlay: true,
                autoPlaySpeed: 3000,
                pauseOnHover: true,
                responsiveBreakpoints: {
                    portrait: {
                        changePoint: 480,
                        visibleItems: 1
                    },
                    landscape: {
                        changePoint: 640,
                        visibleItems: 2
                    },
                    tablet: {
                        changePoint: 768,
                        visibleItems: 3
                    }
                }
            });
        });
    </script>
    <!-- 
        aos
     -->
     <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>
