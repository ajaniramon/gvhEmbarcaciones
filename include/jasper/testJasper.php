<?php
	require_once('./modulosPHP/informeJasper.php');

	
	////////////////////////////////////////////////////////////
	//Creamos el objeto y damos el nombre del fichero resultado:
	////////////////////////////////////////////////////////////
	$ij = new InformeJasper('EjemploJasper');

	
	
	//////////////////////////////////////
	//Fijamos el PATH del proyecto Jasper:
	//////////////////////////////////////
	$ij->setProjectPath('modulosPHP/');
	
	
	
	////////////////////////////////////
	//Especificamos una fuente de datos:
	////////////////////////////////////
	
	
	//1.- Si el fichero NO tiene fuente de datos (est�tico) usamos
	$ij->setDataSourceType('none');
	//Elegimos el informe
	$ij->setJasperFile('./ejemplos/InformeSinBD/EjemploSinDatos.jasper');
		
	
	//2.- Si el fichero obtiene los datos de una BD relacional y fijamos los par�metros de conexi�n directamente
	/*
	$ij->setDataSourceType('sgbd');
	$ij->setDBType('pgsql');
	$ij->setDBHost('salvame.localhost');
	$ij->setDBPort('5432');
	$ij->setDBDatabase('dec');
	$ij->setDBUser('falete');
	$ij->setDBPassword('mesecuestran');
	//Fijamos los par�metros del ejemplo (si es que tiene)
	$ij->setJasperFile('./ejemplos/InformeBDParams/TribunalParams.jasper');
	$ij->addParam('ParamActivo','S', 'String');
	$ij->addParam('IdMaximo',5, 'Integer');
	//Elegimos el informe
	$ij->setJasperFile('./ejemplos/InformeBDParams/TribunalParams.jasper');
	*/
	
	
	/*
	//3.- Si el fichero obtiene los datos de una BD relacional e importamos los par�metros de conexi�n del PHP
	$PearDSN = array (
		'phptype'   => 'pgsql',
		'username' => 'falete',
		'password' => 'mesecuestran',
		'hostspec' => 'salvame.localhost',
		'port'     => 5432,
		'database' => 'dec'
	);
	$ij->importPearDSN($PearDSN);;
		//Fijamos los par�metros del ejemplo (si es que tiene)
	$ij->setJasperFile('./ejemplos/InformeBDParams/TribunalParams.jasper');
	$ij->addParam('ParamActivo','S', 'String');
	$ij->addParam('IdMaximo',5, 'Integer');
	//Elegimos el informe
	$ij->setJasperFile('./ejemplos/InformeBDParams/TribunalParams.jasper');
	*/
	
	
	/*
	//4.- Si el fichero se origina desde c�digo PHP (matrices asociativas)...
	$ij->setDataSourceType('xml');
	//Esta matriz podr�a venir de distintas colsultas SQL desde el PHP
	$articulos = array (
		array (
				"codlin" =>"TRP-17",
				"desclin" =>"Se�al de tr�fico autov�a",
				"uds" =>"2",
				"precio_uni" =>number_format(151.50, 2, ',', '.'),
				"dto" =>0,
				"importe_lin" =>number_format((151.50*2), 2, ',', '.')
		),
		array (
				"codlin" =>"FR-93",
				"desclin" =>"Matr�cula ferrocarril",
				"uds" =>"1",
				"precio_uni" =>number_format(55.50, 2, ',', '.'),
				"dto" =>0,
				"importe_lin" =>number_format(55.50, 2, ',', '.')
		),
		array (
				"codlin" =>"L3",
				"desclin" =>"La descripci�n de la l�nea 3",
				"uds" =>"1",
				"precio_uni" =>number_format(333.33, 2, ',', '.'),
				"dto" =>0,
				"importe_lin" =>number_format(333.33, 2, ',', '.')
		),
		array (
				"codlin" =>"L4",
				"desclin" =>"La descripci�n de la l�nea 4",
				"uds" =>"1",
				"precio_uni" =>number_format(4444.44, 2, ',', '.'),
				"dto" =>0,
				"importe_lin" =>number_format(4444.44, 2, ',', '.')
		)
	); //Fin matriz
	//Enlazamos la matriz
	$ij->addDBResultSet($articulos, "articulos");
	//Elegimos el informe
	$ij->setJasperFile('./ejemplos/InformeSinBD/EjemploXML3.jasper');
	*/
	
	
	/////////////////////////////////
	//Fijamos la forma de mostrarse
	///////////////////////////////
	$ij->setDisposition('anexo');
	//$ij->setDisposition('inline');
	
	
	////////////////////////////////////////////
	//Deeshabilitamos componentes no necesarios
	////////////////////////////////////////////
	$ij->disableSupport('groovy');//Expresiones Groovy
	$ij->disableSupport('mysql');//MySQL
	$ij->disableSupport('chart');//Gr�ficos
	//$ij->disableSuport('codebars');//C�digos de barras
	
	////////////////////////////////////////////////
	//Forzamos a que el servidor responda en espa�ol
	////////////////////////////////////////////////
	//$ij->forceLangUserOptions('es', 'ES', 'ES');
	
	//////////////////////////
	//Forzamos un JRE distinto
	//////////////////////////
	//$ij->setJavaHome('/usr/local/jdk1.6.0_22');
	
	/////////////////////
	//Creamos el informe
	/////////////////////
	//$ij->setDebugMode(true);//Lo activamos (true) para conocer posibles errores en desarrollo
	$ij->createResultFile('pdf');
	
?>
