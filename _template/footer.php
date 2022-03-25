
	</main> 
	</div>
	<footer>		
		<figure id="corredor-rodape"  >
			<img src="<?php echo URL()?>_imgs/corredor.gif" width="50px" height="50px">
			<img src="<?php echo URL()?>_imgs/corredor.gif" width="50px" height="50px">
			<img src="<?php echo URL()?>_imgs/corredor.gif" width="50px" height="50px">
		</figure>
		<!-- <div > -->
		<section class="rodape">
			<article class="">
				<h3>Sobre</h3>
				<p>Viemos para contribuir com a organização de eventos esportivos.</p>
			</article>
			<article class="">
				<ul>
					<h3>Contato</h3>
					<li>eventosdecorrida@gmail.com</li>
					<li>(84)9 9999-9999</li>
				</ul>
			</article>
			
		</section>
		<p style="background:rgba(220, 100, 0, 0.7); text-align:center;">&copy; Alunos do IFCang</p>
			
		<!-- </div> -->
	</footer>
		
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<script type="text/javascript" src="<?php echo URL();?>_js/script.js"></script>
	<!-- Tela de preload -->

	<script type="text/javascript" src="./_js/script.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	

	<div id="preload">
		<img src="<?php echo URL() ?>_imgs/corredor.gif" />
	</div>

	<script type="text/javascript">
		$(window).on('load', function(){
			$('#preload').fadeOut(2000).hide();
		})
		$(window).on('onload', function(){
			$('body').fadeIn(1000).hide();
		})
		
	</script>
</body>
</html>