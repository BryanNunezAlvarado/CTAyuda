<?php
session_start();
include 'conexion.php';
include 'conexion_postgreSQL.php';

$validar_acceso = $_SESSION['correo'];
$validar_categoria = $_SESSION['nombre_categoria'];
$conn = conectar();
$conn_postgres = conectar_postgres();

if (!isset($validar_acceso)) {
	header("location:index.html");
}

$consulta = "SELECT * FROM user WHERE correo = '$validar_acceso'";
$ejecuta = $conn->query($consulta);
$row = $ejecuta->fetch_assoc();


$consulta_categoria = "SELECT * FROM categorias WHERE nombre = '$validar_categoria'";
$ejecuta_categoria = $conn->query($consulta_categoria);
$row_categoria = $ejecuta_categoria->fetch_assoc();


$result_postgres = pg_query($conn_postgres, "SELECT * FROM data_categorias WHERE nombre = '$validar_categoria'");
$row_postgres = pg_fetch_assoc($result_postgres);





function TokenPC($cantidad)
{

	$numeros_aleatorios = array();
	$numeros_aleatorios2 = array();

	while (count($numeros_aleatorios) < $cantidad) {

		$pocision = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 28, 29);
		$tamaño = count($pocision);
		
		$numero_aleatorio = random_int(0, $tamaño-1);

												
		if (!in_array($numero_aleatorio, $numeros_aleatorios2)) {
			$numeros_aleatorios2[] = $numero_aleatorio;
			$numeros_aleatorios[] = $pocision [$numero_aleatorio];

		}
	}

	return $numeros_aleatorios;
}
function TokenLaptop($cantidad)
{

	$numeros_aleatorios = array();
	$numeros_aleatorios2 = array();

	while (count($numeros_aleatorios) < $cantidad) {

		$pocision = array(10, 11);
		$tamaño = count($pocision);
		
		$numero_aleatorio = random_int(0, $tamaño-1);

												
		if (!in_array($numero_aleatorio, $numeros_aleatorios2)) {
			$numeros_aleatorios2[] = $numero_aleatorio;
			$numeros_aleatorios[] = $pocision [$numero_aleatorio];

		}
	}

	return $numeros_aleatorios;
}
function TokenEscritorio($cantidad)
{

	$numeros_aleatorios = array();
	$numeros_aleatorios2 = array();

	while (count($numeros_aleatorios) < $cantidad) {

		$pocision = array(13,14,15,16);
		$tamaño = count($pocision);
		
		$numero_aleatorio = random_int(0, $tamaño-1);

												
		if (!in_array($numero_aleatorio, $numeros_aleatorios2)) {
			$numeros_aleatorios2[] = $numero_aleatorio;
			$numeros_aleatorios[] = $pocision [$numero_aleatorio];

		}
	}

	return $numeros_aleatorios;
}
function TokenImpresora($cantidad)
{

	$numeros_aleatorios = array();
	$numeros_aleatorios2 = array();

	while (count($numeros_aleatorios) < $cantidad) {

		$pocision = array(17,18,19,20);
		$tamaño = count($pocision);
		
		$numero_aleatorio = random_int(0, $tamaño-1);

												
		if (!in_array($numero_aleatorio, $numeros_aleatorios2)) {
			$numeros_aleatorios2[] = $numero_aleatorio;
			$numeros_aleatorios[] = $pocision [$numero_aleatorio];

		}
	}

	return $numeros_aleatorios;
}

function TokenImpresoras($cantidad)
{

	$numeros_aleatorios = array();
	$numeros_aleatorios2 = array();

	while (count($numeros_aleatorios) < $cantidad) {

		$pocision = array(21,22);
		$tamaño = count($pocision);
		
		$numero_aleatorio = random_int(0, $tamaño-1);

												
		if (!in_array($numero_aleatorio, $numeros_aleatorios2)) {
			$numeros_aleatorios2[] = $numero_aleatorio;
			$numeros_aleatorios[] = $pocision [$numero_aleatorio];

		}
	}

	return $numeros_aleatorios;
}

