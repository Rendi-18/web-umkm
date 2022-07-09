<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Agenda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardAgendaController extends Controller
{
    // Index GET
    public function index()
    {

        $agendas = Agenda::latest();

        if (request('search')) {
            $agendas->where('name', 'like', '%' . request('search') . '%')->get();
        }

        return view("dashboard.pages.agenda.index", [
            'agendas' => $agendas->get(),
        ]);
    }

    // Store POST
    public function store(Request $request)
    {
        // return $request;
        $validatedData = $request->validate([
            'name' => 'required',
            'location' => 'required',
            'date' => 'required',
            'image' => 'image|file|max:1024',
            'content' => 'required',
        ]);

        // Image
        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('agenda');
        }

        Agenda::create($validatedData);

        return redirect('/dashboard/agenda')->with('success', 'New Agenda has been added!');
    }

    // Edit GET
    public function edit(Agenda $agenda)
    {
        return view("dashboard.pages.agenda.edit", [
            'agenda' => $agenda,
        ]);
    }

    // Update PUT
    public function update(Request $request, Agenda $agenda)
    {
        $rules = [
            'name' => 'required',
            'location' => 'required',
            'date' => 'required',
            'image' => 'image|file|max:1024',
            'content' => 'required',
        ];

        $validatedData = $request->validate($rules);


        // Image
        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('agenda');
        }


        Agenda::where('id', $agenda->id)
            ->update($validatedData);

        return redirect('/dashboard/agenda')->with('success', 'Agenda has been Updated');
    }

    // Delete DELETE
    public function destroy(Agenda $agenda)
    {
        if ($agenda->image) {
            Storage::delete($agenda->image);
        }
        Agenda::destroy($agenda->id);
        return redirect('/dashboard/agenda')->with('success', 'Agenda telah dihapus');
    }
}
