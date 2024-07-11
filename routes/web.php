<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginasController;
use App\Http\Controllers\ContactoController;


Route::get('/', function () {
    return view('principal');
});
Route::get('/gracias', [PaginasController::class, 'gracias']);
Route::get('/aviso-de-privacidad', [PaginasController::class, 'privacidad']);
Route::get('/bombas', [PaginasController::class, 'bombas']);
Route::get('/bombas/bombas-calpeda', [PaginasController::class, 'bombas_calpeda']);
Route::get('/bombas/bombas-neumaticas', [PaginasController::class, 'bombas_neumaticas']);
Route::get('/bombas/bombas-centrifugas-calpeda', [PaginasController::class, 'bombas_centrifugas_calpeda']);
Route::get('/bombas/bombas-centrifugas-calpeda/bombas-calpeda-agricultura-y-riego', [PaginasController::class, 'bombas_centrifugas_calpeda_agriculturayriego']);
Route::get('/bombas/bombas-centrifugas-calpeda/bombas-calpeda-agricultura-y-riego/bombas-calpeda-bombas-sumergibles-de-pozo-profundo', [PaginasController::class, 'bombas_calpeda_bombas_sumergibles_de_pozo_profundo']);
Route::get('/bombas/bombas-centrifugas-calpeda/bombas-para-industria-bombas-centrifugas-monobloc-bombas-multicelulares-horizontales', [PaginasController::class, 'bombas_centrifugas_monobloc_bombas_multicelulares_horizontales']);






