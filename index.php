<?php
$component=JRequest::getVar('option');
include "components/$component/atk4-joomla/loader.php";
$api=new Frontend('sample_project');
$api->main();
spl_autoload_unregister("__xagileautoload");
// spl_autoload_register("__autoload"); 
/*Joomla 1.5 no more using __autoload function so removed from now*/