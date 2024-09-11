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
Route::get('/bombas/bombas-centrifugas-calpeda/bombas-para-industria-bombas-centrifugas-monobloc-bombas-multicelulares-horizontales/bombas-calpeda-circuitos-de-transferencia-de-calor-y-refrigeracion', [PaginasController::class, 'bombas_calpeda_circuitos_de_transferencia_de_calor']);


// New Routes
Route::get('/bombas/bombas-centrifugas-calpeda/bombas-para-industria-bombas-centrifugas-monobloc-bombas-multicelulares-horizontales/bombas-calpeda-maquinaria-y-equipos-oem', [PaginasController::class, 'bombas_calpeda_maquinaria_y_equipos_oem']);
Route::get('/bombas/bombas-centrifugas-calpeda/bombas-para-industria-bombas-centrifugas-monobloc-bombas-multicelulares-horizontales/bombas-calpeda-maquinaria-y-equipos-oem/accesories-smat', [PaginasController::class, 'bombas_calpeda_maquinaria_y_equipos_oem_accesories_smat']);
Route::get('/bombas/bombas-centrifugas-calpeda/bombas-para-industria-bombas-centrifugas-monobloc-bombas-multicelulares-horizontales/bombas-calpeda-maquinaria-y-equipos-oem/ariamat-accessoires', [PaginasController::class, 'bombas_calpeda_maquinaria_y_equipos_oem_ariamat_accessoires']);
Route::get('/bombas/bombas-centrifugas-calpeda/bombas-para-industria-bombas-centrifugas-monobloc-bombas-multicelulares-horizontales/bombas-calpeda-maquinaria-y-equipos-oem/ct-bomba-con-rodete-periferico', [PaginasController::class, 'bombas_calpeda_maquinaria_y_equipos_oem_ct_bomba_con_rodete_periferico']);
Route::get('/bombas/bombas-centrifugas-calpeda/bombas-para-industria-bombas-centrifugas-monobloc-bombas-multicelulares-horizontales/bombas-calpeda-maquinaria-y-equipos-oem/t-tp-bombas-con-rodete-periferico', [PaginasController::class, 'bombas_calpeda_maquinaria_y_equipos_oem_t_tp_bombas_con_rodete_periferico']);
Route::get('/bombas/bombas-centrifugas-calpeda/bombas-para-industria-bombas-centrifugas-monobloc-bombas-multicelulares-horizontales/tratamiento-de-aguas-residuales', [PaginasController::class, 'tratamiento_de_aguas_residuales']);
Route::get('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica', [PaginasController::class, 'bombas_para_obra_civil_y_urbanistica']);
Route::get('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-drenaje-y-tratamiento-de-aguas', [PaginasController::class, 'bombas_drenaje_y_tratamiento_de_aguas']);
Route::get('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-drenaje-y-tratamiento-de-aguas/bombas-sumergibles-con-sistema-triturador', [PaginasController::class, 'bombas_sumergibles_con_sistema_triturador']);
Route::get('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-drenaje-y-tratamiento-de-aguas/bomba-sumergible-de-acero-inoxidable-gxr-gxv', [PaginasController::class, 'bomba_sumergible_de_acero_inoxidable_gxr_gxv']);
Route::get('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-drenaje-y-tratamiento-de-aguas/bomba-sumergible-para-achiques-gqr', [PaginasController::class, 'bomba_sumergible_para_achiques_gqr']);
Route::get('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-drenaje-y-tratamiento-de-aguas/bombas-centrifugas-autocebantes-con-rodete-abierto-a', [PaginasController::class, 'bombas_centrifugas_autocebantes_con_rodete_abierto_a']);
Route::get('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-drenaje-y-tratamiento-de-aguas/bombas-sumergibles-gm', [PaginasController::class, 'bombas_sumergibles_gm']);
Route::get('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-drenaje-y-tratamiento-de-aguas/bombas-sumergibles-de-acero-inoxidable-para-aguas-sucias-gx40', [PaginasController::class, 'bombas_sumergibles_de_acero_inoxidable_para_aguas_sucias_gx40']);
Route::get('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-drenaje-y-tratamiento-de-aguas/bombas-sumergibles-de-caña-vertical-val-sc', [PaginasController::class, 'bombas_sumergibles_de_cana_vertical_val_sc']);
Route::get('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-drenaje-y-tratamiento-de-aguas/bombas-sumergibles-para-aguas-sucias-gm-50', [PaginasController::class, 'bombas_sumergibles_para_aguas_sucias_gm_50']);
Route::get('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-drenaje-y-tratamiento-de-aguas/bombas-sumergibles-para-aguas-sucias-gqs-gqv', [PaginasController::class, 'bombas_sumergibles_para_aguas_sucias_gqs_gqv']);
Route::get('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-drenaje-y-tratamiento-de-aguas/geo-estacion-automatica-de-recogida-y-elevacion-de-aguas-sucias', [PaginasController::class, 'geo_estacion_automatica_de_recogida_y_elevacion_de_aguas_sucias']);
Route::get('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-drenaje-y-tratamiento-de-aguas/geotrit-geoclean-geocomp', [PaginasController::class, 'geotrit_geoclean_geocomp']);
Route::get('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-drenaje-y-tratamiento-de-aguas/bomba-sumergible-para-achiques-gm-0', [PaginasController::class, 'bomba_sumergible_para_achiques_gm_0']);

