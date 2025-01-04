<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class AboutController extends Controller
{
    public function index(): View
    {
        return view('about.index');
    }
}