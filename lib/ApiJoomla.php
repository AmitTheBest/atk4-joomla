<?php
/*
	Implements support for Joomla
	http://agiletoolkit.org/a/joomla
*/

class ApiJoomla extends ApiFrontend {

    protected $pathfinder_class='JoomlaPathFinder';




	/* 
		Specify NULL as argument to use default connectivity method. You may
		also specify a custom DSN for connectivity

		Use config.pdo_dsn to override connection string for Aglie Toolkit.

		http://agiletoolkit.org/a/joomla/db
	*/

	function dbConnect($dsn=undefined){
		if($dsn !== undefined)return parent::dbConnect($dsn);

		$conf =& JFactory::getConfig();

		$pdo_dsn 	= $conf->getValue('config.pdo_dsn');
		if($pdo_dsn)return parent::dbConnect($pdo_dsn);


		$host 		= $conf->getValue('config.host');
		$user 		= $conf->getValue('config.user');
		$password 	= $conf->getValue('config.password');
		$database	= $conf->getValue('config.db');
		$prefix 	= $conf->getValue('config.dbprefix');
		$driver 	= "mysql";// $conf->getValue('config.dbtype'); /*Mysqli driver giving problem*/
		$debug 		= $conf->getValue('config.debug');

		$pdo_dsn=array("$driver:host=$host;dbname=$database",
			$user,
			$password);

		return parent::dbConnect($pdo_dsn);

	}

	function add(){
		$args=func_get_args();
		$ret=call_user_func_array(array('parent','add'), $args);

		if($ret instanceof jQuery){
			$ret->chain_class='jQuery_JoomlaChain';
		}

		return $ret;
	}
}