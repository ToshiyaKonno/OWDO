<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

use PDF;

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

        return Storage::download('private/checklist.pdf', $filename, $headers);

    }
}
