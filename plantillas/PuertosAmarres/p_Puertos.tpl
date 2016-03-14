{CWVentana tipoAviso=$smty_tipoAviso  codAviso=$smty_codError  descBreve=$smty_descBreve  textoAviso=$smty_textoAviso onLoad=$smty_jsOnLoad}
{CWBarra usuario=$smty_usuario codigo=$smty_codigo customTitle=$smty_customTitle modal=$smty_modal iconOut="glyphicon glyphicon-log-out" iconHome="glyphicon glyphicon-home" iconInfo="glyphicon glyphicon-info-sign"}	
	{CWMenuLayer name="$smty_nombre" cadenaMenu="$smty_cadenaMenu"}	
{/CWBarra}
{CWMarcoPanel conPestanyas="true"}

<!-- ********************************************** MAESTRO **********************************************-->
	<!--*********** PANEL fil ******************-->
	{CWPanel id="fil" action="buscar" method="post" estado=$estado_fil claseManejadora="Puertos"}
		{CWBarraSupPanel titulo="Puertos"}
			{CWBotonTooltip imagen="01" iconCSS="glyphicon glyphicon-plus" titulo="Insertar registros" funcion="insertar" actuaSobre="ficha" action="Puertos__nuevo"}
			{CWBotonTooltip imagen="04" iconCSS="glyphicon glyphicon-refresh" titulo="Restaurar valores" funcion="restaurar" actuaSobre="ficha"}
		{/CWBarraSupPanel}
		{CWContenedor}
			{CWFicha}
				<table class="text" cellspacing="4" cellpadding="4" border="0">
					<tr>
					 	<td>{CWCampoTexto textoAsociado="Cpuerto" nombre="fil_cpuerto" size="5" editable="true" visible="true" value=$defaultData_Puertos.cpuerto  dataType=$dataType_Puertos.cpuerto}</td>
					</tr>
					<tr>
					 	<td>{CWCampoTexto textoAsociado="Dpuerto" nombre="fil_dpuerto" size="30" editable="true" visible="true" value=$defaultData_Puertos.fil_dpuerto  dataType=$dataType_Puertos.fil_dpuerto}</td>
					</tr>
					<tr>
					 	<td>{CWCampoTexto textoAsociado="Direccion" nombre="fil_direccion" size="50" editable="true" visible="true" value=$defaultData_Puertos.fil_direccion  dataType=$dataType_Puertos.fil_direccion}</td>
					</tr>
					<tr>
					 	<td>{CWCampoTexto textoAsociado="Telefono" nombre="fil_telefono" size="20" editable="true" visible="true" value=$defaultData_Puertos.fil_telefono  dataType=$dataType_Puertos.fil_telefono}</td>
					</tr>
					<tr>
					 	<td>{CWCampoTexto textoAsociado="Municipio cmun" nombre="fil_municipio_cmun" size="5" editable="true" visible="true" value=$defaultData_Puertos.fil_municipio_cmun  dataType=$dataType_Puertos.fil_municipio_cmun}</td>
					</tr>
					<tr>
					 	<td>{CWCampoTexto textoAsociado="Num amarres" nombre="fil_num_amarres" size="4" editable="true" visible="true" value=$defaultData_Puertos.fil_num_amarres  dataType=$dataType_Puertos.fil_num_amarres}</td>
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
	{CWPanel id="lis" tipoComprobacion="envio" esMaestro="true" itemSeleccionado=$smty_filaSeleccionada action="operarBD" method="post" estado=$estado_lis claseManejadora="Puertos"}
		{CWBarraSupPanel titulo="Puertos"}
			{CWBotonTooltip imagen="01" iconCSS="glyphicon glyphicon-plus" titulo="Insertar registro" funcion="insertar" actuaSobre="tabla" action="Puertos__nuevo"}
			{CWBotonTooltip imagen="02" iconCSS="glyphicon glyphicon-edit" titulo="Modificar registro" funcion="modificar" actuaSobre="tabla"}
			{CWBotonTooltip imagen="03" iconCSS="glyphicon glyphicon-minus" titulo="Eliminar registro" funcion="eliminar" actuaSobre="tabla"}
			{CWBotonTooltip imagen="04" iconCSS="glyphicon glyphicon-refresh" titulo="Restaurar valores" funcion="limpiar" actuaSobre="tabla"}
		{/CWBarraSupPanel}
		{CWContenedor}
			{CWTabla conCheck="true" conCheckTodos="false" id="Tabla1" numFilasPantalla="6" datos=$smty_datosTablaM}
				{CWFila tipoListado="false"}
					{CWCampoTexto textoAsociado="Cpuerto" nombre="lis_cpuerto" size="5" editable="false" visible="true" value=$defaultData_Puertos.cpuerto  dataType=$dataType_Puertos.cpuerto}
					{CWCampoTexto textoAsociado="Dpuerto" nombre="lis_dpuerto" size="30" editable="false" visible="true" value=$defaultData_Puertos.lis_dpuerto  dataType=$dataType_Puertos.lis_dpuerto}
					{CWCampoTexto textoAsociado="Direccion" nombre="lis_direccion" size="50" editable="false" visible="true" value=$defaultData_Puertos.lis_direccion  dataType=$dataType_Puertos.lis_direccion}
					{CWCampoTexto textoAsociado="Telefono" nombre="lis_telefono" size="20" editable="false" visible="true" value=$defaultData_Puertos.lis_telefono  dataType=$dataType_Puertos.lis_telefono}
					{CWCampoTexto textoAsociado="Municipio cmun" nombre="lis_municipio_cmun" size="5" editable="false" visible="true" value=$defaultData_Puertos.lis_municipio_cmun  dataType=$dataType_Puertos.lis_municipio_cmun}
					{CWCampoTexto textoAsociado="Num amarres" nombre="lis_num_amarres" size="4" editable="false" visible="true" value=$defaultData_Puertos.lis_num_amarres  dataType=$dataType_Puertos.lis_num_amarres}
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
	{CWPanel id="lisDetalle" detalleDe="lis" tipoComprobacion="envio" action="operarBD" method="post" estado="on" claseManejadora="Amarres"}
		{CWBarraSupPanel titulo="Amarres"}
			{CWBotonTooltip imagen="01" iconCSS="glyphicon glyphicon-plus" titulo="Insertar registros" funcion="insertar" actuaSobre="tabla"}
			{CWBotonTooltip imagen="02" iconCSS="glyphicon glyphicon-edit" titulo="Modificar registros" funcion="modificar" actuaSobre="tabla"}
			{CWBotonTooltip imagen="03" iconCSS="glyphicon glyphicon-minus" titulo="Eliminar registros" funcion="eliminar" actuaSobre="tabla"}
		{/CWBarraSupPanel}
		{CWContenedor}			
			{CWTabla conCheck="true" id="TablaDetalle" numFilasPantalla="6" datos=$smty_datosTablaD}
				{CWFila tipoListado="false"}
					{CWCampoTexto textoAsociado="Idamarre" nombre="lis_idamarre" size="4" editable="true" value=$defaultData_Amarres.lis_idamarre dataType=$dataType_Amarres.lis_idamarre}
					{CWCampoTexto textoAsociado="Nombre" nombre="lis_nombre" size="6" editable="true" value=$defaultData_Amarres.lis_nombre dataType=$dataType_Amarres.lis_nombre}
					{CWLista textoAsociado="Anchura" actualizaA="lis_anchura" nombre="lis_anchura" size="10" editable="true" visible="true" value=$defaultData_Amarres.lis_anchura dataType=$dataType_Amarres.lis_anchura}					
					{CWLista textoAsociado="Estado" nombre="lis_estado" size="30" editable="true" visible="true" value=$defaultData_Amarres.lis_estado dataType=$dataType_Amarres.lis_estado actualizaA="lis_estado"}					
					{CWCampoTexto textoAsociado="Puerto cpuerto" nombre="lis_puerto_cpuerto" size="5" editable="true" value=$defaultData_Amarres.puerto_cpuerto dataType=$dataType_Amarres.puerto_cpuerto}
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