<!--Defina o título da variável da Página que será puxado em toda a página.-->
<?php $pagAtual = 'ide' ?>

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
							<p><span class="quotes">Sua imagem é a sua primeira impressão.</span></p>
							<p>
								 O principal elementos da <span class="destaque">sua imagem é a sua logo</span>.
								Uma logo bem feita deve ser criada em cima de conceitos, com <span class="destaque">estudo de público alvo</span>, <span class="destaque">cores, fontes e espaçamentos</span> bem pensados <span class="destaqueSeg">para transmitir uma imagem profissional</span>, que tenha uma boa leitura e que seja de fácil reconhecimento em qualquer medida.
							</p><p>
								Além da marca, <span class="destaqueSeg">outros elementos também fazem parte</span> da sua identidade, como: Cartão de visitas, assinaturas de e-mail, papel timbrado, envelopes e até mesmo seu site ou materiais publicitários. Para ter uma identidade bem definida, todos estes itens devem ter uma percepção visual unificada e devem conversar entre si.
							</p>
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
									<a class="solicitarOrcamento" data-toggle="modal" data-target="#myModal" data-servico="<?php coletaPaginas('ide','nome'); ?>" data-genero="em" data-subservico="<?php coletaServicos('log','nome'); ?>">
										<i class="icon <?php coletaServicos('log','icone'); ?>"></i>
										<h4><?php coletaServicos('log','nome'); ?></h4>
										<p><?php coletaServicos('log','desc'); ?></p>
										<button class="btn btn-saibamais"><?php coletaServicos('log','botao'); ?></button>
									</a>
								</li>
								<li class="col-xs-12 col-md-4 tCenter hvr-float">
									<a class="solicitarOrcamento" data-toggle="modal" data-target="#myModal" data-servico="<?php coletaPaginas('ide','nome'); ?>" data-genero="em" data-subservico="<?php coletaServicos('mar','nome'); ?>">
										<i class="icon <?php coletaServicos('mar','icone'); ?>"></i>
										<h4><?php coletaServicos('mar','nome'); ?></h4>
										<p><?php coletaServicos('mar','desc'); ?></p>
										<button class="btn btn-saibamais"><?php coletaServicos('mar','botao'); ?></button>
									</a>
								</li>
								<li class="col-xs-12 col-md-4 tCenter hvr-float">
									<a class="solicitarOrcamento" data-toggle="modal" data-target="#myModal" data-servico="<?php coletaPaginas('ide','nome'); ?>" data-genero="em" data-subservico="<?php coletaServicos('car','nome'); ?>">
										<i class="icon <?php coletaServicos('car','icone'); ?>"></i>
										<h4><?php coletaServicos('car','nome'); ?></h4>
										<p><?php coletaServicos('car','desc'); ?></p>
										<button class="btn btn-saibamais"><?php coletaServicos('car','botao'); ?></button>
									</a>

								</li>
							</span>

							<span class="row">

								<li class="col-xs-12 col-md-4 tCenter hvr-float">
									<a class="solicitarOrcamento" data-toggle="modal" data-target="#myModal" data-servico="<?php coletaPaginas('ide','nome'); ?>" data-genero="em" data-subservico="<?php coletaServicos('pap','nome'); ?>">
										<i class="icon <?php coletaServicos('pap','icone'); ?>"></i>
										<h4><?php coletaServicos('pap','nome'); ?></h4>
										<p><?php coletaServicos('pap','desc'); ?></p>
										<button class="btn btn-saibamais"><?php coletaServicos('pap','botao'); ?></button>
									</a>

								</li>
								<li class="col-xs-12 col-md-4 tCenter hvr-float">
									<a class="solicitarOrcamento" data-toggle="modal" data-target="#myModal" data-servico="<?php coletaPaginas('ide','nome'); ?>" data-genero="em" data-subservico="<?php coletaServicos('ass','nome'); ?>">
										<i class="icon <?php coletaServicos('ass','icone'); ?>"></i>
										<h4><?php coletaServicos('ass','nome'); ?></h4>
										<p><?php coletaServicos('ass','desc'); ?></p>
										<button class="btn btn-saibamais"><?php coletaServicos('ass','botao'); ?></button>
									</a>

								</li>
								<li class="col-xs-12 col-md-4 tCenter hvr-float">
									<a class="solicitarOrcamento" data-toggle="modal" data-target="#myModal" data-servico="<?php coletaPaginas('ide','nome'); ?>" data-genero="em" data-subservico="<?php coletaServicos('mat','nome'); ?>">
										<i class="icon <?php coletaServicos('mat','icone'); ?>"></i>
										<h4><?php coletaServicos('mat','nome'); ?></h4>
										<p><?php coletaServicos('mat','desc'); ?></p>
										<button class="btn btn-saibamais"><?php coletaServicos('mat','botao'); ?></button>
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
							<a href="<?php coletaPaginas('mat','site'); ?>" class="item hvr-float">
								<i class="icon <?php coletaPaginas('mat','icone'); ?>"></i>
								<h2><span><?php coletaPaginas('mat','span'); ?></span><br><?php coletaPaginas('mat','nome'); ?></h2>
							</a>
						</li>
						<li class="col-xs-10 col-xs-offset-1 col-sm-offset-0 col-sm-3 tCenter">
							<a href="<?php coletaPaginas('pre','site'); ?>" class="item hvr-float">
								<i class="icon <?php coletaPaginas('pre','icone'); ?>"></i>
								<h2><span><?php coletaPaginas('pre','span'); ?></span><br><?php coletaPaginas('pre','nome'); ?></h2>
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
								<h2><span><?php coletaPaginas('per','span'); ?></span><br><?php coletaPaginas('per','nome'); ?></h2>
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