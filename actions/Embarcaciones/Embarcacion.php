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
* Clase Manejadora Embarcacion
* 
* Creada con Genaro: generador de código de gvHIDRA
* 
* @autor genaro
* @version 2.0
* @license http://opensource.org/licenses/gpl-2.0.php GNU Public License v.2
*/

class Embarcacion extends gvHidraForm_DB
{
	public $lanzarInforme;
	
	
	
	public function __construct() {

		//Recogemos dsn de conexion
		$conf = ConfigFramework::getConfig();
		$g_dsn = $conf->getDSN('g_dsn');

		$nombreTablas= array('embarcacion');
		parent::__construct($g_dsn, $nombreTablas);

		/************************ QUERYs ************************/
		
		//Consulta del modo de trabajo LIS
		$str_select = "SELECT codigo as \"lis_codigo\", matricula as \"lis_matricula\", nombre as \"lis_nombre\", caballaje as \"lis_caballaje\", fecha_baja as \"lis_fecha_baja\", propietario_dni as \"lis_propietario_dni\" FROM embarcacion";
		$this->setSelectForSearchQuery($str_select);

		//Where del modo de trabajo LIS
		//$str_where = "";
		//$this->setWhereForSearchQuery($str_where);

		//Order del modo de trabajo LIS
		$this->setOrderByForSearchQuery('1');


		//Consulta del modo de trabajo EDI
		$str_select_editar = "SELECT codigo as \"edi_codigo\", matricula as \"edi_matricula\", nombre as \"edi_nombre\", manga as \"edi_manga\", eslora as \"edi_eslora\", vela_motor as \"edi_vela_motor\", fecha_compra as \"edi_fecha_compra\", caballaje as \"edi_caballaje\", fecha_baja as \"edi_fecha_baja\", propietario_dni as \"edi_propietario_dni\", '' as \"edi_estado\" FROM embarcacion";		 
		$this->setSelectForEditQuery($str_select_editar);

		//Where del modo de trabajo EDI		 
		//$str_where_editar = "";
		//$this->setWhereForEditQuery($str_where_editar);

		//Order del modo de trabajo EDI
		$this->setOrderByForEditQuery('1');

		/************************ END QUERYs ************************/


		/************************ MATCHINGs ************************/

		//Seccion de matching: asociacion campos TPL y campos BD

		//Modo de trabajo FIL
		$this->addMatching("fil_codigo","codigo","embarcacion");
		$this->addMatching("fil_matricula","matricula","embarcacion");
		$this->addMatching("fil_nombre","nombre","embarcacion");
		$this->addMatching("fil_manga","manga","embarcacion");
		$this->addMatching("fil_eslora","eslora","embarcacion");
		$this->addMatching("fil_vela_motor","vela_motor","embarcacion");
		$this->addMatching("fil_fecha_compra","fecha_compra","embarcacion");
		$this->addMatching("fil_caballaje","caballaje","embarcacion");
		$this->addMatching("fil_fecha_baja","fecha_baja","embarcacion");
		$this->addMatching("fil_propietario_dni","propietario_dni","embarcacion");

		//Modo de trabajo LIS
		$this->addMatching("lis_codigo","codi go","embarcacion");
		$this->addMatching("lis_matricula","matricula","embarcacion");
		$this->addMatching("lis_nombre","nombre","embarcacion");
		$this->addMatching("lis_caballaje","caballaje","embarcacion");
		$this->addMatching("lis_fecha_baja","fecha_baja","embarcacion");
		$this->addMatching("lis_propietario_dni","propietario_dni","embarcacion");

		//Modo de trabajo EDI
		$this->addMatching("edi_codigo","codigo","embarcacion");
		$this->addMatching("edi_matricula","matricula","embarcacion");
		$this->addMatching("edi_nombre","nombre","embarcacion");
		$this->addMatching("edi_manga","manga","embarcacion");
		$this->addMatching("edi_eslora","eslora","embarcacion");
		$this->addMatching("edi_vela_motor","vela_motor","embarcacion");
		$this->addMatching("edi_fecha_compra","fecha_compra","embarcacion");
		$this->addMatching("edi_caballaje","caballaje","embarcacion");
		$this->addMatching("edi_fecha_baja","fecha_baja","embarcacion");
		$this->addMatching("edi_propietario_dni","propietario_dni","embarcacion");

		/************************ END MATCHINGs ************************/


		/************************ TYPEs ************************/
	
		//Fechas: gvHidraDate type
		$fecha = new gvHidraDate(false);
    	$fecha->setCalendar(false);
    	$this->addFieldType('fil_fecha_compra',$fecha);
		$fecha->setCalendar(true);
		$this->addFieldType('edi_fecha_compra',$fecha);

		$fecha = new gvHidraDate(false);
    	$fecha->setCalendar(false);
    	$this->addFieldType('fil_fecha_baja',$fecha);
    	$this->addFieldType('lis_fecha_baja',$fecha);
		$fecha->setCalendar(false);
		$this->addFieldType('edi_fecha_baja',$fecha);


		//Strings: gvHidraString type
		$string = new gvHidraString(false, 10);
		$this->addFieldType('fil_codigo',$string);
		$this->addFieldType('lis_codigo',$string);
		$string = new gvHidraString(false, 10);
		$this->addFieldType('edi_codigo',$string);
		
		$string = new gvHidraString(false, 12);
		$this->addFieldType('fil_matricula',$string);
		$this->addFieldType('lis_matricula',$string);
		$string = new gvHidraString(false, 12);
		$this->addFieldType('edi_matricula',$string);
		
		$string = new gvHidraString(false, 50);
		$this->addFieldType('fil_nombre',$string);
		$this->addFieldType('lis_nombre',$string);
		$string = new gvHidraString(false, 50);
		$this->addFieldType('edi_nombre',$string);
		
		$string = new gvHidraString(false, 1);
		$this->addFieldType('fil_vela_motor',$string);
		$this->addFieldType('edi_vela_motor',$string);
		
		$string = new gvHidraString(false, 13);
		$this->addFieldType('fil_propietario_dni',$string);
		$this->addFieldType('lis_propietario_dni',$string);
		$string = new gvHidraString(false, 13);
		$this->addFieldType('edi_propietario_dni',$string);
		

		//Integers: gvHidraInteger type
		$int = new gvHidraInteger(false, 4);
		$this->addFieldType('fil_caballaje',$int);
		$this->addFieldType('lis_caballaje',$int);		
		$this->addFieldType('edi_caballaje',$int);
		

		//Floats: gvHidraFloat type
		$float = new gvHidraFloat(false, 8);
		$float->setFloatLength(2);
		$this->addFieldType('fil_manga',$float);	
		$this->addFieldType('edi_manga',$float);
		
		$float = new gvHidraFloat(false, 8);
		$float->setFloatLength(2);
		$this->addFieldType('fil_eslora',$float);
		$this->addFieldType('edi_eslora',$float);
		
	

		
		/************************ END TYPEs ************************/
				
		/************************ COMPONENTS ************************/
		
		//Declaracion de Listas y WindowSelection
		$estado = new gvHidraList('edi_estado');
		$estado->addOption('','');
		$estado->addOption('A','Activo');
		$estado->addOption("B", "Baja");
		$estado->setSelected('');
		$this->addList($estado);
		
		
		$propietario = new gvHidraSelectionWindow('edi_propietario_dni', 'VAI_Propietarios');
		$propietario->addMatching('edi_propietario_dni','dni');
		$propietario->setRowsNumber(6);
		$propietario->setSize(800,600);
		$this->addSelectionWindow($propietario);
		
		
		
		//La definición debe estar en el AppMainWindow.php


		/************************ END COMPONENTS ************************/						

		
		//Mantener los valores del modo de trabajo FIL tras la busqueda
		$this->keepFilterValuesAfterSearch(true);
		$this->addTriggerEvent('edi_estado','addFechaBaja');
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
	* metodo preEditar
	* 
	* @access public
	* @param object $objDatos
	* 
	* Incorpore aqui la logica para parametrizar la edicion. Por ejemplo:
	* - Incluir condiciones de filtrado.
	* - Cancelar la accion. 
	*/	
	public function preEditar($objDatos) {
		
		return 0;
	}

	/**
	* metodo postEditar
	* 
	* @access public
	* @param object $objDatos
	* 
	* Incorpore aqui la logica para parametrizar los datos obtenidos. Por ejemplo:
	* - Completar la informacion obtenida.
	*/	
	public function postEditar($objDatos) {
		
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
	* - Cancelar la acci?n de insercion.
	*/		
	public function preInsertar($objDatos) {
		$matricula = $objDatos->getValue('edi_matricula');
		$sql = <<<query
		SELECT
			*
		FROM
			embarcacion
		WHERE
			matricula = $matricula
query;
		$resultado = $this->consultar($sql);
		if (count($resultado) > 0)
		{
			$this->showMessage('APL-2');
			return -1;
		}
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
	* - Cancelar la acci?n de actualizacion.
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
	* - Cancelar la acci?n de borrado.
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
		
		if($str_accion == "imprimir")
		{
			$objDatos->setOperation('seleccionar');
		
				
			//Creamos el objeto que manejará el informe
			$informeJ = new InformeJasper('DemoEjemplo');
				
			//Especificamos la fuente de datos, en este caso, una BD relacional
			$informeJ->setDataSourceType('sgbd');
				
			//Especificamos los parámetros relativos a la conexión con la BD relacional
			//Si coinciden con los del DSN de IGEP, podemos importarlos con:
			$conf = ConfigFramework::getConfig();
			$g_dsn = $conf->getDSN('g_dsn');
				
			$informeJ->importPearDSN($g_dsn);
				
				
			//Fijamos el fichero jasper que nos hace de plantilla
			$informeJ->setJasperFile('./plantillasJasper/embarcaciones.jasper');
		
		
			//Asignamos el informe como variable de clase para poder
			//acceder a él desde el fichero views donde realizaremos "la ejecución"
			$this->lanzarInforme = $informeJ;
				
			//Hacemos un fork de la ejecución en una nueva ventana, recuperando el forward del mapping
			$actionForward=$objDatos->getForward('gvHidraPrint');
			$this->openWindow($actionForward);
		
				
			//Continua ejecución padre
			$actionForward = $objDatos->getForward('gvHidraSuccess');
			return $actionForward;
		}
		
		
        
		throw new Exception('Se ha intentado ejecutar la acción '.$str_accion.' y no está programada.');        
    }
	
    
    
    
    
    
    public function addFechaBaja($objDatos)
    {
    	$estado = $objDatos->getValue('edi_estado');
    	if ($estado == 'B')
    	{
    		$hoy = new DateTime ('today');
    		$objDatos->setValue('edi_fecha_baja',$hoy);
    	}
    	else {
    		$objDatos->setEnable('edi_fecha_baja',false);
    	}
    	return 0;
    }
    
}//End  Embarcacion