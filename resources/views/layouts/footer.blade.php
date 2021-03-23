@include('layouts.navbar')
@section('footer')
    <!-- Footer -->
    <footer>
		<div class="footer-logo-block">
			<div class="logo-block">
				<a href="{{ route('home') }}"><img src="{{ asset('img/logo.png') }}" alt="Logo"></a>
			</div>
			<div class="social-area">
                <a href="mailto:kontakt@twojegwiazdy.pl" target="_blank">
                    <div class="social-block w">
                        <img src="{{ asset('img/mail.svg') }}" alt="mail-logo">
                    </div>
                </a>
                <a href="https://www.facebook.com/twojegwiazdy/" target="_blank">
                    <div class="social-block">
                        <img src="{{ asset('img/facebook.svg') }}" alt="facebook-logo">
                    </div>
                </a>
                <a href="https://www.instagram.com/twojegwiazdy/" target="_blank">
                    <div class="social-block">
                        <img src="{{ asset('img/instagram.svg') }}" alt="instagram-logo">
                    </div>
                </a>
			</div>
		</div>
		<div class="footer-nav-block">
			<div class="navbar">
                @yield('navbar')
			</div>
		</div>
		<div class="footer-btn-block">
			<div class="blue-button">
				<a href="{{ route('constructor') }}">Ułóż gwiazdy</a>
			</div>
			<div class="text-block">
				<a href="{{ asset('pdf/Regulamin sklepu.pdf') }}">Regulamin sklepu</a>
			</div>
		</div>
		<div class="copyright-block">
			<p>Copyright © {{ date('Y') }} Twoje Gwiazdy.</p>
			<p class="developer">By <a href="#" target="_blank">Vladislav Zhylenko</a></p>
		</div>
	</footer>
@endsection