// New Routes
Route::get('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-calpeda-presurizacion', [PaginasController::class, 'bombas_calpeda_presurizacion']);
Route::get('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-calpeda-presurizacion/accesorios-bombas-acsr', [PaginasController::class, 'bombas_calpeda_presurizacion_accesorios_bombas_acsr']);
Route::get('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-calpeda-presurizacion/ca-bombas-presurizacion', [PaginasController::class, 'bombas_calpeda_presurizacion_ca_bombas_presurizacion']);
Route::get('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-calpeda-presurizacion/bombas-multicelulares-horizontales-monobloc-mgp', [PaginasController::class, 'bombas_calpeda_presurizacion_bombas_multicelulares_horizontales_monobloc_mgp']);
Route::get('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-calpeda-presurizacion/mxs-bombas-sumergibles-multicelulares-para-agua-limpia', [PaginasController::class, 'bombas_calpeda_presurizacion_mxs_bombas_sumergibles_multicelulares_para_agua_limpia']);
Route::get('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-calpeda-presurizacion/ng-bombas-autoaspirantes-jet', [PaginasController::class, 'bombas_calpeda_presurizacion_ng_bombas_autoaspirantes_jet']);
Route::get('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-calpeda-presurizacion/bombas-autoaspirantes-jet-ngx', [PaginasController::class, 'bombas_calpeda_presurizacion_bombas_autoaspirantes_jet_ngx']);
Route::get('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-calpeda-presurizacion/bombas-centrifugas-monobloc-con-orificios-roscados-nm-nmd', [PaginasController::class, 'bombas_calpeda_presurizacion_bombas_centrifugas_monobloc_con_orificios_roscados_nm_nmd']);
Route::get('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-calpeda-presurizacion/bombas-multicelulares-horizontales-monobloc-mxp', [PaginasController::class, 'bombas_calpeda_presurizacion_bombas_multicelulares_horizontales_monobloc_mxp']);
Route::get('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-calpeda-presurizacion/bombas-multicelulares-horizontales-monobloc-de-acero-inoxidable-mxh', [PaginasController::class, 'bombas_calpeda_presurizacion_bombas_multicelulares_horizontales_monobloc_de_acero_inoxidable_mxh']);
Route::get('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-calpeda-presurizacion/bombas-multicelulares-verticales-in-line-mxv', [PaginasController::class, 'bombas_calpeda_presurizacion_bombas_multicelulares_verticales_in_line_mxv']);
Route::get('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-calpeda-presurizacion/bombas-multicelulares-verticales-monobloc-mxv-b', [PaginasController::class, 'bombas_calpeda_presurizacion_bombas_multicelulares_verticales_monobloc_mxv_b']);
Route::get('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-calpeda-presurizacion/bombas-sumergibles-multicelulares-para-agua-limpia-mps', [PaginasController::class, 'bombas_calpeda_presurizacion_bombas_sumergibles_multicelulares_para_agua_limpia_mps']);
Route::get('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-calpeda-presurizacion/bombas-verticales-de-acoplamiento-corto-de-etapas-multiples-mpsu', [PaginasController::class, 'bombas_calpeda_presurizacion_bombas_verticales_de_acoplamiento_corto_de_etapas_multiples_mpsu']);
Route::get('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-calpeda-presurizacion/bs-grupos-de-presion-con-bombas-de-velocidad-fija-y-variable', [PaginasController::class, 'bombas_calpeda_presurizacion_bs_grupos_de_presion_con_bombas_de_velocidad_fija_y_variable']);
Route::get('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-calpeda-presurizacion/cs-cs-r-fk-motores-sumergidos', [PaginasController::class, 'bombas_calpeda_presurizacion_cs_cs_r_fk_motores_sumergidos']);
Route::get('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-calpeda-presurizacion/easymat-sistema-de-velocidad-variable-dirigido-por-inversor', [PaginasController::class, 'bombas_calpeda_presurizacion_easymat_sistema_de_velocidad_variable_dirigido_por_inversor']);
Route::get('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-calpeda-presurizacion/idromat-regulador-electronico-para-bombas', [PaginasController::class, 'bombas_calpeda_presurizacion_idromat_regulador_electronico_para_bombas']);
Route::get('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-calpeda-presurizacion/multi-stage-submersible-pumps-mp', [PaginasController::class, 'bombas_calpeda_presurizacion_multi_stage_submersible_pumps_mp']);
Route::get('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-calpeda-presurizacion/mxa-bombas-multicelulares-autoaspirantes', [PaginasController::class, 'bombas_calpeda_presurizacion_mxa_bombas_multicelulares_autoaspirantes']);
Route::get('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-calpeda-presurizacion/ngl-bombas-autoaspirantes-jet', [PaginasController::class, 'bombas_calpeda_presurizacion_ngl_bombas_autoaspirantes_jet']);
Route::get('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-calpeda-presurizacion/ngx-bombas-autoaspirantes-jet', [PaginasController::class, 'bombas_calpeda_presurizacion_ngx_bombas_autoaspirantes_jet']);
Route::get('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-calpeda-presurizacion/sd-bombas-sumergibles-para-pozos-de-4-y-6', [PaginasController::class, 'bombas_calpeda_presurizacion_sd_bombas_sumergibles_para_pozos_de_4_y_6']);
Route::get('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-calpeda-presurizacion/sds-bombas-sumergibles-para-pozos-de-6-8-y-0', [PaginasController::class, 'bombas_calpeda_presurizacion_sds_bombas_sumergibles_para_pozos_de_6_8_y_0']);
Route::get('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-calpeda-presurizacion/sdx-bombas-sumergibles-de-acero-inoxidable-para-pozos-de-6-y-8', [PaginasController::class, 'bombas_calpeda_presurizacion_sdx_bombas_sumergibles_de_acero_inoxidable_para_pozos_de_6_y_8']);
Route::get('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-calpeda-presurizacion/sistema-de-velocidad-variable-a-traves-de-variador-de-frecuencia-imat', [PaginasController::class, 'bombas_calpeda_presurizacion_sistema_de_velocidad_variable_a_traves_de_variador_de_frecuencia_imat']);
Route::get('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-calpeda-presurizacion/sistema-presurizado-con-control-de-presion-integrado-e-max', [PaginasController::class, 'bombas_calpeda_presurizacion_sistema_presurizado_con_control_de_presion_integrado_e_max']);

