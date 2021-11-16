<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="/css/app.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('realease-notes/css/flatpickr.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('realease-notes/css/trix.css') }}" rel="stylesheet" />
    @livewireStyles
</head>

<body>

    @yield('content')
</body>

<script src="{{ asset('realease-notes/js/flatpickr.js') }}"></script>
@livewireScripts
<script src="{{ asset('realease-notes/js/alpine.js') }}"></script>

<script src="{{ asset('realease-notes/js/trix.js') }}"></script>

</html>
