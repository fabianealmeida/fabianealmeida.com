<!--Defina o título da variável da Página que será puxado em toda a página.-->
<?php $pagAtual = 'ind' ?>

<?php include("includes/_head.php");?>

<body onload="ClearFormContato()">
	<div id="pointer"></div>

	<!--CARREGADOR-->
	<?php include("includes/_loader.php");?>
	<!--MENU-->
	<?php include("includes/_head_nav.php");?>

	<!--SLIDER-->
	<?php include("includes/_slider_full.php");?>

	<!--CORPO-->
	<!--QUEM SOU EU-->
<!-- 	<section id="homeInfo" class="relative degCeuMedio">

		<div class="diagHome1">
			<img src="img/diagonal_rosa2.png" alt="" class="animate-box" data-animate-effect="fadeInRight">
		</div>

		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-5  col-sm-offset-0 col-md-6">

					<div id="scene2" class="scene">
						<div class="layer par1" data-depth="0.1"><img src="img/par/par1.png" class="img-responsive"></div>
						<div class="layer par2" data-depth="0.2" ><img src="img/par/par2.png" class="img-responsive"></div>
						<div class="layer par3" data-depth="0.50" ><img src="img/par/par3.png" class="rotating img-responsive"></div>
						<div class="layer par4" data-depth="0.70" ><img src="img/par/par4.png" class="rotating img-responsive"></div>
						<div class="layer par5" data-depth="0.90" ><img src="img/par/par5.png" class="rotating img-responsive"></div>
						<div class="layer par6" data-depth="2.10" ><img src="img/par/par6.png" class="rotating img-responsive" ></div>
						<div class="layer par7" data-depth="1.30" ><img src="img/par/par7.png" class="rotating img-responsive"></div>
						<div class="layer par8" data-depth="3.50"><img src="img/par/par8.png" class="rotating img-responsive"  ></div>


					</div>
				</div>
				<div class="clearfix visible-xs"></div>
				<div class="col-xs-12 col-sm-7 col-md-6 bcTxt">
					<h2 class="animate-box underline" data-animate-effect="fadeInUp"><span>Olá! Eu sou a</span><br>Fabiane Almeida</h2>
					<p class="animate-box" data-animate-effect="fadeInUp">Eu vou lhe apresentar algumas formas de como posso te ajudar a melhorar a imagem da sua empresa e a sua presença na internet. <br>Mas antes, vamos nos conhecer melhor?<br><br>
						Trabalho como Web Designer e Designer gráfico desde 1998. Já trabalhei em diversas agências e para clientes gigantes como a Kraft Foods e a JMalucelli.<br><br>
						Sou sócia da agência <a href="http://www.opus2.com.br" target="_blank">Opus2 Web</a> Studio, que está no mercado a mais de 10 anos e também presto serviços como freelancer para empresas de pequeno e médio porte.<br><br>
						<button class="btn btn-default"><a href="#comopossoajudar">Agora veja como posso ajudar a sua empresa a crescer!</a></button></p>
					</div>
				</div>
			</div>
		</section> -->

		<!--DIVISÓRIA 1-->
		<div class="homeDiv" id="comopossoajudar">

		<div class="diagHome1">
			<img src="img/diagonal_rosa2.png" alt="" class="animate-box" data-animate-effect="fadeInRight">
		</div>

			<h2 class="titCenter animate-box underline lineWhite txtWhite" data-animate-effect="fadeInUp">
				<span>Como posso ajudar a sua</span><br> empresa a crescer?
			</h2>
		</div>


		<!--COMO POSSO TE AJUDAR-->
		<section id="homeFeatured" class="bgAmareloRosa">
<!-- 	<div class="diagHome2">
<img src="img/diagonal_rosa.png" alt="" class="animate-box" data-animate-effect="fadeInLeft">
</div> -->

