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

<div class="container">
    <div class="row my-4">
      <div class="col">
		    <div class="fb-comments" data-href="{{ url()->current() }}" data-width="100%" data-numposts="10"></div>
      </div>
    </div>
</div>