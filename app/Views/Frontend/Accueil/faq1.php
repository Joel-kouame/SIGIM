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
    <!-- contact us page start -->
    <!-- breadcrumb  start-->
    <div class="contact-main-wrapper">
      <div class="container">
         <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
               <div class="sb-contact-section">
                  <nav aria-label="breadcrumb">
                     <h4>Comment pouvons-nous vous aider ?</h4>
                     <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url('/') ?>">Accueil</a></li>
                        <li class="breadcrumb-item " aria-current="page">FAQ</li>
                     </ol>
                  </nav>
               </div>
            </div>
         </div>
      </div>
    </div>
    <!-- QUESTION -->

    <div class="tab-three-wrapper padd-100 float-start w-100">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab-three" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-retina-tab" data-bs-toggle="pill" data-bs-target="#pills-retina">

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
            <!-- test -->
            <div class="faqsss">
              <ul class="nav nav-pills mb-3 justify-content-center testjo" id="pills-tab-three" role="tablist">
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

                <button class="nav-link btnfaq active" id="pills-retina-tab" data-bs-toggle="pill" data-bs-target="#pills-retina"

                  type="button" role="tab" aria-controls="pills-retina" aria-selected="true">Introduction à SIGIM</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-support-tab" data-bs-toggle="pill" data-bs-target="#pills-support"
                  type="button" role="tab" aria-controls="pills-support" aria-selected="false">Rendez-vous</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-Carnet-tab" data-bs-toggle="pill" data-bs-target="#pills-Carnet"
                  type="button" role="tab" aria-controls="pills-Carnet" aria-selected="false">Carnet Numérique</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-Comptes-tab" data-bs-toggle="pill" data-bs-target="#pills-Comptes"
                  type="button" role="tab" aria-controls="pills-Comptes" aria-selected="false">Comptes & Confidentialité</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-design-tab" data-bs-toggle="pill" data-bs-target="#pills-design"
                  type="button" role="tab" aria-controls="pills-design" aria-selected="false">Sécurité</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-technique-tab" data-bs-toggle="pill" data-bs-target="#pills-technique"
                  type="button" role="tab" aria-controls="pills-technique" aria-selected="false">Support Technique</button>
              </li>
            </ul>
            <div class="tab-content" id="pills-tabContentthree">
              <div class="tab-pane fade show active" id="pills-retina" role="tabpanel" aria-labelledby="pills-retina-tab">
                <div>
                  <div class="accordion3-wrapper tab-three-accordion tab-accordion float-start w-100">
                    <div class="container">
                      <div>
                        <div class="row justify-content-center">
                          <div class="col-lg-4 col-md-12 col-12">
                            <div class="tab-two-img">
                              <img src="asset/images/tab/tab-two.png" alt="img" height="auto" width="500">
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="accordions" id="thirdAccordion">
                              <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSeven">
                                  <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                                    Qu'est-ce que SIGIM et comment fonctionne-t-il ?
                                  </button>
                                </h2>
                                <div id="collapseSeven" class="accordion-collapse collapse show"
                                  aria-labelledby="collapseSeven" data-bs-parent="#thirdAccordion">
                                  <div class="accordion-body" style="padding: 20px">
                                    <p>
                                      <b class="text-white">SIGIM (Système de Gestion des Informations Médicales) est une plateforme web et mobile innovante conçue pour faciliter la gestion des dossiers médicaux. Elle permet aux professionnels de la santé d'accéder de manière sécurisée et centralisée aux informations médicales des patients. SIGIM simplifie la coordination des soins en offrant une solution intégrée pour la gestion efficace des dossiers médicaux.</b></p>
                                  </div>
                                </div>
                              </div>
                              <div class="accordion-item">
                                <h2 class="accordion-header" id="headingEight">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                    Quels sont les avantages principaux de l'utilisation de SIGIM ?
                                  </button>
                                </h2>
                                <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                                  data-bs-parent="#thirdAccordion">
                                  <div class="accordion-body" style="padding: 20px">
                                    <p>Les avantages de SIGIM incluent une meilleure accessibilité aux informations médicales, une réduction des erreurs administratives, une coordination optimale des soins entre les professionnels de la santé, la possibilité de prendre des rendez-vous en ligne, et un carnet numérique pour les patients afin de faciliter le suivi de leur santé.</p>
                                  </div>
                                </div>
                              </div>
                              <div class="accordion-item">
                                <h2 class="accordion-header" id="headingNine">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                    Est-ce que SIGIM propose une version mobile de sa plateforme ?
                                  </button>
                                </h2>
                                <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
                                  data-bs-parent="#thirdAccordion">
                                  <div class="accordion-body" style="padding: 20px">
                                    <p>Oui, SIGIM est disponible en version mobile, offrant aux professionnels de la santé et aux patients la flexibilité d'accéder aux informations médicales et de gérer les rendez-vous depuis leurs appareils mobiles.</p>
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
                        <div class="col-lg-4 col-md-12 col-12">
                          <div class="tab-two-img">
                            <img src="asset/images/tab/tab-two.png" alt="img" height="auto" width="500">
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                          <div class="accordions" id="fourthAccordion">
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingTen">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                  data-bs-target="#collapseTen" aria-expanded="true" aria-controls="collapseTen">
                                  Comment puis-je prendre un rendez-vous en ligne avec SIGIM ?
                                </button>
                              </h2>
                              <div id="collapseTen" class="accordion-collapse collapse show" aria-labelledby="headingTen"
                                data-bs-parent="#fourthAccordion">
                                <div class="accordion-body" style="padding: 20px">
                                  <p>Pour prendre un rendez-vous en ligne avec SIGIM, suivez ces étapes :</p>
                                  <ol>
                                    <li>Connectez-vous à votre compte SIGIM.</li>
                                    <li>Accédez à la section "Prise de rendez-vous" dans le menu principal.</li>
                                    <li>Remplisser le formulaire de la prise de Rendez-vous.</li>
                                    <li>Confirmez votre rendez-vous et recevez une confirmation instantanée.</li>
                                  </ol>
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingOne1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                  data-bs-target="#collapseOne1" aria-expanded="false" aria-controls="collapseOne1">
                                  Comment la prise de rendez-vous en ligne est-elle sécurisée sur SIGIM ?
                                </button>
                              </h2>
                              <div id="collapseOne1" class="accordion-collapse collapse" aria-labelledby="headingOne1"
                                data-bs-parent="#fourthAccordion">
                                <div class="accordion-body" style="padding: 20px">
                                  <p>La prise de rendez-vous en ligne sur SIGIM est sécurisée grâce à des protocoles de cryptage avancés qui garantissent la confidentialité de vos informations médicales. Les créneaux horaires disponibles sont également gérés de manière sécurisée pour éviter toute interférence non autorisée.</p>
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingOne3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                  data-bs-target="#collapseOne3" aria-expanded="false" aria-controls="collapseOne3">
                                  Comment puis-je annuler un rendez-vous pris en ligne sur SIGIM ?
                                </button>
                              </h2>
                              <div id="collapseOne3" class="accordion-collapse collapse" aria-labelledby="headingOne3"
                                data-bs-parent="#fourthAccordion">
                                <div class="accordion-body" style="padding: 20px">
                                  <p>Pour annuler un rendez-vous pris en ligne sur SIGIM :</p>
                                  <ol>
                                    <li>Connectez-vous à votre compte.</li>
                                    <li>Accédez à la section "Mes Rendez-vous."</li>
                                    <li>Sélectionnez le rendez-vous à annuler et suivez les étapes pour confirmer l'annulation.</li>
                                  </ol>
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingOne2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                  data-bs-target="#collapseOne2" aria-expanded="false" aria-controls="collapseOne2">
                                  Est-ce que les rendez-vous en ligne sont disponibles pour tous les types de consultations médicales sur SIGIM?
                                </button>
                              </h2>
                              <div id="collapseOne2" class="accordion-collapse collapse" aria-labelledby="headingOne2"
                                data-bs-parent="#fourthAccordion">
                                <div class="accordion-body" style="padding: 20px">
                                  <p>Oui, la prise de rendez-vous en ligne est généralement disponible pour une gamme variée de consultations médicales, couvrant des spécialités diverses. Cependant, la disponibilité peut dépendre de la politique spécifique de chaque professionnel de la santé.</p>
