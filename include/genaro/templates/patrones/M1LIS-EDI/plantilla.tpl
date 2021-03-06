<!--*********** <<$classname_detalle|capitalize>> ******************-->	
{if $smty_panelActivo eq "<<$classname_detalle|capitalize>>" }
<!--*********** PANEL lis ******************-->	
	{CWPanel id="lisDetalle" action="borrar" method="post" detalleDe="<<$tipoMaestro>>" estado="$estado_lisDetalle" claseManejadora="<<$classname_detalle|capitalize>>"}
		{CWBarraSupPanel titulo="<<$classname_detalle|capitalize>>"}
			{CWBotonTooltip imagen="01" iconCSS="glyphicon glyphicon-plus" iconCSS="glyphicon glyphicon-plus" titulo="Insertar registros" funcion="insertar" actuaSobre="ficha"  action="<<$classname_detalle|capitalize>>__nuevo"}
			{CWBotonTooltip imagen="02" iconCSS="glyphicon glyphicon-edit" titulo="Modificar registros" funcion="modificar" actuaSobre="ficha" action="<<$classname_detalle|capitalize>>__editar"}
			{CWBotonTooltip imagen="03" iconCSS="glyphicon glyphicon-minus" titulo="Eliminar registros" funcion="eliminar" actuaSobre="tabla"}			
		{/CWBarraSupPanel}			
		{CWContenedor}
			{CWTabla conCheckTodos="true" conCheck="true" id="TablaDetalle" numFilasPantalla="6" datos=$smty_datosTabla<<$classname_detalle|capitalize>>}
				{CWFila tipoListado="false"}				
<<section name=lis loop=$fields_detalle>>
<<assign var='campo' value=$fields_detalle[lis]>>
<<assign var='defVal' value=$customFields.$campo.defVal>>
<<assign var='componente' value=$customFields.$campo.componente>>
<<assign var='titVal' value=$customFields.$campo.titVal>>
<<assign var='tamVal' value=$customFields.$campo.tamVal>>
<<assign var='visibleVal' value=$customFields.$campo.visibleVal>>
<<if $componente eq 0 >>
					{CWCampoTexto textoAsociado=<<if $titVal eq "" >>"<<$titles_detalle[lis]>>"<<else>>"<<$titVal>>"<</if>> nombre="<<if $foreignKey_detalle[lis] eq "true">><<$fields_detalle[lis]>><<else>>lis_<<$fields_detalle[lis]>><</if>>" size="<<if $tamVal eq "" >><<$lengths_detalle[lis]|floor>><<else>><<$tamVal>><</if>>" editable="true" visible=<<if $visibleVal eq "1" >>"false"<<else>>"true"<</if>> value=<<if $defVal neq ''>>"<<$defVal>>"<<else>>$defaultData_<<$classname_detalle|capitalize>>.<<if $foreignKey_detalle[lis] eq "true">><<$fields_detalle[lis]>><<else>>lis_<<$fields_detalle[lis]>><</if>><</if>> dataType=$dataType_<<$classname_detalle|capitalize>>.<<if $foreignKey_detalle[lis] eq "true">><<$fields_detalle[lis]>><<else>>lis_<<$fields_detalle[lis]>><</if>>}
<<elseif $componente eq 1 >>
					{CWAreaTexto textoAsociado=<<if $titVal eq "" >>"<<$titles_detalle[lis]>>"<<else>>"<<$titVal>>"<</if>> nombre="<<if $foreignKey_detalle[lis] eq "true">><<$fields_detalle[lis]>><<else>>lis_<<$fields_detalle[lis]>><</if>>" rows="3" cols="<<$lengths_detalle[lis]|floor>>" editable="true" visible=<<if $visibleVal eq "1" >>"false"<<else>>"true"<</if>> value=<<if $defVal neq ''>>"<<$defVal>>"<<else>>$defaultData_<<$classname_detalle|capitalize>>.<<if $foreignKey_detalle[lis] eq "true">><<$fields_detalle[lis]>><<else>>lis_<<$fields_detalle[lis]>><</if>><</if>> dataType=$dataType_<<$classname_detalle|capitalize>>.<<if $foreignKey_detalle[lis] eq "true">><<$fields_detalle[lis]>><<else>>lis_<<$fields_detalle[lis]>><</if>>}
<<elseif $componente eq 2 >>
					{CWCheckBox textoAsociado=<<if $titVal eq "" >>"<<$titles_detalle[lis]>>"<<else>>"<<$titVal>>"<</if>> nombre="<<if $foreignKey_detalle[lis] eq "true">><<$fields_detalle[lis]>><<else>>lis_<<$fields_detalle[lis]>><</if>>" size="<<$lengths_detalle[lis]|ceil>>" editable="true" visible=<<if $visibleVal eq "1" >>"false"<<else>>"true"<</if>> value=<<if $defVal neq ''>>"<<$defVal>>"<<else>>$defaultData_<<$classname_detalle|capitalize>>.<<if $foreignKey_detalle[lis] eq "true">><<$fields_detalle[lis]>><<else>>lis_<<$fields_detalle[lis]>><</if>><</if>> dataType=$dataType_<<$classname_detalle|capitalize>>.<<if $foreignKey_detalle[lis] eq "true">><<$fields_detalle[lis]>><<else>>lis_<<$fields_detalle[lis]>><</if>>}
