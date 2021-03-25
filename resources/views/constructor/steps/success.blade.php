@section('success')
        <div class="success-area">
			<div class="success-block">
				<div class="image-block">
					<img src="{{ asset('img/success.svg') }}" alt="success icon">
				</div>
				<div class="title-block">
					<div class="second-title">
						<h3>Dziękujemy!</h3>
					</div>
				</div>
				<div class="description-block">
					<p>Otrzymaliśmy Twoje Zamówienie.<br>
						Zaczynamy układać Twoje Gwiazdy</p>
				</div>
				<div class="home-link">
					<a href="{{ route('home') }}">Strona główna</a>
				</div>
			</div>
		</div>
@endsection