>>>>>>> origin/master
                                </div>
                              </div>
                            </div>
<<<<<<< HEAD
                            <div class="accordion-item">
=======
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
<<<<<<< HEAD
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

              <!--          <div class="accordion-item">

                              <h2 class="accordion-header" id="headingOne2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                  data-bs-target="#collapseOne2" aria-expanded="false" aria-controls="collapseOne2">
                                  Quelles fonctionnalités offre le carnet numérique de SIGIM pour les patients ?
                                </button>
                              </h2>
                              <div id="collapseOne4" class="accordion-collapse collapse" aria-labelledby="headingOne2"
                                data-bs-parent="#fourthAccordion">
                                <div class="accordion-body" style="padding: 20px">
                                  <p>Le carnet numérique de SIGIM offre aux patients plusieurs fonctionnalités, notamment :</p>
                                  <ol>
                                    <li>Consultation des résultats d'analyses et de diagnostics.</li>
                                    <li>Suivi de l'historique des consultations médicales.</li>
                                    <li>Enregistrement des symptômes et observations personnelles pour partager avec les professionnels de la santé.</li>
                                    <li>Accès aux informations de prescription et rappels de médicaments.</li>
                                  </ol>
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

              <div class="tab-pane fade" id="pills-Carnet" role="tabpanel" aria-labelledby="pills-Carnet-tab">
                <div>
                  <div class="accordion1-main-wrapper tab-three-accordion float-start w-100">
                    <div class="container">
                      <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-12 col-12">
                          <div class="tab-two-img">
                            <img src="asset/images/tab/tab-two.png" alt="img" height="auto" width="500">
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                          <div class="accordions" id="fourthAccordion">
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingOne3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                  data-bs-target="#collapseOne3" aria-expanded="false" aria-controls="collapseOne3">
                                  C'est quoi un Carnet numerique ?
                                </button>
                              </h2>
                              <div id="collapseOne3" class="accordion-collapse collapse" aria-labelledby="headingOne3" data-bs-parent="#fourthAccordion">
                                <div class="accordion-body" style="padding: 20px">
                                  <p>un carnet numérique est une fonctionnalité qui permet aux utilisateurs, notamment aux patients, de gérer et de consulter électroniquement divers aspects de leur dossier médical. Il s'agit d'une interface numérique centralisée offrant un accès personnalisé à des informations de santé spécifiques</p>
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingTen">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                  data-bs-target="#collapseTen" aria-expanded="true" aria-controls="collapseTen">
                                  Quelles fonctionnalités offre le carnet numérique de SIGIM pour les patients ?
                                </button>
                              </h2>
                              <div id="collapseTen" class="accordion-collapse collapse show" aria-labelledby="headingTen"
                                data-bs-parent="#fourthAccordion">
                                <div class="accordion-body" style="padding: 20px">
                                  <p>Le carnet numérique de SIGIM offre aux patients plusieurs fonctionnalités, notamment :</p>
                                  <ol>
                                    <li>Consultation des résultats d'analyses et de diagnostics.</li>
                                    <li>Suivi de l'historique des consultations médicales.</li>
                                    <li>Enregistrement des symptômes et observations personnelles pour partager avec les professionnels de la santé.</li>
                                    <li>Accès aux informations de prescription et rappels de médicaments.</li>
                                  </ol>
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingOne1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                  data-bs-target="#collapseOne1" aria-expanded="false" aria-controls="collapseOne1">
                                  Est-il possible de partager des informations médicales entre les professionnels de la santé sur SIGIM?
                                </button>
                              </h2>
                              <div id="collapseOne1" class="accordion-collapse collapse" aria-labelledby="headingOne1"
                                data-bs-parent="#fourthAccordion">
                                <div class="accordion-body" style="padding: 20px">
                                 <p>Oui, SIGIM facilite le partage sécurisé d'informations médicales entre les professionnels de la santé. Pour partager des informations :</p>
                                  <ol>
                                    <li>Sélectionnez le professionnel de la santé avec lequel vous souhaitez partager les données.</li>
                                    <li>Accordez les autorisations nécessaires pour le partage.</li>
                                    <li>Les informations médicales seront accessibles au professionnel de la santé concerné.</li>
                                  </ol>
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
                        <div class="col-lg-4 col-md-12 col-12">
                          <div class="tab-two-img">
                            <img src="asset/images/tab/tab-two.png" alt="img" height="auto" width="500">
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                          <div class="accordions" id="fourthAccordion">
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingTen">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                  data-bs-target="#collapseTen" aria-expanded="true" aria-controls="collapseTen">
                                  Quelles sont les options de récupération de compte si j'oublie mon mot de passe ?
                                </button>
                              </h2>
                              <div id="collapseTen" class="accordion-collapse collapse show" aria-labelledby="headingTen"
                                data-bs-parent="#fourthAccordion">
                                <div class="accordion-body" style="padding: 20px">
                                  <p>Si vous oubliez votre mot de passe :</p>
                                  <ol>
                                    <li>Sur la page de connexion, cliquez sur "Mot de passe oublié" ou une option similaire.</li>
                                    <li>Suivez les instructions pour confirmer votre identité, généralement en fournissant des informations supplémentaires ou en recevant un lien de réinitialisation par e-mail ou SMS.</li>
                                    <li>Utilisez le lien de réinitialisation pour créer un nouveau mot de passe sécurisé.</li>
                                  </ol>
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingOne1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                  data-bs-target="#collapseOne1" aria-expanded="false" aria-controls="collapseOne1">
                                  Comment SIGIM protège-t-il contre les accès non autorisés aux comptes ?
                                </button>
                              </h2>
                              <div id="collapseOne1" class="accordion-collapse collapse" aria-labelledby="headingOne1"
                                data-bs-parent="#fourthAccordion">
                                <div class="accordion-body" style="padding: 20px">
                                  <p>SIGIM utilise des mesures de sécurité avancées, notamment le cryptage des données, l'authentification à deux facteurs, et des protocoles de sécurité standard pour prévenir les accès non autorisés aux comptes.</p>
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingOne2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                  data-bs-target="#collapseOne2" aria-expanded="false" aria-controls="collapseOne2">
                                  Quelles sont les mesures prises par SIGIM pour détecter et prévenir les activités suspectes sur les comptes ?
                                </button>
                              </h2>
                              <div id="collapseOne2" class="accordion-collapse collapse" aria-labelledby="headingOne2"
                                data-bs-parent="#fourthAccordion">
                                <div class="accordion-body" style="padding: 20px">
