<?php

//ProvinciaMunicipioMa
$comportamientoVentana= new IgepPantalla();

$panelMaestro = new IgepPanel('ProvinciaMunicipioMa',"smty_datosTablaM");
$panelMaestro->activarModo("fil","estado_fil");
$panelMaestro->activarModo("lis","estado_lis");
$comportamientoVentana->agregarPanel($panelMaestro);

//ProvinciaMunicipioDet
	$panelDetalle = new IgepPanel('ProvinciaMunicipioDet',"smty_datosTablaD");
	$panelDetalle->activarModo("lis","estado_lis");
	$comportamientoVentana->agregarPanelDependiente($panelDetalle,"ProvinciaMunicipioMa");

$s->display('Provincia-Municipio/p_ProvinciaMunicipioMa.tpl');

?>