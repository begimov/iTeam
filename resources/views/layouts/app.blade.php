<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  @include('layouts.partials._head')
</head>
<body>
  <div id="app">
    @include('layouts.partials._header')
    @include('layouts.partials._navigation')
    @yield('content')
    @include ('layouts.partials._footer')
  </div>
  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
