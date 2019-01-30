@extends('layouts.app')

@section('content')
  <div class="card">
    <div class="card-content">
      <span class="card-title">{{ config('app.name', 'Laravel') }}</span>
      <a class="btn" href="https://laravel.com/docs">Documentation</a>
      <a class="btn" href="https://laracasts.com">Laracasts</a>
      <a class="btn" href="https://laravel-news.com">News</a>
      <a class="btn" href="https://forge.laravel.com">Forge</a>
      <a class="btn" href="https://github.com/laravel/laravel">GitHub</a>
    </div>
  </div>
  <div id="example"></div>
@endsection
