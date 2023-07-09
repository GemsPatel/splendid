<!DOCTYPE HTML>
<html lang="en">
    <head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <?php
        $headerInfo = getHeaderInformation();
        $isRunAdvertisement = getConfigurationfield( "IS_RUN_ADVERTISEMENT" );
        $getThemeName = getConfigurationfield("FRONT_THEME");
        $isRunAdvertisementParam = ( isset( $_GET['advt'] ) ) ? $_GET['advt'] : 1;
        ?>
        <title>{{ $custom_page_title ?? $headerInfo->custom_page_title }}</title>
    	<base href="{{ url('/') }}" />
    	<meta name="description" content="{{ $meta_description ?? $headerInfo->meta_description }}" />
    	<meta name="keywords" content="{{ $meta_keyword ?? $headerInfo->meta_keyword }}" />
    	<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />
    	<meta name="author" content="{{ $author ?? $headerInfo->author }}" />
    	<meta name="copyright" content="Copyright (c) {{ date('Y') }}" />
    	<meta name="generator" content="{{ getField( 'configurations', 'config_key', 'config_value', 'SEO_GENERATOR' ) }}" />
    	
		<meta name="monetag" content="13cd1d52a6cd233c356627d8da1f1443">

        <link rel="canonical" href="{{ url('/') }}">

        <!--=============== CSS ===============-->
        <link type="text/css" rel="stylesheet" href="{{url('public/css/plugins.css')}}">
        <link type="text/css" rel="stylesheet" href="{{url('public/css/style.css?v=0.3.1')}}">
        <link type="text/css" rel="stylesheet" href="{{url('public/css/color.css')}}">

        <!--=============== favicons ===============-->
        <link rel="shortcut icon" href="{{url('public/img/favicon.ico?v=0.1.1')}}">

		<meta property="og:locale" content="en_US">
		<meta property="og:type" content="website">
		<meta property="og:title" content="{{ $custom_page_title ?? $headerInfo->custom_page_title }}">
		<meta property="og:description" content="{{ $meta_description ?? $headerInfo->meta_description }}">
		<meta property="og:url" content="{{ url('/') }}">
		<meta property="og:site_name" content="TimesOfReading">
		<meta property="og:image" content="{{ $meta_image ?? url('public/img/'.$getThemeName.'.png') }}">

		<meta property="article:publisher" content="https://www.facebook.com/timesofreading">
		<meta property="article:modified_time" content="{{date( 'Y-m-d h:i:s' )}}">

		<meta name="twitter:card" content="summary_large_image">
		<meta name="twitter:site" content="@timesofreading">
		<meta name="twitter:label1" content="Est. reading time">
		<meta name="twitter:data1" content="5 minutes">

        @if( $isRunAdvertisement && $isRunAdvertisementParam )
            <!-- Google tag (gtag.js) -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=G-0Y7LZMV3DD"></script>
            <script>
                window.dataLayer = window.dataLayer || [];
                function gtag(){dataLayer.push(arguments);}
                gtag('js', new Date());
                gtag('config', 'G-0Y7LZMV3DD');
            </script>
        @endif
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
