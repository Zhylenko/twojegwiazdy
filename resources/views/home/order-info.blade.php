@section('order-info')
        <div class="order-info-area" id="zamówić">
			<div class="title-block">
				<div class="third-title">
					<h4>JAK ZAMÓWIĆ?</h4>
				</div>
			</div>
			<div class="hr"></div>
			<div class="steps-area">
				<a href="{{ route('constructor') }}">
				<div class="step-block">
					<div class="image-area">
						<div class="image-block h">
							<img src="img/project.svg" alt="new project">
						</div>
					</div>
					<div class="text-area">
						<div class="fourth-title">
							<h5>WYBÓR DESIGNU</h5>
						</div>
						<div class="description-block">
							<p>Zacznij od ułożenia mapy przy pomocy Kreatora, wybierz design i dopasuj elementy</p>
						</div>
					</div>
				</div>
				</a>
				<div class="arrow-block">
					<img src="img/arrow.svg" alt="arrow">
				</div>
				<div class="step-block">
					<div class="image-area">
						<div class="image-block">
							<img src="img/payment.svg" alt="payment">
						</div>
					</div>
					<div class="text-area">
						<div class="fourth-title">
							<h5>PŁATNOŚĆ</h5>
						</div>
						<div class="description-block">
							<p>Sfinalizuj zakup i dokonaj zapłaty - wtedy otrzymamy Twoje zamówienie</p>
						</div>
					</div>
				</div>
				<div class="arrow-block">
					<img src="img/arrow.svg" alt="arrow">
				</div>
				<div class="step-block">
					<div class="image-area">
						<div class="image-block">
							<img src="img/tools.svg" alt="tools">
						</div>
					</div>
					<div class="text-area">
						<div class="fourth-title">
							<h5>TWORZENIE</h5>
						</div>
						<div class="description-block">
							<p>Zaczynamy tworzyć Twoje Gwiazdy: drukujemy, oprawiamy, pakujemy i wysyłamy</p>
						</div>
					</div>
				</div>
				<div class="arrow-block">
					<img src="img/arrow.svg" alt="arrow">
				</div>
				<div class="step-block">
					<div class="image-area">
						<div class="image-block">
							<img src="img/delivery.svg" alt="delivery">
						</div>
					</div>
					<div class="text-area">
						<div class="fourth-title">
							<h5>DOSTAWA</h5>
						</div>
						<div class="description-block">
							<p>Po wysyłce dostaniesz od nas dobrą wiadomość - już niedługo Twoje Gwiazdy dotrą do Ciebie. (Będziesz mógł śledzić swoje zamówienie)</p>
						</div>
					</div>
				</div>
			</div>
		</div>
@endsection