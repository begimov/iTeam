@extends('layouts.app')

@section('title')
    <title>{{ $page->name }}</title>
@endsection

@section('content')
<div class="container-fluid mb-5 p-0 page-container">
  @foreach ($page->elements as $element)
    @include('pages.page.blocks.' . $element->block->view)
  @endforeach
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
