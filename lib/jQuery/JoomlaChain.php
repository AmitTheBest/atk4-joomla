<?php
class jQuery_JoomlaChain extends jQuery_Chain {
     function reload($arguments=array(),$fn=null,$url=null){
     	// option= should be passed 
     	$arguments = array_merge($arguments,array("format"=>"raw"));
     	return parent::reload($arguments,$fn,$url);
     }

}