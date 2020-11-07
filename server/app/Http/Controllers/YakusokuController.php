<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class YakusokuController extends Controller
{
    public function index()
    {
        return view('yakusoku.index');
    }
    public function show($id){
        $user = Auth::user();
        return view('yakusoku.show',['user' => $user]);
    }
    public function edit($id) {
        $user = Auth::user();
        return view('yakusoku.edit', ['user' => $user]);
    }
    public function update(Request $request, $id) {
        // ここはidで探して持ってくる以外はstoreと同じ        
        $user = User::find($id);
         // 値の用        
        $user->yakusoku = $request->yakusoku;

        // 保存
        $user->save();
        // 登録したらindexに戻る
        return view('yakusoku.index');
    }
}
