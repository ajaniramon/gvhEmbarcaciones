{CWVentana tipoAviso=$smty_tipoAviso  codAviso=$smty_codError  descBreve=$smty_descBreve  textoAviso=$smty_textoAviso onLoad=$smty_jsOnLoad}
{CWBarra usuario=$smty_usuario codigo=$smty_codigo customTitle=$smty_customTitle modal=$smty_modal iconOut="glyphicon glyphicon-log-out" iconHome="glyphicon glyphicon-home" iconInfo="glyphicon glyphicon-info-sign"}	
	{CWMenuLayer name="$smty_nombre" cadenaMenu="$smty_cadenaMenu"}	
{/CWBarra}
{CWMarcoPanel conPestanyas="true"}

<!-- ********************************************** MAESTRO **********************************************-->
	<!--*********** PANEL fil ******************-->
	{CWPanel id="fil" action="buscar" method="post" estado=$estado_fil claseManejadora="ProvinciaMunicipioMa"}
		{CWBarraSupPanel titulo="Búsqueda de provincias"}
			{CWBotonTooltip imagen="01" iconCSS="glyphicon glyphicon-plus" titulo="Insertar registros" funcion="insertar" actuaSobre="ficha" action="ProvinciaMunicipioMa__nuevo"}
			{CWBotonTooltip imagen="04" iconCSS="glyphicon glyphicon-refresh" titulo="Restaurar valores" funcion="restaurar" actuaSobre="ficha"}
		{/CWBarraSupPanel}
		{CWContenedor}
			{CWFicha}
				<table class="text" cellspacing="4" cellpadding="4" border="0">
					<tr>
					 	<td>{CWCampoTexto textoAsociado="Cprov" nombre="fil_cprov" size="5" editable="true" visible="true" value=$defaultData_ProvinciaMunicipioMa.cprov  dataType=$dataType_ProvinciaMunicipioMa.cprov}</td>
					</tr>
					<tr>
					 	<td>{CWCampoTexto textoAsociado="Dprov" nombre="fil_dprov" size="30" editable="true" visible="true" value=$defaultData_ProvinciaMunicipioMa.fil_dprov  dataType=$dataType_ProvinciaMunicipioMa.fil_dprov}</td>
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
	{CWPanel id="lis" tipoComprobacion="envio" esMaestro="true" itemSeleccionado=$smty_filaSeleccionada action="operarBD" method="post" estado=$estado_lis claseManejadora="ProvinciaMunicipioMa"}
		{CWBarraSupPanel titulo="Listado de provincias"}
			{CWBotonTooltip imagen="01" iconCSS="glyphicon glyphicon-plus" titulo="Insertar registro" funcion="insertar" actuaSobre="tabla" action="ProvinciaMunicipioMa__nuevo"}
			{CWBotonTooltip imagen="02" iconCSS="glyphicon glyphicon-edit" titulo="Modificar registro" funcion="modificar" actuaSobre="tabla"}
			{CWBotonTooltip imagen="03" iconCSS="glyphicon glyphicon-minus" titulo="Eliminar registro" funcion="eliminar" actuaSobre="tabla"}
			{CWBotonTooltip imagen="04" iconCSS="glyphicon glyphicon-refresh" titulo="Restaurar valores" funcion="limpiar" actuaSobre="tabla"}
		{/CWBarraSupPanel}
		{CWContenedor}
			{CWTabla conCheck="true" conCheckTodos="false" id="Tabla1" numFilasPantalla="6" datos=$smty_datosTablaM}
				{CWFila tipoListado="false"}
					{CWCampoTexto textoAsociado="Cprov" nombre="lis_cprov" size="5" editable="true" visible="true" value=$defaultData_ProvinciaMunicipioMa.cprov  dataType=$dataType_ProvinciaMunicipioMa.cprov}
					{CWCampoTexto textoAsociado="Dprov" nombre="lis_dprov" size="30" editable="true" visible="true" value=$defaultData_ProvinciaMunicipioMa.lis_dprov  dataType=$dataType_ProvinciaMunicipioMa.lis_dprov actualizaA="lis_dprov"}
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
	{CWPanel id="lisDetalle" detalleDe="lis" tipoComprobacion="envio" action="operarBD" method="post" estado="on" claseManejadora="ProvinciaMunicipioDet"}
		{CWBarraSupPanel titulo="Listado de Municipios"}
			{CWBotonTooltip imagen="01" iconCSS="glyphicon glyphicon-plus" titulo="Insertar registros" funcion="insertar" actuaSobre="tabla"}
			{CWBotonTooltip imagen="02" iconCSS="glyphicon glyphicon-edit" titulo="Modificar registros" funcion="modificar" actuaSobre="tabla"}
			{CWBotonTooltip imagen="03" iconCSS="glyphicon glyphicon-minus" titulo="Eliminar registros" funcion="eliminar" actuaSobre="tabla"}
		{/CWBarraSupPanel}
		{CWContenedor}			
			{CWTabla conCheck="true" id="TablaDetalle" numFilasPantalla="6" datos=$smty_datosTablaD}
				{CWFila tipoListado="false"}
					{CWCampoTexto textoAsociado="Cmun" nombre="lis_cmun" size="5" editable="true" value=$defaultData_ProvinciaMunicipioDet.lis_cmun dataType=$dataType_ProvinciaMunicipioDet.lis_cmun}
					{CWCampoTexto textoAsociado="Dmun" nombre="lis_dmun" size="30" editable="true" value=$defaultData_ProvinciaMunicipioDet.lis_dmun dataType=$dataType_ProvinciaMunicipioDet.lis_dmun actualizaA="lis_dmun"}
					{CWCampoTexto textoAsociado="Provincia cprov" nombre="lis_provincia_cprov" size="5" editable="true" value=$defaultData_ProvinciaMunicipioDet.provincia_cprov dataType=$dataType_ProvinciaMunicipioDet.provincia_cprov}
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