<!--Defina o título da variável da Página que será puxado em toda a página.-->
<?php $pagAtual = 'rap' ?>

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
	<div  class="degAmareloFlamingo interna" id="siteRapido">

		<div class="container">

			<?php @include("includes/_tit_principal_interna.php"); ?>

			<!-- Conteúdo -->
			<div class="blContent">

				<div class="col-md-10 col-md-offset-1">

					<!--INTRO-->
					<section class="intro">

						<div class="col-md-7">
							<img src="img/<?php coletaPaginas($pagAtual,'imagem'); ?>" alt="Amostra do <?php coletaPaginas($pagAtual,'nome'); ?>" class="img-responsive img-destaque">
						</div>

						<div class="col-md-5">
							<p><span class="quotes">O típico bom, bonito e barato.</span></p>
							<p>Você ou sua empresa precisam de um <span class="destaque">site rápido</span>, que tenha um visual atrativo, <span class="destaque">otimizado para celulares</span> (responsivo), que transmita as principais informações da sua empresa de forma clara e objetiva, e tudo isto <span class="destaque">por um preço bem acessível</span>? 
								Então <span class="destaqueSeg">o site rápido é pra você!</span>
							</p><p>
								O site rápido é baseado em templates previamente criados,  para atender as necessidades básicas de pequenas empresas nas mais diversas áreas e prestadores de serviços em geral, como escritórios de advocacia, escritórios de engenharia, ONGs, petshops, pequenos comércios, entre outros. 
							</p>
						</div>
					</section>

					<div class="clearfix"></div>

					<!--VANTAGENS-->
					<section class="vantagens col-md-12">	

						<div class="stitSecundario">
							<h3>Vantagens do <?php coletaPaginas($pagAtual,'nome'); ?></h3>
						</div>

						<div class="clearfix"></div>

						<ul class="listaVantagens underline">

							<span class="row">
								<li class="col-xs-12 col-md-4 tCenter">
									<i class="icon <?php coletaVantagens('tem','icone'); ?>"></i>
									<h4><?php coletaVantagens('tem','nome'); ?></h4>
									<p><?php coletaVantagens('tem','desc'); ?></p>
								</li>
								<li class="col-xs-12 col-md-4 tCenter">
									<i class="icon <?php coletaVantagens('usa','icone'); ?>"></i>
									<h4><?php coletaVantagens('usa','nome'); ?></h4>
									<p><?php coletaVantagens('usa','desc'); ?></p>
								</li>
								<li class="col-xs-12 col-md-4 tCenter">
									<i class="icon <?php coletaVantagens('res','icone'); ?>"></i>
									<h4><?php coletaVantagens('res','nome'); ?></h4>
									<p><?php coletaVantagens('res','desc'); ?></p>
								</li>
							</span>

							<span class="row">
								<li class="col-xs-12 col-md-4 tCenter">
									<i class="icon <?php coletaVantagens('seo','icone'); ?>"></i>
									<h4><?php coletaVantagens('seo','nome'); ?></h4>
									<p><?php coletaVantagens('seo','desc'); ?></p>
								</li>
								<li class="col-xs-12 col-md-4 tCenter">
									<i class="icon <?php coletaVantagens('con','icone'); ?>"></i>
									<h4><?php coletaVantagens('con','nome'); ?></h4>
									<p><?php coletaVantagens('con','desc'); ?></p>
								</li>
								<li class="col-xs-12 col-md-4 tCenter">
									<i class="icon <?php coletaVantagens('fix','icone'); ?>"></i>
									<h4><?php coletaVantagens('fix','nome'); ?></h4>
									<p><?php coletaVantagens('fix','desc'); ?></p>
								</li>
							</span>

						</ul>
					</section><!--//VANTAGENS-->


					<div class="clearfix"></div>
					<!--MÓDULOS-->
					<section class="modulos col-md-12">	

						<div class="stitSecundario">
							<h3>Módulos extras</h3>
						</div>

						<ul class="listaModulos">
							<li><i class="icon <?php coletaModulos('reg','icone'); ?>"></i><span><h4><?php coletaModulos('reg','nome'); ?></h4><p><?php coletaModulos('reg','desc'); ?></p></span></li>
							<li><i class="icon <?php coletaModulos('con','icone'); ?>"></i><span><h4><?php coletaModulos('con','nome'); ?></h4><p><?php coletaModulos('con','desc'); ?></p></span></li>
							<li><i class="icon <?php coletaModulos('seo','icone'); ?>"></i><span><h4><?php coletaModulos('seo','nome'); ?></h4><p><?php coletaModulos('seo','desc'); ?></p></span></li>
							<li><i class="icon <?php coletaModulos('gal','icone'); ?>"></i><span><h4><?php coletaModulos('gal','nome'); ?></h4><p><?php coletaModulos('gal','desc'); ?></p></span></li>
							<li><i class="icon <?php coletaModulos('man','icone'); ?>"></i><span><h4><?php coletaModulos('man','nome'); ?></h4><p><?php coletaModulos('man','desc'); ?></p></span></li>
							<li><i class="icon <?php coletaModulos('red','icone'); ?>"></i><span><h4><?php coletaModulos('red','nome'); ?></h4><p><?php coletaModulos('red','desc'); ?></p></span></li>
							<!--<li><i class="icon <?php coletaModulos('goo','icone'); ?>"></i><span><h4><?php coletaModulos('goo','nome'); ?></h4><p><?php coletaModulos('goo','desc'); ?></p></span></li>
							<li><i class="icon <?php coletaModulos('fac','icone'); ?>"></i><span><h4><?php coletaModulos('fac','nome'); ?></h4><p><?php coletaModulos('fac','desc'); ?></p></span></li>-->
						</ul>

					<!--Solicite um orçamento-->
					<div class="clearfix"></div>

					<div class="col-md-12 text-center mTop40 mBot40">
						<button class="btn btn-primary btn-big fCenter solicitarOrcamento" data-toggle="modal" data-target="#myModal" data-servico="Site Rápido" data-genero="no">Solicite um orçamento!</button>

					</div>

					</section><!--//MÓDULOS-->


					<div class="clearfix"></div>
					<!--VEJA TAMBÉM-->
					<section class="vejaTambem">
						<div class="stitSecundario col-md-12">
							<h3>Veja Também</h3>
						</div>			

						<ul class="intFeatured block">
							<li class="col-xs-10 col-xs-offset-1 col-sm-offset-0 col-sm-3 tCenter">
								<a href="<?php coletaPaginas('per','site'); ?>" class="item hvr-float">
									<i class="icon <?php coletaPaginas('per','icone'); ?>"></i>
									<h2><span><?php coletaPaginas('per','span'); ?></span><br><?php coletaPaginas('per','nome'); ?></h2>
								</a>
							</li>
							<li class="col-xs-10 col-xs-offset-1 col-sm-offset-0 col-sm-3 tCenter">
								<a href="<?php coletaPaginas('pre','site'); ?>" class="item hvr-float">
									<i class="icon <?php coletaPaginas('pre','icone'); ?>"></i>
									<h2><span><?php coletaPaginas('pre','span'); ?></span><br><?php coletaPaginas('pre','nome'); ?></h2>
								</a>
							</li>
							<li class="col-xs-10 col-xs-offset-1 col-sm-offset-0 col-sm-3 tCenter">
								<a href="<?php coletaPaginas('con','site'); ?>" class="item hvr-float">
									<i class="icon <?php coletaPaginas('con','icone'); ?>"></i>
									<h2><span><?php coletaPaginas('con','span'); ?></span><br><?php coletaPaginas('con','nome'); ?></h2>
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

	<!--FOOTER-->
	<?php include("includes/_foot.php");?>
