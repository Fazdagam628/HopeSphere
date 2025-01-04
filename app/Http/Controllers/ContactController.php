<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ContactController extends Controller
{
    public function index(): View
    {
        return view('contact.index');
    }
}