<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="icon" href="{{ url('storage','home/favicon.ico') }}">
    <link rel="canonical" href="{{ canonical_url() }}">
    {{ $head ?? '' }}
    @vite(['resources/css/app.css','resources/js/app.js'])
    @livewireStyles
</head>

<body x-data="{ desktopMenuOpen: false, mobileMenuOpen: false}">

@livewire('partials.navbar')
<main>
    {{ $slot  }}
</main>
@livewire('partials.footer')
@livewireScripts
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<x-livewire-alert::scripts/>

{{ $foot ?? '' }}


<!-- /Payment and copyright  -->
<script type="module" src="resources/js/script.js"></script>
</body>
</html>

