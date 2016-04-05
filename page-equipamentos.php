<?php get_header(); ?>
<div class="row">
	<div class="col-sm-7 banner-equipamentos banner-equipamentos-img">
		
	</div>
	<div class="col-sm-5 banner-equipamentos banner-equipamentos-box">
		<div class="banner-equipamentos-text">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt necessitatibus tempora.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error ducimus accusantium qui repellendus officia quod perferendis vel tenetur, veritatis eaque maiores, delectus reiciendis laboriosam veniam in ipsum nam quaerat quas!</p>
			<a href="#">Saiba mais</a>
		</div>	
	</div>
</div>

<nav class="container"><?php wp_nav_menu(array('theme_location' => 'second')); ?></nav> 
<div id="ajax-content"></div>

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