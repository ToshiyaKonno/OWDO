{{-- app.baladeから継承 --}}
@extends('layouts.app')

@section('title', '詳細画面')

@section('content')


@include('layouts.lifehack', compact('lifehack'))
            <table class="table-bordered mb-5 mt-3">
            <colgroup span="1" style="width:200px;background-color:#efefef;"></colgroup>
        <tbody>
            <tr>
                <th>タイトル</th><p> {{ $lifehack->recommend  }} 
                <td>
                    
                    <p>{{ $lifehack->title }}</p>
                </td>
            </tr>
            <tr>
                <th>内容</th>
                <td>{{ $lifehack->description }}</td>
                
        </tbody>
    </table>
    {{-- actionタグは関係なくルーティング出来る --}}
    <a href= {{url('lifehack')}} >戻る</a>   
@endsection