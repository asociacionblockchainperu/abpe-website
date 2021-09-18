<?php

/* site info */
$siteName = 'Perublockchain';
$urlSite = 'http://perublockchain.org';
$imgShared = '/assets/img/mockups/1.png';
$googleURL = 'https://play.google.com/store/apps/details?id=pe.monkey.rastrar';
$appleURL = 'https://www.apple.com/la/ios/app-store/';

/*
 * Vars for SEO
 */
$title = $siteName .' | Asociación Blockchain Perú';
$description = 'Fomentamos la adopción del uso de Blockhain en el Perú.';

?>
<!doctype html>
<html class="no-js" lang="es-PE">
<head>


	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta name="robots" content="noindex, nofollow">

	<!-- Google -->
	<title><?php echo $title; ?></title>
	<meta name="description" content="<?php echo $description; ?>">
	<meta name="author" content="<?php echo $siteName; ?>">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
	<!-- Facebook -->
	<meta property="og:type" content="website">
	<meta property="og:title" content="<?php echo $title; ?>">
	<meta property="og:description" content="<?php echo $description; ?>">
	<meta property="og:image" content="<?php echo $imgShared; ?>">
	<meta property="og:site_name" content="<?php echo $siteName; ?>">
	<meta property="og:url" content="<?php echo $urlSite; ?>">

	<!-- Twitter -->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:title" content="<?php echo $title; ?>">
	<meta name="twitter:description" content="<?php echo $description; ?>">
	<meta name="twitter:image" content="<?php echo $imgShared; ?>">
	<meta name="twitter:site" content="<?php echo $urlSite; ?>">
    <script src="/js/pnglib.js"></script>
    <script src="/js/identicon.js"></script>
    <!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"--!>


	<!-- Favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="/assets/img/favicon/apple-touch-icon.png">
	<!--link rel="icon" type="image/png" sizes="32x32" href="/assets/img/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/assets/img/favicon/favicon-16x16.png"--!>
	<link rel="manifest" href="/assets/img/favicon/site.webmanifest">
	<link rel="mask-icon" href="/assets/img/favicon/safari-pinned-tab.svg" color="#e9505b">
	<meta name="msapplication-TileColor" content="#e9505b">
	<meta name="theme-color" content="#e9505b">

	<!-- ***** All CSS Files ***** -->

	<!-- Style css -->
	<link rel="stylesheet" href="/assets/css/style.css?v=2">

	<!-- Responsive css -->
	<link rel="stylesheet" href="/assets/css/responsive.css">
    <style>
    .botonPrinc {
        background: white;
        width: 140px;
        padding: 7px;
        text-align: center;
        cursor: pointer;
        border-radius: 5px;
        font-size: 14px;
            margin: 5px;
        }
    </style>
</head>

