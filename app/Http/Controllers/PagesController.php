<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $data = [
            'title' => 'Services'
        ];
        $title = 'Welcome to Laravel';
        return view('pages.index')->with($data);
    }
}
