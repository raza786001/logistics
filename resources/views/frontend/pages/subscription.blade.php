@extends('frontend.layouts.app')
@section('content')
<div class="categories-area section-padding30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-80">
                        <span>Our Services</span>
                        <h2>What We Can Do For You</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat text-center mb-50">
                         <img src="{{  asset('assets/frontend/img/gallery/1.jpg')}}" style="width: 20rem;height: 15rem;" alt="">
                        <div class="cat-icon">
                           
                        </div>
                        <div class="cat-cap" style="margin-top: 2rem;">
                            <h5><a href="services.html">5% Off</a></h5>
                            <p>The sea freight service has grown conside rably in recent years. We spend timetting to know your processes to.</p>
                        </div>
                        <a href="about.html" class="btn">Subscribe Now</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat text-center mb-50">
                        <img src="{{  asset('assets/frontend/img/gallery/2.jpg')}}" style="width: 20rem;height: 15rem;" alt="">
                        <div class="cat-icon">
                            <!-- <span class="flaticon-ship"></span> -->
                        </div>
                        <div class="cat-cap" style="margin-top: 2rem;">
                            <h5><a href="services.html">10% Off</a></h5>
                            <p>The sea freight service has grown conside rably in recent years. We spend timetting to know your processes to.</p>
                        </div>
                        <a href="about.html" class="btn">Subscribe Now</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat text-center mb-50">
                        <img src="{{  asset('assets/frontend/img/gallery/3.jpg')}}" style="width: 20rem;height: 15rem;" alt="">
                        <div class="cat-icon">
                            <!-- <span class="flaticon-plane"></span> -->
                        </div>
                        <div class="cat-cap" style="margin-top: 2rem;">
                            <h5><a href="services.html">20% Off</a></h5>
                            <p>The sea freight service has grown conside rably in recent years. We spend timetting to know your processes to.</p>
                        </div>
                        <a href="about.html" class="btn">Subscribe Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>