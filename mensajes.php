<?php
/**
 * Mensajes particulares a la aplicación
 * Variables globales:
 * - vector $g_mensajesParticulares
 * $Revision: 1.2 $
 */

//Variable de mensajes particulares de la aplicación.
global $g_mensajesParticulares;
$g_mensajesParticulares = array(
	'APL-1'=>array('descCorta'=>'ATENCIÓN: APLICACIÓN EN PRUEBAS.','descLarga'=>'Acabas de entrar en una aplicación en pruebas. Está basada en la versión inestable de gvHIDRA, por lo que puede contener errores. <br/><br/>El equipo gvHIDRA','tipo'=>'ALERTA'),
	'APL-2'=>array('descCorta'=>'ATENCIÓN: APLICACIÓN EN PRUEBAS.','descLarga'=>'La embarcación ya existe. <br/><br/>El equipo gvHIDRA','tipo'=>'ALERTA'),
	'APL-3'=>array('descCorta'=>'No puede cambiar el estado del amarre.','descLarga'=>'El amarre está ocupado, por lo tanto no puede cambiar su estado.','tipo'=>'AVISO')
);

?>