<html>
	<head>
		<link rel="stylesheet" type="text/css" href="/css/app.css">
	</head>
	<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
	  <a class="navbar-brand" href="#">Cursos</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">

		<form class="form-inline my-2 my-lg-0" action="{{'busca'}}" method="GET">
		<div class="input-group-btn">
		  <button class="btn btn-default" type="submit">
			<i class="glyphicon glyphicon-search"></i>
		  </button>
		</div>
		  <input name="tittle" class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Search">
		</form>
	  </div>
	</nav>

		<div class="container">

			@yield('conteudo')
		</div>
	</body>
	<footer class="footer">
		<p>Magno Nogueira de Assis</p>
	</footer>
</html>		
