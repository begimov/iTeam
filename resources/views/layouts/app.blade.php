<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  @include('layouts.partials._head')
</head>
<body class="bg-light">
  <div id="app">
    <div v-cloak>
      @include('layouts.partials._header')
      @include('layouts.partials._navigation')
      @yield('content')
      @include ('layouts.partials._footer')
    </div>
  </div>
  @include ('layouts.partials._scripts')
  <script>
    jQuery(document).ready(function() {
      @yield('postJquery');
    });
  </script>
</body>
</html>
