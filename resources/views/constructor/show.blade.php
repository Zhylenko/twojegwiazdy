@include('layouts.progress', ['progress' => $progress])
@include('constructor.steps.constructor', ['presets' => $presets, 'sizes' => $sizes, 'accessories' => $accessories, 'examples' => $examples])

@section('content')
@yield('progress')

@yield('constructor')
@endsection

@section('styles')
<!-- Suggestions Styles -->
<link rel="stylesheet" type="text/css" href="css/suggestions.min.css">
<!-- Datepicker Styles -->
<link rel="stylesheet" type="text/css" href="css/datepicker.css">
@endsection

@section('scripts')
<!-- JQuery -->
<script src="{{ asset('js/jquery.min.js') }}" type="text/javascript"></script>
<!-- JQuery Suggestions -->
<script src="{{ asset('js/jquery.suggestions.min.js') }}" type="text/javascript"></script>
<!-- Virtual Sky -->
<script src="{{ asset('js/stuquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/virtualsky.js') }}" type="text/javascript"></script>
<!-- Datepicker -->
<script src="{{ asset('js/datepicker.min.js') }}" type="text/javascript"></script>
<!-- Main -->
<script src="{{ asset('js/main.js') }}" type="text/javascript"></script>
<!-- Constructor -->
<script src="{{ asset('js/constructor.js') }}" type="text/javascript"></script>
@endsection

@extends('layouts/app')