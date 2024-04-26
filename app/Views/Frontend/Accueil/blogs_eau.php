<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
   <?= $this->include('partials/head-css'); ?>
</head>
<body>
    <!-- debut header -->
    <?= $this->include('partials/header'); ?>
    <!-- fin header -->
   <!-- breadcrumb  start-->
   <div class="contact-main-wrapper">
      <div class="container">
         <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
               <div class="sb-contact-section">
                  <nav aria-label="breadcrumb">
                     <h4>Blog Single Slider</h4>
                     <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url('/') ?>">Accueil</a></li>
                        <li class="breadcrumb-item " aria-current="page">Blog Single Slider</li>
                     </ol>
                  </nav>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- breadcrumb  end-->
   <!-- gallery main section start-->
   <div class="blog-page-main-container float_left ptb-100">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12 col-12">
               <div class="blog-single-main-page">
                  <div class="blog-box p-0">
                     <div class="img-icon">
                        <div class="owl-carousel owl-theme">
                           <div class="item">
                              <img src="../asset/images/blog-singleimg.png" alt="img">
                           </div>
                           <div class="item">
                              <img src="../asset/images/blog-singleimg.png" alt="img">
                           </div>
                           <div class="item">
                              <img src="../asset/images/blog-singleimg.png" alt="img">
                           </div>
                           <div class="item">
                              <img src="../asset/images/blog-singleimg.png" alt="img">
                           </div>
                        </div>
                        <p class="text-center">08<br>
                           july
                        </p>
                     </div>
                     <div class="blog-content">
                        <h3 class="p-0"><a href="blog-single.html">Spending More and Getting Less
                              for Health Care</a>
                        </h3>
                        <ul>
                           <li><a href="javascript:;"><i class="far fa-user"></i> by John Doe</a>
                           </li>
                           <li><a href="javascript:;"><i class="far fa-comments"></i>Comments 02
                              </a>
                           </li>
                        </ul>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                           been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                           galley of type and scrambled it to make a type specimen book. It has survived not only five
                           centuries, but also the leap into electronic typesetting.</p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                           been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                           galley of type and scrambled it to make a type specimen book.</p>
                        <p>It has survived not only five centuries, but also the leap into electronic typesetting,
                           remaining essentially unchanged. Lorem Ipsum is simply dummy text of the printing and
                           typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                           c1500s. When an unknown printer took a galley of type and scrambled it to make a type
                           specimen book. It has survived not only five centuries, but also the leap into electronic
                           typesetting, remaining essentially unchanged.</p>
                        <div class="quote-sec">
                           <p>" The Education of Tomorrow, Rooted in Tradition Invite You
                              Learning Management System"
                           </p>
                           <h6>- by Jhon Doe</h6>
                           <img src="../asset/images/quote.png" alt="img">
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                           been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                           galley of type and scrambled it to make a type specimen book. It has survived not only five
                           centuries, but also the leap into electronic typesetting.</p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                           been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                           galley of type and scrambled it to make a type specimen book.</p>
                        <div class="tag-with-media">
                           <div class="d-flex justfiy-content-start align-items-baseline resp-disply">
                              <p class="m-0"><span class="p-2"><i class="fas fa-tag"></i></span>Tags:</p>
                              <ul class="border-none tag-buttons">
                                 <li class="p-2"><a href="javascript:;">Medical</a></li>
                                 <li class="p-2"><a href="javascript:;">Health</a></li>
                                 <li class="p-2"><a href="javascript:;">Cardiology</a></li>
                              </ul>
                           </div>
                           <div class="social">
                              <ul class="d-flex justfiy-content-end align-items-baseline">
                                 <li><a href="javascript:;"><i class="fab fa-facebook-f icon-color"></i></a></li>
                                 <li><a href="javascript:;"><i class="fab fa-twitter icon-color"></i></a></li>
                                 <li><a href="javascript:;"><i class="fab fa-instagram icon-color"></i></a></li>
                                 <li><a href="javascript:;"><i class="fab fa-pinterest-p icon-color"></i></a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="admin-main">
                        <div>
                           <a href="javascript:;"><img src="../asset/images/admin.png" alt="img"></a>
                        </div>
                        <div class="admin-about">
                           <a href="javascript:;" class="h6">About Admin: <span> Jhon Doe</span></a>
                           <a href="javascript:;" class="more-btn">more</a>
                           <p>Porttitor fringilla vestibulum. Phasellus curs our tinnt nulla, ut ttis augue finibus ac.
                              Vivamus elementum enim rhoncus. </p>
                        </div>
                     </div>
                     <div class="comment-section">
                        <h4 class="mb-5">Comments02</h4>
                        <ul class="d-flex align-items-center comment-border">
                           <li class="me-4">
                              <img src="../asset/images/coment-img.jpg" alt="img">
                           </li>
                           <li>
                              <h5>Jhon Doe
                                 <span>Fab 1, 2022 - <a href="javascript:;">Reply</a> </span>
                              </h5>
                              <p>Integer porttitor fringilla vestibulum. Phasellus curs our tinnt nulla, ut mattis
                                 augue finibus ac. Vivamus elementum enim ac enim ultrices rhoncus.
                              </p>
                           </li>
                        </ul>
                        <ul class="d-flex align-items-center">
                           <li class="me-4">
                              <img src="../asset/images/coment-img2.jpg" alt="img">
                           </li>
                           <li>
                              <h5>Serina Smith
                                 <span>Fab 1, 2022 - <a href="javascript:;">Reply</a> </span>
                              </h5>
                              <p>Integer porttitor fringilla vestibulum. Phasellus curs our tinnt nulla, ut mattis
                                 augue finibus ac. Vivamus elementum enim ac enim ultrices rhoncus.
                              </p>
                           </li>
                        </ul>
                     </div>
                     <div class="form-section mb-4">
                        <h6>Leave a Comment</h6>
                        <div class="form-input plr-15">
                           <div class="row ">
                              <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                 <div class="input-group flex-nowrap">
                                    <input type="text" class="form-control" placeholder="Name" aria-label="Username">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                 </div>
                              </div>
                              <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                 <div class="input-group flex-nowrap resp-mt-20">
                                    <input type="email" class="form-control" placeholder="Email" aria-label="Username">
                                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                 </div>
                              </div>
                              <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                 <textarea class="form-control mt-4 ps-3" id="exampleFormControlTextarea1" rows="3"
                                    placeholder="Enter Text"></textarea>
                                 <div class="mt-2 checkbox-wrap">
                                    <input type="checkbox" name="select" id="comment">
                                    <label for="comment">
                                       By using this form you agree with the storage and handling of your
                                          data by this website Privacy Policy.
                                    </label>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                              <a href="javascript:;" class="button-btn mt-4">Post Comment
                                 <span><i class="fas fa-angle-double-right"></i></span>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-12">
               <div class="blog-right-sidebar resp-30">
                  <div class="form-section m-0 ">
                     <h6>Search Keyword</h6>
                     <section>
                        <div class="input-group ">
                           <input type="search" class="form-control " placeholder="Search"
                              aria-describedby="basic-addon2">
                           <div class="input-group-append">
                              <span class="input-group-text" id="basic-addon2"><i class="fas fa-paper-plane"></i></span>
                           </div>
                        </div>
                     </section>
                  </div>
                  <div class="form-section ">
                     <h6>Recents Posts</h6>
                     <section>
                        <div class="post-main-container hr-line">
                           <div class="post-image me-3">
                              <img src="../asset/images/recent-post1.jpg" alt="img">
                           </div>
                           <div class="post-container">
                              <a href="blog-single.html" class="h6">Should Medical School
                                 Last Just 3 Years?</a>
                              <p>28 May 2022</p>
                           </div>
                        </div>
                        <div class="post-main-container hr-line">
                           <div class="post-image me-3">
                              <img src="../asset/images/recent-post2.jpg" alt="img">
                           </div>
                           <div class="post-container">
                              <a href="blog-single.html" class="h6">Should Medical School
                                 Last Just 3 Years?</a>
                              <p>28 May 2022</p>
                           </div>
                        </div>
                        <div class="post-main-container hr-line">
                           <div class="post-image me-3">
                              <img src="../asset/images/recent-post3.jpg" alt="img">
                           </div>
                           <div class="post-container">
                              <a href="blog-single.html" class="h6">Should Medical School
                                 Last Just 3 Years?</a>
                              <p>28 May 2022</p>
                           </div>
                        </div>
                        <div class="post-main-container m-0">
                           <div class="post-image me-3">
                              <img src="../asset/images/recent-post4.jpg" alt="img">
                           </div>
                           <div class="post-container">
                              <a href="blog-single.html" class="h6">Should Medical School
                                 Last Just 3 Years?</a>
                              <p>28 May 2022</p>
                           </div>
                        </div>
                     </section>
                  </div>
                  <div class="form-section ">
                     <h6>Categories</h6>
                     <section>
                        <ul class="categories">
                           <li>
                              <span><i class="fas fa-angle-double-right"></i></span>
                              <a href="javascript:;">Cardiology</a>
                           </li>
                           <li><span><i class="fas fa-angle-double-right"></i></span>
                              <a href="javascript:;">Food</a>
                           </li>
                           <li><span><i class="fas fa-angle-double-right"></i></span>
                              <a href="javascript:;">Health</a>
                           </li>
                           <li><span><i class="fas fa-angle-double-right"></i></span>
                              <a href="javascript:;">Hospital</a>
                           </li>
                           <li><span><i class="fas fa-angle-double-right"></i></span>
                              <a href="javascript">Medical</a>
                           </li>
                           <li><span><i class="fas fa-angle-double-right"></i></span>
                              <a href="javascript::">Cancer Cure</a>
                           </li>
                           <li><span><i class="fas fa-angle-double-right"></i></span>
                              <a href="javascript:;">Blood Bank</a>
                           </li>
                           <li><span><i class="fas fa-angle-double-right"></i></span>
                              <a href="javascript:;">Telented Doctors</a>
                           </li>
                        </ul>
                     </section>
                  </div>
                  <div class="form-section ">
                     <h6>Instagram</h6>
                     <section>
                        <ul class="insta-post">
                           <li>
                              <img src="../asset/images/insta-img1.jpg" alt="img">
                           </li>
                           <li>
                              <img src="../asset/images/insta-post2.jpg" alt="img">
                           </li>
                           <li>
                              <img src="../asset/images/insta-post3.jpg" alt="img">
                           </li>
                           <li>
                              <img src="../asset/images/insta-post4.jpg" alt="img">
                           </li>
                           <li>
                              <img src="../asset/images/insta-post5.jpg" alt="img">
                           </li>
                           <li>
                              <img src="../asset/images/insta-post6.jpg" alt="img">
                           </li>
                           <li>
                              <img src="../asset/images/insta-post7.jpg" alt="img">
                           </li>
                           <li>
                              <img src="../asset/images/insta-post8.jpg" alt="img">
                           </li>
                        </ul>
                     </section>
                  </div>
                  <div class="form-section ">
                     <h6>Categories</h6>
                     <section>
                        <ul class="categories">
                           <li><span><i class="fas fa-angle-double-right"></i></span><a href="javascript:;">December
                                 2022</a></li>
                           <li><span><i class="fas fa-angle-double-right"></i></span><a href="javascript:;">January
                                 2022</a></li>
                           <li><span><i class="fas fa-angle-double-right"></i></span><a href="javascript:;">February
                                 2022</a></li>
                           <li><span><i class="fas fa-angle-double-right"></i></span><a href="javascript:;">March
                                 2022</a></li>
                           <li><span><i class="fas fa-angle-double-right"></i></span><a href="javascript:;">April
                                 2022</a></li>
                           <li><span><i class="fas fa-angle-double-right"></i></span><a href="javascript:;">May 2022</a>
                           </li>
                           <li><span><i class="fas fa-angle-double-right"></i></span><a href="javascript:;">June
                                 2022</a></li>
                        </ul>
                     </section>
                  </div>
                  <div class="form-section">
                     <h6>Tags</h6>
                     <section>
                        <ul class="tags">
                           <li><a href="javascript:;">Cardiology</a></li>
                           <li><a href="javascript:;">Food</a></li>
                           <li><a href="javascript:;">Health</a></li>
                           <li><a href="javascript:;">Medical</a></li>
                           <li><a href="javascript:;">Blood Bank</a></li>
                        </ul>
                     </section>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- gallery main section end -->
   <!--Footer section start-->
   <?= $this->include('partials/footer'); ?>
    <!--Footer esction end-->
    <script>
        function actionToggleOne() {
            let action = document.querySelector('.contact-action');
            action.classList.toggle('open1');
        }
        function actionToggleTwo() {
            let action = document.querySelector('.action-1');
            action.classList.toggle('open2');
        }
        function actionToggleThree() {
            let action = document.querySelector('.action-2');
            action.classList.toggle('open3');
        }
        function actionToggleFour() {
            let action = document.querySelector('.action-3');
            action.classList.toggle('open4');
        }
    </script>
</body>

</html>