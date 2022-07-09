<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Agenda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardPesanController extends Controller
{
    // Index GET
    public function index()
    {
        return view(
            'dashboard.pages.pesan.index'
        );
    }
}
