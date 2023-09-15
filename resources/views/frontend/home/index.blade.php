@extends('layouts.main')
@section('title', 'Kshipra | Home')

@section('content')
    <div id="grievances" style="display:none;">
        <div class="alert alert-success mb-0" role="alert">
            Your query has been submitted.
        </div>
    </div>
    @include('frontend.slider.index')

    <section class="about-layout2 pb-50" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="heading-layout2 mb-20">
                        <h2 class="heading__subtitle">About us</h2>
                        <h3 class="heading__title">The level of excellence and a successful implementation
                        </h3>
                    </div>
                    <!-- /heading -->
                </div>
                <!-- /.col-lg-6 -->
                <div class="col-sm-12 col-md-12 col-lg-5 d-flex justify-content-end counters-wrapper">
                    <!-- counter item #1 -->
                    <div class="counter-item">
                        <h4 class="counter km">3</h4>
                        <p class="counter-item__desc">Distance Covered</p>
                    </div>
                    <!-- counter item #2 -->
                    <div class="counter-item">
                        <h4 class="counter cr">2</h4>
                        <p class="counter-item__desc">Project Outlay</p>
                    </div>
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <p class="heading__desc mb-30">
                    The Rehabilitation and Upgradation of Roads under the Promoting Public-Private
                    Partnership in Madhya Pradesh Sector Project (PPPPMPRSP) is a crucial initiative aimed at
                    enhancing the quality and accessibility of road infrastructure across the state. This project represents
                    a collaborative effort between government authorities and private sector partners, illustrating a commitment
                    to improving transportation networks and fostering economic growth in the region. Through strategic investments
                    and innovative approaches, PPPPMPRSP is set to transform the state's roadways, benefitting both residents and
                    businesses while boosting overall development.</p>
                    <ul class="list-items list-unstyled mb-20 mt-40">
                        <li>Structured Classifications</li>
                        <li>Clear Communication Solutions</li>
                        <li>Supportive Implementations</li>
                        <li>Flawless Innovations</li>
                    </ul>
                </div>
                <!-- /.col-lg-6 -->
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="about__img">
                        <img src="{{ asset('public/assets/img/abt.png') }}" alt="about" class="img-fluid" />
                        <div class="cta-banner">
                            <div class="cta-banner__icon">
                                <img src="{{ asset('public/assets/img/cap.png') }}" alt="" />
                            </div>
                            <h5 class="cta-banner__title">Our Initiatives/ Services</h5>
                            <a href="#" class="btn btn__primary btn__link"><i class="icon-arrow-right1"></i></a>
                        </div>
                        <!-- /.cta-banner -->
                    </div>
                    <!-- /.about-img -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <section class="services-layout1 pt-30 pb-30">
        <!--<div class="bg-img"><img src="assets/images/backgrounds/map.png" alt="background"></div>-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                    <div class="heading text-center mb-40">
                        <span class="heading__subtitle">Project Process</span>
                        <h2 class="heading__title p-title">Providing Practical and Innovative Solutions.</h2>
                    </div>
                    <!-- /.heading -->
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="service-item">
                        <div class="service-item__img">
                            <img src="{{ asset('public/assets/img/ini_stage.jpeg') }}" alt="service" class="w-100" />
                        </div>
                        <!-- /.service-item__img -->
                        <div class="service-item__content">
                            <h4 class="service-item__title">Initial Stage</h4>
                        </div>
                        <!-- /.service-content -->
                    </div>
                    <!-- /.service-item -->
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="service-item">
                        <div class="service-item__img">
                            <img src="{{ asset('public/assets/img/ongoing.jpeg') }}" alt="service" class="w-100" />
                        </div>
                        <!-- /.service-item__img -->
                        <div class="service-item__content">
                            <h4 class="service-item__title">Ongoing</h4>
                        </div>
                        <!-- /.service-content -->
                    </div>
                    <!-- /.service-item -->
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="service-item">
                        <div class="service-item__img">
                            <img src="{{ asset('public/assets/img/forthcoming.jpeg') }}" alt="service" class="w-100" />
                        </div>
                        <!-- /.service-item__img -->
                        <div class="service-item__content">
                            <h4 class="service-item__title">Forthcoming Structures</h4>
                        </div>
                        <!-- /.service-content -->
                    </div>
                    <!-- /.service-item -->
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <section class="project-section pt-30 pb-30" id="gallery">
        <div class="container">
            <div class="row align-items-center mb-20">
                <div class="col-sm-12 col-md-12 col-lg-5">
                    <h2 class="heading__subtitle p-subtitle">Project Gallery</h2>
                </div>
                <!-- /.col-lg-6 -->
                <div class="col-sm-12 col-md-12 col-lg-7">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#weekly">Weekly</a></li>
                        <li><a data-toggle="tab" href="#monthly">Monthly</a></li>
                        <li><a data-toggle="tab" href="#yearly">Yearly</a></li>
                    </ul>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="tab-content">
                        <div id="weekly" class="tab-pane active">
                            <!--- Gallery---------->
                            <div class="uk-container" uk-slider>
                                <div class="uk-position-relative uk-visible-toggle uk-light">
                                    <div class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m"
                                        uk-lightbox>
                                        <div>
                                            <a href="{{ asset('public/assets/img/pg1.png') }}" data-caption="1">
                                                <img src="{{ asset('public/assets/img/pg1.png') }}" alt="" />
                                            </a>
                                        </div>
                                        <div>
                                            <a href="{{ asset('public/assets/img/pg2.png') }}" data-caption="2">
                                                <img src="{{ asset('public/assets/img/pg2.png') }}" alt="" />
                                            </a>
                                        </div>
                                        <div>
                                            <a href="{{ asset('public/assets/img/pg3.png') }}" data-caption="3">
                                                <img src="{{ asset('public/assets/img/pg3.png') }}" alt="" />
                                            </a>
                                        </div>
                                        <div>
                                            <a href="{{ asset('public/assets/img/pg4.png') }}" data-caption="4">
                                                <img src="{{ asset('public/assets/img/pg4.png') }}" alt="" />
                                            </a>
                                        </div>
                                    </div>

                                    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#"
                                        uk-slidenav-previous uk-slider-item="previous"></a>
                                    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#"
                                        uk-slidenav-next uk-slider-item="next"></a>
                                </div>
                            </div>
                        </div>

                        <div id="monthly" class="tab-pane fade">
                            <!--- Gallery---------->
                            <div class="uk-container" uk-slider>
                                <div class="uk-position-relative uk-visible-toggle uk-light">
                                    <div class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m"
                                        uk-lightbox>
                                        <div>
                                            <a href="{{ asset('public/assets/img/pg1.png') }}" data-caption="1">
                                                <img src="{{ asset('public/assets/img/pg1.png') }}" alt="" />
                                            </a>
                                        </div>
                                        <div>
                                            <a href="{{ asset('public/assets/img/pg2.png') }}" data-caption="2">
                                                <img src="{{ asset('public/assets/img/pg2.png') }}" alt="" />
                                            </a>
                                        </div>
                                        <div>
                                            <a href="{{ asset('public/assets/img/pg3.png') }}" data-caption="3">
                                                <img src="{{ asset('public/assets/img/pg3.png') }}" alt="" />
                                            </a>
                                        </div>
                                        <div>
                                            <a href="{{ asset('public/assets/img/pg4.png') }}" data-caption="4">
                                                <img src="{{ asset('public/assets/img/pg4.png') }}" alt="" />
                                            </a>
                                        </div>
                                    </div>

                                    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#"
                                        uk-slidenav-previous uk-slider-item="previous"></a>
                                    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#"
                                        uk-slidenav-next uk-slider-item="next"></a>
                                </div>
                            </div>
                        </div>
                        <div id="yearly" class="tab-pane fade">
                            <!--- Gallery---------->
                            <div class="uk-container" uk-slider>
                                <div class="uk-position-relative uk-visible-toggle uk-light">
                                    <div class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@sld-width-1-4@m"
                                        uk-lightbox>
                                        <div>
                                            <a href="{{ asset('public/assets/img/pg1.png') }}" data-caption="1">
                                                <img src="{{ asset('public/assets/img/pg1.png') }}" alt="" />
                                            </a>
                                        </div>
                                        <div>
                                            <a href="{{ asset('public/assets/img/pg2.png') }}" data-caption="2">
                                                <img src="{{ asset('public/assets/img/pg2.png') }}" alt="" />
                                            </a>
                                        </div>
                                        <div>
                                            <a href="{{ asset('public/assets/img/pg3.png') }}" data-caption="3">
                                                <img src="{{ asset('public/assets/img/pg3.png') }}" alt="" />
                                            </a>
                                        </div>
                                        <div>
                                            <a href="{{ asset('public/assets/img/pg4.png') }}" data-caption="4">
                                                <img src="{{ asset('public/assets/img/pg4.png') }}" alt="" />
                                            </a>
                                        </div>
                                    </div>
                                    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#"
                                        uk-slidenav-previous uk-slider-item="previous"></a>
                                    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#"
                                        uk-slidenav-next uk-slider-item="next"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>




    <section class="banner-layout3">
        <div class="bg-img">
            <img src="https://ushpl.in/vijayapura/assets/img/Leader_Image-Vijay.png" alt="banner" />
        </div>
        <div class="container">
            <div class="row heading-layout3 heading-light mb-40">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <h2 class="heading__subtitle color-white">Sustainability, Safety, Quality</h2>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <h3 class="heading__title ft-500">Leader in Construction with Excellence in Implementation</h3>
                </div>
                <!-- /.col-lg-6 -->
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <p class="heading__desc">Innovation, Accuracy, and good old-fashioned hard-work combine to make
                        Ravi’s Infrabuild’s projects a premier experience.</p>
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                    <!-- fancybox item #1 -->
                    <div class="fancybox-item">
                        <div class="fancybox-item__icon">
                            <img src="{{ asset('public/assets/img/hqe.png') }}" alt="" />
                        </div>
                        <!-- /.fancybox-icon -->
                        <div class="fancybox-item__content">
                            <h4 class="fancybox-item__title">High Quality Equipment</h4>
                        </div>
                        <!-- /.fancybox-content -->
                    </div>
                    <!-- /.fancybox-item -->
                </div>
                <!-- /.col-lg-3 -->
                <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                    <!-- fancybox item #2 -->
                    <div class="fancybox-item">
                        <div class="fancybox-item__icon">
                            <img src="{{ asset('public/assets/img/et.png') }}" alt="" />
                        </div>
                        <!-- /.fancybox-icon -->
                        <div class="fancybox-item__content">
                            <h4 class="fancybox-item__title">Experienced Team</h4>
                        </div>
                        <!-- /.fancybox-content -->
                    </div>
                    <!-- /.col-lg-4 -->
                </div>
                <!-- /.col-lg-3 -->
                <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                    <!-- fancybox item #3 -->
                    <div class="fancybox-item">
                        <div class="fancybox-item__icon">
                            <img src="{{ asset('public/assets/img/ec.png') }}" alt="" />
                        </div>
                        <!-- /.fancybox-icon -->
                        <div class="fancybox-item__content">
                            <h4 class="fancybox-item__title">Enduring Credibility</h4>
                        </div>
                        <!-- /.fancybox-content -->
                    </div>
                    <!-- /.fancybox-item -->
                </div>
                <!-- /.col-lg-3 -->
                <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                    <!-- fancybox item #3 -->
                    <div class="fancybox-item">
                        <div class="fancybox-item__icon">
                            <img src="{{ asset('public/assets/img/tw.png') }}" alt="" />
                        </div>
                        <!-- /.fancybox-icon -->
                        <div class="fancybox-item__content">
                            <h4 class="fancybox-item__title">Transparent Workflow</h4>
                        </div>
                        <!-- /.fancybox-content -->
                    </div>
                    <!-- /.fancybox-item -->
                </div>
                <!-- /.col-lg-3 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <livewire:contact />

    <section class="work-process">
        <div class="container">
            <div class="row heading-layout3 mb-80">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <h2 class="heading__subtitle">How We Work!!</h2>
                </div>
                <!-- /.col-lg-6 -->
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <h3 class="heading__title color-light-ble">Pushing The Boundaries of What’s Possible.</h3>
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
            <div class="row process-items-wrapper">
                <!-- process Item #1 -->
                <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                    <div class="process-item">
                        <div class="process-item__icon">
                            <img src="{{ asset('public/assets/img/ip.png') }}" alt="" />
                        </div>
                        <!-- /.process-item__icon -->
                        <h4 class="process-item__title color-ble">
                            Initiation<br />
                            & Planning
                        </h4>
                        <p class="process-item__desc color-blk">Step 01</p>
                    </div>
                    <!-- /.process-item -->
                </div>
                <!-- /.col-lg-3 -->
                <!-- process Item #2 -->
                <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                    <div class="process-item">
                        <div class="process-item__icon">
                            <img src="{{ asset('public/assets/img/sda.png') }}" alt="" />
                        </div>
                        <!-- /.process-item__icon -->
                        <h4 class="process-item__title color-ble">
                            Schematic Designing<br />
                            & Assignations
                        </h4>
                        <p class="process-item__desc color-blk mbt-2">Step 02</p>
                    </div>
                    <!-- /.process-item -->
                </div>
                <!-- /.col-lg-3 -->
                <!-- process Item #3 -->
                <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                    <div class="process-item">
                        <div class="process-item__icon">
                            <img src="{{ asset('public/assets/img/eqc.png') }}" alt="" />
                        </div>
                        <!-- /.process-item__icon -->
                        <h4 class="process-item__title color-ble">
                            Execution & Quality<br />
                            Checks
                        </h4>
                        <p class="process-item__desc color-blk">Step 03</p>
                    </div>
                    <!-- /.process-item -->
                </div>
                <!-- /.col-lg-3 -->
                <!-- process Item #4 -->
                <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                    <div class="process-item">
                        <div class="process-item__icon">
                            <img src="{{ asset('public/assets/img/ap.png') }}" alt="" />
                        </div>
                        <!-- /.process-item__icon -->
                        <h4 class="process-item__title color-ble">
                            Accomplishment<br />
                            of the Project
                        </h4>
                        <p class="process-item__desc color-blk">Step 04</p>
                    </div>
                    <!-- /.process-item -->
                </div>
                <!-- /.col-lg-3 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
@endsection
