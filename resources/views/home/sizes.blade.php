@section('sizes')
        <div class="material-area">
			<div class="text-area">
				<div class="material-block">
					<div class="third-title">
						<h4>Druk na PCV</h4>
					</div>
					<div class="description-block">
						<p>Naniesienie obrazu w technologii UV gwarantuje fotorealistyczne odzwierciedlenie kolorów, wysoką odporność na promieniowanie ultrafioletowe - co oznacza, że Twoje Gwiazdy będą świecić się wiecznie.</p>
					</div>
				</div>
				<div class="proportions-area">
					<div class="proportion-block">
						<div class="image-block large">
							<img src="img/work1.png" alt="product">
							<div class="height">
								<p>420 mm</p>
							</div>
							<div class="width">
								<p>300 mm</p>
							</div>
						</div>
						<div class="title-block">
							<h6>Maxi A3</h6>
						</div>
						<div class="description-block">
							<p>To specjalny format<br>
								- polecamy do designów<br>
								z tekstem/albumem</p>
						</div>
						<div class="price-block">
							<div class="old-price">
								<strike>99 zl</strike>
							</div>
							<div class="price">
								<p>89 zl</p>
							</div>
						</div>
					</div>
					<div class="proportion-block">
						<div class="image-block medium">
							<img src="img/work1.png" alt="product">
							<div class="height">
								<p>300 mm</p>
							</div>
							<div class="width">
								<p>210 mm</p>
							</div>
						</div>
						<div class="title-block">
							<h6>Classic A4</h6>
						</div>
						<div class="description-block">
							<p>To klasyczny format<br>
								- Must-Have<br>
								dla każdego</p>
						</div>
						<div class="price-block">
							<div class="old-price">
								<strike>89 zl</strike>
							</div>
							<div class="price">
								<p>79 zl</p>
							</div>
						</div>
					</div>
					<div class="proportion-block">
						<div class="image-block small">
							<img src="img/work1.png" alt="product">
							<div class="height">
								<p>210 mm</p>
							</div>
							<div class="width">
								<p>150 mm</p>
							</div>
						</div>
						<div class="title-block">
							<h6>Mini A5</h6>
						</div>
						<div class="description-block">
							<p>To najmniejszy format<br>
								- łatwo dopasujesz<br>
								go do wnętrza</p>
						</div>
						<div class="price-block">
							<div class="old-price">
								<strike>79 zl</strike>
							</div>
							<div class="price">
								<p>69 zl</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="photo-area">
				<div class="photo-block">
					<img src="img/material.png" alt="picture in hand">
				</div>
				<a href="{{ route('constructor') }}">
					<div class="blue-button">
						<p>Ułóż gwiazdy</p>
					</div>
				</a>
			</div>
		</div>
@endsection