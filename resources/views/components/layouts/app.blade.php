<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ $title }} | Desa Alamendah</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bungee&family=Inter:wght@100..900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('/css/output.css') }}">
</head>
<body>
  <x-layouts.nav2 />
  <x-layouts.nav />
  {{ $slot }}
  <x-layouts.footer />
  <script src="{{ asset('js/select-ops.js') }}"></script>
  <script src="{{ asset('js/dropdown.js') }}"></script>
  <script src="{{ asset('js/carousel.js') }}"></script>
  <script src="{{ asset('js/qna.js') }}"></script>
  @if(Request::routeIs('main.index'))
    <script src="{{ asset('js/time.js') }}"></script>
  @endif
</body>
</html>