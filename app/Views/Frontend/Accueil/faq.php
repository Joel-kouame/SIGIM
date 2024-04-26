<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
   <?= $this->include('partials/head-css'); ?>
</head>
<body>
    <!-- debut header -->
    <?= $this->include('partials/header'); ?>
    <!-- fin header -->

    <!-- debut body -->
    <div class="contact-main-wrapper">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="sb-contact-section">
              <nav aria-label="breadcrumb">
                <h4>Laissez nous vous aider !</h4>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?= base_url('/');?>">Accueil</a></li>
                  <li class="breadcrumb-item " aria-current="page">FAQ</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
	  </div>
    <!--- second tab start -->
  <div class="tab-two-wrapper padd-100 float-start w-100">
    <div class="section-heading">
      <h5 class="home1-section-heading2">Présentation de SIGIM</h5>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
          <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="pills-development-tab" data-bs-toggle="pill"
                data-bs-target="#pills-development" type="button" role="tab" aria-controls="pills-development"
                aria-selected="true">
                <i class="far fa-lightbulb"></i>
                SIGIM</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-performance-tab" data-bs-toggle="pill"
                data-bs-target="#pills-performance" type="button" role="tab" aria-controls="pills-performance"
                aria-selected="false">
                <i class="far fa-clock"></i>
                Avantage</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-analytics-tab" data-bs-toggle="pill" data-bs-target="#pills-analytics"
                type="button" role="tab" aria-controls="pills-analytics" aria-selected="false">
                <i class="fas fa-chart-pie"></i>
                Cible</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-concept-tab" data-bs-toggle="pill" data-bs-target="#pills-concept"
                type="button" role="tab" aria-controls="pills-concept" aria-selected="false">
                <i class="fas fa-crown"></i>
                Concept</button>
            </li>
          </ul>
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-development" role="tabpanel"
              aria-labelledby="pills-development-tab">
              <div class="tab-two-head">
                <div class="row align-items-center">
                  <div class="col-lg-4 col-md-12 col-12">
                    <div class="tab-two-img">
                      <img src="<?= base_url('asset/images/tab/tab-two.png');?>" alt="img">
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-12 col-12">
                    <div class="tab-two-head-wrapper">
                      <h2>We are idea driven, working with a strong focus on design and user experience.</h2>
                      
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-12 col-12">
                    <div class="tab-two-content">
                      <h6>Transform your ideas. We know that good design means good business.</h6>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, nostrud exercitation ullamco laboris.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="pills-performance" role="tabpanel" aria-labelledby="pills-performance-tab">
              <div class="tab-two-head">
                <div class="row align-items-center">
                  <div class="col-lg-4 col-md-12 col-12">
                    <div class="tab-two-img">
                      <img src="<?= base_url('asset/images/tab/tab-two.png');?>" alt="img">
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-12 col-12">
                    <div class="tab-two-head-wrapper">
                      <h2>We are idea driven, working with a strong focus on design and user experience.</h2>
                      
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-12 col-12">
                    <div class="tab-two-content">
                      <h6>Transform your ideas. We know that good design means good business.</h6>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, nostrud exercitation ullamco laboris.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="pills-analytics" role="tabpanel" aria-labelledby="pills-analytics-tab">
              <div class="tab-two-head">
                <div class="row align-items-center">
                  <div class="col-lg-4 col-md-12 col-12">
                    <div class="tab-two-img">
                      <img src="<?= base_url('asset/images/tab/tab-two.png');?>" alt="img">
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-12 col-12">
                    <div class="tab-two-head-wrapper">
                      <h2>We are idea driven, working with a strong focus on design and user experience.</h2>
                      
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-12 col-12">
                    <div class="tab-two-content">
                      <h6>Transform your ideas. We know that good design means good business.</h6>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, nostrud exercitation ullamco laboris.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="pills-concept" role="tabpanel" aria-labelledby="pills-concept-tab">
              <div class="tab-two-head">
                <div class="row align-items-center">
                  <div class="col-lg-4 col-md-12 col-12">
                    <div class="tab-two-img">
                      <img src="<?= base_url('asset/images/tab/tab-two.png');?>" alt="img">
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-12 col-12">
                    <div class="tab-two-head-wrapper">
                      <h2>We are idea driven, working with a strong focus on design and user experience.</h2>
                      
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-12 col-12">
                    <div class="tab-two-content">
                      <h6>Transform your ideas. We know that good design means good business.</h6>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, nostrud exercitation ullamco laboris.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--- second tab end -->

  <!--- third tab start -->
  <div class="tab-three-wrapper padd-100 float-start w-100">
    <div class="section-heading">
      <h5 class="home1-section-heading2">Fonctionnalités de SIGIM</h5>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
          <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab-three" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="pills-retina-tab" data-bs-toggle="pill" data-bs-target="#pills-retina"
                type="button" role="tab" aria-controls="pills-retina" aria-selected="true">Retina Ready</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-support-tab" data-bs-toggle="pill" data-bs-target="#pills-support"
                type="button" role="tab" aria-controls="pills-support" aria-selected="false">Free Support</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-design-tab" data-bs-toggle="pill" data-bs-target="#pills-design"
                type="button" role="tab" aria-controls="pills-design" aria-selected="false">Web Design</button>
            </li>
          </ul>
          <div class="tab-content" id="pills-tabContentthree">
            <div class="tab-pane fade show active" id="pills-retina" role="tabpanel" aria-labelledby="pills-retina-tab">
              <div>
                <div class="accordion3-wrapper tab-three-accordion tab-accordion float-start w-100">
                  <div class="container">
                    <div>
                      <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                          <div class="accordions" id="thirdAccordion">
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingSeven">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                  data-bs-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                                  Font Awesome Icons Used
                                </button>
                              </h2>
                              <div id="collapseSeven" class="accordion-collapse collapse show"
                                aria-labelledby="collapseSeven" data-bs-parent="#thirdAccordion">
                                <div class="accordion-body">
                                  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus quasi
                                    repellendus reiciendis
                                    temporibus, tenetur necessitatibus!</p>
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingEight">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                  data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                  iOS Development Benefits
                                </button>
                              </h2>
                              <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                                data-bs-parent="#thirdAccordion">
                                <div class="accordion-body">
                                  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus quasi
                                    repellendus reiciendis
                                    temporibus, tenetur necessitatibus!</p>
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingNine">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                  data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                  Visual Page Builder
                                </button>
                              </h2>
                              <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
                                data-bs-parent="#thirdAccordion">
                                <div class="accordion-body">
                                  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus quasi
                                    repellendus reiciendis
                                    temporibus, tenetur necessitatibus!</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="pills-support" role="tabpanel" aria-labelledby="pills-support-tab">
              <div>
                <div class="accordion1-main-wrapper tab-three-accordion float-start w-100">
                  <div class="container">
                    <div class="row justify-content-center">
                      <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="accordion" id="accordionExample">
                          <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                              <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <span>01</span>
                                Font Awesome Icons Used
                              </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                              data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus quasi repellendus
                                  reiciendis
                                  temporibus, tenetur necessitatibus!</p>
                              </div>
                            </div>
                          </div>
                          <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <span>02</span>
                                iOS Development Benefits
                              </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                              data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus quasi repellendus
                                  reiciendis
                                  temporibus, tenetur necessitatibus!</p>
                              </div>
                            </div>
                          </div>
                          <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <span>03</span>
                                Visual Page Builder
                              </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                              data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus quasi repellendus
                                  reiciendis
                                  temporibus, tenetur necessitatibus!</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="pills-design" role="tabpanel" aria-labelledby="pills-design-tab">
              <div>
                <div class="accordion4-wrapper tab-three-accordion float-start w-100">
                  <div class="container">
                    <div class="row justify-content-center">
                      <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="accordions" id="fourthAccordion">
                          <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTen">
                              <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTen" aria-expanded="true" aria-controls="collapseTen">
                                Font Awesome Icons Used
                              </button>
                            </h2>
                            <div id="collapseTen" class="accordion-collapse collapse show" aria-labelledby="headingTen"
                              data-bs-parent="#fourthAccordion">
                              <div class="accordion-body">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus quasi repellendus
                                  reiciendis
                                  temporibus, tenetur necessitatibus!</p>
                              </div>
                            </div>
                          </div>
                          <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne1">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne1" aria-expanded="false" aria-controls="collapseOne1">
                                iOS Development Benefits
                              </button>
                            </h2>
                            <div id="collapseOne1" class="accordion-collapse collapse" aria-labelledby="headingOne1"
                              data-bs-parent="#fourthAccordion">
                              <div class="accordion-body">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus quasi repellendus
                                  reiciendis
                                  temporibus, tenetur necessitatibus!</p>
                              </div>
                            </div>
                          </div>
                          <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne2">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne2" aria-expanded="false" aria-controls="collapseOne2">
                                Visual Page Builder
                              </button>
                            </h2>
                            <div id="collapseOne2" class="accordion-collapse collapse" aria-labelledby="headingOne2"
                              data-bs-parent="#fourthAccordion">
                              <div class="accordion-body">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus quasi repellendus
                                  reiciendis
                                  temporibus, tenetur necessitatibus!</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--- third tab end -->

  <!-- fourth button start -->
  <div class="tab-five-wrapper padd-100 float-start w-100">
    <div class="section-heading">
      <h5 class="home1-section-heading2">Abonnement et tarification</h5>
    </div>
    <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab-five" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="pills-consult-tab" data-bs-toggle="pill" data-bs-target="#pills-consult"
          type="button" role="tab" aria-controls="pills-consult" aria-selected="true">Turnaround Consulting</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="pills-planning-tab" data-bs-toggle="pill" data-bs-target="#pills-planning"
          type="button" role="tab" aria-controls="pills-planning" aria-selected="false">Strategic Planning</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="pills-investment-tab" data-bs-toggle="pill" data-bs-target="#pills-investment"
          type="button" role="tab" aria-controls="pills-investment" aria-selected="false">Investment Planning</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="pills-report-tab" data-bs-toggle="pill" data-bs-target="#pills-report"
          type="button" role="tab" aria-controls="pills-report" aria-selected="false">Expense Reporting</button>
      </li>
    </ul>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="tab-content" id="pills-tabContentfive">
            <div class="tab-pane fade show active" id="pills-consult" role="tabpanel"
              aria-labelledby="pills-consult-tab">
              <div class="tab-five-head">
                <div class="tab-five-img">
                  <img src="<?= base_url('asset/images/tab/tab-img-02.jpg');?>" alt="img">
                </div>
                <div class="tab-five-content">
                  <h2>Turnaround Consulting</h2>
                  <div class="tab-five-strategic">
                    <div class="tab-icon">
                      <i class="far fa-lightbulb"></i>
                    </div>
                    <div class="strategic-content">
                      <h5>Business consulting</h5>
                      <p>Lorem ipsum is simply dummy text of the printing typesetting ipsum been text.</p>
                    </div>
                  </div>
                  <div class="tab-five-strategic straregic-two">
                    <div class="tab-icon">
                      <i class="fas fa-globe"></i>
                    </div>
                    <div class="strategic-content">
                      <h5>Innovative solutions</h5>
                      <p>Lorem ipsum is simply dummy text of the printing typesetting ipsum been text.</p>
                    </div>
                  </div>
                  <a href="javascript:;">Discover Now</a>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="pills-planning" role="tabpanel" aria-labelledby="pills-planning-tab">
              <div class="tab-five-head">
                <div class="tab-five-img">
                  <img src="<?= base_url('asset/images/tab/tab-img-02.jpg');?>" alt="img">
                </div>
                <div class="tab-five-content">
                  <h2>Strategic Planning</h2>
                  <div class="tab-five-strategic">
                    <div class="tab-icon">
                      <i class="far fa-lightbulb"></i>
                    </div>
                    <div class="strategic-content">
                      <h5>Business consulting</h5>
                      <p>Lorem ipsum is simply dummy text of the printing typesetting ipsum been text.</p>
                    </div>
                  </div>
                  <div class="tab-five-strategic straregic-two">
                    <div class="tab-icon">
                      <i class="fas fa-globe"></i>
                    </div>
                    <div class="strategic-content">
                      <h5>Innovative solutions</h5>
                      <p>Lorem ipsum is simply dummy text of the printing typesetting ipsum been text.</p>
                    </div>
                  </div>
                  <a href="javascript:;">Discover Now</a>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="pills-investment" role="tabpanel" aria-labelledby="pills-investment-tab">
              <div class="tab-five-head">
                <div class="tab-five-img">
                  <img src="<?= base_url('asset/images/tab/tab-img-02.jpg');?>" alt="img">
                </div>
                <div class="tab-five-content">
                  <h2>Investment Planning</h2>
                  <div class="tab-five-strategic">
                    <div class="tab-icon">
                      <i class="far fa-lightbulb"></i>
                    </div>
                    <div class="strategic-content">
                      <h5>Business consulting</h5>
                      <p>Lorem ipsum is simply dummy text of the printing typesetting ipsum been text.</p>
                    </div>
                  </div>
                  <div class="tab-five-strategic straregic-two">
                    <div class="tab-icon">
                      <i class="fas fa-globe"></i>
                    </div>
                    <div class="strategic-content">
                      <h5>Innovative solutions</h5>
                      <p>Lorem ipsum is simply dummy text of the printing typesetting ipsum been text.</p>
                    </div>
                  </div>
                  <a href="javascript:;">Discover Now</a>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="pills-report" role="tabpanel" aria-labelledby="pills-report-tab">
              <div class="tab-five-head">
                <div class="tab-five-img">
                  <img src="<?= base_url('asset/images/tab/tab-img-02.jpg');?>" alt="img">
                </div>
                <div class="tab-five-content">
                  <h2>Expense Reporting</h2>
                  <div class="tab-five-strategic">
                    <div class="tab-icon">
                      <i class="far fa-lightbulb"></i>
                    </div>
                    <div class="strategic-content">
                      <h5>Business consulting</h5>
                      <p>Lorem ipsum is simply dummy text of the printing typesetting ipsum been text.</p>
                    </div>
                  </div>
                  <div class="tab-five-strategic straregic-two">
                    <div class="tab-icon">
                      <i class="fas fa-globe"></i>
                    </div>
                    <div class="strategic-content">
                      <h5>Innovative solutions</h5>
                      <p>Lorem ipsum is simply dummy text of the printing typesetting ipsum been text.</p>
                    </div>
                  </div>
                  <a href="javascript:;">Discover Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- fifth button end -->
    <!-- fin body -->

    <!--Footer section start-->
    <?= $this->include('partials/footer'); ?>
    <!--Footer esction end-->

    <!-- code js pour l'accordeon -->
    <script>
      function show(id, btnId) {
        var divs = document.getElementById('content').getElementsByTagName('div');
        for (var i = 0; i < divs.length; i++) {
          divs[i].style.display = 'none';
        }
        document.getElementById(id).style.display = 'block';
        localStorage.setItem('selectedCategory', id);

        var btns = document.getElementById('menu').getElementsByTagName('button');
        for (var i = 0; i < btns.length; i++) {
          btns[i].classList.remove('active');
        }
        document.getElementById(btnId).classList.add('active');
      }

      function toggle(id) {
        var element = document.getElementById(id);
        if (element.style.display === 'none') {
          element.style.display = 'block';
        } else {
          element.style.display = 'none';
        }
      }

      window.onload = function() {
        var selectedCategory = localStorage.getItem('selectedCategory');
        if (selectedCategory) {
          show(selectedCategory, 'btn' + selectedCategory.charAt(3));
        } else {
          show('cat1', 'btn1');
        }
      }
    </script>
    <!-- fin -->
</body>
</html>