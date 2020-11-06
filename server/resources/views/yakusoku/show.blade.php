@extends('layouts.app')
@section('title','約束事項')

@section('content')

<b>お約束事項：{{$user->yakusoku}}</b>
<a href="{{Auth::id()}}/edit">編集</a>

    <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
    </form>
@endsection