<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/x-icon" href="{{ asset('image/sgrg.png') }}">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/sgrg.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Red+Rose:wght@600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    @php
        $projects = app(\App\Http\Controllers\ProjectController::class)->showProjectData();
        $publication = app(\App\Http\Controllers\PublicationController::class)->showPublicationhData();
        $research = app(\App\Http\Controllers\ResearchController::class)->showResearchData();
        $course = app(\App\Http\Controllers\CourseController::class)->showCourseData();
    @endphp
    
    <div class="container-fluid footer position-relative bg-dark text-white-50 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 pe-lg-5">
                    <a href="/" class="navbar-brand">
                        <h1 class="h1 text-primary mb-0">MicroGrid<span class="text-white">Lab</span></h1>
                    </a>
                    <div style="display: flex; flex-wrap: wrap; justify-content: space-between;">
                        <a target="blank" href="http://uom.lk/elect"><img src="{{ asset('image/sgrg-logo.png') }}" alt="SGRG Logo" style="height: 170px; width: 150px;"></a>
                        <a target="blank" href="https://uom.lk/"><img src="{{ asset('image/uom-logo.png') }}" alt="UOM Logo" style="height: 150px; width: 120px;" class="mx-1"></a>
                        <a target="blank" href="http://uom.lk/efac"><img src="{{ asset('image/ee-logo.png') }}" alt="EE Logo" style="height: 100px; width: 100px; margin-top:30px;"></a>
                    </div>
                    <p class="fs-5 mb-4">MicroGridLab Research Project, MicroGrid Lab</p>
                    <a target="blank" class="btn btn-link d-flex" href="https://www.google.com/maps?sca_esv=5fae2633b037e436&sca_upv=1&output=search&q=university+of+moratuwa&source=lnms&entry=mc&ved=1t:200715&ictx=111"><p><i class="fa fa-map-marker-alt me-2"></i>EE, University of Moratuwa</p></a>
                    <a target="blank" class="btn btn-link d-flex" target="blank" href="tel:0112650301"><p><i class="fa fa-phone-alt me-2"></i>0112650301</p></a>
                    <a target="blank" class="btn btn-link d-flex" href="mailto:smartgrid.lab.uom@gmail.com"><p><i class="fa fa-envelope me-2"></i>Email Us</p></a>
                    <div class="d-flex mt-4">
                        <a target="blank" class="btn btn-lg-square btn-primary me-2" href="https://twitter.com/SGRGUOM"><i class="fab fa-twitter"></i></a>
                        <a target="blank" class="btn btn-lg-square btn-primary me-2" href="https://www.facebook.com/SmartGridResearchGroupUOM"><i class="fab fa-facebook-f"></i></a>
                        <a target="blank" class="btn btn-lg-square btn-primary me-2" href="https://www.linkedin.com/company/smart-grid-research-group-uom/"><i class="fab fa-linkedin-in"></i></a>
                        <a target="blank" class="btn btn-lg-square btn-primary me-2" href="https://www.youtube.com/channel/UCMeDfWAnBOoCadu1ojOvY-w"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 ps-lg-5">
                    <div class="row g-5">
                        <div class="col-sm-6">
                            <h4 class="text-light mb-4">Quick Links</h4>
                            <a class="btn btn-link" href="/">Home</a>
                            <a class="btn btn-link" href="{{ route('peoples') }}">People</a>
                            <a class="btn btn-link" href="{{ route('contact') }}">Contact Us</a>
                            <a class="btn btn-link" href="{{ route('about') }}">About Us</a>
                            @if(count($publication)>0)
                                <a class="btn btn-link" href="{{ route('publications') }}">Publications</a>
                            @endif
                            @if(count($research)>0)
                                <a class="btn btn-link" href="{{ route('researchers') }}">Researches</a>
                            @endif
                            @if(count($projects)>0)
                                <a href="{{ route('projects') }}" class="btn btn-link">Project</a>
                            @endif
                            @if(count($course)>0)
                                <a href="{{ route('courses') }}" class="btn btn-link">Programs</a>
                            @endif
                            <a class="btn btn-link" href="{{ route('news') }}">News</a>
                        </div>
                        <div class="col-sm-6">
                            <h4 class="text-light mb-4">Popular Links</h4>
                            <a target="blank" class="btn btn-link" href="https://uom.lk/">University of Moratuwa</a>
                            <a target="blank" class="btn btn-link" href="http://uom.lk/elect">Department of Electrical Engineering</a>
                            <a target="blank" class="btn btn-link" href="http://uom.lk/efac">Faculty of Engneering</a>
                            <a target="blank" class="btn btn-link" href="https://www.adb.org/">Asian Development Bank</a>
                            <a target="blank" class="btn btn-link" href="http://leco.lk/">Lanka Electricity Company Ltd.</a>
                        </div>
                        <div class="col-sm-12">
                            <h4 class="text-light mb-4">Research with Us</h4>
                            <h6 class="text-light mb-4">Learn with us, contact for more information</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright bg-dark text-white-50 py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0">&copy; <a target="blank" href="/">MicroGridLab</a>. All Rights Reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    <p class="mb-0">Designed by <a target="blank" href="http://uom.lk/elect">EE - UOM</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="/" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


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