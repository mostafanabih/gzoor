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
                           <h1 class="bd-breadcrumb-title">حول</h1>
                           <div class="bd-breadcrumb-list">
                              <span><a href="/"><i class="flaticon-hut"></i>الصفحة الرئيسية</a></span>
                              <span>حول</span>
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

      <!-- promotion area start here  -->
      <section class="bd-promotion-area pb-60">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="bd-promotion-thumb-wrapper mb-60">
                        <div class="bd-promotion-thumb">

                        </div>
                        <img src="assets/img/program/home-program-1.jpg" alt="" srcset="">

                        <div class="bd-promotion-thumb-mask p-relative wow ">
                            <div class="panel wow"></div>
                        </div>
                        <div class="bd-promotion-shape d-none d-lg-block">
                            <img src="assets/img/shape/tripple-line.png">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="bd-promotion mb-60 wow fadeInRight" data-wow-duration="1s" data-wow-delay="1">
                        <div class="bd-section-title-wrapper mb-35">
                            <h2 class="bd-section-title mb-10">مدارس جذور المستقبل</h2>
                            <p>
                                نحن نسخر خبراتنا ومواردنا لتوفير أفضل الاختيارات وابتكار أفضل الحلول لتيسير عملية التعلم للمعلم والمتعلم، بحيث يتم استغلال الوقت الاستغلال الأمثل ولا يتم إهدار مجهود الطلاب فيما لا يفيد .. إنها عملية شاقة تتطلب جهداً مستمراً، إنها رسالة نحن ملتزمون بها.
                            </p>
                        </div>
                        <div class="bd-promotion-counter-wrapper mb-40">
                            <div class="bd-promotion-counter">
                                <div class="bd-promotion-counter-number">
                                    <p><span class="counter">14</span>+</p>
                                </div>
                                <div class="bd-promotion-counter-text">
                                    <span>سنوات</span>
                                    <span>الخبره</span>
                                </div>
                            </div>
                            <div class="bd-promotion-counter">
                                <div class="bd-promotion-counter-number">
                                    <p><span><span class="counter">7</span>K</span>+</p>
                                </div>
                                <div class="bd-promotion-counter-text">
                                    <span>المتحقين</span>
                                    <span>كل سنة</span>
                                </div>
                            </div>
                            <div class="bd-promotion-counter">
                                <div class="bd-promotion-counter-number">
                                    <p><span class="counter">15</span>+</p>
                                </div>
                                <div class="bd-promotion-counter-text">
                                    <span>عدد </span>
                                    <span>المعلمين</span>
                                </div>
                            </div>
                        </div>
                        <div class="bd-promotion-list mb-50">
                            <ul>
                                <li>الصدارة في بناء جيل واع محب لوطنه ملتزم بعقيدتع مساير لتطورات عصره في ظل شراكة مجتمعية فاعلة</li>
                                <li>تنمية متكاملة للطالب ليجيد التعلم الذاتي بواسطة كادر تربوي متميز وبيئة تربوية امنه مزوده باحدث تقنيات العصؤ وخدمة مجتمعية نشطة</li>
                            </ul>
                        </div>
                        <div class="bd-promotion-btn-wrapper flex-wrap">
                            <div class="bd-promotion-btn">

                            </div>
                            <div class="bd-promotion-btn-2 bd-pulse-btn btn-2">
                                <a href="https://www.youtube.com/watch?v=l62SIcbCPwo" class="popup-video"><i
                             class="flaticon-play-button"></i> هنا مستقبل ابناكم</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
      <!-- promotion area end here  -->

      <!-- feature area start here-->
      <div class="bd-feature-area p-relative theme-bg pt-120 pb-120">
         <div class="bd-feature-bottom-shape">
            <img src="assets/img/shape/wave-section-break.png" alt="img not found!">
         </div>
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-lg-8 col-md-10">
                  <div class="bd-section-title-wrapper is-white text-center mb-55 wow fadeInUp" data-wow-duration="1s"
                     data-wow-delay=".3s">
                     <h2 class="bd-section-title mb-0"> قيمنا الأساسية</h2>
                     <p>في مدرسة جذور المستقبل، نؤمن بأن التعليم ليس مجرد تلقي المعلومات، بل هو رحلة استكشاف وتطوير مستمر للقدرات والمهارات. نعمل على خلق بيئة تعليمية ملهمة تعزز من تطوير التفكير النقدي والإبداعي لدى طلابنا، مع التركيز على بناء شخصياتهم وتنمية قيمهم الإنسانية.
                     </p>
                  </div>
               </div>
            </div>
            <div class="bd-feature-wrapper wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
               <div class="row">
                  <div class="col-12">
                     <ul class="feature">
                        <li class="feature-item">
                           <div class="bd-feature">
                              <div class="bd-feature-content">
                                 <div class="bd-feature-icon icon-1">
                                    <i class="flaticon-book"></i>
                                 </div>
                                 <h4 class="bd-feature-title">الاحترام</h4>
                                 <p>نحن نؤمن بأهمية الاحترام المتبادل بين جميع أفراد المجتمع المدرسي، من طلاب ومعلمين وأولياء أمور، حيث نعمل على تعزيز ثقافة التقدير والاحترام.

                                 </p>
                              </div>
                           </div>
                        </li>
                        <li class="feature-item">
                           <div class="bd-feature">
                              <div class="bd-feature-content">
                                 <div class="bd-feature-icon icon-2">
                                    <i class="flaticon-soup"></i>
                                 </div>
                                 <h4 class="bd-feature-title">التعليم الجيد </h4>
                                 <p>حن ملتزمون بتقديم تعليم عالي الجودة يساهم في تطوير مهارات ومعارف الطلاب، ويعدهم للمستقبل بكل تحدياته.</p>
                              </div>
                           </div>
                        </li>
                        <li class="feature-item">
                           <div class="bd-feature">
                              <div class="bd-feature-content">
                                 <div class="bd-feature-icon icon-3">
                                    <i class="flaticon-child"></i>
                                 </div>
                                 <h4 class="bd-feature-title">التعاون</h4>
                                 <p> نشجع على العمل الجماعي والشراكة بين جميع الأطراف، سواء داخل الفصل الدراسي أو في الأنشطة اللاصفية، لتحقيق الأهداف المشتركة.</p>
                              </div>
                           </div>
                        </li>
                        <li class="feature-item">
                           <div class="bd-feature first-item">
                              <div class="bd-feature-content">
                                 <div class="bd-feature-icon icon-4">
                                    <i class="flaticon-delivery"></i>
                                 </div>
                                 <h4 class="bd-feature-title">التفاني </h4>
                                 <p> نحن نكرس جهودنا لتحقيق النجاح الأكاديمي والشخصي لكل طالب، ونعمل على توفير الدعم اللازم لهم للوصول إلى إمكاناتهم الكاملة.

                                 </p>
                              </div>
                           </div>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- feature area end here-->

      <!-- promotion area start here  -->
      <section class="bd-promotion-area-2 pt-120 pb-60 fix">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-xl-6 col-lg-6">
                  <div class="bd-promotion bd-promotion-2 mb-60 wow fadeInLeft" data-wow-duration="1s"
                     data-wow-delay=".3s">
                     <div class="bd-section-title-wrapper mb-35">
                        <h2 class="bd-section-title mb-10">جو ودي لجميع الأطفال</h2>
                        <span class="mb-10 d-inline-block">
                            في مدرسة جذور المستقبل، نعمل على خلق بيئة تعليمية مريحة وودية لجميع الأطفال، حيث يشعر كل طالب بالأمان والقبول والدعم. نحن نؤمن بأن التعلم الأفضل يحدث عندما يكون الطلاب سعداء ومتحمسين للمشاركة في الأنشطة المدرسية. لهذا السبب، نضع جهدًا كبيرًا في بناء جو مشجع ومحفز يلبي احتياجات جميع الأطفال.
                        </span>

                     </div>
                     <div class="bd-promotion-list-2">
                        <ul>
                           <li>
                              <div class="bd-promotion-icon">
                                 <i class="flaticon-exclusive theme-bg-2"></i>
                              </div>
                              <span>جلسات يوم كامل
                            </span>
                           </li>
                           <li>
                              <div class="bd-promotion-icon">
                                 <i class="flaticon-whiteboard theme-bg"></i>
                              </div>
                              <span>فئات متنوعة
                            </span>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-xl-6 col-lg-6">
                  <div class="bd-promotion-thumb-wrapper mb-60 wow fadeInRight" data-wow-duration="1s"
                     data-wow-delay=".3s">
                     <div class="bd-promotion-thumb">
                        <div class="bd-promotion-thumb-mask p-relative">
                           <img src="assets/img/promotion/1.png" alt="Image not found">
                           <div class="panel-2 wow"></div>
                        </div>
                     </div>
                     <div class="bd-promotion-shape d-none d-lg-block">
                        <img src="assets/img/shape/tripple-line.png" alt="Shape not found">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- promotion area end here  -->

      <!-- testimonial area start here  -->
      <section class="bd-testimonial-area-2 pb-120 p-relative pt-120 theme-bg">
         <div class="bd-testimonial-bottom-shape">
            <img src="assets/img/shape/wave-section-break.png" alt="img not found!">
         </div>
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-lg-8">
                  <div class="bd-section-title-wrapper is-white z-index-1 p-relative text-center mb-55 wow fadeInUp"
                     data-wow-duration="1s" data-wow-delay=".3s">
                     <h2 class="bd-section-title mb-0">ماذا قالوا عنا أولياء الأمور
                    </h2>

                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-12">
                  <div class="bd-testimonial-active-2 swiper-container wow fadeInUp" data-wow-duration="1s"
                     data-wow-delay=".5s">
                     <div class="swiper-wrapper">
                        <div class="swiper-slide">
                           <div class="bd-testimonial-2 mr-5 theme-bg-6 mb-25">
                              <div class="bd-testimonial-rating mb-30">
                                 <a href="#"><i class="fas fa-star"></i></a>
                                 <a href="#"><i class="fas fa-star"></i></a>
                                 <a href="#"><i class="fas fa-star"></i></a>
                                 <a href="#"><i class="fas fa-star"></i></a>
                                 <a href="#"><i class="fas fa-star"></i></a>
                              </div>
                              <div class="bd-testimonial-content-2 mb-35">
                                 <p>منذ أن انضم ابني إلى مدرسة جذور المستقبل، لاحظت تحسنًا كبيرًا في مستواه الأكاديمي. البيئة التعليمية هنا مشجعة ومحفزة، والمعلمون يتمتعون بكفاءة عالية ويهتمون بالطلاب بشكل فردي.</p>
                              </div>
                              <div class="bd-testimonial-avatar d-flex align-items-center">
                                 <div class="bd-testimonial-avatar-thumb">
                                    <img src="assets/img/testimonials/1.png" alt="testimonial avatar">
                                 </div>
                                 {{-- <h6 class="bd-testimonial-avatar-title-2 mb-0">Norma J. Johnston</h6> --}}
                                 <div class="bd-testimonial-quote d-none d-sm-block clr-2">
                                    <i class="flaticon-quote"></i>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="bd-testimonial-2 mr-5 clr-3 theme-bg-7">
                              <div class="bd-testimonial-rating mb-30">
                                 <a href="#"><i class="fas fa-star"></i></a>
                                 <a href="#"><i class="fas fa-star"></i></a>
                                 <a href="#"><i class="fas fa-star"></i></a>
                                 <a href="#"><i class="fas fa-star"></i></a>
                                 <a href="#"><i class="fas fa-star"></i></a>
                              </div>
                              <div class="bd-testimonial-content-2 mb-35">
                                 <p>مدرسة جذور المستقبل ليست مجرد مدرسة، بل هي مجتمع يدعم ويشجع الأطفال على النمو والتعلم. أنا سعيدة جدًا بتقدم ابنتي الأكاديمي والشخصي هنا</p>

                              </div>
                              <div class="bd-testimonial-avatar d-flex align-items-center">
                                 <div class="bd-testimonial-avatar-thumb">
                                    <img src="assets/img/testimonials/2.png" alt="testimonial avatar">
                                 </div>
                                 {{-- <h6 class="bd-testimonial-avatar-title-2 mb-0">Robert M. Allen</h6> --}}
                                 <div class="bd-testimonial-quote d-none d-sm-block clr-1">
                                    <i class="flaticon-quote"></i>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- slider dots pagination -->
                  <div class="bd-testimonial-pagination-2 bd-dots-pagination justify-content-center wow fadeInUp"
                     data-wow-duration="1s" data-wow-delay=".3s"></div>
               </div>
            </div>
         </div>
      </section>
      <!-- testimonial area end here  -->

      {{-- <!-- teacher area start here  -->
      <section class="bd-teacher-area pt-120 pb-120">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-lg-8">
                  <div class="bd-section-title-wrapper text-center mb-55 wow fadeInUp" data-wow-duration="1s"
                     data-wow-delay=".3s">
                     <h2 class="bd-section-title mb-0">Our Best Teachers</h2>
                     <p>With the help of teachers and the environment as the third teacher, students<br> have
                        opportunities to confidently take risks.</p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-12">
                  <div class="bd-teacher-active swiper-container wow fadeInUp" data-wow-duration="1s"
                     data-wow-delay=".5s">
                     <div class="swiper-wrapper">
                        <div class="swiper-slide">
                           <div class="bd-teacher">
                              <a href="teacher-details.html">
                                 <div class="bd-teacher-thumb">
                                    <img src="assets/img/teacher/5.jpg" alt="Image not found">
                                 </div>
                              </a>
                              <div class="bd-teacher-content-wrapper">
                                 <div class="bd-teacher-content">
                                    <h4 class="bd-teacher-title"><a href="teacher-details.html">Emmy Jonas</a></h4>
                                    <span class="bd-teacher-des">Teacher</span>
                                 </div>
                                 <div class="bd-teacher-social">
                                    <ul>
                                       <li>
                                          <a target="_blank" href="https://www.facebook.com/"><i
                                                class="fa-brands fa-facebook-f"></i></a>
                                       </li>
                                       <li>
                                          <a target="_blank" href="https://twitter.com/"><i
                                                class="fa-brands fa-twitter"></i></a>
                                       </li>
                                       <li>
                                          <a target="_blank" href="https://www.youtube.com/"><i
                                                class="fa-brands fa-youtube"></i></a>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="bd-teacher">
                              <a href="teacher-details.html">
                                 <div class="bd-teacher-thumb">
                                    <img src="assets/img/teacher/3.jpg" alt="Image not found">
                                 </div>
                              </a>
                              <div class="bd-teacher-content-wrapper">
                                 <div class="bd-teacher-content">
                                    <h4 class="bd-teacher-title"><a href="teacher-details.html">Frances R.</a></h4>
                                    <span class="bd-teacher-des">Teacher</span>
                                 </div>
                                 <div class="bd-teacher-social">
                                    <ul>
                                       <li>
                                          <a target="_blank" href="https://www.facebook.com/"><i
                                                class="fa-brands fa-facebook-f"></i></a>
                                       </li>
                                       <li>
                                          <a target="_blank" href="https://twitter.com/"><i
                                                class="fa-brands fa-twitter"></i></a>
                                       </li>
                                       <li>
                                          <a target="_blank" href="https://www.youtube.com/"><i
                                                class="fa-brands fa-youtube"></i></a>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="bd-teacher">
                              <a href="teacher-details.html">
                                 <div class="bd-teacher-thumb">
                                    <img src="assets/img/teacher/7.jpg" alt="Image not found">
                                 </div>
                              </a>
                              <div class="bd-teacher-content-wrapper">
                                 <div class="bd-teacher-content">
                                    <h4 class="bd-teacher-title"><a href="teacher-details.html">Cecelia D.</a></h4>
                                    <span class="bd-teacher-des">Teacher</span>
                                 </div>
                                 <div class="bd-teacher-social">
                                    <ul>
                                       <li>
                                          <a target="_blank" href="https://www.facebook.com/"><i
                                                class="fa-brands fa-facebook-f"></i></a>
                                       </li>
                                       <li>
                                          <a target="_blank" href="https://twitter.com/"><i
                                                class="fa-brands fa-twitter"></i></a>
                                       </li>
                                       <li>
                                          <a target="_blank" href="https://www.youtube.com/"><i
                                                class="fa-brands fa-youtube"></i></a>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="bd-teacher">
                              <a href="teacher-details.html">
                                 <div class="bd-teacher-thumb">
                                    <img src="assets/img/teacher/2.jpg" alt="Image not found">
                                 </div>
                              </a>
                              <div class="bd-teacher-content-wrapper">
                                 <div class="bd-teacher-content">
                                    <h4 class="bd-teacher-title"><a href="teacher-details.html">Olinda L.</a></h4>
                                    <span class="bd-teacher-des">Teacher</span>
                                 </div>
                                 <div class="bd-teacher-social">
                                    <ul>
                                       <li>
                                          <a target="_blank" href="https://www.facebook.com/"><i
                                                class="fa-brands fa-facebook-f"></i></a>
                                       </li>
                                       <li>
                                          <a target="_blank" href="https://twitter.com/"><i
                                                class="fa-brands fa-twitter"></i></a>
                                       </li>
                                       <li>
                                          <a target="_blank" href="https://www.youtube.com/"><i
                                                class="fa-brands fa-youtube"></i></a>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>

                  <!-- teacher slider dots pagination  -->
                  <div class="bd-teacher-pagination bd-dots-pagination wow fadeInUp" data-wow-duration="1s"
                     data-wow-delay=".3s"></div>
               </div>
            </div>
         </div>
      </section>
      <!-- teacher area end here  --> --}}

      <!-- counter area start here  -->
      {{-- <div class="bd-counter-area-2 pb-90">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-lg-4 col-md-10 col-sm-10">
                  <div class="bd-counter-2 mb-30">
                     <div class="bd-counter-2-icon">
                        <i class="flaticon-user-interface"></i>
                     </div>
                     <div class="bd-counter-2-content">
                        <div class="bd-counter-2-number">
                           <span class="odometer" data-count="14">14</span><span>+</span>
                        </div>
                        <div class="bd-counter-2-text">
                           <span>years of
                              <br>experience</span>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-10 col-sm-10">
                  <div class="bd-counter-2 mb-30">
                     <div class="bd-counter-2-icon">
                        <i class="flaticon-reading"></i>
                     </div>
                     <div class="bd-counter-2-content">
                        <div class="bd-counter-2-number">
                           <span class="odometer" data-count="7">7</span><span>K+</span>
                        </div>
                        <div class="bd-counter-2-text">
                           <span>Students
                              <br>each year</span>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-10 col-sm-10">
                  <div class="bd-counter-2 mb-30">
                     <div class="bd-counter-2-icon">
                        <i class="flaticon-badge"></i>
                     </div>
                     <div class="bd-counter-2-content">
                        <div class="bd-counter-2-number">
                           <span class="odometer" data-count="15">15</span><span>+</span>
                        </div>
                        <div class="bd-counter-2-text">
                           <span>Award
                              <br> Wining</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div> --}}
      <!-- counter area end here  -->

      <!-- newsletter area start here  -->
      {{-- <section class="bd-newsletter-area">
         <div class="container">
            <div class="bd-newsletter pt-100 pb-100 theme-bg">
               <div class="bd-newsletter-bg" data-background="assets/img/bg/newsletter-bg.jpg"></div>
               <div class="row justify-content-center">
                  <div class="col-xl-8 col-lg-10">
                     <div class="bd-newsletter-content">
                        <div class="bd-section-title-wrapper text-center is-white mb-45">
                           <h2 class="bd-section-title mb-0">Join Our Newsletter</h2>
                           <p>Subscribe our newsletter to get our latest update & news.</p>
                        </div>
                        <div class="bd-newsletter-form">
                           <form action="#">
                              <div class="bd-newsletter-input">
                                 <input type="text" placeholder="your email">
                                 <button type="submit" class="bd-btn">
                                    <span class="bd-btn-inner">
                                       <span class="bd-btn-normal"><i
                                             class="fa-sharp fa-solid fa-paper-plane"></i>Subscribe now</span>
                                       <span class="bd-btn-hover"><i
                                             class="fa-sharp fa-solid fa-paper-plane"></i>Subscribe now</span>
                                    </span>
                                 </button>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section> --}}
      <!-- newsletter area end here  -->
   </main>
   <!-- main area end here  -->
@endsection





