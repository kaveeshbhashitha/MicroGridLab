<!DOCTYPE html>
<html lang="en">

<head>
    <!-- resources/views/home.blade.php -->
    <x-meta-tags-component
        title="Programs - Smart Grid Research Group"
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
                        <a href="{{ route('peoples') }}" class="nav-item nav-link">People</a>
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
                                    <a href="{{ route('courses') }}" class="dropdown-item active">Programs</a>
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
            <h1 class="display-2 text-white mb-3 animated slideInDown">Our Programs</h1>
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

    @php
        $coursedata = app(\App\Http\Controllers\CourseController::class)->showAllCourseData();
    @endphp

    @if($coursedata && count($coursedata) > 1)
        @for($i = 0; $i < count($coursedata); $i+=2)
            <div class="container-fluid container-team py-5">
                <div class="container pb-2">
                    <div class="row g-5 align-items-center mb-5">
                        <div class="col-md-6 wow fadeIn" data-wow-delay="0.3s">
                            <img class="img-fluid w-100" src="{{ $coursedata[$i]->image }}" alt="">
                            <p style="text-align:justify;" class="my-2 text-dark">{{ $coursedata[$i]->description }}</p>
                        </div>
                        <div class="col-md-6 wow fadeIn" data-wow-delay="0.5s">
                            <h3 class="mb-1">{{ $coursedata[$i]->coursetitle }} in {{ $coursedata[$i]->coursename }}</h3>
                            <h6 class="mb-1">Offered by: {{ $coursedata[$i]->department }}, {{ $coursedata[$i]->faculty }}, {{ $coursedata[$i]->university }}</h6>
                            
                            <div class="d-flex justify-content-between px-4">
                                <div style="display:flex; flex-direction:column;">
                                    <ul style="list-style-type: square; padding-left: 0; font-family: Arial, sans-serif; font-size: 14px;">
                                        <li class="text-dark">Coordinator: {{ $coursedata[$i]->coordinator }}</li>
                                        <li class="text-dark">Email: {{ $coursedata[$i]->email }}</li>
                                        <li class="text-dark">Mobile: {{ $coursedata[$i]->telephone }}</li>
                                        <li class="text-dark">Duration: {{ $coursedata[$i]->duration }} Year(s)</li>
                                    </ul>
                                </div>
                                <div style="display:flex; flex-direction:column; margin-left: 20px;">
                                    <ul style="list-style-type: square; padding-left: 0; font-family: Arial, sans-serif; font-size: 14px;">
                                        <li class="text-dark">Course Fee: {{ $coursedata[$i]->coursefee }}</li>
                                        <li class="text-dark">Delivered: {{ $coursedata[$i]->deliverymethod }}</li>
                                        <li class="text-dark">Next Intake: {{ $coursedata[$i]->nextintake }}</li>
                                    </ul>
                                </div>
                            </div>
                            
                            <div>
                                <h6 class="text-center">Eligibility Requirments</h6>
                                <ul style="list-style-type: none; padding-left: 0; font-family: Arial, sans-serif; font-size: 14px; text-align: center;">
                                    <li class="text-dark">{{ $coursedata[$i]->eligibility01 }}</li>
                                    <li>or</li>
                                    <li class="text-dark">{{ $coursedata[$i]->eligibility02 }}</li>
                                    <li>or</li>
                                    <li class="text-dark">{{ $coursedata[$i]->eligibility03 }}</li>
                                    @if($coursedata[$i]->eligibility04 != "")
                                    <li>or</li>
                                    <li class="text-dark">{{ $coursedata[$i]->eligibility04 }}</li>
                                    @endif
                                    @if($coursedata[$i]->eligibility05 != "")
                                    <li>or</li>
                                    <li class="text-dark">{{ $coursedata[$i]->eligibility05 }}</li>
                                    @endif
                                    @if($coursedata[$i]->eligibility06 != "")
                                    <li>or</li>
                                    <li class="text-dark">{{ $coursedata[$i]->eligibility06 }}</li>
                                    @endif
                                </ul>
                            </div>

                            <div class="d-flex mb-1 justify-content-end">
                                <a target="blank" href="{{ $coursedata[$i]->moredetailsurl }}"><span class="bg-danger text-white rounded p-2" style="font-size: 12px;">More Information</span></a>
                                @if($coursedata[$i]->applyonlineurl != "")
                                    <a target="blank" href="{{ $coursedata[$i]->applyonlineurl }}"><span class="bg-warning text-white rounded p-2 mx-1" style="font-size: 12px;">Apply Online</span></a>
                                @else
                                    <div class="mx-2"></div>
                                @endif
                                <a target="blank" href="{{ $coursedata[$i]->weburl }}"><span class="bg-secondary text-white rounded p-2" style="font-size: 12px;">Visit Website</span></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Team End -->

            <!-- Team Start -->
            @if(isset($coursedata[$i+1]))
            <div class="container-fluid container-team py-5">
                <div class="container pb-2">
                    <div class="row g-5 align-items-center mb-5">
                    <div class="col-md-6 wow fadeIn" data-wow-delay="0.5s">
                            <h3 class="mb-1">{{ $coursedata[$i+1]->coursetitle }} in {{ $coursedata[$i+1]->coursename }}</h3>
                            <h6 class="mb-1">Offered by: {{ $coursedata[$i+1]->department }}, {{ $coursedata[$i+1]->faculty }}, {{ $coursedata[$i+1]->university }}</h6>
                            
                            <div class="d-flex justify-content-between px-4">
                                <div style="display:flex; flex-direction:column;">
                                    <ul style="list-style-type: square; padding-left: 0; font-family: Arial, sans-serif; font-size: 14px;">
                                        <li class="text-dark">Coordinator: {{ $coursedata[$i+1]->coordinator }}</li>
                                        <li class="text-dark">Email: {{ $coursedata[$i+1]->email }}</li>
                                        <li class="text-dark">Mobile: {{ $coursedata[$i+1]->telephone }}</li>
                                        <li class="text-dark">Duration: {{ $coursedata[$i+1]->duration }} Year(s)</li>
                                    </ul>
                                </div>
                                <div style="display:flex; flex-direction:column; margin-left: 20px;">
                                    <ul style="list-style-type: square; padding-left: 0; font-family: Arial, sans-serif; font-size: 14px;">
                                        <li class="text-dark">Course Fee: {{ $coursedata[$i+1]->coursefee }}</li>
                                        <li class="text-dark">Delivered: {{ $coursedata[$i+1]->deliverymethod }}</li>
                                        <li class="text-dark">Next Intake: {{ $coursedata[$i+1]->nextintake }}</li>
                                    </ul>
                                </div>
                            </div>
                            
                            <div>
                                <h6 class="text-center">Eligibility Requirments</h6>
                                <ul style="list-style-type: none; padding-left: 0; font-family: Arial, sans-serif; font-size: 14px; text-align: center;">
                                    <li class="text-dark">{{ $coursedata[$i+1]->eligibility01 }}</li>
                                    <li>or</li>
                                    <li class="text-dark">{{ $coursedata[$i+1]->eligibility02 }}</li>
                                    <li>or</li>
                                    <li class="text-dark">{{ $coursedata[$i+1]->eligibility03 }}</li>
                                    @if($coursedata[$i+1]->eligibility04 != "")
                                    <li>or</li>
                                    <li class="text-dark">{{ $coursedata[$i+1]->eligibility04 }}</li>
                                    @endif
                                    @if($coursedata[$i+1]->eligibility05 != "")
                                    <li>or</li>
                                    <li class="text-dark">{{ $coursedata[$i+1]->eligibility05 }}</li>
                                    @endif
                                    @if($coursedata[$i+1]->eligibility06 != "")
                                    <li>or</li>
                                    <li class="text-dark">{{ $coursedata[$i+1]->eligibility06 }}</li>
                                    @endif
                                </ul>
                            </div>

                            <div class="d-flex mb-1 justify-content-left">
                                <a target="blank" href="{{ $coursedata[$i+1]->moredetailsurl }}"><span class="bg-danger text-white rounded p-2" style="font-size: 12px;">More Information</span></a>
                                @if($coursedata[$i]->applyonlineurl != "")
                                    <a target="blank" href="{{ $coursedata[$i+1]->applyonlineurl }}"><span class="bg-warning text-white rounded p-2 mx-1" style="font-size: 12px;">Apply Online</span></a>
                                @else
                                    <div class="mx-2"></div>
                                @endif
                                <a target="blank" href="{{ $coursedata[$i+1]->weburl }}"><span class="bg-secondary text-white rounded p-2" style="font-size: 12px;">Visit Website</span></a>
                            </div>

                        </div>

                        <div class="col-md-6 wow fadeIn" data-wow-delay="0.3s">
                            <img class="img-fluid w-100" src="{{ $coursedata[$i+1]->image }}" alt="">
                            <p style="text-align:justify;" class="my-2 text-dark">{{ $coursedata[$i+1]->description }}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            <!-- Add more HTML to display additional attributes as needed -->
        @endfor

    @elseif($coursedata && count($coursedata) > 0 && count($coursedata) < 2)

        @for($i = 0; $i < count($coursedata); $i++)
            <div class="container-fluid container-team py-5">
                <div class="container pb-2">
                    <div class="row g-5 align-items-center mb-5">
                        <div class="col-md-6 wow fadeIn" data-wow-delay="0.3s">
                            <img class="img-fluid w-100" src="{{ $coursedata[$i]->image }}" alt="">
                            <p style="text-align:justify;" class="my-2 text-dark">{{ $coursedata[$i]->description }}</p>
                        </div>
                        <div class="col-md-6 wow fadeIn" data-wow-delay="0.5s">
                            <h3 class="mb-1">{{ $coursedata[$i]->coursetitle }} in {{ $coursedata[$i]->coursename }}</h3>
                            <h6 class="mb-1">Offered by: {{ $coursedata[$i]->department }}, {{ $coursedata[$i]->faculty }}, {{ $coursedata[$i]->university }}</h6>
                            
                            <div class="d-flex justify-content-between px-4">
                                <div style="display:flex; flex-direction:column;">
                                    <ul style="list-style-type: square; padding-left: 0; font-family: Arial, sans-serif; font-size: 14px;">
                                        <li class="text-dark">Coordinator: {{ $coursedata[$i]->coordinator }}</li>
                                        <li class="text-dark">Email: {{ $coursedata[$i]->email }}</li>
                                        <li class="text-dark">Mobile: {{ $coursedata[$i]->telephone }}</li>
                                        <li class="text-dark">Duration: {{ $coursedata[$i]->duration }} Year(s)</li>
                                    </ul>
                                </div>
                                <div style="display:flex; flex-direction:column; margin-left: 20px;">
                                    <ul style="list-style-type: square; padding-left: 0; font-family: Arial, sans-serif; font-size: 14px;">
                                        <li class="text-dark">Course Fee: {{ $coursedata[$i]->coursefee }}</li>
                                        <li class="text-dark">Delivered: {{ $coursedata[$i]->deliverymethod }}</li>
                                        <li class="text-dark">Next Intake: {{ $coursedata[$i]->nextintake }}</li>
                                    </ul>
                                </div>
                            </div>
                            
                            <div>
                                <h6 class="text-center">Eligibility Requirments</h6>
                                <ul style="list-style-type: none; padding-left: 0; font-family: Arial, sans-serif; font-size: 14px; text-align: center;">
                                    <li class="text-dark">{{ $coursedata[$i]->eligibility01 }}</li>
                                    <li>or</li>
                                    <li class="text-dark">{{ $coursedata[$i]->eligibility02 }}</li>
                                    <li>or</li>
                                    <li class="text-dark">{{ $coursedata[$i]->eligibility03 }}</li>
                                    @if($coursedata[$i]->eligibility04 != "")
                                    <li>or</li>
                                    <li class="text-dark">{{ $coursedata[$i]->eligibility04 }}</li>
                                    @endif
                                    @if($coursedata[$i]->eligibility05 != "")
                                    <li>or</li>
                                    <li class="text-dark">{{ $coursedata[$i]->eligibility05 }}</li>
                                    @endif
                                    @if($coursedata[$i]->eligibility06 != "")
                                    <li>or</li>
                                    <li class="text-dark">{{ $coursedata[$i]->eligibility06 }}</li>
                                    @endif
                                </ul>
                            </div>

                            <div class="d-flex mb-1 justify-content-end">
                                <a target="blank" href="{{ $coursedata[$i]->moredetailsurl }}"><span class="bg-danger text-white rounded p-2" style="font-size: 12px;">More Information</span></a>
                                @if($coursedata[$i]->applyonlineurl != "")
                                    <a target="blank" href="{{ $coursedata[$i]->applyonlineurl }}"><span class="bg-warning text-white rounded p-2 mx-1" style="font-size: 12px;">Apply Online</span></a>
                                @else
                                    <div class="mx-2"></div>
                                @endif
                                <a target="blank" href="{{ $coursedata[$i]->weburl }}"><span class="bg-secondary text-white rounded p-2" style="font-size: 12px;">Visit Website</span></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        @endfor
    @else
        <p>No data available.</p>
    @endif
    


    <x-web-footer></x-web-footer>

    <!-- JavaScript Libraries -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Add click event listener to toggle button
            document.querySelectorAll('.toggle-btn').forEach(function(button) {
                button.addEventListener('click', function() {
                    // Toggle visibility of short and full descriptions
                    var shortDescription = this.parentNode.querySelector('.short-description');
                    var fullDescription = this.parentNode.querySelector('.full-description');
                    if (shortDescription.classList.contains('d-none')) {
                        shortDescription.classList.remove('d-none');
                        fullDescription.classList.add('d-none');
                        this.textContent = 'Read More';
                    } else {
                        shortDescription.classList.add('d-none');
                        fullDescription.classList.remove('d-none');
                        this.textContent = 'Read Less';
                    }
                });
            });
        });
    </script>

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