// Nuevas rutas generadas
Route::get('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-calpeda-presurizacion/sistema-presurizado-con-control-de-presion-integrado-bomba-autocebante-e-ngx', [PaginasController::class, 'sistema_presurizado_con_control_de_presion_integrado_bomba_autocebante_e_ngx']);
Route::get('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-calpeda-presurizacion/variomat-sistema-de-velocidad-variable-dirigido-por-inversor', [PaginasController::class, 'variomat_sistema_de_velocidad_variable_dirigido_por_inversor']);
Route::get('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-calpeda-recirculacion-y-climatizacion', [PaginasController::class, 'bombas_calpeda_recirculacion_y_climatizacion']);
Route::get('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-calpeda-recirculacion-y-climatizacion/bombas-centrifugas-con-rodete-abierto-c', [PaginasController::class, 'bombas_centrifugas_con_rodete_abierto_c']);
Route::get('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-calpeda-recirculacion-y-climatizacion/bombas-centrifugas-de-aspiracion-axial-segun-norma-europea-en-733-n-n4', [PaginasController::class, 'bombas_centrifugas_de_aspiracion_axial_segun_norma_europea_en_733_n_n4']);
Route::get('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-calpeda-recirculacion-y-climatizacion/bombas-centrifugas-monobloc-con-bridas-nm-nms', [PaginasController::class, 'bombas_centrifugas_monobloc_con_bridas_nm_nms']);

