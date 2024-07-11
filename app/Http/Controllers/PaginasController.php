<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginasController extends Controller
{
    //
    public function gracias()
    {
        return view('gracias');
    }
    public function privacidad()
    {
        return view('aviso-de-privacidad');
    }
    public function bombas()
    {
        return view('bombas');
    }
    public function bombas_calpeda()
    {
        return view('bombas-calpeda');
    }
    public function bombas_neumaticas()
    {
        return view('bombas-neumaticas');
    }
    public function bombas_centrifugas_calpeda()
    {
        return view('bombas-centrifugas-calpeda');
    }
    public function bombas_centrifugas_calpeda_agriculturayriego()
    {
        return view('bombas-centrifugas-calpeda-agricultura-y-riego');
    }
    public function bombas_calpeda_bombas_sumergibles_de_pozo_profundo()
    {
        return view('bombas-calpeda-bombas-sumergibles-de-pozo-profundo');
    }
    public function bombas_centrifugas_monobloc_bombas_multicelulares_horizontales()
    {
        return view('bombas-centrifugas-monobloc-bombas-multicelulares-horizontales');
    }
}
