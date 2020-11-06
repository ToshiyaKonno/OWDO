<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class CheckListController extends Controller
{
    public function show()
    {
        return view('checklist.checklist');
    }
    public function download(Request $request)
    {
        $headers =['Content-Type'=> 'application/pdf'];
        $filename = 'checklist.pdf';
        return Storage::download(storage_path('app/public/checklist/checklist.pdf'), $filename , $headers);

    }
}
