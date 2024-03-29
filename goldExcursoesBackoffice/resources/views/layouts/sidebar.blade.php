<div class="sidebar sidebar_mobile">
	<nav>
		<ul class="scrollbar">
			<li class="item_menu active"><a href="#"><i class="margin-right-15 fas fa-clock"></i>{{ date('d/m/Y H:i:s') }}</a> <!-- <small class="new_category">Horário</small> --></li>
		<li class="category_title">UTILIZADORES</li>
		<li class="item_menu li_dropdown">

				<a href="#" class="closed">

					<i class="margin-right-15 fas fa-users"></i>Clientes

					<span class="float-right"><i class="fas fa-angle-left"></i><span>

				</a>		

				<ul class="dropdown_nav">
					<li class="item_menu"><a href="{{route('clients.create')}}"><i class="margin-right-15 fas fa-user"></i>Adicionar</a></li>
					<li class="item_menu"><a href="{{route('clients.index')}}"><i class="margin-right-15 fas fas fa-list-ol"></i>Listar</a></li>
					
				</ul>

			</li>

			<li class="category_title">VIAGENS</li>

			<li class="item_menu li_dropdown">

				<a href="#" class="closed">

					<i class="margin-right-15 fas fa-bus"></i>Excursões

					<span class="float-right"><i class="fas fa-angle-left"></i><span>
				</a>		

				<ul class="dropdown_nav">
					
					<li class="item_menu"><a href="{{route('tour.create')}}"><i class="margin-right-15 fas fa-plus"></i>Adicionar</a></li>
					<li class="item_menu"><a href="{{route('tour.index')}}"><i class="margin-right-15 fas fa-list-ol"></i>Listar</a></li>
					
				</ul>
			</li>
			<li class="item_menu li_dropdown">
				<a href="#" class="closed">

					<i class="margin-right-15 fas fa-bus"></i>Reservas

					<span class="float-right"><i class="fas fa-angle-left"></i><span>
				</a>		

				<ul class="dropdown_nav">
					
					<li class="item_menu"><a href="{{route('tour.create')}}"><i class="margin-right-15 fas fa-plus"></i>Criar</a></li>
					<li class="item_menu"><a href="{{route('tour.index')}}"><i class="margin-right-15 fas fa-list-ol"></i>Ver reservas</a></li>
					
				</ul>

			</li>
		<!-- 	<li class="item_menu"><a href="#"><i class="margin-right-15 fas fa-tachometer-alt"></i>Typography</a> 

				<small class="new_category">NEW</small>

			</li>-->
		
			<li class="category_title">FATURAÇÃO</li>
			<li class="item_menu li_dropdown">

				<a href="#" class="closed">
					<i class="margin-right-15 fas fa-cubes"></i>Pagamentos
					<span class="float-right"><i class="fas fa-angle-left"></i><span>
				</a>		

				<ul class="dropdown_nav">

					<li class="item_menu"><a href="#"><i class="margin-right-15 fas fa-tachometer-alt"></i>Breadcumb</a></li>
					<li class="item_menu"><a href="#"><i class="margin-right-15 fas fa-tachometer-alt"></i>Cards</a></li>
					<li class="item_menu"><a href="#"><i class="margin-right-15 fas fa-tachometer-alt"></i>Carousel</a></li>
					<li class="item_menu"><a href="#"><i class="margin-right-15 fas fa-tachometer-alt"></i>Collapse</a></li>
					<li class="item_menu"><a href="#"><i class="margin-right-15 fas fa-tachometer-alt"></i>Forms</a></li>

				</ul>
			</li>
			<li class="item_menu buy_now"><a href="#"><i class="margin-right-15 fas fa-shopping-cart"></i> Buy NOW! </a></li>
		</ul>
	</nav>
        <button class="close_nav"><i class="fas fa-chevron-left"></i></button>
</div>