<div class="container">
	<ul class="navInternas">
		<li>
			<a href="criacao_de_sites.php" class="col-xs-10 col-xs-offset-1 col-sm-offset-0 col-sm-4 item hvr-float">
				<i class="icon flaticon-devices"></i>
				<h2><span>Criação e desenvolvimento de </span><br>websites</h2>
				<p>Desenvolvemos sites 100% personalizados e sites rápidos, além de prestar suporte e serviços de manutenção.</p>
				<button class="btn btn-saibamais">Criação de Sites</button>
			</a>
		</li>
		<li>
			<a href="identidade_e_papelaria.php" class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-0 item middle hvr-float">
				<i class="icon flaticon-attractive"></i>
				<h2><span>Criação ou atualização da</span><br>Identidade visual da sua empresa</h2>
				<p>Criamos sua logo, cartão de visitas, papelaria e materiais publicitários, para transmitirem uma imagem sólida, profissional e única!</p>
				<button class="btn btn-saibamais">Identidade e Papelaria</button>
			</a>
		</li>
		<li>
			<a href="materiais_para_divulgacao.php" class="col-xs-10 col-xs-offset-1 col-sm-offset-0 col-sm-4 item hvr-float">
				<i class="icon flaticon-idea-2"></i>
				<h2><span>Criação de</span><br>materiais Publicitários</h2>
				<p>Criamos diversos materiais para a divulgação da sua empresa, de forma impressa ou digital, como panfletos, folders, flyers, anúncios, brindes, etc.</p>
				<button class="btn btn-saibamais">Materiais para divulgação</button>
			</a>
		</li>
		<li>	
			<a href="presenca_online.php" class="col-xs-10 col-xs-offset-1 col-sm-offset-0 col-sm-4 item middle hvr-float">
				<i class="icon flaticon-target"></i>
				<h2><span>Melhorando a</span><br>sua presença online</h2>
				<p>Personalizamos suas redes sociais e criamos materiais para divulgação online, além de desenvolver campanhas de e-mail marketing.</p>
				<button class="btn btn-saibamais">Presença online</button>
			</a>
		</li>			
		<li>
			<a href="consultoria_e_manutencao.php" class="col-xs-10 col-xs-offset-1 col-sm-offset-0 col-sm-4 item middle  hvr-float">
				<i class="icon flaticon-sitemap"></i>
				<h2><span>Identificando as</span><br>Falhas do seu site</h2>
				<p>Prestamos consultoria para identificar possiveis falhas no seu site de natureza técnica, estrutural ou com problemas de usabilidade.</p>
				<button class="btn btn-saibamais">Consultoria e Manutenção</button>
			</a>
		</li>
		<li>
			<a href="dominios_e_hospedagem.php" class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-0 item middle  hvr-float">
				<i class="icon flaticon-cloud-computing-6"></i>
				<h2><span>Hospedando</span><br>o seu site</h2>
				<p>Prestamos serviços de hospedagem e contratação de domínios para o site da sua empresa em parceria com a agência Opus2 web studio.</p>
				<button class="btn btn-saibamais">Domínios e Hospedagem</button>
			</a>
		</li>
	</ul>
</div>

</section>


<div class="clearfix"></div>


<!--DIVISÓRIA 2-->
<!-- <div class="homeDiv">
<h2 class="titCenter animate-box" data-animate-effect="fadeInUp"><span>Confira alguns</span><br> Pacotes de Serviços</h2>
</div>

<section id="homeProducts" class="degCeuClaro">
<div class="container">
<div class="col-md-12 col-lg-10 col-lg-offset-1 pacotesProdutos">
<div class="row">

<div class="col-lg-3 col-md-3 col-sm-6 col-xs-10 col-xs-offset-1 col-sm-offset-0 item animate-box" data-animate-effect="fadeInUp">
<div class="box">
<div class="cabeca">
<p>Pacote Mensal<span><br>Marketing Social</span></p>
</div>
<div class="corpo">
<div class="preco degAmareloFlamingo">
<div class="apartir">A partir de</div>
<div class="boxPreco">
<div class="rs">R$</div>
<div class="valor">350</div>
<div class="decimal">00</div>
<div class="formadepagamento">Mensal</div>
<div class="clearfix"></div>
</div>
</div>
<div class="desc">
<p><span>4 posts</span> para redes socias</p>
<p><span>1 e-mail</span> marketing</p>
<p><span>1 Banner</span> para o seu site</p>
</div>
</div>
<div class="base bgFlamingo">
<p><b>Grátis</b><br>capa para facebook e instagram</p>
<a href="#" class="btFlutuante">Quero Contratar</a>
</div>
</div>
</div>



