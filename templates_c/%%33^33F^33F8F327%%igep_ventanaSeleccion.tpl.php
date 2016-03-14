<?php /* Smarty version 2.6.14, created on 2016-03-11 14:03:21
         compiled from igep_ventanaSeleccion.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'CWVentana', 'igep_ventanaSeleccion.tpl', 1, false),array('block', 'CWMarcoPanel', 'igep_ventanaSeleccion.tpl', 2, false),array('block', 'CWPanel', 'igep_ventanaSeleccion.tpl', 3, false),array('block', 'CWBarraSupPanel', 'igep_ventanaSeleccion.tpl', 4, false),array('block', 'CWContenedor', 'igep_ventanaSeleccion.tpl', 7, false),array('block', 'CWFicha', 'igep_ventanaSeleccion.tpl', 8, false),array('block', 'CWInfoContenedor', 'igep_ventanaSeleccion.tpl', 10, false),array('block', 'CWTabla', 'igep_ventanaSeleccion.tpl', 25, false),array('block', 'CWFila', 'igep_ventanaSeleccion.tpl', 27, false),array('block', 'CWBarraInfPanel', 'igep_ventanaSeleccion.tpl', 45, false),array('function', 'CWBotonTooltip', 'igep_ventanaSeleccion.tpl', 5, false),array('function', 'CWCampoTexto', 'igep_ventanaSeleccion.tpl', 20, false),array('function', 'CWPaginador', 'igep_ventanaSeleccion.tpl', 34, false),array('function', 'CWBoton', 'igep_ventanaSeleccion.tpl', 46, false),)), $this); ?>
<?php $this->_tag_stack[] = array('CWVentana', array('titulo' => "VENTANA DE SELECCIÓN",'tipoAviso' => $this->_tpl_vars['smty_tipoAviso'],'codAviso' => $this->_tpl_vars['smty_codError'],'descBreve' => $this->_tpl_vars['smty_descBreve'],'textoAviso' => $this->_tpl_vars['smty_textoAviso'],'onUnload' => $this->_tpl_vars['smty_unLoad'])); $_block_repeat=true;smarty_block_CWVentana($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start();  $this->_tag_stack[] = array('CWMarcoPanel', array('conPestanyas' => 'false')); $_block_repeat=true;smarty_block_CWMarcoPanel($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<?php $this->_tag_stack[] = array('CWPanel', array('id' => 'vSeleccion','action' => 'buscarVentanaSeleccion','method' => 'post','estado' => 'on')); $_block_repeat=true;smarty_block_CWPanel($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php $this->_tag_stack[] = array('CWBarraSupPanel', array('titulo' => "Ventana de Selección")); $_block_repeat=true;smarty_block_CWBarraSupPanel($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo smarty_function_CWBotonTooltip(array('imagen' => '04','iconCSS' => "glyphicon glyphicon-refresh",'titulo' => 'Restaurar','funcion' => 'restaurar','actuaSobre' => 'ficha'), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_CWBarraSupPanel($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php $this->_tag_stack[] = array('CWContenedor', array()); $_block_repeat=true;smarty_block_CWContenedor($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php $this->_tag_stack[] = array('CWFicha', array()); $_block_repeat=true;smarty_block_CWFicha($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php if ($this->_tpl_vars['stmy_showInfoRowsExceeded'] == 1): ?>	
				<?php $this->_tag_stack[] = array('CWInfoContenedor', array()); $_block_repeat=true;smarty_block_CWInfoContenedor($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
					La consulta devuelve demasiados registros y sólo se mostrarán los <?php echo $this->_tpl_vars['stmy_numRegistros']; ?>
 primeros. <br/>
					Utilice el filtro para acotar el resultado obtenido.
				<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_CWInfoContenedor($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
			<?php else: ?>
				<br/><br/>
			<?php endif; ?>
			<input type='hidden' id='actionOrigen' name='actionOrigen' value="<?php echo $this->_tpl_vars['smty_actionOrigen']; ?>
" />
			<center>			
			<div style='display:none'> <input type='text' name='captafoco' id='captafoco' value="<?php echo $this->_tpl_vars['smty_actionOrigen']; ?>
" /> </div>
			Valor a buscar: <?php echo smarty_function_CWCampoTexto(array('nombre' => 'campoBuscar','conVentanaModal' => 'true','editable' => 'true','size' => '13','comprobacion' => 'true'), $this);?>

			<?php echo smarty_function_CWBotonTooltip(array('imagen' => '50','iconCSS' => "glyphicon glyphicon-search",'texto' => 'Buscar','funcion' => 'buscarVS','actuaSobre' => $this->_tpl_vars['smty_campoActua'],'formActua' => $this->_tpl_vars['smty_formActua'],'filaActual' => $this->_tpl_vars['smty_filaActual'],'panelActua' => $this->_tpl_vars['smty_panelActua'],'claseManejadora' => $this->_tpl_vars['smty_claseManejadora']), $this);?>

			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_CWFicha($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
			<div id="resBusqueda" style="display:block;overflow:auto;">
			<?php if (count ( $this->_tpl_vars['smty_datosTabla'] ) > 0): ?>
			<?php $this->_tag_stack[] = array('CWTabla', array('conCheck' => 'true','conCheckTodos' => 'false','noOrdenacion' => 'true','id' => $this->_tpl_vars['smty_panelActua'],'numPagInsertar' => '0','numFilasPantalla' => ($this->_tpl_vars['stmy_numFilasPantalla']),'datos' => $this->_tpl_vars['smty_datosTabla'])); $_block_repeat=true;smarty_block_CWTabla($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
					<?php if ($this->_tpl_vars['stmy_templateSource'] != ""): ?>
						<?php $this->_tag_stack[] = array('CWFila', array('tipoListado' => 'false')); $_block_repeat=true;smarty_block_CWFila($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['stmy_templateSource'], 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
						<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_CWFila($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
					<?php else: ?>
						<?php $this->_tag_stack[] = array('CWFila', array('tipoListado' => 'true')); $_block_repeat=true;smarty_block_CWFila($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
						<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_CWFila($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
					<?php endif; ?>
				<?php echo smarty_function_CWPaginador(array('enlacesVisibles' => '3'), $this);?>

			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_CWTabla($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
			<?php else: ?>
			<script  type='text/javascript'>//<![CDATA[
				var vSeleccion_paginacion;
			//]]
			</script>
			<?php endif; ?>
			</div>
			</center>
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_CWContenedor($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php $this->_tag_stack[] = array('CWBarraInfPanel', array()); $_block_repeat=true;smarty_block_CWBarraInfPanel($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo smarty_function_CWBoton(array('imagen' => '41','iconCSS' => "glyphicon glyphicon-ok",'texto' => 'Aceptar','class' => 'button','accion' => 'aceptarvs','formActua' => $this->_tpl_vars['smty_formActua'],'actuaSobre' => $this->_tpl_vars['smty_matching'],'filaActual' => $this->_tpl_vars['smty_filaActual'],'panelActua' => $this->_tpl_vars['smty_panelActua']), $this);?>

			<?php echo smarty_function_CWBoton(array('imagen' => '42','iconCSS' => "glyphicon glyphicon-remove",'texto' => 'Cancelar','class' => 'button','accion' => 'cancelarvs','formActua' => $this->_tpl_vars['smty_formActua']), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_CWBarraInfPanel($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_CWPanel($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_CWMarcoPanel($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>	
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_CWVentana($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>