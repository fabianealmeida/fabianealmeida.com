<!--Defina o título da variável da Página que será puxado em toda a página.-->
<?php $pagAtual = 'cri' ?>

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
	<?php include("includes/_sites_nav.php") ;?>


	<!--CONTEÚDO-->
	<section  class="degAmareloFlamingo" id="criacaoDeSites" >

		<div class="container">

			<div class="blContent">

				<div class="col-xs-12 col-md-10 col-md-offset-1">

					<h2 class="titCenter animate-box tCenter underline" data-animate-effect="fadeInUp">
						<span>Qual a melhor opção</span><br> para a sua empresa?
					</h2>

					<ul class="navInternas">
						<li class="col-xs-10 col-xs-offset-1 col-sm-offset-0 col-sm-4 tCenter">
							<a href="<?php coletaPaginas('rap','site'); ?>" class="item hvr-float">
								<i class="icon <?php coletaPaginas('rap','icone'); ?>"></i>
								<h2><span><?php coletaPaginas('rap','span'); ?></span><br><?php coletaPaginas('rap','nome'); ?></h2>
								<p><?php coletaPaginas('rap','desc'); ?></p>
								<button class="btn btn-saibamais">Saiba mais</button>
							</a>
						</li>
						<li class="col-xs-10 col-xs-offset-1 col-sm-offset-0 col-sm-4 tCenter">
							<a href="<?php coletaPaginas('per','site'); ?>" class="item hvr-float">
								<i class="icon <?php coletaPaginas('per','icone'); ?>"></i>
								<h2><span><?php coletaPaginas('per','span'); ?></span><br><?php coletaPaginas('per','nome'); ?></h2>
								<p><?php coletaPaginas('per','desc'); ?></p>
								<button class="btn btn-saibamais">Saiba mais</button>
							</a>
						</li>
						<li class="col-xs-10 col-xs-offset-1 col-sm-offset-0 col-sm-4 tCenter">
							<a href="<?php coletaPaginas('con','site'); ?>" class="item hvr-float">
								<i class="icon <?php coletaPaginas('con','icone'); ?>"></i>
								<h2><span><?php coletaPaginas('con','span'); ?></span><br><?php coletaPaginas('con','nome'); ?></h2>
								<p><?php coletaPaginas('con','desc'); ?></p>
								<button class="btn btn-saibamais">Saiba mais</button>
							</a>
						</li>

						<li class="clearfix"></li>

						<li class="col-xs-10 col-xs-offset-1 col-sm-offset-0 col-sm-4 tCenter">
							<a href="<?php coletaPaginas('dom','site'); ?>" class="item hvr-float">
								<i class="icon <?php coletaPaginas('dom','icone'); ?>"></i>
								<h2><span><?php coletaPaginas('dom','span'); ?></span><br><?php coletaPaginas('dom','nome'); ?></h2>
								<p><?php coletaPaginas('dom','desc'); ?></p>
								<button class="btn btn-saibamais">Saiba mais</button>
							</a>
						</li>
						<li class="col-xs-10 col-xs-offset-1 col-sm-offset-0 col-sm-4 tCenter">
							<a href="<?php coletaPaginas('pre','site'); ?>" class="item hvr-float">
								<i class="icon <?php coletaPaginas('pre','icone'); ?>"></i>
								<h2><span><?php coletaPaginas('pre','span'); ?></span><br><?php coletaPaginas('pre','nome'); ?></h2>
								<p><?php coletaPaginas('pre','desc'); ?></p>
								<button class="btn btn-saibamais">Saiba mais</button>
							</a>
						</li>

						
<!-- 						<li class="col-xs-10 col-xs-offset-1 col-sm-offset-0 col-sm-4 tCenter">
							<a href="<?php coletaPaginas('loj','site'); ?>" class="item hvr-float">
								<i class="icon <?php coletaPaginas('loj','icone'); ?>"></i>
								<h2><span><?php coletaPaginas('loj','span'); ?></span><br><?php coletaPaginas('loj','nome'); ?></h2>
								<p><?php coletaPaginas('loj','desc'); ?></p>
								<button class="btn btn-saibamais">Saiba mais</button>
							</a>
						</li> -->
					</ul>
				</div>

				<div class="clearfix"></div>

			</div>
		</div>

		<div class="clearfix"></div>

	</section>


	<?php include("includes/_foot.php");?>

	<script>
		//Muda o título desta página para H1.
	      $('.titBreadcrumb').find('h2').replaceWith(function() {
	            return '<h1>' + $(this).html() + '</h1>';
	       });
	</script>