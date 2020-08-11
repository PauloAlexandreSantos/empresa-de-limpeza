<!DOCTYPE html>
<html lang="pt-pt">

<head>
	<title>JMQ</title>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon" />

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/font-awesome.min.css" />
	<link rel="stylesheet" href="css/flaticon.css" />
	<link rel="stylesheet" href="css/owl.carousel.css" />
	<link rel="stylesheet" href="css/style.css" />



</head>

<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<?php require_once('menu.php') ?>


	<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="img/page-top-bg.jpg">
		<div class="container text-white">
			<h3>Contactos</h3>
		</div>
	</section>
	<!--  Page top end -->

	<!-- Modal Confirmation-->
	<div class="container">


		<div class="modal fade" id="myModal" role="dialog">
			<div class="modal-dialog">

				<!-- Modal content-->
				<div class="modal-content">

					<div class="modal-body">
						<h5 class="text-center"><?php ?></h5>
					</div>
					<div class="modal-footer">
						<button type="button" class="site-btn col-md-12" data-dismiss="modal">sair</button>
					</div>
				</div>

			</div>
		</div>

	</div><!-- Modal Confirmation-->



	<!-- Contact section -->
	<section class="contact-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 contact-text">
					<h5>José Mário Quilundo – Comércio Geral e Prestação de Serviços, Lda</h5><br>
					<p>Estamos atentos às exigências do mercado e sermos uma empresa reconhecida pela sua qualidade de Serviço, boa relação com os seus clientes, preocupação com o meio ambiente e excelência no ramo dos serviços de limpeza. </p>
					<ul class="contact-info">
						<li><span>Morada:</span>Bairro Kassequel do Buraco, Rua:55, Casa nº:</li>
						<li><span>Telemóvel:</span>(+244) 924 824 632 <br>(+244) 917 623 806 <br>(+244) 937 408 611</li>
						<li><span>Email:</span>JMQcomercial@hotmail.com</li>
						<li><span>Whatsapp:</span>(+244) 997 036 529</li>
					</ul>
				</div>
				<div class="col-lg-8">
					<form class="contact-form" method="POST" action="email.php">
						<h5 class="text-center">PEÇA-NOS UM ORÇAMENTO SEM COMPROMISSO!</h5>
						<p class="text-center">Diga-nos o que precisa!</p><br>
						<div class="row">

							<div class="col-md-12">
								<input type="text" placeholder="Nome singular ou da Companhia" required name="nome">
							</div>
							<div class="col-md-6">
								<input type="text" placeholder=" E-mail" required name="de">
							</div>
							<div class="col-md-6">
								<input type="text" placeholder="Titulo da mensagem" required name="assunto">
							</div>
							<div class="col-md-12">
								<textarea placeholder="Corpo da Mensagem" required name="mensagem"></textarea>
								<button class="site-btn col-md-12" name="enviar" data-toggle="modal" data-target="#myModal">Enviar<i class="fa fa-angle-right"></i></button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- Contact section end -->



	<!-- Footer section -->
	<?php require_once('rodape.php'); ?>
	<!-- Footer section end -->




	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="js/main.js"></script>




</body>

</html>