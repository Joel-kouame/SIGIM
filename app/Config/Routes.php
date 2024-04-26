<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


// la page d'accueil du site sigim----------------------

/*$routes->get('/', 'Alert_notif::index');*/
// $routes->post('/Alert_notif/save', 'Alert_notif::save');
// $routes->get('/check_notification', 'Alert_notif::view_my_notif');


$routes->get('/', 'HomeController::index');
$routes->get('/contact', 'HomeController::contact');
$routes->get('/apropos', 'HomeController::apropo');
$routes->get('/blogs', 'HomeController::blogs');
$routes->get('/eau', 'HomeController::eau');
$routes->get('/faqs', 'HomeController::faqs');
$routes->get('/information_carnet', 'HomeController::infoCarnet');
// Fin du front----------------------

# Routes pour notification messagerie ------------------------------------------------

$routes->post('/prosante/alert_message', 'Prosante::alert_msg');
$routes->post('/patient/alert_message', 'PatientController::alert_msg');

# Save contact ------------------------------------------------------------

$routes->post('/saveContact', 'Contact::saveContact');

# Route de l'index pour les notifications--------------------------------------------

// $routes->get('/Patient/index', 'Patient::UserController');
// $routes->get('/dashboard', 'HomeController::dashboard');



// # Route pour la prise de rendez-vous-------------------------------------------------


// $routes->get('/check_notifications', 'Alert_notif::view_my_notif');
// $routes->get('/blogs', 'HomeController::blogs');
// $routes->get('/eau', 'HomeController::eau');
// $routes->get('/faqs', 'HomeController::faqs');


# Routes pour le patient-------------------------------------------------------------

$routes->get('/Patient/carnet_patient', 'PatientController::carnetPatient');
$routes->get('/login', 'UserController::create_login');
$routes->post('/Patient/login_patient', 'UserController::user_login');

$routes->get('/Patient/register', 'PatientController::register');
$routes->post('/Patient/save_patient', 'PatientController::savePatient');
$routes->get('/Patient/activate/(:any)', 'PatientController::activate/$1');
$routes->post('/modifier/(:num)', 'PatientController::updatePatient/$1');


$routes->get('/dashboardProsante', 'HomeController::dashboardProsante');
$routes->get('/dashboardPatient', 'HomeController::dashboardPatient');

$routes->get('/search', 'PatientController::search');
$routes->get('/savoir', 'Prosante::savoirPlus');


// Récupération des infos personnelles d'un patient
$routes->get('/patient/create_rendez_vous', 'HomeController::createRendezVous');
$routes->get('/patient/afficher_rendez_vous', 'HomeController::getRendezVous');
$routes->get('/patient/alerte', 'HomeController::alerte');
$routes->get('/prosante/register', 'HomeController::create_register');

// $routes->get('/prosante/messagerie', 'HomeController::messagerie');
$routes->get('/patient', 'HomeController::infoPatient');
$routes->get('/adminhopital/rendez_vous_list', 'Hopital::list_rendez_vous');
$routes->get('/prosante/alertep', 'HomeController::createAlerte');
$routes->get('/patient/auth-500', 'HomeController::rpdA');
$routes->get('/patient/consultation', 'HomeController::conslt');
$routes->get('/patient/ordonnance', 'HomeController::ordonn');
$routes->get('/patient/alergie', 'HomeController::alerg');
$routes->get('/patient/examen_resultat', 'HomeController::examResult');
$routes->get('prosante/identification_patient', 'Prosante::identPat');
$routes->get('/prosante/carnet_patient', 'Prosante::carnetPatient');

// # Tableau de bord du patient et prosanté---------------------------------------------------------

$routes->get('/dashboardPatient/logout', 'UserController::logoutPatient');
$routes->get('/dashboardProsante/logout', 'UserController::logoutProsante');

// # Route pour le chat avec les patients-----------------------------------------------

$routes->get('/rendezVous/valider/(:num)', 'RendezvousController::validerRendezVous/$1');
$routes->get('/rendezVous/annuler/(:num)', 'RendezvousController::annulerRendezVous/$1');
$routes->post('/saveRendezvous', 'RendezvousController::save');

$routes->get('/Patient/save', 'Patient::save');

$routes->get('/Patient/calender', 'RendezVousPtPros::index');
$routes->post('/RendezVousPtPros/save_rdv', 'RendezVousPtPros::save_rdv');

// examen medicaux
$routes->get('/Patient/examen', 'ExamensMedicaux::index');
$routes->post('/Patient/examensave', 'ExamensMedicaux::save');



$routes->get('/Patient/dash', 'PatientController::dash');
$routes->get('/Patient/logout', 'PatientController::logout');

$routes->get('/patient/profile-patient', 'PatientController::getProfileP');
$routes->post('/patient/profile-patient', 'PatientController::updateProfile');
$routes->post('/patient/profile-patient-updatepwd', 'PatientController::updatePasswordProfile');

# Route pour le chat avec les patients-----------------------------------------------

$routes->get('/patient/chat', 'PatientController::chatHome');
$routes->get('/patient/chat/(:num)', 'PatientController::getMessage/$1');
$routes->post('/patient/chat-save', 'PatientController::sendMessage');
$routes->post('/Patient/loadMessages', 'PatientController::loadMessages');

