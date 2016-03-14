<?php /* Smarty version 2.6.14, created on 2016-03-11 12:07:58
         compiled from Propietarios/p_Propietarios.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'CWVentana', 'Propietarios/p_Propietarios.tpl', 1, false),array('block', 'CWBarra', 'Propietarios/p_Propietarios.tpl', 2, false),array('block', 'CWMarcoPanel', 'Propietarios/p_Propietarios.tpl', 5, false),array('block', 'CWPanel', 'Propietarios/p_Propietarios.tpl', 8, false),array('block', 'CWBarraSupPanel', 'Propietarios/p_Propietarios.tpl', 9, false),array('block', 'CWContenedor', 'Propietarios/p_Propietarios.tpl', 13, false),array('block', 'CWFicha', 'Propietarios/p_Propietarios.tpl', 14, false),array('block', 'CWBarraInfPanel', 'Propietarios/p_Propietarios.tpl', 35, false),array('block', 'CWFichaEdicion', 'Propietarios/p_Propietarios.tpl', 48, false),array('block', 'CWContenedorPestanyas', 'Propietarios/p_Propietarios.tpl', 82, false),array('function', 'CWMenuLayer', 'Propietarios/p_Propietarios.tpl', 3, false),array('function', 'CWBotonTooltip', 'Propietarios/p_Propietarios.tpl', 10, false),array('function', 'CWCampoTexto', 'Propietarios/p_Propietarios.tpl', 17, false),array('function', 'CWBoton', 'Propietarios/p_Propietarios.tpl', 36, false),array('function', 'CWAreaTexto', 'Propietarios/p_Propietarios.tpl', 67, false),array('function', 'CWPaginador', 'Propietarios/p_Propietarios.tpl', 72, false),array('function', 'CWPestanya', 'Propietarios/p_Propietarios.tpl', 83, false),)), $this); ?>
<?php $this->_tag_stack[] = array('CWVentana', array('tipoAviso' => $this->_tpl_vars['smty_tipoAviso'],'codAviso' => $this->_tpl_vars['smty_codError'],'descBreve' => $this->_tpl_vars['smty_descBreve'],'textoAviso' => $this->_tpl_vars['smty_textoAviso'],'onLoad' => $this->_tpl_vars['smty_jsOnLoad'])); $_block_repeat=true;smarty_block_CWVentana($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start();  $this->_tag_stack[] = array('CWBarra', array('usuario' => $this->_tpl_vars['smty_usuario'],'codigo' => $this->_tpl_vars['smty_codigo'],'customTitle' => $this->_tpl_vars['smty_customTitle'],'modal' => $this->_tpl_vars['smty_modal'],'iconOut' => "glyphicon glyphicon-log-out",'iconHome' => "glyphicon glyphicon-home",'iconInfo' => "glyphicon glyphicon-info-sign")); $_block_repeat=true;smarty_block_CWBarra($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<?php echo smarty_function_CWMenuLayer(array('name' => ($this->_tpl_vars['smty_nombre']),'cadenaMenu' => ($this->_tpl_vars['smty_cadenaMenu'])), $this);?>
	
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_CWBarra($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);  $this->_tag_stack[] = array('CWMarcoPanel', array('conPestanyas' => 'true')); $_block_repeat=true;smarty_block_CWMarcoPanel($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>

<!--*********** PANEL fil ******************-->
	<?php $this->_tag_stack[] = array('CWPanel', array('id' => 'fil','action' => 'buscar','method' => 'post','estado' => ($this->_tpl_vars['estado_fil']),'claseManejadora' => 'Propietarios')); $_block_repeat=true;smarty_block_CWPanel($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php $this->_tag_stack[] = array('CWBarraSupPanel', array('titulo' => 'Mantenimiento de Propietarios')); $_block_repeat=true;smarty_block_CWBarraSupPanel($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo smarty_function_CWBotonTooltip(array('imagen' => '01','iconCSS' => "glyphicon glyphicon-plus",'titulo' => 'Insertar Propietarios','funcion' => 'insertar','actuaSobre' => 'ficha','action' => 'Propietarios__nuevo'), $this);?>

			<?php echo smarty_function_CWBotonTooltip(array('imagen' => '04','iconCSS' => "glyphicon glyphicon-refresh",'titulo' => 'Limpiar campos','funcion' => 'limpiar','actuaSobre' => 'ficha'), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_CWBarraSupPanel($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php $this->_tag_stack[] = array('CWContenedor', array()); $_block_repeat=true;smarty_block_CWContenedor($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php $this->_tag_stack[] = array('CWFicha', array()); $_block_repeat=true;smarty_block_CWFicha($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<table class="text" cellspacing="4" cellpadding="4" border="0">
					<tr>
						<td><?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Dni','nombre' => 'fil_dni','size' => '13','editable' => 'true','visible' => 'true','value' => $this->_tpl_vars['defaultData_Propietarios']['fil_dni'],'dataType' => $this->_tpl_vars['dataType_Propietarios']['fil_dni']), $this);?>
</td>
					</tr>
					<tr>
						<td><?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Nombre','nombre' => 'fil_nombre','size' => '50','editable' => 'true','visible' => 'true','value' => $this->_tpl_vars['defaultData_Propietarios']['fil_nombre'],'dataType' => $this->_tpl_vars['dataType_Propietarios']['fil_nombre']), $this);?>
</td>
					</tr>
					<tr>
						<td><?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Direccion','nombre' => 'fil_direccion','size' => '100','editable' => 'true','visible' => 'true','value' => $this->_tpl_vars['defaultData_Propietarios']['fil_direccion'],'dataType' => $this->_tpl_vars['dataType_Propietarios']['fil_direccion']), $this);?>
</td>
					</tr>
					<tr>
						<td><?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Telefono','nombre' => 'fil_telefono','size' => '15','editable' => 'true','visible' => 'true','value' => $this->_tpl_vars['defaultData_Propietarios']['fil_telefono'],'dataType' => $this->_tpl_vars['dataType_Propietarios']['fil_telefono']), $this);?>
</td>
					</tr>
					<tr>
						<td><?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Cuenta bancaria','nombre' => 'fil_cuenta_bancaria','size' => '23','editable' => 'true','visible' => 'true','value' => $this->_tpl_vars['defaultData_Propietarios']['fil_cuenta_bancaria'],'dataType' => $this->_tpl_vars['dataType_Propietarios']['fil_cuenta_bancaria']), $this);?>
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

<!-- ****************** PANEL edi ***********************-->
	<?php $this->_tag_stack[] = array('CWPanel', array('id' => 'edi','tipoComprobacion' => 'envio','action' => 'operarBD','method' => 'post','estado' => ($this->_tpl_vars['estado_edi']),'claseManejadora' => 'Propietarios')); $_block_repeat=true;smarty_block_CWPanel($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php $this->_tag_stack[] = array('CWBarraSupPanel', array('titulo' => 'Mantenimiento de Propietarios')); $_block_repeat=true;smarty_block_CWBarraSupPanel($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo smarty_function_CWBotonTooltip(array('imagen' => '01','iconCSS' => "glyphicon glyphicon-plus",'titulo' => 'Insertar registros','funcion' => 'insertar','actuaSobre' => 'ficha','action' => 'Propietarios__nuevo'), $this);?>

			<?php echo smarty_function_CWBotonTooltip(array('imagen' => '02','iconCSS' => "glyphicon glyphicon-edit",'titulo' => 'Modificar registros','funcion' => 'modificar','actuaSobre' => 'ficha'), $this);?>

			<?php echo smarty_function_CWBotonTooltip(array('imagen' => '03','iconCSS' => "glyphicon glyphicon-minus",'titulo' => 'Eliminar registros','funcion' => 'eliminar','actuaSobre' => 'ficha'), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_CWBarraSupPanel($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php $this->_tag_stack[] = array('CWContenedor', array()); $_block_repeat=true;smarty_block_CWContenedor($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php $this->_tag_stack[] = array('CWFichaEdicion', array('id' => 'FichaEdicion','datos' => $this->_tpl_vars['smty_datosFicha'])); $_block_repeat=true;smarty_block_CWFichaEdicion($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php $this->_tag_stack[] = array('CWFicha', array()); $_block_repeat=true;smarty_block_CWFicha($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
					<table class="text" cellspacing="4" cellpadding="4" border="0">
						<tr>
						<td><?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Dni','nombre' => 'edi_dni','size' => '13','editable' => 'true','visible' => 'true','value' => $this->_tpl_vars['defaultData_Propietarios']['edi_dni'],'dataType' => $this->_tpl_vars['dataType_Propietarios']['edi_dni']), $this);?>
</td>
						</tr>
						<tr>
						<td><?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Nombre','nombre' => 'edi_nombre','size' => '50','editable' => 'true','visible' => 'true','value' => $this->_tpl_vars['defaultData_Propietarios']['edi_nombre'],'dataType' => $this->_tpl_vars['dataType_Propietarios']['edi_nombre']), $this);?>
</td>
						</tr>
						<tr>
						<td><?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Direccion','nombre' => 'edi_direccion','size' => '100','editable' => 'true','visible' => 'true','value' => $this->_tpl_vars['defaultData_Propietarios']['edi_direccion'],'dataType' => $this->_tpl_vars['dataType_Propietarios']['edi_direccion']), $this);?>
</td>
						</tr>
						<tr>
						<td><?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Telefono','nombre' => 'edi_telefono','size' => '15','editable' => 'true','visible' => 'true','value' => $this->_tpl_vars['defaultData_Propietarios']['edi_telefono'],'dataType' => $this->_tpl_vars['dataType_Propietarios']['edi_telefono']), $this);?>
</td>
						</tr>
						<tr>
						<td><?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Cuenta bancaria','nombre' => 'edi_cuenta_bancaria','size' => '23','editable' => 'true','visible' => 'true','value' => $this->_tpl_vars['defaultData_Propietarios']['edi_cuenta_bancaria'],'dataType' => $this->_tpl_vars['dataType_Propietarios']['edi_cuenta_bancaria']), $this);?>
</td>
						</tr>
						<tr>
						<td><?php echo smarty_function_CWAreaTexto(array('textoAsociado' => 'Observaciones','nombre' => 'edi_observaciones','size' => '0','editable' => 'true','visible' => 'true','value' => $this->_tpl_vars['defaultData_Propietarios']['edi_observaciones'],'dataType' => $this->_tpl_vars['dataType_Propietarios']['edi_observaciones']), $this);?>
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

			<?php echo smarty_function_CWBoton(array('imagen' => '42','iconCSS' => "glyphicon glyphicon-remove",'texto' => 'Cancelar','class' => 'button','accion' => 'cancelar'), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_CWBarraInfPanel($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>						
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_CWPanel($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>	

<!-- ****************** PESTANYAS ************************-->
	<?php $this->_tag_stack[] = array('CWContenedorPestanyas', array()); $_block_repeat=true;smarty_block_CWContenedorPestanyas($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php echo smarty_function_CWPestanya(array('tipo' => 'fil','estado' => $this->_tpl_vars['estado_fil']), $this);?>
		
		<?php echo smarty_function_CWPestanya(array('tipo' => 'edi','estado' => $this->_tpl_vars['estado_edi']), $this);?>

	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_CWContenedorPestanyas($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_CWMarcoPanel($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_CWVentana($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>