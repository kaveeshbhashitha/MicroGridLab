<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="icon" href="{{ asset('image/admin.png') }}" type="image/x-icon">
    <title>Admin Home</title>

    <style>
        .centered-divs {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh; 
        }
    </style>

</head>
<body class="bg-white">
    <x-admin-layout>
    @php
        $latestCoordinator = app(\App\Http\Controllers\CoordinatorController::class)->getStatusOfCoordinator();
        $totalc = $latestCoordinator['publishedCount'] + $latestCoordinator['unpublishedCount'];
        if($totalc == 0){
            $publishedPercentage = 0;
            $unpublishedPercentage = 0;
        }else{
            $publishedPercentage = ($latestCoordinator['publishedCount'] / $totalc) * 100;
            $unpublishedPercentage = ($latestCoordinator['unpublishedCount'] / $totalc) * 100;
        }
        

        $latestInternational = app(\App\Http\Controllers\InternationalController::class)->getStatusOfInternational();
        $totalint = $latestInternational['publishedCount'] + $latestInternational['unpublishedCount'];
        if($totalint == 0){
            $publishedPercentageint = 0;
            $unpublishedPercentageint = 0;
        }else{
            $publishedPercentageint = round(($latestInternational['publishedCount'] / $totalint) * 100);
            $unpublishedPercentageint = round(($latestInternational['unpublishedCount'] / $totalint) * 100);
        }
        

        $latestPostgraduate = app(\App\Http\Controllers\PostgraduateController::class)->getStatusOfPostgraduate();
        $totalpos = $latestPostgraduate['publishedCount'] + $latestPostgraduate['unpublishedCount'];
        if($totalpos == 0){
            $publishedPercentagepost = 0;
            $unpublishedPercentagepost = 0;
        }else{
            $publishedPercentagepost = round(($latestPostgraduate['publishedCount'] / $totalpos) * 100);
            $unpublishedPercentagepost = round(($latestPostgraduate['unpublishedCount'] / $totalpos) * 100);
        }
        

        $latestAlumni = app(\App\Http\Controllers\AlumniController::class)->getStatusOfAlumnis();
        $totalal = $latestAlumni['publishedCount'] + $latestAlumni['unpublishedCount'];
        if($totalal == 0){
            $publishedPercentagealumni = 0;
            $unpublishedalumnis = 0;
        }else{
            $publishedPercentagealumni = round(($latestAlumni['publishedCount'] / $totalal) * 100);
            $unpublishedalumnis = round(($latestAlumni['unpublishedCount'] / $totalal) * 100);
        }
        

        $latestNews = app(\App\Http\Controllers\NewsController::class)->getStatusOfNews();
        $totalnew = $latestNews['publishedCount'] + $latestNews['unpublishedCount'];
        if($totalnew == 0){
            $publishedPercentagenews = 0;
            $unpublishednews = 0;
        }else{
            $publishedPercentagenews = round(($latestNews['publishedCount'] / $totalnew) * 100);
            $unpublishednews = round(($latestNews['unpublishedCount'] / $totalnew) * 100);
        }
        

        $latestResearch = app(\App\Http\Controllers\ResearchController::class)->getStatusOfResearch();
        $totalresear = $latestResearch['publishedCount'] + $latestResearch['unpublishedCount'];
        if($totalresear == 0){
            $publishedPercentageres = 0;
            $unpublishedres = 0;
        }else{
            $publishedPercentageres = round(($latestResearch['publishedCount'] / $totalresear) * 100);
            $unpublishedres = round(($latestResearch['unpublishedCount'] / $totalresear) * 100);
        }
        

        $latestPublication = app(\App\Http\Controllers\PublicationController::class)->getStatusOfPublication();
        $totalpub = $latestPublication['publishedCount'] + $latestPublication['unpublishedCount'];
        if($totalpub == 0){
            $publishedPercentagepub = 0;
            $unpublishedpub = 0;
        }else{
            $publishedPercentagepub = round(($latestPublication['publishedCount'] / $totalpub) * 100);
            $unpublishedpub = round(($latestPublication['unpublishedCount'] / $totalpub) * 100);
        }
        

        $t = $latestCoordinator['publishedCount'] + $latestInternational['publishedCount'] + $latestPostgraduate['publishedCount'] + $latestAlumni['publishedCount'] + $latestCoordinator['unpublishedCount'] + $latestInternational['unpublishedCount'] + $latestPostgraduate['unpublishedCount'] + $latestAlumni['unpublishedCount'];
        if($t == 0){
            $x = 0;
            $y = 0;
        }else{
            $x = round((($latestCoordinator['publishedCount'] + $latestInternational['publishedCount'] + $latestPostgraduate['publishedCount'] + $latestAlumni['publishedCount']) / $t) * 100);
            $y = round((($latestCoordinator['unpublishedCount'] + $latestInternational['unpublishedCount'] + $latestPostgraduate['unpublishedCount'] + $latestAlumni['unpublishedCount'])/ $t) * 100);
        }
        

    @endphp

    <div class="container-fluid container-service py-1">
        <div class="container pt-2">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="display-6 mb-3 mt-1">Website Diagnostics and Current status of Data</h1>
                <p class="mb-1">You can check the admin activities for publication on data. See publishing status of people, research, publication as well as news status on web.</p>
            </div>
        </div>
    </div>

    <div class="centered-divs">
        <div class="container">
            <div class="row mb-1">
                <div class="col-3">
                    <div class="rounded shadow bg-primary text-white p-4">
                        <div class="h4 underline my-4">Overall People </div>
                        <div class="my-1">
                            <x-progress-bar :publishedCount="$x" :unpublishedCount="$y" />
                            <div class="my-4">
                                <h5 class="mb-3">Totoal Published People: {{ $latestCoordinator['publishedCount'] + $latestInternational['publishedCount'] + $latestPostgraduate['publishedCount'] + $latestAlumni['publishedCount']}}</h5>
                                <h5 class="my-1">Totoal Unpublished people: {{ $latestCoordinator['unpublishedCount'] + $latestInternational['unpublishedCount'] + $latestPostgraduate['unpublishedCount'] + $latestAlumni['unpublishedCount']}}</h5>
                            </div>
                            <div>
                                <div class="d-flex"><div class="bg-white" style="height:10px; width: 10px; border-radius:50%"></div><div class="mx-1"><strong>Published</strong></div></div>
                                <div class="d-flex"><div class="bg-dark" style="height:10px; width: 10px; border-radius:50%"></div><div class="mx-1 text-dark"><strong>Unpublished</strong></div></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="rounded shadow bg-warning text-white p-4">
                        <div class="h4 underline my-4">International</div>
                        <div class="my-1">
                            <x-progress-bar :publishedCount="$publishedPercentageint" :unpublishedCount="$unpublishedPercentageint" />
                            <div class="my-4">
                                <h5 class="mb-3">Published International: {{ $latestInternational['publishedCount'] }}</h5>
                                <h5 class="my-1">Unpublished International: {{ $latestInternational['unpublishedCount'] }}</h5>
                            </div>
                            <div>
                                <div class="d-flex"><div class="bg-white" style="height:10px; width: 10px; border-radius:50%"></div><div class="mx-1"><strong>Published</strong></div></div>
                                <div class="d-flex"><div class="bg-dark" style="height:10px; width: 10px; border-radius:50%"></div><div class="mx-1 text-dark"><strong>Unpublished</strong></div></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="rounded shadow bg-secondary text-white p-4">
                        <div class="h4 underline my-4">Postgraduates</div>
                        <div class="my-1">
                            <x-progress-bar :publishedCount="$publishedPercentagepost" :unpublishedCount="$unpublishedPercentagepost" />
                            <div class="my-4">
                                <h5 class="mb-3">Published P.Graduates: {{ $latestPostgraduate['publishedCount'] }}</h5>
                                <h5 class="my-1">Unpublished P.Graduates: {{ $latestPostgraduate['unpublishedCount'] }}</h5>
                            </div>
                            <div>
                                <div class="d-flex"><div class="bg-white" style="height:10px; width: 10px; border-radius:50%"></div><div class="mx-1"><strong>Published</strong></div></div>
                                <div class="d-flex"><div class="bg-dark" style="height:10px; width: 10px; border-radius:50%"></div><div class="mx-1 text-dark"><strong>Unpublished</strong></div></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="rounded shadow bg-danger text-white p-4">
                    <div class="h4 underline my-4">Coordinator</div>
                        <div class="my-1">
                            <x-progress-bar :publishedCount="$publishedPercentage" :unpublishedCount="$unpublishedPercentage" />
                            <div class="my-4">
                                <h5 class="mb-3">Published Coordinator: {{ $latestCoordinator['publishedCount'] }}</h5>
                                <h5 class="my-1">Unpublished Coordinator: {{ $latestCoordinator['unpublishedCount'] }}</h5>
                            </div>
                            <div>
                                <div class="d-flex"><div class="bg-white" style="height:10px; width: 10px; border-radius:50%"></div><div class="mx-1"><strong>Published</strong></div></div>
                                <div class="d-flex"><div class="bg-dark" style="height:10px; width: 10px; border-radius:50%"></div><div class="mx-1 text-dark"><strong>Unpublished</strong></div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-3">
                    <div class="rounded shadow shadow bg-primary text-white p-4">
                    <div class="h4 underline my-4">Alumnis</div>
                        <div class="my-1">
                            <x-progress-bar :publishedCount="$publishedPercentagealumni" :unpublishedCount="$unpublishedalumnis" />
                            <div class="my-4">
                                <h5 class="mb-3">Published Alumnis: {{ $latestAlumni['publishedCount'] }}</h5>
                                <h5 class="my-1">Unpublished Alumnis: {{ $latestAlumni['unpublishedCount'] }}</h5>
                            </div>
                            <div>
                                <div class="d-flex"><div class="bg-white" style="height:10px; width: 10px; border-radius:50%"></div><div class="mx-1"><strong>Published</strong></div></div>
                                <div class="d-flex"><div class="bg-dark" style="height:10px; width: 10px; border-radius:50%"></div><div class="mx-1 text-dark"><strong>Unpublished</strong></div></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="rounded shadow bg-warning text-white p-4">
                    <div class="h4 underline my-4">News</div>
                        <div class="my-1">
                            <x-progress-bar :publishedCount="$publishedPercentagenews" :unpublishedCount="$unpublishednews" />
                            <div class="my-4">
                                <h5 class="mb-3">Published News: {{ $latestNews['publishedCount'] }}</h5>
                                <h5 class="my-1">Totoal Unpublished people: {{ $latestNews['unpublishedCount'] }}</h5>
                            </div>
                            <div>
                                <div class="d-flex"><div class="bg-white" style="height:10px; width: 10px; border-radius:50%"></div><div class="mx-1"><strong>Published</strong></div></div>
                                <div class="d-flex"><div class="bg-dark" style="height:10px; width: 10px; border-radius:50%"></div><div class="mx-1 text-dark"><strong>Unpublished</strong></div></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="rounded shadow bg-secondary text-white p-4">
                    <div class="h4 underline my-4">Research</div>
                        <div class="my-1">
                            <x-progress-bar :publishedCount="$publishedPercentageres" :unpublishedCount="$unpublishedres" />
                            <div class="my-4">
                                <h5 class="mb-3">Published Research: {{ $latestResearch['publishedCount'] }}</h5>
                                <h5 class="my-1">Unpublished Research: {{ $latestResearch['unpublishedCount'] }}</h5>
                            </div>
                            <div>
                                <div class="d-flex"><div class="bg-white" style="height:10px; width: 10px; border-radius:50%"></div><div class="mx-1"><strong>Published</strong></div></div>
                                <div class="d-flex"><div class="bg-dark" style="height:10px; width: 10px; border-radius:50%"></div><div class="mx-1 text-dark"><strong>Unpublished</strong></div></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="rounded shadow bg-danger text-white p-4">
                    <div class="h4 underline my-4">Publication</div>
                        <div class="my-1">
                            <x-progress-bar :publishedCount="$publishedPercentagepub" :unpublishedCount="$unpublishedpub" />
                            <div class="my-4">
                                <h5 class="mb-3">Published Publication: {{ $latestPublication['publishedCount'] }}</h5>
                                <h5 class="my-1">Unpublished Publication: {{ $latestPublication['unpublishedCount'] }}</h5>
                            </div>
                            <div>
                                <div class="d-flex"><div class="bg-white" style="height:10px; width: 10px; border-radius:50%"></div><div class="mx-1"><strong>Published</strong></div></div>
                                <div class="d-flex"><div class="bg-dark" style="height:10px; width: 10px; border-radius:50%"></div><div class="mx-1 text-dark"><strong>Unpublished</strong></div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
    </x-admin-layout>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
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