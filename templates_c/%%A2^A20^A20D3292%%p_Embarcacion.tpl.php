<?php /* Smarty version 2.6.14, created on 2016-03-11 14:02:59
         compiled from Embarcaciones/p_Embarcacion.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'CWVentana', 'Embarcaciones/p_Embarcacion.tpl', 1, false),array('block', 'CWBarra', 'Embarcaciones/p_Embarcacion.tpl', 2, false),array('block', 'CWMarcoPanel', 'Embarcaciones/p_Embarcacion.tpl', 5, false),array('block', 'CWPanel', 'Embarcaciones/p_Embarcacion.tpl', 8, false),array('block', 'CWBarraSupPanel', 'Embarcaciones/p_Embarcacion.tpl', 9, false),array('block', 'CWContenedor', 'Embarcaciones/p_Embarcacion.tpl', 13, false),array('block', 'CWFicha', 'Embarcaciones/p_Embarcacion.tpl', 14, false),array('block', 'CWBarraInfPanel', 'Embarcaciones/p_Embarcacion.tpl', 50, false),array('block', 'CWTabla', 'Embarcaciones/p_Embarcacion.tpl', 63, false),array('block', 'CWFila', 'Embarcaciones/p_Embarcacion.tpl', 64, false),array('block', 'CWFichaEdicion', 'Embarcaciones/p_Embarcacion.tpl', 88, false),array('block', 'CWContenedorPestanyas', 'Embarcaciones/p_Embarcacion.tpl', 143, false),array('function', 'CWMenuLayer', 'Embarcaciones/p_Embarcacion.tpl', 3, false),array('function', 'CWBotonTooltip', 'Embarcaciones/p_Embarcacion.tpl', 10, false),array('function', 'CWCampoTexto', 'Embarcaciones/p_Embarcacion.tpl', 17, false),array('function', 'CWBoton', 'Embarcaciones/p_Embarcacion.tpl', 51, false),array('function', 'CWPaginador', 'Embarcaciones/p_Embarcacion.tpl', 72, false),array('function', 'CWLista', 'Embarcaciones/p_Embarcacion.tpl', 118, false),array('function', 'CWPestanya', 'Embarcaciones/p_Embarcacion.tpl', 144, false),)), $this); ?>
<?php $this->_tag_stack[] = array('CWVentana', array('tipoAviso' => $this->_tpl_vars['smty_tipoAviso'],'codAviso' => $this->_tpl_vars['smty_codError'],'descBreve' => $this->_tpl_vars['smty_descBreve'],'textoAviso' => $this->_tpl_vars['smty_textoAviso'],'onLoad' => $this->_tpl_vars['smty_jsOnLoad'])); $_block_repeat=true;smarty_block_CWVentana($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start();  $this->_tag_stack[] = array('CWBarra', array('usuario' => $this->_tpl_vars['smty_usuario'],'codigo' => $this->_tpl_vars['smty_codigo'],'customTitle' => $this->_tpl_vars['smty_customTitle'],'modal' => $this->_tpl_vars['smty_modal'],'iconOut' => "glyphicon glyphicon-log-out",'iconHome' => "glyphicon glyphicon-home",'iconInfo' => "glyphicon glyphicon-info-sign")); $_block_repeat=true;smarty_block_CWBarra($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<?php echo smarty_function_CWMenuLayer(array('name' => ($this->_tpl_vars['smty_nombre']),'cadenaMenu' => ($this->_tpl_vars['smty_cadenaMenu'])), $this);?>
	
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_CWBarra($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);  $this->_tag_stack[] = array('CWMarcoPanel', array('conPestanyas' => 'true')); $_block_repeat=true;smarty_block_CWMarcoPanel($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>

<!--*********** PANEL fil ******************-->
	<?php $this->_tag_stack[] = array('CWPanel', array('id' => 'fil','action' => 'buscar','method' => 'post','estado' => ($this->_tpl_vars['estado_fil']),'claseManejadora' => 'Embarcacion')); $_block_repeat=true;smarty_block_CWPanel($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php $this->_tag_stack[] = array('CWBarraSupPanel', array('titulo' => 'Mantenimiento de Embarcacion')); $_block_repeat=true;smarty_block_CWBarraSupPanel($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo smarty_function_CWBotonTooltip(array('imagen' => '01','iconCSS' => "glyphicon glyphicon-plus",'titulo' => 'Insertar Embarcacion','funcion' => 'insertar','actuaSobre' => 'ficha','action' => 'Embarcacion__nuevo'), $this);?>

			<?php echo smarty_function_CWBotonTooltip(array('imagen' => '04','iconCSS' => "glyphicon glyphicon-refresh",'titulo' => 'Limpiar campos','funcion' => 'limpiar','actuaSobre' => 'ficha'), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_CWBarraSupPanel($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php $this->_tag_stack[] = array('CWContenedor', array()); $_block_repeat=true;smarty_block_CWContenedor($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php $this->_tag_stack[] = array('CWFicha', array()); $_block_repeat=true;smarty_block_CWFicha($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<table class="text" cellspacing="4" cellpadding="4" border="0">
					<tr>
						<td><?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Codigo','nombre' => 'fil_codigo','size' => '10','editable' => 'true','visible' => 'true','value' => $this->_tpl_vars['defaultData_Embarcacion']['fil_codigo'],'dataType' => $this->_tpl_vars['dataType_Embarcacion']['fil_codigo']), $this);?>
</td>
					</tr>
					<tr>
						<td><?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Matricula','nombre' => 'fil_matricula','size' => '12','editable' => 'true','visible' => 'true','value' => $this->_tpl_vars['defaultData_Embarcacion']['fil_matricula'],'dataType' => $this->_tpl_vars['dataType_Embarcacion']['fil_matricula']), $this);?>
</td>
					</tr>
					<tr>
						<td><?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Nombre','nombre' => 'fil_nombre','size' => '50','editable' => 'true','visible' => 'true','value' => $this->_tpl_vars['defaultData_Embarcacion']['fil_nombre'],'dataType' => $this->_tpl_vars['dataType_Embarcacion']['fil_nombre']), $this);?>
</td>
					</tr>
					<tr>
						<td><?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Manga','nombre' => 'fil_manga','size' => '8','editable' => 'true','visible' => 'true','value' => $this->_tpl_vars['defaultData_Embarcacion']['fil_manga'],'dataType' => $this->_tpl_vars['dataType_Embarcacion']['fil_manga']), $this);?>
</td>
					</tr>
					<tr>
						<td><?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Eslora','nombre' => 'fil_eslora','size' => '8','editable' => 'true','visible' => 'true','value' => $this->_tpl_vars['defaultData_Embarcacion']['fil_eslora'],'dataType' => $this->_tpl_vars['dataType_Embarcacion']['fil_eslora']), $this);?>
</td>
					</tr>
					<tr>
						<td><?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Vela motor','nombre' => 'fil_vela_motor','size' => '1','editable' => 'true','visible' => 'true','value' => $this->_tpl_vars['defaultData_Embarcacion']['fil_vela_motor'],'dataType' => $this->_tpl_vars['dataType_Embarcacion']['fil_vela_motor']), $this);?>
</td>
					</tr>
					<tr>
						<td><?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Fecha compra','nombre' => 'fil_fecha_compra','size' => '12','editable' => 'true','visible' => 'true','value' => $this->_tpl_vars['defaultData_Embarcacion']['fil_fecha_compra'],'dataType' => $this->_tpl_vars['dataType_Embarcacion']['fil_fecha_compra']), $this);?>
</td>
					</tr>
					<tr>
						<td><?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Caballaje','nombre' => 'fil_caballaje','size' => '4','editable' => 'true','visible' => 'true','value' => $this->_tpl_vars['defaultData_Embarcacion']['fil_caballaje'],'dataType' => $this->_tpl_vars['dataType_Embarcacion']['fil_caballaje']), $this);?>
</td>
					</tr>
					<tr>
						<td><?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Fecha baja','nombre' => 'fil_fecha_baja','size' => '12','editable' => 'true','visible' => 'true','value' => $this->_tpl_vars['defaultData_Embarcacion']['fil_fecha_baja'],'dataType' => $this->_tpl_vars['dataType_Embarcacion']['fil_fecha_baja']), $this);?>
</td>
					</tr>
					<tr>
						<td><?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Propietario dni','nombre' => 'fil_propietario_dni','size' => '13','editable' => 'true','visible' => 'true','value' => $this->_tpl_vars['defaultData_Embarcacion']['fil_propietario_dni'],'dataType' => $this->_tpl_vars['dataType_Embarcacion']['fil_propietario_dni']), $this);?>
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

<!-- ****************** PANEL lis ***********************-->
	<?php $this->_tag_stack[] = array('CWPanel', array('id' => 'lis','action' => 'borrar','method' => 'post','estado' => ($this->_tpl_vars['estado_lis']),'claseManejadora' => 'Embarcacion')); $_block_repeat=true;smarty_block_CWPanel($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php $this->_tag_stack[] = array('CWBarraSupPanel', array('titulo' => 'Listado de Embarcacion')); $_block_repeat=true;smarty_block_CWBarraSupPanel($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo smarty_function_CWBotonTooltip(array('imagen' => '01','iconCSS' => "glyphicon glyphicon-plus",'titulo' => 'Insertar Embarcacion','funcion' => 'insertar','actuaSobre' => 'ficha','action' => 'Embarcacion__nuevo'), $this);?>

			<?php echo smarty_function_CWBotonTooltip(array('imagen' => '02','iconCSS' => "glyphicon glyphicon-edit",'titulo' => 'Modificar Embarcacion','funcion' => 'modificar','actuaSobre' => 'ficha','action' => 'Embarcacion__editar'), $this);?>

			<?php echo smarty_function_CWBotonTooltip(array('imagen' => '03','iconCSS' => "glyphicon glyphicon-minus",'titulo' => 'Eliminar Embarcacion','funcion' => 'eliminar','actuaSobre' => 'tabla'), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_CWBarraSupPanel($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php $this->_tag_stack[] = array('CWContenedor', array()); $_block_repeat=true;smarty_block_CWContenedor($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php $this->_tag_stack[] = array('CWTabla', array('conCheck' => 'true','conCheckTodos' => 'true','id' => 'Tabla1','numFilasPantalla' => '10','datos' => $this->_tpl_vars['smty_datosTabla'])); $_block_repeat=true;smarty_block_CWTabla($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php $this->_tag_stack[] = array('CWFila', array('tipoListado' => 'false')); $_block_repeat=true;smarty_block_CWFila($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
					<?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Codigo','nombre' => 'lis_codigo','size' => '10','editable' => 'true','visible' => 'true','value' => $this->_tpl_vars['defaultData_Embarcacion']['lis_codigo'],'dataType' => $this->_tpl_vars['dataType_Embarcacion']['lis_codigo']), $this);?>

					<?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Matricula','nombre' => 'lis_matricula','size' => '12','editable' => 'true','visible' => 'true','value' => $this->_tpl_vars['defaultData_Embarcacion']['lis_matricula'],'dataType' => $this->_tpl_vars['dataType_Embarcacion']['lis_matricula']), $this);?>

					<?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Nombre','nombre' => 'lis_nombre','size' => '50','editable' => 'true','visible' => 'true','value' => $this->_tpl_vars['defaultData_Embarcacion']['lis_nombre'],'dataType' => $this->_tpl_vars['dataType_Embarcacion']['lis_nombre']), $this);?>

					<?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Caballaje','nombre' => 'lis_caballaje','size' => '4','editable' => 'true','visible' => 'true','value' => $this->_tpl_vars['defaultData_Embarcacion']['lis_caballaje'],'dataType' => $this->_tpl_vars['dataType_Embarcacion']['lis_caballaje']), $this);?>

					<?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Fecha baja','nombre' => 'lis_fecha_baja','size' => '12','editable' => 'true','visible' => 'true','value' => $this->_tpl_vars['defaultData_Embarcacion']['lis_fecha_baja'],'dataType' => $this->_tpl_vars['dataType_Embarcacion']['lis_fecha_baja']), $this);?>

					<?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Propietario dni','nombre' => 'lis_propietario_dni','size' => '13','editable' => 'true','visible' => 'true','value' => $this->_tpl_vars['defaultData_Embarcacion']['lis_propietario_dni'],'dataType' => $this->_tpl_vars['dataType_Embarcacion']['lis_propietario_dni']), $this);?>

				<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_CWFila($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>				
				<?php echo smarty_function_CWPaginador(array('enlacesVisibles' => '3','iconCSS' => 'true'), $this);?>

			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_CWTabla($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>			
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_CWContenedor($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php $this->_tag_stack[] = array('CWBarraInfPanel', array()); $_block_repeat=true;smarty_block_CWBarraInfPanel($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo smarty_function_CWBoton(array('imagen' => '41','iconCSS' => "glyphicon glyphicon-ok",'texto' => 'Guardar','class' => 'button','accion' => 'guardar'), $this);?>

			<?php echo smarty_function_CWBoton(array('imagen' => '42','iconCSS' => "glyphicon glyphicon-remove",'texto' => 'Cancelar','class' => 'button','accion' => 'cancelar'), $this);?>
			
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_CWBarraInfPanel($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>						
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_CWPanel($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>	


<!-- ****************** PANEL edi ***********************-->
	<?php $this->_tag_stack[] = array('CWPanel', array('id' => 'edi','tipoComprobacion' => 'envio','action' => ($this->_tpl_vars['smty_operacionFichaEmbarcacion']),'method' => 'post','estado' => ($this->_tpl_vars['estado_edi']),'claseManejadora' => 'Embarcacion','accion' => $this->_tpl_vars['smty_operacionFichaEmbarcacion'])); $_block_repeat=true;smarty_block_CWPanel($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php $this->_tag_stack[] = array('CWBarraSupPanel', array('titulo' => 'Mantenimiento de Embarcacion')); $_block_repeat=true;smarty_block_CWBarraSupPanel($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo smarty_function_CWBotonTooltip(array('imagen' => '04','iconCSS' => "glyphicon glyphicon-refresh",'titulo' => 'Limpiar campos','funcion' => 'limpiar','actuaSobre' => 'ficha'), $this);?>
				
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_CWBarraSupPanel($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php $this->_tag_stack[] = array('CWContenedor', array()); $_block_repeat=true;smarty_block_CWContenedor($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php $this->_tag_stack[] = array('CWFichaEdicion', array('id' => 'FichaEdicion','datos' => $this->_tpl_vars['smty_datosFicha'])); $_block_repeat=true;smarty_block_CWFichaEdicion($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?> 
				<?php $this->_tag_stack[] = array('CWFicha', array()); $_block_repeat=true;smarty_block_CWFicha($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>

					<table class="text" cellspacing="4" cellpadding="4" border="0">
						<tr>
							<td><?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Codigo','nombre' => 'edi_codigo','size' => '10','editable' => 'nuevo','visible' => 'true','value' => $this->_tpl_vars['defaultData_Embarcacion']['edi_codigo'],'dataType' => $this->_tpl_vars['dataType_Embarcacion']['edi_codigo']), $this);?>
</td>
						</tr>
						<tr>
							<td><?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Matricula','nombre' => 'edi_matricula','size' => '12','editable' => 'nuevo','visible' => 'true','value' => $this->_tpl_vars['defaultData_Embarcacion']['edi_matricula'],'dataType' => $this->_tpl_vars['dataType_Embarcacion']['edi_matricula']), $this);?>
</td>
						</tr>
						<tr>
							<td><?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Nombre','nombre' => 'edi_nombre','size' => '50','editable' => 'true','visible' => 'true','value' => $this->_tpl_vars['defaultData_Embarcacion']['edi_nombre'],'dataType' => $this->_tpl_vars['dataType_Embarcacion']['edi_nombre']), $this);?>
</td>
						</tr>
						<tr>
							<td><?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Manga','nombre' => 'edi_manga','size' => '8','editable' => 'true','visible' => 'true','value' => $this->_tpl_vars['defaultData_Embarcacion']['edi_manga'],'dataType' => $this->_tpl_vars['dataType_Embarcacion']['edi_manga']), $this);?>
</td>
						</tr>
						<tr>
							<td><?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Eslora','nombre' => 'edi_eslora','size' => '8','editable' => 'true','visible' => 'true','value' => $this->_tpl_vars['defaultData_Embarcacion']['edi_eslora'],'dataType' => $this->_tpl_vars['dataType_Embarcacion']['edi_eslora']), $this);?>
</td>
						</tr>
						<tr>
							<td><?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Vela motor','nombre' => 'edi_vela_motor','size' => '1','editable' => 'true','visible' => 'true','value' => $this->_tpl_vars['defaultData_Embarcacion']['edi_vela_motor'],'dataType' => $this->_tpl_vars['dataType_Embarcacion']['edi_vela_motor']), $this);?>
</td>
						</tr>
						<tr>
							<td><?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Fecha compra','nombre' => 'edi_fecha_compra','size' => '12','editable' => 'true','visible' => 'true','value' => $this->_tpl_vars['defaultData_Embarcacion']['edi_fecha_compra'],'dataType' => $this->_tpl_vars['dataType_Embarcacion']['edi_fecha_compra']), $this);?>
</td>
						</tr>
						<tr>
							<td><?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Caballaje','nombre' => 'edi_caballaje','size' => '4','editable' => 'true','visible' => 'true','value' => $this->_tpl_vars['defaultData_Embarcacion']['edi_caballaje'],'dataType' => $this->_tpl_vars['dataType_Embarcacion']['edi_caballaje']), $this);?>
</td>
						</tr>
						<tr>
							<td>
<?php echo smarty_function_CWLista(array('textoAsociado' => 'Estado','nombre' => 'edi_estado','size' => '30','editable' => 'true','visible' => 'true','value' => $this->_tpl_vars['defaultData_Embarcacion']['edi_estado'],'dataType' => $this->_tpl_vars['dataType_Embarcacion']['edi_estado'],'actualizaA' => 'edi_fecha_baja'), $this);?>
							</td>
						</tr>
						<tr>
							<td><?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Fecha baja','nombre' => 'edi_fecha_baja','size' => '12','editable' => 'true','visible' => 'true','value' => $this->_tpl_vars['defaultData_Embarcacion']['edi_fecha_baja'],'dataType' => $this->_tpl_vars['dataType_Embarcacion']['edi_fecha_baja']), $this);?>
</td>
						</tr>
						<tr>
							<td><?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Propietario dni','nombre' => 'edi_propietario_dni','size' => '13','editable' => 'true','visible' => 'true','value' => $this->_tpl_vars['defaultData_Embarcacion']['edi_propietario_dni'],'dataType' => $this->_tpl_vars['dataType_Embarcacion']['edi_propietario_dni']), $this);?>


<?php echo smarty_function_CWBotonTooltip(array('imagen' => '13','titulo' => 'Propietario','funcion' => 'abrirVS','actuaSobre' => 'edi_propietario_dni'), $this);?>

</td>
						</tr>
						
					</table>
					<br/>
				<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_CWFicha($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
				<?php echo smarty_function_CWPaginador(array('enlacesVisibles' => '3','iconCSS' => 'true'), $this);?>

			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_CWFichaEdicion($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_CWContenedor($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php $this->_tag_stack[] = array('CWBarraInfPanel', array()); $_block_repeat=true;smarty_block_CWBarraInfPanel($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo smarty_function_CWBoton(array('imagen' => '41','iconCSS' => "glyphicon glyphicon-ok",'texto' => 'Guardar','class' => 'button','accion' => 'guardar'), $this);?>

			<?php echo smarty_function_CWBoton(array('imagen' => '42','iconCSS' => "glyphicon glyphicon-remove",'texto' => 'Cancelar','class' => 'button','accion' => 'cancelar','action' => 'cancelarEdicion'), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_CWBarraInfPanel($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>						
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_CWPanel($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>	
		
<!-- ****************** PESTANYAS ************************-->
	<?php $this->_tag_stack[] = array('CWContenedorPestanyas', array()); $_block_repeat=true;smarty_block_CWContenedorPestanyas($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php echo smarty_function_CWPestanya(array('tipo' => 'fil','estado' => $this->_tpl_vars['estado_fil']), $this);?>
		
		<?php echo smarty_function_CWPestanya(array('tipo' => 'lis','estado' => $this->_tpl_vars['estado_lis']), $this);?>

		<?php echo smarty_function_CWPestanya(array('tipo' => 'edi','estado' => $this->_tpl_vars['estado_edi']), $this);?>

	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_CWContenedorPestanyas($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_CWMarcoPanel($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_CWVentana($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>