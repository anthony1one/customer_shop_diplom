@extends('main')

@section('title', 'Товары')

@section('jumbotron')
	
	<div class="jumbotron">
		<h1 align="center"><b>#CUSTOMERSHOP</b></h1>
		<br>
		<h2 align="center">Электроника для работы и отдыха</h2>
		<div class="container">
			<blockquote class="blockquote-reverse">
			Назначение философии не в умозрительных догадках и построениях картины мира, а в раскрытии того, как людям следует жить, чем руководствоваться, как оказывать воздействие на других и на самого себя. Повседневная жизнь человека – это искусство. Основное познание должно быть направлено на себя, на деятельность своей души по поиску истины и смысла жизни.
			<footer>Сократ</footer>
			</blockquote>
			<p>
				<div class="btn-group btn-group-justified" role="group" aria-label="...">
				  	<div class="btn-group" role="group">
				    	<button type="button" class="btn btn-primary btn-goods-info" data-toggle="dropdown"><span class="glyphicon glyphicon-phone"></span> Мобильные устройства</button>
				    	<ul class="dropdown-menu dropdown-goods-info" role="menu">
				        	<li><a href="/products-all?category=Мобильные+устройства&sub=Телефоны">Телефоны</a></li>
				            <li><a href="/products-all?category=Мобильные+устройства&sub=Планшеты">Планшеты</a></li>
				            <li><a href="/products-all?category=Мобильные+устройства&sub=Комплектующие">Комплектующие</a></li>
				            <li role="separator" class="divider"></li>
				            <li><a href="/products-all?category=Мобильные+устройства">Все</a></li>	
					    </ul>
				  	</div>
				  	<div class="btn-group" role="group">
				    	<button type="button" class="btn btn-primary btn-goods-info" data-toggle="dropdown"><span class="glyphicon glyphicon-hdd"></span> Компьютеры</button>
				    	<ul class="dropdown-menu dropdown-goods-info" role="menu">
				        	<li><a href="/products-all?category=Компьютеры&sub=Компьютеры">Компьютеры</a></li>
				            <li><a href="/products-all?category=Компьютеры&sub=Ноутбуки">Ноутбуки</a></li>
				            <li><a href="/products-all?category=Компьютеры&sub=Моноблоки">Моноблоки</a></li>
				            <li><a href="/products-all?category=Компьютеры&sub=Комплектующие">Комплектующие</a></li>
				            <li role="separator" class="divider"></li>
				            <li><a href="/products-all?category=Компьютеры">Все</a></li>	
					    </ul>
				  	</div>
				  	<div class="btn-group" role="group">
				    	<button type="button" class="btn btn-primary btn-goods-info" data-toggle="dropdown"><span class="glyphicon glyphicon-blackboard"></span> Техника для дома</button>
				    	<ul class="dropdown-menu dropdown-goods-info" role="menu">
				        	<li><a href="/products-all?category=Техника+для+дома&sub=TV">TV</a></li>
				            <li><a href="/products-all?category=Техника+для+дома&sub=Аудиосистема">Аудиосистема</a></li>
				            <li><a href="/products-all?category=Техника+для+дома&sub=Комплектующие">Комплектующие</a></li>
				            <li role="separator" class="divider"></li>
				            <li><a href="/products-all?category=Техника+для+дома">Все</a></li>	
					    </ul>
				 	</div>
				</div>	
			</p>
		</div>
	</div>

@endsection

@section('content')

	<div class="row row-centered">
		@foreach($products as $product)
			<div class="col-sm-6 col-md-4 col-centered">
		    	<div class="thumbnail">
		      		<img src="img/goods/{{ $product->img }}" width="200" height="200">
		      		<div class="caption">
		        		<h4>{{ $product->name }}</h4>
		        		<h1>{{ $product->price }}</h1>
		        		<p><a href="#" class="btn btn-primary" role="button"><span class="glyphicon glyphicon glyphicon-shopping-cart"></a> 
		        		<a href="/product/{{ $product->name_slug }}" class="btn btn-default" role="button">Подробнее</a>
		        		</p>
		      		</div>
		    	</div>
		    </div>
	    @endforeach
	</div>

	<div class="row row-centered">
		{!! $products->links(); !!}
	</div>
@endsection