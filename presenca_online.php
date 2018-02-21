<!--Defina o título da variável da Página que será puxado em toda a página.-->
<?php $pagAtual = 'pre' ?>

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
	<div  class="degAmareloFlamingo interna" id="siteRapido">

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
							<p><span class="quotes">A propaganda é a alma do negócio.</span></p>
							<p>Pronto! <span class="destaque">Você já fez o seu site</span>, ou a sua loja virtual. <span class="destaque">Agora é só esperar os clientes aparecerem</span>, correto? <span class="destaqueSeg">Infelizmente não!</span> Ter um site é só o começo. <br><br>
							Um site novo é como uma loja em uma rua sem movimento. A única forma dos clientes te acharem, é através da divulgação. E para isto, existem diversas ferramentas! <br><br>
							<span class="destaque">Confira abaixo!</span>
							</p>
						</div>

					</section>

					<div class="clearfix"></div>

					<!--SERVIÇOS-->
					<section class="servicos col-md-12">	

						<div class="stitSecundario">
							<h3>Serviços para melhorar a sua <?php coletaPaginas($pagAtual,'nome'); ?></h3>
						</div>

						<div class="clearfix"></div>

						<ul class="listaServicos underline">

							<span class="row">
								<li class="col-xs-12 col-md-4 tCenter hvr-float">

									<a class="solicitarOrcamento" data-toggle="modal" data-target="#myModal" data-servico="<?php coletaPaginas('pre','nome'); ?>" data-genero="em" data-subservico="<?php coletaServicos('red','nome'); ?>">
										<i class="icon <?php coletaServicos('red','icone'); ?>"></i>
										<h4><?php coletaServicos('red','nome'); ?></h4>
										<p><?php coletaServicos('red','desc'); ?></p>
										<button class="btn btn-saibamais"><?php coletaServicos('red','botao'); ?></button>
									</a>
								</li>
								<li class="col-xs-12 col-md-4 tCenter hvr-float">
									<a class="solicitarOrcamento" data-toggle="modal" data-target="#myModal" data-servico="<?php coletaPaginas('pre','nome'); ?>" data-genero="em" data-subservico="<?php coletaServicos('ema','nome'); ?>">
										<i class="icon <?php coletaServicos('ema','icone'); ?>"></i>
										<h4><?php coletaServicos('ema','nome'); ?></h4>
										<p><?php coletaServicos('ema','desc'); ?></p>
										<button class="btn btn-saibamais"><?php coletaServicos('ema','botao'); ?></button>
									</a>
								</li>
								<li class="col-xs-12 col-md-4 tCenter hvr-float">
									<a class="solicitarOrcamento" data-toggle="modal" data-target="#myModal" data-servico="<?php coletaPaginas('pre','nome'); ?>" data-genero="em" data-subservico="<?php coletaServicos('ose','nome'); ?>">
										<i class="icon <?php coletaServicos('ose','icone'); ?>"></i>
										<h4><?php coletaServicos('ose','nome'); ?></h4>
										<p><?php coletaServicos('ose','desc'); ?></p>
										<button class="btn btn-saibamais"><?php coletaServicos('ose','botao'); ?></button>
									</a>

								</li>
							</span>

							<span class="row">
								<li class="col-xs-12 col-md-4 tCenter hvr-float">
									<a class="solicitarOrcamento" data-toggle="modal" data-target="#myModal" data-servico="<?php coletaPaginas('pre','nome'); ?>" data-genero="em" data-subservico="<?php coletaServicos('red','nome'); ?>">
										<i class="icon <?php coletaServicos('ana','icone'); ?>"></i>
										<h4><?php coletaServicos('ana','nome'); ?></h4>
										<p><?php coletaServicos('ana','desc'); ?></p>
										<button class="btn btn-saibamais"><?php coletaServicos('ana','botao'); ?></button>
									</a>

								</li>
								<li class="col-xs-12 col-md-4 tCenter hvr-float">
									<a class="solicitarOrcamento" data-toggle="modal" data-target="#myModal" data-servico="<?php coletaPaginas('pre','nome'); ?>" data-genero="em" data-subservico="<?php coletaServicos('ban','nome'); ?>">
										<i class="icon <?php coletaServicos('ban','icone'); ?>"></i>
										<h4><?php coletaServicos('ban','nome'); ?></h4>
										<p><?php coletaServicos('ban','desc'); ?></p>
										<button class="btn btn-saibamais"><?php coletaServicos('ban','botao'); ?></button>
									</a>

								</li>
								<!--<li class="col-xs-12 col-md-4 tCenter hvr-float">
									<a class="solicitarOrcamento" data-toggle="modal" data-target="#myModal" data-servico="<?php coletaPaginas('pre','nome'); ?>" data-genero="em" data-subservico="<?php coletaServicos('goa','nome'); ?>">
										<i class="icon <?php coletaServicos('goa','icone'); ?>"></i>
										<h4><?php coletaServicos('goa','nome'); ?></h4>
										<p><?php coletaServicos('goa','desc'); ?></p>
										<button class="btn btn-saibamais"><?php coletaServicos('goa','botao'); ?></button>
									</a>

								</li>
								<li class="col-xs-12 col-md-4 tCenter hvr-float">
									<a class="solicitarOrcamento" data-toggle="modal" data-target="#myModal" data-servico="<?php coletaPaginas('pre','nome'); ?>" data-genero="em" data-subservico="<?php coletaServicos('fac','nome'); ?>">
										<i class="icon <?php coletaServicos('fac','icone'); ?>"></i>
										<h4><?php coletaServicos('fac','nome'); ?></h4>
										<p><?php coletaServicos('fac','desc'); ?></p>
										<button class="btn btn-saibamais"><?php coletaServicos('fac','botao'); ?></button>
									</a>
								</li>-->
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
							<li class="col-xs-10 col-xs-offset-1 col-sm-offset-0 col-sm-3 tCenter">
								<a href="<?php coletaPaginas('dom','site'); ?>" class="item hvr-float">
									<i class="icon <?php coletaPaginas('dom','icone'); ?>"></i>
									<h2><span><?php coletaPaginas('dom','span'); ?></span><br><?php coletaPaginas('dom','nome'); ?></h2>
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

