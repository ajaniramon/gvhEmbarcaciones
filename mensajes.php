<?php
/**
 * Mensajes particulares a la aplicaci�n
 * Variables globales:
 * - vector $g_mensajesParticulares
 * $Revision: 1.2 $
 */

//Variable de mensajes particulares de la aplicaci�n.
global $g_mensajesParticulares;
$g_mensajesParticulares = array(
	'APL-1'=>array('descCorta'=>'ATENCI�N: APLICACI�N EN PRUEBAS.','descLarga'=>'Acabas de entrar en una aplicaci�n en pruebas. Est� basada en la versi�n inestable de gvHIDRA, por lo que puede contener errores. <br/><br/>El equipo gvHIDRA','tipo'=>'ALERTA'),
	'APL-2'=>array('descCorta'=>'ATENCI�N: APLICACI�N EN PRUEBAS.','descLarga'=>'La embarcaci�n ya existe. <br/><br/>El equipo gvHIDRA','tipo'=>'ALERTA'),
	'APL-3'=>array('descCorta'=>'No puede cambiar el estado del amarre.','descLarga'=>'El amarre est� ocupado, por lo tanto no puede cambiar su estado.','tipo'=>'AVISO')
);

?>