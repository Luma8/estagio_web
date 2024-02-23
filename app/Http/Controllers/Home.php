<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class Home extends Controller
{
    public function index() {
        return Inertia::render('User/List');
    }
}
