<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    @include ('layouts.partials._head')
  </head>
  <body>

    <div class="app">
      @include ('layouts.partials._header')
      @include ('layouts.partials._navigation')
      @yield ('content')
      @include ('layouts.partials._footer')
    </div>

    @include ('layouts.partials._scripts')
    
  </body>
</html>
