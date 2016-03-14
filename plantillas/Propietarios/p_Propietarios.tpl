{CWVentana tipoAviso=$smty_tipoAviso  codAviso=$smty_codError  descBreve = $smty_descBreve  textoAviso=$smty_textoAviso onLoad=$smty_jsOnLoad}
{CWBarra usuario=$smty_usuario codigo=$smty_codigo customTitle=$smty_customTitle modal=$smty_modal iconOut="glyphicon glyphicon-log-out" iconHome="glyphicon glyphicon-home" iconInfo="glyphicon glyphicon-info-sign"}
	{CWMenuLayer name="$smty_nombre" cadenaMenu="$smty_cadenaMenu"}	
{/CWBarra}
{CWMarcoPanel conPestanyas="true"}

<!--*********** PANEL fil ******************-->
	{CWPanel id="fil" action="buscar" method="post" estado="$estado_fil" claseManejadora="Propietarios"}
		{CWBarraSupPanel titulo="Mantenimiento de Propietarios"}
			{CWBotonTooltip imagen="01" iconCSS="glyphicon glyphicon-plus" titulo="Insertar Propietarios" funcion="insertar" actuaSobre="ficha" action="Propietarios__nuevo"}
			{CWBotonTooltip imagen="04" iconCSS="glyphicon glyphicon-refresh" titulo="Limpiar campos" funcion="limpiar" actuaSobre="ficha"}
		{/CWBarraSupPanel}
		{CWContenedor}
			{CWFicha}
				<table class="text" cellspacing="4" cellpadding="4" border="0">
					<tr>
						<td>{CWCampoTexto textoAsociado="Dni" nombre="fil_dni" size="13" editable="true" visible="true" value=$defaultData_Propietarios.fil_dni dataType=$dataType_Propietarios.fil_dni}</td>
					</tr>
					<tr>
						<td>{CWCampoTexto textoAsociado="Nombre" nombre="fil_nombre" size="50" editable="true" visible="true" value=$defaultData_Propietarios.fil_nombre dataType=$dataType_Propietarios.fil_nombre}</td>
					</tr>
					<tr>
						<td>{CWCampoTexto textoAsociado="Direccion" nombre="fil_direccion" size="100" editable="true" visible="true" value=$defaultData_Propietarios.fil_direccion dataType=$dataType_Propietarios.fil_direccion}</td>
					</tr>
					<tr>
						<td>{CWCampoTexto textoAsociado="Telefono" nombre="fil_telefono" size="15" editable="true" visible="true" value=$defaultData_Propietarios.fil_telefono dataType=$dataType_Propietarios.fil_telefono}</td>
					</tr>
					<tr>
						<td>{CWCampoTexto textoAsociado="Cuenta bancaria" nombre="fil_cuenta_bancaria" size="23" editable="true" visible="true" value=$defaultData_Propietarios.fil_cuenta_bancaria dataType=$dataType_Propietarios.fil_cuenta_bancaria}</td>
					</tr>
				</table>
				<br/>
			{/CWFicha}
		{/CWContenedor}
		{CWBarraInfPanel}
			{CWBoton imagen="50" iconCSS="glyphicon glyphicon-search" texto="Buscar" class="button" accion="buscar" mostrarEspera="true"}
		{/CWBarraInfPanel}						
	{/CWPanel}

<!-- ****************** PANEL edi ***********************-->
	{CWPanel id="edi" tipoComprobacion="envio" action="operarBD" method="post" estado="$estado_edi" claseManejadora="Propietarios"}
		{CWBarraSupPanel titulo="Mantenimiento de Propietarios"}
			{CWBotonTooltip imagen="01" iconCSS="glyphicon glyphicon-plus" titulo="Insertar registros" funcion="insertar" actuaSobre="ficha" action="Propietarios__nuevo"}
			{CWBotonTooltip imagen="02" iconCSS="glyphicon glyphicon-edit" titulo="Modificar registros" funcion="modificar" actuaSobre="ficha"}
			{CWBotonTooltip imagen="03" iconCSS="glyphicon glyphicon-minus" titulo="Eliminar registros" funcion="eliminar" actuaSobre="ficha"}
		{/CWBarraSupPanel}
		{CWContenedor}
			{CWFichaEdicion id="FichaEdicion" datos=$smty_datosFicha}
				{CWFicha}
					<table class="text" cellspacing="4" cellpadding="4" border="0">
						<tr>
						<td>{CWCampoTexto textoAsociado="Dni" nombre="edi_dni" size="13" editable="true" visible="true" value=$defaultData_Propietarios.edi_dni dataType=$dataType_Propietarios.edi_dni}</td>
						</tr>
						<tr>
						<td>{CWCampoTexto textoAsociado="Nombre" nombre="edi_nombre" size="50" editable="true" visible="true" value=$defaultData_Propietarios.edi_nombre dataType=$dataType_Propietarios.edi_nombre}</td>
						</tr>
						<tr>
						<td>{CWCampoTexto textoAsociado="Direccion" nombre="edi_direccion" size="100" editable="true" visible="true" value=$defaultData_Propietarios.edi_direccion dataType=$dataType_Propietarios.edi_direccion}</td>
						</tr>
						<tr>
						<td>{CWCampoTexto textoAsociado="Telefono" nombre="edi_telefono" size="15" editable="true" visible="true" value=$defaultData_Propietarios.edi_telefono dataType=$dataType_Propietarios.edi_telefono}</td>
						</tr>
						<tr>
						<td>{CWCampoTexto textoAsociado="Cuenta bancaria" nombre="edi_cuenta_bancaria" size="23" editable="true" visible="true" value=$defaultData_Propietarios.edi_cuenta_bancaria dataType=$dataType_Propietarios.edi_cuenta_bancaria}</td>
						</tr>
						<tr>
						<td>{CWAreaTexto textoAsociado="Observaciones" nombre="edi_observaciones" size="0" editable="true" visible="true" value=$defaultData_Propietarios.edi_observaciones dataType=$dataType_Propietarios.edi_observaciones}</td>
						</tr>
					</table>
<br/>
				{/CWFicha}
				{CWPaginador enlacesVisibles="3" iconCSS="true"}
			{/CWFichaEdicion}
		{/CWContenedor}
		{CWBarraInfPanel}
			{CWBoton imagen="41" iconCSS="glyphicon glyphicon-ok" texto="Guardar" class="button" accion="guardar"}
			{CWBoton imagen="42" iconCSS="glyphicon glyphicon-remove" texto="Cancelar" class="button" accion="cancelar"}
		{/CWBarraInfPanel}						
	{/CWPanel}	

<!-- ****************** PESTANYAS ************************-->
	{CWContenedorPestanyas}
		{CWPestanya tipo="fil" estado=$estado_fil}		
		{CWPestanya tipo="edi" estado=$estado_edi}
	{/CWContenedorPestanyas}
{/CWMarcoPanel}
{/CWVentana}