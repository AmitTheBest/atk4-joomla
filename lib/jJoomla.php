<?php
class jJoomla extends jUI {
	public $jui='jQuery_JoomlaChain';

	function init(){
		parent::init();

		$this->addStaticStylesheet('jquery-ui');
		$this->addStaticStylesheet('atk-main');
		$this->addStaticStylesheet('atk-custom');
	}

    function addStaticInclude($file,$ext='.js'){
        if(substr($file,0,4)!='http'){
            $url=$this->api->locateURL('js',$file.$ext);
        }else $url=$file;

        $document = &JFactory::getDocument();
        $document->addScript( $url );
	}

    function addStaticStylesheet($file,$ext='.css',$locate='css'){
        if(substr($file,0,4)!='http'){
        	$url=$this->api->locateURL($locate,$file.$ext);
        }else $url=$file;

        $document = &JFactory::getDocument();
        $document->addStyleSheet( $url );

    }
}