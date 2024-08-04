<!doctype html>
<html class="no-js" lang="zxx">

<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>مدرسة جذور المستقبل</title>
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('frontend.site.partials.styles')
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
<style>
    *{
        font-family: "Cairo", sans-serif;
    }
</style>
    </head>

<body>

   <!-- pre loader area start -->
   <div id="loading">
      <div id="preloader">
         <div class="preloader-thumb-wrap">
            <div class="preloader-thumb">
               <div class="preloader-border"></div>
               <img src="assets/img/bg/preloader.png" alt="img not found!">
            </div>
         </div>
      </div>
   </div>
   <!-- pre loader area end -->

   <!-- back to top start -->
   <div class="progress-wrap">
      <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
         <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
      </svg>
   </div>
   <!-- back to top end -->

      @include('frontend.site.partials.header')

      @yield('content')


     @include('frontend.site.partials.footer')

      <!-- offcanvas area start -->
   <div class="offcanvas__area">
      <div class="offcanvas__bg"></div>
      <div class="offcanvas__wrapper">
         <div class="offcanvas__content">
            <div class="offcanvas__top mb-40 d-flex justify-content-between align-items-center">
               <div class="offcanvas__logo logo">
                  <a href="index.html">
                     <img src="assets/img/logo/logo.svg" alt="logo">
                  </a>
               </div>
               <div class="offcanvas__close">
                  <button class="offcanvas__close-btn">
                     <i class="fa-thin fa-times"></i>
                  </button>
               </div>
            </div>
            <div class="offcanvas__search mb-0">
               <form action="#">
                  <button type="submit"><i class="flaticon-search"></i></button>
                  <input type="text" placeholder="Search here">
               </form>
            </div>
            <div class="mobile-menu fix mt-40"></div>
            <div class="offcanvas__about d-none d-lg-block mt-30 mb-30">
               <h4>مدرسة جذور المستقبل</h4>
               <p>نحن نسخر خبراتنا ومواردنا لتوفير أفضل الاختيارات وابتكار أفضل الحلول لتيسير عملية التعلم للمعلم والمتعلم، بحيث يتم استغلال الوقت الاستغلال الأمثل ولا يتم إهدار مجهود الطلاب فيما لا يفيد .. إنها عملية شاقة تتطلب جهداً مستمراً، إنها رسالة نحن ملتزمون بها.</p>
            </div>
            <div class="offcanvas__contact mt-30 mb-30">
               <h4>معلومات التوصل</h4>
               <ul>
                  <li class="d-flex align-items-center gap-2">
                     <div class="offcanvas__contact-icon">
                        <a target="_blank"
                           href="https://maps.app.goo.gl/waJHYx66ieeao5YM8">
                           <i class="fal fa-map-marker-alt"></i></a>
                     </div>
                     <div class="offcanvas__contact-text">
                        <a target="_blank"
                           href="https://maps.app.goo.gl/waJHYx66ieeao5YM8">المملكة العربية السعودية الاحساء</a>
                     </div>
                  </li>
                  <li class="d-flex align-items-center gap-2">
                     <div class="offcanvas__contact-icon">
                        <a href="tel:+088889797697"><i class="far fa-phone"></i></a>
                     </div>
                     <div class="offcanvas__contact-text">
                        <a href="tel:+088889797697">088889797697</a>
                     </div>
                  </li>
                  <li class="d-flex align-items-center gap-2">
                     <div class="offcanvas__contact-icon">
                        <a href="mailto:support@gmail.com"><i class="fal fa-envelope"></i></a>
                     </div>
                     <div class="offcanvas__contact-text">
                        <a href="mailto:support@gmail.com">support@mail.com</a>
                     </div>
                  </li>
               </ul>
            </div>
            <div class="offcanvas__social">
               <ul>
                  <li><a target="_blank" href="https://www.facebook.com/"><i class="fa-brands fa-facebook-f"></i></a>
                  </li>
                  <li><a target="_blank" href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a></li>
                  <li><a target="_blank" href="https://www.youtube.com/"><i class="fa-brands fa-youtube"></i></a>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </div>
   <div class="body-overlay"></div>
   <!-- offcanvas area end -->


   <!-- serach popup area start here  -->
   <div class="bd-search-popup-area">
      <div class="container">
         <div class="row">
            <div class="col-12">
               <div class="bd-search-popup">
                  <div class="bd-search-form">
                     <form action="#">
                        <div class="bd-search-input">
                           <input type="search" placeholder="Type here to serach ...">
                           <div class="bd-search-submit">
                              <button type="submit"><i class="flaticon-search"></i></button>
                           </div>
                        </div>
                     </form>
                     <div class="bd-search-close">
                        <div class="bd-search-close-btn">
                           <button><i class="fa-thin fa-close"></i></button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- search popup overlay  -->
   <div class="bd-search-overlay"></div>
   <!-- serach popup area end here  -->

     @include('frontend.site.partials.scripts')
</body>
</html>
