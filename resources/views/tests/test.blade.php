@extends('layouts.app')

@section('title')
    <title>Тест</title>
@endsection

@section('content')
  <iteam-test :test-id="{{ $id }}" class="my-5" />
@endsection
