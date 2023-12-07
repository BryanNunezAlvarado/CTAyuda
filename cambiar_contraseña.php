<!DOCTYPE html>
<html lang="en">

<head>
	<title>CTAyuda</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
	
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/animate.min.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/menu.css" rel="stylesheet" type="text/css" media="all" /> 
	
	<link href="css/font-awesome.css" rel="stylesheet">
	
	<script src="js/jquery-2.2.3.min.js"></script>
	<script src="js/jquery-scrolltofixed-min.js" type="text/javascript"></script>>
	<script>
		$(document).ready(function () {

			

			$('.header-two').scrollToFixed();
			

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
	<!-- //js -->
	<!-- web-fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic'
		rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Lovers+Quarrel' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Offside' rel='stylesheet' type='text/css'>
	<!-- web-fonts -->
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
								aria-hidden="true"></i> Mi Cuenta<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="index.html">Inicio de sesión </a></li>
							<li><a href="signup.html">Crear Cuenta</a></li>

						</ul>
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

				<div class="header-cart">
					<div class="my-account">
						<a href="contact_nr.html"><i class="fa fa-map-marker" aria-hidden="true"></i> Contacto</a>
					</div>

					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div><!-- //header-two -->
		<div class="header-three"><!-- header-three -->
			<div class="container">
				<div class="move-text">
					<div class="marquee"><a>Coordinación de Tecnologías para el Aprendizaje.</span></a></div>
					<script type="text/javascript" src="js/jquery.marquee.min.js"></script>
					<script>
						$('.marquee').marquee({ pauseOnHover: true });
					  //@ sourceURL=pen.js
					</script>
				</div>
			</div>
		</div>
	</div>
	<!-- //header -->
	<!-- login-page -->
	<div class="login-page">
		<div class="container">
			<h3 class="w3ls-title w3ls-title1">Cambiar Contraseña</h3>
			<div class="login-body">

				<form action="recuperar_contraseña.php" method="post">
					<input type="text" class="user" name="codigo_verificacion" placeholder="Codigo de Verificación"
						required="">
					<input type="password" name="password_1" class="lock" placeholder="Nueva Contraseña" required="">
					<input type="password" name="password_2" class="lock" placeholder="Confirmar Contraseña"
						required="">
					<input type="submit" value="Recuperar contraseña" name="boton_contraseña">
					<div class="forgot-grid">

						<div class="clearfix"> </div>
					</div>
				</form>
			</div>
			<h6> ¿Recordaste la contraseña? <a href="index.html">Inicia sesión ahora»</a> </h6>

		</div>
	</div>
	<!-- //login-page -->
	<!-- footer-top -->

	<!-- //footer-top -->
	<!-- subscribe -->
	<div class="subscribe">
		<div class="container">
			<div class="subscribe">
				<div class="container">


					<div class="clearfix"> </div>
				</div>
			</div>

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
	
	
	<!-- menu js aim -->
	<script src="js/jquery.menu-aim.js"> </script>
	<script src="js/main.js"></script> <!-- Resource jQuery -->
	<!-- //menu js aim -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="js/bootstrap.js"></script>
</body>

</html>