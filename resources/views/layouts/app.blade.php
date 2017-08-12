<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include ('layouts.partials._head')
</head>
<body>
    @include ('layouts.partials._header')

    @include ('layouts.partials._navigation')

    @yield ('content')

    @include ('layouts.partials._footer')
    
    @include ('layouts.partials._scripts')
</body>
</html>
