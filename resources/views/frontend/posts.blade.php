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
                           <h1 class="bd-breadcrumb-title">News</h1>
                           <div class="bd-breadcrumb-list">
                              <span><a href="index.html"><i class="flaticon-hut"></i>Kindedo</a></span>
                              <span>News</span>
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
                  <div class="col-xxl-6 col-xl-5 col-lg-4">
                     <div class="bd-blog-search mb-60 wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">
                        <form action="#">
                           <label for="bd-blog-search-input-label">Search by Keyword</label>
                           <div class="bd-blog-search-input">
                              <input type="text" placeholder="Type here..." id="bd-blog-search-input-label">
                              <div class="bd-blog-search-submit">
                                 <button type="submit"><i class="flaticon-search"></i></button>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
                  <div class="col-xxl-6 col-xl-7 col-lg-8">
                     <div class="bd-blog-cat-menu-wrapper mb-60 wow fadeInRight" data-wow-duration="1s"
                        data-wow-delay=".3s">
                        <h5 class="bd-blog-cat-title">By Category</h5>
                        <div class="bd-blog-cat-menu bd-filter-btn">
                           <button data-filter=".c-1" class="active">Kindergarten (04)</button>
                           <button data-filter=".c-2">Daycare (02)</button>
                           <button data-filter=".c-3">Preschool (03)</button>
                           <button data-filter=".c-4">Children(04)</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row grid">
               <div class="col-xl-4 col-lg-6 col-md-6 grid-item c-1 c-3 c-4">
                  <div class="bd-blog mb-40 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                     <a href="news-details.html">
                        <div class="bd-blog-thumb">
                           <img src="assets/img/blog/6.jpg" alt="blog image">
                        </div>
                     </a>
                     <div class="bd-blog-content">
                        <div class="bd-blog-date">
                           <span>22 Jan 2022</span>
                        </div>
                        <div class="bd-blog-meta">
                           <span><i class="fas fa-user"></i> by <a href="news.html">Alex</a></span>
                           <span><i class="fa-solid fa-comment-dots"></i><a href="news-details.html">0
                                 Comments</a></span>
                        </div>
                        <h4 class="bd-blog-title"><a href="news-details.html">Tips to Understand Your Child
                              Better -
                              A
                              Guide!</a></h4>
                     </div>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-6 col-md-6 grid-item c-1 c-2 c-3 ">
                  <div class="bd-blog mb-40 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                     <a href="news-details.html">
                        <div class="bd-blog-thumb">
                           <img src="assets/img/blog/4.jpg" alt="blog image">
                        </div>
                     </a>
                     <div class="bd-blog-content">
                        <div class="bd-blog-date">
                           <span>22 Nov 2022</span>
                        </div>
                        <div class="bd-blog-meta">
                           <span><i class="fas fa-user"></i> by <a href="news.html">Alex</a></span>
                           <span><i class="fa-solid fa-comment-dots"></i><a href="news-details.html">04
                                 Comments</a></span>
                        </div>
                        <h4 class="bd-blog-title"><a href="news-details.html">Why Toys for Preschoolers are
                              Important ready setup</a></h4>
                     </div>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-6 col-md-6 grid-item c-1 c-2  c-4">
                  <div class="bd-blog mb-40 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                     <a href="news-details.html">
                        <div class="bd-blog-thumb">
                           <img src="assets/img/blog/9.jpg" alt="blog image">
                        </div>
                     </a>
                     <div class="bd-blog-content">
                        <div class="bd-blog-date">
                           <span>22 Dec 2022</span>
                        </div>
                        <div class="bd-blog-meta">
                           <span><i class="fas fa-user"></i> by <a href="news.html">Alex</a></span>
                           <span><i class="fa-solid fa-comment-dots"></i><a href="news-details.html">02
                                 Comments</a></span>
                        </div>
                        <h4 class="bd-blog-title"><a href="news-details.html">Which Toys are Best for Preschool
                              Kids in USA
                           </a></h4>
                     </div>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-6 col-md-6 grid-item c-1  c-3 c-4">
                  <div class="bd-blog mb-40 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                     <a href="news-details.html">
                        <div class="bd-blog-thumb">
                           <img src="assets/img/blog/1.jpg" alt="blog image">
                        </div>
                     </a>
                     <div class="bd-blog-content">
                        <div class="bd-blog-date">
                           <span>22 Nov 2022</span>
                        </div>
                        <div class="bd-blog-meta">
                           <span><i class="fas fa-user"></i> by <a href="news.html">Alex</a></span>
                           <span><i class="fa-solid fa-comment-dots"></i><a href="news-details.html">04
                                 Comments</a></span>
                        </div>
                        <h4 class="bd-blog-title"><a href="news-details.html">How to be Learn Map Glove Easy Way for
                              Garten</a></h4>
                     </div>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-6 col-md-6 grid-item  c-1 c-2 c-3 c-4">
                  <div class="bd-blog mb-40 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                     <a href="news-details.html">
                        <div class="bd-blog-thumb">
                           <img src="assets/img/blog/3.jpg" alt="blog image">
                        </div>
                     </a>
                     <div class="bd-blog-content">
                        <div class="bd-blog-date">
                           <span>22 Dec 2022</span>
                        </div>
                        <div class="bd-blog-meta">
                           <span><i class="fas fa-user"></i> by <a href="news.html">Alex</a></span>
                           <span><i class="fa-solid fa-comment-dots"></i><a href="news-details.html">02
                                 Comments</a></span>
                        </div>
                        <h4 class="bd-blog-title"><a href="news-details.html">8 Ways To Build Love for Reading In Your
                              Child
                           </a></h4>
                     </div>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-6 col-md-6 grid-item c-1 c-2 c-3 ">
                  <div class="bd-blog mb-40 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                     <a href="news-details.html">
                        <div class="bd-blog-thumb">
                           <img src="assets/img/blog/7.jpg" alt="blog image">
                        </div>
                     </a>
                     <div class="bd-blog-content">
                        <div class="bd-blog-date">
                           <span>22 Jan 2022</span>
                        </div>
                        <div class="bd-blog-meta">
                           <span><i class="fas fa-user"></i> by <a href="news.html">Alex</a></span>
                           <span><i class="fa-solid fa-comment-dots"></i><a href="news-details.html">0
                                 Comments</a></span>
                        </div>
                        <h4 class="bd-blog-title"><a href="news-details.html">How to Prepare Your Child for Preschool: 8
                              Steps</a></h4>
                     </div>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-6 col-md-6 grid-item c-1 c-2  c-4">
                  <div class="bd-blog mb-40 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                     <a href="news-details.html">
                        <div class="bd-blog-thumb">
                           <img src="assets/img/blog/2.jpg" alt="blog image">
                        </div>
                     </a>
                     <div class="bd-blog-content">
                        <div class="bd-blog-date">
                           <span>22 Jan 2022</span>
                        </div>
                        <div class="bd-blog-meta">
                           <span><i class="fas fa-user"></i> by <a href="news.html">Alex</a></span>
                           <span><i class="fa-solid fa-comment-dots"></i><a href="news-details.html">0
                                 Comments</a></span>
                        </div>
                        <h4 class="bd-blog-title"><a href="news-details.html">How to Prepare Your Child for Preschool: 8
                              Steps
                           </a></h4>
                     </div>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-6 col-md-6 grid-item c-1  c-3 c-4">
                  <div class="bd-blog mb-40 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                     <a href="news-details.html">
                        <div class="bd-blog-thumb">
                           <img src="assets/img/blog/8.jpg" alt="blog image">
                        </div>
                     </a>
                     <div class="bd-blog-content">
                        <div class="bd-blog-date">
                           <span>22 Dec 2022</span>
                        </div>
                        <div class="bd-blog-meta">
                           <span><i class="fas fa-user"></i> by <a href="news.html">Alex</a></span>
                           <span><i class="fa-solid fa-comment-dots"></i><a href="news-details.html">02
                                 Comments</a></span>
                        </div>
                        <h4 class="bd-blog-title"><a href="news-details.html">How does Preschool Help in Children
                              Deavelopment

                           </a></h4>
                     </div>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-6 col-md-6 grid-item c-2 c-3 c-4 c-1">
                  <div class="bd-blog mb-40 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                     <a href="news-details.html">
                        <div class="bd-blog-thumb">
                           <img src="assets/img/blog/5.jpg" alt="blog image">
                        </div>
                     </a>
                     <div class="bd-blog-content">
                        <div class="bd-blog-date">
                           <span>22 Nov 2022</span>
                        </div>
                        <div class="bd-blog-meta">
                           <span><i class="fas fa-user"></i> by <a href="news.html">Alex</a></span>
                           <span><i class="fa-solid fa-comment-dots"></i><a href="news-details.html">04
                                 Comments</a></span>
                        </div>
                        <h4 class="bd-blog-title"><a href="news-details.html">How to Start Your Own Kindedo Preschool in
                              USA
                           </a></h4>
                     </div>
                  </div>
               </div>
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
      <section class="bd-newsletter-area">
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
      </section>
      <!-- newsletter area end here  -->
   </main>
   <!-- main area end here  -->
    
@endsection





   