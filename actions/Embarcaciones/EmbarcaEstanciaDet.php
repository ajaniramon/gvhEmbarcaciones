<?php
/* gvHIDRA. Herramienta Integral de Desarrollo Rápido de Aplicaciones de la Generalitat Valenciana
*
* Copyright (C) 2006 Generalitat Valenciana.
*
* This program is free software; you can redistribute it and/or
* modify it under the terms of the GNU General Public License
* as published by the Free Software Foundation; either version 2
* of the License, or (at your option) any later version.
*
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU General Public License for more details.
*
* You should have received a copy of the GNU General Public License
* along with this program; if not, write to the Free Software
* Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307,USA.
*
* For more information, contact:
*
*  Generalitat Valenciana
*  Conselleria d'Infraestructures i Transport
*  Av. Blasco Ibáñez, 50
*  46010 VALENCIA
*  SPAIN
*  +34 96386 24 83
*  gvhidra@gva.es
*  www.gvhidra.org
*
*/

/**
* Clase Manejadora EmbarcaEstanciaDet
* 
* Creada con Genaro: generador de código de gvHIDRA
* 
* @autor genaro
* @version 2.0
* @license http://opensource.org/licenses/gpl-2.0.php GNU Public License v.2
*/

class EmbarcaEstanciaDet extends gvHidraForm_DB
{
	public function __construct() {

		//Recogemos dsn de conexion
		$conf = ConfigFramework::getConfig();
		$g_dsn = $conf->getDSN('g_dsn');

		$nombreTablas= array('estancia');
		parent::__construct($g_dsn, $nombreTablas);



		/************************ QUERYs ************************/
		
		//Consulta del modo de trabajo LIS
		$str_select = <<<query
			SELECT
				id as "lis_id",
				desde as "lis_desde",
				hasta as "lis_hasta",
				embarcacion_codigo as "lis_embarcacion_codigo",		
				estancia.idamarre as "lis_idamarre",
				cpuerto as "lis_puerto"
			FROM
				estancia, puerto, amarre
query;

$this->setSelectForSearchQuery($str_select);
		

		//Where del modo de trabajo LIS
$str_where = "puerto.cpuerto = amarre.puerto_cpuerto AND amarre.idamarre = estancia.idamarre";

$this->setWhereForSearchQuery($str_where);


		//Order del modo de trabajo LIS
		$this->setOrderByForSearchQuery('1');
		
		

		/************************ END QUERYs ************************/
		


		/************************ MATCHINGs ************************/

		//Seccion de matching: asociacion campos TPL y campos BD
		$this->addMatching("lis_id", "id", "estancia");
		$this->addMatching("lis_desde", "desde", "estancia");
		$this->addMatching("lis_hasta", "hasta", "estancia");
		$this->addMatching("lis_embarcacion_codigo", "embarcacion_codigo", "estancia");
		$this->addMatching("lis_idamarre", "idamarre", "estancia");

		/************************ END MATCHINGs ************************/


		/************************ TYPEs ************************/
	
		//Fechas: gvHidraDate type
		$fecha = new gvHidraDatetime(false);
		$fecha->setCalendar(true);
		$this->addFieldType('lis_desde',$fecha);

		$fecha = new gvHidraDatetime(false);
		$fecha->setCalendar(true);
		$this->addFieldType('lis_hasta',$fecha);


		//Strings: gvHidraString type
		$string = new gvHidraString(false, 10);
		$this->addFieldType('lis_embarcacion_codigo',$string);
		

		//Integers: gvHidraInteger type
		$int = new gvHidraInteger(false, 4);
		$this->addFieldType('lis_id',$int);

		
		

		//Floats: gvHidraFloat type

		/************************ END TYPEs ************************/
				
		/************************ COMPONENTS ************************/
		
		//Declaracion de Listas y WindowSelection
		$puerto = new gvHidraList('lis_puerto','PUERTOS');
		$puerto->addOption('','');
		$this->addList($puerto);
		
		$amarre = new gvHidraList('lis_idamarre','AMARRES');
		$amarre->addOption('','');
		$amarre->setDependence(array("lis_puerto"), array("puerto_cpuerto"));
		$this->addList($amarre);
		
		//La definición debe estar en el AppMainWindow.php

		/************************ END COMPONENTS ************************/						
		
		//Asociamos con la clase maestro
		$this->addMaster("EmbarcaEstanciaMa");
		
	}//End construct

