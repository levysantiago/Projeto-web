<?php 
  require_once('mysql.lib');   	
?>

<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="utf-8">
	<title>Publicações</title>

	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<!-- MENU -->
	<header>
		<div class="parallax-container">
	      	<nav class="transparent z-depth-0">
			    <div class="nav-wrapper">
			      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><img src="imgs/menu.png"></a>
			      <ul class="right hide-on-med-and-down">
			        <li><a href="./index.html">Principal</a></li>
			        <li><a href="./publicacoes.html">Publicações</a></li>
			        <li><a href="./projetos.html">Projetos</a></li>
			        <li><a href="./contato.html">Contato</a></li>
			      </ul>
			    </div>
			</nav>

			<ul class="sidenav" id="mobile-demo">
			    <li><a class="waves-effect waves-teal" href="./index.html">Principal</a></li>
			    <li><a class="waves-effect waves-teal" href="./publicacoes.html">Publicações</a></li>
			    <li><a class="waves-effect waves-teal" href="./projetos.html">Projetos</a></li>
			    <li><a class="waves-effect waves-teal" href="./contato.html">Contato</a></li>
			</ul>

	      	<h1>Publicações</h1>
	    </div>
	</header>

	<main class="container">
		<section>
			<article>
				<p>Pellentesque interdum lectus sed quam ornare hendrerit. Morbi id iaculis sem. In in est lacus. Vestibulum malesuada vehicula velit, quis tempus ex sagittis vitae. Sed bibendum ultricies ipsum, vitae porta mi maximus in. Curabitur facilisis fermentum lorem, at posuere erat feugiat sed. Donec tortor nisl, pellentesque id purus et, feugiat auctor orci.</p>

				<h2>Artigos:</h2>

				<div class="row">
					<a href="http://br-ie.org/pub/index.php/wcbie/article/view/7485">
						<div class="col s12">
					      <div class="card hoverable">

					        <div class="card-content white-text">
					        	<span class="card-title">Avaliação de linguagens visuais de programação no ensino médio a partir da utilização do conceito de Robótica Pedagógica.</span>
					        	<p><b>Local:</b> VI Congresso Brasileiro de Informática na Educação, Recife</p>
								<p><b>Ano:</b> 2017</p>
								<p><b>Em:</b> Anais dos Workshops do Congresso Brasileiro de Informática na Educação (CBIE), p. 962-971</p>
					        </div>
					        <div class="card-action">
					          <a href="http://br-ie.org/pub/index.php/wcbie/article/view/7485">Link Anais</a>
					        </div>
					      </div>
					    </div>
					</a>
				</div>

			</article>
		</section>
	</main>

	<!-- FOOTER -->
	<footer class="page-footer white">
		<div class="divider"></div>
          <div class="container">
            <div class="row">
              <div class="col l4 m6 s12">
                <h4 class="grey-text">Sobre</h4>
                <ul>
                  <p class="text-lighten-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin et elementum arcu. Quisque eu sollicitudin lacus.</p>
                </ul>
              </div>
              <div class="col l6 offset-l2 m6 s12">
                <h4 class="grey-text">Contato</h4>
                <div class="row">
                	<div class="col s1 m2 valign-wrapper">
                		<img class="img-footer" src="imgs/email.jpg" alt="Endereço de email" />
						<p class="text-lighten-4 left-align">levyssantiago@gmail.com</p></p>
					</div>
				</div>
				<div class="row">
					<div class="col s1 m2 valign-wrapper">
						<img class="img-footer" src="imgs/github-circle.jpg" alt="Usuário github" />
						<p class="text-lighten-4">levysantiago</p>
					</div>
				</div>
              </div>
              
            </div>
          </div>

			<div class="footer-copyright blue-grey darken-3">
		            <nav class="transparent z-depth-0">
					    <div class="nav-wrapper">
					      <ul class="right">
					        <li><a href="./index.html">Principal</a></li>
					        <li><a href="./publicacoes.html">Publicações</a></li>
					        <li><a href="./projetos.html">Projetos</a></li>
					        <li><a href="./contato.html">Contato</a></li>
					      </ul>
					    </div>
					</nav>
	            
			</div>
        </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
 	<script src="script/scripts.js"></script>
</body>

</html>

<?php 
  require_once('mysql_close.lib');   	
?>