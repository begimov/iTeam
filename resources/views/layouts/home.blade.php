<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  @include ('layouts.partials._head')
</head>
<body>

  <div class="app">

    <section class="section">
      @include ('layouts.partials._header')
    </section>

    @include ('layouts.partials._navigation')

    @yield ('content')

    <footer class="footer">
      <div class="content">
        @include ('layouts.partials._footer')
      </div>
    </footer>

  </div>

  @include ('layouts.partials._scripts')

</body>
</html>
