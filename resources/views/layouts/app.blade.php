<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $meta_title ?? 'To Do Uygulaması' }}</title>
        <meta name="description" content="{{ $meta_description ?? 'To Do Uygulaması' }}">

        <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <script>
            var ajax_url = '{{ route('ajax') }}';
            var token = '{{ csrf_token() }}';
        </script>

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body>

        @include('partials.header')

        @yield('content')

    </body>
</html>
