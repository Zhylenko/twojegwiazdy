@include('faq.faq')

@section('content')
@yield('faq', $faqs)
@endsection

@section('scripts')
<!-- Main -->
<script src="{{ asset('js/main.js') }}" type="text/javascript" type="text/javascript"></script>
@endsection

@extends('layouts/app')