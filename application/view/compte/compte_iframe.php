<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

      <script src="http://localhost/projets/simplon/tpORMDoctrine/public/js/jquery.min.js"></script>
  <!-- CSS only -->
        <link href="http://localhost/projets/simplon/tpORMDoctrine/node_modules/bootstrap/dist/css/bootstrap-grid.min.css" rel="stylesheet">
        <link href="http://localhost/projets/simplon/tpORMDoctrine/node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="http://localhost/projets/simplon/tpORMDoctrine/node_modules/bootstrap/dist/css/bootstrap-reboot.min.css" rel="stylesheet">
        <link href="http://localhost/projets/simplon/tpORMDoctrine/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
        <style>

            .nav-item {
                padding: 0px 5px;
                border-radius: 3px;
            }
        </style>
        <!-- JS, Popper.js, and jQuery -->
        <script src="http://localhost/projets/simplon/tpORMDoctrine/node_modules/bootstrap/dist/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
        <script src="http://localhost/projets/simplon/tpORMDoctrine/node_modules/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="http://localhost/projets/simplon/tpORMDoctrine/node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="http://localhost/projets/simplon/tpORMDoctrine/public/js/iframe.js"></script>
        <script src="http://localhost/projets/simplon/tpORMDoctrine/public/js/jquery.validate.min.js"></script>
        <script src="http://localhost/projets/simplon/tpORMDoctrine/public/js/jquery.validate.translations.fr-FR.js"></script>

</head>

