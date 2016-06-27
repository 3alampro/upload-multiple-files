<?php

namespace App\Http\Controllers;

use App\Http\Requests\UploadFiles;

class HomeController extends Controller
{
    public function store(UploadFiles $request)
    {
        dd($request);
    }
}
