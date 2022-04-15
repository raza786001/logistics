<!doctype html>
<html class="no-js" lang="zxx">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
@include('frontend.partials.head')
<body>
<!--? Preloader Start -->
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <img src="{{  asset('assets/frontend/img/logo/loder.jpg')}}" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Preloader Start -->
@include('frontend.partials.header')
@yield('content')
@include('frontend.partials.footer')