<body>
    <div class="col-lg-12">
        <div class="row">
            <button type="button" class="btn btn-info " data-toggle="modal" data-target="#modalCompte">
                Ajouter
            </button>
        </div>
        <div class="modal fade row" id="modalCompte">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content ">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h5 class="modal-title">Ajouter un nouveau Compte</h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <form id="form_add_compte" method="post">
                            <div class='row form-group' id="div1">
                                <label class='control-label col-lg-12'><u>Type de Compte </u> :</label><br>

                                <div class="container">

                                    <div class="radio radio-info col-lg-4">
                                        <input type="radio" name="choix_type_compte" id="courant" value="courant" class="radio-single " checked="checked" />
                                        <label for="inlineRadio1"> Courant </label>
                                    </div>
                                    <div class="radio col-lg-4">
                                        <input type="radio" name="choix_type_compte" id="epargne" value="epargne" />
                                        <label for="inlineRadio2"> Simple Xeewel </label>
                                    </div>
                                    <div class="radio col-lg-4">
                                        <input type="radio" name="choix_type_compte" id="bloque" value="bloque" />
                                        <label for="inlineRadio2"> Bloquer </label>
                                    </div>

                                </div>
                                <hr>
                            </div>


                            <!-- partie client physique -->
                            <div class="form-group col-lg-4">
                                <label for="">matricule Client *</label>
                                <input list="listMat" type="text" name="matricule" id="matricule" class="form-control" required />
                                <datalist id="listMat">
                                    <?php if(isset($data['listeClient'] )) : ?>
                                            <?php foreach($data['listeClient'] as $client) : ?>
                                                <option value="<?= $client->getMatricule()?>">
                                                <p><?= $client->getNom().''.$client->getPrenom()?></p>
                                            <?php endforeach?>
                                        <?php endif?>
                            </datalist>
                            </div>
                            <div class="form-group col-lg-12 " id="form_courant">
                                <div class="row">
                                    <div class="form-group col-lg-4">
                                        <label for="">Agios *</label>
                                        <input type="number" name="agios" id="agios" class="form-control" value="20000" readonly/>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group col-lg-12 " id="form_epargne">
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <label for="">Remuneration *</label>
                                        <input type="number" name="remuneratione" id="remuneratione" class="form-control" value="10000" readonly/>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="">Frais d'ouverture *</label>
                                        <input type="number" name="fraisOuve" id="fraisOuve" class="form-control" value="15000" readonly/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-lg-12 " id="form_bloque">
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <label for="">Remuneration *</label>
                                        <input type="number" name="remunerationb" id="remunerationb" class="form-control" value="10000" readonly/>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="">Frais d'ouverture *</label>
                                        <input type="number" name="fraisOuvb" id="fraisOuvb" class="form-control" value="15000" readonly/>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="">Date Debut*</label>
                                        <input type="date" name="date_debut" id="date_debut" class="form-control" />
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="">Date Fin*</label>
                                        <input type="date" name="date_fin" id="date_fin" class="form-control" />
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <a href="#" class="on-default valide" id="valide"><span class="btn btn-info">Enregistrer</span>
                    </a> &nbsp;&nbsp;&nbsp;
                        <button type="button" class="btn btn-cancel bg-white" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 20px;">
            <!-- Nav tabs -->
            <div class="col-lg-12">
                <ul class="nav nav-tabs  col-lg-12 " role="tablist">
                    <li class="nav-item ">
                        <a class="nav-link active" data-toggle="tab" href="#panelCourant">Compte Courant</a>
                    </li>
                    <li class="nav-item  ">
                        <a class="nav-link" data-toggle="tab" href="#panelEpargne">Compte Simple Xeewel</a>
                    </li>
                    <li class="nav-item  ">
                        <a class="nav-link" data-toggle="tab" href="#panelBloque">Compte Bloquer</a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div id="panelCourant" class="col-lg-12 tab-pane active"><br>
                        <div class="card" style="width:100%">
                            <div class="card-header bg-info text-white">Liste des clients physique:::</div>
                            <div class="card-body">
                                <table id="listeCompte" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th class="th-sm">id</th>
                                            <th class="th-sm">username</th>
                                            <th class="th-sm">name</th>
                                            <th class="th-sm">email</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-footer">Footer</div>
                        </div>
                    </div>
                    <div id="panelEpargne" class=" tab-pane fade "><br>
                        <div class="card" style="width:100%">
                            <div class="card-header bg-info text-white">Liste des clients physique:::</div>
                            <div class="card-body">
                                <table id="listeEpargne" class="table table-striped table-bordered" style="width:100%">
                                    <h3>Gestion compte epargne</h3>
                                    <thead>
                                        <tr>
                                            <th class="th-sm">Numero</th>

                                            <th class="th-sm">action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            foreach($data['listeCompte'] as $compte){
                                                echo "
                                                <tr>
                                                    <td>{$compte->getNumero()}</td>

                                                    <td>
                                                        <a href='#' class='btn btn-primary btn-sm'>Editer</a>
                                                        <a href='#' class='btn btn-danger btn-sm'>Sup</a>
                                                    </td>

                                                </tr>
                                                ";
                                            }
                                        ?>

                                    </tbody>
                                </table>
                            </div>
                            <div class="card-footer">Footer</div>
                        </div>
                    </div>
                    <div id="panelBloque" class=" tab-pane fade "><br>
                        <div class="card" style="width:110%">
                            <div class="card-header bg-info text-white">Liste des clients physique:::</div>
                            <div class="card-body">
                                <table id="listebloque" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th class="th-sm">Numero</th>

                                            <th class="th-sm">action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                            foreach($data['listeCompte'] as $compte){
                                                echo "
                                                <tr>
                                                    <td>{$compte->getNumero()}</td>

                                                    <td>
                                                        <a href='#' class='btn btn-primary btn-sm'>Editer</a>
                                                        <a href='#' class='btn btn-danger btn-sm'>Sup</a>
                                                    </td>

                                                </tr>
                                                ";
                                            }
                                        ?>
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

            $('#form_courant').show();
            $('#form_epargne').hide();
            $('#form_bloque').hide();
            $('#courant').click(function() {
                if ($(this).is(':checked') == true) {
                    $('#form_courant').show();
                    $('#form_epargne').hide();
                    $('#form_bloque').hide();
                }
            });

            $('#epargne').click(function() {
                if ($(this).is(':checked') == true) {
                    $('#form_courant').hide();
                    $('#form_epargne').show();
                    $('#form_bloque').hide();
                }
            });

            $('#bloque').click(function() {
                if ($(this).is(':checked') == true) {
                    $('#form_courant').hide();
                    $('#form_epargne').hide();
                    $('#form_bloque').show();
                }
            });

            $('#listeCompte,#listeCourant,#listeBloque').DataTable();

            $('#valide').click(function() {
                var isvalidate = $('#form_add_compte').valid();

                if (isvalidate) {
                    $('#modalCompte').modal('hide');

                    href = "http://localhost/projets/simplon/tpORMDoctrine/C_Compte/addCompte";

                    var formulaire = $("#form_add_compte");
                    $.ajax({
                        url: href,
                        type: 'POST',
                        data: formulaire.serialize(),
                        dataType: 'JSON',
                        success: function(data) {
                            alert("k");
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            alert('Error adding data');
                        }
                    });
                }
                return false;
            });
            

        });
    </script>
</body>

</body>
</html>