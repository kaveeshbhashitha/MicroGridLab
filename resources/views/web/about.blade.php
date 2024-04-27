<!DOCTYPE html>
<html lang="en">

<head>
    <!-- resources/views/home.blade.php -->
    <x-meta-tags-component
        title="About - Smart Grid Research Group"
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


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5 mt-4">
            <h1 class="display-2 text-white mb-3 animated slideInDown">About US</h1>
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

                    <div class="row g-4 g-sm-5 justify-content-end">
                        <div class="col-sm-6">
                            <a target="blank" class="text-white" href="https://www.researchgate.net/lab/Smart-Grid-Research-Group-K-T-M-U-Hemapala">
                                <div class="about-fact btn-square bg-primary ms-sm-auto" style="width: 130px; height: 50px">
                                    See More
                                </div>
                            </a>
                        </div>
                    </div>
                    @php
                        $fiveinternationals = app(\App\Http\Controllers\InternationalController::class)->showFiveInternationals();
                    @endphp
                    <div class="row g-4 g-sm-5">
                        <h6 class="my-3">Our International Colloboration</h6>
                        @if(count($fiveinternationals) > 0)
                            <div style = "justify-content: space-between; display: flex; flex-wrap: wrap;">
                                @foreach($fiveinternationals as $int)
                                    <div style="margin-bottom: 20px;" class="mx-1">
                                        <a target="blank" href="{{ $int->profileurl }}"><img src="{{ $int->image }}" alt="International Image" style="width: 90px; height: 90px; object-fit: cover; border: none; border-radius: 50%;"></a>
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <p>No International found.</p>
                        @endif
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