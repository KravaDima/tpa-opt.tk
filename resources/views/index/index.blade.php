@extends('app')

@section('content')
	<!-- HTML-код модального окна -->
	<div id="modal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<span>Заказать прайс!</span>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
				</div>
				<div class="modal-body" style="min-height: 300px;">
					{!! Form::open(['route' => 'leed.store', 'style' => 'width: 80%; margin-left: auto; margin-right: auto;', 'id' => 'modal-form']) !!}
					@include('leed._form')
					<div class="form-group">
						{!! Form::submit('Заказать прайс', ['class' => 'btn btn-lg btn-danger btn-primary col-xs-10 col-xs-offset-1', 'style' => ' background-color: #f40638;']) !!}
					</div>
					{!! Form::close() !!}
				</div>
				<div class="modal-footer"></div>
			</div>
		</div>		
	</div>
	<div class="container">
		<!-- Блоки / Сетка -->
		<div class="row">
			<div class="col-sx-12 col-sm-12 col-md-12 col-lg-12" style="height: 750px; background-image: url(/lib/images/tpamain.png); background-position: center center;">
				<div class="col-sx-offset-6 col-sm-offset-6 col-md-offset-6 col-lg-offset-6" style="color: white; font-size: 1.5em; margin-top: 50px;">+38 050 87 69 555</div>
				<div class="col-sx-offset-6 col-sm-offset-6 col-md-offset-6 col-lg-offset-6" style="color: white; font-size: 1.5em;"><a href="tel:+380508769555">Заказать звонок</a></div>
				<div>
					<p class="col-sx-offset-6 col-sm-offset-6 col-md-offset-6 col-lg-offset-6" style="margin-top: 150px; font-size: 3.5em; color: #fff">Ароматизаторы TPA по оптовой цене 3грн/мл</p>
					<p class="col-sx-offset-6 col-sm-offset-6 col-md-offset-6 col-lg-offset-6" style="color: #fff; font-size: 1.5em;">Самый широкий выбор Ароматизаторов TPA (the perfumer's apprentice)</p>
				</div>
				<a type="button" class="col-md-5 col-lg-4 visible-md-block visible-lg-block col-md-offset-6 col-lg-offset-6 btn btn-lg btn-danger btn-primary" style="background-color: #f40638;" href="#modal" data-toggle="modal">ЗАКАЗАТЬ ПРАЙС АРОМАТИЗАТОРОВ</a>
				<a type="button" class="hidden-md hidden-lg col-sm-offset-6 btn btn-lg btn-danger btn-primary" style="background-color: #f40638;" href="#modal" data-toggle="modal">ЗАКАЗАТЬ ПРАЙС </a>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="min-height: 750px; background-color: #fff">
				<h2 class="text-center">5 причин заказать сейчас</h2>
				<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2 col-sm-offset-0 col-md-offset-2 col-lg-offset-2 ">
					<img src="/lib/images/sec01.png">
					<p class="text-center">Более 140 вкусов Ароматизаторов TPA</p>
				</div>
				<div  class="col-xs-12 col-sm-4 col-md-3 col-lg-2 col-lg-offset-1">
					<img src="/lib/images/sec02.png">
					<p class="text-center">Заказ в 1 клик</p>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2 col-lg-offset-1">
					<img src="/lib/images/sec03.png">
					<p class="text-center">Быстрая обработка заказов</p>
				</div>
				<div class="clearfix"></div>
				<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2 col-sm-offset-2 col-md-offset-3 col-lg-offset-3">
					<img src="/lib/images/sec04.png">
					<p class="text-center">Официальный представитель TPA в Украине</p>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2 col-lg-offset-1">
					<img src="/lib/images/sec05.png">
					<p class="text-center">БЕСПЛАТНАЯ доставка по всей Украине</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div style="height: 800px; background-image: url(/lib/images/01questbg2.jpg)">
				<div style=" margin-top:100px; min-height:521px; background-image: url(/lib/images/sec02-bg_T3fRrxb.png); color: #fff" class="col-xs-10 col-sm-8 col-md-6 col-lg-6 col-xs-offset-1 col-sm-offset-2 col-md-offset-3 col-lg-offset-3">
					<p class="text-center" style="margin-top:50px; font-size: 5vw; ">Заполните форму,</p>
					<p class="text-center" style="font-size: 1.5em; ">чтобы заказать прайс Ароматизаторов TPA</p>
					<div>
						{!! Form::open(['route' => 'leed.store',  'id' => 'main-form']) !!}
							@include('leed._form')
						<div class="form-group">
							{!! Form::submit('Заказать прайс', ['class' => 'btn btn-lg btn-danger btn-primary col-xs-10 col-xs-offset-1', 'style' => 'margin-top: 30px; background-color: #f40638;']) !!}
						</div>
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div style="height: 750px; font-size: 1.3em" class="text-center">
				<p style="font-size: 7vw; margin-top: 100px; margin-bottom: 50px;">Популярные </br> Ароматизаторы TPA</p>
				<div class="col-xs-8 col-sm-4 col-md-3 col-lg-2 col-xs-offset-2 col-sm-offset-2 col-md-offset-2 col-lg-offset-1" style="margin-top: 15px;">
					<img class="img-circle" src="/lib/images/strawberry-ripe-flavor.jpg" style="height: 200px;">
					<p>Strawberry (Ripe)</p>
					<p>3грн/мл</p>
					<a type="button" class="btn btn-lg btn-danger" style="background-color: #f40638;" href="#modal" data-toggle="modal">Заказать прайс</a>
				</div>
				<div class="col-xs-8 col-sm-4 col-md-3 col-lg-2 col-md-offset-2 col-sm-offset-2 col-xs-offset-2" style="margin-top: 15px;">
					<img class="img-circle" src="/lib/images/fruit-circles-flavor.jpg" style="height: 200px;">
					<p>Fruit Circles</p>
					<p>3грн/мл</p>
					<a type="button" class="btn btn-lg btn-danger" style="background-color: #f40638;" href="#modal" data-toggle="modal">Заказать прайс</a>
				</div>
				<div class="col-xs-8 col-sm-4 col-md-3 col-lg-2 col-md-offset-2 col-sm-offset-2 col-xs-offset-2" style="margin-top: 15px;">
					<img class="img-circle" src="/lib/images/bavarian-cream-flavor.jpg" style="height: 200px;">
					<p>Bavarian Cream</p>
					<p>3грн/мл</p>
					<a type="button" class="btn btn-lg btn-danger" style="background-color: #f40638;" href="#modal" data-toggle="modal">Заказать прайс</a>
				</div>
			</div>
		</div>
		<div class="row">
			<div style="height: 500px; background-image: url(/lib/images/dnepr.png); background-repeat: no-repeat; background-position: center; background-size: cover; padding: 1px;">
				<p style="font-size: 2.7em; margin-top: 150px;" class="bg-danger text-center">-Мы на карте-</p>
				<p style="font-size: 2em; margin-top: 100px;" class="bg-danger text-center">Украина, г.Днепр</p>
			</div>
		</div>
		<div class="row">
			<div style="height: 200px; background-image: url(/lib/images/footer.jpg); background-size: cover;">
				<div class="col-sm-2 col-md-2 col-lg-2 col-sm-offset-1 col-md-offset-1 col-lg-offset-1 hidden-xs" style="margin-top: 50px;">
					<img src="/lib/images/tfa-logo.png" style="height: 100px;">
				</div>
				<p class="col-xs-offset-2 col-sm-offset-8 col-md-offset-8" style="color: #fff; font-size: 2em; padding-top: 50px;">Остались вопросы?</p>
				<p class="col-xs-offset-2 col-sm-offset-8 col-md-offset-8" style="color: #fff; font-size: 2em;"><a href="tel:+380508769555">+380508769555</a></p>
			</div>
		</div>
	</div>
@stop