// Récupération des infos personnelles d'un patient
$routes->get('/prosante/profile', 'Prosante::getProfilePro');
$routes->post('/prosante/profile' , 'Prosante::updateProfile');
$routes->post('/prosante/updatepwprofile' , 'Prosante::updatePasswordProfile');

# Route pour le chat avec les patients-----------------------------------------------

$routes->get('/prosante/chat', 'Prosante::chatHome');
$routes->get('prosante/chat/(:num)', 'Prosante::getMessage/$1');
$routes->post('/prosante/chat-save', 'Prosante::sendMessage');
$routes->post('/prosante/loadMessages', 'Prosante::loadMessages');

// les routes pour le professionnel de sante
$routes->get('/', 'Prosante::index');

$routes->get('prosante/ajout_information/(:num)', 'Prosante::ajoutInfo/$1');
$routes->post('/prosante/save_consultation', 'Prosante::saveConsultation');

$routes->get('/Prosante', 'Prosante::index');
// connexion du dashboard du professionnel de sante

$routes->get('/Prosante/login', 'Prosante::login');
$routes->post('/Prosante/login', 'UserController::user_login');
$routes->get('/Prosante/chat', 'Prosante::chatProsante');


// inscription du dashboard du professionnel de sante

// $routes->get('/Prosante/register', 'Prosante::register');
$routes->post('/prosante/register', 'Prosante::register');

$routes->get('/Prosante/register-prosante/(:num)', 'Prosante::register_prosante/$1');
$routes->post('/Prosante/register-prosante/(:num)', 'Prosante::register_prosante/$1');
$routes->get('/Prosante/logout', 'Prosante::logout');


# Routes pour les Hopitaux------------------------------------------------
// $routes->get('/hopital_profile','Hopital::profileHop');
$routes->get('/patient_liste', 'Hopital::listpa');
$routes->get('/adminhopital/forms_services', 'Hopital::createServices');
$routes->get('/services_list', 'Hopital::getServices');
$routes->get('/delete_service/(:num)', 'Hopital::deleteService/$1');
$routes->get('/prosante/prosante_list', 'Hopital::getProsante');

$routes->get('/Hopital', 'Hopital::login');
$routes->get('/adminfablab/forms_hopital', 'Fablab::create_hopital');
$routes->post('/Hopital/save_hopital', 'Hopital::saveHopital');

$routes->post('/Hopital/login_hopital', 'Hopital::loginHopital');
$routes->get('/Hopital/activate/(:any)', 'Hopital::activate/$1');
$routes->get('/Hopital/dash', 'Hopital::dash');
$routes->get('/Hopital/logout', 'Hopital::logout');

$routes->get('/Hopital', 'Hopital::login');
$routes->get('/Hopital/register', 'Hopital::register');

$routes->get('/hopital/profile', 'Hopital::getProfileHop');
$routes->post('/hopital/updateProfile' , 'Hopital::updateProfile');
$routes->post('/hopital/updatepwprofile' , 'Hopital::updatePasswordProfile');


// enregistrer un hopital

# Routes pour les admins du Fablab------------------------------------------------
$routes->get('/adminfablab/datatable', 'Fablab::datatable');
$routes->get('/hopital/active/(:num)', 'Hopital::activerHopital/$1');
$routes->get('/hopital/suspendu/(:num)', 'Hopital::suspendreHopital/$1');

$routes->get('/fablab/profile', 'Fablab::getProfileFab');
$routes->post('/fablab/updateProfile' , 'Fablab::updateProfile');
$routes->post('/fablab/updatepwprofile' , 'Fablab::updatePasswordProfile');

# Routes pour activer ou suspendre un prosanté -------------------------------------

$routes->get('/prosante/active/(:num)', 'Hopital::activerProsante/$1');
$routes->get('/prosante/suspendu/(:num)', 'Hopital::suspendreProsante/$1');

$routes->get('/Fablab', 'Fablab::login');
$routes->get('/Fablab/register', 'Fablab::register');
$routes->post('/Fablab/save_fablab', 'Fablab::saveFablab');
$routes->post('/Fablab/login_fablab', 'Fablab::loginFablab');
$routes->get('/Fablab/activate/(:any)', 'Fablab::activate/$1');
$routes->get('/Fablab/dash', 'Fablab::dash');
$routes->get('/Fablab/logout', 'Fablab::logout');

$routes->get('/Fablab/ajout_info/(:num)', 'Fablab::AjoutInfo/$1');
$routes->post('/Fablab/updateInfo/(:num)', 'Fablab::updateInfo/$1');

# Routes pour les hôpitaux------------------------------------------------
$routes->post('/add_service', 'ServiceController::saveService');


# Routes pour les Fablab------------------------------------------------
$routes->post('/Fablab/save_hopital', 'Hopital::saveHopital');

// $routes->post('/Fablab/save_hopital', 'Hopital::saveHopital');


# Routes enregistrer les médicaments -----------------------
$routes->post('/add_medicament', 'MedicamentController::saveMedocs');
$routes->get('/delete_medicament/(:num)', 'MedicamentController::deleteMedicament/$1');

# Routes enregistrer les alergies -----------------------
$routes->post('/add_alergie', 'Prosante::saveAlerg');
$routes->get('/delete_alergie/(:num)', 'Prosante::delete/$1');