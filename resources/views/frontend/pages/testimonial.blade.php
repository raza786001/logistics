@extends('frontend.layouts.app')
@section('content')

<main>
        <!--? slider Area Start-->
        <div class="slider-area ">
            <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="{{  asset('assets/frontend/img/hero/about.jpg')}}">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap">
                                <h2>Testimonials</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                        <li class="breadcrumb-item"><a href="#">Testimonials</a></li> 
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->
       
    </main>
<!-- id="testimonial-slider" class="owl-carousel" -->
    <div class="container">
        <div class="row">
                    <div class="col-md-4 mt-5 mb-5 testimonial">
                        <div class="pic">
                            <img src="{{  asset('assets/frontend/img/blog/author.png')}}">
                        </div>
                        <p class="description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusantium ad asperiores at atque culpa dolores eaque fugiat hic illo ipsam ipsum minima modi necessitatibus nemo officia, omnis perferendis placeat quaerat quas quis ratione rerum sint sit vitae. Animi architecto consequatur delectus eos id.
                        </p>
                        <h3 class="title">Williamson</h3>
                        <span class="post">Web Developer</span>
                    </div>
     
                    <div class="col-md-4 mt-5 mb-5 testimonial">
                        <div class="pic">
                            <img src="{{  asset('assets/frontend/img/blog/author.png')}}">
                        </div>
                        <p class="description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusantium ad asperiores at atque culpa dolores eaque fugiat hic illo ipsam ipsum minima modi necessitatibus nemo officia, omnis perferendis placeat quaerat quas quis ratione rerum sint sit vitae. Animi architecto consequatur delectus eos id.
                        </p>
                        <h3 class="title">Kristina</h3>
                        <span class="post">Web Designer</span>
                    </div>

                    <div class="col-md-4 mt-5 mb-5  testimonial">
                        <div class="pic">
                            <img src="{{  asset('assets/frontend/img/blog/author.png')}}">
                        </div>
                        <p class="description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusantium ad asperiores at atque culpa dolores eaque fugiat hic illo ipsam ipsum minima modi necessitatibus nemo officia, omnis perferendis placeat quaerat quas quis ratione rerum sint sit vitae. Animi architecto consequatur delectus eos id.
                        </p>
                        <h3 class="title">Kristina</h3>
                        <span class="post">Web Designer</span>
                    </div>

                    <div class="col-md-4 mt-5 mb-5 testimonial">
                        <div class="pic">
                            <img src="{{  asset('assets/frontend/img/blog/author.png')}}">
                        </div>
                        <p class="description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusantium ad asperiores at atque culpa dolores eaque fugiat hic illo ipsam ipsum minima modi necessitatibus nemo officia, omnis perferendis placeat quaerat quas quis ratione rerum sint sit vitae. Animi architecto consequatur delectus eos id.
                        </p>
                        <h3 class="title">Kristina</h3>
                        <span class="post">Web Designer</span>
                    </div>

                    <div class="col-md-4 mt-5 mb-5 testimonial">
                        <div class="pic">
                            <img src="{{  asset('assets/frontend/img/blog/author.png')}}">
                        </div>
                        <p class="description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusantium ad asperiores at atque culpa dolores eaque fugiat hic illo ipsam ipsum minima modi necessitatibus nemo officia, omnis perferendis placeat quaerat quas quis ratione rerum sint sit vitae. Animi architecto consequatur delectus eos id.
                        </p>
                        <h3 class="title">Kristina</h3>
                        <span class="post">Web Designer</span>
                    </div>

                    <div class="col-md-4 mt-5 mb-5 testimonial">
                        <div class="pic">
                            <img src="{{  asset('assets/frontend/img/blog/author.png')}}">
                        </div>
                        <p class="description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusantium ad asperiores at atque culpa dolores eaque fugiat hic illo ipsam ipsum minima modi necessitatibus nemo officia, omnis perferendis placeat quaerat quas quis ratione rerum sint sit vitae. Animi architecto consequatur delectus eos id.
                        </p>
                        <h3 class="title">Kristina</h3>
                        <span class="post">Web Designer</span>
                    </div>
        </div>
    </div>

@endsection