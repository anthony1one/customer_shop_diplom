<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<!-- кнопка для мобильных устройств -->
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="/">Customer Shop</a>
		</div>

		<div class="collapse navbar-collapse" id="bs-navbar-collapse">
	      	<ul class="nav navbar-nav">
	        	<li class="{{ Request::is('/') ? "active" : "" }}"><a href="/">Главная <span class="sr-only">(current)</span></a></li>
	        	<li class="dropdown {{ Request::is('products-all') ? "active" : Request::is('product') ? "active" : "" }}">
	          		<a href="/products-all" class="dropdown-toggle" id="dropdown-goods-btn" role="button" aria-haspopup="true" aria-expanded="false">Товары</a>
		          	<ul class="dropdown-menu" id="dropdown-goods">
		          		<li class="dropdown-header">Мобильные устройства</li>
		            	<li><a href="/products-all?category=Мобильные+устройства&sub=Телефоны">Телефоны</a></li>
		            	<li><a href="/products-all?category=Мобильные+устройства&sub=Планшеты">Планшеты</a></li>
		            	<li><a href="/products-all?category=Мобильные+устройства&sub=Комплектующие">Комплектующие</a></li>
		            	<li role="separator" class="divider"></li>
		            	<li class="dropdown-header">Компьютеры</li>
		            	<li><a href="#">Компьютеры</a></li>
		            	<li><a href="/products-all?category=Компьютеры&sub=Ноутбуки">Ноутбуки</a></li>
		            	<li><a href="/products-all?category=Компьютеры&sub=Моноблоки">Моноблоки</a></li>
		            	<li><a href="/products-all?category=Компьютеры&sub=Комплектующие">Комплектующие</a></li>
		            	<li role="separator" class="divider"></li>
		            	<li class="dropdown-header">Техника для дома</li>
		            	<li><a href="/products-all?category=Техника+для+дома&sub=TV">TV</a></li>
		            	<li><a href="/products-all?category=Техника+для+дома&sub=Аудиосистема">Аудиосистема</a></li>
		            	<li><a href="/products-all?category=Техника+для+дома&sub=Комплектующие">Комплектующие</a></li>
		          	</ul>
	        	</li>
	        	<li class="{{ Request::is('shops') ? "active" : "" }}"><a href="/shops">Магазины</a></li>
	        	<li class="{{ Request::is('about') ? "active" : "" }}"><a href="/about">О нас</a></li>
	      	</ul>
	    	<form class="navbar-form navbar-left">
	       		<div class="form-group">
	        		<input type="text" class="form-control" placeholder="Искать по товарам">
	        	</div>
	        	<button type="submit" class="btn btn-primary">Найти</button>
	      	</form>
	      	<ul class="nav navbar-nav navbar-right">
	        	<li class="{{ Request::is('basket') ? "active" : "" }}"><a href="/basket"><span class="glyphicon glyphicon glyphicon-shopping-cart" style="font-size: 20px"></span></a></li>
	        	<li class="dropdown">
		          	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Аккаунт <span class="caret"></span></a>
		          	<ul class="dropdown-menu">
		            	<li><a href="#" class="disabled">#ВРАЗРАБОТКЕ</a></li>
		        	</ul>
	        	</li>
	      	</ul>
	    </div>
	</div>
</div>