<?php
/*
 This is a default loader for your Joomla componetns which use Agile Toolkit. 
 */
 /*
include_once dirname(__FILE__).'/../atk4/loader.php';
include_once dirname(__FILE__).'/../atk4/lib/AbstractObject.php';
include_once dirname(__FILE__).'/../atk4/lib/AbstractView.php';
include_once dirname(__FILE__).'/../atk4/lib/ApiCLI.php';
include_once dirname(__FILE__).'/../atk4/lib/ApiWeb.php';
include_once dirname(__FILE__).'/lib/ApiJoomla.php';
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
