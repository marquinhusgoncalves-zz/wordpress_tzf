<?php get_header(); ?>
<div class="container">
	<div class="banner-cursos">
		<div class="img-and-text">
			<img src="<?php bloginfo('stylesheet_directory');?>/img/icon-curso-espectrometria.svg" alt="Ícone Cursos TZF Consultoria">
			<p>Espectrometria de massas:<br>Uma abordagem direta aos desafios de sua rotina</p>
		</div>
	</div>
	<div class="cursos-box">
		<h2>Conteúdo programático</h2>
		<div class="row">
			<div class="col-sm-6">
				<ul class="cursos-conteudo">
					<li>Conceitos básicos da espectrometria de massas;</li>
					<li>Evolução dos tipos de analisadores (resolução unitária e alta resolução) quantificação vs. confirmação;</li>
					<li>Possibilidades de interfaces de ionização (ei, ci, esi, apci, dsa, dart e appi) de acordo com as características de sua amostra;</li>
					<li>Como realizar o acoplamento de espectrômetros de massas com sistemas de cromatografia (líquida e à gás);</li>
					<li>Abordagem e estratégias para preparo de amostras (extração, derivatização, padronização interna/externa, com ênfase em validação);</li>
					<li>Ênfase e conceitos básicos em validação de métodos para analizadores MS;</li>
					<li>Dicas e precauções operacionais na espectrometria de massas e seus respectivos acoplamentos.</li>
				</ul>
			</div>
			<div class="col-sm-6 cursos-informacao">
				<table>
					<tr>
						<td>
							<i class="fa fa-calendar"></i>
						</td>
						<td>
							<span>Data </span>
						</td>
						<td>
							<span>Teste</span>
						</td>
					</tr>
					<tr>
						<td>
							<i class="fa fa-user"></i>
						</td>
						<td>
							<span>Instrutor </span>
						</td>
						<td>
							<span>Teste</span>
						</td>
					</tr>
					<tr>
						<td>
							<i class="fa fa-book"></i>
						</td>
						<td>
							<span>Material didático </span>
						</td>
						<td>
							<span>Teste</span>
						</td>
					</tr>
					<tr>
						<td>
							<i class="fa fa-coffee"></i>
						</td>
						<td>
							<span>Coffee Break </span>
						</td>
						<td>
							<span>Teste</span>
						</td>
					</tr>
					<tr>
						<td>
							<i class="fa fa-clock-o"></i>
						</td>
						<td>
							<span>Carga Horária </span>
						</td>
						<td>
							<span>16hs
						</td>
					</tr>
					<tr>
						<td>
							<i class="fa fa-home"></i>
						</td>
						<td>
							<span>In company </span>
						</td>
						<td>
							<span>Teste</span>
						</td>
					</tr>
					<tr>
						<td>
							<i class="fa fa-commenting-o"></i>
						</td>
						<td>
							<span>Treinamento </span>
						</td>
						<td>
							<span>Teste</span>
						</td>
					</tr>
				</table>
			</div> <!-- cursos-informacao -->
		</div> <!-- row -->
	</div>	<!-- cursos-box -->
	<div class="row cursos-formulario">
		<div class="col-sm-3">
			<p>Fique por dentro desse curso</p>
		</div>
		<div class="col-sm-9">
			<form>
				<div class="form-group">
					<input type="text" class="form-control" id="nome" placeholder="Nome">
				</div>
				<div class="form-group">
					<input type="email" class="form-control" id="email" placeholder="Email">
				</div>
				<div class="form-group">
					<input type="tel" class="form-control" id="telefone" placeholder="Telefone">
				</div>
				<button type="submit" class="btn btn-default btn-default-newsletter">Enviar</button>
			</form>
		</div>
	</div> <!-- row -->
</div> <!-- container -->
<?php get_footer(); ?>