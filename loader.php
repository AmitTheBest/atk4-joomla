<?php
/*
 This is a default loader for your Joomla componetns which use Agile Toolkit. 
 http://agiletoolkit.org/a/joomla
 */

$ds=DIRECTORY_SEPARATOR;
$ps=PATH_SEPARATOR;

$pathx=
	JPATH_COMPONENT_ADMINISTRATOR.$ps.
	JPATH_COMPONENT_ADMINISTRATOR.$ds.'atk4-joomla'.$ds.'lib'.$ps. /* Note 1 */
	JPATH_COMPONENT_ADMINISTRATOR.$ds.'atk4'.$ds.'lib'.$ps.
	JPATH_COMPONENT_ADMINISTRATOR.$ds.'lib'.$ps. /* Preferance will be given to admin side always then front end side*/
	/* @TODO@ -- Get side and only correct path will be searched for better performance.*/
	JPATH_COMPONENT.$ps.
	JPATH_COMPONENT.$ds.'atk4-joomla'.$ds.'lib'.$ps. /* Note 1 */
	JPATH_COMPONENT.$ds.'atk4'.$ds.'lib'.$ps.
	JPATH_COMPONENT.$ds.'lib'.$ps.
	dirname(__FILE__).'/lib';

set_include_path($pathx);

include('static.php');
spl_autoload_register("__xagileautoload");
/* 
Note 1: 
Added so all changes to joomla related will be here making atk4 unchanged and updatable from main stream, for joomla no need will be there to manage another seperate repo*/

