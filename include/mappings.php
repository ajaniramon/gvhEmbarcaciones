<?php
/**
 * Controlador
 *
 * $Revision: 1.2 $
 */
 include 'igep/include/gvHidraMaps.php';


	class ComponentesMap extends gvHidraMaps {
        /**
         *      constructor function
         *      @return void
         */
		function ComponentesMap () {
                
            //Llamamos al constructor del padre. Cargamos la accines genéricas de Igep           	
			parent::gvHidraMaps();				

			$this->_AddMapping('abrirAplicacion', 'AppMainWindow');
			$this->_AddForward('abrirAplicacion', 'gvHidraOpenApp', 'index.php?view=igep/views/aplicacion.php');
			$this->_AddForward('abrirAplicacion', 'gvHidraCloseApp', 'index.php?view=igep/views/gvHidraCloseApp.php');
			
			//.....//	
		
			/*Propietarios*/
			$this->_AddMapping('Propietarios__iniciarVentana', 'Propietarios');
			$this->_AddForward('Propietarios__iniciarVentana', 'gvHidraSuccess', 'index.php?view=views/Propietarios/p_Propietarios.php&panel=buscar');
			$this->_AddForward('Propietarios__iniciarVentana', 'gvHidraError', 'index.php?view=views/Propietarios/p_Propietarios.php');

			$this->_AddMapping('Propietarios__buscar', 'Propietarios');
			$this->_AddForward('Propietarios__buscar', 'gvHidraSuccess', 'index.php?view=views/Propietarios/p_Propietarios.php&panel=listar');
			$this->_AddForward('Propietarios__buscar', 'gvHidraError', 'index.php?view=views/Propietarios/p_Propietarios.php');
			$this->_AddForward('Propietarios__buscar', 'gvHidraNoData', 'index.php?view=views/Propietarios/p_Propietarios.php&panel=listar');
			
			$this->_AddMapping('Propietarios__operarBD', 'Propietarios');
			$this->_AddForward('Propietarios__operarBD', 'gvHidraSuccess', 'index.php?view=views/Propietarios/p_Propietarios.php&panel=listar');
			$this->_AddForward('Propietarios__operarBD', 'gvHidraError', 'index.php?view=views/Propietarios/p_Propietarios.php');
			
			$this->_AddMapping('Propietarios__borrar', 'Propietarios');
			$this->_AddForward('Propietarios__borrar', 'gvHidraSuccess', 'index.php?view=views/Propietarios/p_Propietarios.php&panel=listar');
			$this->_AddForward('Propietarios__borrar', 'gvHidraError', 'index.php?view=views/Propietarios/p_Propietarios.php');			
			$this->_AddForward('Propietarios__borrar', 'gvHidraNoData', 'index.php?view=views/Propietarios/p_Propietarios.php&panel=buscar');
			
			$this->_AddMapping('Propietarios__cancelarTodo', 'Propietarios');
			$this->_AddForward('Propietarios__cancelarTodo', 'gvHidraSuccess', 'index.php?view=views/Propietarios/p_Propietarios.php');
			
			$this->_AddMapping('Propietarios__cancelarEdicion', 'Propietarios');
			$this->_AddForward('Propietarios__cancelarEdicion', 'gvHidraSuccess', 'index.php?view=views/Propietarios/p_Propietarios.php&panel=listar');
			
			$this->_AddMapping('Propietarios__editar', 'Propietarios');
			$this->_AddForward('Propietarios__editar', 'gvHidraSuccess', 'index.php?view=views/Propietarios/p_Propietarios.php&panel=editar');
			$this->_AddForward('Propietarios__editar', 'gvHidraError', 'index.php?view=views/Propietarios/p_Propietarios.php&panel=listar');
			
			$this->_AddMapping('Propietarios__nuevo', 'Propietarios');
			$this->_AddForward('Propietarios__nuevo', 'gvHidraSuccess', 'index.php?view=views/Propietarios/p_Propietarios.php&panel=listar');				
			
			$this->_AddMapping('Propietarios__insertar', 'Propietarios');
			$this->_AddForward('Propietarios__insertar', 'gvHidraSuccess', 'index.php?view=views/Propietarios/p_Propietarios.php&panel=buscar');
			$this->_AddForward('Propietarios__insertar', 'gvHidraError', 'index.php?view=views/Propietarios/p_Propietarios.php');
			
			$this->_AddMapping('Propietarios__modificar', 'Propietarios');
			$this->_AddForward('Propietarios__modificar', 'gvHidraSuccess', 'index.php?view=views/Propietarios/p_Propietarios.php&panel=listar');
			$this->_AddForward('Propietarios__modificar', 'gvHidraError', 'index.php?view=views/Propietarios/p_Propietarios.php');		
			/*ProvinciaMunicipioMa - ProvinciaMunicipioDet*/
			$this->_AddMapping('ProvinciaMunicipioMa__nuevo', 'ProvinciaMunicipioMa');
			$this->_AddForward('ProvinciaMunicipioMa__nuevo', 'gvHidraSuccess', 'index.php?view=views/Provincia-Municipio/p_ProvinciaMunicipioMa.php&panel=listar');

			$this->_AddMapping('ProvinciaMunicipioMa__operarBD', 'ProvinciaMunicipioMa');
			$this->_AddForward('ProvinciaMunicipioMa__operarBD', 'gvHidraSuccess', 'index.php?view=views/Provincia-Municipio/p_ProvinciaMunicipioMa.php&panel=listar');
			$this->_AddForward('ProvinciaMunicipioMa__operarBD', 'gvHidraError', 'index.php?view=views/Provincia-Municipio/p_ProvinciaMunicipioMa.php');
			$this->_AddForward('ProvinciaMunicipioMa__operarBD', 'gvHidraNoData', 'index.php?view=views/Provincia-Municipio/p_ProvinciaMunicipioMa.php&panel=buscar');

			$this->_AddMapping('ProvinciaMunicipioMa__iniciarVentana', 'ProvinciaMunicipioMa');
			$this->_AddForward('ProvinciaMunicipioMa__iniciarVentana', 'gvHidraSuccess', 'index.php?view=views/Provincia-Municipio/p_ProvinciaMunicipioMa.php&panel=buscar');
			$this->_AddForward('ProvinciaMunicipioMa__iniciarVentana', 'gvHidraError', 'index.php?view=views/Provincia-Municipio/p_ProvinciaMunicipioMa.php&panel=buscar');

			$this->_AddMapping('ProvinciaMunicipioMa__buscar', 'ProvinciaMunicipioMa');
			$this->_AddForward('ProvinciaMunicipioMa__buscar', 'gvHidraSuccess', 'index.php?view=views/Provincia-Municipio/p_ProvinciaMunicipioMa.php&panel=listar');
			$this->_AddForward('ProvinciaMunicipioMa__buscar', 'gvHidraError', 'index.php?view=views/Provincia-Municipio/p_ProvinciaMunicipioMa.php&panel=listar');
			$this->_AddForward('ProvinciaMunicipioMa__buscar', 'gvHidraNoData', 'index.php?view=views/Provincia-Municipio/p_ProvinciaMunicipioMa.php&panel=buscar');

			$this->_AddMapping('ProvinciaMunicipioMa__cancelarTodo', 'ProvinciaMunicipioMa');
			$this->_AddForward('ProvinciaMunicipioMa__cancelarTodo', 'gvHidraSuccess', 'index.php?view=views/Provincia-Municipio/p_ProvinciaMunicipioMa.php');

			$this->_AddMapping('ProvinciaMunicipioMa__recargar', 'ProvinciaMunicipioMa');
			$this->_AddForward('ProvinciaMunicipioMa__recargar', 'gvHidraSuccess', 'index.php?view=views/Provincia-Municipio/p_ProvinciaMunicipioMa.php&panel=listar');
			$this->_AddForward('ProvinciaMunicipioMa__recargar', 'gvHidraError', 'index.php?view=views/Provincia-Municipio/p_ProvinciaMunicipioMa.php&panel=listar');

			$this->_AddMapping('ProvinciaMunicipioDet__operarBD', 'ProvinciaMunicipioDet');
			$this->_AddForward('ProvinciaMunicipioDet__operarBD', 'gvHidraSuccess', 'index.php?view=views/Provincia-Municipio/p_ProvinciaMunicipioMa.php&panel=listar');
			$this->_AddForward('ProvinciaMunicipioDet__operarBD', 'gvHidraError', 'index.php?view=views/Provincia-Municipio/p_ProvinciaMunicipioMa.php');
			/*Embarcacion*/
			
			$this->_AddMapping('Embarcacion__imprimir', 'Embarcacion');
			$this->_AddForward('Embarcacion__imprimir', 'gvHidraSuccess', 'index.php?view=views/Embarcaciones/p_Embarcacion.php&panel=buscar');
			$this->_AddForward('Embarcacion__imprimir', 'gvHidraPrint', 'index.php?view=views/Embarcaciones/l_Embarcaciones.php');
				
			
			
			$this->_AddMapping('Embarcacion__iniciarVentana', 'Embarcacion');
			$this->_AddForward('Embarcacion__iniciarVentana', 'gvHidraSuccess', 'index.php?view=views/Embarcaciones/p_Embarcacion.php&panel=buscar');
			$this->_AddForward('Embarcacion__iniciarVentana', 'gvHidraError', 'index.php?view=views/Embarcaciones/p_Embarcacion.php');

			$this->_AddMapping('Embarcacion__buscar', 'Embarcacion');
			$this->_AddForward('Embarcacion__buscar', 'gvHidraSuccess', 'index.php?view=views/Embarcaciones/p_Embarcacion.php&panel=listar');
			$this->_AddForward('Embarcacion__buscar', 'gvHidraError', 'index.php?view=views/Embarcaciones/p_Embarcacion.php');
			$this->_AddForward('Embarcacion__buscar', 'gvHidraNoData', 'index.php?view=views/Embarcaciones/p_Embarcacion.php&panel=listar');
			
			$this->_AddMapping('Embarcacion__borrar', 'Embarcacion');
			$this->_AddForward('Embarcacion__borrar', 'gvHidraSuccess', 'index.php?view=views/Embarcaciones/p_Embarcacion.php&panel=listar');
			$this->_AddForward('Embarcacion__borrar', 'gvHidraError', 'index.php?view=views/Embarcaciones/p_Embarcacion.php');
			$this->_AddForward('Embarcacion__borrar', 'gvHidraNoData', 'index.php?view=views/Embarcaciones/p_Embarcacion.php&panel=buscar');
			
			$this->_AddMapping('Embarcacion__cancelarTodo', 'Embarcacion');
			$this->_AddForward('Embarcacion__cancelarTodo', 'gvHidraSuccess', 'index.php?view=views/Embarcaciones/p_Embarcacion.php');
			
			$this->_AddMapping('Embarcacion__cancelarEdicion', 'Embarcacion');
			$this->_AddForward('Embarcacion__cancelarEdicion', 'gvHidraSuccess', 'index.php?view=views/Embarcaciones/p_Embarcacion.php&panel=listar');
			
			$this->_AddMapping('Embarcacion__editar', 'Embarcacion');
			$this->_AddForward('Embarcacion__editar', 'gvHidraSuccess', 'index.php?view=views/Embarcaciones/p_Embarcacion.php&panel=editar');
			$this->_AddForward('Embarcacion__editar', 'gvHidraError', 'index.php?view=views/Embarcaciones/p_Embarcacion.php&panel=listar');
			
			$this->_AddMapping('Embarcacion__nuevo', 'Embarcacion');
			$this->_AddForward('Embarcacion__nuevo', 'gvHidraSuccess', 'index.php?view=views/Embarcaciones/p_Embarcacion.php&panel=editar');
			
			$this->_AddMapping('Embarcacion__insertar', 'Embarcacion');
			$this->_AddForward('Embarcacion__insertar', 'gvHidraSuccess', 'index.php?view=views/Embarcaciones/p_Embarcacion.php&panel=editar');
			$this->_AddForward('Embarcacion__insertar', 'gvHidraError', 'index.php?view=views/Embarcaciones/p_Embarcacion.php');
			
			$this->_AddMapping('Embarcacion__modificar', 'Embarcacion');
			$this->_AddForward('Embarcacion__modificar', 'gvHidraSuccess', 'index.php?view=views/Embarcaciones/p_Embarcacion.php&panel=listar');
			$this->_AddForward('Embarcacion__modificar', 'gvHidraError', 'index.php?view=views/Embarcaciones/p_Embarcacion.php&panel=listar');		
			/*EmbarcaEstanciaMa - EmbarcaEstanciaDet*/
			$this->_AddMapping('EmbarcaEstanciaMa__nuevo', 'EmbarcaEstanciaMa');
			$this->_AddForward('EmbarcaEstanciaMa__nuevo', 'gvHidraSuccess', 'index.php?view=views/Embarcaciones/p_EmbarcaEstanciaMa.php&panel=listar');

			$this->_AddMapping('EmbarcaEstanciaMa__operarBD', 'EmbarcaEstanciaMa');
			$this->_AddForward('EmbarcaEstanciaMa__operarBD', 'gvHidraSuccess', 'index.php?view=views/Embarcaciones/p_EmbarcaEstanciaMa.php&panel=listar');
			$this->_AddForward('EmbarcaEstanciaMa__operarBD', 'gvHidraError', 'index.php?view=views/Embarcaciones/p_EmbarcaEstanciaMa.php');
			$this->_AddForward('EmbarcaEstanciaMa__operarBD', 'gvHidraNoData', 'index.php?view=views/Embarcaciones/p_EmbarcaEstanciaMa.php&panel=buscar');

			$this->_AddMapping('EmbarcaEstanciaMa__iniciarVentana', 'EmbarcaEstanciaMa');
			$this->_AddForward('EmbarcaEstanciaMa__iniciarVentana', 'gvHidraSuccess', 'index.php?view=views/Embarcaciones/p_EmbarcaEstanciaMa.php&panel=buscar');
			$this->_AddForward('EmbarcaEstanciaMa__iniciarVentana', 'gvHidraError', 'index.php?view=views/Embarcaciones/p_EmbarcaEstanciaMa.php&panel=buscar');

			$this->_AddMapping('EmbarcaEstanciaMa__buscar', 'EmbarcaEstanciaMa');
			$this->_AddForward('EmbarcaEstanciaMa__buscar', 'gvHidraSuccess', 'index.php?view=views/Embarcaciones/p_EmbarcaEstanciaMa.php&panel=listar');
			$this->_AddForward('EmbarcaEstanciaMa__buscar', 'gvHidraError', 'index.php?view=views/Embarcaciones/p_EmbarcaEstanciaMa.php&panel=listar');
			$this->_AddForward('EmbarcaEstanciaMa__buscar', 'gvHidraNoData', 'index.php?view=views/Embarcaciones/p_EmbarcaEstanciaMa.php&panel=buscar');

			$this->_AddMapping('EmbarcaEstanciaMa__cancelarTodo', 'EmbarcaEstanciaMa');
			$this->_AddForward('EmbarcaEstanciaMa__cancelarTodo', 'gvHidraSuccess', 'index.php?view=views/Embarcaciones/p_EmbarcaEstanciaMa.php');

			$this->_AddMapping('EmbarcaEstanciaMa__recargar', 'EmbarcaEstanciaMa');
			$this->_AddForward('EmbarcaEstanciaMa__recargar', 'gvHidraSuccess', 'index.php?view=views/Embarcaciones/p_EmbarcaEstanciaMa.php&panel=listar');
			$this->_AddForward('EmbarcaEstanciaMa__recargar', 'gvHidraError', 'index.php?view=views/Embarcaciones/p_EmbarcaEstanciaMa.php&panel=listar');

			$this->_AddMapping('EmbarcaEstanciaDet__operarBD', 'EmbarcaEstanciaDet');
			$this->_AddForward('EmbarcaEstanciaDet__operarBD', 'gvHidraSuccess', 'index.php?view=views/Embarcaciones/p_EmbarcaEstanciaMa.php&panel=listar');
			$this->_AddForward('EmbarcaEstanciaDet__operarBD', 'gvHidraError', 'index.php?view=views/Embarcaciones/p_EmbarcaEstanciaMa.php');		
			/*Puertos - Amarres*/
			$this->_AddMapping('Puertos__nuevo', 'Puertos');
			$this->_AddForward('Puertos__nuevo', 'gvHidraSuccess', 'index.php?view=views/PuertosAmarres/p_Puertos.php&panel=listar');

			$this->_AddMapping('Puertos__operarBD', 'Puertos');
			$this->_AddForward('Puertos__operarBD', 'gvHidraSuccess', 'index.php?view=views/PuertosAmarres/p_Puertos.php&panel=listar');
			$this->_AddForward('Puertos__operarBD', 'gvHidraError', 'index.php?view=views/PuertosAmarres/p_Puertos.php');
			$this->_AddForward('Puertos__operarBD', 'gvHidraNoData', 'index.php?view=views/PuertosAmarres/p_Puertos.php&panel=buscar');

			$this->_AddMapping('Puertos__iniciarVentana', 'Puertos');
			$this->_AddForward('Puertos__iniciarVentana', 'gvHidraSuccess', 'index.php?view=views/PuertosAmarres/p_Puertos.php&panel=buscar');
			$this->_AddForward('Puertos__iniciarVentana', 'gvHidraError', 'index.php?view=views/PuertosAmarres/p_Puertos.php&panel=buscar');

			$this->_AddMapping('Puertos__buscar', 'Puertos');
			$this->_AddForward('Puertos__buscar', 'gvHidraSuccess', 'index.php?view=views/PuertosAmarres/p_Puertos.php&panel=listar');
			$this->_AddForward('Puertos__buscar', 'gvHidraError', 'index.php?view=views/PuertosAmarres/p_Puertos.php&panel=listar');
			$this->_AddForward('Puertos__buscar', 'gvHidraNoData', 'index.php?view=views/PuertosAmarres/p_Puertos.php&panel=buscar');

			$this->_AddMapping('Puertos__cancelarTodo', 'Puertos');
			$this->_AddForward('Puertos__cancelarTodo', 'gvHidraSuccess', 'index.php?view=views/PuertosAmarres/p_Puertos.php');

			$this->_AddMapping('Puertos__recargar', 'Puertos');
			$this->_AddForward('Puertos__recargar', 'gvHidraSuccess', 'index.php?view=views/PuertosAmarres/p_Puertos.php&panel=listar');
			$this->_AddForward('Puertos__recargar', 'gvHidraError', 'index.php?view=views/PuertosAmarres/p_Puertos.php&panel=listar');

			$this->_AddMapping('Amarres__operarBD', 'Amarres');
			$this->_AddForward('Amarres__operarBD', 'gvHidraSuccess', 'index.php?view=views/PuertosAmarres/p_Puertos.php&panel=listar');
			$this->_AddForward('Amarres__operarBD', 'gvHidraError', 'index.php?view=views/PuertosAmarres/p_Puertos.php');}}?>