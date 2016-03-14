<?php /* Smarty version 2.6.14, created on 2016-03-14 09:50:02
         compiled from Embarcaciones/p_EmbarcaEstanciaMa.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'CWVentana', 'Embarcaciones/p_EmbarcaEstanciaMa.tpl', 1, false),array('block', 'CWBarra', 'Embarcaciones/p_EmbarcaEstanciaMa.tpl', 2, false),array('block', 'CWMarcoPanel', 'Embarcaciones/p_EmbarcaEstanciaMa.tpl', 5, false),array('block', 'CWPanel', 'Embarcaciones/p_EmbarcaEstanciaMa.tpl', 9, false),array('block', 'CWBarraSupPanel', 'Embarcaciones/p_EmbarcaEstanciaMa.tpl', 10, false),array('block', 'CWContenedor', 'Embarcaciones/p_EmbarcaEstanciaMa.tpl', 14, false),array('block', 'CWFicha', 'Embarcaciones/p_EmbarcaEstanciaMa.tpl', 15, false),array('block', 'CWBarraInfPanel', 'Embarcaciones/p_EmbarcaEstanciaMa.tpl', 51, false),array('block', 'CWTabla', 'Embarcaciones/p_EmbarcaEstanciaMa.tpl', 62, false),array('block', 'CWFila', 'Embarcaciones/p_EmbarcaEstanciaMa.tpl', 63, false),array('block', 'CWContenedorPestanyas', 'Embarcaciones/p_EmbarcaEstanciaMa.tpl', 85, false),array('function', 'CWMenuLayer', 'Embarcaciones/p_EmbarcaEstanciaMa.tpl', 3, false),array('function', 'CWBotonTooltip', 'Embarcaciones/p_EmbarcaEstanciaMa.tpl', 11, false),array('function', 'CWCampoTexto', 'Embarcaciones/p_EmbarcaEstanciaMa.tpl', 18, false),array('function', 'CWBoton', 'Embarcaciones/p_EmbarcaEstanciaMa.tpl', 52, false),array('function', 'CWPaginador', 'Embarcaciones/p_EmbarcaEstanciaMa.tpl', 75, false),array('function', 'CWPestanya', 'Embarcaciones/p_EmbarcaEstanciaMa.tpl', 86, false),array('function', 'CWLista', 'Embarcaciones/p_EmbarcaEstanciaMa.tpl', 103, false),)), $this); ?>
<?php $this->_tag_stack[] = array('CWVentana', array('tipoAviso' => $this->_tpl_vars['smty_tipoAviso'],'codAviso' => $this->_tpl_vars['smty_codError'],'descBreve' => $this->_tpl_vars['smty_descBreve'],'textoAviso' => $this->_tpl_vars['smty_textoAviso'],'onLoad' => $this->_tpl_vars['smty_jsOnLoad'])); $_block_repeat=true;smarty_block_CWVentana($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start();  $this->_tag_stack[] = array('CWBarra', array('usuario' => $this->_tpl_vars['smty_usuario'],'codigo' => $this->_tpl_vars['smty_codigo'],'customTitle' => $this->_tpl_vars['smty_customTitle'],'modal' => $this->_tpl_vars['smty_modal'],'iconOut' => "glyphicon glyphicon-log-out",'iconHome' => "glyphicon glyphicon-home",'iconInfo' => "glyphicon glyphicon-info-sign")); $_block_repeat=true;smarty_block_CWBarra($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>	
	<?php echo smarty_function_CWMenuLayer(array('name' => ($this->_tpl_vars['smty_nombre']),'cadenaMenu' => ($this->_tpl_vars['smty_cadenaMenu'])), $this);?>
	
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_CWBarra($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);  $this->_tag_stack[] = array('CWMarcoPanel', array('conPestanyas' => 'true')); $_block_repeat=true;smarty_block_CWMarcoPanel($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>

<!-- ********************************************** MAESTRO **********************************************-->
	<!--*********** PANEL fil ******************-->
	<?php $this->_tag_stack[] = array('CWPanel', array('id' => 'fil','action' => 'buscar','method' => 'post','estado' => $this->_tpl_vars['estado_fil'],'claseManejadora' => 'EmbarcaEstanciaMa')); $_block_repeat=true;smarty_block_CWPanel($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php $this->_tag_stack[] = array('CWBarraSupPanel', array('titulo' => 'EmbarcaEstanciaMa')); $_block_repeat=true;smarty_block_CWBarraSupPanel($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo smarty_function_CWBotonTooltip(array('imagen' => '01','iconCSS' => "glyphicon glyphicon-plus",'titulo' => 'Insertar registros','funcion' => 'insertar','actuaSobre' => 'ficha','action' => 'EmbarcaEstanciaMa__nuevo'), $this);?>

			<?php echo smarty_function_CWBotonTooltip(array('imagen' => '04','iconCSS' => "glyphicon glyphicon-refresh",'titulo' => 'Restaurar valores','funcion' => 'restaurar','actuaSobre' => 'ficha'), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_CWBarraSupPanel($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php $this->_tag_stack[] = array('CWContenedor', array()); $_block_repeat=true;smarty_block_CWContenedor($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php $this->_tag_stack[] = array('CWFicha', array()); $_block_repeat=true;smarty_block_CWFicha($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<table class="text" cellspacing="4" cellpadding="4" border="0">
					<tr>
					 	<td><?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Codigo','nombre' => 'fil_codigo','size' => '10','editable' => 'true','visible' => 'true','value' => $this->_tpl_vars['defaultData_EmbarcaEstanciaMa']['codigo'],'dataType' => $this->_tpl_vars['dataType_EmbarcaEstanciaMa']['codigo']), $this);?>
</td>
					</tr>
					<tr>
					 	<td><?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Matricula','nombre' => 'fil_matricula','size' => '12','editable' => 'true','visible' => 'true','value' => $this->_tpl_vars['defaultData_EmbarcaEstanciaMa']['fil_matricula'],'dataType' => $this->_tpl_vars['dataType_EmbarcaEstanciaMa']['fil_matricula']), $this);?>
</td>
					</tr>
					<tr>
					 	<td><?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Nombre','nombre' => 'fil_nombre','size' => '50','editable' => 'true','visible' => 'true','value' => $this->_tpl_vars['defaultData_EmbarcaEstanciaMa']['fil_nombre'],'dataType' => $this->_tpl_vars['dataType_EmbarcaEstanciaMa']['fil_nombre']), $this);?>
</td>
					</tr>
					<tr>
					 	<td><?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Manga','nombre' => 'fil_manga','size' => '8','editable' => 'true','visible' => 'true','value' => $this->_tpl_vars['defaultData_EmbarcaEstanciaMa']['fil_manga'],'dataType' => $this->_tpl_vars['dataType_EmbarcaEstanciaMa']['fil_manga']), $this);?>
</td>
					</tr>
					<tr>
					 	<td><?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Eslora','nombre' => 'fil_eslora','size' => '8','editable' => 'true','visible' => 'true','value' => $this->_tpl_vars['defaultData_EmbarcaEstanciaMa']['fil_eslora'],'dataType' => $this->_tpl_vars['dataType_EmbarcaEstanciaMa']['fil_eslora']), $this);?>
</td>
					</tr>
					<tr>
					 	<td><?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Vela motor','nombre' => 'fil_vela_motor','size' => '1','editable' => 'true','visible' => 'true','value' => $this->_tpl_vars['defaultData_EmbarcaEstanciaMa']['fil_vela_motor'],'dataType' => $this->_tpl_vars['dataType_EmbarcaEstanciaMa']['fil_vela_motor']), $this);?>
</td>
					</tr>
					<tr>
					 	<td><?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Fecha compra','nombre' => 'fil_fecha_compra','size' => '12','editable' => 'true','visible' => 'true','value' => $this->_tpl_vars['defaultData_EmbarcaEstanciaMa']['fil_fecha_compra'],'dataType' => $this->_tpl_vars['dataType_EmbarcaEstanciaMa']['fil_fecha_compra']), $this);?>
</td>
					</tr>
					<tr>
					 	<td><?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Caballaje','nombre' => 'fil_caballaje','size' => '4','editable' => 'true','visible' => 'true','value' => $this->_tpl_vars['defaultData_EmbarcaEstanciaMa']['fil_caballaje'],'dataType' => $this->_tpl_vars['dataType_EmbarcaEstanciaMa']['fil_caballaje']), $this);?>
</td>
					</tr>
					<tr>
					 	<td><?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Fecha baja','nombre' => 'fil_fecha_baja','size' => '12','editable' => 'true','visible' => 'true','value' => $this->_tpl_vars['defaultData_EmbarcaEstanciaMa']['fil_fecha_baja'],'dataType' => $this->_tpl_vars['dataType_EmbarcaEstanciaMa']['fil_fecha_baja']), $this);?>
</td>
					</tr>
					<tr>
					 	<td><?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Propietario dni','nombre' => 'fil_propietario_dni','size' => '13','editable' => 'true','visible' => 'true','value' => $this->_tpl_vars['defaultData_EmbarcaEstanciaMa']['fil_propietario_dni'],'dataType' => $this->_tpl_vars['dataType_EmbarcaEstanciaMa']['fil_propietario_dni']), $this);?>
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
	<?php $this->_tag_stack[] = array('CWPanel', array('id' => 'lis','tipoComprobacion' => 'envio','esMaestro' => 'true','itemSeleccionado' => $this->_tpl_vars['smty_filaSeleccionada'],'action' => 'operarBD','method' => 'post','estado' => $this->_tpl_vars['estado_lis'],'claseManejadora' => 'EmbarcaEstanciaMa')); $_block_repeat=true;smarty_block_CWPanel($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php $this->_tag_stack[] = array('CWBarraSupPanel', array('titulo' => 'EmbarcaEstanciaMa')); $_block_repeat=true;smarty_block_CWBarraSupPanel($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_CWBarraSupPanel($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php $this->_tag_stack[] = array('CWContenedor', array()); $_block_repeat=true;smarty_block_CWContenedor($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php $this->_tag_stack[] = array('CWTabla', array('conCheck' => 'true','conCheckTodos' => 'false','id' => 'Tabla1','numFilasPantalla' => '6','datos' => $this->_tpl_vars['smty_datosTablaM'])); $_block_repeat=true;smarty_block_CWTabla($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php $this->_tag_stack[] = array('CWFila', array('tipoListado' => 'false')); $_block_repeat=true;smarty_block_CWFila($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
					<?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Codigo','nombre' => 'lis_codigo','size' => '10','editable' => 'true','visible' => 'true','value' => $this->_tpl_vars['defaultData_EmbarcaEstanciaMa']['codigo'],'dataType' => $this->_tpl_vars['dataType_EmbarcaEstanciaMa']['codigo']), $this);?>

					<?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Matricula','nombre' => 'lis_matricula','size' => '12','editable' => 'true','visible' => 'true','value' => $this->_tpl_vars['defaultData_EmbarcaEstanciaMa']['lis_matricula'],'dataType' => $this->_tpl_vars['dataType_EmbarcaEstanciaMa']['lis_matricula']), $this);?>

					<?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Nombre','nombre' => 'lis_nombre','size' => '50','editable' => 'true','visible' => 'true','value' => $this->_tpl_vars['defaultData_EmbarcaEstanciaMa']['lis_nombre'],'dataType' => $this->_tpl_vars['dataType_EmbarcaEstanciaMa']['lis_nombre']), $this);?>

					<?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Manga','nombre' => 'lis_manga','size' => '8','editable' => 'true','visible' => 'true','value' => $this->_tpl_vars['defaultData_EmbarcaEstanciaMa']['lis_manga'],'dataType' => $this->_tpl_vars['dataType_EmbarcaEstanciaMa']['lis_manga']), $this);?>

					<?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Eslora','nombre' => 'lis_eslora','size' => '8','editable' => 'true','visible' => 'true','value' => $this->_tpl_vars['defaultData_EmbarcaEstanciaMa']['lis_eslora'],'dataType' => $this->_tpl_vars['dataType_EmbarcaEstanciaMa']['lis_eslora']), $this);?>

					<?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Vela motor','nombre' => 'lis_vela_motor','size' => '1','editable' => 'true','visible' => 'true','value' => $this->_tpl_vars['defaultData_EmbarcaEstanciaMa']['lis_vela_motor'],'dataType' => $this->_tpl_vars['dataType_EmbarcaEstanciaMa']['lis_vela_motor']), $this);?>

					<?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Fecha compra','nombre' => 'lis_fecha_compra','size' => '12','editable' => 'true','visible' => 'true','value' => $this->_tpl_vars['defaultData_EmbarcaEstanciaMa']['lis_fecha_compra'],'dataType' => $this->_tpl_vars['dataType_EmbarcaEstanciaMa']['lis_fecha_compra']), $this);?>

					<?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Caballaje','nombre' => 'lis_caballaje','size' => '4','editable' => 'true','visible' => 'true','value' => $this->_tpl_vars['defaultData_EmbarcaEstanciaMa']['lis_caballaje'],'dataType' => $this->_tpl_vars['dataType_EmbarcaEstanciaMa']['lis_caballaje']), $this);?>

					<?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Fecha baja','nombre' => 'lis_fecha_baja','size' => '12','editable' => 'true','visible' => 'true','value' => $this->_tpl_vars['defaultData_EmbarcaEstanciaMa']['lis_fecha_baja'],'dataType' => $this->_tpl_vars['dataType_EmbarcaEstanciaMa']['lis_fecha_baja']), $this);?>

					<?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Propietario dni','nombre' => 'lis_propietario_dni','size' => '13','editable' => 'true','visible' => 'true','value' => $this->_tpl_vars['defaultData_EmbarcaEstanciaMa']['lis_propietario_dni'],'dataType' => $this->_tpl_vars['dataType_EmbarcaEstanciaMa']['lis_propietario_dni']), $this);?>

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
	<?php $this->_tag_stack[] = array('CWPanel', array('id' => 'lisDetalle','detalleDe' => 'lis','tipoComprobacion' => 'envio','action' => 'operarBD','method' => 'post','estado' => 'on','claseManejadora' => 'EmbarcaEstanciaDet')); $_block_repeat=true;smarty_block_CWPanel($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php $this->_tag_stack[] = array('CWBarraSupPanel', array('titulo' => 'EmbarcaEstanciaDet')); $_block_repeat=true;smarty_block_CWBarraSupPanel($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo smarty_function_CWBotonTooltip(array('imagen' => '01','iconCSS' => "glyphicon glyphicon-plus",'titulo' => 'Insertar registros','funcion' => 'insertar','actuaSobre' => 'tabla'), $this);?>

			<?php echo smarty_function_CWBotonTooltip(array('imagen' => '02','iconCSS' => "glyphicon glyphicon-edit",'titulo' => 'Modificar registros','funcion' => 'modificar','actuaSobre' => 'tabla'), $this);?>

			<?php echo smarty_function_CWBotonTooltip(array('imagen' => '03','iconCSS' => "glyphicon glyphicon-minus",'titulo' => 'Eliminar registros','funcion' => 'eliminar','actuaSobre' => 'tabla'), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_CWBarraSupPanel($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php $this->_tag_stack[] = array('CWContenedor', array()); $_block_repeat=true;smarty_block_CWContenedor($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>			
			<?php $this->_tag_stack[] = array('CWTabla', array('conCheck' => 'true','id' => 'TablaDetalle','numFilasPantalla' => '6','datos' => $this->_tpl_vars['smty_datosTablaD'])); $_block_repeat=true;smarty_block_CWTabla($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php $this->_tag_stack[] = array('CWFila', array('tipoListado' => 'false')); $_block_repeat=true;smarty_block_CWFila($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
					<?php echo smarty_function_CWLista(array('textoAsociado' => 'Puerto','nombre' => 'lis_puerto','actualizaA' => 'lis_idamarre','editable' => 'true','size' => '40','visible' => 'true','value' => $this->_tpl_vars['defaultData_EmbarcaEstanciaDet']['lis_puerto'],'dataType' => $this->_tpl_vars['dataType_EmbarcaEstanciaDet']['lis_puerto']), $this);?>

					<?php echo smarty_function_CWLista(array('textoAsociado' => 'Amarres','nombre' => 'lis_idamarre','editable' => 'true','size' => '40','visible' => 'true','value' => $this->_tpl_vars['defaultData_EmbarcaEstanciaDet']['lis_idamarre'],'dataType' => $this->_tpl_vars['dataType_EmbarcaEstanciaDet']['lis_idamarre']), $this);?>
					
					<?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Id','nombre' => 'lis_id','size' => '4','editable' => 'true','oculto' => 'true','value' => $this->_tpl_vars['defaultData_EmbarcaEstanciaDet']['lis_id'],'dataType' => $this->_tpl_vars['dataType_EmbarcaEstanciaDet']['lis_id']), $this);?>

					<?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Desde','nombre' => 'lis_desde','size' => '0','editable' => 'true','value' => $this->_tpl_vars['defaultData_EmbarcaEstanciaDet']['lis_desde'],'dataType' => $this->_tpl_vars['dataType_EmbarcaEstanciaDet']['lis_desde']), $this);?>

					<?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Hasta','nombre' => 'lis_hasta','size' => '0','editable' => 'true','value' => $this->_tpl_vars['defaultData_EmbarcaEstanciaDet']['lis_hasta'],'dataType' => $this->_tpl_vars['dataType_EmbarcaEstanciaDet']['lis_hasta']), $this);?>

					<?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Embarcacion codigo','nombre' => 'lis_embarcacion_codigo','oculto' => 'true','size' => '10','editable' => 'true','value' => $this->_tpl_vars['defaultData_EmbarcaEstanciaDet']['lis_embarcacion_codigo'],'dataType' => $this->_tpl_vars['dataType_EmbarcaEstanciaDet']['lis_embarcacion_codigo']), $this);?>

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