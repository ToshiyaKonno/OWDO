@extends('layouts.app')
{{-- app.baladeから継承 --}}
@section('title', '一覧画面')

@section('content')

    <ul>
        @foreach ($lifehacks as $lifehack)
            <li class="list-unstyled border mb-5 pl-3 shadow" > 
            @include('layouts.lifehack', compact('lifehack'))
            </li>
        @endforeach
    </ul>    
    <div class="d-flex justify-content-center">
        {{-- {{ $lifehacks->links() }} --}}
    </div>
    </div>
@endsection