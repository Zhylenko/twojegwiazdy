@include('layouts.progress', ['progress' => $progress])
@include('constructor.constructor', ['presets' => $presets])

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
<script src="js/jquery.min.js" type="text/javascript"></script>
<!-- JQuery Suggestions -->
<script src="js/jquery.suggestions.min.js" type="text/javascript"></script>
<!-- Virtual Sky -->
<script src="js/stuquery.min.js" type="text/javascript"></script>
<script src="js/virtualsky.js" type="text/javascript"></script>
<!-- Datepicker -->
<script src="js/datepicker.min.js" type="text/javascript"></script>
<!-- Main -->
<script src="js/main.js" type="text/javascript" type="text/javascript"></script>
<!-- Constructor -->
<script src="js/constructor.js" type="text/javascript" type="text/javascript"></script>
@endsection

@extends('layouts/app')