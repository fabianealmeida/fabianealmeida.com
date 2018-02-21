<!--Defina o título da variável da Página que será puxado em toda a página.-->
<?php $pagAtual = 'mat' ?>

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
	<?php include("includes/_identidade_nav.php") ;?>

	<!--CONTEÚDO DA PÁGINA-->
	<div class="degAmareloFlamingo interna" id="siteRapido">

		<div class="container">

			<?php @include("includes/_tit_principal_interna.php"); ?>

			<div class="blContent">

				<div class="col-md-10 col-md-offset-1">

					<!--INTRO-->
					<section class="intro tLeft">

						<div class="col-md-7">
							<img src="img/<?php coletaPaginas($pagAtual,'imagem'); ?>" alt="Amostra do <?php coletaPaginas($pagAtual,'nome'); ?>" class="img-responsive img-destaque">
						</div>

						<div class="col-md-5">

							<p><span class="quotes">Quem não é visto, não é lembrado.</span></p>

							<p>A forma mais objetiva de conseguir clientes é divulgando a sua empresa. E duas das formas mais importantes de divulgação são a <span class="destaque">publicidade impressa</span> e o <span class="destaque">marketing digital</span>. <br>Se a sua empresa quer ter uma <span class="destaqueSeg">campanha publicitária de impacto</span>, devemos nos focar nas duas.</p>

							<p>O marketing digital é a melhor ferramenta para tornar a sua empresa conhecida e criar interação direta com os clientes, mas um material impresso é indispensável para divulgar produtos e serviços, surpreender clientes em reuniões e causar uma boa impressão da sua empresa de forma imediata.</p>
							
						</div>

					</section>

					<div class="clearfix"></div>

					<!--SERVIÇOS-->
					<section class="servicos col-md-12">	

						<div class="stitSecundario">
							<h3>Produtos de <?php coletaPaginas($pagAtual,'nome'); ?></h3>
						</div>

						<div class="clearfix"></div>

						<ul class="listaServicos underline">

							<span class="row">
								<li class="col-xs-12 col-md-4 tCenter hvr-float">
									<a class="solicitarOrcamento" data-toggle="modal" data-target="#myModal" data-servico="<?php coletaPaginas('mat','nome'); ?>" data-genero="em" data-subservico="<?php coletaServicos('fly','nome'); ?>">
										<i class="icon <?php coletaServicos('fly','icone'); ?>"></i>
										<h4><?php coletaServicos('fly','nome'); ?></h4>
										<p><?php coletaServicos('fly','desc'); ?></p>
										<button class="btn btn-saibamais"><?php coletaServicos('fly','botao'); ?></button>
									</a>
								</li>
								<li class="col-xs-12 col-md-4 tCenter hvr-float">
									<a class="solicitarOrcamento" data-toggle="modal" data-target="#myModal" data-servico="<?php coletaPaginas('mat','nome'); ?>" data-genero="em" data-subservico="<?php coletaServicos('fol','nome'); ?>">
										<i class="icon <?php coletaServicos('fol','icone'); ?>"></i>
										<h4><?php coletaServicos('fol','nome'); ?></h4>
										<p><?php coletaServicos('fol','desc'); ?></p>
										<button class="btn btn-saibamais"><?php coletaServicos('fol','botao'); ?></button>
									</a>
								</li>
								<li class="col-xs-12 col-md-4 tCenter hvr-float">
									<a class="solicitarOrcamento" data-toggle="modal" data-target="#myModal" data-servico="<?php coletaPaginas('mat','nome'); ?>" data-genero="em" data-subservico="<?php coletaServicos('rev','nome'); ?>">
										<i class="icon <?php coletaServicos('rev','icone'); ?>"></i>
										<h4><?php coletaServicos('rev','nome'); ?></h4>
										<p><?php coletaServicos('rev','desc'); ?></p>
										<button class="btn btn-saibamais"><?php coletaServicos('rev','botao'); ?></button>
									</a>

								</li>
							</span>

							<span class="row">

								<li class="col-xs-12 col-md-4 tCenter hvr-float">
									<a class="solicitarOrcamento" data-toggle="modal" data-target="#myModal" data-servico="<?php coletaPaginas('mat','nome'); ?>" data-genero="em" data-subservico="<?php coletaServicos('bap','nome'); ?>">
										<i class="icon <?php coletaServicos('bap','icone'); ?>"></i>
										<h4><?php coletaServicos('bap','nome'); ?></h4>
										<p><?php coletaServicos('bap','desc'); ?></p>
										<button class="btn btn-saibamais"><?php coletaServicos('bap','botao'); ?></button>
									</a>

								</li>
								<li class="col-xs-12 col-md-4 tCenter hvr-float">
									<a class="solicitarOrcamento" data-toggle="modal" data-target="#myModal" data-servico="<?php coletaPaginas('mat','nome'); ?>" data-genero="em" data-subservico="<?php coletaServicos('ema','nome'); ?>">
										<i class="icon <?php coletaServicos('ema','icone'); ?>"></i>
										<h4><?php coletaServicos('ema','nome'); ?></h4>
										<p><?php coletaServicos('ema','desc'); ?></p>
										<button class="btn btn-saibamais"><?php coletaServicos('ema','botao'); ?></button>
									</a>

								</li>
								<li class="col-xs-12 col-md-4 tCenter hvr-float">
									<a class="solicitarOrcamento" data-toggle="modal" data-target="#myModal" data-servico="<?php coletaPaginas('mat','nome'); ?>" data-genero="em" data-subservico="<?php coletaServicos('bri','nome'); ?>">
										<i class="icon <?php coletaServicos('bri','icone'); ?>"></i>
										<h4><?php coletaServicos('bri','nome'); ?></h4>
										<p><?php coletaServicos('bri','desc'); ?></p>
										<button class="btn btn-saibamais"><?php coletaServicos('bri','botao'); ?></button>
									</a>

								</li>
							</span>

						</ul>
					</section><!--//SERVÇOS-->


					<div class="clearfix"></div>

					<!--VEJA TAMBÉM-->
					<section>
						<div class="stitSecundario col-md-12">
							<h3>Veja Também</h3>
						</div>			

						<ul class="intFeatured">

							<li class="col-xs-10 col-xs-offset-1 col-sm-offset-0 col-sm-3 tCenter">
									<a href="<?php coletaPaginas('pre','site'); ?>" class="item hvr-float">
										<i class="icon <?php coletaPaginas('pre','icone'); ?>"></i>
										<h2><span><?php coletaPaginas('pre','span'); ?></span><br><?php coletaPaginas('pre','nome'); ?></h2>
									</a>
							</li>
							<li class="col-xs-10 col-xs-offset-1 col-sm-offset-0 col-sm-3 tCenter">
									<a href="<?php coletaPaginas('ide','site'); ?>" class="item hvr-float">
										<i class="icon <?php coletaPaginas('ide','icone'); ?>"></i>
										<h2><span><?php coletaPaginas('ide','span'); ?></span><br><?php coletaPaginas('ide','nome'); ?></h2>
									</a>
							</li>
							<li class="col-xs-10 col-xs-offset-1 col-sm-offset-0 col-sm-3 tCenter">
									<a href="<?php coletaPaginas('rap','site'); ?>" class="item hvr-float">
										<i class="icon <?php coletaPaginas('rap','icone'); ?>"></i>
										<h2><span><?php coletaPaginas('rap','span'); ?></span><br><?php coletaPaginas('rap','nome'); ?></h2>
									</a>
							</li>
							<li class="col-xs-10 col-xs-offset-1 col-sm-offset-0 col-sm-3 tCenter">
									<a href="<?php coletaPaginas('per','site'); ?>" class="item hvr-float">
										<i class="icon <?php coletaPaginas('per','icone'); ?>"></i>
										<h2><span><?php coletaPaginas('per','span'); ?><br></span><?php coletaPaginas('per','nome'); ?></h2>
									</a>
							</li>
						</ul>
					</section>
				</div>
			</div>
		</div>


		<div class="clearfix"></div>

		<?php include("includes/_orcamento_form.php");?>

	</div>

	<?php include("includes/_foot.php");?>
