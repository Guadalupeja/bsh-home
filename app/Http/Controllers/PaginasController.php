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
 
     public function bomba_sumergible_para_achiques_gm_10()
     {
         return view('bomba-sumergible-para-achiques-gm-10');
     }

     public function bomba_sumergible_con_sistema_triturador_gqg_1956()
     {
         return view('bomba-sumergible-sistema-triturador-gqg-1956');
     }



     // Nuevas funciones
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

    public function bombas_calpeda_presurizacion_multi_stage_submersible_pumps_mp()
    {
        return view('bombas-calpeda-presurizacion-multi-stage-submersible-pumps-mp');
    }

    public function bombas_calpeda_presurizacion_mxa_bombas_multicelulares_autoaspirantes()
    {
        return view('bombas-calpeda-presurizacion-mxa-bombas-multicelulares-autoaspirantes');
    }


    public function bombas_calpeda_presurizacion_mxv_bombas_multicelulares_verticales_in_line()
    {
        return view('duplicado-bombas-verticales-de-acoplamiento-corto-de-etapas-multiples-mpsu-2159');
    }


    public function bombas_calpeda_presurizacion_ngl_bombas_autoaspirantes_jet()
    {
        return view('bombas-calpeda-presurizacion-ngl-bombas-autoaspirantes-jet');
    }

    public function bombas_calpeda_presurizacion_ngx_bombas_autoaspirantes_jet()
    {
        return view('bombas-calpeda-presurizacion-ngx-bombas-autoaspirantes-jet');
    }

    public function duplicado_bombas_multicelulares_horizontales_monobloc_mgp_2102()
    {
        return view('duplicado-bombas-multicelulares-horizontales-monobloc-mgp-2102');
    }

    public function bombas_calpeda_presurizacion_sd_bombas_sumergibles_para_pozos_de_4_y_6()
    {
        return view('bombas-calpeda-presurizacion-sd-bombas-sumergibles-para-pozos-de-4-y-6');
    }

    public function bombas_calpeda_presurizacion_sds_bombas_sumergibles_para_pozos_de_6_8_Y_10()
    {
        return view('bombas-calpeda-presurizacion-sds-bombas-sumergibles-para-pozos-de-6-8-y-10');
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

        //Nuevas funciones:

        public function sistema_presurizado_con_control_de_presion_integrado_bomba_autocebante_e_ngx()
        {
            return view('sistema-presurizado-con-control-de-presion-integrado-bomba-autocebante-e-ngx');
        }

        public function variomat_sistema_de_velocidad_variable_dirigido_por_inversor()
        {
            return view('variomat-sistema-de-velocidad-variable-dirigido-por-inversor');
        }

        public function bombas_calpeda_recirculacion_y_climatizacion()
        {
            return view('bombas-calpeda-recirculacion-y-climatizacion');
        }

        public function bombas_centrifugas_con_rodete_abierto_c()
        {
            return view('bombas-centrifugas-con-rodete-abierto-c');
        }

        public function bombas_centrifugas_de_aspiracion_axial_segun_norma_europea_en_733_n_n4()
        {
            return view('bombas-centrifugas-de-aspiracion-axial-segun-norma-europea-en-733-n-n4');
        }

        public function bombas_centrifugas_monobloc_con_bridas_nm_nms()
        {
            return view('bombas-centrifugas-monobloc-con-bridas-nm-nms');
        }

        public function bombas_centrifugas_monobloc_nm4_nms4()
        {
            return view('bombas-centrifugas-monobloc-nm4-nms4');
        }


        public function duplicado_bombas_multicelulares_horizontales_monobloc_de_acero_inoxidable_mxh_2427()
        {
            return view('duplicado-bombas-multicelulares-horizontales-monobloc-de-acero-inoxidable-mxh-2427');
        }

        public function bombas_circulantes_de_tres_velocidades_con_puertos_roscados_nc3()
        {
            return view('bombas-circulantes-de-tres-velocidades-con-puertos-roscados-nc3');
        }

        public function bombas_circulares_de_bajo_consumo_con_bridas_nce_hqf()
        {
            return view('bombas-circulares-de-bajo-consumo-con-bridas-nce-hqf');
        }

        public function bombas_circulares_gemelas_de_ahorro_energetico_con_bridas_nced_hqf()
        {
            return view('bombas-circulares-gemelas-de-ahorro-energetico-con-bridas-nced-hqf');
        }

        public function bombas_con_rodete_periferico_t_tp()
        {
            return view('bombas-con-rodete-periferico-t-tp');
        }

        public function bombas_in_line_NR_NR4()
        {
            return view('bombas-presurizadas-NR-NR4');
        }


        public function bombas_multicelulares_horizontales_monobloc_de_acero_inoxidable_mxh()
        {
            return view('bombas-multicelulares-horizontales-monobloc-de-acero-inoxidable-mxh');
        }

        public function c_bombas_centrifugas_con_rodete_abierto()
        {
            return view('c-bombas-centrifugas-con-rodete-abierto');
        }

        public function circuladora_electronica_de_bajo_consumo_energetico_nce_h()
        {
            return view('circuladora-electronica-de-bajo-consumo-energetico-nce-h');
        }

        public function circuladoras_electronicas_gemelas_de_bajo_consumo_energetico_embridadas_nce_hf()
        {
            return view('circuladoras-electronicas-gemelas-de-bajo-consumo-energetico-embridadas-nce-hf');
        }

        public function ncd3_bombas_gemelas_circulantes_de_tres_velocidades_con_puertos_roscados()
        {
            return view('ncd3-bombas-gemelas-circulantes-de-tres-velocidades-con-puertos-roscados');
        }

        public function nce_ei_bombas_circuladoras_de_bajo_consumo()
        {
            return view('nce-ei-bombas-circuladoras-de-bajo-consumo');
        }

        public function nce_el_circuladoras_electronicas_para_placas_solares_de_bajo_consumo_energetico()
        {
            return view('nce-el-circuladoras-electronicas-para-placas-solares-de-bajo-consumo-energetico');
        }

         // Nuevas funciones generadas para las URLs
        public function nce_gf_circuladoras_electronicas_gemelas_de_bajo_consumo_energetico_embridadas()
        {
            return view('nce-gf-circuladoras-electronicas-gemelas-de-bajo-consumo-energetico-embridadas');
        }

        public function nce_h_circuladora_electronica_de_bajo_consuno_energetico()
        {
            return view('nce-h-circuladora-electronica-de-bajo-consuno-energetico');
        }

        public function nce_hf_circuladoras_electronicas_gemelas_de_bajo_consumo_energetico_embridadas()
        {
            return view('nce-hf-circuladoras-electronicas-gemelas-de-bajo-consumo-energetico-embridadas');
        }

        public function nce_hqf_bombas_circulares_de_bajo_consumo_con_bridas()
        {
            return view('nce-hqf-bombas-circulares-de-bajo-consumo-con-bridas');
        }

        public function nced_gf_circuladoras_electronicas_gemelas_de_bajo_consumo_energetico_embridadas()
        {
            return view('nced-gf-circuladoras-electronicas-gemelas-de-bajo-consumo-energetico-embridadas');
        }

        public function nced_hqf_bombas_circulares_gemelas_de_ahorro_energetico_con_bridas()
        {
            return view('nced-hqf-bombas-circulares-gemelas-de-ahorro-energetico-con-bridas');
        }

        public function t_tp_bombas_con_rodete_periferico()
        {
            return view('t-tp-bombas-con-rodete-periferico');
        }

        public function bombas_de_recirculacion_y_alimentacion_de_circuitos_hvac()
        {
            return view('bombas-de-recirculacion-y-alimentacion-de-circuitos-hvac');
        }

        public function bombas_para_riego_agricola()
        {
            return view('bombas-para-riego-agricola');
        }

        public function sellos_mecanicos_calpeda()
        {
            return view('sellos-mecanicos-calpeda');
        }

        public function bombas_calpeda_sistemas_contra_incendio()
        {
            return view('bombas-calpeda-sistemas-contra-incendio');
        }

        public function ej_edj_dj_sistemas_de_lucha_contra_incendios_uni_en_2845()
        {
            return view('ej-edj-dj-sistemas-de-lucha-contra-incendios-uni-en-2845');
        }

        public function home()
        {
            return view('principal');
        }

        public function servicios_mantenimiento_y_asesoria_industrial()
        {
            return view('servicios-mantenimiento-y-asesoria-industrial');
        }

        public function bombas_centrifugas()
        {
            return view('bombas-centrifugas');
        }

        public function consultoria_y_capacitacion_tecnica()
        {
            return view('consultoria-y-capacitacion-tecnica');
        }

        public function hidraulico_mecanico()
        {
            return view('hidraulico-mecanico');
        }

        public function maquinados_y_metalizados()
        {
            return view('maquinados-y-metalizados');
        }

        public function servicio_de_mantenimiento()
        {
            return view('servicio-de-mantenimiento');
        }

        public function sistemas_hidraulicos_lineales_y_rotativos()
        {
            return view('sistemas-hidraulicos-lineales-y-rotativos');
        }

        public function contacto()
        {
            return view('contacto');
        }

        public function kits_maquinaria_industrial_sellos_hidraulicos()
        {
            return view('kits-maquinaria-industrial-sellos-hidraulicos');
        }

        public function blog_bsh()
        {
            return view('blog-bsh');
        }

        public function catalogos_del_fabricante()
        {
            return view('catalogos-del-fabricante');
        }

        public function presentaciones()
        {
            return view('presentaciones');
        }


        // Functions for the new URLs
        public function presentaciones_capacitacion()
        {
            return view('presentaciones-capacitacion');
        }

        public function gama_de_producto_y_servicios()
        {
            return view('gama-de-producto-y-servicios');
        }

        public function presentaciones_por_aplicacion()
        {
            return view('presentaciones-por-aplicacion');
        }

        public function presentaciones_por_segmento()
        {
            return view('presentaciones-por-segmento');
        }

        public function mi_cuenta()
        {
            return view('mi-cuenta');
        }

        public function plasticos_de_ingeneria()
        {
            return view('plasticos-de-ingeneria');
        }

        public function plasticos_de_ingeneria_hules_moldeados_y_extruidos()
        {
            return view('plasticos-de-ingeneria-hules-moldeados-y-extruidos');
        }

        public function plasticos_de_ingeneria_orkot()
        {
            return view('plasticos-de-ingeneria-orkot');
        }

        public function plasticos_de_ingeneria_turcite_b_slydway()
        {
            return view('plasticos-de-ingeneria-turcite-b-slydway');
        }

        public function instalacion_de_turcite_b_slydway()
        {
            return view('instalacion-de-turcite-b-slydway');
        }

        public function plasticos_de_ingeneria_turcite_a_rod()
        {
            return view('plasticos-de-ingeneria-turcite-a-rod');
        }

        public function preguntas_frecuentes()
        {
            return view('preguntas-frecuentes');
        }

        public function proximamente()
        {
            return view('proximamente');
        }

        public function somos_bsh()
        {
            return view('somos-bsh');
        }

        public function sellos_hidraulicos()
        {
            return view('sellos-hidraulicos');
        }

        public function kits_o_rings_3()
        {
            return view('kits-o-rings-3');
        }

        public function check_out_kits_o_rings()
        {
            return view('check-out-kits-o-rings');
        }

        public function enviar_pedido_kits_o_rings()
        {
            return view('enviar-pedido-kits-o-rings');
        }

        public function prueba_filtro()
        {
            return view('prueba-filtro');
        }

        public function sellos_a_la_medida()
        {
            return view('sellos-a-la-medida');
        }

        public function sellos_hidraulicos_kits_o_rings()
        {
            return view('sellos-hidraulicos-kits-o-rings');
        }

        public function sellos_individuales_dinamicos_de_piston_y_vastago()
        {
            return view('sellos-individuales-dinamicos-de-piston-y-vastago');
        }

        public function sellos_individuales_estaticos_o_rings()
        {
            return view('sellos-individuales-estaticos-o-rings');
        }

        public function sellos_individuales_rotativos()
        {
            return view('sellos-individuales-rotativos');
        }

 }
