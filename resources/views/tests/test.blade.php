@extends('layouts.app')

@section('title')
    <title>{{ $test->name }}</title>
@endsection

@section('content')
  <iteam-test :test-id="{{ $test->id }}" class="my-5" />
@endsection