Route::get('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-calpeda-recirculacion-y-climatizacion/duplicado-bombas-multicelulares-horizontales-monobloc-de-acero-inoxidable-mxh-2427', [PaginasController::class, 'duplicado_bombas_multicelulares_horizontales_monobloc_de_acero_inoxidable_mxh_2427']);
Route::get('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-calpeda-recirculacion-y-climatizacion/bombas-circulantes-de-tres-velocidades-con-puertos-roscados-nc3', [PaginasController::class, 'bombas_circulantes_de_tres_velocidades_con_puertos_roscados_nc3']);
Route::get('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-calpeda-recirculacion-y-climatizacion/bombas-circulares-de-bajo-consumo-con-bridas-nce-hqf', [PaginasController::class, 'bombas_circulares_de_bajo_consumo_con_bridas_nce_hqf']);
Route::get('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-calpeda-recirculacion-y-climatizacion/bombas-circulares-gemelas-de-ahorro-energetico-con-bridas-nced-hqf', [PaginasController::class, 'bombas_circulares_gemelas_de_ahorro_energetico_con_bridas_nced_hqf']);
Route::get('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-calpeda-recirculacion-y-climatizacion/bombas-con-rodete-periferico-t-tp', [PaginasController::class, 'bombas_con_rodete_periferico_t_tp']);

Route::get('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-calpeda-recirculacion-y-climatizacion/bombas-multicelulares-horizontales-monobloc-de-acero-inoxidable-mxh', [PaginasController::class, 'bombas_multicelulares_horizontales_monobloc_de_acero_inoxidable_mxh']);
Route::get('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-calpeda-recirculacion-y-climatizacion/c-bombas-centrifugas-con-rodete-abierto', [PaginasController::class, 'c_bombas_centrifugas_con_rodete_abierto']);
Route::get('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-calpeda-recirculacion-y-climatizacion/circuladora-electronica-de-bajo-consuno-energetico-nce-h', [PaginasController::class, 'circuladora_electronica_de_bajo_consumo_energetico_nce_h']);
Route::get('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-calpeda-recirculacion-y-climatizacion/circuladoras-electronicas-gemelas-de-bajo-consumo-energetico-embridadas-nce-hf', [PaginasController::class, 'circuladoras_electronicas_gemelas_de_bajo_consumo_energetico_embridadas_nce_hf']);
Route::get('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-calpeda-recirculacion-y-climatizacion/ncd3-bombas-gemelas-circulantes-de-tres-velocidades-con-puertos-roscados', [PaginasController::class, 'ncd3_bombas_gemelas_circulantes_de_tres_velocidades_con_puertos_roscados']);
Route::get('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-calpeda-recirculacion-y-climatizacion/nce-ei-bombas-circuladoras-de-bajo-consumo', [PaginasController::class, 'nce_ei_bombas_circuladoras_de_bajo_consumo']);
Route::get('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-calpeda-recirculacion-y-climatizacion/nce-el-circuladoras-electronicas-para-placas-solares-de-bajo-consumo-energetico', [PaginasController::class, 'nce_el_circuladoras_electronicas_para_placas_solares_de_bajo_consumo_energetico']);

// Nuevas rutas generadas
Route::get('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-calpeda-recirculacion-y-climatizacion/nce-gf-circuladoras-electronicas-gemelas-de-bajo-consumo-energetico-embridadas', [PaginasController::class, 'nce_gf_circuladoras_electronicas_gemelas_de_bajo_consumo_energetico_embridadas']);

