@extends('layouts.app')

@section('content')
<div class="container-fluid mb-5 p-0 page-container">
  @foreach ($page->elements as $element)
    @include('pages.page.blocks.' . $element->block->view)
  @endforeach
</div>
@endsection
