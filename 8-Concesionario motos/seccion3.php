<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="autor" content="Alejandro Rios">

		<title>Venta de motos</title>

		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/stylemotos.css">
		<link href="font/fontawesome/css/fontawesome.css" rel="stylesheet">
   		<link href="font/fontawesome/css/brands.css" rel="stylesheet">
    	<link href="font/fontawesome/css/solid.css" rel="stylesheet">

		<style>
  
			.carousel-inner img {
			    width: 100%;
			    height: 318px;
			  }
			.carousel-control-prev-icon,
			.carousel-control-next-icon {
			  height: 100px;
			  width: 100px;
			  outline: black;
			  background-size: 100%, 100%;
			  border-radius: 50%;
			  border: 1px solid black;
			  background-image: none;
			}

			.carousel-control-next-icon:after
			{
			  content: '>';
			  font-size: 55px;
			  color: red;
			}

			.carousel-control-prev-icon:after {
			  content: '<';
			  font-size: 55px;
			  color: red;
			}
    </style>

	</head>

	<body>
		<div class="jumbotron jumbotron-fluid">
        	<div class="container-fluid">
        		<div class="row">
          			<div class="col-md-10">
        				<h1 style="color: #B60E0E;"><a href="index_motos.php" style="text-decoration: none; color: #B60E0E;">Mundo moto</a>
          				<i class="fas fa-motorcycle"></i>
        				</h1>
        				<img src="img/Concesionario_motos/logo-motos/logoCorven.png" alt="Avatar" class="avatar">
		                <img src="img/Concesionario_motos/logo-motos/LogoGilera.png" alt="Avatar" class="avatar">
		                <img src="img/Concesionario_motos/logo-motos/logoHonda.jpg" alt="Avatar" class="avatar">
		                <img src="img/Concesionario_motos/logo-motos/logoMotomel.jpg" alt="Avatar" class="avatar">
		                <img src="img/Concesionario_motos/logo-motos/logoYamaha.jpg" alt="Avatar" class="avatar">
        			</div>
        			<div class="col-md-2">
         				<img src="img/faceb (1).jpg" alt="Facebook" style="width: 50px;height: 50px; border-radius: 50%; margin: 1%;">
          				<img src="img/twitter1.png" alt="Twitter" style="width: 50px;height: 50px; border-radius: 50%; margin: 1%;">
        			</div>
        		</div>
        	</div>
    	</div>
			<nav class="site-header sticky-top">
  				<ul class="nav nav-tabs">
  					<li class="nav-item dropdown">
					    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Cubs</a>
					    <div class="dropdown-menu">
					      <a class="dropdown-item" href="cubs1corven.php"><img src="img/logos-menu/logo_corven.gif" alt="Corven"></a>
					      <a class="dropdown-item" href="cubs2gilera.php"><img src="img/logos-menu/logo-gilera.gif" alt="Gilera"></a>
					      <a class="dropdown-item" href="cubs3Honda.php"><img src="img/logos-menu/logo_honda.gif" alt="Honda"></a>
					      <a class="dropdown-item" href="cubs4Motomel.php"><img src="img/logos-menu/logo-motomel.gif" alt="Motomel"></a>
					    </div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Enduro</a>
						<div class="dropdown-menu">
						    <a class="dropdown-item" href="enduro1corven.php"><img src="img/logos-menu/logo_corven.gif" alt="Corven"></a>
						    <a class="dropdown-item" href="enduro2Gilera.php"><img src="img/logos-menu/logo-gilera.gif" alt="Gilera"></a>
						    <a class="dropdown-item" href="enduro3Motomel.php"><img src="img/logos-menu/logo-motomel.gif" alt="Motomel"></a>
						</div>
  					</li>
  					<li class="nav-item dropdown">
    					<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Street</a>
    					<div class="dropdown-menu">
      						<a class="dropdown-item" href="street1corven.php"><img src="img/logos-menu/logo_corven.gif" alt="Corven"></a>
      						<a class="dropdown-item" href="street2gilera.php"><img src="img/logos-menu/logo-gilera.gif" alt="Gilera"></a>
      						<a class="dropdown-item" href="street3Motomel.php"><img src="img/logos-menu/logo-motomel.gif" alt="Motomel"></a>
      						<a class="dropdown-item" href="street4yamaha.php"><img src="img/logos-menu/logo-yamaha.gif" alt="Yamaha"></a>
    					</div>
  					</li>
  				</ul>
			</nav>

			<div class="container-fluid">
				<div class="row">
					<div class="col-md-5">
						<div class="card alex">
							<img class="lima eco" src="img/Concesionario_motos/Street/motomel st/sirius/1_si.png" alt="Motomel">
							<div class="overlay">
    							<div class="text">Motomel Sirius</div>
  							</div>						   
						</div>
						<button style="width:100%" type="button" class="btn btn-primary" OnClick="location.href='z17.php'">
						    Info
						</button>
					<hr>
						<div class="card alex">
							<img class="lima eco" src="img/Concesionario_motos/Enduro/corven en/triax 200 r3/1_Triax-200-R3.png" alt="Corven">
							<div class="overlay">
    							<div class="text">Corven Triax 200 R3</div>
  							</div>
						</div>
						<button style="width:100%" type="button" class="btn btn-primary" OnClick="location.href='z18.php'">
						    Info
						</button>
						<hr>
					</div>
					<div class="col-md-5">
						<div class="card alex">
							<img class="lima eco" src="img/Concesionario_motos/Cubs/Motomel/blitz tunning/1_Blitz-110-Tunning.png" alt="Motomel">
							<div class="overlay1">
    							<div class="text">Motomel Blitz Tunning</div>
  							</div>
						</div>
						<button style="width:100%" type="button" class="btn btn-primary" OnClick="location.href='z19.php'">
						    Info
						</button>
						<hr>
						<div class="card alex">
							<img class="lima eco" src="img/Concesionario_motos/Cubs/Gilera/smash tunning/1_SMASHTUNNING.png" alt="Gilera">
							<div class="overlay1">
    							<div class="text">Gilera Smash Tunning</div>
  							</div>
						</div>
						<button style="width:100%" type="button" class="btn btn-primary" OnClick="location.href='z20.php'">
						    Info
						</button>
						<hr>
					</div>
					<div class="col-md-2">
						<div class="card sierra">
							<a class="indian" href="#">
							<h2 class="text-center">		
							<i class="fab fa-whatsapp cha"></i>
							</h2>
							<p class="fox">3437-448932</p>
							</a>
						</div>

						<hr>
						<div class="card sierra">
							<a class="indian" href="#">
							<h2 class="text-center"><!--<span class="hotel">Atención en línea</span>-->
							<i class="fas fa-headset cha"></i>
							</h2>
							<p class="fox">0800-444-999</p>
							</a>
						</div>
						<hr>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-md-10">
						<div class="card">
							<img class="abv" src="img/Cascos/donde van los cascos2.jpg" alt="Mundo Moto" height="338">
						</div> 
						<hr>
					</div>
					<div class="col-md-2">
						<div class="card sierra">
							<h2 class="text-center"><!--<span class="hotel">Asegura tu moto</span>-->
							<i class="fas fa-lock cha"></i>
							</h2>
						</div>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-md-5">
						<div class="card alex">
							<img class="lima eco" src="img/Concesionario_motos/Enduro/Motomel en/Skua 250 pro/1_skuapro.png" alt="Motomel">
							<div class="overlay">
    							<div class="text">Motomel Skua 250 Pro</div>
  							</div>
						</div>
						<button style="width:100%" type="button" class="btn btn-primary" OnClick="location.href='z21.php'">
						    Info
						</button>
						<hr>
					</div>
					<div class="col-md-5">
						<div class="card alex">
							<img class="lima eco" src="img/Concesionario_motos/Cubs/Motomel/go vintage/1_zm.jpg" alt="Motomel">
							<div class="overlay1">
    							<div class="text">Motomel Go Vintage</div>
  							</div>
						</div>
						<button style="width:100%" type="button" class="btn btn-primary" OnClick="location.href='z22.php'">
						    Info
						</button>
						<hr>
					</div>
					<div class="col-md-2">
						<div class="card sierra">
							<h2 class="text-center"><!--<span class="hotel">Tarjetas</span>-->
							<i class="fab fa-cc-visa cha"></i>
							</h2>
						</div>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-md-10">
						<div class="card alfa">
							<div id="myCarousel" class="carousel slide" data-ride="carousel">

							  <!-- Indicators -->
							  <ul class="carousel-indicators">
							    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
							    <li data-target="#myCarousel" data-slide-to="1"></li>
							    <li data-target="#myCarousel" data-slide-to="2"></li>
							  </ul>
							  
							  <!-- The slideshow -->
							  <div class="carousel-inner">
							    <div class="carousel-item active">
							      <img src="img/caru-ybr.jpg" alt="Yamaha Ybr" width="900" height="500">
							    </div>
							    <div class="carousel-item">
							      <img src="img/z-Carousel/69_3s-3headrs-campana-biz-02-04-1.jpg" alt="Honda Biz" width="900" height="500">
							    </div>
							    <div class="carousel-item">
							      <img src="img/z-Carousel/4_zm.jpg" alt="Motomel Go Vintage" width="900" height="500">
							    </div>
							  </div>
							  
							  <!-- Left and right controls -->
							  <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
							    <span class="carousel-control-prev-icon"></span>
							  </a>
							  <a class="carousel-control-next" href="#myCarousel" data-slide="next">
							    <span class="carousel-control-next-icon"></span>
							  </a>
							</div>
					</div>
				</div>
					<div class="col-md-2">
						<div class="card sierra">
							<!--<h2 class="text-center">
							<i class="fas fa-search-location cha"></i>
							</h2>-->
							<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1714.532177840162!2d-59.580572595586105!3d-30.744693729534507!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2sar!4v1565122291326!5m2!1ses-419!2sar" width="400" height="340" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-md-5">
						<div class="card alex">
							<img class="lima eco" src="img/Concesionario_motos/Enduro/Motomel en/Skua 125 extreme/1_skua-125-xtreme.png" alt="Motomel">
							<div class="overlay">
    							<div class="text">Motomel Skua 125 Extreme</div>
  							</div>
						</div>
						<button style="width:100%" type="button" class="btn btn-primary" OnClick="location.href='z23.php'">
						    Info
						</button>
						<hr>
					</div>
					<div class="col-md-5">
						<div class="card alex">
							<img class="lima eco" src="img/Concesionario_motos/Street/gilera st/vc 200 naked new/1_vc200-slider.png" alt="Gilera">
							<div class="overlay1">
    							<div class="text">Gilera Vc 200 Naked New</div>
  							</div>
						</div>
						<button style="width:100%" type="button" class="btn btn-primary" OnClick="location.href='z24.php'">
						    Info
						</button>
						<hr>
					</div>
					<div class="col-md-2">
						<div class="card sierra">
							<h2 class="text-center"><!--<span class="hotel">Contactanos</span>-->
							<i class="fas fa-id-card cha"></i>
							</h2>
						</div>
					</div>
					
				</div>
			</div>
			<hr>

			<div class="container">
				<ul class="pagination justify-content-center">
					<li class="page-item"><a href="index_motos.php" class="page-link">Previous</a></li> 
					<li class="page-item"><a href="seccion2.php" class="page-link">2</a></li>
					<li class="page-item active"><a href="#" class="page-link">3</a></li>
					<li class="page-item"><a href="seccion4.php" class="page-link">4</a></li>
					<li class="page-item"><a href="seccion4.php" class="page-link">Next</a></li>
				</ul>
			</div>



		<footer class="blog-footer">
 			<div class="container">
    			<span class="text-muted eco">©2019 Copyright: Alejandro Rios</span>
 			</div>
		</footer>
		<script src="js/jquery.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>

</html>