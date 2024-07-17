@extends('frontend.site.app')

@section('content')
     <!-- Start inner Page hero-->
     <section class="d-flex align-items-center page-hero  inner-page-hero " id="page-hero">
      <div class="overlay-photo-image-bg parallax" data-bg-img="assets/images/hero/inner-page-hero.jpg" data-bg-opacity="1"></div>
      <div class="overlay-color" data-bg-opacity=".75"></div>
      <div class="container">
        <div class="hero-text-area centerd">
          <h1 class="hero-title  wow fadeInUp" data-wow-delay=".2s">الخدمات </h1>
          <nav aria-label="breadcrumb ">
            <ul class="breadcrumb wow fadeInUp" data-wow-delay=".6s">
              <li class="breadcrumb-item"><a class="breadcrumb-link" href="#0"><i class="bi bi-house icon "></i>الرئيسيه</a></li>
              <li class="breadcrumb-item active">الخدمات</li>
            </ul>
          </nav>
        </div>
      </div>
    </section>
    <!-- End inner Page hero-->
    <!-- Start  services Section-->
    <section class="services services-boxed mega-section  " id="services">
      <div class="container">
        <div class="sec-heading  ">
          <div class="content-area"><span class=" pre-title       wow fadeInUp " data-wow-delay=".2s">الخدمات</span>
            <h2 class=" title    wow fadeInUp" data-wow-delay=".4s"><span class='hollow-text'>الخدمات</span> التي نقدمها</h2>
            <p class="subtitle   wow fadeInUp " data-wow-delay=".6s">نقدم جميع الخدمات التي تجعل مشروعك جزءا من العالم الرقمي</p>
          </div>
        </div>
        <div class="row gx-4 gy-4 services-row ">  
        @foreach($services as $service) 
          <div class="col-12 col-md-6  col-lg-4 mx-auto ">
            <!--Start First service box-->
            <div class="box service-box  wow fadeInUp reveal-start" data-wow-offset="0" data-wow-delay=".1s">
              <div class="service-icon"><i class="{{$service->icone}}"></i></div><span class="service-num hollow-text">{{$loop->iteration}}    </span>
              <div class="service-content">
                <h3 class="service-title">{{$service->name}}</h3>
                <p class="service-text">{{$service->description}} </p>
              </div><a class="read-more" href="{{route('show_service',$service->id)}}">المزيد<i class="bi bi-arrow-left icon "></i></a>
            </div>
            <!-- End First service box   -->
          </div>
          @endforeach
          
        </div>
      </div>
    </section>
    <!-- End  services Section-->
    
    
    <!-- Start  take-action Section-->
    <section class="take-action elf-section has-dark-bg" id="take-action">
      <div class="overlay-photo-image-bg  " data-bg-img="assets/images/sections-bg-images/2.jpg" data-bg-opacity=".25"> </div>
      <div class="cta-wrapper">
        <div class="container">
          <div class="sec-heading  centered mb-0 ">
            <div class="content-area"><span class=" pre-title       wow fadeInUp " data-wow-delay=".2s">تواصل معنا</span>
              <h2 class=" title    wow fadeInUp" data-wow-delay=".4s">تواصل معنا</h2>
              <p class="subtitle   wow fadeInUp " data-wow-delay=".6s">أرسل إلينا رسالتك وسنعاود الإتصال بك لتقديم الخدمة المناسبة

               </p>
            </div>
          </div>
          <!--Start .see-more-area-->
          <div class=" see-more-area wow fadeInUp" data-wow-delay="0.8s"><a class=" btn-solid cta-link" href="contact-us.html">تواصل معنا</a></div>
          <!--End Of .see-more-area        -->
        </div>
      </div>
    </section>
    <!-- End  take-action Section-->   
    @endsection