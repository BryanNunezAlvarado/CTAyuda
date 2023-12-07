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
$_SESSION['creador'] = $row['nombre'];

$consulta_categoria = "SELECT * FROM categorias WHERE nombre = '$validar_categoria'";
$ejecuta_categoria = $conn->query($consulta_categoria);
$row_categoria = $ejecuta_categoria->fetch_assoc();

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


	<!-- cdn icnonos-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
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

	<!-- //header -->

	<?php
	include_once "model/conexion.php";
	$sentencia = $bd->query("select * from reporte");
	$persona = $sentencia->fetchAll(PDO::FETCH_OBJ);
	//print_r($persona);
	?>

	<div class="container mt-5">
		<div class="row justify-content-center">
			<div class="col-md-7">
				<!-- inicio alerta -->
				<?php
				if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'falta') {
					?>
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<strong>Error!</strong> Rellena todos los campos.
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
					<?php
				}
				?>


				<?php
				if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'registrado') {
					?>
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						<strong>Registrado!</strong> Se agregaron los datos.
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
					<?php
				}
				?>



				<?php
				if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'error') {
					?>
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<strong>Error!</strong> Vuelve a intentar.
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
					<?php
				}
				?>



				<?php
				if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'editado') {
					?>
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						<strong>Cambiado!</strong> Los datos fueron actualizados.
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
					<?php
				}
				?>


				<?php
				if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'eliminado') {
					?>
					<div class="alert alert-warning alert-dismissible fade show" role="alert">
						<strong>Eliminado!</strong> Los datos fueron borrados.
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
					<?php
				}
				?>

				<!-- fin alerta -->
				<div class="card">
					<div class="card-header">
						Lista de reportes
					</div>
					<div class="p-5">
						<table class="table align-middle">
							<thead>
								<tr>
									<th scope="col">Numero de reporte</th>
									<th scope="col">Descripcion</th>
									<th scope="col">Status</th>
									<th scope="col">Comentarios</th>
									<th scope="col">Creador</th>
									<th scope="col" colspan="2">Opciones</th>
								</tr>
							</thead>
							<tbody>
							<style>
								td {
									max-width: 210px;
									word-wrap: break-word; 
								
								}
							</style>
								<?php
								foreach ($persona as $dato) {
									?>

									<tr>
										<td scope="row">
											<?php echo $dato->codigo; ?>
										</td>
										<td align="justify">
											<?php echo $dato->descripcion; ?>
										</td>
										<td>
											<?php echo $dato->status; ?>
										</td>
										<td align="justify">
											<?php echo $dato->comentarios; ?>
										</td>
										<td>
											<?php echo $dato->creador; ?>
										</td>
										<td><a class="text-success"
												href="editar_reporte.php?codigo=<?php echo $dato->codigo; ?>"><i
													class="bi bi-pencil-square"></i></a></td>
										<td><a onclick="return confirm('Estas seguro de eliminar?');" class="text-danger"
												href="eliminar_reporte.php?codigo=<?php echo $dato->codigo; ?>"><i
													class="bi bi-trash"></i></a></td>
									</tr>

									<?php
								}
								?>

							</tbody>
						</table>

					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<div class="card-header">
						Crear reporte
					</div>
					<form class="p-4" method="POST" action="reportes_controller.php">
						<div class="mb-3">
							<label class="form-label">Numero de reporte: </label>
							<input type="number" class="form-control" name="txtReporte" required>
						</div>
						<div class="mb-3">
							<label class="form-label">Descripcion: </label>
							<input type="text" class="form-control" name="txtDescripcion" autofocus required>
						</div>
						<div class="mb-3">
							<label class="form-label">Status: </label>
							<select name="txtStatus" class="form-control" id="lang" autofocus required>
								<option value="Listo">Listo</option>
								<option value="En proceso">En proceso</option>
								<option value="Terminado">Terminado</option>
							</select>
						</div>
						<div class="mb-3">
							<label class="form-label">Comentarios: </label>
							<input type="text" class="form-control" name="txtComentarios" autofocus required>
						</div>
						<div class="d-grid">
							<input type="hidden" name="btn_registrar_reporte" value="1">
							<input type="submit" class="btn btn-primary" value="Registrar">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>





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
	<!-- cart-js -->
	
	<script src="js/jquery.menu-aim.js"> </script>
	<script src="js/main.js"></script> <!-- Resource jQuery -->
	<!-- //menu js aim -->
	<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
</body>

</html>