<body>

	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MRH3JZF"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

	<!--====== Preloader Area Start ======-->
	<div class="preloader-main">
		<div class="preloader-wapper">
			<svg class="preloader" xmlns="http://www.w3.org/2000/svg" version="1.1" width="600" height="200">
				<defs>
					<filter id="goo" x="-40%" y="-40%" height="200%" width="400%">
						<feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
						<feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -8" result="goo" />
					</filter>
				</defs>
				<g filter="url(#goo)">
					<circle class="dot" cx="50" cy="50" r="25" fill="#e9505b" />
					<circle class="dot" cx="50" cy="50" r="25" fill="#e9505b" />
				</g>
			</svg>
			<div>
				<div class="loader-section section-left"></div>
				<div class="loader-section section-right"></div>
			</div>
		</div>
	</div>

	<div class="main">
		<!-- ***** Header Start ***** -->
		<header class="navbar navbar-sticky navbar-expand-lg navbar-dark" >
			<div class="container position-relative">
				<a class="navbar-brand" href="<?php echo $urlSite; ?>">
					<!--img class="navbar-brand-regular" src="/assets/img/logo/logo-white.svg" alt="<?php echo $siteName; ?>">
					<img class="navbar-brand-sticky" src="/assets/img/logo/logo.svg" alt="<?php echo $siteName; ?>"--!>
					<p style="font-size: 30px;color: white;">BLOCKCHAIN</p>
					<p style="font-size: 10px;color: white;">PERU</p>
					
				</a>
				<button class="navbar-toggler d-lg-none" type="button" data-toggle="navbarToggler" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="navbar-inner">
					<!--  Mobile Menu Toggler -->
					<button class="navbar-toggler d-lg-none" type="button" data-toggle="navbarToggler" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<nav>
						<ul class="navbar-nav" id="navbar-nav">
						    <li class="nav-item">
								<a class="nav-link scroll" href="#home">Inicio</a>
							</li>
							<li class="nav-item">
								<a class="nav-link scroll" href="#howWork">¿Para qué nos unimos?</a>
							</li>
							<li class="nav-item">
								<a class="nav-link scroll" href="#about">Acerca de nosotros</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="https://www.meetup.com/perublockchain/" target="_blank">Próximos cursos</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
		<!-- ***** Header End ***** -->

		<!-- ***** Welcome Area Start ***** -->
		<section id="home" class="section welcome-area bg-overlay overflow-hidden d-flex align-items-center">
			<div class="container">
				<div class="row align-items-center">
					<!-- Welcome Intro Start -->
					<div class="col-12 col-md-7 col-lg-6">
						<div class="welcome-intro">
							<h1 class="text-white wow fadeInUp" data-wow-delay="0.15s">Asociación Blockchain del Perú.</h1>
							<p class="text-white my-4 wow fadeInUp" data-wow-delay="0.25s">Somos una comunidad civil integrada por emprendedores, académicos y profesionales en diferentes materias que promovemos distintas acciones para apoyar la adopción de la tecnologia blockchain en el Perú.</p>
							<b class="text-white">Manifiesto:</b>
							<ul class="text-white list-use">
								<li>Somos una comunidad sin ideologias, apartidario y apolítico.</li>
								<li>Somos agnósticos al uso de cualquier tecnología en particular.</li>
								<li>Brindamos asesorías y capacitaciones gratuitas que fomenten el uso de Blockchain en gremios empresariales, instituciones gubernamentales y el sector educativo.</li>
								<li>Difundimos los proyectos, casos de usos o cualquier iniciativas comprobada de uso de Blockchain en el Perú para que pueda ser reutilizada.</li>
							</ul>
							<!-- Store Buttons -->
							<div class="button-group store-buttons wow fadeInUp" data-wow-delay="0.5s" style="display: inline-flex;">
							    
							    <a class="botonPrinc" href="https://es.surveymonkey.com/r/78PJR78" target="_blank" style="text-align: center;">ASOCIATE</a>
							    <a class="botonPrinc" href="https://meetu.ps/c/46T85/y8vSv/d" target="_blank" style="text-align: center;">COMUNIDAD</a>
							    <a class="botonPrinc" onclick="showHelloWord()" target="_blank" style="text-align: center;">¿HOLA MUNDO?</a>
							    <!--div class="botonPrinc ">COLABORA</div>
							    <div class="botonPrinc ">CONTÁCTANOS</div-->
							    
							    
							</div>
							<!--div class="button-group store-buttons wow fadeInUp" data-wow-delay="0.5s">
								<a href="<?php echo $googleURL; ?>" target="_blank">
									<img src="/assets/img/icon/google-play.png" alt="Disponible en Google Play">
								</a>
								<a class="link-disable" href="<?php echo $appleURL; ?>" target="_blank">
									<img src="/assets/img/icon/app-store.png" alt="Consíguelo en el AppStore">
								</a>
							</div--!>
							<!--<span class="d-inline-block text-white fw-3 font-italic mt-3">* Available on iPhone, iPad and all Android devices</span>-->
						</div>
					</div>
					<div class="col-12 col-md-5 col-lg-6">
						<!-- Welcome Thumb -->
						<div class="welcome-thumb mx-auto wow fadeInRight" data-wow-delay="0.7s" style="max-width: 490px !important;float: right;">
							<img src="/assets/img/mockups/1.png" alt="<?php echo $siteName; ?>">
						</div>
					</div>
				</div>
			</div>
			<!-- Shape Bottom -->
			<div class="shape-bottom">
				<svg viewBox="0 0 1920 310" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="svg replaced-svg">
					<defs></defs>
					<g id="shapeHome" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						<g id="shapeHome" transform="translate(0.000000, -554.000000)" fill="#FFFFFF">
							<path d="M-3,551 C186.257589,757.321118 319.044414,856.322454 395.360475,848.004007 C509.834566,835.526337 561.525143,796.329212 637.731734,765.961549 C713.938325,735.593886 816.980646,681.910577 1035.72208,733.065469 C1254.46351,784.220361 1511.54925,678.92359 1539.40808,662.398665 C1567.2669,645.87374 1660.9143,591.478574 1773.19378,597.641868 C1848.04677,601.75073 1901.75645,588.357675 1934.32284,557.462704 L1934.32284,863.183395 L-3,863.183395" id="shapeHome"></path>
						</g>
					</g>
				</svg>
			</div>
		</section>
		<!-- ***** Welcome Area End ***** -->

		<!-- ***** Counter Area Start ***** -->
		<section class="section counter-area ptb_50">
			<div class="container">
				<div class="row justify-content-center align-items-center">
					<div class="col-lg-3 col-md-5 col-sm-6 col-12 single-counter text-center">
						<div class="counter-inner p-3 p-lg-0 wow fadeInUp" data-wow-delay="0.15s">
							<div class="counter-item d-inline-block mb-3">
								<span class="counter1 fw-7">Asociados</span>
							</div>
							<div class="desc">Abierto para cualquier gremios empresariales, statups, instituciones, empresas y profesionales de distintos sectores que fomentan la adopción de Blockchain en el Perú.</div>
							<div>
							    <p style="margin-bottom: 10px;font-size: 13px;">Si deseas apoyarnos en esta misión puedes solicitar tu alta</p>
							    <a class="botonPrinc" href="https://es.surveymonkey.com/r/78PJR78" target="_blank" style="text-align: center;background: #236294;color: white;padding: 10px;">ASÓCIATE</a>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-5 col-sm-6 col-12 single-counter text-center">
						<div class="counter-inner p-3 p-lg-0 wow fadeInUp" data-wow-delay="0.25s">
							<div class="counter-item d-inline-block mb-3">
								<span class="counter1 fw-7">Manifiesto</span>
							</div>
							<div class="desc">Creemos en el empoderamiento al ciudadano de sus datos personales, fomentamos la igualdad, privacidad, anonimización, la transparencia, la eliminación de intermediarios y la correcta trazabilidad de la información.</div>
							<div>
							    <p style="margin-bottom: 10px;font-size: 13px;"><span>1</span> persona ha firmado el documento de compromiso</p>
							    <a class="botonPrinc" href="https://es.surveymonkey.com/r/78PJR78" target="_blank" style="text-align: center;background: #236294;color: white;padding: 10px;">FÍRMALO</a>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-5 col-sm-6 col-12 single-counter text-center">
						<div class="counter-inner p-3 p-lg-0 wow fadeInUp" data-wow-delay="0.35s">
							<div class="counter-item d-inline-block mb-3">
								<span class="counter1 fw-7">Implementación</span>
							</div>
							<div class="desc">Certificamos el correcto uso de redes blockchain y promocionamos soluciones existentes con la finalidad que las organizaciones peruanas puedan reducir costos y tiempos en su adopción.</div>
							<div>
							    <p style="margin-bottom: 10px;font-size: 13px;">Prueba nuestras APIs REST para uso de la Blockchain como evidencias digitales</p>
							    <a class="botonPrinc" href="https://es.surveymonkey.com/r/78PJR78" target="_blank" style="text-align: center;background: #236294;color: white;padding: 10px;">ALTA</a>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-5 col-sm-6 col-12 single-counter text-center">
						<div class="counter-inner p-3 p-lg-0 wow fadeInUp" data-wow-delay="0.45s">

							<div class="counter-item d-inline-block mb-3">
								<span class="counter1 fw-7">Actividades</span>
							</div>
							<div class="desc">Puedes participar de nuestros talleres gratuitos o asesorias personalizadas para evaluar el uso de esta tecnología en tu organización o en tu emprendimiento.</div>
							<div>
							    <p style="margin-bottom: 10px;font-size: 13px;">Ingresa a nuestra plataforma en meetup para conocer los próximos eventos</p>
							    <a class="botonPrinc" href="https://meetu.ps/c/46T85/y8vSv/d" target="_blank" style="text-align: center;background: #236294;color: white;padding: 10px;">INSCRÍBETE</a>
							</div>

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- ***** Counter Area End ***** -->

		<!-- ***** Features Area Start ***** -->
		<section id="howWork" class="section features-area style-two overflow-hidden ptb_100">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-12 col-md-10 col-lg-7">
						<!-- Section Heading -->
						<div class="section-heading text-center">
							<h2 class="wow fadeInUp" data-wow-delay="0.25s">¿Para qué nos unimos?</h2>
							<p class="d-block mt-4 wow fadeInUp" data-wow-delay="0.35s">Canalizar esfuerzos en el proceso de evangelización de éste tecnología, interactuar con entidades gubernamentales para normar el correcto uso de la Blockchain en el país, promocionar distintas iniciativas, casos de usos y soluciones creadas con esta tecnologia con el fin que puedan ser reutilizadas en otras organizaciones.</p>
						</div>
					</div>
				</div>
				<div class="row align-items-center justify-content-center">
					<div class="col-sm-12 col-md-6 col-xl-5 mb-4">
						<!-- Image Box -->
						<div class="image-box text-center icon-1 p-5 wow fadeInUp" data-wow-delay="0.15s">
							<!-- Featured Image -->
							<div class="featured-img mb-3">
								<!--img class="avatar-sm" src="/assets/img/icon/how-work/1.png" alt="Mapa"-->
								
							</div>
							<!-- Icon Text -->
							<div class="icon-text">
								<h3 class="mb-2">Evangelización</h3>
								<p>Puedes unirte a nuestra comunidad en meetup.com donde podrás enterarte de los distintos talleres, cursos, concursos o programas de entrenamiento relacionadas con la tecnología Blockchain.</p>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-6 col-xl-5 mb-4">
						<!-- Image Box -->
						<div class="image-box text-center icon-1 p-5 wow fadeInUp" data-wow-delay="0.25s">
							<!-- Featured Image -->
							<div class="featured-img mb-3">
								<!--img class="avatar-sm" src="/assets/img/icon/how-work/2.png" alt="Rastro"-->
							</div>
							<!-- Icon Text -->
							<div class="icon-text">
								<h3 class="mb-2">Modelo gubernamental</h3>
								<p>Conoce y colabora con nuestro modelo de implementacipon gubernamental que servirá como guía de estudio para distinttas entidades estatales.</p>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-6 col-xl-5">
						<!-- Image Box -->
						<div class="image-box text-center icon-1 p-5 wow fadeInUp" data-wow-delay="0.35s">
							<!-- Featured Image -->
							<div class="featured-img mb-3">
								<!--img class="avatar-sm" src="/assets/img/icon/how-work/3.png" alt="Mi QR"-->
							</div>
							<!-- Icon Text -->
							<div class="icon-text">
								<h3 class="mb-2">Identidad digital</h3>
								<p>Fomentamos un modelo descentralizado que empodere a cada ciudadano en el uso de sus datos, esta identidad no está limitada a seres humanos sino puede ser utilizada por cualquier ser vivo, documento, lugar, producto, cosa o algo inexistente en el mundo físico.</p>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-6 col-xl-5">
						<!-- Image Box -->
						<div class="image-box text-center icon-1 p-5 wow fadeInUp" data-wow-delay="0.35s">
							<!-- Featured Image -->
							<div class="featured-img mb-3">
								<!--img class="avatar-sm" src="/assets/img/icon/how-work/4.png" alt="Opciones"-->
							</div>
							<!-- Icon Text -->
							<div class="icon-text">
								<h3 class="mb-2">Democracia Líquida</h3>
								<p>Fomentamos a que los ciudadanos puedan participar de las decisiones en su organización, comunidad, región o pais basado en una plataforma de voto electrónico anónimo pero seguro.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- ***** Features Area End ***** -->


        <!--codigo eliminado>

		<!--====== Height Emulator Area Start ======-->
		<div class="height-emulator d-none d-lg-block"></div>
		<!--====== Height Emulator Area End ======-->

		<!--====== Footer Area Start ======-->
		<section id="about" class="section features-area style-two overflow-hidden ptb_100">
		<footer class="footer-area footer-fixed" style="position: initial;">
			<!-- Footer Top -->
			<div class="footer-top ptb_100">
				<div class="container">
					<div class="row">
						<div class="col-12 col-sm-6 col-lg-3">
							<!-- Footer Items -->
							<div class="footer-items">
								<!-- Logo -->
								<a class="navbar-brand" href="<?php echo $urlSite; ?>">
									<!--img class="logo" src="/assets/img/logo/logo.svg" alt="<?php echo $siteName; ?>"-->
									<p style="font-size: 30px;color1: white;">BLOCKCHAIN</p>
					                <p style="font-size: 10px;color1: white;">PERU</p>
								</a>
								<p class="mt-2 mb-3">Asociación civil para formentar la adopción de Blockchain en el Perú</p>
								<!-- Social Icons -->
								<!--<div class="social-icons d-flex">
									<a class="facebook" href="#">
										<i class="fab fa-facebook-f"></i>
										<i class="fab fa-facebook-f"></i>
									</a>
									<a class="twitter" href="#">
										<i class="fab fa-twitter"></i>
										<i class="fab fa-twitter"></i>
									</a>
									<a class="google-plus" href="#">
										<i class="fab fa-google-plus-g"></i>
										<i class="fab fa-google-plus-g"></i>
									</a>
									<a class="vine" href="#">
										<i class="fab fa-vine"></i>
										<i class="fab fa-vine"></i>
									</a>
								</div>-->
							</div>
						</div>
						<div class="col-12 col-sm-6 col-lg-3">
							<!-- Footer Items -->
							<div class="footer-items">
								<!-- Footer Title -->
								<h3 class="footer-title mb-2">Enlaces</h3>
								<ul>
									<li class="py-2"><a class="scroll" href="" target="_blank">Directivos</a></li>
									<li class="py-2"><a class="scroll" href="" target="_blank">Plan de trabajo</a></li>
									<li class="py-2"><a class="scroll" href="" target="_blank">Socios</a></li>
									<li class="py-2"><a class="scroll" href="" target="_blank">Estatutos</a></li>
									<li class="py-2"><a class="scroll" href="" target="_blank">Desarrolladores</a></li>
									<li class="py-2"><a href="privacidad.pdf" target="_blank">Política de Privacidad</a></li>
									<li class="py-2"><a class="scroll" href="" target="_blank">Términos y condiciones</a></li>
								</ul>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-lg-3">
							<!-- Footer Items -->
							<div class="footer-items">
								<!-- Footer Title -->
								<h3 class="footer-title mb-2">Redes sociales</h3>
								<ul>
									<li class="py-2"><a target="_blank" href="">Facebock</a></li>
									<li class="py-2"><a target="_blank" href="">Instagram</a></li>
									<li class="py-2"><a target="_blank" href="">Tik tok</a></li>
									<li class="py-2"><a target="_blank" href="">linkedin</a></li>
									<li class="py-2"><a target="_blank" href="">Meetup</a></li>
									<li class="py-2"><a target="_blank" href="">Telegram</a></li>
									
									
									
								</ul>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-lg-3">
							<!-- Footer Items -->
							<div class="footer-items">
								<!-- Footer Title -->
								<h3 class="footer-title mb-2">Consigue el App</h3>
								<!-- Store Buttons -->
								<div class="button-group store-buttons store-black d-flex flex-wrap"-->
									<a class="link-disable" href="<?php echo $googleURL; ?>" target="_blank">
										<img src="/assets/img/icon/google-play-black.png" alt="Disponible en Google Play">
									</a>
									<a class="link-disable" href="<?php echo $appleURL; ?>" target="_blank">
										<img src="/assets/img/icon/app-store-black.png" alt="Consíguelo en el AppStore">
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Footer Bottom -->
			<div class="footer-bottom">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<!-- Copyright Area -->
							<div class="copyright-area py-4 text-center">
								<!-- Copyright Left -->
								<div class="copyright-left pb-2">&copy; 2021. Todos los derechos reservados. Google Play y el logotipo de Google Play son marcas comerciales de Google LLC. App Store es un servicio de Apple Inc. El logotipo de Apple es marca registrada de Apple Inc.</div>
								<!-- Copyright Right -->
								<div class="copyright-right">Desarrollado por la comunidad de perublockchain.org</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		</section>
		<!--====== Footer Area End ======-->
	</div>


	<!-- ***** All jQuery Plugins ***** -->

	<!-- jQuery(necessary for all JavaScript plugins) -->
	<script src="/assets/js/jquery/jquery-3.3.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/jdenticon@3.1.0/dist/jdenticon.min.js" async
        integrity="sha384-VngWWnG9GS4jDgsGEUNaoRQtfBGiIKZTiXwm9KpgAeaRn6Y/1tAFiyXqSzqC8Ga/"
        crossorigin="anonymous">
