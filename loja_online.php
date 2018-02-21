<!--Defina o título da variável da Página que será puxado em toda a página.-->
<?php $pagAtual = 'loj' ?>

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

	<!--CONTEÚDO DA PÁGINA-->
	<section  class="degAmareloFlamingo interna" id="siteRapido">

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
							<p><span class="quotes">Começe a sua loja Online sem investir muito.</span></p>
							<p>Você precisa de um <span class="destaque">e-commerce</span> que seja <span class="destaque">barato</span>, rápido de ser desenvolvido e que te permita o quando antes começar a vender seus produtos na internet? Então você precisa da <span class="destaqueSeg">loja online para pequenas empresas</span>.</p>
							<p>
								No Lojas online para pequenas empresas, nós prestamos serviço de configuração, instalação, personalização e manutenção do sistema de lojas virtuais da iluria. Um sistema fácil, rápido, que já possui estrutura pronta para aceitar pagamentos de todos os cartões e cálculos de fretes para todo o Brasil. Sem dúvida o melhor custo / benefício para artesões, pequenos comércios e novos empreendedores.
								<p class="destaqueSeg">Confira nossos serviços abaixo:</p>
							</p>
						</div>

					</section>

					<div class="clearfix"></div>

					<!--SERVIÇOS-->
					<section class="servicos col-md-12">	

						<div class="stitSecundario">
							<h3>Serviços disponíveis para a <?php coletaPaginas($pagAtual,'nome'); ?></h3>
						</div>

						<div class="clearfix"></div>

						<ul class="listaServicos underline">

							<span class="row">
								<li class="col-xs-12 col-md-4 tCenter hvr-float">
									<a class="solicitarOrcamento" data-toggle="modal" data-target="#myModal" data-servico="<?php coletaPaginas('loj','nome'); ?>" data-genero="em" data-subservico="<?php coletaServicos('con','nome'); ?>">
										<i class="icon <?php coletaServicos('con','icone'); ?>"></i>
										<h4><?php coletaServicos('con','nome'); ?></h4>
										<p><?php coletaServicos('con','desc'); ?></p>
										<button class="btn btn-saibamais"><?php coletaServicos('con','botao'); ?></button>
									</a>
								</li>
								<li class="col-xs-12 col-md-4 tCenter hvr-float">
									<a class="solicitarOrcamento" data-toggle="modal" data-target="#myModal" data-servico="<?php coletaPaginas('loj','nome'); ?>" data-genero="em" data-subservico="<?php coletaServicos('lpe','nome'); ?>">
										<i class="icon <?php coletaServicos('lpe','icone'); ?>"></i>
										<h4><?php coletaServicos('lpe','nome'); ?></h4>
										<p><?php coletaServicos('lpe','desc'); ?></p>
										<button class="btn btn-saibamais"><?php coletaServicos('lpe','botao'); ?></button>
									</a>
								</li>
								<li class="col-xs-12 col-md-4 tCenter hvr-float">
									<a class="solicitarOrcamento" data-toggle="modal" data-target="#myModal" data-servico="<?php coletaPaginas('loj','nome'); ?>" data-genero="em" data-subservico="<?php coletaServicos('ban','nome'); ?>">
										<i class="icon <?php coletaServicos('ban','icone'); ?>"></i>
										<h4><?php coletaServicos('ban','nome'); ?></h4>
										<p><?php coletaServicos('ban','desc'); ?></p>
										<button class="btn btn-saibamais"><?php coletaServicos('ban','botao'); ?></button>
									</a>

								</li>
							</span>

							<span class="row">

								<li class="col-xs-12 col-md-4 tCenter hvr-float">
									<a class="solicitarOrcamento" data-toggle="modal" data-target="#myModal" data-servico="<?php coletaPaginas('loj','nome'); ?>" data-genero="em" data-subservico="<?php coletaServicos('red','nome'); ?>">
										<i class="icon <?php coletaServicos('red','icone'); ?>"></i>
										<h4><?php coletaServicos('red','nome'); ?></h4>
										<p><?php coletaServicos('red','desc'); ?></p>
										<button class="btn btn-saibamais"><?php coletaServicos('red','botao'); ?></button>
									</a>

								</li>
								<li class="col-xs-12 col-md-4 tCenter hvr-float">
									<a class="solicitarOrcamento" data-toggle="modal" data-target="#myModal" data-servico="<?php coletaPaginas('loj','nome'); ?>" data-genero="em" data-subservico="<?php coletaServicos('tre','nome'); ?>">
										<i class="icon <?php coletaServicos('tre','icone'); ?>"></i>
										<h4><?php coletaServicos('tre','nome'); ?></h4>
										<p><?php coletaServicos('tre','desc'); ?></p>
										<button class="btn btn-saibamais"><?php coletaServicos('tre','botao'); ?></button>
									</a>

								</li>
								<li class="col-xs-12 col-md-4 tCenter hvr-float">
									<a href="<?php coletaServicos('reg', 'url'); ?>">
										<i class="icon <?php coletaServicos('reg','icone'); ?>"></i>
										<h4><?php coletaServicos('reg','nome'); ?></h4>
										<p><?php coletaServicos('reg','desc'); ?></p>
										<button class="btn btn-saibamais"><?php coletaServicos('reg','botao'); ?></button>
									</a>

								</li>
							</span>

						</ul>
					</section><!--//SERVÇOS-->


					<div class="clearfix"></div>

					<!--Vantagens (MÓDULOS)-->
					<section class="modulos col-md-12">	

						<div class="stitSecundario">
							<h3>Vantagens da Loja da Iluria</h3>
						</div>

						<ul class="listaModulos">
							<li><i class="icon <?php coletaModulos('est','icone'); ?>"></i>
								<div><h4><?php coletaModulos('est','nome'); ?></h4><p><?php coletaModulos('est','desc'); ?></p></div>
							</li>
							<li><i class="icon <?php coletaModulos('fop','icone'); ?>"></i><div><h4><?php coletaModulos('fop','nome'); ?></h4><p><?php coletaModulos('fop','desc'); ?></p></div></li>
							<li><i class="icon <?php coletaModulos('lre','icone'); ?>"></i><div><h4><?php coletaModulos('lre','nome'); ?></h4><p><?php coletaModulos('lre','desc'); ?></p></div></li>
							<li><i class="icon <?php coletaModulos('cor','icone'); ?>"></i><div><h4><?php coletaModulos('cor','nome'); ?></h4><p><?php coletaModulos('cor','desc'); ?></p></div></li>
							<li><i class="icon <?php coletaModulos('pap','icone'); ?>"></i><div><h4><?php coletaModulos('pap','nome'); ?></h4><p><?php coletaModulos('pap','desc'); ?></p></div></li>
							<li><i class="icon <?php coletaModulos('sis','icone'); ?>"></i><div><h4><?php coletaModulos('sis','nome'); ?></h4><p><?php coletaModulos('sis','desc'); ?></p></div></li>
						</ul>


					<!--Solicite um orçamento-->
					<div class="clearfix"></div>

					<div class="col-md-12 text-center mTop40 mBot40">
						<button class="btn btn-primary btn-big fCenter"><a href="contato.php">Solicite um orçamento!</a></button>
					</div>

					</section><!--//MÓDULOS-->

					<div class="clearfix"></div>

					<!--VEJA TAMBÉM-->
					<section>
					<div class="stitSecundario col-md-12">
						<h3>Veja Também</h3>
					</div>			

					<ul class="intFeatured block">
						<li class="col-xs-10 col-xs-offset-1 col-sm-offset-0 col-sm-3 tCenter">
							<a href="<?php coletaPaginas('ide','site'); ?>" class="item hvr-float">
								<i class="icon <?php coletaPaginas('ide','icone'); ?>"></i>
								<h2><span><?php coletaPaginas('ide','span'); ?></span><br><?php coletaPaginas('ide','nome'); ?></h2>
							</a>
						</li>
						<li class="col-xs-10 col-xs-offset-1 col-sm-offset-0 col-sm-3 tCenter">
							<a href="<?php coletaPaginas('pre','site'); ?>" class="item hvr-float">
								<i class="icon <?php coletaPaginas('pre','icone'); ?>"></i>
								<h2><span><?php coletaPaginas('pre','span'); ?></span><br><?php coletaPaginas('pre','nome'); ?></h2>
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

	</section>

	<?php include("includes/_foot.php");?>

