<?php
								
class AppMainWindow extends CustomMainWindow{	

	public function AppMainWindow() {

		parent::__construct();
		//Cargamos propiedades específicas del CS
		$conf = ConfigFramework::getConfig();

		//***********************DSN***********************//
		//*******************FIN DSN***********************//

		//****************Listas desplegables de la aplicación****************//
		
		// LISTAS: (nombreLista, query con los alias "valor" y "descripcion"
		// Ejemplo de lista: TIPOS
		$sql = <<<query
	SELECT
		dni,
		nombre
	FROM
		propietario
query;
		$conf->setSelectionWindow_DBSource('VAI_Propietarios', $sql, array("nombre"));
			
		$sql = <<<query
			SELECT
				DISTINCT cpuerto as "valor",
				dpuerto as "descripcion"
			FROM
				puerto, amarre, estancia
			WHERE
				cpuerto = puerto_cpuerto
				AND amarre.idamarre = estancia.idamarre
				AND estancia.hasta < CURRENT_DATE
query;
		$conf->setList_DBSource('PUERTOS',$sql);
		
		$sql = <<<query
			SELECT
				amarre.idamarre as "valor",
				amarre.nombre as "descripcion"
			FROM
				amarre,estancia
			WHERE
				amarre.idamarre = estancia.idamarre
				AND estancia.hasta < CURRENT_DATE
query;
		$conf->setList_DBSource('AMARRES',$sql);
		
		
		$sql = <<<query
	SELECT
		DISTINCT cpuerto as "valor",
		dpuerto as "descripcion"
	FROM
		puerto, amarre, estancia
	WHERE
		cpuerto = puerto_cpuerto
		AND amarre.idamarre = estancia.idamarre
		AND estancia.hasta < CURRENT_DATE
query;
		$conf->setList_DBSource('PUERTOS',$sql);
		
		$sql = <<<query
	SELECT
		amarre.idamarre as "valor",
		amarre.nombre as "descripcion"
	FROM
		amarre,estancia
	WHERE
		amarre.idamarre = estancia.idamarre
		AND estancia.hasta < CURRENT_DATE
query;
		$conf->setList_DBSource('AMARRES',$sql);
		
		
		// $conf->setList_DBSource('TIPOS',"select ctipo as \"valor\", dtipo as \"descripcion\" from tinv_tipos");
		//---------------- Fin Listas desplegables de la aplicación ----------------//

		//---------------- VENTANA DE PRUEBA DE ACCIONES DE INTERFAZ ----------------//
		// VENTANAS DE SELECCIÓN (nombreLista, query con los alias como en la tpl, nombre campo tpl donde irá el valor)
		// Ejemplo de ventana: VAI_filNombre
		// $conf->setSelectionWindow_DBSource('VAI_filNombre', 'select cif as "filCif", nombre as "filNombre" from accionesInterfaz', array("cif"));
		
	}
	
	public function openApp($objDatos) {

		//$this->showMessage('APL-1');	
		return 0;
	}
}//Fin de AppMainWindow
?>