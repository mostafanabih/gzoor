@extends('frontend.site.app')
@section('content')
   <!-- main area start here  -->
   <main>
      <!-- breadcrumb area start here -->
      <section class="bd-breadcrumb-area p-relative fix theme-bg">
         <!-- breadcrumb background image -->
         <div class="bd-breadcrumb-bg" data-background="assets/img/bg/breadcrumb-bg.jpg"></div>
         <div class="bd-breadcrumb-wrapper mb-60 p-relative">
            <div class="container">
               <div class="bd-breadcrumb-shape d-none d-sm-block p-relative">
                  <div class="bd-breadcrumb-shape-1">
                     <img src="assets/img/shape/curved-line-2.png" alt="img not found!">
                  </div>
                  <div class="bd-breadcrumb-shape-2">
                     <img src="assets/img/shape/white-curved-line.png" alt="img not found!">
                  </div>
               </div>
               <div class="row justify-content-center">
                  <div class="col-xl-10">
                     <div class="bd-breadcrumb d-flex align-items-center justify-content-center">
                        <div class="bd-breadcrumb-content text-center">
                           <h1 class="bd-breadcrumb-title">المدونه</h1>
                           <div class="bd-breadcrumb-list">
                              <span><a href="index.html"><i class="flaticon-hut"></i>الصفحة الرئيسية</a></span>
                              <span>المدونه</span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="bd-wave-wrapper bd-wave-wrapper-3">
            <div class="bd-wave bd-wave-3"></div>
            <div class="bd-wave bd-wave-3"></div>
         </div>
      </section>
      <!-- breadcrumb area end here  -->

      <!-- blog area start here  -->
      <section class="bd-blog-area pt-120 pb-120">
         <div class="container">
            <div class="bd-blog-menu-wrapper">
               <div class="row align-items-end">

                  <div class="col-xxl-6 col-xl-7 col-lg-8">
                     <div class="bd-blog-cat-menu-wrapper mb-60 wow fadeInRight" data-wow-duration="1s"
                        data-wow-delay=".3s">
                        <div class="bd-blog-cat-menu bd-filter-btn">
                           <button data-filter=".c-1" class="active"> اخر الاخبار</button>

                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row grid">
                @foreach($posts as $post)
               <div class="col-xl-4 col-lg-6 col-md-6 grid-item c-1 c-3 c-4">
                  <div class="bd-blog mb-40 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                     <a href="news-details.html">
                        <div class="bd-blog-thumb">
                           <img src="{{asset("storage/$post->image")}}" alt="blog image">
                        </div>
                     </a>
                     <div class="bd-blog-content">
                        <div class="bd-blog-date">
                           <span>{{ $post->created_at->format('d M Y') }}</span>
                        </div>
                        <div class="bd-blog-meta">
                           <span><i class="fas fa-user"></i> by <a href="news.html">مدير</a></span>
                           <span><i class="fa-solid fa-comment-dots"></i><a href="news-details.html"></span>
                        </div>
                        <h4 class="bd-blog-title"><a href="{{route('show_post',$post->id)}}">افتتاح مختبر العلوم الجديد</a></h4>
                     </div>
                  </div>
               </div>
               @endforeach



            </div>
            <div class="row">
               <div class="col-12">
                  <div class="bd-pagination pt-20 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                     <ul class="justify-content-center">
                        <li><span aria-current="page" class="page-numbers current">01</span></li>
                        <li><a class="page-numbers" href="#">02</a></li>
                        <li><a class="next page-numbers" href="#">
                              <i class="fa-sharp fa-solid fa-angle-right"></i>
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- blog area end here  -->

      <!-- newsletter area start here  -->

      <!-- newsletter area end here  -->
   </main>
   <!-- main area end here  -->

@endsection





