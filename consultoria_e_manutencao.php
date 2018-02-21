<!--Defina o título da variável da Página que será puxado em toda a página.-->
<?php $pagAtual = 'con' ?>

<?php include("includes/_head.php");?>

<body onload="ClearFormContato()">
	<div id="pointer"></div>

	<!--MODAL-->
	<?php include("includes/modal_form.php");?>
	
	<!--CARREGADOR-->
	<?php include("includes/_loader.php");?>

	<!--MENU-->
	<?php include("includes/_head_nav.php");?>

	<!--SLIDER-->
	<?php include("includes/_banner_parallax.php");?>

	<!--MENU SECUNDÁRIO-->
	<?php include("includes/_sites_nav.php") ;?>

	<!--CONTEÚDO-->
	<section  class="degAmareloFlamingo interna" id="siteRapido">

		<div class="container">

			<?php @include("includes/_tit_principal_interna.php"); ?>

			<div class="blContent">

				<div class="col-md-10 col-md-offset-1">

					<!--INTRO-->
					<section class="intro">

						<div class="col-md-7">
							<img src="img/<?php coletaPaginas($pagAtual,'imagem'); ?>" alt="Amostra do <?php coletaPaginas($pagAtual,'nome'); ?>" class="img-responsive img-destaque">
						</div>

						<div class="col-md-5">
							<p><span class="quotes">Tire suas dúvidas, melhore seus resultados.</span></p>
							<p>Você já possui um site que não está dando retorno? As imagens do seu site não estão aparecendo? Está precisando alterar o conteúdo ou o layout do seu site? Está com alguma dúvida ou problema que não consegue resolver? <span class="destaque">Nós podemos te ajudar!</span> Prestamos consultoria e fazermos orçamentos de manutenção sem compromisso. E fique tranquilo! Temos <span class="destaqueSeg">mais de 18 anos de experiência na área</span>, então, <span class="destaque">você está em boas mãos</span>.
							</p>
						</div>
					</section>

					<div class="clearfix"></div>


					<!--SERVIÇOS-->
					<section class="servicos col-md-12">	

						<div class="stitSecundario">
							<h3>Serviços disponíveis de <?php coletaPaginas($pagAtual,'nome'); ?></h3>
						</div>

						<div class="clearfix"></div>

						<ul class="listaServicos underline">

							<span class="row">
								<li class="col-xs-12 col-md-4 tCenter hvr-float">
									<a class="solicitarOrcamento" data-toggle="modal" data-target="#myModal" data-servico="<?php coletaPaginas('con','nome'); ?>" data-genero="em" data-subservico="<?php coletaServicos('fal','nome'); ?>">
										<i class="icon <?php coletaServicos('fal','icone'); ?>"></i>
										<h4><?php coletaServicos('fal','nome'); ?></h4>
										<p><?php coletaServicos('fal','desc'); ?></p>
										<button class="btn btn-saibamais"><?php coletaServicos('fal','botao'); ?></button>
									</a>
								</li>
								<li class="col-xs-12 col-md-4 tCenter hvr-float">
									<a class="solicitarOrcamento" data-toggle="modal" data-target="#myModal" data-servico="<?php coletaPaginas('con','nome'); ?>" data-genero="em" data-subservico="<?php coletaServicos('pro','nome'); ?>">
										<i class="icon <?php coletaServicos('pro','icone'); ?>"></i>
										<h4><?php coletaServicos('pro','nome'); ?></h4>
										<p><?php coletaServicos('pro','desc'); ?></p>
										<button class="btn btn-saibamais"><?php coletaServicos('pro','botao'); ?></button>
									</a>
								</li>
								<li class="col-xs-12 col-md-4 tCenter hvr-float">
									<a class="solicitarOrcamento" data-toggle="modal" data-target="#myModal" data-servico="<?php coletaPaginas('con','nome'); ?>" data-genero="em" data-subservico="<?php coletaServicos('mas','nome'); ?>">
										<i class="icon <?php coletaServicos('mas','icone'); ?>"></i>
										<h4><?php coletaServicos('mas','nome'); ?></h4>
										<p><?php coletaServicos('mas','desc'); ?></p>
										<button class="btn btn-saibamais"><?php coletaServicos('mas','botao'); ?></button>
									</a>

								</li>
							</span>

						</ul>

					</section><!--//SERVÇOS-->

					<div class="clearfix"></div>

					<!--VEJA TAMBÉM-->
					<section class="vejaTambem">
						<div class="stitSecundario col-md-12">
							<h3>Veja Também</h3>
						</div>			

						<ul class="intFeatured block">
							<li class="col-xs-10 col-xs-offset-1 col-sm-offset-0 col-sm-3 tCenter">
								<a href="<?php coletaPaginas('rap','site'); ?>" class="item hvr-float">
									<i class="icon <?php coletaPaginas('rap','icone'); ?>"></i>
									<h2><span><?php coletaPaginas('rap','span'); ?></span><br><?php coletaPaginas('rap','nome'); ?></h2>
								</a>
							</li>
							<li class="col-xs-10 col-xs-offset-1 col-sm-offset-0 col-sm-3 tCenter">
								<a href="<?php coletaPaginas('per','site'); ?>" class="item hvr-float">
									<i class="icon <?php coletaPaginas('per','icone'); ?>"></i>
									<h2><span><?php coletaPaginas('per','span'); ?></span><br><?php coletaPaginas('per','nome'); ?></h2>
								</a>
							</li>
							<li class="col-xs-10 col-xs-offset-1 col-sm-offset-0 col-sm-3 tCenter">
								<a href="<?php coletaPaginas('ide','site'); ?>" class="item hvr-float">
									<i class="icon <?php coletaPaginas('ide','icone'); ?>"></i>
									<h2><span><?php coletaPaginas('ide','span'); ?></span><br><?php coletaPaginas('ide','nome'); ?></h2>
								</a>
							</li>
							<li class="col-xs-10 col-xs-offset-1 col-sm-offset-0 col-sm-3 tCenter">
								<a href="<?php coletaPaginas('mat','site'); ?>" class="item hvr-float">
									<i class="icon <?php coletaPaginas('mat','icone'); ?>"></i>
									<h2><span><?php coletaPaginas('mat','span'); ?></span><br><?php coletaPaginas('mat','nome'); ?></h2>
								</a>
							</li>			
						</ul>
					</section>

				</div>
			</div>
		</div>


		<div class="clearfix"></div>

		<?php include("includes/_orcamento_form.php");?>

	</section>

	<?php include("includes/_foot.php");?>