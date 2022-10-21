@php
    $appUrl = config('app.url');
@endphp
<meta charset="utf-8">
<meta name="author" content="Maring Shin">
<meta name="description" content="Welcome to InterventionManager!">
<meta name="keywords" content="interventionmanager, intervention, manager, maring">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<link rel="apple-touch-icon" sizes="180x180" href="{{ $appUrl }}/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="{{ $appUrl }}/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="{{ $appUrl }}/favicon-16x16.png">
<link rel="manifest" href="{{ $appUrl }}/site.webmanifest">
<meta name="msapplication-TileColor" content="#603cba">
<meta name="theme-color" content="#ffffff">

<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'InterventionManager') }}</title>

<!-- Fonts -->
<link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

<!-- Scripts -->
@vite(['resources/css/app.css', 'resources/scss/app.scss', 'resources/js/app.js'])

<!-- Styles -->
@livewireStyles