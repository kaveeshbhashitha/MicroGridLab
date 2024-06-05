<!DOCTYPE html>
<html lang="en">

<head>
    <!-- resources/views/home.blade.php -->
    <x-meta-tags-component
        title="Welcome to Smart Grid Research Group"
        description="Smart Grid Research Group is dedicated to advancing research in smart grid technologies, renewable energy, and sustainable power solutions."
        keywords="smart grid, renewable energy, sustainable energy, power products, AI, power automation"
        author="Smart Grid Research Group"
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
                        <h5 class="text-white mb-0">Contacts </h5>
                        <span>2640051, 2650301</span>
                    </div>
                </div>
                <a href="/" class="h2 text-white mb-0">LECO-UOM <span class="text-dark">Smart Grid Research Lab</span></a>
                <div class="d-flex">
                    <i class="bi bi-envelope fs-2"></i>
                    <div class="ms-3">
                        <h5 class="text-white mb-0">Mail</h5>
                        <span>smartgrid.lab.uom@gmail.com</span>
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
                    <h1 class="text-primary m-0">LECO-UOM<span class="text-dark">Smart Grid Research Lab</span></h1>
                </a>
                <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav">
                        <a href="/" class="nav-item nav-link active">Home</a>
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
                        <a href="{{ route('contact') }}" class="nav-item nav-link">Contact Us</a>
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


    <!-- Carousel Start -->
    <div class="container-fluid header-carousel px-0 mb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('image/bg01.jpg') }}" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-7 text-start">
                                    <h1 class="text-white animated slideInRight mb-3" style="font-size:60px;">Smart Grid Research Lab</h1>
                                    <p class="mb-5 animated slideInRight">Smart Grid Research Lab of the Department of Electrical Engineering, University of Moratuwa is dedicated to the transformation of conventional power networks to self-healing, interactive, and secure Smart Grids with the integration of communication and information technology to advance power system operations.</p>
                                    <a target="blank" href="https://www.researchgate.net/lab/Smart-Grid-Research-Group-K-T-M-U-Hemapala" class="btn btn-primary py-3 px-5 animated slideInRight">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('image/bg02.jpg') }}" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-end">
                                <div class="col-lg-7 text-end">
                                    <h1 class="text-white animated slideInRight mb-3" style="font-size:60px;">Smart Grid Research Lab</h1>
                                    <p class="mb-5 animated slideInLeft">Smart Grid Research Lab of the Department of Electrical Engineering, University of Moratuwa is dedicated to the transformation of conventional power networks to self-healing, interactive, and secure Smart Grids with the integration of communication and information technology to advance power system operations.</p>
                                    <a target="blank" href="https://uom.lk/elect/group/smart-grid" class="btn btn-primary py-3 px-5 animated slideInLeft">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="row g-0">
                        <div class="col-6">
                            <img class="img-fluid" src="{{ asset('image/charging.jpg') }}">
                        </div>
                        <div class="col-6">
                            <img class="img-fluid" src="{{ asset('image/natural.jpg') }}">
                        </div>
                        <div class="col-6">
                            <img class="img-fluid" src="{{ asset('image/wind.jpg') }}">
                        </div>
                        <div class="col-6">
                            <div class="bg-primary w-100 h-100 mt-n5 ms-n5 d-flex flex-column align-items-center justify-content-center">
                                <div class="icon-box-light">
                                    <i class="bi bi-award text-dark"></i>
                                </div>
                                <h1 class="display-1 text-white mb-0" data-toggle="counter-up">3</h1>
                                <small class="fs-5 text-white">Years Experience</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-6 mb-4">Collaboration with Research Institutes and Industry: Key to Microgrid Deployment Success</h1>
                    <p class="mb-4" style="text-align:justify;">Collaboration and partnerships are crucial for the successful implementation of microgrids. These projects are complex and require expertise from various fields, such as renewable energy, energy management systems, and grid optimization. By joining forces, stakeholders can combine their diverse skills, knowledge, and resources, fostering innovation and ensuring comprehensive solutions. We actively seek collaboration with industry and research institutes to achieve sustainable renewable energy systems.</p>
                    <div class="row g-4 g-sm-5 justify-content-center">
                    
                    @php
                        $totalPublishedAlumnis = app(\App\Http\Controllers\AlumniController::class)->showTotalPublishedAlumnis();
                        $totalPublishedInternationals = app(\App\Http\Controllers\InternationalController::class)->showTotalPublishedInternationals();
                        $eightSetInternationals = app(\App\Http\Controllers\PostgraduateController::class)->showTotalPublishedPostgraduates();
                    @endphp

                        <div class="col-sm-6">
                            <div class="about-fact btn-square flex-column rounded-circle bg-primary ms-sm-auto">
                                <p class="text-white mb-0">Total Alumnis</p>
                                @if($totalPublishedAlumnis > 0)
                                    <h1 class="text-white mb-0" data-toggle="counter-up">{{ $totalPublishedAlumnis }}</h1>
                                @else
                                    <p>No data</p>
                                @endif
                            </div>
                        </div>
                        <div class="col-sm-6 text-start">
                            <div class="about-fact btn-square flex-column rounded-circle bg-secondary me-sm-auto">
                                <p class="text-white mb-0">Total Internationals</p>
                                @if($totalPublishedInternationals > 0)
                                    <h1 class="text-white mb-0" data-toggle="counter-up">{{ $totalPublishedInternationals }}</h1>
                                @else
                                    <p>No data</p>
                                @endif
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="about-fact mt-n130 btn-square flex-column rounded-circle bg-dark mx-sm-auto">
                                <p class="text-white mb-0">Total Postgraduates</p>
                                @if($eightSetInternationals > 0)
                                    <h1 class="text-white mb-0" data-toggle="counter-up">{{ $eightSetInternationals }}</h1>
                                @else
                                    <p>No data</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="container-fluid container-service py-5">
        <div class="container pt-1">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="display-6 mb-3">Postgraduate Students</h1>
                
            </div>
            <div class="row g-4">

            @php
                $fourSetpostgraduatess = app(\App\Http\Controllers\PostgraduateController::class)->showFourPostgraduates();
            @endphp

            @if(count($fourSetpostgraduatess) > 0)
                @foreach($fourSetpostgraduatess as $postgs)
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item">
                            <div class="icon-box-primary mb-4">
                                <i class="{{ $postgs->icon }} text-dark"></i>
                            </div>
                            <h4 class="mb-3">{{ $postgs->title }} {{ $postgs->firstname }} {{ $postgs->lastname }}</h4>
                                <p class="mb-3">{{ $postgs->degree }} in {{ $postgs->studyarea }}</p>
                                <p class="mb-1">Study started {{ $postgs->startedyear }}</p>
                                <p class="mb-4">Complete {{ $postgs->endedyear }}</p>
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
    <!-- Service End -->


    <!-- Service Start -->
    <div class="container-fluid container-service py-5">
        <div class="container pt-1">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="display-6 mb-3">Alumnis</h1>
               
            </div>
            <div class="row g-4">

            @php
                $fourSetAlumnis = app(\App\Http\Controllers\AlumniController::class)->showFourAlumnis();
            @endphp

            @if(count($fourSetAlumnis) > 0)
                @foreach($fourSetAlumnis as $postgs)
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
                                <p class="mb-1">Study started {{ $postgs->startedyear }}</p>
                                <p class="mb-4">Completed {{ $postgs->endedyear }}</p>
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
    <!-- Service Start -->

    <!-- Testimonial Start -->
    <div class="container-fluid testimonial py-3">
        <div class="container pt-5">
            <div class="row gy-5 gx-0">
                <div class="col-lg-6 pe-lg-5 wow fadeIn" data-wow-delay="0.3s">
                    <h1 class="display-6 text-white mb-4">See the latest events and news on microgrid laboratory's groundbreaking research and transformative projects</h1>
                    <p class="text-white mb-5" style="text-align:justify;">Our faculty and students eagerly seek industry-relevant research prospects. From significant breakthroughs to dynamic solutions, we merge science and technology to advance key research domains such as sustainability, power systems, electronics, IoT, embedded systems, renewable energy, and beyond.</p>
                    <a href="{{ route('news') }}" class="btn btn-primary py-3 px-5">See News</a>
                </div>
                <div class="col-lg-6 mb-n5 wow fadeIn pb-5" data-wow-delay="0.5s">
                    <div class="bg-white  mb-3">
                        @php
                            $latestNews = app(\App\Http\Controllers\NewsController::class)->showFiveNews();
                        @endphp

                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                @for($i = 0; $i < count($latestNews); $i++)
                                    <li data-target="#carouselExampleIndicators" data-slide-to="{{ $i }}" @if($i === 0) class="active" @endif></li>
                                @endfor
                            </ol>
                            <div class="carousel-inner">
                                @for($i = 0; $i < count($latestNews); $i++)
                                    <div class="carousel-item @if($i === 0) active @endif">
                                        <img class="d-block w-100" src="{{ $latestNews[$i]->newsimage }}" alt="{{ $latestNews[$i]->newstitle }}">
                                        <div class="carousel-caption d-none d-md-block p-2">
                                            <span><a class="text-white" href="{{ $latestNews[$i]->newsurl }}">{{ $latestNews[$i]->newstitle }}</a></span>
                                            <p>{{ $latestNews[$i]->news_title }}</p>
                                            
                                        </div>
                                    </div>
                                @endfor
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <x-web-footer></x-web-footer>

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