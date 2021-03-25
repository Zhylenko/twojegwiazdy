@section('content')
        <div class="error-area">
			<div class="error-block">
				<div class="error">
					<h2>{{ $exception->getStatusCode() }}</h2>
				</div>
				<div class="title-block">
					<div class="title">
						<h3>Pomyłka</h3>
					</div>
				</div>
				<div class="description-block">
					<p>{{ $exception->getMessage() }}</p>
				</div>
				<div class="home-link">
					<a href="{{ route('home') }}">Strona główna</a>
				</div>
			</div>
		</div>
@endsection

@section('scripts')
<!-- Main -->
<script src="{{ asset('js/main.js') }}" type="text/javascript"></script>
@endsection

@extends('layouts/app')