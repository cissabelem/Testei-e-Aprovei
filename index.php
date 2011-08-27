<!doctype html>
<html <?php language_attributes() ?>>
<head>
	<title><?php bloginfo('title') ?></title>
	<meta charset="<?php bloginfo('charset') ?>" />
	
	<?php css('http://fonts.googleapis.com/css?family=Tangerine') ?>
	<?php css('estilo.css') ?>
	
	<?php js('libs/modernizr.custom.js') ?>
</head>
<body>

	<!-- breadcrumbs -->
	<nav class="breadcrumbs">
		<div class="wraper">
			<p class="hide">Você está em:</p>
			<ul>
				<li><a href="#">Página Inicial</a></li>
				<li><a href="#">Categoria</a></li>
				<li><a href="#">Produto</a></li>
			</ul>
		</div>
	</nav>
	<!-- /breadcrumbs -->
	
	
	<!-- topo -->
	<header class="topo wraper">
		<h1><a href="#"><?php bloginfo('title') ?></a></h1>
		
		<nav class="menu">
			<ul>
				<li><a href="#">Alimentação</a></li>
				<li><a href="#">Beleza</a></li>
				<li><a href="#">Lazer</a></li>
			</ul>		
		</nav>
	</header>
	<!-- /topo -->
	
	
	<!-- corpo -->
	<div class="corpo wraper">
		
		<!-- conteudo -->
		<section class="conteudo">
		
			<article class="post">
				<header>
					<h1><a href="#">Olá Mundo</a></h1>	
					<time class="publicado"><span class="dia">10</span> jul</time>			
				</header>
				
				<p>Bem-vindo ao WordPress. Esse é o seu primeiro post. Edite-o ou exclua-o, e comece a publicar!</p>
				
				<footer>
					<address class="autor"><a href="#">Cecília Belém</a></address>
					<a href="#" class="comentarios">1 comentário</a>
					<p class="categorias">
						<a href="#">Alimentação</a>, <a href="#">Alimentação</a>, <a href="#">Alimentação</a>
					</p>
				</footer>
			</article>
		
			<article class="post">
				<header>
					<h1><a href="#">Olá Mundo</a></h1>	
					<time class="publicado"><span class="dia">10</span> jul</time>			
				</header>
				
				<p>Bem-vindo ao WordPress. Esse é o seu primeiro post. Edite-o ou exclua-o, e comece a publicar!</p>
				
				<footer>
					<address class="autor"><a href="#">Cecília Belém</a></address>
					<a href="#" class="comentarios">1 comentário</a>
					<p class="categorias">
						<a href="#">Alimentação</a>, <a href="#">Alimentação</a>, <a href="#">Alimentação</a>
					</p>
				</footer>
			</article>
		
		</section>
		<!-- /conteudo -->
		
		<!-- lateral -->
		<aside class="lateral">
		
			<div class="widget listas">
				<h3>Tópicos Recentes</h3>
				<ul>
					<li><a href="#">Alimentação</a></li>
					<li><a href="#">Beleza</a></li>
					<li><a href="#">Lazer</a></li>
				</ul>
			</div>
		
			<div class="widget listas">
				<h3>Arquivos</h3>
				<ul>
					<li><a href="#">Alimentação</a></li>
					<li><a href="#">Beleza</a></li>
					<li><a href="#">Lazer</a></li>
				</ul>
			</div>
		
			<div class="widget categorias">
				<h3>Categorias</h3>
				<ul>
					<li><a href="#">Alimentação</a></li>
					<li>
						<a href="#">Beleza</a>
						<ul>
							<li><a href="#">Alimentação</a></li>
							<li><a href="#">Beleza</a></li>
							<li><a href="#">Lazer</a></li>
						</ul>
					</li>
					<li><a href="#">Lazer</a></li>
				</ul>
			</div>
			
		</aside>
		<!-- /lateral -->
	
	</div>
	<!-- corpo -->
	
	<!-- rodape -->
	<footer class="rodape">
		<div class="wraper">
			<p>&copy;<?php echo date('Y') ?> Testei e Aprovei</p>
		</div>
	</footer>
	<!-- /rodape -->

<?php js(array('https://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js', 'scripts.js')); ?>
</body>
</html>