function TokenScanner($cantidad)
{

	$numeros_aleatorios = array();
	$numeros_aleatorios2 = array();

	while (count($numeros_aleatorios) < $cantidad) {

		$pocision = array(23,24,25,26,27);
		$tamaño = count($pocision);
		
		$numero_aleatorio = random_int(0, $tamaño-1);

												
		if (!in_array($numero_aleatorio, $numeros_aleatorios2)) {
			$numeros_aleatorios2[] = $numero_aleatorio;
			$numeros_aleatorios[] = $pocision [$numero_aleatorio];

		}
	}

	return $numeros_aleatorios;
}
function TokenScanners($cantidad)
{
	$numeros_aleatorios = array();
	$numeros_aleatorios2 = array();

	while (count($numeros_aleatorios) < $cantidad) {

		$pocision = array(23,24,25,26,27);
		$tamaño = count($pocision);
		
		$numero_aleatorio = random_int(0, $tamaño-1);

												
		if (!in_array($numero_aleatorio, $numeros_aleatorios2)) {
			$numeros_aleatorios2[] = $numero_aleatorio;
			$numeros_aleatorios[] = $pocision [$numero_aleatorio];

		}
	}

	return $numeros_aleatorios;
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>CTAyuda</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- Custom Theme files -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/animate.min.css" rel="stylesheet" type="text/css" media="all" /><!-- animation -->
	<link href="css/menu.css" rel="stylesheet" type="text/css" media="all" /> <!-- menu style -->
	<link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="all"> <!-- carousel slider -->
	<!-- //Custom Theme files -->
	<!-- font-awesome icons -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- //font-awesome icons -->
	<!-- js -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<script src="js/owl.carousel.js"></script>
	<script src="js/bootstrap.js"></script>
	<!--flex slider-->
	<script defer src="js/jquery.flexslider.js"></script>
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
	<script>
		// Can also be used with $(document).ready()
		$(window).load(function () {
			$('.flexslider').flexslider({
				animation: "slide",
				controlNav: "thumbnails"
			});
		});
	</script>
	<!--flex slider-->
	<script src="js/imagezoom.js"></script>
	<!-- //js -->
	<!-- web-fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic'
		rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Lovers+Quarrel' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Offside' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Tangerine:400,700' rel='stylesheet' type='text/css'>
	<!-- web-fonts -->
	<!-- scroll to fixed-->
	<script src="js/jquery-scrolltofixed-min.js" type="text/javascript"></script>
	<script>
		$(document).ready(function () {

			// Dock the header to the top of the window when scrolled past the banner. This is the default behaviour.

			$('.header-two').scrollToFixed();
			// previous summary up the page.

			var summaries = $('.summary');
			summaries.each(function (i) {
				var summary = $(summaries[i]);
				var next = summaries[i + 1];

				summary.scrollToFixed({
					marginTop: $('.header-two').outerHeight(true) + 10,
					zIndex: 999
				});
			});
		});
	</script>
	<!-- //scroll to fixed-->
	<!-- start-smooth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({ scrollTop: $(this.hash).offset().top }, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->
	<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function () {

			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
			};

			$().UItoTop({ easingType: 'easeOutQuart' });

		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->
</head>

<body>
	<!-- header -->
	<div class="header">
		<div class="w3ls-header"><!--header-one-->
			<div class="w3ls-header-left">

			</div>
			<div class="w3ls-header-right">
				<ul>
					<li class="dropdown head-dpdn">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"
								aria-hidden="true"></i>
							<?php echo $row['nombre']; ?><span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li><a href="cerrar_sesion.php">Cerrar sesión </a></li>
						</ul>
					</li>
					<li class="dropdown head-dpdn">
						<a href="contact.php" class="dropdown-toggle"><i class="fa fa-map-marker"
								aria-hidden="true"></i>Ubicación</a>
					</li>
					<li class="dropdown head-dpdn">
						<a href="help.php" class="dropdown-toggle"><i class="fa fa-question-circle"
								aria-hidden="true"></i> Ayuda</a>
					</li>
					<li class="dropdown head-dpdn">
						<a href="mapa_cucei.php" class="dropdown-toggle"><i class="fa fa-map"
								aria-hidden="true"></i>Mapa cucei</a>
					</li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="header-two"><!-- header-two -->
			<div class="container">
				<div class="header-logo">
					<h1><a href="principal.php"><span><img src="images/logo.png" alt="logotipo" width="200"
									height="85"></span>yuda <i></i></a></h1>
					<br>
					<h6>Coordinación de Tecnologías para el Aprendizaje.</h6>
				</div>


				<div class="clearfix"> </div>
			</div>
		</div><!-- //header-two -->
		<div class="header-three"><!-- header-three -->
			<div class="container">
				<div class="menu">
					<div class="cd-dropdown-wrapper">
						<a class="cd-dropdown-trigger" href="#0">Categorias</a>
						<nav class="cd-dropdown">
							<a href="#0" class="cd-close">Close</a>
							<ul class="cd-dropdown-content">
								<li class="has-children">
									<a href="#">Computadoras</a>
									<ul class="cd-secondary-dropdown is-hidden">
										<li class="go-back"><a href="#">Menu</a></li>
										<li class="has-children">
											<a href="#">LAPTOPS</a>
											<ul class="is-hidden">
												<li class="has-children">
													<a href="#0">Software</a>
													<ul class="is-hidden">
														<li class="go-back"><a href="#"> </a></li>
														<form action="info_Controller.php" method="post">
															<button
																style="background-color: transparent; border: none; cursor: pointer;"
																name="boton_windows">• Instalar Windows</button>
														</form>
														<form action="info_Controller.php" method="post">
															<button
																style="background-color: transparent; border: none; cursor: pointer;"
																name="boton_office">• Instalar Office</button>
														</form>
														<form action="info_Controller.php" method="post">
															<button
																style="background-color: transparent; border: none; cursor: pointer;"
																name="boton_SolidWorks">• Instalar SolidWorks</button>
														</form>
														<form action="info_Controller.php" method="post">
															<button
																style="background-color: transparent; border: none; cursor: pointer;"
																name="boton_DriverPack">• Utilizar DriverPack</button>
														</form>
														<form action="info_Controller.php" method="post">
															<button
																style="background-color: transparent; border: none; cursor: pointer;"
																name="boton_Windows_Update">• Windows Update</button>
														</form>
														<form action="info_Controller.php" method="post">
															<button
																style="background-color: transparent; border: none; cursor: pointer;"
																name="boton_Paqueteria_Basica">• Paqueteria
																Basica</button>
														</form>
														<form action="info_Controller.php" method="post">
															<button
																style="background-color: transparent; border: none; cursor: pointer;"
																name="boton_Optimizar_Equipo">• Optimizar
																Aranque</button>
														</form>
														<form action="info_Controller.php" method="post">
															<button
																style="background-color: transparent; border: none; cursor: pointer;"
																name="boton_Recuperar_archivos">• Recuperar
																archivos</button>
														</form>
														<form action="info_Controller.php" method="post">
															<button
																style="background-color: transparent; border: none; cursor: pointer; text-align: left; "
																name="boton_Comprobar_Salud_Disco_Duro">• Comprobar
																Salud Disco Duro</button>
														</form>
														<form action="info_Controller.php" method="post">
															<button
																style="background-color: transparent; border: none; cursor: pointer; text-align: left;"
																name="boton_USB_booteable">• USB booteable</button>
														</form>
														<form action="info_Controller.php" method="post">
															<button
																style="background-color: transparent; border: none; cursor: pointer;  text-align: left; "
																name="boton_Respaldo">• Respaldo</button>
														</form>
													</ul>
												</li>
												<li class="has-children">
													<a href="#0">Hardware</a>
													<ul class="is-hidden">
														<li class="go-back"><a href="#"> </a></li>
														<form action="info_Controller.php" method="post">
															<button
																style="background-color: transparent; border: none; cursor: pointer; text-align: left; "
																name="boton_Instalación_de_Disco_duro">• Instalación de
																Disco duro</button>
														</form>
														<form action="info_Controller.php" method="post">
															<button
																style="background-color: transparent; border: none; cursor: pointer;  text-align: left; "
																name="boton_Instalación_RAM">• Instalación de
																RAM</button>
														</form>
														
													</ul>
												</li>
												<li><a href="#"></a></li>
												<li><a href="#"></a></li>
												<li><a href="#"></a></li>
												<li><a href="#"></a></li>
												<li><a href="#"></a></li>
												<li><a href="#"></a></li>
												<li><a href="#"></a></li>
												<li><a href="#"></a></li>
												<li><a href="#"></a></li>
												<li><a href="#"></a></li>
												<li><a href="#"></a></li>

											</ul>
										</li>
										<li class="has-children">
											<a href="#">ESCRITORIO</a>
											<ul class="is-hidden">
												<li class="has-children">
													<a href="#0">Software</a>
													<ul class="is-hidden">
														<li class="go-back"><a href="#"> </a></li>
														<form action="info_Controller.php" method="post">
															<button
																style="background-color: transparent; border: none; cursor: pointer;"
																name="boton_windows">• Instalar Windows</button>
														</form>
														<form action="info_Controller.php" method="post">
															<button
																style="background-color: transparent; border: none; cursor: pointer;"
																name="boton_office">• Instalar Office</button>
														</form>
														<form action="info_Controller.php" method="post">
															<button
																style="background-color: transparent; border: none; cursor: pointer;"
																name="boton_SolidWorks">• Instalar SolidWorks</button>
														</form>
														<form action="info_Controller.php" method="post">
															<button
																style="background-color: transparent; border: none; cursor: pointer;"
																name="boton_DriverPack">• Utilizar DriverPack</button>
														</form>
														<form action="info_Controller.php" method="post">
															<button
																style="background-color: transparent; border: none; cursor: pointer;"
																name="boton_Windows_Update">• Windows Update</button>
														</form>
														<form action="info_Controller.php" method="post">
															<button
																style="background-color: transparent; border: none; cursor: pointer;"
																name="boton_Paqueteria_Basica">• Paqueteria
																Basica</button>
														</form>
														<form action="info_Controller.php" method="post">
															<button
																style="background-color: transparent; border: none; cursor: pointer;"
																name="boton_Optimizar_Equipo">• Optimizar
																Aranque</button>
														</form>
														<form action="info_Controller.php" method="post">
															<button
																style="background-color: transparent; border: none; cursor: pointer;"
																name="boton_Recuperar_archivos">• Recuperar
																archivos</button>
														</form>
														<form action="info_Controller.php" method="post">
															<button
																style="background-color: transparent; border: none; cursor: pointer; text-align: left; "
																name="boton_Comprobar_Salud_Disco_Duro">• Comprobar
																Salud Disco Duro</button>
														</form>
														<form action="info_Controller.php" method="post">
															<button
																style="background-color: transparent; border: none; cursor: pointer; text-align: left;"
																name="boton_USB_booteable">• USB booteable</button>
														</form>
														<form action="info_Controller.php" method="post">
															<button
																style="background-color: transparent; border: none; cursor: pointer;  text-align: left; "
																name="boton_Respaldo">• Respaldo</button>
														</form>
													</ul>
												</li>
												<li class="has-children">
													<a href="#0">Hardware</a>
													<ul class="is-hidden">
														<li class="go-back"><a href="#"> </a></li>
														<form action="info_Controller.php" method="post">
															<button
																style="background-color: transparent; border: none; cursor: pointer; text-align: left;"
																name="boton_Instalación_de_Disco_duro_E">• Instalación
																de Disco duro</button>
														</form>
														<form action="info_Controller.php" method="post">
															<button
																style="background-color: transparent; border: none; cursor: pointer; text-align: left;"
																name="boton_Instalación_RAM_E">• Instalación de
																RAM</button>
														</form>
														<form action="info_Controller.php" method="post">
															<button
																style="background-color: transparent; border: none; cursor: pointer; text-align: left;"
																name="boton_Mantenimiento_Preventivo_E">•
																Limpieza</button>
														</form>
														<form action="info_Controller.php" method="post">
															<button
																style="background-color: transparent; border: none; cursor: pointer; text-align: left;"
																name="boton_Fuente_de_Poder_E">• Fuente de
																Poder</button>
														</form>

													</ul>
												</li>
												<li><a href="#"></a></li>
												<li><a href="#"></a></li>
												<li><a href="#"></a></li>
												<li><a href="#"></a></li>
												<li><a href="#"></a></li>
												<li><a href="#"></a></li>
												<li><a href="#"></a></li>
												<li><a href="#"></a></li>
												<li><a href="#"></a></li>
												<li><a href="#"></a></li>
												<li><a href="#"></a></li>
											</ul>
										</li>


									</ul> <!-- .cd-secondary-dropdown -->
								</li> <!-- .has-children -->
								<li class="has-children">
									<a href="#">Impresoras</a>
									<ul class="cd-secondary-dropdown is-hidden">
										<li class="go-back"><a href="#">Menu</a></li>

										<li class="has-children">
											<a href="#">Software</a>
											<ul class="is-hidden">
												<li class="has-children">
												<li class="go-back"><a href="#"> </a></li>
												<form action="info_Controller.php" method="post">
													<button
														style="background-color: transparent; border: none; cursor: pointer;"
														name="boton_Consultar_IP">• Consultar IP</button>
												</form>
												<form action="info_Controller.php" method="post">
													<button
														style="background-color: transparent; border: none; cursor: pointer;  text-align: left; "
														name="boton_Impresion_de_Prueba">• Impresion de Prueba</button>
												</form>
												<form action="info_Controller.php" method="post">
													<button
														style="background-color: transparent; border: none; cursor: pointer;"
														name="boton_Conectar_en_Red">• Conectar en Red</button>
												</form>
												<form action="info_Controller.php" method="post">
													<button
														style="background-color: transparent; border: none; cursor: pointer;"
														name="boton_Conectar_con_Cable">• Conectar con Cable</button>
												</form>
										</li>

										<li><a href="#"></a></li>
										<li><a href="#"></a></li>
										<li><a href="#"></a></li>
										<li><a href="#"></a></li>
										<li><a href="#"></a></li>
										<li><a href="#"></a></li>

									</ul>
								</li>
								<li class="has-children">
									<a href="#">Harware</a>
									<ul class="is-hidden">
										<li class="has-children">
										<li class="go-back"><a href="#"> </a></li>
										<form action="info_Controller.php" method="post">
											<button
												style="background-color: transparent; border: none; cursor: pointer;  text-align: left; "
												name="boton_Cambio_de_Cartucho">• Cambio de Cartucho</button>
										</form>
										<form action="info_Controller.php" method="post">
											<button
												style="background-color: transparent; border: none; cursor: pointer;"
												name="boton_Mantenimiento">• Mantenimiento</button>
										</form>

								</li>

								<li><a href="#"></a></li>
								<li><a href="#"></a></li>
								<li><a href="#"></a></li>
								<li><a href="#"></a></li>
								<li><a href="#"></a></li>
								<li><a href="#"></a></li>

							</ul>
							</li>


							</ul> <!-- .cd-secondary-dropdown -->
							</li> <!-- .has-children -->
							<li class="has-children">
								<a href="#">Scaners</a>
								<ul class="cd-secondary-dropdown is-hidden">
									<li class="go-back"><a href="#">Menu</a></li>

									<li class="has-children">
										<a href="#">Software</a>
										<ul class="is-hidden">
											<li class="has-children">
											<li class="go-back"><a href="#"> </a></li>

											<form action="info_Controller.php" method="post">
												<button
													style="background-color: transparent; border: none; cursor: pointer;"
													name="boton_Escaneo_de_Prueba">• Escaneo de Prueba</button>
											</form>
											<form action="info_Controller.php" method="post">
												<button
													style="background-color: transparent; border: none; cursor: pointer;"
													name="boton_Escaneo_a_carpeta">• Escaneo a carpeta</button>
											</form>
											<form action="info_Controller.php" method="post">
												<button
													style="background-color: transparent; border: none; cursor: pointer;"
													name="boton_Conectar_en_Red_S">• Conectar en Red</button>
											</form>
											<form action="info_Controller.php" method="post">
												<button
													style="background-color: transparent; border: none; cursor: pointer;"
													name="boton_Conectar_con_Cable_S">• Conectar con Cable</button>
											</form>
									</li>

									<li><a href="#"></a></li>
									<li><a href="#"></a></li>
									<li><a href="#"></a></li>
									<li><a href="#"></a></li>
									<li><a href="#"></a></li>
									<li><a href="#"></a></li>
									<li><a href="#"></a></li>

								</ul>
							</li>
							<li class="has-children">
								<a href="#">Harware</a>
								<ul class="is-hidden">
									<li class="has-children">
									<li class="go-back"><a href="#"> </a></li>
									<form action="info_Controller.php" method="post">
										<button style="background-color: transparent; border: none; cursor: pointer;"
											name="boton_Mantenimiento_S">• Mantenimiento</button>
									</form>
							</li>

							<li><a href="#"></a></li>
							<li><a href="#"></a></li>
							<li><a href="#"></a></li>
							<li><a href="#"></a></li>
							<li><a href="#"></a></li>
							<li><a href="#"></a></li>

							</ul>
							</li>


							</ul> <!-- .cd-secondary-dropdown -->
							</li> <!-- .has-children -->
							<li class="has-children">
								<a href="#">Reportes</a>
								<ul class="cd-secondary-dropdown is-hidden">
									<li class="go-back"><a href="#">Menu</a></li>

									<li class="has-children">
										<a href="#">ACCIONES</a>
										<ul class="is-hidden">
											<li class="has-children">

											<li class="go-back"><a href="#"> </a></li>
											<form action="info_Controller.php" method="post">
												<button
													style="background-color: transparent; border: none; cursor: pointer;"
													name="boton_Reporte">• Consultar Reporte</button>
											</form>
									</li>

									<li><a href="#"></a></li>
									<li><a href="#"></a></li>
									<li><a href="#"></a></li>
									<li><a href="#"></a></li>
									<li><a href="#"></a></li>
									<li><a href="#"></a></li>

								</ul>
							</li>



							</ul>
							</li>

							</ul>
						</nav>
					</div>
				</div>
				<div class="move-text">
					<div class="marquee"><a> Coordinación de Tecnologías para el Aprendizaje.</span></a></div>
					<script type="text/javascript" src="js/jquery.marquee.min.js"></script>
					<script>
						$('.marquee').marquee({ pauseOnHover: true });
					</script>
				</div>
			</div>
		</div>
	</div>
	<!-- //header -->
	<!-- breadcrumbs -->
	<div class="container">
		<ol class="breadcrumb breadcrumb1">
			<li><a href="principal.php">Inicio</a></li>
			<li class="active">
				<?php echo $row_categoria['nombre']; ?>
			</li>
		</ol>
		<div class="clearfix"> </div>
	</div>
	<!-- //breadcrumbs -->
	<!-- products -->
	<div class="products">
		<div class="container">
			<div class="single-page">
				<div class="single-page-row" id="detail-21">
					<div class="col-md-6 single-top-left">
						<div class="flexslider">
							<ul class="slides">
								<li data-thumb="images/<?php echo $row_postgres['imagen']; ?>.jpg">
									<div class="thumb-image detail_images"> <img
											src="images/<?php echo $row_postgres['imagen']; ?>.jpg"
											data-imagezoom="true" class="img-responsive" alt=""> </div>
								</li>
								<li data-thumb="images/<?php echo $row_postgres['imagen_2']; ?>.jpg">
									<div class="thumb-image"> <img
											src="images/<?php echo $row_postgres['imagen_2']; ?>.jpg"
											data-imagezoom="true" class="img-responsive" alt=""> </div>
								</li>
								<li data-thumb="images/<?php echo $row_postgres['imagen_3']; ?>.jpg">
									<div class="thumb-image"> <img
											src="images/<?php echo $row_postgres['imagen_3']; ?>.jpg"
											data-imagezoom="true" class="img-responsive" alt=""> </div>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-6 single-top-right">
						<h3 class="item_name">
							<?php echo $row_categoria['nombre']; ?>
						</h3>
						<p>
							<?php echo $row_categoria['descripcion']; ?>
						</p>
					</div>
					<div class="clearfix"> </div>
				</div>

			</div>
			<div>

				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<h3 class="w3ls-title">Video de apoyo</h3>
				<iframe width="950" height="550" src="<?php echo $row_postgres['video']; ?>"
					title="YouTube video player" frameborder="0"
					allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
					allowfullscreen></iframe>
			</div>

			<!-- collapse-tabs -->
			<div class="collpse tabs">
				<h3 class="w3ls-title">Proceso</h3>
				<div class="panel-group collpse" id="accordion" role="tablist" aria-multiselectable="true">
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingOne">
							<h4 class="panel-title">
								<a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion"
									href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									<i class="fa fa-file-text-o fa-icon" aria-hidden="true"></i> Pasos a seguir <span
										class="fa fa-angle-down fa-arrow" aria-hidden="true"></span> <i
										class="fa fa-angle-up fa-arrow" aria-hidden="true"></i>
								</a>
							</h4>
						</div>
						<!-- Primera abierta "panel-collapse collapse in" -->
						<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
							aria-labelledby="headingOne">
							<div class="panel-body">
								<p>
									<?php echo $row_categoria['pasos']; ?>
								</p>
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingTwo">
							<h4 class="panel-title">
								<a class="collapsed pa_italic" role="button" data-toggle="collapse"
									data-parent="#accordion" href="#collapseTwo" aria-expanded="false"
									aria-controls="collapseTwo">
									<i class="fa fa-info-circle fa-icon" aria-hidden="true"></i>Requisitos <span
										class="fa fa-angle-down fa-arrow" aria-hidden="true"></span> <i
										class="fa fa-angle-up fa-arrow" aria-hidden="true"></i>
								</a>
							</h4>
						</div>
						<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
							aria-labelledby="headingTwo">
							<div class="panel-body">
								<p>
									<?php echo $row_categoria['requisitos']; ?>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- **************************ARBOL******************************************-->
			<?php

			function clasificarTemas($tema, $arbolDecisiones)
			{
				while (isset($arbolDecisiones['atributo'])) {
					$atributo = $arbolDecisiones['atributo'];
					$valor = $tema[$atributo];
					$arbolDecisiones = $arbolDecisiones['ramas'][$valor];
				}
				return $arbolDecisiones;
			}

			// Árbol de decisiones
			$arbolDecisiones = array(
				'atributo' => 'Categoria',
				'ramas' => array(
					'PC' => array(
						'atributo' => 'Software',
						'ramas' => array(
							'Instalar Windows' => 'PC',
							'Instalar Office' => 'PC',
							'Instalar Solidworks' => 'PC',
							'DriverPack' => 'PC',
							'Windows Update' => 'PC',
							'Paqueteria Basica' => 'PC',
							'Optimizar arranque' => 'PC',
							'Recuperar archivos' => 'PC',
							'Comprobar Salud Disco Duro' => 'PC',
							'Memoria booteable' => 'PC',
							'Respaldo' => 'PC'

						)
					),
					'Laptop' => array(
						'atributo' => 'Hardware',
						'ramas' => array(
							'Instalación RAM' => 'Laptop',
							'Limpieza' => 'Laptop',
							'Instalación de Disco duro' => 'Laptop'
						)
					),
					'Escritorio' => array(
						'atributo' => 'Hardware',
						'ramas' => array(
							'Instalación de Disco duro PC' => 'Escritorio',
							'Instalación RAM PC' => 'Escritorio',
							'Limpieza PC' => 'Escritorio',
							'Fuente de Poder' => 'Escritorio'
						)
					),
					'Impresora' => array(
						'atributo' => 'Software',
						'ramas' => array(
							'Consultar IP' => 'Impresora',
							'Impresion de Prueba' => 'Impresora',
							'Conectar en Red' => 'Impresora',
							'Conectar con Cable' => 'Impresora'
						)
					),
					'Impresoras' => array(
						'atributo' => 'Hardware',
						'ramas' => array(
							'Cambio de Cartucho' => 'Impresoras',
							'Mantenimiento' => 'Impresoras'
						)
					),
					'Scanner' => array(
						'atributo' => 'Software',
						'ramas' => array(
							'Escaneo de Prueba' => 'Scanner',
							'Escaneo a carpeta' => 'Scanner',
							'Conectar Scaner en Red' => 'Scanner',
							'Conectar Scaner con Cable' => 'Scanner'
						)
					),
					'Scanners' => array(
						'atributo' => 'Hardware',
						'ramas' => array(
							'Mantenimiento Scaner' => 'Scanners'
						)
					)
				)
			);

			$tema = array($row_categoria['tipo'] => $row_categoria['nombre'], 'Categoria' => $row_categoria['categoria']);
			$resultado_arbol = clasificarTemas($tema, $arbolDecisiones);

			switch ($resultado_arbol) {
				case 'PC':
					$id_tema = [];
					$id_tema = TokenPC(5);
					$consulta_id_tema = "SELECT * FROM categorias WHERE ID ='$id_tema[0]' OR ID = '$id_tema[1]'OR ID = '$id_tema[2]'OR ID = '$id_tema[3]' OR ID = '$id_tema[4]' ORDER BY id ASC ";
					$ejecuta_id_tema = $conn->query($consulta_id_tema);
					$result_postgres_recomendacion = pg_query($conn_postgres, "SELECT * FROM data_categorias WHERE ID ='$id_tema[0]' OR ID = '$id_tema[1]'OR ID = '$id_tema[2]'OR ID = '$id_tema[3]' OR ID = '$id_tema[4]' ORDER BY id ASC ");

					break;
				case 'Laptop':
					$id_tema = [];
					$id_tema = TokenLaptop(2);

					$consulta_id_tema = "SELECT * FROM categorias WHERE ID ='$id_tema[0]' OR ID = '$id_tema[1]' ORDER BY id ASC ";
					$consultapostgress = "SELECT * FROM data_categorias WHERE ID ='$id_tema[0]' OR ID = '$id_tema[1]' ORDER BY id ASC ";
					$ejecuta_id_tema = $conn->query($consulta_id_tema);
					$result_postgres_recomendacion = pg_query($conn_postgres, $consultapostgress);


					break;
				case 'Escritorio':
					$id_tema = [];
					$id_tema = TokenEscritorio(4);

					$consulta_id_tema = "SELECT * FROM categorias WHERE ID ='$id_tema[0]' OR ID = '$id_tema[1]'OR ID = '$id_tema[2]'OR ID = '$id_tema[3]' ORDER BY id ASC ";
					$consultapostgress = "SELECT * FROM data_categorias WHERE ID ='$id_tema[0]' OR ID = '$id_tema[1]'OR ID = '$id_tema[2]'OR ID = '$id_tema[3]' ORDER BY id ASC ";
					$ejecuta_id_tema = $conn->query($consulta_id_tema);
					$result_postgres_recomendacion = pg_query($conn_postgres, $consultapostgress);
					break;
				case 'Impresora':
					$id_tema = [];
					$id_tema = TokenImpresora(4);

					$consulta_id_tema = "SELECT * FROM categorias WHERE ID ='$id_tema[0]' OR ID = '$id_tema[1]'OR ID = '$id_tema[2]'OR ID = '$id_tema[3]' ORDER BY id ASC ";
					$consultapostgress = "SELECT * FROM data_categorias WHERE ID ='$id_tema[0]' OR ID = '$id_tema[1]'OR ID = '$id_tema[2]'OR ID = '$id_tema[3]' ORDER BY id ASC ";
					$ejecuta_id_tema = $conn->query($consulta_id_tema);
					$result_postgres_recomendacion = pg_query($conn_postgres, $consultapostgress);
					break;
				case 'Impresoras':
					$id_tema = [];
					$id_tema = TokenImpresoras(2);

					$consulta_id_tema = "SELECT * FROM categorias WHERE ID ='$id_tema[0]' OR ID = '$id_tema[1]' ORDER BY id ASC";
					$consultapostgress = "SELECT * FROM data_categorias WHERE ID ='$id_tema[0]' OR ID = '$id_tema[1]' ORDER BY id ASC ";
					$ejecuta_id_tema = $conn->query($consulta_id_tema);
					$result_postgres_recomendacion = pg_query($conn_postgres, $consultapostgress);
					break;
				case 'Scanner':
					$id_tema = [];
					$id_tema = TokenScanner(5);

					$consulta_id_tema = "SELECT * FROM categorias WHERE ID ='$id_tema[0]' OR ID = '$id_tema[1]'OR ID = '$id_tema[2]'OR ID = '$id_tema[3]' OR ID = '$id_tema[4]' ORDER BY id ASC ";
					$consultapostgress = "SELECT * FROM data_categorias WHERE ID ='$id_tema[0]' OR ID = '$id_tema[1]'OR ID = '$id_tema[2]'OR ID = '$id_tema[3]' OR ID = '$id_tema[4]' ORDER BY id ASC ";
					$ejecuta_id_tema = $conn->query($consulta_id_tema);
					$result_postgres_recomendacion = pg_query($conn_postgres, $consultapostgress);
					break;
				case 'Scanners':
					$id_tema = [];
					$id_tema = TokenScanners(5);

					$consulta_id_tema = "SELECT * FROM categorias WHERE ID ='$id_tema[0]' OR ID = '$id_tema[1]'OR ID = '$id_tema[2]'OR ID = '$id_tema[3]' OR ID = '$id_tema[4]' ORDER BY id ASC ";
					$consultapostgress = "SELECT * FROM data_categorias WHERE ID ='$id_tema[0]' OR ID = '$id_tema[1]'OR ID = '$id_tema[2]'OR ID = '$id_tema[3]' OR ID = '$id_tema[4]'ORDER BY id ASC ";
					$ejecuta_id_tema = $conn->query($consulta_id_tema);
					$result_postgres_recomendacion = pg_query($conn_postgres, $consultapostgress);
					break;
				default:
					echo "Opción no válida";
					break;
			}

			?>



			<!-- ********************************************************************-->
			<!-- temas relacionados -->
			<div class="recommend">
				<h3 class="w3ls-title">Temas relacionados</h3>
				<script>
					$(document).ready(function () {
						$("#owl-demo5").owlCarousel({

							autoPlay: 3000, //Set AutoPlay to 3 seconds

							items: 4,
							itemsDesktop: [640, 5],
							itemsDesktopSmall: [414, 4],
							navigation: true

						});

					}); 
				</script>
				<div id="owl-demo5" class="owl-carousel">
					<?php
					if ($ejecuta_id_tema->num_rows > 0) {
						while ($row_recomendacion = $ejecuta_id_tema->fetch_assoc()) {
							?>
							<?php $row_postgres_recomendacion = pg_fetch_assoc($result_postgres_recomendacion); ?>
							<div class="item">
								<div class="glry-w3agile-grids agileits">
									<a><img src="images/<?php echo $row_postgres_recomendacion['imagen']; ?>.jpg" width="200"
											height="200"></a>
									<div class="view-caption agileits-w3layouts">
										<h4><a>
												<?php echo $row_recomendacion['nombre']; ?>
											</a></h4>
										<form action="info_Controller.php" method="post">
											<button style="background-color: transparent; border: none; cursor: pointer;"
												name=<?php echo $row_recomendacion['boton']; ?>>Consultar</button>
										</form>
									</div>
								</div>
							</div>
							<?php
						}

					}
					?>
				</div>

			</div>
			<!-- //collapse -->
		</div>
	</div>
	<!--//products-->
	<!-- subscribe -->
	<div class="subscribe">
			<div class="container">
				<div class="col-md-6 social-icons w3-agile-icons ">
					<ul>
						<li><a href="https://www.facebook.com/udegcucei?mibextid=LQQJ4d" target="_blank" class="fa fa-facebook icon facebook"> </a></li>
						<li><a id="miBoton" class="fa fa-rss icon rss"> </a></li>
					</ul>

				</div>
				

					<script>
					document.getElementById("miBoton").addEventListener("click", function() {
						alert("Contraseña Wifi: cta.2022B");
					});
					</script>

				<div class="clearfix"> </div>
			</div>
		</div>
	<!-- //subscribe -->
	<!-- footer -->
	<div id="footerContainer"></div>
	<script>
        // Cargar el contenido del footer usando JavaScript
        fetch('footer.html')
            .then(response => response.text())
            .then(data => {
                document.getElementById('footerContainer').innerHTML = data;
            });
    </script>
	<!-- menu js aim -->
	<script src="js/jquery.menu-aim.js"> </script>
	<script src="js/main.js"></script> <!-- Resource jQuery -->
	<!-- //menu js aim -->
	
</body>

</html>