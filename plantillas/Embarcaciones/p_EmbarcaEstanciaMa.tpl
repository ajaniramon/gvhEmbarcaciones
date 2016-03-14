{CWVentana tipoAviso=$smty_tipoAviso  codAviso=$smty_codError  descBreve=$smty_descBreve  textoAviso=$smty_textoAviso onLoad=$smty_jsOnLoad}
{CWBarra usuario=$smty_usuario codigo=$smty_codigo customTitle=$smty_customTitle modal=$smty_modal iconOut="glyphicon glyphicon-log-out" iconHome="glyphicon glyphicon-home" iconInfo="glyphicon glyphicon-info-sign"}	
	{CWMenuLayer name="$smty_nombre" cadenaMenu="$smty_cadenaMenu"}	
{/CWBarra}
{CWMarcoPanel conPestanyas="true"}

<!-- ********************************************** MAESTRO **********************************************-->
	<!--*********** PANEL fil ******************-->
	{CWPanel id="fil" action="buscar" method="post" estado=$estado_fil claseManejadora="EmbarcaEstanciaMa"}
		{CWBarraSupPanel titulo="EmbarcaEstanciaMa"}
			{CWBotonTooltip imagen="01" iconCSS="glyphicon glyphicon-plus" titulo="Insertar registros" funcion="insertar" actuaSobre="ficha" action="EmbarcaEstanciaMa__nuevo"}
			{CWBotonTooltip imagen="04" iconCSS="glyphicon glyphicon-refresh" titulo="Restaurar valores" funcion="restaurar" actuaSobre="ficha"}
		{/CWBarraSupPanel}
		{CWContenedor}
			{CWFicha}
				<table class="text" cellspacing="4" cellpadding="4" border="0">
					<tr>
					 	<td>{CWCampoTexto textoAsociado="Codigo" nombre="fil_codigo" size="10" editable="true" visible="true" value=$defaultData_EmbarcaEstanciaMa.codigo  dataType=$dataType_EmbarcaEstanciaMa.codigo}</td>
					</tr>
					<tr>
					 	<td>{CWCampoTexto textoAsociado="Matricula" nombre="fil_matricula" size="12" editable="true" visible="true" value=$defaultData_EmbarcaEstanciaMa.fil_matricula  dataType=$dataType_EmbarcaEstanciaMa.fil_matricula}</td>
					</tr>
					<tr>
					 	<td>{CWCampoTexto textoAsociado="Nombre" nombre="fil_nombre" size="50" editable="true" visible="true" value=$defaultData_EmbarcaEstanciaMa.fil_nombre  dataType=$dataType_EmbarcaEstanciaMa.fil_nombre}</td>
					</tr>
					<tr>
					 	<td>{CWCampoTexto textoAsociado="Manga" nombre="fil_manga" size="8" editable="true" visible="true" value=$defaultData_EmbarcaEstanciaMa.fil_manga  dataType=$dataType_EmbarcaEstanciaMa.fil_manga}</td>
					</tr>
					<tr>
					 	<td>{CWCampoTexto textoAsociado="Eslora" nombre="fil_eslora" size="8" editable="true" visible="true" value=$defaultData_EmbarcaEstanciaMa.fil_eslora  dataType=$dataType_EmbarcaEstanciaMa.fil_eslora}</td>
					</tr>
					<tr>
					 	<td>{CWCampoTexto textoAsociado="Vela motor" nombre="fil_vela_motor" size="1" editable="true" visible="true" value=$defaultData_EmbarcaEstanciaMa.fil_vela_motor  dataType=$dataType_EmbarcaEstanciaMa.fil_vela_motor}</td>
					</tr>
					<tr>
					 	<td>{CWCampoTexto textoAsociado="Fecha compra" nombre="fil_fecha_compra" size="12" editable="true" visible="true" value=$defaultData_EmbarcaEstanciaMa.fil_fecha_compra  dataType=$dataType_EmbarcaEstanciaMa.fil_fecha_compra}</td>
					</tr>
					<tr>
					 	<td>{CWCampoTexto textoAsociado="Caballaje" nombre="fil_caballaje" size="4" editable="true" visible="true" value=$defaultData_EmbarcaEstanciaMa.fil_caballaje  dataType=$dataType_EmbarcaEstanciaMa.fil_caballaje}</td>
					</tr>
					<tr>
					 	<td>{CWCampoTexto textoAsociado="Fecha baja" nombre="fil_fecha_baja" size="12" editable="true" visible="true" value=$defaultData_EmbarcaEstanciaMa.fil_fecha_baja  dataType=$dataType_EmbarcaEstanciaMa.fil_fecha_baja}</td>
					</tr>
					<tr>
					 	<td>{CWCampoTexto textoAsociado="Propietario dni" nombre="fil_propietario_dni" size="13" editable="true" visible="true" value=$defaultData_EmbarcaEstanciaMa.fil_propietario_dni  dataType=$dataType_EmbarcaEstanciaMa.fil_propietario_dni}</td>
					</tr>
				</table>
				<br/>
			{/CWFicha}
		{/CWContenedor}
		{CWBarraInfPanel}
			{CWBoton imagen="50" iconCSS="glyphicon glyphicon-search" texto="Buscar" class="button" accion="buscar" mostrarEspera="true"}
		{/CWBarraInfPanel}						
	{/CWPanel}
	
	<!--*********** PANEL lis ******************-->	
	{CWPanel id="lis" tipoComprobacion="envio" esMaestro="true" itemSeleccionado=$smty_filaSeleccionada action="operarBD" method="post" estado=$estado_lis claseManejadora="EmbarcaEstanciaMa"}
		{CWBarraSupPanel titulo="EmbarcaEstanciaMa"}

		{/CWBarraSupPanel}
		{CWContenedor}
			{CWTabla conCheck="true" conCheckTodos="false" id="Tabla1" numFilasPantalla="6" datos=$smty_datosTablaM}
				{CWFila tipoListado="false"}
					{CWCampoTexto textoAsociado="Codigo" nombre="lis_codigo" size="10" editable="true" visible="true" value=$defaultData_EmbarcaEstanciaMa.codigo  dataType=$dataType_EmbarcaEstanciaMa.codigo}
					{CWCampoTexto textoAsociado="Matricula" nombre="lis_matricula" size="12" editable="true" visible="true" value=$defaultData_EmbarcaEstanciaMa.lis_matricula  dataType=$dataType_EmbarcaEstanciaMa.lis_matricula}
					{CWCampoTexto textoAsociado="Nombre" nombre="lis_nombre" size="50" editable="true" visible="true" value=$defaultData_EmbarcaEstanciaMa.lis_nombre  dataType=$dataType_EmbarcaEstanciaMa.lis_nombre}
					{CWCampoTexto textoAsociado="Manga" nombre="lis_manga" size="8" editable="true" visible="true" value=$defaultData_EmbarcaEstanciaMa.lis_manga  dataType=$dataType_EmbarcaEstanciaMa.lis_manga}
					{CWCampoTexto textoAsociado="Eslora" nombre="lis_eslora" size="8" editable="true" visible="true" value=$defaultData_EmbarcaEstanciaMa.lis_eslora  dataType=$dataType_EmbarcaEstanciaMa.lis_eslora}
					{CWCampoTexto textoAsociado="Vela motor" nombre="lis_vela_motor" size="1" editable="true" visible="true" value=$defaultData_EmbarcaEstanciaMa.lis_vela_motor  dataType=$dataType_EmbarcaEstanciaMa.lis_vela_motor}
					{CWCampoTexto textoAsociado="Fecha compra" nombre="lis_fecha_compra" size="12" editable="true" visible="true" value=$defaultData_EmbarcaEstanciaMa.lis_fecha_compra  dataType=$dataType_EmbarcaEstanciaMa.lis_fecha_compra}
					{CWCampoTexto textoAsociado="Caballaje" nombre="lis_caballaje" size="4" editable="true" visible="true" value=$defaultData_EmbarcaEstanciaMa.lis_caballaje  dataType=$dataType_EmbarcaEstanciaMa.lis_caballaje}
					{CWCampoTexto textoAsociado="Fecha baja" nombre="lis_fecha_baja" size="12" editable="true" visible="true" value=$defaultData_EmbarcaEstanciaMa.lis_fecha_baja  dataType=$dataType_EmbarcaEstanciaMa.lis_fecha_baja}
					{CWCampoTexto textoAsociado="Propietario dni" nombre="lis_propietario_dni" size="13" editable="true" visible="true" value=$defaultData_EmbarcaEstanciaMa.lis_propietario_dni  dataType=$dataType_EmbarcaEstanciaMa.lis_propietario_dni}
				{/CWFila}				
				{CWPaginador enlacesVisibles="3" iconCSS="true"}
			{/CWTabla}
		{/CWContenedor}
		{CWBarraInfPanel}
			{CWBoton imagen="41" iconCSS="glyphicon glyphicon-ok" texto="Guardar" class="button" accion="guardar"}
			{CWBoton imagen="42" iconCSS="glyphicon glyphicon-remove" texto="Cancelar" class="button" accion="cancelar"}
		{/CWBarraInfPanel}						
	{/CWPanel}
	
	<!-- ****************** PESTAÑAS MAESTRO ************************-->	
	{CWContenedorPestanyas id="Maestro"}				
		{CWPestanya tipo="fil" panelAsociado="fil" estado=$estado_fil ocultar="Detalle"}
		{CWPestanya tipo="lis" panelAsociado="lis" estado=$estado_lis mostrar="Detalle"}
	{/CWContenedorPestanyas}
