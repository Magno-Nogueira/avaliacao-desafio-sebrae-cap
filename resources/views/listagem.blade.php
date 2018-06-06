@extends('principal')

@section('conteudo')
			<section class="row">
				@foreach ($cursos as $c)
				<article class="col-md-4">
				<a href="/detalha?id={{$c->id}}">
					<ul>
						<li class="list-group-item"><small>{{ $c->category }}</small></li>
						<li class="list-group-item">{{ $c->title }}</li>
						<li class="list-group-item">{{ $c->city }}</li>
						<li class="list-group-item">{{ $c->start }}</li>	
					</ul>
				</a>
				</article>
				@endforeach
			</section>
@stop
