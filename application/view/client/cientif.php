<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <script src="../../../public/js/jquery.min.js"></script>
    <!-- CSS only -->
        <link href="../../../node_modules/bootstrap/dist/css/bootstrap-grid.min.css" rel="stylesheet">
        <link href="../../../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="../../../node_modules/bootstrap/dist/css/bootstrap-reboot.min.css" rel="stylesheet">
        <link href="../../../node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
        <style>

            .nav-item {
                padding: 0px 5px;
                border-radius: 3px;
            }
        </style>
        <!-- JS, Popper.js, and jQuery -->
        <script src="../../../node_modules/bootstrap/dist/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
        <script src="../../../node_modules/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="../../../node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="../../../public/js/iframe.js"></script>

    </head>
    <body>
    <div class="modal fade row" id="modalClientMoral">
        <div class="modal-dialog modal-dialog-centered modal-lg ">
            <div class="modal-content ">

                <!-- Modal Header -->
                <div class="modal-header bg-erreur">
                    <h5 class="modal-title">Nouveau client Entreprise</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <!-- <form id="form_add_client" method="post" onsubmit="return validateForm()"> -->
                    <form id="form_add_moral" method="post">
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label for="">Nom Entreprise *</label>
                                <input type="text" name="nom_entreprise" id="nom_entreprise" class="form-control" required />
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="">Telephone * </label>
                                <input type="text" name="tel_entreprise" id="tel_entreprise" class="form-control" required />
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="">Email * </label>
                                <input type="email" name="email_entreprise" id="email_entreprise" class="form-control" required />
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="">Localité *</label>
                                <input type="text" name="adr_entreprise" id="adr_entreprise" class="form-control" required />
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="">Budget *</label>
                                <input type="number" name="budget_entreprise" id="budget_entreprise" class="form-control" required/>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <a href="#" class="on-default saveEntreprise" id="saveEntreprise"><span class="btn btn-success">Enregistrer</span>
                        </a> &nbsp;&nbsp;&nbsp;
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
    <div class="row col-lg-12">

        <div class="modal fade row" id="modalClientPhysique">
            <div class="modal-dialog modal-dialog-centered modal-lg ">
                <div class="modal-content ">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h5 class="modal-title">Ajouter un nouveau client</h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <!-- <form id="form_add_client" method="post" onsubmit="return validateForm()"> -->
                        <form id="form_add_client" method="post">
                            <!-- partie client physique -->
                            <div class="row">
                                <div class="form-group col-lg-4">
                                    <label for="">CNI *</label>
                                    <input type="text" name="cni" id="cni" class="form-control" required />
                                </div>
                                <div class="form-group col-lg-4">
                                    <label for="">Nom *</label>
                                    <input type="text" name="nom" id="nom" class="form-control" required />
                                </div>
                                <div class="form-group col-lg-4">
                                    <label for="">Prenom *</label>
                                    <input type="text" name="prenom" id="prenom" class="form-control" required />
                                </div>
                                <div class="form-group col-lg-4">
                                    <label for="">Sexe *</label>
                                    <select name="sexe" id="sexe" class="form-control" required>
                                        <option value="">----------------</option>
                                        <option value="masculin">Masculin</option>
                                        <option value="Feminin">Feminin</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-4">
                                    <label for="">Date de naissance *</label>
                                    <input type="date" name="datenaiss" id="datenaiss" class="form-control" required />
                                </div>
                                <div class="form-group col-lg-4">
                                    <label for="">Adresse *</label>
                                    <input type="text" name="adr" id="adr" class="form-control" />
                                </div>
                                <div class="form-group col-lg-4">
                                    <label for="">Telephone *</label>
                                    <input type="text" name="tel" id="tel" class="form-control" required />
                                </div>
                                <div class="form-group col-lg-4">
                                    <label for="">Email *</label>
                                    <input type="email" name="email" id="email" class="form-control" required />
                                </div>

                                <div class="radio radio-info col-lg-12">
                                    <hr>
                                    <label class="container">Travailleur ?
                                        <input type="checkbox" name="employeur" id="employeur" value="employeur">
                                        <span class="checkmark checkbox-single"></span>
                                    </label>
                                </div>
                                <!-- <div class="form-group col-lg-4 employeur">
                                    <label for="">Entreprise *</label>
                                    <select name="entreprise_id" id="entreprise_id" class="form-control" required >
                                        <option value="">----------------</option>
                                        {foreach from=$listEntreprise item=client}
                                            <option value="{$client->getId()}">{$client->getNomEntreprise()}</option>
                                        {/foreach}
                                    </select>
                                </div> -->
                                <div class="form-group col-lg-4 employeur">
                                    <label for="">Entreprise &MediumSpace;&MediumSpace; </label>
                                    <input list="trouve" type="text" name="search" id="search" class="form-control" />
                                    <datalist id="trouve">
                
                                    </datalist>
                                </div>
                                <div class="form-group col-lg-4 employeur">
                                    <label for="">Salaire *</label>
                                    <input type="number" name="salaire" id="salaire" class="form-control" required />
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <a href="#" class="on-default saveClient" id="saveClient"><span class="btn btn-success">Enregistrer</span>
                            </a> &nbsp;&nbsp;&nbsp;
                        <button type="reset" class="btn btn-default">Annuler</button>
                    </div>

                </div>
            </div>
        </div>

        <div class="row">
            <!-- Nav tabs -->
            <div class="col-lg-12">
                <ul class="nav nav-tabs  col-lg-12 " role="tablist">
                    <li class="nav-item  col-lg-3">
                        <a class="nav-link active" data-toggle="tab" href="#home">Client physique</a>
                    </li>
                    <li class="nav-item  col-lg-3">
                        <a class="nav-link" data-toggle="tab" href="#menu1">Client entreprise</a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div id="home" class="container tab-pane active"><br>
                        <div class="container" style="margin-bottom: 10px;">
                            <button type="button" class="btn btn-success col-lg-1" data-toggle="modal" data-target="#modalClientPhysique">
                                    Ajouter
                                </button>
                        </div>
                        <div class="card" style="width:100%">
                            <div class="card-header bg-info text-white">Liste des clients physique:::</div>
                            <div class="card-body">
                                <table id="listePhysique" class="table table-striped table-bordered table-responsive" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th class="th-sm">Matricule</th>
                                            <th class="th-sm">Nom</th>
                                            <th class="th-sm">Prenom</th>
                                            <th class="th-sm">CNI</th>
                                            <th class="th-sm">Sexe</th>
                                            <th class="th-sm">Dnaiss</th>
                                            <th class="th-sm">Adresse</th>
                                            <th class="th-sm">Telephone</th>
                                            <th class="th-sm">email</th>
                                            <th class="th-sm">Salaire</th>
                                            <th class="th-sm">action</th>
                                            <th class="th-sm">action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- <?php 
                                        foreach ($listeClients as $client) {
                                            echo "
                                            <tr>
                                                <td>{$client->getMatricule()}</td>
                                                <td>{$client->getNom()}</td>
                                                <td>{$client->getPrenom()}</td>
                                                <td>{$client->getCni()}</td>
                                                <td>{$client->getSexe()}</td>
                                                <td>{$client->getDateNaiss()}</td>
                                                <td>{$client->getAdresse()}</td>
                                                <td>{$client->getTelephone()}</td>
                                                <td>{$client->getEmail()}</td>
                                                <td>{$client->getSalaire()}</td>
                                                <td>
                                                    <a href='#' class='btn btn-primary btn-sm'>Editer</a>
                                                </td>
                                                <td>
                                                    <a href='#' class='btn btn-danger btn-sm'>Sup</a>
                                                </td>
                                            </tr>
                                            ";
                                        }
                                        ?> -->
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-footer">Footer</div>
                        </div>
                    </div>
                    <div id="menu1" class="container tab-pane fade "><br>
                        <div class="container" style="margin-bottom: 10px;">
                            <button type="button" class="btn btn-success col-lg-1" data-toggle="modal" data-target="#modalClientMoral">
                                    Ajouter
                                </button>
                        </div>
                        <div class="card" style="width:100%">
                            <div class="card-header bg-info text-white">Liste des clients physique:::</div>
                            <div class="card-body">
                                <table id="listePhysique" class="table table-striped table-bordered table-responsive-md" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th class="th-sm">Nom Entreprise</th>
                                            <th class="th-sm">Adresse</th>
                                            <th class="th-sm">Email</th>
                                            <th class="th-sm">Telephone</th>
                                            <th class="th-sm">Budget</th>
                                            <th class="th-sm">action</th>
                                            <th class="th-sm">action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- <?php
                                            foreach ($listeEntreprise as $entreprise) {
                                                echo "
                                                <tr>
                                                    <td>{$entreprise->getNomEntreprise()}</td>
                                                    <td>{$entreprise->getAdresse()}</td>
                                                    <td>{$entreprise->getEmail()}</td>
                                                    <td>{$entreprise->getTelephone()}</td>
                                                    <td>{$entreprise->getBudget()}</td>
                                                    <td>
                                                        <a href='#' class='btn btn-primary btn-sm'>Editer</a>
                                                    </td>
                                                    <td>
                                                        <a href='#' class='btn btn-danger btn-sm'>Sup</a>
                                                    </td>
                                                </tr>
                                                ";
                                            }
                                        ?> -->
                                    

                                    </tbody>
                                </table>
                            </div>
                            <div class="card-footer">Footer</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.employeur').hide();

            $('#employeur').on('click', function() {
                if ($(this).is(':checked') == true) {
                    $('.employeur').show();
                } else {
                    $('.employeur').hide();
                }
            });

            $("#search").keyup(function() {

                valeur = $(this).val()

                href = 'http://localhost/projets/simplon/tpORMDoctrine/Entreprise/search?recherche=' + valeur;
                $.ajax({
                    url: href,
                    type: 'GET',
                    dataType: 'JSON',
                    success: function(data) {
                        alert(data)

                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        alert('Error,');
                    }
                });
            });

            /** error: function (jqXHR, textStatus, errorThrown) **/




           
            
            let href = "http://localhost/projets/simplon/tpORMDoctrine/ClientController/getAll";

            $('#saveClient').click(function() {

                var isvalidate = $('#form_add_client').valid();

                if (isvalidate) {
                    $('#modalClientPhysique').modal('hide');

                    href = "addClient";

                    var formulaire = $("#form_add_client");
                    $.ajax({
                        url: href,
                        type: 'POST',
                        data: formulaire.serialize(),
                        dataType: 'JSON',
                        success: function(data) {
                            alert("ok")
                                // if (data.status == 'success') {
                                //     $.Notification.autoHideNotify(data.status, 'bottom right', 'Ajout', data.message);

                            //     $('#'+menu_encours).click();
                            // }
                            // else {
                            //     $.LoadingOverlay("hide");
                            //     $.Notification.autoHideNotify(data.status, 'bottom right', 'Donnée non Ajouter', data.message);
                            //     document.getElementById("id_module").focus();
                            // }
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            alert('Error adding data');
                        }
                    });
                }
                return false;
            });

            $('#saveEntreprise').click(function() {
                var isvalidate = $('#form_add_moral').valid();

                if (isvalidate) {
                    $('#modalClientMoral').modal('hide');

                    href = "http://localhost/projets/simplon/tpORMDoctrine/Entreprise/addEntreprise";

                    var formulaire = $("#form_add_moral");
                    $.ajax({
                        url: href,
                        type: 'POST',
                        data: formulaire.serialize(),
                        dataType: 'JSON',
                        success: function(data) {
                            // if (data.status == 'success') {
                            //     $.Notification.autoHideNotify(data.status, 'bottom right', 'Ajout', data.message);

                            //     $('#' + menu_encours).click();
                            // } else {
                            //     $.Notification.autoHideNotify(data.status, 'bottom right', 'Donnée non Ajouter', data.message);
                            //     document.getElementById("id_module").focus();
                            // }
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            alert('Error adding data');
                        }
                    });
                }
                return false;
            });

            $('#listeEntreprise,#listePhysique').DataTable();
        });
    </script>
</body>
</html>