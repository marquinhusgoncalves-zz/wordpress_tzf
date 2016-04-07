<?php get_header(); ?>
<div class="banner-contato">
	
</div>
<div class="container">
	<h1>Entre em contato<br>com a gente!</h1>
	<div class="row box-contato">
		<div class="col-sm-6">
			<p class="footer-end">Av. Dr. José Bonifácio Coutinho Nogueira, 150 Térreo
			<br>Condomínio Galleria Plaza - CEP 13091-611 - Campinas - São Paulo</p>
			<p class="footer-tel">T. +55 (19) 3707 1567</p>
			<a href="mailto:tzf@tzfconsultoria.com.br" class="footer-mail">tzf@tzfconsultoria.com.br</a>
			<div class="redes-sociais">
				<a href="#">
					<span class="fa-stack fa-lg">
						<i class="fa fa-circle fa-stack-2x facebook"></i>
						<i class="fa fa-facebook fa-stack-1x"></i>
					</span>
				</a>
				<a href="#">
					<span class="fa-stack fa-lg">
						<i class="fa fa-circle fa-stack-2x twitter"></i>
						<i class="fa fa-twitter fa-stack-1x"></i>
					</span>
				</a>
				<a href="#">	
					<span class="fa-stack fa-lg">
						<i class="fa fa-circle fa-stack-2x linkedin"></i>
						<i class="fa fa-linkedin fa-stack-1x"></i>
					</span>
				</a>	
			</div>	
		</div>
		<div class="col-sm-6">
			<form>
				<div class="form-group">
					<input type="text" class="form-control" id="nome" placeholder="Nome">
				</div>
				<div class="form-group">
					 <input type="email" class="form-control" id="email" placeholder="E-mail">
				</div>
				<div class="form-group">
					<input type="tel" class="form-control" id="telefone" placeholder="Telefone">
				</div>
				<div class="form-group">
					<textarea name="textarea" class="form-control" id="textarea" rows="3"></textarea>
				</div>
				<button type="submit" class="btn btn-default btn-default-newsletter">Enviar</button>
			</form>
		</div>
	</div>
</div>
<div id="map-canvas"></div>
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
	</div>

<?php get_footer(); ?>