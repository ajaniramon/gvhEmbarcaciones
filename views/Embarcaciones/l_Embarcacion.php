<?php
if (IgepSession::existeVariable("Embarcacion","lanzarInforme"))
{
	$informeJ = & IgepSession::dameVariable("Embarcacion","lanzarInforme");
	$informeJ->createResultFile('pdf');
}
IgepSession::borraVariable("Embarcacion","lanzarInforme");

?>