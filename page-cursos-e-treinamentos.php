<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-sm-4">
			<div class="cursos-fundo">
				<img src="<?php bloginfo('stylesheet_directory');?>/img/cursos1.jpg" alt="">
				<p>Lorem ipsum dolor sit amet</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem numquam dicta magnam</p>
				<a href="#">Saiba mais</a>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="cursos-fundo">
				<img src="<?php bloginfo('stylesheet_directory');?>/img/cursos2.jpg" alt="">
				<p>Lorem ipsum dolor sit amet</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem numquam dicta magnam</p>
				<a href="#">Saiba mais</a>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="cursos-fundo">
				<img src="<?php bloginfo('stylesheet_directory');?>/img/cursos3.jpg" alt="">
				<p>Lorem ipsum dolor sit amet</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem numquam dicta magnam</p>
				<a href="#">Saiba mais</a>
			</div>
		</div>
	</div>
</div><!-- container-->	
<div class="newsletter">
	<div class="container">
		<div class="newsletter-text col-sm-offset-1 col-sm-3">
			<p>Fique por dentros das novidades</p>
		</div>	
		<form class="form-inline col-sm-8">
			<div class="form-group">
				<input type="email" class="form-control form-control-newsletter" id="form" placeholder="email@exemplo.com">
			</div>
			<button type="submit" class="btn btn-default btn-default-newsletter">Enviar</button>
		</form>
	</div>
</div>
<?php get_footer(); ?>