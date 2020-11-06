@extends('layouts.app')
@section('title','約束事項')

@section('content')
<form action="/yakusoku/{{$user->id}}" method="post">
@csrf
<!-- resourceの場合PUTを指定してあげないとエラーが起きる php artisan rote:listで確認② -->
@method('PUT')
<!-- idはそのまま -->
<input type="hidden" name="id" value="{{ $user->id }}">
    <p>
        商品詳細：<br>
        <input type="text" name="yakusoku" value="{{ $user->yakusoku }}">
    </p>
    <input type="submit" value="更新" >
</form>
@endsection