<?php /* Smarty version 2.6.14, created on 2016-03-11 12:42:15
         compiled from Provincia-Municipio/p_ProvinciaMunicipioMa.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'CWVentana', 'Provincia-Municipio/p_ProvinciaMunicipioMa.tpl', 1, false),array('block', 'CWBarra', 'Provincia-Municipio/p_ProvinciaMunicipioMa.tpl', 2, false),array('block', 'CWMarcoPanel', 'Provincia-Municipio/p_ProvinciaMunicipioMa.tpl', 5, false),array('block', 'CWPanel', 'Provincia-Municipio/p_ProvinciaMunicipioMa.tpl', 9, false),array('block', 'CWBarraSupPanel', 'Provincia-Municipio/p_ProvinciaMunicipioMa.tpl', 10, false),array('block', 'CWContenedor', 'Provincia-Municipio/p_ProvinciaMunicipioMa.tpl', 14, false),array('block', 'CWFicha', 'Provincia-Municipio/p_ProvinciaMunicipioMa.tpl', 15, false),array('block', 'CWBarraInfPanel', 'Provincia-Municipio/p_ProvinciaMunicipioMa.tpl', 27, false),array('block', 'CWTabla', 'Provincia-Municipio/p_ProvinciaMunicipioMa.tpl', 41, false),array('block', 'CWFila', 'Provincia-Municipio/p_ProvinciaMunicipioMa.tpl', 42, false),array('block', 'CWContenedorPestanyas', 'Provincia-Municipio/p_ProvinciaMunicipioMa.tpl', 56, false),array('function', 'CWMenuLayer', 'Provincia-Municipio/p_ProvinciaMunicipioMa.tpl', 3, false),array('function', 'CWBotonTooltip', 'Provincia-Municipio/p_ProvinciaMunicipioMa.tpl', 11, false),array('function', 'CWCampoTexto', 'Provincia-Municipio/p_ProvinciaMunicipioMa.tpl', 18, false),array('function', 'CWBoton', 'Provincia-Municipio/p_ProvinciaMunicipioMa.tpl', 28, false),array('function', 'CWPaginador', 'Provincia-Municipio/p_ProvinciaMunicipioMa.tpl', 46, false),array('function', 'CWPestanya', 'Provincia-Municipio/p_ProvinciaMunicipioMa.tpl', 57, false),)), $this); ?>
<?php $this->_tag_stack[] = array('CWVentana', array('tipoAviso' => $this->_tpl_vars['smty_tipoAviso'],'codAviso' => $this->_tpl_vars['smty_codError'],'descBreve' => $this->_tpl_vars['smty_descBreve'],'textoAviso' => $this->_tpl_vars['smty_textoAviso'],'onLoad' => $this->_tpl_vars['smty_jsOnLoad'])); $_block_repeat=true;smarty_block_CWVentana($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start();  $this->_tag_stack[] = array('CWBarra', array('usuario' => $this->_tpl_vars['smty_usuario'],'codigo' => $this->_tpl_vars['smty_codigo'],'customTitle' => $this->_tpl_vars['smty_customTitle'],'modal' => $this->_tpl_vars['smty_modal'],'iconOut' => "glyphicon glyphicon-log-out",'iconHome' => "glyphicon glyphicon-home",'iconInfo' => "glyphicon glyphicon-info-sign")); $_block_repeat=true;smarty_block_CWBarra($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>	
	<?php echo smarty_function_CWMenuLayer(array('name' => ($this->_tpl_vars['smty_nombre']),'cadenaMenu' => ($this->_tpl_vars['smty_cadenaMenu'])), $this);?>
	
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_CWBarra($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);  $this->_tag_stack[] = array('CWMarcoPanel', array('conPestanyas' => 'true')); $_block_repeat=true;smarty_block_CWMarcoPanel($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>

<!-- ********************************************** MAESTRO **********************************************-->
	<!--*********** PANEL fil ******************-->
	<?php $this->_tag_stack[] = array('CWPanel', array('id' => 'fil','action' => 'buscar','method' => 'post','estado' => $this->_tpl_vars['estado_fil'],'claseManejadora' => 'ProvinciaMunicipioMa')); $_block_repeat=true;smarty_block_CWPanel($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php $this->_tag_stack[] = array('CWBarraSupPanel', array('titulo' => "Búsqueda de provincias")); $_block_repeat=true;smarty_block_CWBarraSupPanel($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo smarty_function_CWBotonTooltip(array('imagen' => '01','iconCSS' => "glyphicon glyphicon-plus",'titulo' => 'Insertar registros','funcion' => 'insertar','actuaSobre' => 'ficha','action' => 'ProvinciaMunicipioMa__nuevo'), $this);?>

			<?php echo smarty_function_CWBotonTooltip(array('imagen' => '04','iconCSS' => "glyphicon glyphicon-refresh",'titulo' => 'Restaurar valores','funcion' => 'restaurar','actuaSobre' => 'ficha'), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_CWBarraSupPanel($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php $this->_tag_stack[] = array('CWContenedor', array()); $_block_repeat=true;smarty_block_CWContenedor($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php $this->_tag_stack[] = array('CWFicha', array()); $_block_repeat=true;smarty_block_CWFicha($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<table class="text" cellspacing="4" cellpadding="4" border="0">
					<tr>
					 	<td><?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Cprov','nombre' => 'fil_cprov','size' => '5','editable' => 'true','visible' => 'true','value' => $this->_tpl_vars['defaultData_ProvinciaMunicipioMa']['cprov'],'dataType' => $this->_tpl_vars['dataType_ProvinciaMunicipioMa']['cprov']), $this);?>
</td>
					</tr>
					<tr>
					 	<td><?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Dprov','nombre' => 'fil_dprov','size' => '30','editable' => 'true','visible' => 'true','value' => $this->_tpl_vars['defaultData_ProvinciaMunicipioMa']['fil_dprov'],'dataType' => $this->_tpl_vars['dataType_ProvinciaMunicipioMa']['fil_dprov']), $this);?>
</td>
					</tr>
				</table>
				<br/>
			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_CWFicha($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_CWContenedor($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php $this->_tag_stack[] = array('CWBarraInfPanel', array()); $_block_repeat=true;smarty_block_CWBarraInfPanel($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo smarty_function_CWBoton(array('imagen' => '50','iconCSS' => "glyphicon glyphicon-search",'texto' => 'Buscar','class' => 'button','accion' => 'buscar','mostrarEspera' => 'true'), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_CWBarraInfPanel($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>						
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_CWPanel($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	
	<!--*********** PANEL lis ******************-->	
	<?php $this->_tag_stack[] = array('CWPanel', array('id' => 'lis','tipoComprobacion' => 'envio','esMaestro' => 'true','itemSeleccionado' => $this->_tpl_vars['smty_filaSeleccionada'],'action' => 'operarBD','method' => 'post','estado' => $this->_tpl_vars['estado_lis'],'claseManejadora' => 'ProvinciaMunicipioMa')); $_block_repeat=true;smarty_block_CWPanel($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php $this->_tag_stack[] = array('CWBarraSupPanel', array('titulo' => 'Listado de provincias')); $_block_repeat=true;smarty_block_CWBarraSupPanel($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo smarty_function_CWBotonTooltip(array('imagen' => '01','iconCSS' => "glyphicon glyphicon-plus",'titulo' => 'Insertar registro','funcion' => 'insertar','actuaSobre' => 'tabla','action' => 'ProvinciaMunicipioMa__nuevo'), $this);?>

			<?php echo smarty_function_CWBotonTooltip(array('imagen' => '02','iconCSS' => "glyphicon glyphicon-edit",'titulo' => 'Modificar registro','funcion' => 'modificar','actuaSobre' => 'tabla'), $this);?>

			<?php echo smarty_function_CWBotonTooltip(array('imagen' => '03','iconCSS' => "glyphicon glyphicon-minus",'titulo' => 'Eliminar registro','funcion' => 'eliminar','actuaSobre' => 'tabla'), $this);?>

			<?php echo smarty_function_CWBotonTooltip(array('imagen' => '04','iconCSS' => "glyphicon glyphicon-refresh",'titulo' => 'Restaurar valores','funcion' => 'limpiar','actuaSobre' => 'tabla'), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_CWBarraSupPanel($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php $this->_tag_stack[] = array('CWContenedor', array()); $_block_repeat=true;smarty_block_CWContenedor($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php $this->_tag_stack[] = array('CWTabla', array('conCheck' => 'true','conCheckTodos' => 'false','id' => 'Tabla1','numFilasPantalla' => '6','datos' => $this->_tpl_vars['smty_datosTablaM'])); $_block_repeat=true;smarty_block_CWTabla($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php $this->_tag_stack[] = array('CWFila', array('tipoListado' => 'false')); $_block_repeat=true;smarty_block_CWFila($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
					<?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Cprov','nombre' => 'lis_cprov','size' => '5','editable' => 'true','visible' => 'true','value' => $this->_tpl_vars['defaultData_ProvinciaMunicipioMa']['cprov'],'dataType' => $this->_tpl_vars['dataType_ProvinciaMunicipioMa']['cprov']), $this);?>

					<?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Dprov','nombre' => 'lis_dprov','size' => '30','editable' => 'true','visible' => 'true','value' => $this->_tpl_vars['defaultData_ProvinciaMunicipioMa']['lis_dprov'],'dataType' => $this->_tpl_vars['dataType_ProvinciaMunicipioMa']['lis_dprov'],'actualizaA' => 'lis_dprov'), $this);?>

				<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_CWFila($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>				
				<?php echo smarty_function_CWPaginador(array('enlacesVisibles' => '3','iconCSS' => 'true'), $this);?>

			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_CWTabla($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_CWContenedor($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php $this->_tag_stack[] = array('CWBarraInfPanel', array()); $_block_repeat=true;smarty_block_CWBarraInfPanel($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo smarty_function_CWBoton(array('imagen' => '41','iconCSS' => "glyphicon glyphicon-ok",'texto' => 'Guardar','class' => 'button','accion' => 'guardar'), $this);?>

			<?php echo smarty_function_CWBoton(array('imagen' => '42','iconCSS' => "glyphicon glyphicon-remove",'texto' => 'Cancelar','class' => 'button','accion' => 'cancelar'), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_CWBarraInfPanel($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>						
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_CWPanel($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	
	<!-- ****************** PESTAÑAS MAESTRO ************************-->	
	<?php $this->_tag_stack[] = array('CWContenedorPestanyas', array('id' => 'Maestro')); $_block_repeat=true;smarty_block_CWContenedorPestanyas($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>				
		<?php echo smarty_function_CWPestanya(array('tipo' => 'fil','panelAsociado' => 'fil','estado' => $this->_tpl_vars['estado_fil'],'ocultar' => 'Detalle'), $this);?>

		<?php echo smarty_function_CWPestanya(array('tipo' => 'lis','panelAsociado' => 'lis','estado' => $this->_tpl_vars['estado_lis'],'mostrar' => 'Detalle'), $this);?>

	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_CWContenedorPestanyas($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</td></tr>
<tr><td>																																									
<!-- ************************************ DETALLE *****************************************-->
	<!--*********** PANEL lis ******************-->
	<?php if (count ( $this->_tpl_vars['smty_datosTablaM'] ) > 0): ?>
	<?php $this->_tag_stack[] = array('CWPanel', array('id' => 'lisDetalle','detalleDe' => 'lis','tipoComprobacion' => 'envio','action' => 'operarBD','method' => 'post','estado' => 'on','claseManejadora' => 'ProvinciaMunicipioDet')); $_block_repeat=true;smarty_block_CWPanel($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php $this->_tag_stack[] = array('CWBarraSupPanel', array('titulo' => 'Listado de Municipios')); $_block_repeat=true;smarty_block_CWBarraSupPanel($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo smarty_function_CWBotonTooltip(array('imagen' => '01','iconCSS' => "glyphicon glyphicon-plus",'titulo' => 'Insertar registros','funcion' => 'insertar','actuaSobre' => 'tabla'), $this);?>

			<?php echo smarty_function_CWBotonTooltip(array('imagen' => '02','iconCSS' => "glyphicon glyphicon-edit",'titulo' => 'Modificar registros','funcion' => 'modificar','actuaSobre' => 'tabla'), $this);?>

			<?php echo smarty_function_CWBotonTooltip(array('imagen' => '03','iconCSS' => "glyphicon glyphicon-minus",'titulo' => 'Eliminar registros','funcion' => 'eliminar','actuaSobre' => 'tabla'), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_CWBarraSupPanel($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php $this->_tag_stack[] = array('CWContenedor', array()); $_block_repeat=true;smarty_block_CWContenedor($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>			
			<?php $this->_tag_stack[] = array('CWTabla', array('conCheck' => 'true','id' => 'TablaDetalle','numFilasPantalla' => '6','datos' => $this->_tpl_vars['smty_datosTablaD'])); $_block_repeat=true;smarty_block_CWTabla($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php $this->_tag_stack[] = array('CWFila', array('tipoListado' => 'false')); $_block_repeat=true;smarty_block_CWFila($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
					<?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Cmun','nombre' => 'lis_cmun','size' => '5','editable' => 'true','value' => $this->_tpl_vars['defaultData_ProvinciaMunicipioDet']['lis_cmun'],'dataType' => $this->_tpl_vars['dataType_ProvinciaMunicipioDet']['lis_cmun']), $this);?>

					<?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Dmun','nombre' => 'lis_dmun','size' => '30','editable' => 'true','value' => $this->_tpl_vars['defaultData_ProvinciaMunicipioDet']['lis_dmun'],'dataType' => $this->_tpl_vars['dataType_ProvinciaMunicipioDet']['lis_dmun'],'actualizaA' => 'lis_dmun'), $this);?>

					<?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Provincia cprov','nombre' => 'lis_provincia_cprov','size' => '5','editable' => 'true','value' => $this->_tpl_vars['defaultData_ProvinciaMunicipioDet']['provincia_cprov'],'dataType' => $this->_tpl_vars['dataType_ProvinciaMunicipioDet']['provincia_cprov']), $this);?>

				<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_CWFila($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>				
				<?php echo smarty_function_CWPaginador(array('enlacesVisibles' => '3','iconCSS' => 'true'), $this);?>

			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_CWTabla($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>	 		
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_CWContenedor($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php $this->_tag_stack[] = array('CWBarraInfPanel', array()); $_block_repeat=true;smarty_block_CWBarraInfPanel($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo smarty_function_CWBoton(array('imagen' => '41','iconCSS' => "glyphicon glyphicon-ok",'texto' => 'Guardar','class' => 'button','accion' => 'guardar'), $this);?>

			<?php echo smarty_function_CWBoton(array('imagen' => '42','iconCSS' => "glyphicon glyphicon-remove",'texto' => 'Cancelar','class' => 'button','accion' => 'cancelar'), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_CWBarraInfPanel($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>						
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_CWPanel($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>	
		
	<!-- ****************** PESTAÑAS DETALLE ************************-->	
	<?php $this->_tag_stack[] = array('CWContenedorPestanyas', array('id' => 'Detalle')); $_block_repeat=true;smarty_block_CWContenedorPestanyas($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php echo smarty_function_CWPestanya(array('tipo' => 'lis','panelAsociado' => 'lisDetalle','estado' => 'on'), $this);?>

	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_CWContenedorPestanyas($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php endif;  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_CWMarcoPanel($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_CWVentana($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>