Route::get('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-calpeda-recirculacion-y-climatizacion/nce-h-circuladora-electronica-de-bajo-consuno-energetico', [PaginasController::class, 'nce_h_circuladora_electronica_de_bajo_consuno_energetico']);

Route::get('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-calpeda-recirculacion-y-climatizacion/nce-hf-circuladoras-electronicas-gemelas-de-bajo-consumo-energetico-embridadas', [PaginasController::class, 'nce_hf_circuladoras_electronicas_gemelas_de_bajo_consumo_energetico_embridadas']);

Route::get('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-calpeda-recirculacion-y-climatizacion/nce-hqf-bombas-circulares-de-bajo-consumo-con-bridas', [PaginasController::class, 'nce_hqf_bombas_circulares_de_bajo_consumo_con_bridas']);

Route::get('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-calpeda-recirculacion-y-climatizacion/nced-gf-circuladoras-electronicas-gemelas-de-bajo-consumo-energetico-embridadas', [PaginasController::class, 'nced_gf_circuladoras_electronicas_gemelas_de_bajo_consumo_energetico_embridadas']);

Route::get('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-calpeda-recirculacion-y-climatizacion/nced-hqf-bombas-circulares-gemelas-de-ahorro-energetico-con-bridas', [PaginasController::class, 'nced_hqf_bombas_circulares_gemelas_de_ahorro_energetico_con_bridas']);

Route::get('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-calpeda-recirculacion-y-climatizacion/t-tp-bombas-con-rodete-periferico', [PaginasController::class, 't_tp_bombas_con_rodete_periferico']);

Route::get('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-de-recirculacion-y-alimentacion-de-circuitos-hvac', [PaginasController::class, 'bombas_de_recirculacion_y_alimentacion_de_circuitos_hvac']);

Route::get('/bombas/bombas-centrifugas-calpeda/bombas-para-riego-agricola', [PaginasController::class, 'bombas_para_riego_agricola']);

Route::get('/bombas/sellos-mecanicos-calpeda', [PaginasController::class, 'sellos_mecanicos_calpeda']);

Route::get('/bombas-calpeda-sistemas-contra-incendio-2', [PaginasController::class, 'bombas_calpeda_sistemas_contra_incendio']);

Route::get('/bombas-calpeda-sistemas-contra-incendio-2/ej-edj-dj-sistemas-de-lucha-contra-incendios-uni-en-2845', [PaginasController::class, 'ej_edj_dj_sistemas_de_lucha_contra_incendios_uni_en_2845']);

Route::get('/', [PaginasController::class, 'home']);

Route::get('/servicios-mantenimiento-y-asesoria-industrial', [PaginasController::class, 'servicios_mantenimiento_y_asesoria_industrial']);

Route::get('/servicios-mantenimiento-y-asesoria-industrial/bombas-centrifugas', [PaginasController::class, 'bombas_centrifugas']);

Route::get('/servicios-mantenimiento-y-asesoria-industrial/consultoria-y-capacitacion-tecnica', [PaginasController::class, 'consultoria_y_capacitacion_tecnica']);

Route::get('/servicios-mantenimiento-y-asesoria-industrial/hidraulico-mecanico', [PaginasController::class, 'hidraulico_mecanico']);

Route::get('/servicios-mantenimiento-y-asesoria-industrial/maquinados-y-metalizados', [PaginasController::class, 'maquinados_y_metalizados']);

Route::get('/servicios-mantenimiento-y-asesoria-industrial/servicio-de-mantenimiento', [PaginasController::class, 'servicio_de_mantenimiento']);

Route::get('/servicios-mantenimiento-y-asesoria-industrial/sistemas-hidraulicos-lineales-y-rotativos', [PaginasController::class, 'sistemas_hidraulicos_lineales_y_rotativos']);

Route::get('/contacto', [PaginasController::class, 'contacto']);

Route::get('/kits-maquinaria-industrial-sellos-hidraulicos', [PaginasController::class, 'kits_maquinaria_industrial_sellos_hidraulicos']);

Route::get('/blog-bsh', [PaginasController::class, 'blog_bsh']);

Route::get('/blog-bsh/catalogos-del-fabricante', [PaginasController::class, 'catalogos_del_fabricante']);

Route::get('/blog-bsh/presentaciones', [PaginasController::class, 'presentaciones']);
