<!-- resources/views/components/MetaTagsComponent.blade.php -->

@props([
    'title' => "Micro Grid Lab / Smart Grid Lab",
    'description' => "Micro Grid Lab / Smart Grid Lab for electrical engineering, smart grid, renewable energy, sustainable energy, power products, AI, and power automation.",
    'keywords' => "Micro Grid Lab, Smart Grid Lab, electrical engineering, smart grid, renewable energy, sustainable energy, power products, AI, power automation",
    'author' => "Your Name",
    'twitterCard' => "summary",
    'twitterSite' => "@YourTwitterHandle",
    'image' => "http://www.yourwebsite.com/image.jpg",
    'ogSiteName' => "Your Website Name",
    'fbAppId' => "Your Facebook App ID",
])

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ $description }}">
    <meta name="keywords" content="{{ $keywords }}">
    <meta name="author" content="{{ $author }}">
    <title>{{ $title }}</title>
    <!-- Twitter Card data -->
    <meta name="twitter:card" content="{{ $twitterCard }}">
    <meta name="twitter:site" content="{{ $twitterSite }}">
    <meta name="twitter:title" content="{{ $title }}">
    <meta name="twitter:description" content="{{ $description }}">
    <!-- Open Graph data -->
    <meta property="og:title" content="{{ $title }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://www.yourwebsite.com/" />
    <meta property="og:image" content="{{ $image }}" />
    <meta property="og:description" content="{{ $description }}" />
    <meta property="og:site_name" content="{{ $ogSiteName }}" />
    <meta property="fb:app_id" content="{{ $fbAppId }}" />
    <!-- Favicon -->
    <link rel="icon" href="img/sgrg.png" type="image/x-icon">

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
</head>

