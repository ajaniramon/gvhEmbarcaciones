{CWVentana tipoAviso=$smty_tipoAviso  codAviso=$smty_codError  descBreve = $smty_descBreve  textoAviso=$smty_textoAviso onLoad=$smty_jsOnLoad}
{CWBarra usuario=$smty_usuario codigo=$smty_codigo customTitle=$smty_customTitle modal=$smty_modal iconOut="glyphicon glyphicon-log-out" iconHome="glyphicon glyphicon-home" iconInfo="glyphicon glyphicon-info-sign"}
	{CWMenuLayer name="$smty_nombre" cadenaMenu="$smty_cadenaMenu"}	
{/CWBarra}
{CWMarcoPanel conPestanyas="true"}

<!--*********** PANEL fil ******************-->
	{CWPanel id="fil" action="buscar" method="post" estado="$estado_fil"  claseManejadora="Embarcacion"}
		{CWBarraSupPanel titulo="Mantenimiento de Embarcacion"}
			{CWBotonTooltip imagen="01" iconCSS="glyphicon glyphicon-plus" iconCSS="glyphicon glyphicon-plus" titulo="Insertar Embarcacion" funcion="insertar" actuaSobre="ficha"  action="Embarcacion__nuevo"}
			{CWBotonTooltip imagen="04" iconCSS="glyphicon glyphicon-refresh" titulo="Limpiar campos" funcion="limpiar" actuaSobre="ficha"}
		{/CWBarraSupPanel}
		{CWContenedor}
			{CWFicha}
				<table class="text" cellspacing="4" cellpadding="4" border="0">
					<tr>
						<td>{CWCampoTexto textoAsociado="Codigo" nombre="fil_codigo" size="10" editable="true" visible="true" value=$defaultData_Embarcacion.fil_codigo dataType=$dataType_Embarcacion.fil_codigo}</td>
					</tr>
					<tr>
						<td>{CWCampoTexto textoAsociado="Matricula" nombre="fil_matricula" size="12" editable="true" visible="true" value=$defaultData_Embarcacion.fil_matricula dataType=$dataType_Embarcacion.fil_matricula}</td>
					</tr>
					<tr>
						<td>{CWCampoTexto textoAsociado="Nombre" nombre="fil_nombre" size="50" editable="true" visible="true" value=$defaultData_Embarcacion.fil_nombre dataType=$dataType_Embarcacion.fil_nombre}</td>
					</tr>
					<tr>
						<td>{CWCampoTexto textoAsociado="Manga" nombre="fil_manga" size="8" editable="true" visible="true" value=$defaultData_Embarcacion.fil_manga dataType=$dataType_Embarcacion.fil_manga}</td>
					</tr>
					<tr>
						<td>{CWCampoTexto textoAsociado="Eslora" nombre="fil_eslora" size="8" editable="true" visible="true" value=$defaultData_Embarcacion.fil_eslora dataType=$dataType_Embarcacion.fil_eslora}</td>
					</tr>
					<tr>
						<td>{CWCampoTexto textoAsociado="Vela motor" nombre="fil_vela_motor" size="1" editable="true" visible="true" value=$defaultData_Embarcacion.fil_vela_motor dataType=$dataType_Embarcacion.fil_vela_motor}</td>
					</tr>
					<tr>
						<td>{CWCampoTexto textoAsociado="Fecha compra" nombre="fil_fecha_compra" size="12" editable="true" visible="true" value=$defaultData_Embarcacion.fil_fecha_compra dataType=$dataType_Embarcacion.fil_fecha_compra}</td>
					</tr>
					<tr>
						<td>{CWCampoTexto textoAsociado="Caballaje" nombre="fil_caballaje" size="4" editable="true" visible="true" value=$defaultData_Embarcacion.fil_caballaje dataType=$dataType_Embarcacion.fil_caballaje}</td>
					</tr>
					<tr>
						<td>{CWCampoTexto textoAsociado="Fecha baja" nombre="fil_fecha_baja" size="12" editable="true" visible="true" value=$defaultData_Embarcacion.fil_fecha_baja dataType=$dataType_Embarcacion.fil_fecha_baja}</td>
					</tr>
					<tr>
						<td>{CWCampoTexto textoAsociado="Propietario dni" nombre="fil_propietario_dni" size="13" editable="true" visible="true" value=$defaultData_Embarcacion.fil_propietario_dni dataType=$dataType_Embarcacion.fil_propietario_dni}</td>
					</tr>
				</table>
				<br/>
			{/CWFicha}
		{/CWContenedor}
		{CWBarraInfPanel}
			{CWBoton imagen="50" iconCSS="glyphicon glyphicon-search" texto="Buscar" class="button" accion="buscar" mostrarEspera="true"}
		{/CWBarraInfPanel}						
	{/CWPanel}

