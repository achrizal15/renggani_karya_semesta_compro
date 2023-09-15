@extends('layout.public.app')
@section('content')
    <!-- tp-slider-area-start -->
    <div class="tp-hero__area pt-100 pb-80 p-relative">
        <div class="tp-hero__shape-3-1 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".7s">
            <img src="{{ asset('template') }}/assets/img/hero/hero-shape-3-3.png" alt="">
        </div>
        <div class="tp-hero__shape-3-2 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".9s">
            <img src="{{ asset('template') }}/assets/img/hero/hero-shape-3-4.png" alt="">
        </div>
        <div class="container">
            <div class="row align-items-start">
                <div class="col-xl-6 col-lg-6">
                    <div class="tp-hero__content-box">
                        <h3 class="tp-hero__title-lg pb-20 theme-color wow tpfadeUp" data-wow-duration=".9s"
                            data-wow-delay=".3s">Mengukir Inovasi, Mewujudkan Solusi
                        </h3>
                        <p class="wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">Tingkatkan Bisnis
                            Anda Bersama Renggani Karya Semesta: Desain, Bangun, Kirim, dan Skalakan Produk
                            Berkualitas Tinggi dengan Kecepatan Kilat</p>
                    </div>
                    <div class="tp-hero__button-box wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".7s">
                        <a class="tp-btn-blue-square mb-20 mr-25" href="contact.html"><span>Get Started</span></a>
                        <a class="tp-btn-pink mb-20" href="about-us.html"><span>Learn MOre</span></a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 wow tpfadeRight" data-wow-duration=".9s" data-wow-delay=".9s">
                    <div class="tp-hero__wrapper-3 d-flex justify-content-center justify-content-lg-end">
                        <div class="tp-hero__thumb-3">
                            <img src="{{ asset('template') }}/assets/img/hero/hero-3.jpg" alt="">
                            <div class="tp-hero__thumb-shape-1">
                                <img src="{{ asset('template') }}/assets/img/hero/hero-shape-3-1.png" alt="">
                            </div>
                            <div class="tp-hero__thumb-shape-2">
                                <img src="{{ asset('template') }}/assets/img/hero/hero-shape-3-2.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- tp-slider-area-end -->


    <!-- tp-service-area-start -->
    <div class="tp-service__area tp-service__space theme-bg-3 pt-120 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tp-service__section-wrapper d-flex justify-content-between">
                        <div class="tp-service__title-box ml-40">
                            <h3 class="tp-service__title wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">All
                                about quitox agency <br>
                                Technology
                            </h3>
                        </div>
                        <div class="tp-service__play-btn wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">
                            <a class="popup-video pulse-btn" href="https://www.youtube.com/watch?v=t0Q2otsqC4I"><i
                                    class="fas fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tp-service__slider-wrapper">
                <div class="tp-service__slider-active">
                    <div class="tp-service__item wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">
                        <div class="tp-service__icon">
                            <img src="{{ asset('template') }}/assets/img/service/service-icon-1.png" alt="">
                        </div>
                        <div class="tp-service__content">
                            <h4 class="tp-service__title-sm"><a href="service-details.html">IT Solution</a></h4>
                            <p>Quitox is the best quaint james victoria sponge happy days cras.Quitox is the best of
                                the seen.</p>
                        </div>
                        <div class="tp-service__link">
                            <a href="service-details.html">
                                <svg width="39" height="16" viewBox="0 0 39 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M38.7071 8.70711C39.0976 8.31658 39.0976 7.68342 38.7071 7.29289L32.3431 0.928932C31.9526 0.538408 31.3195 0.538408 30.9289 0.928932C30.5384 1.31946 30.5384 1.95262 30.9289 2.34315L36.5858 8L30.9289 13.6569C30.5384 14.0474 30.5384 14.6805 30.9289 15.0711C31.3195 15.4616 31.9526 15.4616 32.3431 15.0711L38.7071 8.70711ZM0 9H38V7H0V9Z"
                                        fill="currentColor" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="tp-service__item wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".7s">
                        <div class="tp-service__icon">
                            <img src="{{ asset('template') }}/assets/img/service/service-icon-2.png" alt="">
                        </div>
                        <div class="tp-service__content">
                            <h4 class="tp-service__title-sm"><a href="service-details.html">Data Solution</a></h4>
                            <p>Quitox is the best quaint james victoria sponge happy days cras.Quitox is the best of
                                the seen.</p>
                        </div>
                        <div class="tp-service__link">
                            <a href="service-details.html">
                                <svg width="39" height="16" viewBox="0 0 39 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M38.7071 8.70711C39.0976 8.31658 39.0976 7.68342 38.7071 7.29289L32.3431 0.928932C31.9526 0.538408 31.3195 0.538408 30.9289 0.928932C30.5384 1.31946 30.5384 1.95262 30.9289 2.34315L36.5858 8L30.9289 13.6569C30.5384 14.0474 30.5384 14.6805 30.9289 15.0711C31.3195 15.4616 31.9526 15.4616 32.3431 15.0711L38.7071 8.70711ZM0 9H38V7H0V9Z"
                                        fill="currentColor" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="tp-service__item wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".9s">
                        <div class="tp-service__icon">
                            <img src="{{ asset('template') }}/assets/img/service/service-icon-3.png" alt="">
                        </div>
                        <div class="tp-service__content">
                            <h4 class="tp-service__title-sm"><a href="service-details.html">Web Design</a></h4>
                            <p>Quitox is the best quaint james victoria sponge happy days cras.Quitox is the best of
                                the seen.</p>
                        </div>
                        <div class="tp-service__link">
                            <a href="service-details.html">
                                <svg width="39" height="16" viewBox="0 0 39 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M38.7071 8.70711C39.0976 8.31658 39.0976 7.68342 38.7071 7.29289L32.3431 0.928932C31.9526 0.538408 31.3195 0.538408 30.9289 0.928932C30.5384 1.31946 30.5384 1.95262 30.9289 2.34315L36.5858 8L30.9289 13.6569C30.5384 14.0474 30.5384 14.6805 30.9289 15.0711C31.3195 15.4616 31.9526 15.4616 32.3431 15.0711L38.7071 8.70711ZM0 9H38V7H0V9Z"
                                        fill="currentColor" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="tp-service__item wow tpfadeUp" data-wow-duration=".9s" data-wow-delay="1s">
                        <div class="tp-service__icon">
                            <img src="{{ asset('template') }}/assets/img/service/service-icon-2.png" alt="">
                        </div>
                        <div class="tp-service__content">
                            <h4 class="tp-service__title-sm"><a href="service-details.html">graphic design</a>
                            </h4>
                            <p>Quitox is the best quaint james victoria sponge happy days cras.Quitox is the best of
                                the seen.</p>
                        </div>
                        <div class="tp-service__link">
                            <a href="service-details.html">
                                <svg width="39" height="16" viewBox="0 0 39 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M38.7071 8.70711C39.0976 8.31658 39.0976 7.68342 38.7071 7.29289L32.3431 0.928932C31.9526 0.538408 31.3195 0.538408 30.9289 0.928932C30.5384 1.31946 30.5384 1.95262 30.9289 2.34315L36.5858 8L30.9289 13.6569C30.5384 14.0474 30.5384 14.6805 30.9289 15.0711C31.3195 15.4616 31.9526 15.4616 32.3431 15.0711L38.7071 8.70711ZM0 9H38V7H0V9Z"
                                        fill="currentColor" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="tp-service__item wow tpfadeUp" data-wow-duration=".9s" data-wow-delay="1.2s">
                        <div class="tp-service__icon">
                            <img src="{{ asset('template') }}/assets/img/service/service-icon-1.png" alt="">
                        </div>
                        <div class="tp-service__content">
                            <h4 class="tp-service__title-sm"><a href="service-details.html">IT Solution</a></h4>
                            <p>Quitox is the best quaint james victoria sponge happy days cras.Quitox is the best of
                                the seen.</p>
                        </div>
                        <div class="tp-service__link">
                            <a href="service-details.html">
                                <svg width="39" height="16" viewBox="0 0 39 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M38.7071 8.70711C39.0976 8.31658 39.0976 7.68342 38.7071 7.29289L32.3431 0.928932C31.9526 0.538408 31.3195 0.538408 30.9289 0.928932C30.5384 1.31946 30.5384 1.95262 30.9289 2.34315L36.5858 8L30.9289 13.6569C30.5384 14.0474 30.5384 14.6805 30.9289 15.0711C31.3195 15.4616 31.9526 15.4616 32.3431 15.0711L38.7071 8.70711ZM0 9H38V7H0V9Z"
                                        fill="currentColor" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- tp-service-area-end -->


    <!-- tp-counter-area-start -->
    <div class="tp-counter-2__area tp-counter-2__space theme-bg-3 pb-100">
        <div class="container">
            <div class="tp-counter-2__wrapper pt-65">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6 mb-30 wow tpfadeUp" data-wow-duration=".9s"
                        data-wow-delay=".3s">
                        <div
                            class="tp-counter-2__item d-flex align-items-center justify-content-sm-start justify-content-center">
                            <div class="tp-counter-2__icon">
                                <img src="{{ asset('template') }}/assets/img/counter/counter-1.png" alt="">
                            </div>
                            <div class="tp-counter-2__content">
                                <h4><span class="counter">20</span>+</h4>
                                <span>Years of Experience </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 mb-30 wow tpfadeUp" data-wow-duration=".9s"
                        data-wow-delay=".5s">
                        <div
                            class="tp-counter-2__item d-flex align-items-center justify-content-sm-start justify-content-center">
                            <div class="tp-counter-2__icon">
                                <img src="{{ asset('template') }}/assets/img/counter/counter-2.png" alt="">
                            </div>
                            <div class="tp-counter-2__content">
                                <h4 class="counter">1200</h4>
                                <span>Projects completed </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 mb-30 wow tpfadeUp" data-wow-duration=".9s"
                        data-wow-delay=".7s">
                        <div
                            class="tp-counter-2__item d-flex align-items-center justify-content-sm-start justify-content-center">
                            <div class="tp-counter-2__icon">
                                <img src="{{ asset('template') }}/assets/img/counter/counter-3.png" alt="">
                            </div>
                            <div class="tp-counter-2__content">
                                <h4 class="counter">280</h4>
                                <span>Awards achieved </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 mb-30 wow tpfadeUp" data-wow-duration=".9s"
                        data-wow-delay=".9s">
                        <div
                            class="tp-counter-2__item d-flex align-items-center justify-content-sm-start justify-content-center">
                            <div class="tp-counter-2__icon">
                                <img src="{{ asset('template') }}/assets/img/counter/counter-4.png" alt="">
                            </div>
                            <div class="tp-counter-2__content">
                                <h4 class="counter">260</h4>
                                <span>Satisfied clients </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- tp-counter-area-end -->


    <!-- tp-about-area-start -->
    <div class="tp-about__area pt-120 pb-120 p-relative">
        <div class="tp-about__shape-3-1">
            <img src="{{ asset('template') }}/assets/img/hero/hero-shape-3-5.png" alt="">
        </div>
        <div class="tp-about__shape-3-2">
            <img src="{{ asset('template') }}/assets/img/hero/hero-shape-3-6.png" alt="">
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 wow tpfadeLeft" data-wow-duration=".9s" data-wow-delay=".5s">
                    <div class="tp-about__thumb-wrapper p-relative">
                        <div class="tp-about__shape-1">
                            <img src="{{ asset('template') }}/assets/img/hero/hero-shape-3-1.png" alt="">
                        </div>
                        <div class="tp-about__shape-2">
                            <img src="{{ asset('template') }}/assets/img/hero/hero-shape-3-2.png" alt="">
                        </div>
                        <div class="tp-about__thumb">
                            <img src="{{ asset('template') }}/assets/img/hero/hero-4.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 wow tpfadeRight" data-wow-duration=".9s" data-wow-delay=".7s">
                    <div class="tp-about__section-box">
                        <h3 class="tp-section-title-md pb-30">Boost your business <br>with quitox</h3>
                        <div class="tp-about__text">
                            <p>Quitox is the best quaint james bond victoria sponge happy days cras arse over
                                blatant.Jolly good quaint james bond victoria sponge happy.</p>
                            <p>Quitox is the best quaint james bond victoria sponge happy days cras arse over
                                blatant.</p>
                        </div>
                        <a class="tp-btn-blue-square" href="contact.html"><span>Get Started</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- tp-about-area-end -->


    <!-- tp-project-area-start -->
    <div class="tp-project__area grey-bg pt-120 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tp-project__section-box d-flex justify-content-between align-items-center wow tpfadeUp"
                        data-wow-duration=".9s" data-wow-delay=".3s">
                        <h3 class="tp-section-title-md">Latest projects from <br> our team</h3>
                        <a class="tp-btn-blue-square" href="project.html"><span>See all work</span></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6 wow tpfadeLeft" data-wow-duration=".9s" data-wow-delay=".5s">
                    <div class="tp-project__item mb-30">
                        <div class="tp-project__thumb fix">
                            <a href="project-details.html"><img src="{{ asset('template') }}/assets/img/team/team-1.jpg"
                                    alt=""></a>
                        </div>
                        <div class="tp-project__content">
                            <h3 class="tp-project__title"><a href="project-details.html">Hosting Website
                                    Design</a></h3>
                            <p>At Quitox we specialize in designing, building, shipping...</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 wow tpfadeRight" data-wow-duration=".9s" data-wow-delay=".7s">
                    <div class="tp-project__item mb-30">
                        <div class="tp-project__thumb fix">
                            <a href="project-details.html"><img src="{{ asset('template') }}/assets/img/team/team-2.jpg"
                                    alt=""></a>
                        </div>
                        <div class="tp-project__content">
                            <h3 class="tp-project__title"><a href="project-details.html">Web Design Company</a>
                            </h3>
                            <p>At Quitox we specialize in designing, building, shipping...</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 wow tpfadeLeft" data-wow-duration=".9s" data-wow-delay=".9s">
                    <div class="tp-project__item mb-30">
                        <div class="tp-project__thumb fix">
                            <a href="project-details.html"><img src="{{ asset('template') }}/assets/img/team/team-3.jpg"
                                    alt=""></a>
                        </div>
                        <div class="tp-project__content">
                            <h3 class="tp-project__title"><a href="project-details.html">Business Setup &
                                    Company</a></h3>
                            <p>At Quitox we specialize in designing, building, shipping...</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 wow tpfadeRight" data-wow-duration=".9s" data-wow-delay="1s">
                    <div class="tp-project__item mb-30">
                        <div class="tp-project__thumb fix">
                            <a href="project-details.html"><img src="{{ asset('template') }}/assets/img/team/team-4.jpg"
                                    alt=""></a>
                        </div>
                        <div class="tp-project__content">
                            <h3 class="tp-project__title"><a href="project-details.html">Mainland Company
                                    Formation</a></h3>
                            <p>At Quitox we specialize in designing, building, shipping...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- tp-project-area-end -->


    <!-- tp-team-area-start -->
    <div class="tp-team__area p-relative">
        <div class="tp-team__grey-bg grey-bg"></div>
        <div class="tp-team__ml-mr theme-bg-3 pt-120 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-12 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">
                        <div class="tp-team__section-box d-flex justify-content-between">
                            <h3 class="tp-section-title-md text-white">Meet with our <br> team</h3>
                            <div class="tp-team__btn">
                                <a class="tp-btn-pink mb-15" href="team.html"><span>All Team Member</span></a>
                                <a class="tp-btn-sky-sm mb-15 ml-15" href="about-me.html"><span>JOin our
                                        Team</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6 mb-70 wow tpfadeUp" data-wow-duration=".9s"
                        data-wow-delay=".5s">
                        <div class="tp-team__item text-center">
                            <div class="tp-team__img fix">
                                <img src="{{ asset('template') }}/assets/img/team/team-5.png" alt="">
                            </div>
                            <div class="tp-team__content">
                                <h4 class="tp-team__title"><a href="about-me.html">Cameron Williamson</a></h4>
                                <span>Founder & CO</span>
                            </div>
                            <div class="tp-team__social">
                                <a href="#"><i class="fab fa-youtube"></i></a>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 mb-70 wow tpfadeUp" data-wow-duration=".9s"
                        data-wow-delay=".7s">
                        <div class="tp-team__item text-center">
                            <div class="tp-team__img fix">
                                <img src="{{ asset('template') }}/assets/img/team/team-6.png" alt="">
                            </div>
                            <div class="tp-team__content">
                                <h4 class="tp-team__title"><a href="about-me.html">Eleanor Pena</a></h4>
                                <span>Head of Design</span>
                            </div>
                            <div class="tp-team__social">
                                <a href="#"><i class="fab fa-youtube"></i></a>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 mb-70 wow tpfadeUp" data-wow-duration=".9s"
                        data-wow-delay=".9s">
                        <div class="tp-team__item text-center">
                            <div class="tp-team__img fix">
                                <img src="{{ asset('template') }}/assets/img/team/team-7.png" alt="">
                            </div>
                            <div class="tp-team__content">
                                <h4 class="tp-team__title"><a href="about-me.html">Bessie Cooper</a></h4>
                                <span>Vp People</span>
                            </div>
                            <div class="tp-team__social">
                                <a href="#"><i class="fab fa-youtube"></i></a>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 mb-70 wow tpfadeUp" data-wow-duration=".9s"
                        data-wow-delay="1s">
                        <div class="tp-team__item text-center">
                            <div class="tp-team__img fix">
                                <img src="{{ asset('template') }}/assets/img/team/team-8.png" alt="">
                            </div>
                            <div class="tp-team__content">
                                <h4 class="tp-team__title"><a href="about-me.html">Darlene Robertson</a></h4>
                                <span>Product Manager</span>
                            </div>
                            <div class="tp-team__social">
                                <a href="#"><i class="fab fa-youtube"></i></a>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tp-testimonial-3__area pt-120 pb-100 p-relative">
        <div class="tp-testimonial-3__shape-3-1">
            <img src="{{ asset('template') }}/assets/img/hero/hero-shape-3-3.png" alt="">
        </div>
        <div class="tp-testimonial-3__shape-3-2">
            <img src="{{ asset('template') }}/assets/img/hero/hero-shape-3-4.png" alt="">
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="tp-testimonial-3__section-box text-center wow tpfadeUp" data-wow-duration=".9s"
                        data-wow-delay=".3s">
                        <h3 class="tp-section-title-md">The Trust From <br> Clients</h3>
                    </div>
                </div>
            </div>
            <div class="tp-testimonial-3__wrapper">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 wow tpfadeLeft" data-wow-duration=".9s" data-wow-delay=".5s">
                        <div class="tp-testimonial-3__item d-flex mb-25">
                            <div class="tp-testimonial-3__icon">
                                <img src="{{ asset('template') }}/assets/img/hero/hero-circle-icon-1.png" alt="">
                            </div>
                            <div class="tp-testimonial-3__content">
                                <p>Wow. What a great experience copywriter. for Quixtex is a very talented digital
                                    agnecy. best yesterday apps i ever seeWow. What a great experience copywriter.
                                    for Quixtex is a very talented digital agnecy. best yesterday apps i ever
                                    seeWow. What a great experience copywriter. for Quixtex is a very talented
                                    digital agnecy. best yesterday apps i ever see
                                </p>
                                <div class="tp-testimonial-3__author">
                                    <h4>Alextina De <span>(Slack)</span></h4>
                                </div>
                            </div>
                        </div>
                        <div class="tp-testimonial-3__item tp-testimonial-3__item-2 d-flex mb-25">
                            <div class="tp-testimonial-3__icon">
                                <img src="{{ asset('template') }}/assets/img/hero/hero-circle-icon-2.png" alt="">
                            </div>
                            <div class="tp-testimonial-3__content">
                                <p>Wow. What a great experience copywriter. for Quixtex is a very talented digital
                                    agnecy. best yesterday apps i ever see
                                </p>
                                <div class="tp-testimonial-3__author">
                                    <h4>Amber Tarry <span>(Slack)</span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="tp-testimonial-3__item tp-testimonial-3__item-2 d-flex mb-25 wow tpfadeUp"
                            data-wow-duration=".9s" data-wow-delay=".7s">
                            <div class="tp-testimonial-3__icon">
                                <img src="{{ asset('template') }}/assets/img/hero/hero-circle-icon-4.png" alt="">
                            </div>
                            <div class="tp-testimonial-3__content">
                                <p>Wow. What a great experience copywriter. for Quixtex is a very talented digital
                                    agnecy. best yesterday apps i ever see
                                </p>
                                <div class="tp-testimonial-3__author">
                                    <h4>D. Takahashi <span>(Robert)</span></h4>
                                </div>
                            </div>
                        </div>
                        <div class="tp-testimonial-3__item tp-testimonial-3__item-2 d-flex mb-25 wow tpfadeUp"
                            data-wow-duration=".9s" data-wow-delay=".9s">
                            <div class="tp-testimonial-3__icon">
                                <img src="{{ asset('template') }}/assets/img/hero/hero-circle-icon-3.png" alt="">
                            </div>
                            <div class="tp-testimonial-3__content">
                                <p>Wow. What a great experience copywriter. for Quixtex is a very talented digital
                                    agnecy. best yesterday apps i ever see
                                </p>
                                <div class="tp-testimonial-3__author">
                                    <h4>Melvin <span>(J. Reed)</span></h4>
                                </div>
                            </div>
                        </div>
                        <div class="tp-testimonial-3__item tp-testimonial-3__item-2 d-flex mb-25 wow tpfadeUp"
                            data-wow-duration=".9s" data-wow-delay="1s">
                            <div class="tp-testimonial-3__icon">
                                <img src="{{ asset('template') }}/assets/img/hero/hero-circle-icon-1.png" alt="">
                            </div>
                            <div class="tp-testimonial-3__content">
                                <p>Wow. What a great experience copywriter. for Quixtex is a very talented digital
                                    agnecy. best yesterday apps i ever see
                                </p>
                                <div class="tp-testimonial-3__author">
                                    <h4>L. Young <span>(Jordan)</span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tp-blog__area grey-bg pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-12 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                    <div class="tp-blog__section-box d-flex justify-content-between align-items-center">
                        <h3 class="tp-section-title-md">Read our recent blog<br> & article</h3>
                        <a class="tp-btn-blue-square" href="blog.html"><span>See all Blog</span></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6 mb-30 wow tpfadeLeft" data-wow-duration=".9s" data-wow-delay=".5s">
                    <div class="tp-blog__item">
                        <div class="tp-blog__thumb fix">
                            <a href="blog-details.html"><img src="{{ asset('template') }}/assets/img/blog/blog-1.jpg"
                                    alt=""></a>
                        </div>
                        <div class="tp-blog__content-wrapper">
                            <div class="tp-blog__tag">
                                <span>Tutorials</span>
                            </div>
                            <div class="tp-blog__content">
                                <h3 class="tp-blog__title"><a href="blog-details.html">How to add a count up
                                        animation <br> the webflow site.</a></h3>
                                <p>Specialize in designing, building, shipping and scaling <br> beautiful, usable
                                    products with blazing-fast</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 mb-30 wow tpfadeRight" data-wow-duration=".9s" data-wow-delay=".7s">
                    <div class="tp-blog__item">
                        <div class="tp-blog__thumb fix">
                            <a href="blog-details.html"><img src="{{ asset('template') }}/assets/img/blog/blog-2.jpg"
                                    alt=""></a>
                        </div>
                        <div class="tp-blog__content-wrapper">
                            <div class="tp-blog__tag">
                                <span>Design</span>
                            </div>
                            <div class="tp-blog__content">
                                <h3 class="tp-blog__title"><a href="blog-details.html">Is your company facing a
                                        social media crisis?</a></h3>
                                <p>Specialize in designing, building, shipping and scaling <br> beautiful, usable
                                    products with blazing-fast</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
