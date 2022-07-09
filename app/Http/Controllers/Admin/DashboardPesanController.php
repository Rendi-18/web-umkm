<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Agenda;
use App\Models\Pesan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardPesanController extends Controller
{
    // Index GET
    public function index()
    {
        return view(
            'dashboard.pages.pesan.index',
            [
                'pesans' =>  Pesan::latest()->get()
            ]
        );
    }

    // View GET
    public function view(Pesan $pesan)
    {
        return view(
            'dashboard.pages.pesan.detail',
            [
                'pesan' => $pesan
            ]
        );
    }

    // Store POST
    public function store(Request $request)
    {
        // return $request;
        $validatedData = $request->validate([
            'name' => 'required',
            'subject' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);

        Pesan::create($validatedData);

        return redirect('/')->with('success', 'New Pesan has been sended!');
    }

    // Delete DELETE
    public function destroy(Pesan $pesan)
    {

        Pesan::destroy($pesan->id);
        return redirect('/dashboard/pesan')->with('success', 'Pesan telah dihapus');
    }
}
