<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function agenda()
    {
        return view(
            'pages.agenda.index',
            [
                'agendas' => Agenda::latest()->get()
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
