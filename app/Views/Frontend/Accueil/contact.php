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
							<h4>Entrer en contact avec nous !</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="<?= base_url('/');?>">Accueil</a></li>
								<li class="breadcrumb-item " aria-current="page">Contact</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- breadcrumb  end-->
	<div class="ic-section-2 padd-100 float-start w-100 ">
      	<div class="container">
         <div class="row">
		 	<div class="col-lg-12 col-md-12 col-sm-12 col-12 mb-4 pb-4">
				<div class="sb-team-section">
					<h5 class="home1-section-heading2">Nous joindre !</h5>
					<p class="text-center">It is a long established fact that a reader will be distracted by the readable
						<br>content of a page when looking at its layout.
					</p>
				</div>
			</div>
            <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".1s">
               <div class="icon-box-two">
                  <span><i class="fas fa-phone"></i></span>
                  <h4><a  href="tel:+2250757719315"> Assistance telephonique</a></h4>
                  <p>+225 <?= $information['telephone']; ?></p>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".1s">
               <div class="icon-box-two">
                  <span><i class="fas fa-envelope"></i></span>
                  <h4><a href="mailto:fablabsigim@gmail.com">Repondeur mail</a></h4>
                  <p> <?= $information['email']; ?></p>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".1s">
               <div class="icon-box-two">
                  <span><i class="fas fa-mail-bulk"></i></span>
                  <h4><a href="#">Boite postale</a></h4>
                  <p><?= $information['boite_postal']; ?></p>
               </div>
            </div>
			<div class="col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".1s">
               <div class="icon-box-two">
					<span>
						<a href="https://facebook.com"><i class="fab fa-facebook-f"></i></a>
						<a  href="tel:+2250757719315"><i class="fab fa-whatsapp"></i></a>
						<a href="http://instagram.com"><i class="fab fa-instagram"></a></i>
					</span>
					<h4>Reseaux sociaux</h4>
					<p>Fablab_Sigim</p>
               </div>
            </div>
         </div>
      </div>
   	</div>
	<!-- form section start -->
	<div class="form-main-wrapper">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="map-area">
						<div class="container-fluid">
							<div class="row">
								<div style="width: 100%;">
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.4016949757993!2d-4.007989724905272!3d5.35551433563295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc1ebfed2d15783%3A0x2a036f3f15c3b1ab!2sSi%C3%A8ge%20de%20l&#39;Universit%C3%A9%20Virtuelle%20de%20Cote%20d&#39;Ivoire%20(UVCI)!5e0!3m2!1sfr!2sci!4v1702300754471!5m2!1sfr!2sci" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
									<a href="https://www.maps.ie/draw-radius-circle-map/"></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div>
						<h6><b>Ecrire un message</b></h6>
						<form class="row " action="<?= base_url('/saveContact'); ?>" method="post">
							<?php csrf_field(); ?>
							<?php if (!empty(session()->getFlashdata('fail'))) : ?>
								<div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
							<?php endif ?>

							<?php if (!empty(session()->getFlashdata('success'))) : ?>
								<div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
							<?php endif ?>
							<div class="col-lg-6 col-md-6 col-sm-12 col-12">
								<div class="input-group flex-nowrap mt-4">
									<input type="text" class="form-control" name="nom" placeholder="Nom :">
									<span class="input-group-text" id="addon-wrapping1"><i class="fas fa-user"></i></span>
								</div>
								<span class="text-danger text-sm">
									<?= isset($validation) ? display_form_errors($validation, 'nom') : '' ?>
								</span>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12 col-12">
								<div class="input-group flex-nowrap mt-4">
									<input type="email" class="form-control" name="email" placeholder="Email : example@gmail.com">
									<span class="input-group-text" id="addon-wrapping2"><i class="fas fa-envelope"></i></span>
								</div>
								<span class="text-danger text-sm">
									<?= isset($validation) ? display_form_errors($validation, 'email') : '' ?>
								</span>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-12">
								<textarea class="form-control mt-4 ps-3" id="exampleFormControlTextarea1" name="message" rows="3" placeholder="Entrer votre message"></textarea>
								<span class="text-danger text-sm">
									<?= isset($validation) ? display_form_errors($validation, 'message') : '' ?>
								</span>
								<div class="mt-2 checkbox-wrap">
									<input type="checkbox" name="select" id="comment">
									<label for="comment">
										By using this form you agree with the storage and handling of your
										data by this website Privacy Policy.
									</label>
								</div>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="tb_es_btn_div">
									<div class="response center" style="font-size: 18px; color: #ff0000;"></div>
									<input type="hidden" name="form_type" value="contact" />
									<div class="tb_es_btn_wrapper os_contact_input ">
										<button type="submit" class="submitForm  button-btn mt-4"> Envoyer
											<span><i class="fas fa-angle-double-right"></i></span></button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--Footer section start-->
	<?= $this->include('partials/footer'); ?>
	<!--Footer esction end-->

	<script>
      // Attendez que le DOM soit prêt
      document.addEventListener("DOMContentLoaded", function() {
         // Obtenir l’élément de message de réussite
         const successMessage = document.querySelector('.alert-success');

         // Vérifier si le message de réussite existe
         if (successMessage) {
            // Définir un délai d’expiration pour masquer le message de réussite après 20 secondes (20000 millisecondes)
            setTimeout(function() {
               successMessage.style.display = 'none';
            }, 10000);
         }
      });
   </script>
</body>

</html>