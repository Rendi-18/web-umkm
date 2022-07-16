<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function agenda()
    {

        $agendas = Agenda::latest();
        if (request('search')) {
            $agendas->where('name', 'like', '%' . request('search') . '%');
        }

        return view(
            'pages.agenda.index',
            [
                'agendas' => $agendas
            ]
        );
    }

    public function detail(Agenda $agenda)
    {
        return view(
            'pages.agenda.detail',
            [
                'agenda' => $agenda
            ]
        );
    }
}
