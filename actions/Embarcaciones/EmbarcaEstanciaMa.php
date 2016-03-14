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
* Clase Manejadora EmbarcaEstanciaMa
* 
* Creada con Genaro: generador de código de gvHIDRA
* 
* @autor genaro
* @version 2.0
* @license http://opensource.org/licenses/gpl-2.0.php GNU Public License v.2
*/

class EmbarcaEstanciaMa extends gvHidraForm_DB
{
	public function __construct() {

		//Recogemos dsn de conexion
		$conf = ConfigFramework::getConfig();
		$g_dsn = $conf->getDSN('g_dsn');

		$nombreTablas= array('embarcacion');
		parent::__construct($g_dsn, $nombreTablas);

		
		/************************ QUERYs ************************/
		
		//Consulta del modo de trabajo LIS
		$str_select = "SELECT codigo as \"lis_codigo\", matricula as \"lis_matricula\", nombre as \"lis_nombre\", manga as \"lis_manga\", eslora as \"lis_eslora\", vela_motor as \"lis_vela_motor\", fecha_compra as \"lis_fecha_compra\", caballaje as \"lis_caballaje\", fecha_baja as \"lis_fecha_baja\", propietario_dni as \"lis_propietario_dni\" FROM embarcacion";
		$this->setSelectForSearchQuery($str_select);

		//Where del modo de trabajo LIS
		//$str_where = "";
		//$this->setWhereForSearchQuery($str_where);

		//Order del modo de trabajo LIS
		$this->setOrderByForSearchQuery('1');

		/************************ END QUERYs ************************/

		/************************ MATCHINGs ************************/

		//Seccion de matching: asociacion campos TPL y campos BD

		//Modo de trabajo FIL
		$this->addMatching("fil_codigo", "codigo", "embarcacion");
		$this->addMatching("fil_matricula", "matricula", "embarcacion");
		$this->addMatching("fil_nombre", "nombre", "embarcacion");
		$this->addMatching("fil_manga", "manga", "embarcacion");
		$this->addMatching("fil_eslora", "eslora", "embarcacion");
		$this->addMatching("fil_vela_motor", "vela_motor", "embarcacion");
		$this->addMatching("fil_fecha_compra", "fecha_compra", "embarcacion");
		$this->addMatching("fil_caballaje", "caballaje", "embarcacion");
		$this->addMatching("fil_fecha_baja", "fecha_baja", "embarcacion");
		$this->addMatching("fil_propietario_dni", "propietario_dni", "embarcacion");

		//Modo de trabajo LIS
		$this->addMatching("lis_codigo", "codigo", "embarcacion");
		$this->addMatching("lis_matricula", "matricula", "embarcacion");
		$this->addMatching("lis_nombre", "nombre", "embarcacion");
		$this->addMatching("lis_manga", "manga", "embarcacion");
		$this->addMatching("lis_eslora", "eslora", "embarcacion");
		$this->addMatching("lis_vela_motor", "vela_motor", "embarcacion");
		$this->addMatching("lis_fecha_compra", "fecha_compra", "embarcacion");
		$this->addMatching("lis_caballaje", "caballaje", "embarcacion");
		$this->addMatching("lis_fecha_baja", "fecha_baja", "embarcacion");
		$this->addMatching("lis_propietario_dni", "propietario_dni", "embarcacion");

		/************************ END MATCHINGs ************************/


		/************************ TYPEs ************************/

		//Fechas: gvHidraDate type
		$fecha = new gvHidraDate(false);
    	$fecha->setCalendar(false);
    	$this->addFieldType('fil_fecha_compra',$fecha);
		$fecha->setCalendar(false);
		$this->addFieldType('lis_fecha_compra',$fecha);

		$fecha = new gvHidraDate(false);
    	$fecha->setCalendar(false);
    	$this->addFieldType('fil_fecha_baja',$fecha);
		$fecha->setCalendar(false);
		$this->addFieldType('lis_fecha_baja',$fecha);


		//Strings: gvHidraString type
		$string = new gvHidraString(false, 10);
		$this->addFieldType('fil_codigo',$string);
		$string = new gvHidraString(false, 10);
		$this->addFieldType('lis_codigo',$string);
		
		$string = new gvHidraString(false, 12);
		$this->addFieldType('fil_matricula',$string);
		$string = new gvHidraString(false, 12);
		$this->addFieldType('lis_matricula',$string);
		
		$string = new gvHidraString(false, 50);
		$this->addFieldType('fil_nombre',$string);
		$string = new gvHidraString(false, 50);
		$this->addFieldType('lis_nombre',$string);
		
		$string = new gvHidraString(false, 1);
		$this->addFieldType('fil_vela_motor',$string);
		$this->addFieldType('lis_vela_motor',$string);
		
		$string = new gvHidraString(false, 13);
		$this->addFieldType('fil_propietario_dni',$string);
		$string = new gvHidraString(false, 13);
		$this->addFieldType('lis_propietario_dni',$string);
		

		//Integers: gvHidraInteger type
		$int = new gvHidraInteger(false, 4);
		$this->addFieldType('fil_caballaje',$int);
		$this->addFieldType('lis_caballaje',$int);
		

		//Floats: gvHidraFloat type
		$float = new gvHidraFloat(false, 8);
		$float->setFloatLength(0);
		$this->addFieldType('fil_manga',$float);
		$this->addFieldType('lis_manga',$float);
		
		$float = new gvHidraFloat(false, 8);
		$float->setFloatLength(0);
		$this->addFieldType('fil_eslora',$float);
		$this->addFieldType('lis_eslora',$float);
		

		/************************ END TYPEs ************************/
				
		/************************ COMPONENTS ************************/
		
		//Declaracion de Listas y WindowSelection
		//La definición debe estar en el AppMainWindow.php

		/************************ END COMPONENTS ************************/

		//Relacionamos con las clases detalle
		$this->addSlave('EmbarcaEstanciaDet', array('lis_codigo',), array('lis_embarcacion_codigo',));		

		//Mantener los valores del modo de trabajo FIL tras la busqueda
		$this->keepFilterValuesAfterSearch(true);

	}//End construct

	/************************ CRUD METHODs ************************/

	/**
	* metodo preBuscar
	* 
	* @access public
	* @param object $objDatos
	* 
	* Incorpore aqui la logica para parametrizar la busqueda. Por ejemplo:
	* - Incluir condiciones de filtrado.
	* - Cancelar la accion de buscar. 
	*/	
	public function preBuscar($objDatos) {
		
		return 0;
	}

	/**
	* metodo postBuscar
	* 
	* @access public
	* @param object $objDatos
	* 
	* Incorpore aqui la logica para parametrizar los datos obtenidos. Por ejemplo:
	* - Completar la informacion obtenida.
	* - Cambiar el color de las filas dependiendo de su valor
	*/	
	public function postBuscar($objDatos) {
		
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
	
}//End EmbarcaEstanciaMa

?>