<<elseif $componente eq 3 >>
					{CWLista textoAsociado=<<if $titVal eq "" >>"<<$titles_detalle[lis]>>"<<else>>"<<$titVal>>"<</if>> nombre="<<if $foreignKey_detalle[lis] eq "true">><<$fields_detalle[lis]>><<else>>lis_<<$fields_detalle[lis]>><</if>>" size="<<$lengths_detalle[lis]|ceil>>" editable="true" visible=<<if $visibleVal eq "0" >>"false"<<else>>"true"<</if>> value=<<if $defVal neq ''>>"<<$defVal>>"<<else>>$defaultData_<<$classname_detalle|capitalize>>.<<if $foreignKey_detalle[lis] eq "true">><<$fields_detalle[lis]>><<else>>lis_<<$fields_detalle[lis]>><</if>><</if>> dataType=$dataType_<<$classname_detalle|capitalize>>.<<if $foreignKey_detalle[lis] eq "true">><<$fields_detalle[lis]>><<else>>lis_<<$fields_detalle[lis]>><</if>>}
<<else>>
					{CWLista textoAsociado=<<if $titVal eq "" >>"<<$titles_detalle[lis]>>"<<else>>"<<$titVal>>"<</if>> nombre="<<if $foreignKey_detalle[lis] eq "true">><<$fields_detalle[lis]>><<else>>lis_<<$fields_detalle[lis]>><</if>>" size="<<$lengths_detalle[lis]|ceil>>" editable="true" visible=<<if $visibleVal eq "0" >>"false"<<else>>"true"<</if>> value=<<if $defVal neq ''>>"<<$defVal>>"<<else>>$defaultData_<<$classname_detalle|capitalize>>.<<if $foreignKey_detalle[lis] eq "true">><<$fields_detalle[lis]>><<else>>lis_<<$fields_detalle[lis]>><</if>><</if>> dataType=$dataType_<<$classname_detalle|capitalize>>.<<if $foreignKey_detalle[lis] eq "true">><<$fields_detalle[lis]>><<else>>lis_<<$fields_detalle[lis]>><</if>>}
<</if>>
<</section>>
				{/CWFila}				
				{CWPaginador enlacesVisibles="3" iconCSS="true"}
			{/CWTabla}			
		{/CWContenedor}
		{CWBarraInfPanel}
			{CWBoton imagen="41" iconCSS="glyphicon glyphicon-ok"  texto="Guardar" class="button" accion="guardar"}&nbsp;&nbsp;
			{CWBoton imagen="42" iconCSS="glyphicon glyphicon-remove" texto="Cancelar" class="button" accion="cancelar"}
		{/CWBarraInfPanel}						
	{/CWPanel}	
<!--*********** PANEL edi ******************-->																													
	{CWPanel id="ediDetalle" tipoComprobacion="envio" action=$smty_operacion<<$classname_detalle|capitalize>> method="post" detalleDe="<<$tipoMaestro>>" estado="$estado_ediDetalle" claseManejadora="<<$classname_detalle|capitalize>>" accion=$smty_operacionFicha<<$classname_detalle|capitalize>>}
		{CWBarraSupPanel titulo="<<$classname_detalle|capitalize>>"}
			{CWBotonTooltip imagen="04" iconCSS="glyphicon glyphicon-refresh" titulo="Limpiar campos" funcion="limpiar" actuaSobre="ficha"}
		{/CWBarraSupPanel}		
		{CWContenedor}			 		
			{CWFichaEdicion  id="FichaDetalle" datos=$smty_datosFicha<<$classname_detalle|capitalize>>}	
				{CWFicha}
					<table class="text" cellspacing="4" cellpadding="4" border="0">
<<section name=edi loop=$fields_detalle>>
					<tr>
<<assign var='campo' value=$fields_detalle[edi]>>
<<assign var='defVal' value=$customFields.$campo.defVal>>
<<assign var='componente' value=$customFields.$campo.componente>>
<<assign var='titVal' value=$customFields.$campo.titVal>>
<<assign var='tamVal' value=$customFields.$campo.tamVal>>
<<assign var='visibleVal' value=$customFields.$campo.visibleVal>>
<<if $componente eq 0 >>
					 	<td>{CWCampoTexto textoAsociado=<<if $titVal eq "" >>"<<$titles_detalle[edi]>>"<<else>>"<<$titVal>>"<</if>> nombre="<<if $foreignKey_detalle[edi] eq "true">><<$fields_detalle[edi]>><<else>>edi_<<$fields_detalle[edi]>><</if>>" size="<<if $tamVal eq "" >><<$lengths[fil]|floor>><<else>><<$tamVal>><</if>>" editable="true" visible=<<if $visibleVal eq "1" >>"false"<<else>>"true"<</if>> value=<<if $defVal neq ''>>"<<$defVal>>"<<else>>$defaultData_<<$classname|capitalize>>.edi_<<$fields[edi]>><</if>> dataType=$dataType_<<$classname_detalle|capitalize>>.<<if $foreignKey_detalle[edi] eq "true">><<$fields_detalle[edi]>><<else>>edi_<<$fields_detalle[edi]>><</if>>}</td>
