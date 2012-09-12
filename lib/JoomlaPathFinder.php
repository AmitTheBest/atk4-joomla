<?php
class JoomlaPathFinder extends PathFinder {
	function addDefaultLocations(){
		// Typically base directory is good for includes,
		// but atk4/ can also contain some data

		// Primary search point is the webroot directory. We are defining
		// those so you don't have to
		$base_directory=dirname(@$_SERVER['SCRIPT_FILENAME'])."/components/".JRequest::getVar('option');

		if(!$base_directory)$base_directory=realpath($GLOBALS['argv'][0]);

		if(method_exists($this->api,'addDefaultLocations'))$this->api->addDefaultLocations($this,$base_directory);

		$this->base_location=$this->addLocation('/',array(
					'php'=>'lib',
					'page'=>'page',
                    'addons'=>'atk4-addons',
					'template'=>'templates/'.$this->api->skin,
					'xslt'=>'templates/xslt',
					'mail'=>'templates/mail',
					'js'=>'templates/js',
					'css'=>'templates/css',
					'banners'=>'banners',
					'logs'=>'logs',
					'dbupdates'=>'docs/dbupdates',
					))->setBasePath($base_directory)
			;


		$atkj_directory=dirname(dirname(__FILE__));
		$atkj_url=basename($atk_directory);

		$this->atkj_location=$this->addLocation('atk4-joomla',array(
					'php'=>'lib',
					'template'=>'templates',
					'css'=>'templates/css'
					))
			->setBasePath(dirname(dirname(__FILE__)))
			->setBaseURL($this->api->getConfig('atk/base_component_path','./atk4-joomla/'))
			;





			

		// Files not found in webroot - will be looked for in library dir
		// We are assuming that we are located as atk4/lib/PathFinder.php
		$atk_directory=dirname(dirname(dirname(__FILE__))).'/atk4';
		$atk_url=basename($atk_directory);

		$this->atk_location=$this->addLocation('atk4',array(
					'php'=>'lib',
					// page: for security reasons no pages are allowed
					'docs'=>'',	// files like README, COPYING etc
					'template'=>array('templates/'.$this->api->skin,'templates'=>'templates/shared'),
					'xslt'=>'templates/xslt',
					'mail'=>'templates/mail',
					'js'=>'templates/js',

					// TODO: check that the folowing two are actually being used
					'images'=>'img',
					'css'=>array('templates/js','templates/'.$this->api->skin.'/css','templates/shared/css'),
					))
			->setBasePath($atk_directory)
			->setBaseURL($this->api->getConfig('atk/base_path','./atk4/'))
			;







	}

}