</td></tr>
<tr><td>																																									
<!-- ************************************ DETALLE *****************************************-->
	<!--*********** PANEL lis ******************-->
	{if count($smty_datosTablaM) gt 0}
	{CWPanel id="lisDetalle" detalleDe="lis" tipoComprobacion="envio" action="operarBD" method="post" estado="on" claseManejadora="EmbarcaEstanciaDet"}
		{CWBarraSupPanel titulo="EmbarcaEstanciaDet"}
			{CWBotonTooltip imagen="01" iconCSS="glyphicon glyphicon-plus" titulo="Insertar registros" funcion="insertar" actuaSobre="tabla"}
			{CWBotonTooltip imagen="02" iconCSS="glyphicon glyphicon-edit" titulo="Modificar registros" funcion="modificar" actuaSobre="tabla"}
			{CWBotonTooltip imagen="03" iconCSS="glyphicon glyphicon-minus" titulo="Eliminar registros" funcion="eliminar" actuaSobre="tabla"}
		{/CWBarraSupPanel}
		{CWContenedor}			
			{CWTabla conCheck="true" id="TablaDetalle" numFilasPantalla="6" datos=$smty_datosTablaD}
				{CWFila tipoListado="false"}
					{CWLista textoAsociado="Puerto" nombre="lis_puerto" actualizaA="lis_idamarre" editable="true" size="40" visible="true" value=$defaultData_EmbarcaEstanciaDet.lis_puerto dataType=$dataType_EmbarcaEstanciaDet.lis_puerto}
					{CWLista textoAsociado="Amarres" nombre="lis_idamarre" editable="true" size="40" visible="true" value=$defaultData_EmbarcaEstanciaDet.lis_idamarre dataType=$dataType_EmbarcaEstanciaDet.lis_idamarre}					
					{CWCampoTexto textoAsociado="Id" nombre="lis_id" size="4" editable="true" oculto="true" value=$defaultData_EmbarcaEstanciaDet.lis_id dataType=$dataType_EmbarcaEstanciaDet.lis_id}
					{CWCampoTexto textoAsociado="Desde" nombre="lis_desde" size="0" editable="true" value=$defaultData_EmbarcaEstanciaDet.lis_desde dataType=$dataType_EmbarcaEstanciaDet.lis_desde}
					{CWCampoTexto textoAsociado="Hasta" nombre="lis_hasta" size="0" editable="true" value=$defaultData_EmbarcaEstanciaDet.lis_hasta dataType=$dataType_EmbarcaEstanciaDet.lis_hasta}
					{CWCampoTexto textoAsociado="Embarcacion codigo" nombre="lis_embarcacion_codigo" oculto="true" size="10" editable="true" value=$defaultData_EmbarcaEstanciaDet.lis_embarcacion_codigo dataType=$dataType_EmbarcaEstanciaDet.lis_embarcacion_codigo}
				{/CWFila}				
				{CWPaginador enlacesVisibles="3" iconCSS="true"}
			{/CWTabla}	 		
		{/CWContenedor}
		{CWBarraInfPanel}
			{CWBoton imagen="41" iconCSS="glyphicon glyphicon-ok" texto="Guardar" class="button" accion="guardar"}
			{CWBoton imagen="42" iconCSS="glyphicon glyphicon-remove" texto="Cancelar" class="button" accion="cancelar"}
		{/CWBarraInfPanel}						
	{/CWPanel}	
		
	<!-- ****************** PESTAÑAS DETALLE ************************-->	
	{CWContenedorPestanyas id="Detalle"}
		{CWPestanya tipo="lis" panelAsociado="lisDetalle" estado="on"}
	{/CWContenedorPestanyas}
	{/if}
{/CWMarcoPanel}
{/CWVentana}