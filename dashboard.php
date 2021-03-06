<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CNV MEX MONITOR APP</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
      <div class="container">
        <a class="navbar-brand" href="#">CNV MX Monitor</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">ISP CNV</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">ISP Reseller</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Registrar Servicios</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1 class="mt-5"><img src="img/logo.png" alt="Logo Convergia" align="middle" /></h1>
          <p class="lead">Aplicacion de Monitor Mobile</p>
        <?php 
			if (!$_GET['p']){
				require "main.php";
			}elseif($_GET['p']=="Settings"){
				require "settings.php";
			}elseif($_GET['p']=="Statistics"){
				require "stats.php";
			}elseif($_GET['p']=="Clients"){
				require "clients.php";
			}elseif($_GET['p']=="Trunk"){
				require "trunk.php";
			}elseif($_GET['p']=="Update"){
				require "update.php";
			}elseif($_GET['p']=="Backup"){
				require "backup.php";	
			}elseif($_GET['p']=="Help"){
				require "help.php";	
			}elseif($_GET['p']=="Received"){
				require "received.php";	
			}	
		?>
          
        
        
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
