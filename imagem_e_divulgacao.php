<!--Defina o título da variável da Página que será puxado em toda a página.-->
<?php $pagAtual = 'ima' ?>

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
	<?php include("includes/_identidade_nav.php") ;?>

	<!--CONTEÚDO-->
	<section  class="degAmareloFlamingo" id="imagemEDivulgacao" >

		<div class="container">

			<div class="blContent">

				<div class="col-xs-12 col-md-10 col-md-offset-1">

					<h2 class="titCenter animate-box tCenter underline" data-animate-effect="fadeInUp">
						<span>O que a sua empresa</span><br> precisa neste momento?
					</h2>

					<ul class="navInternas row">
						<li class="col-xs-10 col-xs-offset-1 col-sm-offset-0 col-sm-4 tCenter">
							<a href="<?php coletaPaginas('ide','site'); ?>" class="item hvr-float">
								<i class="icon <?php coletaPaginas('ide','icone'); ?>"></i>
								<h2><span><?php coletaPaginas('ide','span'); ?></span><br><?php coletaPaginas('ide','nome'); ?></h2>
								<p><?php coletaPaginas('ide','desc'); ?></p>
								<button class="btn btn-saibamais"><?php coletaPaginas('ide','botao'); ?></button>
							</a>
						</li>
						<li class="col-xs-10 col-xs-offset-1 col-sm-offset-0 col-sm-4 tCenter">
							<a href="<?php coletaPaginas('mat','site'); ?>" class="item hvr-float">
								<i class="icon <?php coletaPaginas('mat','icone'); ?>"></i>
								<h2><span><?php coletaPaginas('mat','span'); ?></span><br><?php coletaPaginas('mat','nome'); ?></h2>
								<p><?php coletaPaginas('mat','desc'); ?></p>
								<button class="btn btn-saibamais"><?php coletaPaginas('mat','botao'); ?></button>
							</a>
						</li>
						<li class="col-xs-10 col-xs-offset-1 col-sm-offset-0 col-sm-4 tCenter">
							<a href="<?php coletaPaginas('pre','site'); ?>" class="item hvr-float">
								<i class="icon <?php coletaPaginas('pre','icone'); ?>"></i>
								<h2><span><?php coletaPaginas('pre','span'); ?></span><br><?php coletaPaginas('pre','nome'); ?></h2>
								<p><?php coletaPaginas('pre','desc'); ?></p>
								<button class="btn btn-saibamais"><?php coletaPaginas('pre','botao'); ?></button>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>


	</section><!--Como posso te ajudar-->


	<?php include("includes/_foot.php");?>

<script>
	//Muda o título desta página para H1.
      $('.titBreadcrumb').find('h2').replaceWith(function() {
            return '<h1>' + $(this).html() + '</h1>';
       });
</script>