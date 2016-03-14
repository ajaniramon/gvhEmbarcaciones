<?php
    $comportamientoVentana= new IgepPantalla();

    $panel = new IgepPanel('Embarcacion',"smty_datosTabla","smty_datosFicha");
    $panel->activarModo("fil","estado_fil");
    $panel->activarModo("lis","estado_lis");
    $panel->activarModo("edi","estado_edi");
    $comportamientoVentana->agregarPanel($panel);

    $s->display('Embarcaciones/p_Embarcacion.tpl');
?>