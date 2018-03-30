@extends('layouts.app')

@section('content')
<div class="container my-5">
  @foreach ($page->elements as $element)
    @include('pages.page.blocks.' . $element->block->view)
  @endforeach
</div>
@endsection
