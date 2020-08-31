<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
     
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">    
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css"--> 
      <!-- <link href="./node_modules/bootstrap/dist/css/bootstrap-grid.css.map" rel="stylesheet" type="text/css">
      <link href="./node_modules/bootstrap/dist/css/bootstrap-reboot.min.css" rel="stylesheet" type="text/css">
      <link href="./node_modules/bootstrap/dist/css/bootstrap.css" rel="stylesheet" type="text/css">
      <link href="./node_modules/bootstrap/dist/css/bootstrap.min.css.map" rel="stylesheet" type="text/css">
      <link href="" rel="stylesheet" type="text/css"> -->
     
  <!-- CSS only -->
<link href="./node_modules/bootstrap/dist/css/bootstrap-grid.min.css" rel="stylesheet">
<link href="./node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="./node_modules/bootstrap/dist/css/bootstrap-reboot.min.css" rel="stylesheet">
<link href="./node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
<style>

  .nav-item {
    padding: 0px 5px;
    border-radius: 3px;
  }
</style>

<!-- 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js" integrity="sha512-WNLxfP/8cVYL9sj8Jnp6et0BkubLP31jhTG9vhL/F5uEZmg5wEzKoXp1kJslzPQWwPT1eyMiSxlKCgzHLOTOTQ==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.js" integrity="sha512-1lagjLfnC1I0iqH9plHYIUq3vDMfjhZsLy9elfK89RBcpcRcx4l+kRJBSnHh2Mh6kLxRHoObD1M5UTUbgFy6nA==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js" integrity="sha512-/DXTXr6nQodMUiq+IUJYCt2PPOUjrHJ9wFrqpJ3XkgPNOZVfMok7cRw6CSxyCQxXn6ozlESsSh1/sMCTF1rL/g==" crossorigin="anonymous"></script> -->
    <script src="./public/js/jquery.min.js" ></script>

<!-- <script src="./node_modules/jquery/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
<script src="./node_modules/bootstrap/dist/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
<script src="./node_modules/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="./node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="./public/js/iframe.js"></script>

</head>
<body >
  <div class="col-lg-12">
    <div class="row" id="top">
      <div class="container col-md-12" >
        <nav class="navbar navbar-expand-sm bg-info navbar-dark navbar-fixed-top">
          <a class="navbar-brand col-lg-9" href="#">Logo</a>
          <form class="form-inline" action="/action_page.php">
            <input class="form-control mr-sm-2" type="text" placeholder="Search">
            <button class="btn btn-dark" type="btn">Ok</button>
          </form>
        </nav>
      </div>
    </div>
    <div class="row col-lg-12" id="bottom">
      <div class="col-lg-3" id="left" style="margin-top: 20px;">
        <div class="card col-lg-12 bg-info">
            <div class="card-body">
                Navigation
            </div>
        </div>
        <div class="card col-lg-12 text-center " style="width:100%">
          <div class="card-body row">
            <img src="./public/img/Profil.jpg" class="img-responsive rounded-circle col-lg-5" alt="Profil">
            <div class="col-lg-7">
              <h6 class="card-title">Moussa DIENE</h6>
              <p class="card-text"><i>Fonction : Responsable</i>.</p>
            </div>
          </div>
          <a href="#" class="btn btn-info btn-block">profil</a>
        </div>
        <div class="card bg-info" style="margin-top: 20px;">
          <div class="card-body">
            <nav class="navbar navbar-dark bg-info col-lg-12">
              <ul class="navbar-nav col-lg-12">
                  <li class="nav-item active">
                      <a class="nav-link" href="#"><span class="fa fa-home"></span> &ThinSpace;&ThinSpace; Dashboad</a>
                  </li>
                  <li class="nav-item">
                      <!-- <a class="nav-link" href="#" id="ok"><span class="fa fa-user"></span> &ThinSpace;&ThinSpace;Gestion Client</a> -->
                      <a class="nav-link" onclick="vueClient();"><span class="fa fa-user"></span> &ThinSpace;&ThinSpace;Gestion Client</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#" onclick="vueCompte();"><i class="fas fa-briefcase"></i> &ThinSpace;&ThinSpace;Gestion Compte</a>
                  </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>

      <div class="col-lg-9" style="margin-top: 20px;" id="contain">
         <!-- <table id="userTable">
            <thead>
              <tr>
                <th>id</th>
                <th>username</th>
                <th>name</th>
                <th>email</th>
              </tr>
            </thead>
            <tbody>

            </tbody>
         </table> -->
      </div>
    </div>
  </div>
</div>

</body>
</html>