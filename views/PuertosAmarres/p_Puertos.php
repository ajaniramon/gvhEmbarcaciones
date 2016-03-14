<?php

//Puertos
$comportamientoVentana= new IgepPantalla();

$panelMaestro = new IgepPanel('Puertos',"smty_datosTablaM");
$panelMaestro->activarModo("fil","estado_fil");
$panelMaestro->activarModo("lis","estado_lis");
$comportamientoVentana->agregarPanel($panelMaestro);

//Amarres
	$panelDetalle = new IgepPanel('Amarres',"smty_datosTablaD");
	$panelDetalle->activarModo("lis","estado_lis");
	$comportamientoVentana->agregarPanelDependiente($panelDetalle,"Puertos");

$s->display('PuertosAmarres/p_Puertos.tpl');

?>