<<<<<<< HEAD
                                  <p>SIGIM utilise des systèmes de détection d'activités suspectes qui analysent les comportements de connexion, les schémas d'accès, et d'autres paramètres pour identifier et prévenir toute activité inhabituelle. Les utilisateurs peuvent également recevoir des alertes de sécurité en cas de tentative d'accès suspecte.</p>
=======
                                  <p>Les patients peuvent mettre à jour leurs informations médicales à tout moment via leur compte personnel sur la plateforme SIGIM.</p>
>>>>>>> origin/master
>>>>>>> origin/angelo
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
<<<<<<< HEAD
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
=======
              </div>

              <div class="tab-pane fade" id="pills-technique" role="tabpanel" aria-labelledby="pills-technique-tab">
                <div>
                  <div class="accordion4-wrapper tab-three-accordion float-start w-100">
                    <div class="container">
                      <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-12 col-12">
                          <div class="tab-two-img">
                            <img src="asset/images/tab/tab-two.png" alt="img" height="auto" width="500">
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                          <div class="accordions" id="fourthAccordion">
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingTen">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                  data-bs-target="#collapseTen" aria-expanded="true" aria-controls="collapseTen">
                                  Quel support technique est disponible pour les utilisateurs de SIGIM?
                                </button>
                              </h2>
                              <div id="collapseTen" class="accordion-collapse collapse show" aria-labelledby="headingTen"
                                data-bs-parent="#fourthAccordion">
                                <div class="accordion-body" style="padding: 20px">
                                  <p>SIGIM propose un support technique complet, comprenant une assistance en ligne accessible depuis la plateforme, une documentation détaillée pour guider les utilisateurs, et un service d'assistance téléphonique ou par e-mail pour répondre aux questions plus complexes.</p>
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingOne1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                  data-bs-target="#collapseOne1" aria-expanded="false" aria-controls="collapseOne1">
                                  Que faire en cas de problème d'accès à mon compte SIGIM?
                                </button>
                              </h2>
                              <div id="collapseOne1" class="accordion-collapse collapse" aria-labelledby="headingOne1"
                                data-bs-parent="#fourthAccordion">
                                <div class="accordion-body" style="padding: 20px">
                                  <p>En cas de problème d'accès à votre compte SIGIM :</p>
                                  <ol>
                                    <li>Utilisez l'option "Mot de passe oublié" sur la page de connexion pour réinitialiser votre mot de passe.</li>
                                    <li>Si le problème persiste, contactez le service d'assistance technique de SIGIM pour obtenir une assistance supplémentaire.</li>
                                  </ol>
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingOne2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                  data-bs-target="#collapseOne2" aria-expanded="false" aria-controls="collapseOne2">
                                  Quelles sont les exigences techniques pour utiliser SIGIM?
                                </button>
                              </h2>
                              <div id="collapseOne2" class="accordion-collapse collapse" aria-labelledby="headingOne2"
                                data-bs-parent="#fourthAccordion">
                                <div class="accordion-body" style="padding: 20px">
                                  <p>SIGIM est compatible avec les navigateurs modernes et offre une expérience optimale sur les appareils mobiles. Une connexion Internet stable est nécessaire.</p>
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

              <div class="tab-pane fade" id="pills-Comptes" role="tabpanel" aria-labelledby="pills-Comptes-tab">
                <div>
                  <div class="accordion4-wrapper tab-three-accordion float-start w-100">
                    <div class="container">
                      <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-12 col-12">
                          <div class="tab-two-img">
                            <img src="asset/images/tab/tab-two.png" alt="img" height="auto" width="500">
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                          <div class="accordions" id="fourthAccordion">
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingTen">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                  data-bs-target="#collapseTen" aria-expanded="true" aria-controls="collapseTen">
                                  Comment puis-je créer un compte SIGIM?
                                </button>
                              </h2>
                              <div id="collapseTen" class="accordion-collapse collapse show" aria-labelledby="headingTen"
                                data-bs-parent="#fourthAccordion">
                                <div class="accordion-body" style="padding: 20px">
                                  <p>Pour créer un compte SIGIM :</p>
                                  <ol>
                                    <li>Accédez à la page d'inscription sur la plateforme SIGIM.</li>
                                    <li>Remplissez le formulaire d'inscription avec les informations requises (nom, adresse e-mail, mot de passe, etc.).</li>
                                    <li>Soumettez le formulaire.</li>
                                    <li>Vérifiez votre compte via l'e-mail de confirmation</li>
                                    <li>Acceder a l'espace connexion puis renseigner les champs avec les information que vous avez saisie loes de l'inscription</li>
                                  </ol>
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingOne1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                  data-bs-target="#collapseOne1" aria-expanded="false" aria-controls="collapseOne1">
                                  Comment SIGIM protège-t-il la confidentialité des informations médicales lors de la prise de rendez-vous en ligne?
                                </button>
                              </h2>
                              <div id="collapseOne1" class="accordion-collapse collapse" aria-labelledby="headingOne1"
                                data-bs-parent="#fourthAccordion">
                                <div class="accordion-body" style="padding: 20px">
                                  <p>SIGIM garantit la confidentialité des informations médicales lors de la prise de rendez-vous en ligne en utilisant des protocoles de cryptage avancés. Les données sont traitées de manière sécurisée, et seuls les professionnels de la santé autorisés ont accès aux informations pertinentes.</p>
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingOne2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                  data-bs-target="#collapseOne2" aria-expanded="false" aria-controls="collapseOne2">
                                  Est-ce que SIGIM partage mes informations avec des tiers lors de l'utilisation du carnet numérique?
                                </button>
                              </h2>
                              <div id="collapseOne2" class="accordion-collapse collapse" aria-labelledby="headingOne2"
                                data-bs-parent="#fourthAccordion">
                                <div class="accordion-body" style="padding: 20px">
                                  <p>Non, SIGIM respecte la confidentialité des informations médicales. Les données du carnet numérique ne sont pas partagées avec des tiers sans le consentement explicite de l'utilisateur.</p>
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingOne2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                  data-bs-target="#collapseOne2" aria-expanded="false" aria-controls="collapseOne2">
                                  Quelles sont les options de récupération de compte si j'oublie mon mot de passe?
                                </button>
                              </h2>
                              <div id="collapseOne2" class="accordion-collapse collapse" aria-labelledby="headingOne2"
                                data-bs-parent="#fourthAccordion">
                                <div class="accordion-body" style="padding: 20px">
                                  <p>Si vous oubliez votre mot de passe, vous pouvez utiliser l'option "Mot de passe oublié" sur la page de connexion. SIGIM vous guidera à travers le processus de récupération, généralement en envoyant un lien de réinitialisation à l'adresse e-mail associée à votre compte.</p>
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingOne2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                  data-bs-target="#collapseOne2" aria-expanded="false" aria-controls="collapseOne2">
                                  Comment mettre à jour mes préférences de confidentialité sur SIGIM ?
                                </button>
                              </h2>
                              <div id="collapseOne2" class="accordion-collapse collapse" aria-labelledby="headingOne2"
                                data-bs-parent="#fourthAccordion">
                                <div class="accordion-body" style="padding: 20px">
                                  <p>Pour mettre à jour vos préférences de confidentialité sur SIGIM :</p>
                                  <ol>
                                    <li>Connectez-vous à votre compte.</li>
                                    <li>Accédez à la section "Paramètres de Confidentialité" ou une section similaire.</li>
                                    <li>Modifiez vos préférences selon vos besoins.</li>
                                    <li>Enregistrez les changements pour qu'ils prennent effet.</li>
                                  </ol>
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

              <div class="tab-pane fade" id="pills-Comptes" role="tabpanel" aria-labelledby="pills-Comptes-tab">
                <div>
                  <div class="accordion4-wrapper tab-three-accordion float-start w-100">
                    <div class="container">
                      <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-12 col-12">
                          <div class="tab-two-img">
                            <img src="asset/images/tab/tab-two.png" alt="img" height="auto" width="500">
                          </div>
                        </div>
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
                                <div class="accordion-body" style="padding: 20px">
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
                                <div class="accordion-body" style="padding: 20px">
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
                                <div class="accordion-body" style="padding: 20px">
                                  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus quasi repellendus
                                    reiciendis
                                    temporibus, tenetur necessitatibus!</p>
>>>>>>> origin/master
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
    <!-- FIN QUESTION -->
    <!-- fin assistance -->
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