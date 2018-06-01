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

    <form class="form-inline my-2 my-lg-0" action="detalha" method="GET">
    <div class="input-group-btn">
      <button class="btn btn-default" type="submit">
        <i class="glyphicon glyphicon-search"></i>
      </button>
    </div>
      <input name="title" class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Search">
    </form>
  </div>
</nav>
	
		<div class="container">
			<section class="row">
				<?php foreach ($cursos as $c): ?>
				<article class="col-md-4">
				<a href="/detalha?id=<?= $c->id?>">
					<ul>
						<li class="list-group-item"><small><?= $c->category ?></small></li>
						<li class="list-group-item"><?= $c->title ?></li>
						<li class="list-group-item"><?= $c->city ?></li>
						<li class="list-group-item"><?= $c->start ?></li>	
					</ul>
				</a>
				</article>
				<?php endforeach; ?>
			</section>
		</div>
	</body>
</html>	