</script>
    <script>
        function showHelloWord() {
            
            Swal.mixin({
              input: 'text',
              cancelButtonText: 'Cancelar',
              confirmButtonText: 'Siguiente &rarr;',
              showCancelButton: true,
              progressSteps: ['1', '2']
            }).queue([
              {
                title: 'Crear llave criptográfica',
                text: 'Ingrese un secreto (secuencia de carácteres) que le permitirá generar una llave privada.'
              },
              {
                title: 'Mensaje a inmutar',
                html: 'El mensaje que usted ingrese va a ser registrado en la Blockchain de LACCHAIN. <div style="text-align: left;font-size: 13px;background: lightgrey;padding: 5px;font-weight: 600;letter-spacing: 2px;margin-bottom: -17px;margin-top: 20px;">INGRESE SU MENSAJE</div>'
              }
            ]).then((result) => {
              if (result.value) {
                const answers = JSON.stringify(result.value)
                //console.log(result.value)
                Swal.fire({text:'Estamos enviando la transacción, por favor espere unos segundos...', showCancelButton:false, showConfirmButton: false})
                hash=result.value[0]
                data=result.value[1]
                trxID=""
                URL= '/api/?method=getAccount&hash=0x'+sha256(hash)
                console.log(URL)
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                       // Typical action to be performed when the document is ready:
                       //document.getElementById("demo").innerHTML = xhttp.responseText;
                       console.log(xhttp.responseText)
                       //macrogeul ==> FREE
                        URL= '/api/?method=sendTransaction&message='+btoa(data)+'&privateKey=0x'+sha256(hash)
                        //console.log(URL)
                        var xhttp2 = new XMLHttpRequest();
                        xhttp2.onreadystatechange = function() {
                            if (this.readyState == 4 && this.status == 200) {
                               // Typical action to be performed when the document is ready:
                               //document.getElementById("demo").innerHTML = xhttp.responseText;
                               var data = new Identicon(JSON.parse(xhttp.responseText).did, 420).toString();
                                //console.log(xhttp2.responseText)
                                // write to a data URI
                               //document.write();
                               
                               Swal.fire({
                                    width: '680px',
                                    icon:'success',
                                  title: 'Su mensaje ha sido inmutado',
                                  html: 'Su mensaje se encuentra estampado en la red Blockchain de LACCHAIN y puede verificarlo en la siguiente transacción:'+
                                    '<div style="font-size: 12px;margin-top: 10px;margin-bottom: 5px;background: #d2dce8;padding: 18px;">TX: <a href="https://explorer.lacchain.net/tx/'+JSON.parse(xhttp2.responseText).transactionHash+'" target="_blank">'+JSON.parse(xhttp2.responseText).transactionHash+'</a> <a href="https://explorer.lacchain.net/tx/'+JSON.parse(xhttp2.responseText).transactionHash+'" target="_blank" style="    background: green;padding: 5px 10px;color: white;border-radius: 5px;font-size: 12px;"> Ver </a></div>'+
                                    '<div style="font-size: 11px;">El mensaje fue firmando usando una llave privada que fue creada en basándose en el secreto que usted ingresó.</div>'+
                                    '<div style="text-align: left;font-size: 13px;background: lightgrey;padding: 5px;font-weight: 600;letter-spacing: 2px;margin-bottom: 10px;margin-top: 20px;">Identidad digital descentralizada:</div>'+
                                    '<div style="display: inline-flex;margin-bottom: 10px;">'+
                                    '<div style="margin-left: -27px;"><img style="width: 110px;border-style: solid;border-width: 1px;border-color: #9e9494;" src="data:image/png;base64,' + data + '"></div>'+
                                    '<div style="text-align: left;padding: 10px;font-size: 13.5px;">'+
                                        '<pre style="font-size: 11px;    margin-bottom: 5px;">'+
                                            '<div><div style="font-weight: 700;">DID </div><div>'+JSON.parse(xhttp.responseText).did+'</div></div>'+
                                            '<div style="margin-top: 10px;"><div style="font-weight: 700;">Address</div><div>'+JSON.parse(xhttp.responseText).pubKey+' </div></div>'+
                                            '<div style="margin-top: 10px;"><div style="font-weight: 700;">Private Key</div><div>'+JSON.parse(xhttp.responseText).privKey+'</div></div></pre>'+
                                    '</div>'+
                                    '</div>'+
                                    '<div style="font-size: 12px;margin-bottom: -28px;background: #d2dce8;padding: 7px;">Por favor, guarde la llave privada si desea demostrar en el futuro que usted es el autor del mensaje</div>.',
                                  confirmButtonText: 'Cerrar'
                                })
                            }
                        };
                        xhttp2.open("GET", URL, true);
                        xhttp2.send();

                    }
                };
                xhttp.open("GET", URL, true);
                xhttp.send();
                  
                
                
              }
            })
            
             /* Swal.fire({
                  title: 'Deje un mensaje inmutable',
                  html:
                    'Esta opción le va a permite estampar un mensaje en la blockchain de LACCHAIN. <br>Lo primero que deberá hacer es obtener un par de llaves criptográficas',
                  showCloseButton: false,
                  showCancelButton: true,
                  focusConfirm: false,
                  confirmButtonText: 'Obtener llaves',
                  confirmButtonAriaLabel: 'Thumbs up, great!',
                  cancelButtonText:
                    '<i class="fa fa-thumbs-down"></i>',
                  cancelButtonAriaLabel: 'Thumbs down'
            })*/
        }
        
  
