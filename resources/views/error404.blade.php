<!DOCTYPE html>
<html lang="en">

<head>
    <!-- resources/views/home.blade.php -->
    <x-meta-tags-component
        title="Error - Smart Grid Research Group"
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
                    
                    @if(count($publication)>0)
                        <a class="breadcrumb-item small text-body" href="{{ route('publications') }}">Publications</a>
                    @endif

                    @if(count($research)>0)
                        <a class="breadcrumb-item small text-body" href="{{ route('researchers') }}">Researches</a>
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
                        <h5 class="text-white mb-0">General Numbers: </h5>
                        <span>2640051, 2650301</span>
                    </div>
                </div>
                <a href="/" class="h1 text-white mb-0">MicroGrid<span class="text-dark">Lab</span></a>
                <div class="d-flex">
                    <i class="bi bi-envelope fs-2"></i>
                    <div class="ms-3">
                        <h5 class="text-white mb-0">Mail Now</h5>
                        <span>smartgridresearchlab@gmail.com</span>
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
                    <h1 class="text-primary m-0">MicroGrid<span class="text-dark">Lab</span></h1>
                </a>
                <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav">
                        <a href="/" class="nav-item nav-link">Home</a>
                        <a href="{{ route('about') }}" class="nav-item nav-link active">About Us</a>
                        <a href="{{ route('contact') }}" class="nav-item nav-link">Contact Us</a>
                        <a href="{{ route('peoples') }}" class="nav-item nav-link ">People</a>
                        <a href="{{ route('news') }}" class="nav-item nav-link ">News</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu bg-light m-0">
                                
                                @if(count($research)>0)
                                    <a href="{{ route('researchers') }}" class="dropdown-item">Research</a>
                                @endif
                                
                                @if(count($publication)>0)
                                    <a href="{{ route('publications') }}" class="dropdown-item">Publication</a>
                                @endif

                                @if(count($projects)>0)
                                    <a href="{{ route('projects') }}" class="dropdown-item">Project</a>
                                @endif

                                @if(count($course)>0)
                                    <a href="{{ route('courses') }}" class="dropdown-item">Programs</a>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="ms-auto d-none d-lg-flex">
                        <a target="blank" class="btn btn-sm-square btn-primary ms-2" href="https://www.facebook.com/SmartGridResearchGroupUOM"><i class="fab fa-facebook-f"></i></a>
                        <a target="blank" class="btn btn-sm-square btn-primary ms-2" href="https://twitter.com/SGRGUOM"><i class="fab fa-twitter"></i></a>
                        <a target="blank" class="btn btn-sm-square btn-primary ms-2" href="https://www.linkedin.com/company/smart-grid-research-group-uom/"><i class="fab fa-linkedin-in"></i></a>
                        <a target="blank" class="btn btn-sm-square btn-primary ms-2" href="https://www.youtube.com/channel/UCMeDfWAnBOoCadu1ojOvY-w"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- 404 Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <i class="bi bi-exclamation-triangle display-1 text-primary"></i>
                    <h1 class="display-1">404</h1>
                    <h1 class="mb-4">Page Not Found</h1>
                    <p class="mb-4">We’re sorry, the page you have looked for does not exist in our website! Maybe go to our home page or try to use a search?</p>
                    <a class="btn btn-primary py-3 px-5" href="">Go Back To Home</a>
                </div>
            </div>
        </div>
    </div>
    <!-- 404 End -->
        

    <x-web-footer></x-web-footer>

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>