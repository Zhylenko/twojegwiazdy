@include('home.main')
@include('home.gallery')
@include('home.advantages')
@include('home.order-info')
@include('home.sizes')
@include('home.delivery-info')
@include('home.contact')

@section('content')
@yield('main')

@yield('gallery')

@yield('advantages')

@yield('order-info')

@yield('sizes')

@yield('delivery-info')

@yield('contact')
@endsection

@section('scripts')
<!-- Sweet Alert -->
<script src="{{ asset('js/sweetalert.min.js') }}" type="text/javascript"></script>
<!-- Form -->
<script src="{{ asset('js/form.js') }}" type="text/javascript"></script>
<!-- Main -->
<script src="{{ asset('js/main.js') }}" type="text/javascript"></script>
@endsection

@extends('layouts/app')