var sha256 = function sha256(ascii) {
	function rightRotate(value, amount) {
		return (value>>>amount) | (value<<(32 - amount));
	};
	
	var mathPow = Math.pow;
	var maxWord = mathPow(2, 32);
	var lengthProperty = 'length'
	var i, j; // Used as a counter across the whole file
	var result = ''

	var words = [];
	var asciiBitLength = ascii[lengthProperty]*8;
	
	//* caching results is optional - remove/add slash from front of this line to toggle
	// Initial hash value: first 32 bits of the fractional parts of the square roots of the first 8 primes
	// (we actually calculate the first 64, but extra values are just ignored)
	var hash = sha256.h = sha256.h || [];
	// Round constants: first 32 bits of the fractional parts of the cube roots of the first 64 primes
	var k = sha256.k = sha256.k || [];
	var primeCounter = k[lengthProperty];
	/*/
	var hash = [], k = [];
	var primeCounter = 0;
	//*/

	var isComposite = {};
	for (var candidate = 2; primeCounter < 64; candidate++) {
		if (!isComposite[candidate]) {
			for (i = 0; i < 313; i += candidate) {
				isComposite[i] = candidate;
			}
			hash[primeCounter] = (mathPow(candidate, .5)*maxWord)|0;
			k[primeCounter++] = (mathPow(candidate, 1/3)*maxWord)|0;
		}
	}
	
	ascii += '\x80' // Append Ƈ' bit (plus zero padding)
	while (ascii[lengthProperty]%64 - 56) ascii += '\x00' // More zero padding
	for (i = 0; i < ascii[lengthProperty]; i++) {
		j = ascii.charCodeAt(i);
		if (j>>8) return; // ASCII check: only accept characters in range 0-255
		words[i>>2] |= j << ((3 - i)%4)*8;
	}
	words[words[lengthProperty]] = ((asciiBitLength/maxWord)|0);
	words[words[lengthProperty]] = (asciiBitLength)
	
	// process each chunk
	for (j = 0; j < words[lengthProperty];) {
		var w = words.slice(j, j += 16); // The message is expanded into 64 words as part of the iteration
		var oldHash = hash;
		// This is now the undefinedworking hash", often labelled as variables a...g
		// (we have to truncate as well, otherwise extra entries at the end accumulate
		hash = hash.slice(0, 8);
		
		for (i = 0; i < 64; i++) {
			var i2 = i + j;
			// Expand the message into 64 words
			// Used below if 
			var w15 = w[i - 15], w2 = w[i - 2];

			// Iterate
			var a = hash[0], e = hash[4];
			var temp1 = hash[7]
				+ (rightRotate(e, 6) ^ rightRotate(e, 11) ^ rightRotate(e, 25)) // S1
				+ ((e&hash[5])^((~e)&hash[6])) // ch
				+ k[i]
				// Expand the message schedule if needed
				+ (w[i] = (i < 16) ? w[i] : (
						w[i - 16]
						+ (rightRotate(w15, 7) ^ rightRotate(w15, 18) ^ (w15>>>3)) // s0
						+ w[i - 7]
						+ (rightRotate(w2, 17) ^ rightRotate(w2, 19) ^ (w2>>>10)) // s1
					)|0
				);
			// This is only used once, so *could* be moved below, but it only saves 4 bytes and makes things unreadble
			var temp2 = (rightRotate(a, 2) ^ rightRotate(a, 13) ^ rightRotate(a, 22)) // S0
				+ ((a&hash[1])^(a&hash[2])^(hash[1]&hash[2])); // maj
			
			hash = [(temp1 + temp2)|0].concat(hash); // We don't bother trimming off the extra ones, they're harmless as long as we're truncating when we do the slice()
			hash[4] = (hash[4] + temp1)|0;
		}
		
		for (i = 0; i < 8; i++) {
			hash[i] = (hash[i] + oldHash[i])|0;
		}
	}
	
	for (i = 0; i < 8; i++) {
		for (j = 3; j + 1; j--) {
			var b = (hash[i]>>(j*8))&255;
			result += ((b < 16) ? 0 : '') + b.toString(16);
		}
	}
	return result;
};

function copyClipboard() {
  var copyText = document.getElementById("myaddr");
  copyText.select();
  document.execCommand("copy");
  msgOk("Stamping.io", "URL copiado en el clipboard: "+ copyText.value, "Entendido", "")
  
}

    </script>
	<!-- Bootstrap js -->
	<script src="/assets/js/bootstrap/popper.min.js"></script>
	<script src="/assets/js/bootstrap/bootstrap.min.js"></script>

	<!-- Plugins js -->
	<script src="/assets/js/plugins/plugins.min.js"></script>

	<!-- Active js -->
	<script src="/assets/js/active.js"></script>
</body>

</html>
