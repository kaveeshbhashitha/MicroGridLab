<!DOCTYPE html>
<html lang="en">

<head>
    <!-- resources/views/home.blade.php -->
    <x-meta-tags-component
        title="About Us"
        description="Smart Grid Research Group is dedicated to advancing research in smart grid technologies, renewable energy, and sustainable power solutions."
        keywords="smart grid, renewable energy, sustainable energy, power products, AI, power automation"
        author="Smart Grid Research Group"
        twitterCard="summary"
        twitterSite="@SGRGUOM"
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
                    <h1 class="text-primary m-0">SmartGrid<span class="text-dark">Research Group</span></h1>
                </a>
                <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav">
                        <a href="/" class="nav-item nav-link">Home</a>
                        <a href="{{ route('about') }}" class="nav-item nav-link active">About Us</a>
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
                        <a href="{{ route('contact') }}" class="nav-item nav-link">Contact Us</a>
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


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5 mt-4">
            <h1 class="display-2 text-white mb-3 animated slideInDown">About Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <!-- <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a target="blank" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a target="blank" href="#">Pages</a></li>
                    <li class="breadcrumb-item" aria-current="page">About</li>
                </ol> -->
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    
    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-6 mb-4 text-danger">
                        Smart Grid Research Group
                    </h1>
                    <p class="mb-4" style="text-align:justify;">Smart Grid Research Group (SGRG) of the Department of Electrical Engineering, University of Moratuwa is dedicated to the transformation of conventional power networks to self-healing, interactive, and secure Smart Grids with the integration of communication and information technology to advance power system operations</p>
                    <div class="row g-4 g-sm-5 justify-content-center">

                        @php
                            $totalPublishedResearchs = app(\App\Http\Controllers\ResearchController::class)->showTotalPublishedResearchs();
                            $totalPublishedPublication = app(\App\Http\Controllers\PublicationController::class)->showTotalPublishedPublications();
                            $totalPublishedPostgraduates = app(\App\Http\Controllers\PostgraduateController::class)->showTotalPublishedPostgraduates();
                        @endphp

                        <div class="col-sm-6">
                            <div class="about-fact btn-square flex-column bg-primary ms-sm-auto">
                                <p class="text-white mb-0">Postgraduate Students</p>
                                @if($totalPublishedPostgraduates > 0)
                                    <h1 class="text-white mb-0" data-toggle="counter-up">{{ $totalPublishedPostgraduates }}</h1>
                                @else
                                    <h1>0</h1>
                                @endif
                            </div>
                        </div>
                        <div class="col-sm-6 text-start">
                            <div class="about-fact btn-square flex-column rounded-circle bg-secondary me-sm-auto">
                                <p class="text-white mb-0">Our Publications</p>
                                @if($totalPublishedPublication > 0)
                                    <h1 class="text-white mb-0" data-toggle="counter-up">{{ $totalPublishedPublication }}</h1>
                                @else
                                    <h1>0</h1>
                                @endif
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="about-fact mt-n130 btn-square flex-column rounded-circle bg-dark mx-sm-auto">
                                <p class="text-white mb-0">Our researches</p>
                                @if($totalPublishedResearchs > 0)
                                    <h1 class="text-white mb-0" data-toggle="counter-up">{{ $totalPublishedResearchs }}</h1>
                                @else
                                    <h1>0</h1>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div>
                        <h4 class="display-6 mb-4"> Our Mission <i class="fas fa-handshake"></i></h4>
                        <p class="mb-4" style="text-align:justify;"> To the advancement of intelligent systems through original research and system development to cater the needs of the power sector and the society</p>
                    </div>
                    <div>
                        <h4 class="display-6 mb-4">Our Vision <i class="fas fa-lightbulb"></i></h4>
                        <p class="mb-4" style="text-align:justify;">To actively contribute to the technological advancement of the power system sector for the betterment of the quality of life in Sri Lankan society and the sustainable development of the nation by performing well-organized and focused research in the Smart Grid field.</p>
                    </div>
                    <div class="row g-4 g-sm-5">
                        <div class="d-flex justify-content-between py-2">
                            <div class="text mr-4 py-4">
                                <h6 class="text-justify">The establishment of the Smart Grid Lab, supported by the Asian Development Bank, marks a significant advancement in modern energy infrastructure and innovation.</h6>
                                <div><i><a href="https://www.adb.org/where-we-work/sri-lanka" target="_blank">About ADB</a></i></div>
                            </div>
                            <div class="image">
                                <img src="data:image/png;base64,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" alt="" style="height:auto; width: 150px;">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Features Start -->
    <div class="container-fluid feature my-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-6 pt-lg-5">
                    <div class="bg-white p-5 mt-lg-5">
                        <h1 class="display-6 mb-4 wow fadeIn" data-wow-delay="0.3s">LECO - UOM Micro Grid Research Pilot Project</h1>
                        <p style="text-align:justify;" class="mb-4 wow fadeIn" data-wow-delay="0.4s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus augue, iaculis id elit eget, ultrices pulvinar tortor. Quisque vel lorem porttitor, malesuada arcu quis, fringilla risus. Pellentesque eu consequat augue.</p>
                        <div class="row g-5 pt-2 mb-3 mt-1">
                            
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                                <div class="icon-box-primary mb-4">
                                    <i class="fas fa-user-plus text-dark"></i>
                                </div>
                                <h5 class="mb-3">Experience & Expertist Instructors</h5>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                                <div class="icon-box-primary mb-4">
                                    <i class="fas fa-brain text-dark"></i>
                                </div>
                                <h5 class="mb-3">Latest & Modern Technology in Sri Lanka</h5>
                            </div>

                        </div>
                        <a target="blank" class="btn btn-primary py-3 px-5 wow fadeIn" data-wow-delay="0.5s" href="">Explore More</a>
                    </div>
                </div>
                <div class="col-lg-6 d-flex justify-content-center align-items-center">
                    <div class="row align-items-end">
                        <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                            <div class="d-flex align-items-center justify-content-center" style="min-height: 300px;">
                                <button type="button" class="btn-play" data-bs-toggle="modal"
                                        data-src="https://www.youtube.com/embed/XhW8-n37asE" data-bs-target="#videoModal">
                                    <span></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- Video Modal Start -->
    <div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Youtube Video</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen
                            allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->


    <!-- Team Start -->
    <div class="container-fluid container-team py-5">
        <div class="container pb-2">
            <div class="row g-5 align-items-center mb-5">
                @php
                    $latestCoordinator = app(\App\Http\Controllers\CoordinatorController::class)->getLatestCoordinator();
                @endphp

                @if($latestCoordinator)
                <div class="col-md-6 wow fadeIn" data-wow-delay="0.3s">
                    <img class="img-fluid w-100" src="{{ $latestCoordinator->image }}" alt="">
                </div>
                <div class="col-md-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="mb-3">Our Coordinator</h1>
                    <h3 class="mb-3">{{ $latestCoordinator->title }} {{ $latestCoordinator->firstname }} {{ $latestCoordinator->lastname }}</h3>
                    <p class="mb-1">Coordinator of SGRG</p>
                    <p class="mb-2">{{ $latestCoordinator->department }}, {{ $latestCoordinator->faculty }}, {{ $latestCoordinator->university }}</p>
                    <p class="mb-6">Contact: {{ $latestCoordinator->code }} {{ $latestCoordinator->telephone }}</p>
                   
                    <div class="d-flex">
                        <a target="blank" class="btn btn-lg-square btn-primary me-2" href="mailto:{{ $latestCoordinator->email }}"><i class="far fa-envelope"></i></a>
                        <a target="blank" class="btn btn-lg-square btn-primary me-2" href="{{ $latestCoordinator->profileurl }}"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                @else
                    <p>No coordinator data available.</p>
                @endif 
            </div>
        </div>
    </div>
    <!-- Team End -->


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