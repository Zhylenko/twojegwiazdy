@section('contact')
        <div class="contact-area" id="kontakt">
			<div class="title-block">
				<div class="first-title">
					<h2>Kontakt</h2>
				</div>
				<div class="description-block">
					<p>Jesteśmy zawsze do Twojej dyspozycji i chętnie udzielimy odpowiedzi na każde Twoje pytanie.</p>
				</div>
			</div>
			<div class="contact-block">
				<div class="contact-form">
					<div class="title-block">
						<div class="title">
							<h4>Formularz kontaktowy:</h4>
						</div>
					</div>
					<div class="form-block">
						<form action="{{ route('contact-send') }}" method="post" id="contact-form">
							@csrf
							<div class="input">
								<input id="name" name="name" type="text" required autocomplete="off">
								<label for="name">Imię i nazwisko</label>
								<span class="bar"></span>
								<span class="error"></span>
							</div>
							<div class="input">
								<input id="email" name="email" type="text" required autocomplete="off">
								<label for="email">Email</label>
								<span class="bar"></span>
								<span class="error"></span>
							</div>
							<div class="input">
								<textarea id="message" name="message" type="text" required autocomplete="off" rows="1"></textarea>
								<label for="message">Treść wiadomości</label>
								<span class="bar"></span>
								<span class="error"></span>
							</div>
						</form>
						<input type="submit" class="blue-button" form="contact-form" value="Wyślіj wіadomość">
					</div>	
				</div>
				<div class="info-area">
					<div class="title-block">
						<div class="title">
							<h4>Skontaktuj się z nami poprzez:</h4>
						</div>
					</div>
					<div class="info-block">
						<a href="mailto:kontakt@twojegwiazdy.pl" target="_blank">
							<div class="info">
								<div class="title-block">
									<div class="title">
										<h5>Email</h5>
									</div>
								</div>
								<div class="content">
									<div class="image-block">
										<img src="img/mail.svg" alt="mail-logo">
									</div>
									<div class="text-block">
										<p>kontakt@twojegwiazdy.pl</p>
									</div>
								</div>
							</div>
						</a>
						<a href="https://www.instagram.com/twojegwiazdy/" target="_blank">
							<div class="info">
								<div class="title-block">
									<div class="title">
										<h5>Instagram</h5>
									</div>
								</div>
								<div class="content">
									<div class="image-block">
										<img src="img/instagram.svg" alt="instagram-logo">
									</div>
									<div class="text-block">
										<p>@twojegwiazdy</p>
									</div>
								</div>
							</div>
						</a>
						<a href="https://www.facebook.com/twojegwiazdy/" target="_blank">
							<div class="info">
								<div class="title-block">
									<div class="title">
										<h5>Facebook</h5>
									</div>
								</div>
								<div class="content">
									<div class="image-block h">
										<img src="img/facebook.svg" alt="facebook-logo">
									</div>
									<div class="text-block">
										<p>Twojegwiazdy</p>
									</div>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
@endsection