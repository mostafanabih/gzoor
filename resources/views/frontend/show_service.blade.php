@extends('frontend.site.app')

@section('content')
     <!-- Start inner Page hero-->
     <section class="d-flex align-items-center page-hero  inner-page-hero " id="page-hero">
      <div class="overlay-photo-image-bg parallax" data-bg-img="assets/images/hero/inner-page-hero.jpg" data-bg-opacity="1"></div>
      <div class="overlay-color" data-bg-opacity=".75"></div>
      <div class="container">
        <div class="hero-text-area centerd">
          <h1 class="hero-title  wow fadeInUp" data-wow-delay=".2s">تفاصيل الخدمه</h1>
          <nav aria-label="breadcrumb ">
            <ul class="breadcrumb wow fadeInUp" data-wow-delay=".6s">
              <li class="breadcrumb-item"><a class="breadcrumb-link" href="{{route('index')}}"><i class="bi bi-house icon "></i>الرئيسيه</a></li>
              <li class="breadcrumb-item active">تفاصيل الخدمه</li>
            </ul>
          </nav>
        </div>
      </div>
    </section>
    <!-- End inner Page hero-->
    <!-- Start inner Page hero-->
    <div class="service-single "> 
      <div class="container">
        <div class="row">
          <!--Start service content-->
          <div class="col-12 col-xl-8  ">
            <div class="service-content-area">
              <div class="featured-img-area part"><img class="feat-img img-fluid" src="{{ asset('storage/' . $info->images[0]) }}" alt="featured image"></div>
              <div class="service-content">
                <div class="part">
                  <h2 class="service-title">{{$info->name}}</h2>
                  <p class="service-text">{{$info->description}}</p>
                </div>
                <div class="part">
                  <div class="two-cols-img ">
                    <div class="row">
                    @foreach ($info->images as $image)
                      <div class="col-12 col-md-6 mb-3">
                        <div class="img-col"><img class="img-fluid" src="{{ asset('storage/' . $image) }}" loading="lazy" alt="service single image "></div>
                      </div>
                      @endforeach
                    </div>
                  </div>
                </div>
                
                <div class="part">
                <div class="info-items-list ">
                  <div class="row ">
                    <div class="col-9 col-xl-6">
                      <div class="info-item"><i class="flaticon-medal  info-icon"></i>
                        <div class="info-content">
                          <h5 class="info-title">الاول فى المجال </h5>
                          <p class="info-text">من هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر الشكل كاملاً</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-9 col-xl-6">
                      <div class="info-item"><i class="flaticon-game-console info-icon"></i>
                        <div class="info-content">
                          <h5 class="info-title">سهولة الوصول </h5>
                          <p class="info-text">من هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر الشكل كاملاً</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-9 col-xl-6">
                      <div class="info-item"><i class="flaticon-map info-icon"></i>
                        <div class="info-content">
                          <h5 class="info-title">خدمات عالمية </h5>
                          <p class="info-text">من هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر الشكل كاملاً</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-9 col-xl-6">
                      <div class="info-item"><i class="flaticon-technical-support-1  info-icon"></i>
                        <div class="info-content">
                          <h5 class="info-title">دعم متواصل </h5>
                          <p class="info-text">من هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر الشكل كاملاً</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                </div>
         
              </div>
            </div>
          </div>
          <!--Start service content-->
          <!-- Start service sidebar-->
          <div class="col-12 col-xl-4">
            <div class="service-sidebar ">
              <div class="sidebar-pane">
                <h2 class="sidebar-title">قائمه الخدمات</h2>
                <ul class="list">
                    @foreach($services as $service)
                      <li class="list-item @if($service->id == $info->id)active @endif"><i class="{{$service->icone}}"></i><a href="{{route('show_service',$service->id)}}"> {{$service->name}}</a></li>
                   @endforeach
                </ul>
              </div>
            </div>
          </div>
          <!-- End service sidebar-->
        </div>
      </div>
    </div>
    <!-- End inner Page hero-->
    @endsection