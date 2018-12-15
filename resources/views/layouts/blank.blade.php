<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  @include('layouts.partials._head')
  @yield('head_scripts')
</head>
<body class="bg-light">
  @yield('scripts')
  <div id="app">
    <div v-cloak>
      @include('layouts.partials.alerts._alerts')
      @yield('content')
    </div>
  </div>
  @include ('layouts.partials._scripts')
  <script>
    jQuery(document).ready(function() {
      @yield('postJquery')
    });
  </script>
</body>
</html>
