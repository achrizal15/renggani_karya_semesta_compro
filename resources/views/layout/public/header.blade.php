   <!-- preloader -->
   <div id="preloader">
       <div class="preloader">
           <span></span>
           <span></span>
       </div>
   </div>
   <!-- preloader end  -->

   <!-- back-to-top-start  -->
   <button class="scroll-top scroll-to-target" data-target="html">
       <i class="far fa-angle-double-up"></i>
   </button>
   <!-- back-to-top-end  -->


   <header>
       <!-- tp-header-area-start -->
       <div class="tp-header__top-area theme-bg tp-header__space-3 d-none d-sm-block">
           <div class="container-fluid">
               <div class="row align-items-center">
                   <div class="col-xxl-8 col-xl-8 col-lg-6 col-md-6 col-6">
                       <div class="tp-header__top-left">
                           <a href="tel:6289512589756">
                               <svg width="14" height="19" viewBox="0 0 14 19" fill="none"
                                   xmlns="http://www.w3.org/2000/svg">
                                   <circle cx="2" cy="2" r="2" fill="#3EB7FD" />
                                   <circle cx="7" cy="2" r="2" fill="#3EB7FD" />
                                   <circle cx="12" cy="2" r="2" fill="#3EB7FD" />
                                   <circle cx="12" cy="7" r="2" fill="#3EB7FD" />
                                   <circle cx="12" cy="12" r="2" fill="#3EB7FD" />
                                   <circle cx="7" cy="7" r="2" fill="#3EB7FD" />
                                   <circle cx="7" cy="12" r="2" fill="#3EB7FD" />
                                   <circle cx="7" cy="17" r="2" fill="#3EB7FD" />
                                   <circle cx="2" cy="7" r="2" fill="#3EB7FD" />
                                   <circle cx="2" cy="12" r="2" fill="#3EB7FD" />
                               </svg>
                               <span>Help Desk : <b class="frist-child">+62 895-1258-9756</b></span>
                           </a>
                       </div>
                   </div>
                   <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-6">
                       <div class="tp-header__top-right text-end">
                           <a href="#"><i class="fab fa-facebook-f"></i></a>
                           <a href="#"><i class="fab fa-instagram"></i></a>
                           <a href="#"><i class="fab fa-linkedin"></i></a>
                       </div>
                   </div>
               </div>
           </div>
       </div>

       <div id="header-sticky"
           class="tp-header__area tp-header__space-3 tp-header__bottom tp-header__menu-space p-relative">
           <div class="container-fluid">
               <div class="row align-items-center">
                   <div class="col-xl-2 col-lg-2 col-md-6 col-7">
                       <div class="tp-header__logo">
                           <a href="{{ route('home') }}">
                               <img src="{{ asset('template/public') }}/assets/img/logo/logo-black.svg"
                                   alt="logo-renggani" width='50px'>
                           </a>
                       </div>
                   </div>
                   <div class="col-xl-7 col-lg-7 d-none d-lg-block z-index-5">
                       <div class="tp-header__main-menu tp-header__black-menu tp-header__menu-3">
                           <nav id="mobile-menu">
                               <ul>
                                   <li><a href="/">Beranda</a></li>
                                   </li>
                                   <li><a href="#">Layanan</a>
                                       <ul class="submenu">
                                           <li><a href="about-me.html">ERP</a></li>
                                           <li><a href="about-us.html">Landing Page</a></li>
                                           <li><a href="about-us.html">Web Design</a></li>
                                           <li><a href="about-us.html">Mobile Apps</a></li>
                                           <li><a href="about-us.html">E-Commerce</a></li>
                                       </ul>
                                   </li>
                                   <li><a href="/project">Projek</a></li>
                                   <li><a href="/price">Tentang</a></li>
                               </ul>
                           </nav>
                       </div>
                   </div>
                   <div class="col-xl-3 col-lg-3 col-md-6 col-5">
                       <div class="tp-header__right-two d-flex align-items-center justify-content-end">
                           <a class="tp-btn-blue-square d-none d-md-block" href="contact.html"><span>HUBUNGI
                                   KAMI</span></a>
                           <a class="tp-header__bars tp-menu-bar d-lg-none" href="javascript:void(0)"><i
                                   class="far fa-bars"></i></a>
                       </div>
                   </div>
               </div>
           </div>
       </div>

       <!-- tp-header-area-end -->
   </header>
   <div class="tp-offcanvas-area">
       <div class="tpoffcanvas">
           <div class="tpoffcanvas__close-btn">
               <button class="close-btn"><i class="fal fa-times"></i></button>
           </div>
           <div class="tpoffcanvas__logo">
               <a href="index.html">
                   <img src="{{ asset('template/public') }}/assets/img/logo/logo.svg" alt="">
               </a>
           </div>

           <div class="mobile-menu"></div>
           <div class="tpoffcanvas__info">
               <h3 class="offcanva-title">Kontak Kami</h3>
               <div class="tp-info-wrapper mb-20 d-flex align-items-center">
                   <div class="tpoffcanvas__info-icon">
                       <a href="#"><i class="fal fa-envelope"></i></a>
                   </div>
                   <div class="tpoffcanvas__info-address">
                       <span>Email</span>
                       <a href="maito:contact@rengganikaryasemesta.com">contact@renggani <br>karyasemesta.com</a>
                   </div>
               </div>
               <div class="tp-info-wrapper mb-20 d-flex align-items-center">
                   <div class="tpoffcanvas__info-icon">
                       <a href="#"><i class="fal fa-phone-alt"></i></a>
                   </div>
                   <div class="tpoffcanvas__info-address">
                       <span>Phone</span>
                       <a href="tel:6289512589756">+62 895-1258-9756</a>
                   </div>
               </div>
               <div class="tp-info-wrapper mb-20 d-flex align-items-center">
                   <div class="tpoffcanvas__info-icon">
                       <a href="#"><i class="fas fa-map-marker-alt"></i></a>
                   </div>
                   <div class="tpoffcanvas__info-address">
                       <span>Location</span>
                       <a href="https://www.google.com/maps/@37.4801311,22.8928877,3z" target="_blank">Jln. Kemiren,
                           Banyuwangi, Jawa Timur, Indonesia </a>
                   </div>
               </div>
           </div>
           <div class="tpoffcanvas__social">
               <div class="social-icon">
                   <a href="#"><i class="fab fa-instagram"></i></a>
                   <a href="#"><i class="fab fa-facebook-square"></i></a>
               </div>
           </div>
       </div>
   </div>
   <div class="body-overlay"></div>
