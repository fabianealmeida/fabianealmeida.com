<!--Defina o título da variável da Página que será puxado em toda a página.-->
<?php $pagAtual = 'dom' ?>

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
	<section  class="degAmareloFlamingo interna" id="dominiosEHospedagem">

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
							<p><span class="quotes">A infraestrutura que o seu site precisa.</span></p>
							<p>Para manter um site ou uma loja online disponíveis na internet, você precisa de um registro de <span class="destaque">endereço de domínio</span> (endereço do seu site), e um <span class="destaque">provedor de hospedagem seguro e confiável</span>, que manterá o seu site disponível na internet <span class="destaqueSeg">24h por dia, 7 dias da semana</span>.
							<br><br>
							Disponibilizamos a contratação destes serviços através da agência <a href="http://www.opus2.com.br" target="_blank" class="destaque">Opus2 Web Studio</a>, da qual somos sócios e parceiros. A <a href="http://www.opus2.com.br" target="_blank">Opus2 web studio</a> possui toda a infraestrutura necessária para que assim que o seu site esteja pronto ele possa ir pro ar imediatamente!<br>
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

							<li class="col-xs-12 col-md-4 tCenter hvr-float">
								<a class="solicitarOrcamento" data-toggle="modal" data-target="#myModal" data-servico="<?php coletaPaginas('dom','nome'); ?>" data-genero="em" data-subservico="<?php coletaServicos('dom','nome'); ?>">
									<i class="icon <?php coletaServicos('dom','icone'); ?>"></i>
									<h4><?php coletaServicos('dom','nome'); ?></h4>
									<p><?php coletaServicos('dom','desc'); ?></p>
									<button class="btn btn-saibamais"><?php coletaServicos('dom','botao'); ?></button>
								</a>
							</li>
							<li class="col-xs-12 col-md-4 tCenter hvr-float">
								<a class="solicitarOrcamento" data-toggle="modal" data-target="#myModal" data-servico="<?php coletaPaginas('dom','nome'); ?>" data-genero="em" data-subservico="<?php coletaServicos('hos','nome'); ?>">
									<i class="icon <?php coletaServicos('hos','icone'); ?>"></i>
									<h4><?php coletaServicos('hos','nome'); ?></h4>
									<p><?php coletaServicos('hos','desc'); ?></p>
									<button class="btn btn-saibamais"><?php coletaServicos('hos','botao'); ?></button>
								</a>
							</li>
							<li class="col-xs-12 col-md-4 tCenter hvr-float">
								<a href="<?php coletaServicos('opu', 'url'); ?>" target="_blank">
									<i class="icon <?php coletaServicos('opu','icone'); ?>"></i>
									<h4><?php coletaServicos('opu','nome'); ?></h4>
									<p><?php coletaServicos('opu','desc'); ?></p>
									<button class="btn btn-saibamais"><?php coletaServicos('opu','botao'); ?></button>
								</a>

							</li>

						</ul>
					</section>

					<div class="clearfix"></div>

					<!--VEJA TAMBÉM-->
					<section>
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
								<a href="<?php coletaPaginas('loj','site'); ?>" class="item hvr-float">
									<i class="icon <?php coletaPaginas('loj','icone'); ?>"></i>
									<h2><span><?php coletaPaginas('loj','span'); ?></span><br><?php coletaPaginas('loj','nome'); ?></h2>
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

