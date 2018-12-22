<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,900,900i&amp;subset=cyrillic" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lora:700&amp;subset=cyrillic" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&amp;subset=cyrillic" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

@yield('title')
@yield('meta_tags')
<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<link href="/img/favicon.ico" rel="shortcut icon" type="image/x-icon">