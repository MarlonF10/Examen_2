<!-- /*
* Template Name: Blogy
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Untree.co">
	<link rel="shortcut icon" href="favicon.png">

	<meta name="description" content="" />
	<meta name="keywords" content="bootstrap, bootstrap5" />

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;600;700&display=swap" rel="stylesheet">


	<link rel="stylesheet" href="fonts/icomoon/style.css">
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

	<link rel="stylesheet" href="css/tiny-slider.css">
	<link rel="stylesheet" href="css/aos.css">
	<link rel="stylesheet" href="css/glightbox.min.css">
	<link rel="stylesheet" href="css/style.css">

	<link rel="stylesheet" href="css/flatpickr.min.css">


	<title>Blogy &mdash; Free Bootstrap 5 Website Template by Untree.co</title>
</head>
<body>

	<div class="site-mobile-menu site-navbar-target">
		<div class="site-mobile-menu-header">
			<div class="site-mobile-menu-close">
				<span class="icofont-close js-menu-toggle"></span>
			</div>
		</div>
		<div class="site-mobile-menu-body"></div>
	</div>

	<nav class="site-nav">
		<div class="container">
			<div class="menu-bg-wrap">
				<div class="site-navigation">
					<div class="row g-0 align-items-center">
						<div class="col-2">
							<a href="index.html" class="logo m-0 float-start">AGROC<span class="text-primary">.</span></a>
						</div>
						<div class="col-8 text-center">
							<form action="#" class="search-form d-inline-block d-lg-none">
								<input type="text" class="form-control" placeholder="Search...">
								<span class="bi-search"></span>
							</form>

							<ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu mx-auto">
            <li class="nav-item"> <a class="nav-link" href="{{route('rout.index')}}">Rutas</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('passenger.index')}}">Pasajeros</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('customer.index')}}">Clientes</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('driver.index')}}">Conductor</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('agency.index')}}">Agencia</a></li>
			<li class="nav-item"> <a class="nav-link" href="{{route('mechanic.index')}}">Mecanicos</a></li>

								<li class="has-children">
									<a href="category.html">Paginas</a>
									<ul class="dropdown">
			<li class="nav-item"> <a class="nav-link" href="{{route('promotion.index')}}">Promocion</a></li>
			<li class="nav-item"> <a class="nav-link" href="{{route('reservation.index')}}">Reservacion</a></li>
			<li class="nav-item"> <a class="nav-link" href="{{route('travel-ticket.index')}}">Bolleto de Viaje</a></li>
			<li class="nav-item"> <a class="nav-link" href="{{route('travel-listing.index')}}">Lista de Viaje</a></li>
			<li class="nav-item"> <a class="nav-link" href="{{route('transport.index')}}">Transporte</a></li>
			<li class="nav-item"> <a class="nav-link" href="{{route('service.index')}}">Servicios</a></li>
											</ul>
										</li>
									</ul>
								</li>
							</ul>
						</div>
						<div class="col-2 text-end">
							<a href="#" class="burger ms-auto float-end site-menu-toggle js-menu-toggle d-inline-block d-lg-none light">
								<span></span>
							</a>
							<form action="#" class="search-form d-none d-lg-inline-block">
								<input type="text" class="form-control" placeholder="Search...">
								<span class="bi-search"></span>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</nav>

	<!-- Start retroy layout blog posts -->
	<section class="section bg-light">
		<div class="container">
			<div class="row align-items-stretch retro-layout">
				<div class="col-md-4">
					<a href="single.html" class="h-entry mb-30 v-height gradient">

						<div class="featured-img" style="background-image: url('https://scontent.fmga6-1.fna.fbcdn.net/v/t1.6435-9/91803996_2784177108296419_3561015234028109824_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=e3f864&_nc_ohc=R0_Pj8ybWFYAX_ljTJP&_nc_ht=scontent.fmga6-1.fna&oh=00_AfA5QmbjZh6tRLSM8nXhNrB04dNc0j1WRSQsloMDMWR9TA&oe=64B9354F');"></div>

						<div class="text">
							<h2>Recuerda cuidarte siempre tomando las medidas preventivas</h2>
						</div>
					</a>
					<a href="single.html" class="h-entry v-height gradient">

						<div class="featured-img" style="background-image: url('https://scontent.fmga6-1.fna.fbcdn.net/v/t1.6435-9/71495499_2407763629271104_4805755515856486400_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=e3f864&_nc_ohc=6YYhvPMqQqIAX_x7-GZ&_nc_oc=AQk-eaThFT2gGXf5qa_HaRsL0UHPi25kn2u8WBqbCkw9D_8UyOGOzejISXUD-7XP9tY&_nc_ht=scontent.fmga6-1.fna&oh=00_AfB_ELux7IgwZ1ZgYLVZzQ3iSfERmhrkjXbo5etXEYEfnw&oe=64B3EEB5');"></div>

						<div class="text">
							<h2>Viaja comodo y seguro con nosotros</h2>
						</div>
					</a>
				</div>
				<div class="col-md-4">
					<a href="single.html" class="h-entry img-5 h-100 gradient">

						<div class="featured-img" style="background-image: url('https://scontent.fmga6-1.fna.fbcdn.net/v/t39.30808-6/233868467_4125621510818632_8492992136264256403_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=e3f864&_nc_ohc=uC-ZZ8sTR8gAX9ry9Bl&_nc_ht=scontent.fmga6-1.fna&oh=00_AfCCyXCvlssYwkoxbdA3RAeVEQRXa5J8FCM0QKoLhvFWqw&oe=6497673F');"></div>

						<div class="text">
							<h2>Juntos veamos lugares nuevos</h2>
						</div>
					</a>
				</div>
				<div class="col-md-4">
					<a href="single.html" class="h-entry mb-30 v-height gradient">

						<div class="featured-img" style="background-image: url('https://scontent.fmga6-1.fna.fbcdn.net/v/t1.6435-9/89947408_2751115754935888_7703212244116439040_n.png?_nc_cat=105&ccb=1-7&_nc_sid=e3f864&_nc_ohc=UsrHASSzFhwAX82HqAD&_nc_ht=scontent.fmga6-1.fna&oh=00_AfDpEmYv_xpGSxp5g4kUBL1WYj3IvYiGgk67OfFBkJ06YQ&oe=64B95B96');"></div>

						<div class="text">
							<h2>Ayudanos tomando las medidas preventivas,Ayudanos a cuidarte</h2>
						</div>
					</a>
					<a href="single.html" class="h-entry v-height gradient">

						<div class="featured-img" style="background-image: url('https://scontent.fmga3-1.fna.fbcdn.net/v/t1.18169-9/11707518_875134219200727_9114055107143015326_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=19026a&_nc_ohc=PISflxTZIfwAX_y3M0i&_nc_ht=scontent.fmga3-1.fna&oh=00_AfABIGcwu3HgEPAHtCub1IeFtKoH0tutkYym-uaHlddF_w&oe=64B3F6D2');"></div>

						<div class="text">
							<h2>Conectate con Centro America en una experiencia maravillosa</h2>
						</div>
					</a>
				</div>
			</div>
		</div>
	</section>
	<!-- End retroy layout blog posts -->

	<!-- Start posts-entry -->
	<section class="section posts-entry">
		<div class="container">
			<div class="row mb-4">
				<div class="col-sm-6">
					<h2 class="posts-entry-title">Promociones</h2>
			</div>
			<div class="row g-3">
				<div class="col-md-9">
					<div class="row g-3">
						<div class="col-md-6">
							<div class="blog-entry">
								<a href="single.html" class="img-link">
									<img src="https://scontent.fmga6-1.fna.fbcdn.net/v/t1.6435-9/87942171_2719496101431187_8320035681728462848_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=e3f864&_nc_ohc=CBuhGpHUsPEAX8gpt53&_nc_ht=scontent.fmga6-1.fna&oh=00_AfBdnKtL-wfIQBZAUZfgttLYSnUrZjAKtY_4KREj2Oswtg&oe=64B4121E" alt="Image" class="img-fluid">
								</a>
								<h2><a href="single.html">Aprovecha el 2x1 que tenemos para ti todo el mes de marzo</a></h2>
								<p>Todo el mes de marzo tendremos la promocion de 2x1 en boletos de clase turistica a Nicaragua/a El salvador.</p>
								<p><a href="single.html" class="btn btn-sm btn-outline-primary">Ver mas</a></p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="blog-entry">
								<a href="single.html" class="img-link">
									<img src="https://scontent.fmga6-1.fna.fbcdn.net/v/t1.6435-9/49810327_1989527551094716_5190288885669691392_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=e3f864&_nc_ohc=qA6Wzul-PmQAX_6u9Dz&_nc_ht=scontent.fmga6-1.fna&oh=00_AfDzTjEDo54mtg3LG9FQDSTX0dORQPLUyGPbXbV4KX_Cgw&oe=64B400AB" alt="Image" class="img-fluid">
								</a>
								<h2><a href="single.html">Aprovehca a viajar este verano con nosotros.</a></h2>
								<p>Este verano no te pierdas de las promociones que tenemos para ti.</p>
								<p><a href="single.html" class="btn btn-sm btn-outline-primary">Ver mas</a></p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
							<div class="blog-entry">
								<a href="single.html" class="img-link">
									<img src="https://scontent.fmga6-1.fna.fbcdn.net/v/t31.18172-8/17157463_1267193476661464_3955853174222982188_o.png?_nc_cat=100&ccb=1-7&_nc_sid=19026a&_nc_ohc=c7H4qPPtPakAX-wtujQ&_nc_ht=scontent.fmga6-1.fna&oh=00_AfARxTM3Dzmi1p_-g-IkXHC7qMse73fA5GIyOyPo-e4TxQ&oe=64B4082C" alt="Image" class="img-fluid">
								</a>
								<h2><a href="single.html">Un 25% de descuento en todas nuestras rutas de Panama a Tapachula.</a></h2>
								<p>Aprovecha el descuento de hasta un 25% para estas rutas de panama a Tapachula.</p>
								<p><a href="single.html" class="btn btn-sm btn-outline-primary">Ver mas</a></p>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!-- End posts-entry -->

	<!-- Start posts-entry -->
	<section class="section posts-entry">
		<div class="container">
			<div class="row mb-4">
				<div class="col-sm-6">
					<h2 class="posts-entry-title">Culturas</h2>
			</div>
			<div class="row g-3">
				<div class="col-md-9 order-md-2">
					<div class="row g-3">
						<div class="col-md-6">
							<div class="blog-entry">
								<a href="single.html" class="img-link">
									<img src="https://scontent.fmga3-1.fna.fbcdn.net/v/t1.18169-9/11146246_838566419524174_2340147453107355940_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=19026a&_nc_ohc=I9i-h8OWaEkAX-zkSEb&_nc_ht=scontent.fmga3-1.fna&oh=00_AfAWbjXDMb8gxV6Uk8hHA4EUhXNluIODrVwoXza7Kqk9TA&oe=64B3EFAA" alt="Image" class="img-fluid">
								</a>
								<h2><a href="single.html">Conoce lugares hermosos,Lugares unicos que no conocias  </a></h2>
								<p>Interesado en viajar, Con nostros conoceras lugares que disfrutaras mucho</p>
								<p><a href="single.html" class="btn btn-sm btn-outline-primary">Ver mas</a></p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="blog-entry">
								<a href="single.html" class="img-link">
									<img src="https://scontent.fmga6-1.fna.fbcdn.net/v/t31.18172-8/1909516_722400621140755_3633928909064683448_o.jpg?_nc_cat=103&ccb=1-7&_nc_sid=19026a&_nc_ohc=ZFSSpkSQuJwAX_dOeDK&_nc_ht=scontent.fmga6-1.fna&oh=00_AfB7P8Sii_F5oBBtm2pIV0VKdAkC_JItK9oqtr7VS9HSmA&oe=64B939EC" alt="Image" class="img-fluid">
								</a>
								<h2><a href="single.html">Que esperas a conocer lugares turisticos que no conocias.</a></h2>
								<p>haran que te enamores de Centro America y todo los lugares bellos que tiene</p>
								<p><a href="single.html" class="btn btn-sm btn-outline-primary">Ver mas</a></p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
							<div class="blog-entry">
								<a href="single.html" class="img-link">
									<img src="https://scontent.fmga6-1.fna.fbcdn.net/v/t31.18172-8/858650_480134405367379_2075181525_o.png?_nc_cat=103&ccb=1-7&_nc_sid=e3f864&_nc_ohc=B6DrRl2uT7IAX-faD0Z&_nc_ht=scontent.fmga6-1.fna&oh=00_AfCYKNVaBsAgSMjGQ7DJCm8CSdFOq6568S2OIv3cV2jAAQ&oe=64B951A9" alt="Image" class="img-fluid">
								</a>
								<h2><a href="single.html">Viajamos Por Cada Rincon de Centro America </a></h2>
								<p>Viaja a lugares que no conocias con tu familia y amigos </p>
								<p><a href="single.html" class="btn btn-sm btn-outline-primary">Ver mas </a></p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<ul class="list-unstyled blog-entry-sm">
						<li>
							<h3><a href="single.html">¿Quieres saber mas sobre nuestras rutas?</a></h3>
							<p>Estas interesado a saber mas sobre lugares que no conocias,Consultenos</p>
							<p><a href="#" class="read-more">Mas Informacion</a></p>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<section class="section">
		<div class="container">

			<div class="row mb-4">
				<div class="col-sm-6">
					<h2 class="posts-entry-title">Informacion Sobre Los Buses</h2>
			</div>

			<div class="row">
				<div class="col-lg-4 mb-4">
					<div class="post-entry-alt">
						<a href="single.html" class="img-link"><img src="https://cloudfront-us-east-1.images.arcpublishing.com/gruponacion/KN5V2JIN45GGBBFTWZUSD5KAFM.jpeg" alt="Image" class="img-fluid"></a>
						<div class="excerpt">
							

							<h2><a href="single.html">Bus de Tapachula/Guatemala</a></h2>
							<div class="post-meta align-items-center text-left clearfix">
							</div>
							<p>La ruta de Tapachula y Guatemala inician de 7:00 AM a 5:00 PM de tarde</p>
							<p><a href="#" class="read-more">Mas Informacion</a></p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 mb-4">
					<div class="post-entry-alt">
						<a href="single.html" class="img-link"><img src="https://scontent.fmga6-1.fna.fbcdn.net/v/t1.6435-9/42894420_1861118483935624_320104320592773120_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=e3f864&_nc_ohc=-rcKbIyn1VsAX_zTaj2&_nc_ht=scontent.fmga6-1.fna&oh=00_AfB2LJCD8yM474POXOCuVxysDEOy8cKgAWUb3fmW67CGZw&oe=64B3F5BB" alt="Image" class="img-fluid"></a>
						<div class="excerpt">
							

							<h2><a href="single.html">Bus de Honduras/El Salvador</a></h2>
							<div class="post-meta align-items-center text-left clearfix">
							</div>

							<p>Lamento informarles que el bus de la ruta de Honduras y el Salvador, No estara en funcionamiento hasta nuevo aviso.</p>
							<p><a href="#" class="read-more">Mas Informacion</a></p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 mb-4">
					<div class="post-entry-alt">
						<a href="single.html" class="img-link"><img src="https://cloudfront-us-east-1.images.arcpublishing.com/gruponacion/ILCSVH7OQRCH3O3KCA6UIECFZE.jpg" alt="Image" class="img-fluid"></a>
						<div class="excerpt">
							

							<h2><a href="single.html">Bus de Nicaragua/Costa Rica/Panama</a></h2>
							<div class="post-meta align-items-center text-left clearfix">
							</div>

							<p>De 8:00 AM  A 4:00 PM El Bus Estara Activo A La Rutas De Nicaragua,Costa Rica,Panama.</p>
							<p><a href="#" class="read-more">Mas Informacion</a></p>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</section>

	<div class="section bg-light">
		<div class="container">

			<div class="row mb-4">
				<div class="col-sm-6">
					<h2 class="posts-entry-title">Rutas</h2>
			</div>

			<div class="row align-items-stretch retro-layout-alt">

				<div class="col-md-5 order-md-2">
					<a href="single.html" class="hentry img-1 h-100 gradient">
						<div class="featured-img" style="background-image: url('https://scontent.fmga6-1.fna.fbcdn.net/v/t1.6435-9/43074489_1861085370605602_3344695375054241792_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=e3f864&_nc_ohc=JV5AjvvniJMAX_tmTnE&_nc_ht=scontent.fmga6-1.fna&oh=00_AfCKDWUhxnNt7EGZLOIEhv3uI_qV7QSUG9xGQP6-FplEPA&oe=64B3F6B6');"></div>
						<div class="text">
							<span>February 12, 2019</span>
							<h2>Pasala Bien Con Familia Y Amigos</h2>
						</div>
					</a>
				</div>

				<div class="col-md-7">

					<a href="single.html" class="hentry img-2 v-height mb30 gradient">
						<div class="featured-img" style="background-image: url('https://scontent.fmga6-1.fna.fbcdn.net/v/t1.6435-9/205929472_3995737217140396_2969785874908538975_n.png?_nc_cat=101&ccb=1-7&_nc_sid=e3f864&_nc_ohc=on7Q6Vn1aIoAX844wVf&_nc_oc=AQnB6X0bh5vbtr5OgRlVPnmhM3eDf7UQ7uhts0S0ThEBECox5EwZSDpiK50jfQZN820&_nc_ht=scontent.fmga6-1.fna&oh=00_AfDqzI1pI57TJlt_Jlht0WA7221od6PqhVTxnLx0-waDLQ&oe=64B3E902');"></div>
						<div class="text text-sm">
							<span>February 12, 2019</span>
							<h2>Mira Todas Nuestras Rutas</h2>
						</div>
					</a>

					<div class="two-col d-block d-md-flex justify-content-between">
						<a href="single.html" class="hentry v-height img-2 gradient">
							<div class="featured-img" style="background-image: url('https://scontent.fmga6-1.fna.fbcdn.net/v/t1.6435-9/49298205_1981433311904140_8878054776470765568_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=e3f864&_nc_ohc=QKOdzAzdEcYAX_cVAHx&_nc_ht=scontent.fmga6-1.fna&oh=00_AfDa_SJ7LgTJHCK_kmqGT7Ms5ioHmxU-broP5Zkg7QPvhQ&oe=64B407C8');"></div>
							<div class="text text-sm">
								<span>February 12, 2019</span>
								<h2>Visita Lugares Turisticos Con Nosotros</h2>
							</div>
						</a>
						<a href="single.html" class="hentry v-height img-2 ms-auto float-end gradient">
							<div class="featured-img" style="background-image: url('https://scontent.fmga6-1.fna.fbcdn.net/v/t1.6435-9/49189191_1981433318570806_284957911719870464_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=e3f864&_nc_ohc=zee05BsF8EAAX8ATeye&_nc_ht=scontent.fmga6-1.fna&oh=00_AfALUVnA_Yg2uv290N0095329z2YEVbWLW8yYaW1anm19g&oe=64B3FAA1');"></div>
							<div class="text text-sm">
								<span>February 12, 2019</span>
								<h2>Lugares Iconicos Que No Te Puedes Perder</h2>
							</div>
						</a>
					</div>  

				</div>
			</div>

		</div>
	</div>


	<footer class="site-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="widget">
						<h3 class="mb-4">About</h3>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
											</div>
										</div>
									</a>
								</li>
							</ul>
						</div>


					</div> <!-- /.widget -->
				</div> <!-- /.col-lg-4 -->
			</div> <!-- /.row -->

			<div class="row mt-5">
				<div class="col-12 text-center">
          <!-- 
              **==========
              NOTE: 
              Please don't remove this copyright link unless you buy the license here https://untree.co/license/  
              **==========
            -->

            <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; Designed with love by <a href="https://untree.co">Untree.co</a>  Distributed by <a href="https://themewagon.com">ThemeWagon</a> <!-- License information: https://untree.co/license/ -->
            </p>
          </div>
        </div>
      </div> <!-- /.container -->
    </footer> <!-- /.site-footer -->

    <!-- Preloader -->
    <div id="overlayer"></div>
    <div class="loader">
    	<div class="spinner-border text-primary" role="status">
    		<span class="visually-hidden">Loading...</span>
    	</div>
    </div>


    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/tiny-slider.js"></script>

    <script src="js/flatpickr.min.js"></script>


    <script src="js/aos.js"></script>
    <script src="js/glightbox.min.js"></script>
    <script src="js/navbar.js"></script>
    <script src="js/counter.js"></script>
    <script src="js/custom.js"></script>

    
  </body>
  </html>
