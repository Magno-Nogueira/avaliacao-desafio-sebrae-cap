<html>
<head>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
	<body>
		<div class="container">
			<section class="row">
				<article>
				<ul>
					<li class="list-group-item"><h1><?= $c->title ?></h1></li>
					<li class="list-group-item"><?= $c->description ?></li>
					<li class="list-group-item"><?= $c->start ?></li>
					<li class="list-group-item"><?= $c->finish ?></li>
					<li class="list-group-item"><?= $c->street ?>, <?= $c->number ?>, <?= $c->city ?></li>
					<li class="list-group-item"><?= $c->category ?></li>
					<li class="list-group-item"><img class="rounded" src="<?= $c->avatar?>"><?= $c->name ?></li>
				</ul>	
				</article>
			</section>
		</div>
	</body>
</html>	