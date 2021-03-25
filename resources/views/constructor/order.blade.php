@include('layouts.progress', ['progress' => $progress])
@include('constructor.steps.order')

@section('content')
@yield('progress')

@yield('order')
@endsection

@section('scripts')
<!-- Main -->
<script src="{{ asset('js/main.js') }}" type="text/javascript"></script>
@endsection

@extends('layouts/app')