@extends('template')

@section('body')

<!-- Slider Start -->
<div class="banner">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/red.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="images/onlinecrime.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="images/stopcrime.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="clearfix"></div>
        <!-- Slider End -->
        <!-- Lawyer section start -->
        <div class="container">
            <div class="row">
                <div class="lawyername">CATEGORIES</div>
                <div class="col-12 col-sm-4 col-md-4 col-lg-4 float-left">
                    <div class="law1">
                        <div class="lawyerimg hvr-grow"><img src="images/drugs.jpg" class="img-fluid"></div>
                        <!-- <div class="lawyername">MALIK ALI</div> -->
                        <div class="details">DRUGS</div>
                    </div>
                </div>
                <div class="col-12 col-sm-4 col-md-4 col-lg-4 float-left">
                    <div class="law1">
                        <div class="lawyerimg hvr-grow"><img src="images/firecrime.jpg" class="img-fluid"></div>
                        <!-- <div class="lawyername">MALIK ALI</div> -->
                        <div class="details">ARSON</div>
                    </div>
                </div>
                <div class="col-12 col-sm-4 col-md-4 col-lg-4 float-left">
                    <div class="law1">
                        <div class="lawyerimg hvr-grow"><img src="images/kidnapping.jpg"  class="img-fluid"></div>
                        <!-- <div class="lawyername">MALIK ALI</div> -->
                        <div class="details">KIDNAPPING</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <!-- Lawyer section End -->

        <!-- Background Big Image section start -->
        <div class="center-area">
            <div class="container">
                <div class="row">
                    <div class="crime-related"><h1>ABOUT US</h1></div>
                    <div class="crime-para"><p>In this website every user can easily report a crime with the use of form and also send audio and video through every person can aware of the crimes happens near it.</p></div>
                <div class="about-btn"><a href="#">ABOUT US</a></div>
                </div>
            </div>
        </div>
        <!-- Background Big Image section End -->

        <div class="clearfix"></div>
        <!-- Related Crimes Section Start -->
        <div class="container">
            <div class="row">
                <div id="box1">
                    <ul id="flexiselDemo2">
                        <li>
                            <div class="col-12  float-left">
                                <div class="crimes-section">
                                    <div class="crime-img"><img src="images/crime6.jpg" class="img-fluid"></div>
                                    <div class="crime-text">vppppppppp</div>
                                    <div class="crime-details">rttttttttt</div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="col-12  float-left">
                                <div class="crimes-section">
                                    <div class="crime-img"><img src="images/crime9.jpg" class="img-fluid"></div>
                                    <div class="crime-text">vppppppppp</div>
                                    <div class="crime-details">rttttttttt</div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="col-12  float-left">
                                <div class="crimes-section">
                                    <div class="crime-img"><img src="images/custom.jpg" class="img-fluid"></div>
                                    <div class="crime-text">vppppppppp</div>
                                    <div class="crime-details">rttttttttt</div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Related Crimes Section End -->
@endsection