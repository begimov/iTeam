@extends('layouts.app')

@section('content')
<div class="container my-5 page-container">
  @foreach ($page->elements as $element)
    @include('pages.page.blocks.' . $element->block->view)
  @endforeach
</div>
@endsection
