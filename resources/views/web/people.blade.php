<!DOCTYPE html>
<html lang="en">

<head>
    <!-- resources/views/home.blade.php -->
    <x-meta-tags-component
        title="People"
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
                        <a class="breadcrumb-item small text-body" href="{{ route('publications') }}">Publication</a>
                    @endif

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
                        <a href="{{ route('about') }}" class="nav-item nav-link">About Us</a>
                        <a href="{{ route('contact') }}" class="nav-item nav-link">Contact Us</a>
                        <a href="{{ route('peoples') }}" class="nav-item nav-link active">People</a>
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
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5 mt-4">
            <h1 class="display-2 text-white mb-3 animated slideInDown">People</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <!-- <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item" aria-current="page">About</li>
                </ol> -->
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

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
                        <a class="btn btn-lg-square btn-primary me-2" href="mailto:{{ $latestCoordinator->email }}"><i class="far fa-envelope"></i></a>
                        <a class="btn btn-lg-square btn-primary me-2" href="{{ $latestCoordinator->profileurl }}"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                @else
                    <p>No coordinator data available.</p>
                @endif 
            </div>
        </div>
    </div>
    <!-- Team End -->

    <!-- Team Start -->
    <div class="container-fluid container-team py-5">
        <div class="container pb-2">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="display-6 mb-5">Our International Partners</h1>
            </div>
            <div class="row g-5 align-items-center mb-5">

                @php
                    $latestInternational = app(\App\Http\Controllers\InternationalController::class)->getLatestInternation();
                @endphp

                @if($latestInternational)

                <div class="col-md-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="mb-3">Our Latest International Partnership</h1>
                    <h3 class="mb-3">is with, {{ $latestInternational->title }} {{ $latestInternational->firstname }} {{ $latestInternational->lastname }}</h3>
                    <p class="mb-1">From {{ $latestInternational->country }}</p>
                    <p class="mb-2">{{ $latestInternational->department }}, {{ $latestInternational->faculty }}, {{ $latestInternational->university }}</p>
                   
                    <div class="d-flex">
                        <a class="btn btn-lg-square btn-primary me-2" href="mailto:{{ $latestCoordinator->email }}"><i class="far fa-envelope"></i></a>
                        <a class="btn btn-lg-square btn-primary me-2" href="{{ $latestInternational->profileurl }}"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-md-6 wow fadeIn" data-wow-delay="0.3s">
                    <img class="img-fluid w-100" src="{{ $latestInternational->image }}" alt="">
                </div>
                
                @else
                    <p>No international data available.</p>
                @endif
                
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Service Start -->
    <div class="container-fluid container-service py-2">
        <div class="container pt-1">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="display-6 mb-5">See All International Partners</h1>
                
            </div>
            <div class="row g-4">
                @php
                    $latestInt = app(\App\Http\Controllers\InternationalController::class)->showInternationalInCaro();
                @endphp

                <div class="wrapper">
                    <i id="left" class="fa-solid fa-angle-left"></i>
                    <ul class="carouselint">
                        @for($i = 0; $i < count($latestInt); $i++)
                        <li class="card">
                            <div class="img"><img src="{{ $latestInt[$i]->image }}" alt="img" draggable="false"></div>
                            <h5 class="mt-3">{{ $latestInt[$i]->title }} {{ $latestInt[$i]->firstname }} {{ $latestInt[$i]->lastname }}</h6>
                            <p>From {{ $latestInt[$i]->country }}</p>

                            <div>
                                <p  class="d-flex justify-content-center">{{ $latestInt[$i]->department }}, {{ $latestInt[$i]->faculty }}</p>
                                <p  class="d-flex justify-content-center">{{ $latestInt[$i]->university }}</p>
                            </div>

                            <div class="d-flex justify-content-center">
                                <a href="mailto:{{ $latestInt[$i]->email }}"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                    <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z"/>
                                </svg></a>
                                <div class="mx-1"></div>
                                <a href="{{ $latestInt[$i]->profileurl }}"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-link-45deg" viewBox="0 0 16 16">
                                    <path d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1 1 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4 4 0 0 1-.128-1.287z"/>
                                    <path d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243z"/>
                                </svg></a>
                            </div>
                        </li>
                        @endfor
                    </ul>
                    <i id="right" class="fa-solid fa-angle-right"></i>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->
    @php
        $staff = app(\App\Http\Controllers\StaffController::class)->showAllStaffData();
    @endphp
    <!-- Service Start -->
    @if(count($staff)>0)
    
    <div class="container-fluid container-service py-2">
        <div class="container pt-3">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="display-6 mb-5">Centre for Microgrid Staff Members</h1>
                
            </div>
            <div class="row g-4">
                
            @foreach($staff as $stf)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        
                        <div class="d-flex">
                            <div><img src="{{ $stf->image }}" style="width: 60px; height: 60px; border-radius: 50%; object-fit: cover; margin-right: 15px; border: 2px solid #c63333" alt="img" draggable="false"></div>
                            <div>
                                <h6>{{ $stf->title }} {{ $stf->firstname }} {{ $stf->lastname }}</h6>
                                <p style="font-size: 12px;">{{ $stf->department }}, {{ $stf->faculty }}</p>
                                <p style="font-size: 15px;">{{ $stf->university }}</p>
                                <div>
                                    <a target="blank" href="{{ $stf->profileurl }}"><i class="bi bi-link-45deg"></i></a>
                                    <a href="{{ $stf->email }}"><i class="bi bi-envelope-at-fill"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </div>
    
    @endif
    <!-- Service End -->

    <!-- Service Start -->
    <div class="container-fluid container-service py-5">
        <div class="container pt-1">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="display-6 mb-5">Centre for Microgrid Postgraduate Students </h1>
                
            </div>
            <div class="row g-4">
                @php
                    $eightSetpostgraduatess = app(\App\Http\Controllers\PostgraduateController::class)->showAllPostgraduates();
                @endphp

                    @if(count($eightSetpostgraduatess) > 0)
                        @foreach($eightSetpostgraduatess as $postgs)
                            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="service-item">
                                    <div class="icon-box-primary mb-4">
                                        <i class="{{ $postgs->icon }} text-dark"></i>
                                    </div>
                                    <h4 class="mb-3">{{ $postgs->title }} {{ $postgs->firstname }} {{ $postgs->lastname }}</h4>
                                        <p class="mb-3">{{ $postgs->degree }} in {{ $postgs->studyarea }}</p>
                                        <p class="mb-3">Study going on from {{ $postgs->startedyear }} to {{ $postgs->endedyear }}</p>
                                        <p class="mb-4"></p>
                                    <div class="d-flex">
                                        <a class="btn btn-lg-square btn-primary me-2" href="mailto:{{ $postgs->email }}"><i class="far fa-envelope"></i></a>
                                        <a class="btn btn-lg-square btn-primary me-2" href="{{ $postgs->profileurl }}"><i class="fas fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <p>Sorry, No Postgraduates found.</p>
                    @endif
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Service Start -->
    <div class="container-fluid container-service py-5">
        <div class="container pt-1">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="display-6 mb-5">Centre for Microgrid Alumnis</h1>
                
            </div>
            <div class="row g-4">

            @php
                $eightSetAlumnis = app(\App\Http\Controllers\AlumniController::class)->showEightAlumnis();
            @endphp

            @if(count($eightSetAlumnis) > 0)
                @foreach($eightSetAlumnis as $postgs)
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item">
                            <div class="d-flex justify-content-center">
                                <div class="icon-box-primary mb-4">
                                    <div style="margin-bottom: 20px;" class="mx-1">
                                        <a href="{{ $postgs->profileurl }}"><img src="{{ $postgs->alumniimage }}" alt="International Image" style="width: 100px; height: 100px; object-fit: cover; border: none; border-radius: 50%;"></a>
                                    </div>
                                </div>
                            </div>
                            
                            <h4 class="mb-3">{{ $postgs->title }} {{ $postgs->firstname }} {{ $postgs->lastname }}</h4>
                                <p class="mb-3">{{ $postgs->degree }} in {{ $postgs->studyarea }}</p>
                                <p class="mb-3">Study going on from {{ $postgs->startedyear }} to {{ $postgs->endedyear }}</p>
                                <p class="mb-4"></p>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-lg-square btn-primary me-2" href="mailto:{{ $postgs->email }}"><i class="far fa-envelope"></i></a>
                                <a class="btn btn-lg-square btn-primary me-2" href="{{ $postgs->profileurl }}"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-lg-square btn-primary me-2" href="{{ $postgs->puburl }}"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <p>Sorry, No Alumnis found.</p>
            @endif

            </div>
        </div>
    </div>


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
    <script src="{{ asset('js/script.js') }}"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>