<div class="col-lg-3 col-md-3 col-sm-6 col-xs-10 col-xs-offset-1 col-sm-offset-0 item animate-box" data-animate-effect="fadeInUp">
<div class="box">
<div class="cabeca">
<p>Plano Executivo<span><br>Site Xpress</span></p>
</div>
<div class="corpo">
<div class="preco degRoseLilas">
<div class="apartir">A partir de</div>
<div class="boxPreco">
<div class="rs">R$</div>
<div class="valor">2500</div>
<div class="decimal">00</div>
<div class="formadepagamento">Mensal</div>
<div class="clearfix"></div>
</div>
</div>
<div class="desc">
<p><span>Página Principal</span> (com slider))</p>
<p><span>Até 10 páginas</span> internas</p>
<p>1 página de <span>contato</span></p>
</div>
</div>
<div class="base bgRose">
<p><b>Grátis</b><br>capa para facebook e instagram</p>
<a href="#" class="btFlutuante">Quero Contratar</a>
</div>
</div>
</div>
<div class="clearfix visible-sm"></div>


<div class="col-lg-3 col-md-3 col-sm-6 col-xs-10 col-xs-offset-1 col-sm-offset-0 item animate-box" data-animate-effect="fadeInUp">
<div class="box">
<div class="cabeca">
<p>Pacote<span><br>Papelaria</span></p>
</div>
<div class="corpo">
<div class="preco degCeu">
<div class="apartir">A partir de</div>
<div class="boxPreco">
<div class="rs">R$</div>
<div class="valor">990</div>
<div class="decimal">00</div>
<div class="formadepagamento">Mensal</div>
<div class="clearfix"></div>
</div>
</div>
<div class="desc">
<p><span>1 cartão</span> de visitas</p>
<p><span>1 assinatura</span> de e-mail</p>
<p><span>1 Papel</span> timbrado</p>
</div>
</div>
<div class="base bgCeu">
<p><b>Grátis</b><br>capa para facebook e instagram</p>
<a href="#" class="btFlutuante">Quero Contratar</a>
</div>
</div>
</div>


<div class="col-lg-3 col-md-3 col-sm-6 col-xs-10 col-xs-offset-1 col-sm-offset-0 item animate-box" data-animate-effect="fadeInUp">
<div class="box">
<div class="cabeca">
<p>Pacote Mensal<span><br>Marketing Social</span></p>
</div>
<div class="corpo">
<div class="preco degLilasRose">
<div class="apartir">A partir de</div>
<div class="boxPreco">
<div class="rs">R$</div>
<div class="valor">350</div>
<div class="decimal">00</div>
<div class="formadepagamento">Mensal</div>
<div class="clearfix"></div>
</div>
</div>
<div class="desc">
<p><span>4 posts</span> para redes socias</p>
<p><span>1 e-mail</span> marketing</p>
<p><span>1 Banner</span> para o seu site</p>
</div>
</div>
<div class="base bgLilas">
<p><b>Grátis</b><br>capa para facebook e instagram</p>
<a href="#" class="btFlutuante">Quero Contratar</a>
</div>
</div>
</div>
<div class="clearfix"></div>
<div class="mTop40"></div>
<a href="pacotes_de_servicos.php" class="btn btn-primary animate-box" data-animate-effect="fadeInUp">Confira todos os pacotes</a>
</div>
</div>
</div>
</section>

-->


