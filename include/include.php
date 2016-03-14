<?php
/**
 * Ficheros a incluir
 * $Revision: 1.2 $
 */

$al = GVHAutoLoad::singleton();

$al->registerClass('AppMainWindow', 'actions/principal/AppMainWindow.php');

// Registramos las clases que tengamos 
// $al->registerClass('NomClase','ruta a la clase');

$al->registerClass('Propietarios','actions/Propietarios/Propietarios.php');
$al->registerClass('ProvinciaMunicipioMa','actions/Provincia-Municipio/ProvinciaMunicipioMa.php');

$al->registerClass('ProvinciaMunicipioDet','actions/Provincia-Municipio/ProvinciaMunicipioDet.php');
$al->registerClass('Embarcacion','actions/Embarcaciones/Embarcacion.php');
$al->registerClass('InformeJasper','include/jasper/modulosPHP/informeJasper.php');
$al->registerClass('EmbarcaEstanciaMa','actions/Embarcaciones/EmbarcaEstanciaMa.php');

$al->registerClass('EmbarcaEstanciaDet','actions/Embarcaciones/EmbarcaEstanciaDet.php');
$al->registerClass('Puertos','actions/PuertosAmarres/Puertos.php');

$al->registerClass('Amarres','actions/PuertosAmarres/Amarres.php');?>