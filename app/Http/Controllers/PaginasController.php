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
    public function bombas_calpeda_circuitos_de_transferencia_de_calor()
    {
        return view('bombas-calpeda-circuitos-de-transferencia-de-calor');
    }

     // Funciones generadas para las nuevas URLs
     public function bombas_calpeda_maquinaria_y_equipos_oem()
     {
         return view('bombas-calpeda-maquinaria-y-equipos-oem');
     }
 
     public function bombas_calpeda_maquinaria_y_equipos_oem_accesories_smat()
     {
         return view('bombas-calpeda-maquinaria-y-equipos-oem-accesories-smat');
     }
 
     public function bombas_calpeda_maquinaria_y_equipos_oem_ariamat_accessoires()
     {
         return view('bombas-calpeda-maquinaria-y-equipos-oem-ariamat-accessoires');
     }
 
     public function bombas_calpeda_maquinaria_y_equipos_oem_ct_bomba_con_rodete_periferico()
     {
         return view('bombas-calpeda-maquinaria-y-equipos-oem-ct-bomba-con-rodete-periferico');
     }
 
     public function bombas_calpeda_maquinaria_y_equipos_oem_t_tp_bombas_con_rodete_periferico()
     {
         return view('bombas-calpeda-maquinaria-y-equipos-oem-t-tp-bombas-con-rodete-periferico');
     }
 
     public function tratamiento_de_aguas_residuales()
     {
         return view('tratamiento-de-aguas-residuales');
     }
 
     public function bombas_para_obra_civil_y_urbanistica()
     {
         return view('bombas-para-obra-civil-y-urbanistica');
     }
 
     public function bombas_drenaje_y_tratamiento_de_aguas()
     {
         return view('bombas-drenaje-y-tratamiento-de-aguas');
     }
 
     public function bombas_sumergibles_con_sistema_triturador()
     {
         return view('bombas-sumergibles-con-sistema-triturador');
     }
 
     public function bomba_sumergible_de_acero_inoxidable_gxr_gxv()
     {
         return view('bomba-sumergible-de-acero-inoxidable-gxr-gxv');
     }
 
     public function bomba_sumergible_para_achiques_gqr()
     {
         return view('bomba-sumergible-para-achiques-gqr');
     }
 
     public function bombas_centrifugas_autocebantes_con_rodete_abierto_a()
     {
         return view('bombas-centrifugas-autocebantes-con-rodete-abierto-a');
     }
 
     public function bombas_sumergibles_gm()
     {
         return view('bombas-sumergibles-gm');
     }
 
     public function bombas_sumergibles_de_acero_inoxidable_para_aguas_sucias_gx40()
     {
         return view('bombas-sumergibles-de-acero-inoxidable-para-aguas-sucias-gx40');
     }
 
     public function bombas_sumergibles_de_cana_vertical_val_sc()
     {
         return view('bombas-sumergibles-de-cana-vertical-val-sc');
     }
 
     public function bombas_sumergibles_para_aguas_sucias_gm_50()
     {
         return view('bombas-sumergibles-para-aguas-sucias-gm-50');
     }
 
     public function bombas_sumergibles_para_aguas_sucias_gqs_gqv()
     {
         return view('bombas-sumergibles-para-aguas-sucias-gqs-gqv');
     }
 
     public function geo_estacion_automatica_de_recogida_y_elevacion_de_aguas_sucias()
     {
         return view('geo-estacion-automatica-de-recogida-y-elevacion-de-aguas-sucias');
     }
 
     public function geotrit_geoclean_geocomp()
     {
         return view('geotrit-geoclean-geocomp');
     }
 
     public function bomba_sumergible_para_achiques_gm_0()
     {
         return view('bomba-sumergible-para-achiques-gm-0');
     }





     // Nuevas funciones generadas para los enlaces proporcionados
    public function bombas_calpeda_presurizacion()
    {
        return view('bombas-calpeda-presurizacion');
    }

    public function bombas_calpeda_presurizacion_accesorios_bombas_acsr()
    {
        return view('bombas-calpeda-presurizacion-accesorios-bombas-acsr');
    }

    public function bombas_calpeda_presurizacion_ca_bombas_presurizacion()
    {
        return view('bombas-calpeda-presurizacion-ca-bombas-presurizacion');
    }

    public function bombas_calpeda_presurizacion_bombas_multicelulares_horizontales_monobloc_mgp()
    {
        return view('bombas-calpeda-presurizacion-bombas-multicelulares-horizontales-monobloc-mgp');
    }

    public function bombas_calpeda_presurizacion_mxs_bombas_sumergibles_multicelulares_para_agua_limpia()
    {
        return view('bombas-calpeda-presurizacion-mxs-bombas-sumergibles-multicelulares-para-agua-limpia');
    }

    public function bombas_calpeda_presurizacion_ng_bombas_autoaspirantes_jet()
    {
        return view('bombas-calpeda-presurizacion-ng-bombas-autoaspirantes-jet');
    }

    public function bombas_calpeda_presurizacion_bombas_autoaspirantes_jet_ngx()
    {
        return view('bombas-calpeda-presurizacion-bombas-autoaspirantes-jet-ngx');
    }

    public function bombas_calpeda_presurizacion_bombas_centrifugas_monobloc_con_orificios_roscados_nm_nmd()
    {
        return view('bombas-calpeda-presurizacion-bombas-centrifugas-monobloc-con-orificios-roscados-nm-nmd');
    }

    public function bombas_calpeda_presurizacion_bombas_multicelulares_horizontales_monobloc_mxp()
    {
        return view('bombas-calpeda-presurizacion-bombas-multicelulares-horizontales-monobloc-mxp');
    }

    public function bombas_calpeda_presurizacion_bombas_multicelulares_horizontales_monobloc_de_acero_inoxidable_mxh()
    {
        return view('bombas-calpeda-presurizacion-bombas-multicelulares-horizontales-monobloc-de-acero-inoxidable-mxh');
    }

    public function bombas_calpeda_presurizacion_bombas_multicelulares_verticales_in_line_mxv()
    {
        return view('bombas-calpeda-presurizacion-bombas-multicelulares-verticales-in-line-mxv');
    }

    public function bombas_calpeda_presurizacion_bombas_multicelulares_verticales_monobloc_mxv_b()
    {
        return view('bombas-calpeda-presurizacion-bombas-multicelulares-verticales-monobloc-mxv-b');
    }

    public function bombas_calpeda_presurizacion_bombas_sumergibles_multicelulares_para_agua_limpia_mps()
    {
        return view('bombas-calpeda-presurizacion-bombas-sumergibles-multicelulares-para-agua-limpia-mps');
    }

    public function bombas_calpeda_presurizacion_bombas_verticales_de_acoplamiento_corto_de_etapas_multiples_mpsu()
    {
        return view('bombas-calpeda-presurizacion-bombas-verticales-de-acoplamiento-corto-de-etapas-multiples-mpsu');
    }

    public function bombas_calpeda_presurizacion_bs_grupos_de_presion_con_bombas_de_velocidad_fija_y_variable()
    {
        return view('bombas-calpeda-presurizacion-bs-grupos-de-presion-con-bombas-de-velocidad-fija-y-variable');
    }

    public function bombas_calpeda_presurizacion_cs_cs_r_fk_motores_sumergidos()
    {
        return view('bombas-calpeda-presurizacion-cs-cs-r-fk-motores-sumergidos');
    }

    public function bombas_calpeda_presurizacion_easymat_sistema_de_velocidad_variable_dirigido_por_inversor()
    {
        return view('bombas-calpeda-presurizacion-easymat-sistema-de-velocidad-variable-dirigido-por-inversor');
    }

    public function bombas_calpeda_presurizacion_idromat_regulador_electronico_para_bombas()
    {
        return view('bombas-calpeda-presurizacion-idromat-regulador-electronico-para-bombas');
    }

    public function bombas_calpeda_presurizacion_duplicado_bombas_multicelulares_horizontales_monobloc_de_acero_inoxidable_mxh_2083()
    {
        return view('bombas-calpeda-presurizacion-duplicado-bombas-multicelulares-horizontales-monobloc-de-acero-inoxidable-mxh-2083');
    }

    public function bombas_calpeda_presurizacion_multi_stage_submersible_pumps_mp()
    {
        return view('bombas-calpeda-presurizacion-multi-stage-submersible-pumps-mp');
    }

    public function bombas_calpeda_presurizacion_mxa_bombas_multicelulares_autoaspirantes()
    {
        return view('bombas-calpeda-presurizacion-mxa-bombas-multicelulares-autoaspirantes');
    }

    public function bombas_calpeda_presurizacion_duplicado_bombas_verticales_de_acoplamiento_corto_de_etapas_multiples_mpsu_259()
    {
        return view('bombas-calpeda-presurizacion-duplicado-bombas-verticales-de-acoplamiento-corto-de-etapas-multiples-mpsu-259');
    }

    public function bombas_calpeda_presurizacion_ngl_bombas_autoaspirantes_jet()
    {
        return view('bombas-calpeda-presurizacion-ngl-bombas-autoaspirantes-jet');
    }

    public function bombas_calpeda_presurizacion_ngx_bombas_autoaspirantes_jet()
    {
        return view('bombas-calpeda-presurizacion-ngx-bombas-autoaspirantes-jet');
    }

    public function bombas_calpeda_presurizacion_duplicado_bombas_multicelulares_horizontales_monobloc_mgp_202()
    {
        return view('bombas-calpeda-presurizacion-duplicado-bombas-multicelulares-horizontales-monobloc-mgp-202');
    }

    public function bombas_calpeda_presurizacion_sd_bombas_sumergibles_para_pozos_de_4_y_6()
    {
        return view('bombas-calpeda-presurizacion-sd-bombas-sumergibles-para-pozos-de-4-y-6');
    }

    public function bombas_calpeda_presurizacion_sds_bombas_sumergibles_para_pozos_de_6_8_y_0()
    {
        return view('bombas-calpeda-presurizacion-sds-bombas-sumergibles-para-pozos-de-6-8-y-0');
    }

    public function bombas_calpeda_presurizacion_sdx_bombas_sumergibles_de_acero_inoxidable_para_pozos_de_6_y_8()
    {
        return view('bombas-calpeda-presurizacion-sdx-bombas-sumergibles-de-acero-inoxidable-para-pozos-de-6-y-8');
    }

    public function bombas_calpeda_presurizacion_sistema_de_velocidad_variable_a_traves_de_variador_de_frecuencia_imat()
    {
        return view('bombas-calpeda-presurizacion-sistema-de-velocidad-variable-a-traves-de-variador-de-frecuencia-imat');
    }

    public function bombas_calpeda_presurizacion_sistema_presurizado_con_control_de_presion_integrado_e_max()
    {
        return view('bombas-calpeda-presurizacion-sistema-presurizado-con-control-de-presion-integrado-e-max');
    }


     
 }