<<elseif $componente eq 1 >>
						<td>{CWAreaTexto textoAsociado=<<if $titVal eq "" >>"<<$titles_detalle[edi]>>"<<else>>"<<$titVal>>"<</if>> nombre="<<if $foreignKey_detalle[edi] eq "true">><<$fields_detalle[edi]>><<else>>edi_<<$fields_detalle[edi]>><</if>>" rows="3" cols="<<$lengths[fil]|floor>>" editable="true" visible=<<if $visibleVal eq "1" >>"false"<<else>>"true"<</if>> value=<<if $defVal neq ''>>"<<$defVal>>"<<else>>$defaultData_<<$classname|capitalize>>.edi_<<$fields[edi]>><</if>> dataType=$dataType_<<$classname_detalle|capitalize>>.<<if $foreignKey_detalle[edi] eq "true">><<$fields_detalle[edi]>><<else>>edi_<<$fields_detalle[edi]>><</if>>}</td>
<<elseif $componente eq 2 >>
					    <td>{CWCheckBox textoAsociado=<<if $titVal eq "" >>"<<$titles_detalle[edi]>>"<<else>>"<<$titVal>>"<</if>> nombre="<<if $foreignKey_detalle[edi] eq "true">><<$fields_detalle[edi]>><<else>>edi_<<$fields_detalle[edi]>><</if>>" size="<<$lengths_detalle[edi]|ceil>>" editable="true" visible=<<if $visibleVal eq "1" >>"false"<<else>>"true"<</if>> value=<<if $defVal neq ''>>"<<$defVal>>"<<else>>$defaultData_<<$classname|capitalize>>.edi_<<$fields[edi]>><</if>> dataType=$dataType_<<$classname_detalle|capitalize>>.<<if $foreignKey_detalle[edi] eq "true">><<$fields_detalle[edi]>><<else>>edi_<<$fields_detalle[edi]>><</if>>}</td>
<<elseif $componente eq 3 >>
					 	<td>{CWLista textoAsociado=<<if $titVal eq "" >>"<<$titles_detalle[edi]>>"<<else>>"<<$titVal>>"<</if>> nombre="<<if $foreignKey_detalle[edi] eq "true">><<$fields_detalle[edi]>><<else>>edi_<<$fields_detalle[edi]>><</if>>" size="<<$lengths_detalle[edi]|ceil>>" editable="true" visible=<<if $visibleVal eq "0" >>"false"<<else>>"true"<</if>> value=<<if $defVal neq ''>>"<<$defVal>>"<<else>>$defaultData_<<$classname|capitalize>>.edi_<<$fields[edi]>><</if>> dataType=$dataType_<<$classname_detalle|capitalize>>.<<if $foreignKey_detalle[edi] eq "true">><<$fields_detalle[edi]>><<else>>edi_<<$fields_detalle[edi]>><</if>>}</td>
<<else>>
						<td>{CWCampoTexto textoAsociado=<<if $titVal eq "" >>"<<$titles_detalle[edi]>>"<<else>>"<<$titVal>>"<</if>> nombre="<<if $foreignKey_detalle[edi] eq "true">><<$fields_detalle[edi]>><<else>>edi_<<$fields_detalle[edi]>><</if>>" size="<<if $tamVal eq "" >><<$lengths[fil]|floor>><<else>><<$tamVal>><</if>>" editable="true" visible=<<if $visibleVal eq "1" >>"false"<<else>>"true"<</if>> value=<<if $defVal neq ''>>"<<$defVal>>"<<else>>$defaultData_<<$classname|capitalize>>.edi_<<$fields[edi]>><</if>> dataType=$dataType_<<$classname_detalle|capitalize>>.<<if $foreignKey_detalle[edi] eq "true">><<$fields_detalle[edi]>><<else>>edi_<<$fields_detalle[edi]>><</if>>}</td>
<</if>>
					</tr>
<</section>>
					</table>
				{/CWFicha}
				{CWPaginador enlacesVisibles="3" iconCSS="true"}
			{/CWFichaEdicion}	
		{/CWContenedor}
		{CWBarraInfPanel}
			{CWBoton imagen="41" iconCSS="glyphicon glyphicon-ok" texto="Guardar" class="button" accion="guardar"}
			{CWBoton imagen="42" iconCSS="glyphicon glyphicon-remove" texto="Cancelar" class="button" accion="cancelar" action="cancelarEdicion"}
		{/CWBarraInfPanel}
	{/CWPanel}
		
	<!-- ****************** PESTANYAS DETALLE ************************-->	
	{CWContenedorPestanyas id="Detalle"}
		{CWPestanya tipo="lis" panelAsociado="lisDetalle" estado="$estado_lisDetalle"}
		{CWPestanya tipo="edi" panelAsociado="ediDetalle" estado="$estado_ediDetalle"}
	{/CWContenedorPestanyas}
	{/if}
	