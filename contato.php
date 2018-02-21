<!--Defina o título da variável da Página que será puxado em toda a página.-->
<?php $pagAtual = 'fal' ?>

<?php include("includes/_head.php");?>

<body onload="ClearFormContato()">
	<div id="pointer"></div>

	<!--CARREGADOR-->
	<?php include("includes/_loader.php");?>

	<!--MENU-->
	<?php include("includes/_head_nav.php");?>

	<!--SLIDER-->
	<?php include("includes/_banner_parallax.php");?>

	<!--MENU SECUNDÁRIO-->
	<?php include("includes/_contato_nav.php") ;?>

	<!--CONTATO-->
	<div  class="degAmareloFlamingo interna" id="contato">

		<div class="container">

			<div class="fotOrcamento">

				<!--Sub Título-->
				<section class="info">

				<div class="stitInterna">
					<div class="container">
						<div class="blocoStit">
							<i class="icon flaticon-chat"></i>
							<h2 class="underline"><span>Mande uma mensagem </span><br>ou tire suas dúvidas!</h2>
						</div>
					</div>
				</div>

				<div class="col-md-6">
					<h3 class="">Estou aqui para lhe ajudar!</h3>
					<p class="txt16">Posso montar um orçamento ou um pacote de produtos personalizado que atenda todas as suas necessidades!
						<br><br>Envie uma mensagem através do formulário ao lado informando seus dados e suas necessidades que assim que possível entrarei em contato com uma proposta feita só pra você!</p>
						<h3 class="sec">Solicite um orçamento personalizado!</h3>
					</div>

				</section>

				<section class="formContato">
					<!--Formulário-->
					<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-5 col-md-offset-1">
						<form action="formulario.php" method="POST" role="form" id="formContato" name="formcontato">
							<div class="form-group">
								<input type="text" class="form-control"  id="nome" name="nome" placeholder="Nome" required>
							</div>
							<div class="form-group">
								<input type="email" class="form-control"  id="email" name="email" placeholder="E-mail" required>
							</div>
							<div class="form-group">
								<input type="text" class="form-control"  id="assunto" name="assunto" placeholder="Assunto" required>
							</div>
							<div class="form-group">
								<textarea type="text" class="form-control" id="formMensagem" placeholder="Mensagem" required></textarea>
							</div>

							<button type="submit" name="mensagem" id="mensagem" class="btn btn-primary">Enviar A Mensagem</button>
							<div class="row form-group">
								<div class="col-md-12">
									<div class="checkbox">
										<label>
											<input type="checkbox" value="Sim" id="news" name="news" checked>
											Quero receber Notícias e ofertas da Fabiane Almeida.
										</label>
									</div>									
								</div>
							</div>
						</form>		
					</div>
				</section>
				
			</div>
		</div>
	</div>

		<?php include("includes/_foot.php");?>
