@extends('layouts.app')

@section('title')
    <title>{{ $page->name }}</title>
@endsection

@section('content')
<div class="container-fluid p-0 page-container">
  @foreach ($page->elements as $element)
    @include('pages.page.blocks.' . $element->block->view)
  @endforeach
</div>

@include('pages.page.partials.videoreviews')

@section('scripts')
  <div id="fb-root"></div>
  <script>
      (function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = 'https://connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.11&appId=172848616127295';
          fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
  </script>
@endsection

<!--<div class="container">
    <div class="row my-4">
      <div class="col">
		    <div class="fb-comments" data-href="{{ url()->current() }}" data-width="100%" data-numposts="10"></div>
      </div>
    </div>
</div>-->

<div class="container">
  <div class="row my-4">
    <div class="col">
      <div id="mc-container"></div>
      <script type="text/javascript">
      cackle_widget = window.cackle_widget || [];
      cackle_widget.push({widget: 'Comment', id: 63044});
      (function() {
          var mc = document.createElement('script');
          mc.type = 'text/javascript';
          mc.async = true;
          mc.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://cackle.me/widget.js';
          var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(mc, s.nextSibling);
      })();
      </script>
    </div>
  </div>
</div>

<div class="container mb-5 page-container">
  <div class="row text-center">
    <div class="col">
      <hr>
      <h3 class="mt-4">@lang('partials.footer.we_answer_all_questions')</h3>
      <h4 class="mt-3"><a href="{{ config('urls.mail.info') }}">@lang('partials.header.email')</a></h4>
      <h4 class="mt-3">@lang('partials.header.phone')</h4>
    </div>
  </div>
</div>
@endsection
