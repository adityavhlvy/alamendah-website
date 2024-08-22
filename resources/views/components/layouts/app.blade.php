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
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/trix.css') }}">
  <script type="text/javascript" src="{{ asset('/js/trix.js') }}"></script>
  <script type="text/javascript" src="{{ asset('/js/non_active_trix_file_feature.js') }}"></script>
</head>
<body>
  <x-layouts.nav2 />
  <x-layouts.nav />
  {{ $slot }}
  <x-layouts.footer />
  @if(Request::routeIs('main.index'))
    <script src="{{ asset('js/time.js') }}"></script>
    <script>const requestRoute = "homepage"</script>
  @endif
  @if(Request::routeIs('main.activity'))
    <script>const requestRoute = "activity"</script>
  @endif
  @if(Request::routeIs(['main.index', 'main.activity']))
    <script src="{{ asset('js/listactivities.js') }}"></script>
  @endif
  <script src="{{ asset('js/select-ops.js') }}"></script>
  <script src="{{ asset('js/dropdown.js') }}"></script>
  <script src="{{ asset('js/carousel.js') }}"></script>
  <script src="{{ asset('js/qna.js') }}"></script>
  <script src="{{ asset('js/booking.js') }}"></script>
  <script src="{{ asset('js/jquery.js') }}"></script>
  <script src="{{ asset('js/give_rate.js') }}"></script>
  <script src="{{ asset('js/translate.js') }}"></script>
  <script src="{{ asset('js/packageshow.js') }}"></script>
  @if(Request::routeIs('dashboard.blog'))
    <script src="{{ asset('js/duplicate_form_author.js') }}"></script>
  @endif
  @if(Request::routeIs('dashboard.package'))
    <script src="{{ asset('js/duplicate_form_typeactivity.js') }}"></script>
  @endif
</body>
</html>