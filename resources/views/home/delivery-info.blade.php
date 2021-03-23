@section('delivery-info')
        <div class="delivery-info-area">
			<div class="title-block">
				<div class="first-title">
					<h2>Dostawa i płatność</h2>
				</div>
			</div>
			<div class="info-area">
				<div class="info-block">
					<div class="title">
						<h6>SPOSOBY ZAPŁATY:</h6>
					</div>
					<div class="description">
						<p>Zapłata za zamówienie może nastąpić w formie przelewu na konto lub poprzez płatność TPAY.</p>
					</div>
					<div class="image-block">
						<img src="{{ asset('img/tpay.png') }}" alt="TPay logo">
					</div>
				</div>
				<div class="info-block">
					<div class="title">
						<h6>SPOSOBY DOSTAWY:</h6>
					</div>
					<div class="description">
						<p>Dostawa Twoich gwiazd będzie realizowana w sposób wybrany przy składaniu zamówienia. Do wyboru są: dostawa kurierem lub po paczkomatu realizowane przez InPost.</p>	
					</div>
					<div class="image-block">
						<img src="{{ asset('img/inpost.png') }}" alt="Inpost logo">
					</div>
				</div>
				<div class="info-block">
					<div class="title">
						<h6>MOŻLIWOŚĆ ZWROTU:</h6>
					</div>
					<div class="description">
						<p>Niestety nie ma możliwości zwrotu tego produktu, gdyż jest on wykonany indywidualnie według spersonalizowanych kryterium zamawiającego. W razie wystąpienia wyjątkowych okoliczności prosimy skontaktować się z nami przez tego maila: <a href="mailto:kontakt@twojegwiazdy.pl" target="_blank">kontakt@twojegwiazdy.pl</a></p>
					</div>
				</div>
				<div class="info-block">
					<div class="title">
						<h6>REGULAMIN SKLEPU</h6>
					</div>
					<div class="description">
						<p><a href="{{ asset('pdf/Regulamin sklepu.pdf') }}">Zapoznać się</a></p>
					</div>
				</div>
			</div>
		</div>
@endsection