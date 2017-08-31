<footer>
<div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-6 col-md-offset-1 col-md-5">
      <p class="copyright">FABIANE ALMEIDA. TODOS OS DIREITOS RESERVADOS.</p>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-5">
      <div class="footSocialIcons">
        <a href="https://www.facebook.com/fabianealmeidadesign/" target="_blank"><i class="fa fa-facebook-square"></i></a>
        <a href="https://www.linkedin.com/in/fabianealmeida/" target="_blank"><i class="fa fa-linkedin-square"></i></a>
        <a href="https://www.behance.net/fabianealmeida/" target="_blank"><i class="fa fa-behance-square"></i></a>
        <a href="#"><i class="fa fa-git-square" aria-hidden="true"></i></a>
      </div>

      <div class="footSocialTxt">
        <p>Conecte-se com as <br><span>redes sociais</span></p>
      </div>
    </div>
  </div>
</div>
</footer>


<!--ARQUIVOS SCRIPTS==================================-->
<!--Latest jQuery minified JS-->
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<!-- Latest bootstrap minified JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!--Slider-->
		<script src="js/jquery.bxSlider.js"></script>
		<script type="text/javascript">
  		$(document).ready(function(){
     		$('#slider').bxSlider({
    		ticker: true,
    		tickerSpeed: 5000,
			tickerHover: true
  		});
  		});
		</script>

<!--Scroll Reveal (Animação ao mostrar)-->
<!-- <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
 -->
<!--SR Reveal - CHAMADA E PERSONALIZAÇÃO-->
<!-- <script src="js/sr.reveal.js"></script>
 -->
<!--SLIDER-->
<script src="js/slider_full.js"></script>


<!--CARREGADOR-->
<script>
var myVar;

function funcLoader() {
    myVar = setTimeout(showPage, 300);
}

function showPage() {
  document.getElementById("bgloader").style.display = "none";
  document.getElementById("bodyLoaded").style.display = "block";
}
</script>

<!--/SCRIPTS===========================================-->

</body>
</html>