	/************************ CRUD METHODs ************************/

	/**
	* metodo preRecargar
	* 
	* @access public
	* @param object $objDatos
	* 
	* Incorpore aqui la logica para parametrizar la carga del detalle. Por ejemplo:
	* - Incluir condiciones.
	* - Cancelar la accion. 
	*/	
	public function preBuscar($objDatos) {
		
		return 0;
	}

	/**
	* metodo postRecargar
	* 
	* @access public
	* @param object $objDatos
	* 
	* Incorpore aqui la logica para parametrizar los datos obtenidos. Por ejemplo:
	* - Completar la informacion obtenida.
	* - Cambiar el color de las filas dependiendo de su valor
	*/	
	public function postRecargar($objDatos) {
		
		return 0;
	}

	/**
	* metodo preInsertar
	* 
	* @access public
	* @param object $objDatos
	* 
	* Incorpore aqui la logica para parametrizar los datos a insertar. Por ejemplo:
	* - Calcular el valor de una secuencia.
	* - Cancelar la acción de insercion.
	*/		
	public function preInsertar($objDatos) {
		
		return 0;
	}
	
	/**
	* metodo postInsertar
	* 
	* @access public
	* @param object $objDatos
	* 
	* Incorpore aqui la logica para completar la operacion de insercion. Por ejemplo:
	* - Insertar en una segunda tabla.
	*/		
	public function postInsertar($objDatos) {
		
		return 0;
	}

	/**
	* metodo preModificar
	* 
	* @access public
	* @param object $objDatos
	* 
	* Incorpore aqui la logica para parametrizar la operacion de actualizacion. Por ejemplo:
	* - Calcular valores derivados.
	* - Cancelar la acción de actualizacion.
	*/
	public function preModificar($objDatos) {
		
		return 0;
	}
	
	/**
	* metodo postModificar
	* 
	* @access public
	* @param object $objDatos
	* 
	* Incorpore aqui la logica para completar la operacion de actulizacion. Por ejemplo:
	* - Actualizar en una segunda tabla
	*/	
	public function postModificar($objDatos) {
		
		return 0;
	}
	
	/**
	* metodo preBorrar
	* 
	* @access public
	* @param object $objDatos
	* 
	* Incorpore aqui la logica para parametrizar la operacion de borrado. Por ejemplo:
	* - Cancelar la acción de borrado.
	*/	
	public function preBorrar($objDatos) {
		
		return 0;
	}
	
	/**
	* metodo postBorrar
	* 
	* @access public
	* @param object $objDatos
	* 
	* Incorpore aqui la logica para completar la operacion de borrado. Por ejemplo:
	* - Borrar en una segunda tabla
	*/	
	public function postBorrar($objDatos) {
		
		return 0;
	}
	
	/**
	* metodo preNuevo
	* 
	* @access public
	* @param object $objDatos
	* 
	* Incorpore aqui los valores por defecto antes de insertar.
	*/	
	public function preNuevo($objDatos) {
		
		return 0;
	}
	
	/**
	* metodo preIniciarVentana
	* 
	* @access public
	* @param object $objDatos
	* 
	* Incorpore aqui la logica a ejecutar cuando entra en la ventana. Por ejemplo:
	* - Puede comprobar que el usuario tiene los permisos necesarios.
	*/	
	public function preIniciarVentana($objDatos) {
		
		return 0;
	}
	
	/************************ END CRUD METHODs ************************/
	
	/**
	* metodo accionesParticulares
	* 
	* @access public
	* @param string $str_accion
	* @param object $objDatos
	* 
	* Incorpore aqui la logica de sus acciones particulares. 
	* -En el parametro $str_accion aparece el id de la accion.
	* -En el parametro $objDatos esta la informacion de la peticion. Recuerde que debe fijar la operacion
	* con el metodo setOperacion.
	*/	
	public function accionesParticulares($str_accion, $objDatos) {
        
		throw new Exception('Se ha intentado ejecutar la acción '.$str_accion.' y no está programada.');        
    }
	
}//End EmbarcaEstanciaDet

?>