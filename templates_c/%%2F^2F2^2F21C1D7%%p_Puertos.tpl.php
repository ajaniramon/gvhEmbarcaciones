<?php /* Smarty version 2.6.14, created on 2016-03-14 11:27:16
         compiled from PuertosAmarres/p_Puertos.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'CWVentana', 'PuertosAmarres/p_Puertos.tpl', 1, false),array('block', 'CWBarra', 'PuertosAmarres/p_Puertos.tpl', 2, false),array('block', 'CWMarcoPanel', 'PuertosAmarres/p_Puertos.tpl', 5, false),array('block', 'CWPanel', 'PuertosAmarres/p_Puertos.tpl', 9, false),array('block', 'CWBarraSupPanel', 'PuertosAmarres/p_Puertos.tpl', 10, false),array('block', 'CWContenedor', 'PuertosAmarres/p_Puertos.tpl', 14, false),array('block', 'CWFicha', 'PuertosAmarres/p_Puertos.tpl', 15, false),array('block', 'CWBarraInfPanel', 'PuertosAmarres/p_Puertos.tpl', 39, false),array('block', 'CWTabla', 'PuertosAmarres/p_Puertos.tpl', 53, false),array('block', 'CWFila', 'PuertosAmarres/p_Puertos.tpl', 54, false),array('block', 'CWContenedorPestanyas', 'PuertosAmarres/p_Puertos.tpl', 72, false),array('function', 'CWMenuLayer', 'PuertosAmarres/p_Puertos.tpl', 3, false),array('function', 'CWBotonTooltip', 'PuertosAmarres/p_Puertos.tpl', 11, false),array('function', 'CWCampoTexto', 'PuertosAmarres/p_Puertos.tpl', 18, false),array('function', 'CWBoton', 'PuertosAmarres/p_Puertos.tpl', 40, false),array('function', 'CWPaginador', 'PuertosAmarres/p_Puertos.tpl', 62, false),array('function', 'CWPestanya', 'PuertosAmarres/p_Puertos.tpl', 73, false),array('function', 'CWLista', 'PuertosAmarres/p_Puertos.tpl', 92, false),)), $this); ?>
<?php $this->_tag_stack[] = array('CWVentana', array('tipoAviso' => $this->_tpl_vars['smty_tipoAviso'],'codAviso' => $this->_tpl_vars['smty_codError'],'descBreve' => $this->_tpl_vars['smty_descBreve'],'textoAviso' => $this->_tpl_vars['smty_textoAviso'],'onLoad' => $this->_tpl_vars['smty_jsOnLoad'])); $_block_repeat=true;smarty_block_CWVentana($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start();  $this->_tag_stack[] = array('CWBarra', array('usuario' => $this->_tpl_vars['smty_usuario'],'codigo' => $this->_tpl_vars['smty_codigo'],'customTitle' => $this->_tpl_vars['smty_customTitle'],'modal' => $this->_tpl_vars['smty_modal'],'iconOut' => "glyphicon glyphicon-log-out",'iconHome' => "glyphicon glyphicon-home",'iconInfo' => "glyphicon glyphicon-info-sign")); $_block_repeat=true;smarty_block_CWBarra($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>	
	<?php echo smarty_function_CWMenuLayer(array('name' => ($this->_tpl_vars['smty_nombre']),'cadenaMenu' => ($this->_tpl_vars['smty_cadenaMenu'])), $this);?>
	
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_CWBarra($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);  $this->_tag_stack[] = array('CWMarcoPanel', array('conPestanyas' => 'true')); $_block_repeat=true;smarty_block_CWMarcoPanel($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>

<!-- ********************************************** MAESTRO **********************************************-->
	<!--*********** PANEL fil ******************-->
	<?php $this->_tag_stack[] = array('CWPanel', array('id' => 'fil','action' => 'buscar','method' => 'post','estado' => $this->_tpl_vars['estado_fil'],'claseManejadora' => 'Puertos')); $_block_repeat=true;smarty_block_CWPanel($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php $this->_tag_stack[] = array('CWBarraSupPanel', array('titulo' => 'Puertos')); $_block_repeat=true;smarty_block_CWBarraSupPanel($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo smarty_function_CWBotonTooltip(array('imagen' => '01','iconCSS' => "glyphicon glyphicon-plus",'titulo' => 'Insertar registros','funcion' => 'insertar','actuaSobre' => 'ficha','action' => 'Puertos__nuevo'), $this);?>

			<?php echo smarty_function_CWBotonTooltip(array('imagen' => '04','iconCSS' => "glyphicon glyphicon-refresh",'titulo' => 'Restaurar valores','funcion' => 'restaurar','actuaSobre' => 'ficha'), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_CWBarraSupPanel($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php $this->_tag_stack[] = array('CWContenedor', array()); $_block_repeat=true;smarty_block_CWContenedor($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php $this->_tag_stack[] = array('CWFicha', array()); $_block_repeat=true;smarty_block_CWFicha($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<table class="text" cellspacing="4" cellpadding="4" border="0">
					<tr>
					 	<td><?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Cpuerto','nombre' => 'fil_cpuerto','size' => '5','editable' => 'true','visible' => 'true','value' => $this->_tpl_vars['defaultData_Puertos']['cpuerto'],'dataType' => $this->_tpl_vars['dataType_Puertos']['cpuerto']), $this);?>
</td>
					</tr>
					<tr>
					 	<td><?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Dpuerto','nombre' => 'fil_dpuerto','size' => '30','editable' => 'true','visible' => 'true','value' => $this->_tpl_vars['defaultData_Puertos']['fil_dpuerto'],'dataType' => $this->_tpl_vars['dataType_Puertos']['fil_dpuerto']), $this);?>
</td>
					</tr>
					<tr>
					 	<td><?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Direccion','nombre' => 'fil_direccion','size' => '50','editable' => 'true','visible' => 'true','value' => $this->_tpl_vars['defaultData_Puertos']['fil_direccion'],'dataType' => $this->_tpl_vars['dataType_Puertos']['fil_direccion']), $this);?>
</td>
					</tr>
					<tr>
					 	<td><?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Telefono','nombre' => 'fil_telefono','size' => '20','editable' => 'true','visible' => 'true','value' => $this->_tpl_vars['defaultData_Puertos']['fil_telefono'],'dataType' => $this->_tpl_vars['dataType_Puertos']['fil_telefono']), $this);?>
</td>
					</tr>
					<tr>
					 	<td><?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Municipio cmun','nombre' => 'fil_municipio_cmun','size' => '5','editable' => 'true','visible' => 'true','value' => $this->_tpl_vars['defaultData_Puertos']['fil_municipio_cmun'],'dataType' => $this->_tpl_vars['dataType_Puertos']['fil_municipio_cmun']), $this);?>
</td>
					</tr>
					<tr>
					 	<td><?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Num amarres','nombre' => 'fil_num_amarres','size' => '4','editable' => 'true','visible' => 'true','value' => $this->_tpl_vars['defaultData_Puertos']['fil_num_amarres'],'dataType' => $this->_tpl_vars['dataType_Puertos']['fil_num_amarres']), $this);?>
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
	<?php $this->_tag_stack[] = array('CWPanel', array('id' => 'lis','tipoComprobacion' => 'envio','esMaestro' => 'true','itemSeleccionado' => $this->_tpl_vars['smty_filaSeleccionada'],'action' => 'operarBD','method' => 'post','estado' => $this->_tpl_vars['estado_lis'],'claseManejadora' => 'Puertos')); $_block_repeat=true;smarty_block_CWPanel($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php $this->_tag_stack[] = array('CWBarraSupPanel', array('titulo' => 'Puertos')); $_block_repeat=true;smarty_block_CWBarraSupPanel($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo smarty_function_CWBotonTooltip(array('imagen' => '01','iconCSS' => "glyphicon glyphicon-plus",'titulo' => 'Insertar registro','funcion' => 'insertar','actuaSobre' => 'tabla','action' => 'Puertos__nuevo'), $this);?>

			<?php echo smarty_function_CWBotonTooltip(array('imagen' => '02','iconCSS' => "glyphicon glyphicon-edit",'titulo' => 'Modificar registro','funcion' => 'modificar','actuaSobre' => 'tabla'), $this);?>

			<?php echo smarty_function_CWBotonTooltip(array('imagen' => '03','iconCSS' => "glyphicon glyphicon-minus",'titulo' => 'Eliminar registro','funcion' => 'eliminar','actuaSobre' => 'tabla'), $this);?>

			<?php echo smarty_function_CWBotonTooltip(array('imagen' => '04','iconCSS' => "glyphicon glyphicon-refresh",'titulo' => 'Restaurar valores','funcion' => 'limpiar','actuaSobre' => 'tabla'), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_CWBarraSupPanel($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php $this->_tag_stack[] = array('CWContenedor', array()); $_block_repeat=true;smarty_block_CWContenedor($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php $this->_tag_stack[] = array('CWTabla', array('conCheck' => 'true','conCheckTodos' => 'false','id' => 'Tabla1','numFilasPantalla' => '6','datos' => $this->_tpl_vars['smty_datosTablaM'])); $_block_repeat=true;smarty_block_CWTabla($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php $this->_tag_stack[] = array('CWFila', array('tipoListado' => 'false')); $_block_repeat=true;smarty_block_CWFila($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
					<?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Cpuerto','nombre' => 'lis_cpuerto','size' => '5','editable' => 'false','visible' => 'true','value' => $this->_tpl_vars['defaultData_Puertos']['cpuerto'],'dataType' => $this->_tpl_vars['dataType_Puertos']['cpuerto']), $this);?>

					<?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Dpuerto','nombre' => 'lis_dpuerto','size' => '30','editable' => 'false','visible' => 'true','value' => $this->_tpl_vars['defaultData_Puertos']['lis_dpuerto'],'dataType' => $this->_tpl_vars['dataType_Puertos']['lis_dpuerto']), $this);?>

					<?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Direccion','nombre' => 'lis_direccion','size' => '50','editable' => 'false','visible' => 'true','value' => $this->_tpl_vars['defaultData_Puertos']['lis_direccion'],'dataType' => $this->_tpl_vars['dataType_Puertos']['lis_direccion']), $this);?>

					<?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Telefono','nombre' => 'lis_telefono','size' => '20','editable' => 'false','visible' => 'true','value' => $this->_tpl_vars['defaultData_Puertos']['lis_telefono'],'dataType' => $this->_tpl_vars['dataType_Puertos']['lis_telefono']), $this);?>

					<?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Municipio cmun','nombre' => 'lis_municipio_cmun','size' => '5','editable' => 'false','visible' => 'true','value' => $this->_tpl_vars['defaultData_Puertos']['lis_municipio_cmun'],'dataType' => $this->_tpl_vars['dataType_Puertos']['lis_municipio_cmun']), $this);?>

					<?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Num amarres','nombre' => 'lis_num_amarres','size' => '4','editable' => 'false','visible' => 'true','value' => $this->_tpl_vars['defaultData_Puertos']['lis_num_amarres'],'dataType' => $this->_tpl_vars['dataType_Puertos']['lis_num_amarres']), $this);?>

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
	<?php $this->_tag_stack[] = array('CWPanel', array('id' => 'lisDetalle','detalleDe' => 'lis','tipoComprobacion' => 'envio','action' => 'operarBD','method' => 'post','estado' => 'on','claseManejadora' => 'Amarres')); $_block_repeat=true;smarty_block_CWPanel($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php $this->_tag_stack[] = array('CWBarraSupPanel', array('titulo' => 'Amarres')); $_block_repeat=true;smarty_block_CWBarraSupPanel($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo smarty_function_CWBotonTooltip(array('imagen' => '01','iconCSS' => "glyphicon glyphicon-plus",'titulo' => 'Insertar registros','funcion' => 'insertar','actuaSobre' => 'tabla'), $this);?>

			<?php echo smarty_function_CWBotonTooltip(array('imagen' => '02','iconCSS' => "glyphicon glyphicon-edit",'titulo' => 'Modificar registros','funcion' => 'modificar','actuaSobre' => 'tabla'), $this);?>

			<?php echo smarty_function_CWBotonTooltip(array('imagen' => '03','iconCSS' => "glyphicon glyphicon-minus",'titulo' => 'Eliminar registros','funcion' => 'eliminar','actuaSobre' => 'tabla'), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_CWBarraSupPanel($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php $this->_tag_stack[] = array('CWContenedor', array()); $_block_repeat=true;smarty_block_CWContenedor($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>			
			<?php $this->_tag_stack[] = array('CWTabla', array('conCheck' => 'true','id' => 'TablaDetalle','numFilasPantalla' => '6','datos' => $this->_tpl_vars['smty_datosTablaD'])); $_block_repeat=true;smarty_block_CWTabla($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php $this->_tag_stack[] = array('CWFila', array('tipoListado' => 'false')); $_block_repeat=true;smarty_block_CWFila($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
					<?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Idamarre','nombre' => 'lis_idamarre','size' => '4','editable' => 'true','value' => $this->_tpl_vars['defaultData_Amarres']['lis_idamarre'],'dataType' => $this->_tpl_vars['dataType_Amarres']['lis_idamarre']), $this);?>

					<?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Nombre','nombre' => 'lis_nombre','size' => '6','editable' => 'true','value' => $this->_tpl_vars['defaultData_Amarres']['lis_nombre'],'dataType' => $this->_tpl_vars['dataType_Amarres']['lis_nombre']), $this);?>

					<?php echo smarty_function_CWLista(array('textoAsociado' => 'Anchura','actualizaA' => 'lis_anchura','nombre' => 'lis_anchura','size' => '10','editable' => 'true','visible' => 'true','value' => $this->_tpl_vars['defaultData_Amarres']['lis_anchura'],'dataType' => $this->_tpl_vars['dataType_Amarres']['lis_anchura']), $this);?>
					
					<?php echo smarty_function_CWLista(array('textoAsociado' => 'Estado','nombre' => 'lis_estado','size' => '30','editable' => 'true','visible' => 'true','value' => $this->_tpl_vars['defaultData_Amarres']['lis_estado'],'dataType' => $this->_tpl_vars['dataType_Amarres']['lis_estado'],'actualizaA' => 'lis_estado'), $this);?>
					
					<?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Puerto cpuerto','nombre' => 'lis_puerto_cpuerto','size' => '5','editable' => 'true','value' => $this->_tpl_vars['defaultData_Amarres']['puerto_cpuerto'],'dataType' => $this->_tpl_vars['dataType_Amarres']['puerto_cpuerto']), $this);?>

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