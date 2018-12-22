@extends('layouts.app') 

@section('title')
    <title>iTeam.ru - @lang('partials.search.results')</title>
@endsection

@section('meta_tags')
  <meta name="description" content="Бизнес-процессы, стратегия, оргструктура, финансовое управление, управление персоналом, мотивация, управленческий учет. Обучение для собственников бизнеса и руководителей компании. Мастер-классы по бизнесу и управлению онлайн. Консалтинг." />
  <meta name="keywords" content="Бизнес-процессы, стратегия, оргструктура, финансовое управление, управление персоналом, мотивация, управленческий учет, консалтинговая компания, мастер классы для руководителей, консалтинговые услуги, мастер классы для топ менеджеров, управленческий консалтинг, обучение руководителей, обучение для руководителей цена, разработка системы мотивации сотрудников, услуги консалтинга" />
@endsection

@section('content')
<div class="container my-5">
  <div class="row">
    <div class="col">
      <h2 class="mb-4">@lang('partials.search.results')</h2>
    </div>
  </div>

  @if ($pages->count() > 0)
    @foreach ($pages as $page)
      <div class="row mb-4">
        <div class="col">
          <h4><a href="{{ route('pages.show', $page->slug) }}">{{ $page->name }}</a></h4>
          <p class="m-0">{{ $page->description }}</p>
        </div>
      </div>    
    @endforeach
    <div class="row">
      <div class="col">
        <nav aria-label="Page navigation example">
          {{ $pages->links() }}
        </nav>
      </div>
    </div>
  @else
    <div class="row">
      <div class="col">@lang('partials.search.notfound')</div>
    </div>
  @endif
</div>
@endsection