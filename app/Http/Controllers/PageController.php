<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostManRequest;

class PageController extends Controller
{
    //
    public function index(PostManRequest $request)
    {
        return "pase la validación";
    }
}