@extends('layout.public.app')
@section('content')
    <!-- tp-slider-area-start -->
    @include('public.home.banner')
    <!-- tp-slider-area-end -->


    <!-- tp-service-area-start -->
    @include('public.home.service')
    <!-- tp-service-area-end -->


    <!-- tp-counter-area-start -->
    <div class="tp-counter-2__area tp-counter-2__space theme-bg-3 pb-100">
        <div class="container">
            <div class="tp-counter-2__wrapper pt-65">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6 mb-30 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                        <div
                            class="tp-counter-2__item d-flex align-items-center justify-content-sm-start justify-content-center">
                            <div class="tp-counter-2__icon">
                                <img src="{{ asset('dist/public') }}/assets/img/counter/counter-1.png" alt="">
                            </div>
                            <div class="tp-counter-2__content">
                                <h4><span class="counter">20</span>+</h4>
                                <span>Years of Experience </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 mb-30 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">
                        <div
                            class="tp-counter-2__item d-flex align-items-center justify-content-sm-start justify-content-center">
                            <div class="tp-counter-2__icon">
                                <img src="{{ asset('dist/public') }}/assets/img/counter/counter-2.png" alt="">
                            </div>
                            <div class="tp-counter-2__content">
                                <h4 class="counter">1200</h4>
                                <span>Projects completed </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 mb-30 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".7s">
                        <div
                            class="tp-counter-2__item d-flex align-items-center justify-content-sm-start justify-content-center">
                            <div class="tp-counter-2__icon">
                                <img src="{{ asset('dist/public') }}/assets/img/counter/counter-3.png" alt="">
                            </div>
                            <div class="tp-counter-2__content">
                                <h4 class="counter">280</h4>
                                <span>Awards achieved </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 mb-30 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".9s">
                        <div
                            class="tp-counter-2__item d-flex align-items-center justify-content-sm-start justify-content-center">
                            <div class="tp-counter-2__icon">
                                <img src="{{ asset('dist/public') }}/assets/img/counter/counter-4.png" alt="">
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
            <img src="{{ asset('dist/public') }}/assets/img/hero/hero-shape-3-5.png" alt="">
        </div>
        <div class="tp-about__shape-3-2">
            <img src="{{ asset('dist/public') }}/assets/img/hero/hero-shape-3-6.png" alt="">
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 wow tpfadeLeft" data-wow-duration=".9s" data-wow-delay=".5s">
                    <div class="tp-about__thumb-wrapper p-relative">
                        <div class="tp-about__shape-1">
                            <img src="{{ asset('dist/public') }}/assets/img/hero/hero-shape-3-1.png" alt="">
                        </div>
                        <div class="tp-about__shape-2">
                            <img src="{{ asset('dist/public') }}/assets/img/hero/hero-shape-3-2.png" alt="">
                        </div>
                        <div class="tp-about__thumb">
                            <img src="{{ asset('dist/public') }}/assets/img/hero/hero-4.jpg" alt="">
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
                            <a href="project-details.html"><img src="{{ asset('dist/public') }}/assets/img/team/team-1.jpg"
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
                            <a href="project-details.html"><img src="{{ asset('dist/public') }}/assets/img/team/team-2.jpg"
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
                            <a href="project-details.html"><img
                                    src="{{ asset('dist/public') }}/assets/img/team/team-3.jpg" alt=""></a>
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
                            <a href="project-details.html"><img
                                    src="{{ asset('dist/public') }}/assets/img/team/team-4.jpg" alt=""></a>
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
                                <img src="{{ asset('dist/public') }}/assets/img/team/team-5.png" alt="">
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
                                <img src="{{ asset('dist/public') }}/assets/img/team/team-6.png" alt="">
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
                                <img src="{{ asset('dist/public') }}/assets/img/team/team-7.png" alt="">
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
                                <img src="{{ asset('dist/public') }}/assets/img/team/team-8.png" alt="">
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
            <img src="{{ asset('dist/public') }}/assets/img/hero/hero-shape-3-3.png" alt="">
        </div>
        <div class="tp-testimonial-3__shape-3-2">
            <img src="{{ asset('dist/public') }}/assets/img/hero/hero-shape-3-4.png" alt="">
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
                                <img src="{{ asset('dist/public') }}/assets/img/hero/hero-circle-icon-1.png"
                                    alt="">
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
                                <img src="{{ asset('dist/public') }}/assets/img/hero/hero-circle-icon-2.png"
                                    alt="">
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
                                <img src="{{ asset('dist/public') }}/assets/img/hero/hero-circle-icon-4.png"
                                    alt="">
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
                                <img src="{{ asset('dist/public') }}/assets/img/hero/hero-circle-icon-3.png"
                                    alt="">
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
                                <img src="{{ asset('dist/public') }}/assets/img/hero/hero-circle-icon-1.png"
                                    alt="">
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
                            <a href="blog-details.html"><img src="{{ asset('dist/public') }}/assets/img/blog/blog-1.jpg"
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
                            <a href="blog-details.html"><img src="{{ asset('dist/public') }}/assets/img/blog/blog-2.jpg"
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
