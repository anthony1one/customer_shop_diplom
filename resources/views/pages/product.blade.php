@extends('main')

@section('title', $product->name)

@section('jumbotron')
@endsection

@section('content')
	<div class="row row-centered" style="margin-top: 80px">
		<div class="col-md-10 col-centered">
			<div class="thumbnail" style="text-align: center;">
				<div class="col-md-5">
					<h1><b>{{ $product->name }}</b></h1>
					<hr>
					<span style="font-size: 40px">Цена: <b>{{ $product->price }}</b></span>
					<hr>
					<button class="btn btn-success btn-block">В корзину</button>
					<br>
					<h4 align="center">Товар имеется на складе</h3>
				</div>
				<div class="col-md-5">
				</div>
				<div>
					<img src="{{ URL::to('/') }}/img/goods/{{ $product->img }}" width="480" height="480">
				</div>
				<nav aria-label="...">
				 	<ul class="pager">
					    <li><button class="btn btn-primary" id="prev_main_img"><span class="glyphicon glyphicon-chevron-left"></span></button></li>
					    <li><button class="btn btn-primary" id="next_main_img"><span class="glyphicon glyphicon-chevron-right"></button></li>
				  	</ul>
				</nav>

				<ul class="nav nav-tabs" role="tablist">
					<li class="active"><a href="#about_product" role="tab" data-toggle="tab">О товаре</a></li>
					<li><a href="#charact_product" role="tab" data-toggle="tab">Характеристики</a></li>
					<li><a href="#comment_product" role="tab" data-toggle="tab">Отзывы</a></li>
				</ul>

				<div class="tab-content">
					<div role="tabpanel" class="tab-pane active" id="about_product">
						<br>
						<p><b>Вкладка "О товаре"</b></p>
						<p>{{ $product->description }}</p>
					</div>
					<div role="tabpanel" class="tab-pane" id="charact_product">
						<br>
						<p><b>Вкладка "Характеристики"</b></p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
					<div role="tabpanel" class="tab-pane" id="comment_product">
						<br>
						<p><b>Вкладка "Отзывы"</b></p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection