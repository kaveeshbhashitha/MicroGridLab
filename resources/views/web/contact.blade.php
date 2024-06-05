<!DOCTYPE html>
<html lang="en">

<head>
    <!-- resources/views/home.blade.php -->
    <x-meta-tags-component
        title="Contact Us"
        description="Smart Grid Research Group is dedicated to advancing research in smart grid technologies, renewable energy, and sustainable power solutions."
        keywords="smart grid, renewable energy, sustainable energy, power products, AI, power automation"
        author="Your Name"
        twitterCard="summary"
        twitterSite="@YourTwitterHandle"
        image="{{ asset('image/sgrg-logo.png') }}"
        ogSiteName="Smart Grid Research Group"
        fbAppId="Your Facebook App ID"
    />
</head>

<body>

    @php
        $projects = app(\App\Http\Controllers\ProjectController::class)->showProjectData();
        $publication = app(\App\Http\Controllers\PublicationController::class)->showPublicationhData();
        $research = app(\App\Http\Controllers\ResearchController::class)->showResearchData();
        $course = app(\App\Http\Controllers\CourseController::class)->showCourseData();
    @endphp
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid py-2 d-none d-lg-flex">
        <div class="container">
            <div class="d-flex justify-content-between">
                <div>
                    <small class="me-3"><i class="fa fa-map-marker-alt me-2"></i>Department of Electrical Engineering</small>
                    <small class="me-3"><i class="fa fa-clock me-2"></i>University of Moratuwa, Moratuwa 10400</small>
                </div>
                <nav class="breadcrumb mb-0 bg-white">
                    <a class="breadcrumb-item small text-body" href="{{ route('about') }}">About Us</a>
                    <a class="breadcrumb-item small text-body" href="{{ route('contact') }}">Contact Us</a>
                    <a class="breadcrumb-item small text-body" href="{{ route('peoples') }}">People</a>
                    
                    @if(count($research)>0)
                        <a class="breadcrumb-item small text-body" href="{{ route('researchers') }}">Research</a>
                    @endif

                </nav>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Brand Start -->
    <div class="container-fluid bg-primary text-white pt-4 pb-5 d-none d-lg-flex">
        <div class="container pb-2">
            <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex">
                    <i class="bi bi-telephone-inbound fs-2"></i>
                    <div class="ms-3">
                        <h5 class="text-white mb-0">Contact</h5>
                        <span>0112650301 ext 3295</span>
                    </div>
                </div>
                <a href="/" class="h2 text-white mb-0">LECO-UOM <span class="text-dark">Smart Grid Research Lab</span></a>
                <div class="d-flex">
                    <i class="bi bi-envelope fs-2"></i>
                    <div class="ms-3">
                        <h5 class="text-white mb-0">Mail</h5>
                        <span>sgrl-elect@uom.lk</span>
                    </div>
                </div>
            </div>
        </div> 
    </div>
    <!-- Brand End -->


    <!-- Navbar Start -->
    <div class="container-fluid sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-white py-lg-0 px-lg-3">
                <a href="index.html" class="navbar-brand d-lg-none">
                    <h1 class="text-primary m-0">SmartGrid<span class="text-dark">Lab</span></h1>
                </a>
                <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav">
                        <a href="/" class="nav-item nav-link">Home</a>
                        <a href="{{ route('about') }}" class="nav-item nav-link ">About Us</a>
                        <a href="{{ route('peoples') }}" class="nav-item nav-link ">People</a>
                        <a href="{{ route('news') }}" class="nav-item nav-link ">News</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Projects</a>
                            <div class="dropdown-menu bg-light m-0">
                                
                                @if(count($research)>0)
                                    <a href="{{ route('researchers') }}" class="dropdown-item">Research</a>
                                @endif
                                
                                @if(count($publication)>0)
                                    <a href="{{ route('projects') }}" class="dropdown-item">Industrial Projects</a>
                                @endif

                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                            <div class="dropdown-menu bg-light m-0">

                                @if(count($projects)>0)
                                    <a href="{{ route('courses') }}" class="dropdown-item">Training Programs</a>
                                @endif

                                @if(count($course)>0)
                                    <a href="{{ route('consultant') }}" class="dropdown-item">Consultant</a>
                                @endif

                            </div>
                        </div>
                        <a href="{{ route('contact') }}" class="nav-item nav-link active">Contact Us</a>
                    </div>
                    <div class="ms-auto d-none d-lg-flex">
                        <a class="btn btn-sm-square btn-primary ms-2" href="https://www.facebook.com/SmartGridResearchGroupUOM"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-sm-square btn-primary ms-2" href="https://twitter.com/SGRGUOM"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-sm-square btn-primary ms-2" href="https://www.linkedin.com/company/smart-grid-research-group-uom/"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-sm-square btn-primary ms-2" href="https://www.youtube.com/channel/UCMeDfWAnBOoCadu1ojOvY-w"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5 mt-4">
            <h1 class="display-2 text-white mb-3 animated slideInDown">Contact US</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <!-- <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item" aria-current="page">Contact</li>
                </ol> -->
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="display-6 mb-3">Have Any Query? or Need More InFo, Feel Free To Contact Us</h1>
                <p class="mb-5"><a href="https://www.google.com/maps?sca_esv=5fae2633b037e436&sca_upv=1&output=search&q=university+of+moratuwa&source=lnms&entry=mc&ved=1t:200715&ictx=111">We are located at the</a> <a href="http://uom.lk/elect">Electrical Engineering Department</a>, <a href="http://uom.lk/efac">Faculty of Engineering</a>, <a href="https://uom.lk/">University of Moratuwa</a></p>
            </div>
            <div class="row contact-info position-relative g-0 mb-5">
                <div class="col-lg-6">
                    <a target="blank" href="tel:0112650301" class="d-flex justify-content-lg-center bg-primary p-4">
                        <div class="icon-box-light flex-shrink-0">
                            <i class="bi bi-phone text-dark"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-white">Call Us</h5>
                            <h3 class="text-white mb-0">0112650301 ext 3295</h3>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6">
                    <a href="mailto:sgrl-elect@uom.lk" class="d-flex justify-content-lg-center bg-primary p-4">
                        <div class="icon-box-light flex-shrink-0">
                            <i class="bi bi-envelope text-dark"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-white">Mail Us</h5>
                            <h3 class="text-white mb-0">sgrl-elect@uom.lk</h3>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h4 class="mb-4">Feel free to ask question or request information</h4>
                    <form action="{{ route('send.email') }}" method="POST">
                    <div class="my-1">
                        @if(session()->has('success'))
                            <div class="alert alert-success text-center">
                                {{ session('success') }} <i class="bi bi-check-circle"></i>
                            </div>
                        @endif

                        @if(session()->has('error'))
                            <div class="alert alert-danger text-center">
                                {{ session('error') }} <i class="bi bi-exclamation-triangle"></i>
                            </div>
                        @endif
                    </div>
                    @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Your Name</label>
                                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Your Email</label>
                                    <input name="email" type="email" class="form-control" id="email" pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$" placeholder="Enter your Email">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="subject">Subject</label>
                                    <input name="subject" type="text" class="form-control" id="subject" placeholder="Question / Request ...">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea name="message" class="form-control" placeholder="Leave a message here" id="message" style="height: 200px"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary py-3 px-5" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.780036145733!2d79.89791922212657!3d6.796595872347431!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2454105064bb3%3A0x1d73cb3ec27f242c!2sDepartment%20of%20Electrical%20Engineering!5e0!3m2!1sen!2slk!4v1712894119588!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <x-web-footer></x-web-footer>

    <!-- JavaScript Libraries -->
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>