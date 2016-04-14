<?php get_header(); ?>
<div class="container">
	<div class="banner-cursos">
		<div class="img-and-text">
			<img src="<?php bloginfo('stylesheet_directory');?>/img/icon-curso-abnt.svg" alt="Ícone Cursos TZF Consultoria">
			<p>Interpretação da norma<br>ABNT NBR ISO/IEC 17025</p>
		</div>
	</div>
	<div class="cursos-box">
		<h2>Conteúdo programático</h2>
		<div class="row">
			<div class="col-sm-6">
				<ul class="cursos-conteudo">
					<li>Como implantar no seu laboratório os requisitos da norma ISO/IEC 17025?;</li>
					<li>Referência sobre os documentos orientativos e normativos da CGCRE/INMETRO;</li>
					<li>Abordagem dos requisitos técnicos para os ensaios realizados no laboratório;</li>
					<li>Interpretação prática de todos os requisitos:</li>
					<ul>
						<li>
							<p>Requisitos da Direção</p> 
							<p>4.1 Organização; 4.2 Sistema de Gestão; 4.3 Controle de Documentos; 4.4 Análise Crítica de pedidos, Propostas e Contratos; 4.5 Subcontratação de Ensaios de Calibração; 4.6 Aquisição de Serviços e Suprimentos; 4.7 Atendimento ao Cliente; 4.8 Reclamações; 4.9 Controle de Trabalhos de Ensaios e/ou Calibração Não-Conforme; 4.10 Melhoria; 4.11 Ação Corretiva; 4.12 Ação Preventiva; 4.13 Controle de Registros; 4.14 Auditorias Internas e 4.15 Análise Crítica pela Direção.</p>
						</li>
						<li>
							<p>Requisitos Técnicos</p> 
							<p>5.1 Generalidades; 5.2 Pessoal; 5.3 Acomodações e Condições Ambientais; 5.4 Métodos de Ensaios e Calibração e Validação de Métodos; 5.5 Equipamentos; 5.6 Rastreabilidade de Medição; 5.7 Amostragem; 5.8 Manuseio de Itens de Ensaio e Calibração; 5.9 Garantia da Qualidade de Resultados de Ensaio e Calibração e 5.10 Apresentação de Resultados.</p>
						</li>
					</ul>
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