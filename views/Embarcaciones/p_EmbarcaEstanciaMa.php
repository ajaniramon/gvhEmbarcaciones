<?php

//EmbarcaEstanciaMa
$comportamientoVentana= new IgepPantalla();

$panelMaestro = new IgepPanel('EmbarcaEstanciaMa',"smty_datosTablaM");
$panelMaestro->activarModo("fil","estado_fil");
$panelMaestro->activarModo("lis","estado_lis");
$comportamientoVentana->agregarPanel($panelMaestro);

//EmbarcaEstanciaDet
	$panelDetalle = new IgepPanel('EmbarcaEstanciaDet',"smty_datosTablaD");
	$panelDetalle->activarModo("lis","estado_lis");
	$comportamientoVentana->agregarPanelDependiente($panelDetalle,"EmbarcaEstanciaMa");

$s->display('Embarcaciones/p_EmbarcaEstanciaMa.tpl');

?>