@section('main')
		<div class="main-area">
			<div class="text-area">
				<div class="title-block">
					<h1>Twoje Gwiazdy ‒ tworzymy mapy z<br>
						Twoim indywidualnym układem gwiazd!</h1>
				</div>
				<div class="quote-block">
					<i>"Jest to więcej niż prezent, to utrwalony moment z życia"</i>
				</div>
				<div class="description-block">
					<ul>
						<li>Niesamowity prezent, który na pewno nie zostanie zapomniany</li>
						<li>Mapa jeszcze nigdy nie była tak osobista</li>
						<li>Potrzebujesz tylko 3 minuty, aby odtworzyć układ Twoich Gwiazd w osobliwy dzień</li>
					</ul>
				</div>
				<div class="btn-block">
					<a href="{{ route('constructor') }}">
						<div class="blue-button">
							<p>Ułóż gwiazdy</p>
						</div>
					</a>
				</div>
			</div>
			<div class="photo-area">
				<div class="sky-block">
					<img src="img/work1.png" alt="project">
				</div>
			</div>
			<div class="bottom-area">
				<a href="{{ !Route::is('home') ? route('home') : ''}}{{ asset('#galeria') }}">
					<div class="bottom-button"></div>
				</a>
			</div>
		</div>
@endsection