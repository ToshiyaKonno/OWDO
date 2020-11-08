@extends('layouts.app')
@section('title','約束事項')

@section('content')

<main role="main" class="inner cover">
    <h1 class="cover-heading">お約束事項</h1>
    <p class="lead">ここに家族で決めたお約束事項を記入してください</p>
    <p class="lead">
    @auth
    <p>
    <a class="btn btn-secondary" href="{{route('yakusoku.show', Auth::id() )}}" role="button">
    お約束事項を確認する
    </a></p>
@endauth
@guest
<p>
<a class="btn btn-secondary" href="{{route('yakusoku.show', 1 )}}" role="button">
お約束事項を確認する
</a></p>

@endguest
    </p>
</main>
    

@endsection