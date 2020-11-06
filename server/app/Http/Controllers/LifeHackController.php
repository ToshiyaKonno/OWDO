<?php

namespace App\Http\Controllers;

// LifeHackクラスを読み込む
use App\LifeHack;

use Illuminate\Http\Request;

class LifeHackController extends Controller
{
        // showページへ移動
    public function show($id)
    {
        $lifehack = LifeHack::find($id);
        return view('lifehack.show', compact('lifehack'));
    }
    public function index(){
        $lifehacks =LifeHack::all();
        return view('lifehack.index',compact('lifehacks'));
    }

}
