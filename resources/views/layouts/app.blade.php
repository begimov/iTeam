<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  @include('layouts.partials._head')
</head>
<body class="bg-light">
  <div id="app">
    @include('layouts.partials._header')
    @include('layouts.partials._navigation')
    @yield('content')
    @include ('layouts.partials._footer')
  </div>
  @include ('layouts.partials._scripts')
  <script>
    jQuery(document).ready(function() {
      @yield('postJquery');
    });
  </script>
</body>
</html>