<!-- ****************** PANEL lis ***********************-->
	{CWPanel id="lis" action="borrar" method="post" estado="$estado_lis" claseManejadora="Embarcacion"}
		{CWBarraSupPanel titulo="Listado de Embarcacion"}
			
			{CWBotonTooltip imagen="01" iconCSS="glyphicon glyphicon-plus" titulo="Insertar Embarcacion" funcion="insertar" actuaSobre="ficha"  action="Embarcacion__nuevo"}
			{CWBotonTooltip imagen="02" iconCSS="glyphicon glyphicon-edit" titulo="Modificar Embarcacion" funcion="modificar" actuaSobre="ficha" action="Embarcacion__editar"}
			{CWBotonTooltip imagen="03" iconCSS="glyphicon glyphicon-minus" titulo="Eliminar Embarcacion" funcion="eliminar" actuaSobre="tabla"}
		{/CWBarraSupPanel}
		{CWContenedor}
			{CWTabla conCheck="true" conCheckTodos="true" id="Tabla1" numFilasPantalla="10" datos=$smty_datosTabla}
				{CWFila tipoListado="false"}
					{CWCampoTexto textoAsociado="Codigo" nombre="lis_codigo" size="10" editable="true" visible="true" value=$defaultData_Embarcacion.lis_codigo dataType=$dataType_Embarcacion.lis_codigo}
					{CWCampoTexto textoAsociado="Matricula" nombre="lis_matricula" size="12" editable="true" visible="true" value=$defaultData_Embarcacion.lis_matricula dataType=$dataType_Embarcacion.lis_matricula}
					{CWCampoTexto textoAsociado="Nombre" nombre="lis_nombre" size="50" editable="true" visible="true" value=$defaultData_Embarcacion.lis_nombre dataType=$dataType_Embarcacion.lis_nombre}
					{CWCampoTexto textoAsociado="Caballaje" nombre="lis_caballaje" size="4" editable="true" visible="true" value=$defaultData_Embarcacion.lis_caballaje dataType=$dataType_Embarcacion.lis_caballaje}
					{CWCampoTexto textoAsociado="Fecha baja" nombre="lis_fecha_baja" size="12" editable="true" visible="true" value=$defaultData_Embarcacion.lis_fecha_baja dataType=$dataType_Embarcacion.lis_fecha_baja}
					{CWCampoTexto textoAsociado="Propietario dni" nombre="lis_propietario_dni" size="13" editable="true" visible="true" value=$defaultData_Embarcacion.lis_propietario_dni dataType=$dataType_Embarcacion.lis_propietario_dni}
				{/CWFila}				
				{CWPaginador enlacesVisibles="3" iconCSS="true"}
			{/CWTabla}			
		{/CWContenedor}
		{CWBarraInfPanel}
			{CWBoton imagen="41" iconCSS="glyphicon glyphicon-ok" texto="Guardar" class="button" accion="guardar"}
			{CWBoton imagen="42" iconCSS="glyphicon glyphicon-remove" texto="Cancelar" class="button" accion="cancelar"}			
			{CWBoton imagen="10" texto="Listar" class="button" accion="particular" action="imprimir"}
		{/CWBarraInfPanel}						
	{/CWPanel}	


