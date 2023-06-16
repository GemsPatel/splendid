<!DOCTYPE HTML>
<html lang="en">
    <head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        <?php
        $headerInfo = getHeaderInformation();
        ?>
        <title>{{ $custom_page_title ?? $headerInfo->custom_page_title }}</title>
    	<base href="{{ url('/') }}" />
    	<link rel="shortcut icon" href="{{ url('public/img/favicon.ico') }}">
    	<meta name="description" content="{{ $meta_description ?? $headerInfo->meta_description }}" />
    	<meta name="keywords" content="{{ $meta_keyword ?? $headerInfo->meta_keyword }}" />
    	<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />
    	<meta name="author" content="{{ $author ?? $headerInfo->author }}" />
    	<meta name="copyright" content="Copyright (c) {{ date('Y') }}" />
    	<meta name="generator" content="{{ getField( 'configurations', 'config_key', 'config_value', 'SEO_GENERATOR' ) }}" />
    	<meta http-equiv="vary" content="User-Agent">
		
		<meta name="monetag" content="13cd1d52a6cd233c356627d8da1f1443">
		
        <link rel="canonical" href="{{ url('/') }}">

        <!--=============== CSS ===============-->
        <link type="text/css" rel="stylesheet" href="{{url('public/css/plugins.css')}}">
        <link type="text/css" rel="stylesheet" href="{{url('public/css/style.css?v=0.1')}}">
        <link type="text/css" rel="stylesheet" href="{{url('public/css/color.css')}}">
		
        <!--=============== favicons ===============-->
        <link rel="shortcut icon" href="{{url('public/public/img/favicon.ico?v=0.1')}}">
		
    </head>
    <body>
        <!-- main start  -->
        <div id="main">
            <!-- progress-bar  -->
            <div class="progress-bar-wrap">
                <div class="progress-bar color-bg"></div>
            </div>
            <!-- progress-bar end -->
            @include('front.elements.header-menu')
