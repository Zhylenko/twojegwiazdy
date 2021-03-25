@include('layouts.progress', ['progress' => $progress])
@include('constructor.steps.success')

@section('content')
@yield('progress')

@yield('success')
@endsection

@section('scripts')
<!-- Main -->
<script src="{{ asset('js/main.js') }}" type="text/javascript"></script>
@endsection

@extends('layouts/app')