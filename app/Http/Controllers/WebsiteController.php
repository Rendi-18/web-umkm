<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        return view(
            'dashboard.pages.website',
            [
                // 'title' => '',
            ]
        );
    }
}
