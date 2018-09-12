@extends('layouts.app')

@section('title')
    <title>{{ $test->name }}</title>
@endsection

@section('content')
  <div><iteam-test :test-id="{{ $test->id }}" class="my-5" /></div>
@endsection
