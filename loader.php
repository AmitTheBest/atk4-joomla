<?php
/*
 This is a default loader for your Joomla componetns which use Agile Toolkit. 
 http://agiletoolkit.org/a/joomla
 */

$ds=DIRECTORY_SEPARATOR;
$ps=PATH_SEPARATOR;

$pathx=
	JPATH_COMPONENT_ADMINISTRATOR.$ps.
	JPATH_COMPONENT_ADMINISTRATOR.$ds.'atk4'.$ds.'lib'.$ps.
	JPATH_COMPONENT_ADMINISTRATOR.$ds.'lib'.$ps.
	dirname(__FILE__).'/lib';

set_include_path($pathx);

include('static.php');