<!-- ****************** PANEL edi ***********************-->
	{CWPanel id="edi" tipoComprobacion="envio" action="$smty_operacionFichaEmbarcacion" method="post" estado="$estado_edi" claseManejadora="Embarcacion"  accion=$smty_operacionFichaEmbarcacion}
		{CWBarraSupPanel titulo="Mantenimiento de Embarcacion"}
			{CWBotonTooltip imagen="04" iconCSS="glyphicon glyphicon-refresh" titulo="Limpiar campos" funcion="limpiar" actuaSobre="ficha"}				
		{/CWBarraSupPanel}
		{CWContenedor}
			{CWFichaEdicion id="FichaEdicion" datos=$smty_datosFicha} 
				{CWFicha}

					<table class="text" cellspacing="4" cellpadding="4" border="0">
						<tr>
							<td>{CWCampoTexto textoAsociado="Codigo" nombre="edi_codigo" size="10" editable="nuevo" visible="true" value=$defaultData_Embarcacion.edi_codigo dataType=$dataType_Embarcacion.edi_codigo}</td>
						</tr>
						<tr>
							<td>{CWCampoTexto textoAsociado="Matricula" nombre="edi_matricula" size="12" editable="nuevo" visible="true" value=$defaultData_Embarcacion.edi_matricula dataType=$dataType_Embarcacion.edi_matricula}</td>
						</tr>
						<tr>
							<td>{CWCampoTexto textoAsociado="Nombre" nombre="edi_nombre" size="50" editable="true" visible="true" value=$defaultData_Embarcacion.edi_nombre dataType=$dataType_Embarcacion.edi_nombre}</td>
						</tr>
						<tr>
							<td>{CWCampoTexto textoAsociado="Manga" nombre="edi_manga" size="8" editable="true" visible="true" value=$defaultData_Embarcacion.edi_manga dataType=$dataType_Embarcacion.edi_manga}</td>
						</tr>
						<tr>
							<td>{CWCampoTexto textoAsociado="Eslora" nombre="edi_eslora" size="8" editable="true" visible="true" value=$defaultData_Embarcacion.edi_eslora dataType=$dataType_Embarcacion.edi_eslora}</td>
						</tr>
						<tr>
							<td>{CWCampoTexto textoAsociado="Vela motor" nombre="edi_vela_motor" size="1" editable="true" visible="true" value=$defaultData_Embarcacion.edi_vela_motor dataType=$dataType_Embarcacion.edi_vela_motor}</td>
						</tr>
						<tr>
							<td>{CWCampoTexto textoAsociado="Fecha compra" nombre="edi_fecha_compra" size="12" editable="true" visible="true" value=$defaultData_Embarcacion.edi_fecha_compra dataType=$dataType_Embarcacion.edi_fecha_compra}</td>
						</tr>
						<tr>
							<td>{CWCampoTexto textoAsociado="Caballaje" nombre="edi_caballaje" size="4" editable="true" visible="true" value=$defaultData_Embarcacion.edi_caballaje dataType=$dataType_Embarcacion.edi_caballaje}</td>
						</tr>
						<tr>
							<td>
{CWLista textoAsociado="Estado" nombre="edi_estado" size="30" editable="true" visible="true" value=$defaultData_Embarcacion.edi_estado dataType=$dataType_Embarcacion.edi_estado actualizaA="edi_fecha_baja"}							</td>
						</tr>
						<tr>
							<td>{CWCampoTexto textoAsociado="Fecha baja" nombre="edi_fecha_baja" size="12" editable="true" visible="true" value=$defaultData_Embarcacion.edi_fecha_baja dataType=$dataType_Embarcacion.edi_fecha_baja}</td>
						</tr>
						<tr>
							<td>{CWCampoTexto textoAsociado="Propietario dni" nombre="edi_propietario_dni" size="13" editable="true" visible="true" value=$defaultData_Embarcacion.edi_propietario_dni dataType=$dataType_Embarcacion.edi_propietario_dni}

{CWBotonTooltip imagen="13" titulo="Propietario" funcion="abrirVS" actuaSobre="edi_propietario_dni"}
</td>
						</tr>
						
					</table>
					<br/>
				{/CWFicha}
				{CWPaginador enlacesVisibles="3" iconCSS="true"}
			{/CWFichaEdicion}
		{/CWContenedor}
		{CWBarraInfPanel}
			{CWBoton imagen="41" iconCSS="glyphicon glyphicon-ok" texto="Guardar" class="button" accion="guardar"}
			{CWBoton imagen="42" iconCSS="glyphicon glyphicon-remove" texto="Cancelar" class="button" accion="cancelar" action="cancelarEdicion"}
		{/CWBarraInfPanel}						
	{/CWPanel}	
		
<!-- ****************** PESTANYAS ************************-->
	{CWContenedorPestanyas}
		{CWPestanya tipo="fil" estado=$estado_fil}		
		{CWPestanya tipo="lis" estado=$estado_lis}
		{CWPestanya tipo="edi" estado=$estado_edi}
	{/CWContenedorPestanyas}
{/CWMarcoPanel}
{/CWVentana}