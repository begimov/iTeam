<?php

namespace App\Http\Controllers\Webapi\Content;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FileController extends Controller
{
    public function show($name)
    {
        dd($name);
    }
}