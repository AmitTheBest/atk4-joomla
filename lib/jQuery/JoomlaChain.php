<?php
class jQuery_JoomlaChain extends jQuery_Chain {
     function reload($arguments=array(),$fn=null,$url=null){
     	// option= should be passed 
     	$arguments = array_merge($arguments,array("format"=>"raw"));
     	return parent::reload($arguments,$fn,$url);
     }
     /* use jQuery compatibility mode */
     function _render(){
     	$r=parent::_render();
     	if($r[0]=='$')$r='jQuery'.substr($r,1);
     	return $r;
     }

}