<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <?= $this->include('layouts/title-meta'); ?>
        <?= $this->include('layouts/head-css'); ?>
    </head>
    <title>Formulaire de Rendez-vous Médical</title>
</head>

<body id="body" class="dark-sidebar">
    <?= $this->include('layouts/left-sidebarp'); ?>
    <?= $this->include('layouts/topbarp'); ?>

    <div class="page-wrapper">

        <!-- Page Content-->
        <div class="page-content-tab">

            <div style="width: 500px; margin: 0 auto;" class="mt-4">
                <fieldset style="border: 1px solid; border-radius: 10px;" class="p-4">
                    <div class="login-main-wrapper">
                        <div class="container-fluid">
                            <div class="row align-items-center">
                                <div class="login-main">

                                    <form class="form" action="<?= base_url(); ?>" method="post">

                                        <div class="row">
                                            <h5 class="mb-4" style="text-align: center;">Prise de Rendez-vous Médical</h5>
                                            <hr>
                                            <div class="col-md-6 mt-2">
                                                <label for="nom">Nom :</label><br>
                                                <input type="text" class="form-control" id="nom" name="nom">
                                            </div>

                                            <div class="col-md-6 mt-2">
                                                <label for="prenom">Prénom :</label>
                                                <input type="text" class="form-control" id="prenom" name="prenom">
                                            </div>

                                            <div class="col-md-6 mt-2">
                                                <label for="naissance">Date de naissance :</label>
                                                <input type="date" class="form-control" id="naissance" name="naissance">
                                            </div>

                                            <div class="col-md-6 mt-2">
                                                <label for="adresse">Adresse :</label>
                                                <textarea id="adresse" class="form-control" name="adresse"></textarea>
                                            </div>

                                            <div class="col-md-6 mt-2">
                                                <label for="telephone">Téléphone :</label>
                                                <input type="tel" class="form-control" id="telephone" name="telephone">
                                            </div>

                                            <div class="col-md-6 mt-2">
                                                <label for="email">Email :</label><br>
                                                <input type="email" class="form-control" id="email" name="email">
                                            </div>

                                            <div class="col-md-6 mt-2">
                                                <label for="medecin">Médecin désiré :</label>
                                                <input type="text" class="form-control" id="medecin" name="medecin">
                                            </div>

                                            <div class="col-md-6 mt-2">
                                                <label for="motif">Motif de consultation :</label>
                                                <textarea id="motif" class="form-control" name="motif"></textarea>
                                            </div>

                                            <div class="col-md-6 mt-2">
                                                <label for="date">Date du rendez-vous :</label>
                                                <input type="date" class="form-control" id="date" name="date">
                                            </div>

                                            <div class="col-md-6 mt-2">
                                                <label for="heure">Heure du rendez-vous :</label>
                                                <input type="time" class="form-control" id="heure" name="heure">
                                            </div>

                                            <div class="btn mt-4">
                                                <input type="submit" value="Prendre rendez-vous">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </fieldset>

            </div>
            <?= $this->include('layouts/footer'); ?>
        </div>
    </div>


    <!-- Javascript  -->

    <script src="../assets/plugins/apexcharts/apexcharts.min.js"></script>
    <script src="../assets/pages/analytics-index.init.js"></script>


    <!-- App js -->
    <script src="../assets/js/app.js"></script>
</body>

</html>