<section id="homeClients" class="relative">
	<div class="diagHome3">
		<img src="img/diagonal_azul.png" alt="" class="animate-box" data-animate-effect="fadeInRight">
	</div>

	<div class="container">
		<h2 class="mLeft15 animate-box underline" style="margin-bottom: 0 !important" data-animate-effect="fadeInUp">Alguns Clientes</h2>
	<div id="logosParadas" class="animate-box" data-animate-effect="fadeInUp">
		<ul>
			<li class="col-xs-6 col-sm-2 animate-box" data-animate-effect="fadeInUp"><img src="img/logos/1.jpg" class="img-responsive"></li>
			<li class="col-xs-6 col-sm-2 animate-box" data-animate-effect="fadeInUp"><img src="img/logos/2.jpg" class="img-responsive"></li>
			<li class="col-xs-6 col-sm-2 animate-box" data-animate-effect="fadeInUp"><img src="img/logos/3.jpg" class="img-responsive"></li>
			<li class="col-xs-6 col-sm-2 animate-box" data-animate-effect="fadeInUp"><img src="img/logos/4.jpg" class="img-responsive"></li>
			<li class="col-xs-6 col-sm-2 animate-box" data-animate-effect="fadeInUp"><img src="img/logos/6.jpg" class="img-responsive"></li>
			<li class="col-xs-6 col-sm-2 animate-box" data-animate-effect="fadeInUp"><img src="img/logos/7.jpg" class="img-responsive"></li>
		</ul>
	</div>
	</div>

<div class="clearfix"></div>
	<!-- slider original-->
<!-- 	<ul class="bxslider">
		<li style="width: 189px !important;"><img src="img/logos/1.jpg"></li>
		<li style="width: 189px !important;"><img src="img/logos/2.jpg"></li>
		<li style="width: 189px !important;"><img src="img/logos/3.jpg"></li>
		<li style="width: 189px !important;"><img src="img/logos/4.jpg"></li>
		<li style="width: 189px !important;"><img src="img/logos/5.jpg"></li>
		<li style="width: 189px !important;"><img src="img/logos/6.jpg"></li>
		<li style="width: 189px !important;"><img src="img/logos/7.jpg"></li>
		<li style="width: 189px !important;"><img src="img/logos/1.jpg"></li>
		<li style="width: 189px !important;"><img src="img/logos/2.jpg"></li>
		<li style="width: 189px !important;"><img src="img/logos/3.jpg"></li>
		<li style="width: 189px !important;"><img src="img/logos/4.jpg"></li>
		<li style="width: 189px !important;"><img src="img/logos/5.jpg"></li>
		<li style="width: 189px !important;"><img src="img/logos/6.jpg"></li>
		<li style="width: 189px !important;"><img src="img/logos/7.jpg"></li>
	</ul> -->
	<!-- /slider -->

</section>

<section id="homeForm" class="degAmareloFlamingo">
	<div class="container">
		<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-5 col-md-offset-1 animate-box" data-animate-effect="fadeInUp">
			<h2 class="mTop0 underline"><span>Posso te</span><br>ajudar?</h2>


			<h3 class="txtblue" style="font-size: 2rem !important; text-transform: none !important; font-weight: 700; padding-right: 20px; line-height: 2.6rem">Quer fazer um orçamento? Precisa de ajuda para ver qual a melhor opção para a sua empresa? Precisa de um projeto web ou de um material gráfico? Ligue pra gente!</h3>

			<!-- <h3 class="txtblue animate-box" data-animate-effect="fadeInUp">Quer solicitar um orçamento personalizado ou entrar em contato? <br>Então é só mandar um oi!</h3> -->
			<a href="mailto:contato@fabianealmeida.com" class="contatoMail">contato@fabianealmeida.com</a>
			<a href="tel:41991750936" class="contatoFone">(41)99175-0936</a>
		</div>
		<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-5 col-md-offset-0 animate-box" data-animate-effect="fadeInUp">
			<form action="formulario.php" method="POST" role="form" id="formContato" name="formcontato">
				<div class="form-group">
					<input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required>
				</div>
				<div class="form-group">
					<input type="email" class="form-control" id="email" name="email" placeholder="E-mail" required>
				</div>
				<div class="form-group">
					<input type="text" class="form-control" id="assunto" name="assunto" placeholder="Assunto" required>
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
<!-- 					<p id="formMsg">Digite o seu nome</p>
-->
</form>		
</div>
</div>
</section>

<script>



</script>
<?php include("includes/_foot.php");?>

<script>
	
$(window).load(function(){
  $('#logos').suga({
    'transitionSpeed': 2000,
    'snap': false
  });
});

</script>

<script>
$(document).on('click', 'a[href^="#"]', function (event) {
    event.preventDefault();

    $('html, body').animate(
    {
        scrollTop: $($.attr(this, 'href')).offset().top
    }, 500);

});</script>