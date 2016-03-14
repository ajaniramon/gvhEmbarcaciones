<?php
    $comportamientoVentana= new IgepPantalla();

    $panel = new IgepPanel('Propietarios',"smty_datosFicha");
    $panel->activarModo("fil","estado_fil");
    $panel->activarModo("edi","estado_edi");
    $comportamientoVentana->agregarPanel($panel);

    $s->display('Propietarios/p_Propietarios.tpl');
?>