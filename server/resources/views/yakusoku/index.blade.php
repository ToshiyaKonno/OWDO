@extends('layouts.app')
@section('title','約束事項')

@section('content')
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

@endsection