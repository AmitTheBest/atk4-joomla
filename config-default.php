<?php
$component = JRequest::getVar('option');

$config['atk']['base_path']="components/$component/atk4/";
//$config['dsn']='mysql://root:winserver@localhost/bhoomi';

$config['url_postfix']='';
$config['url_prefix']='?option='.$component.'&page=';

# Agile Toolkit attempts to use as many default values for config file,
# and you only need to add them here if you wish to re-define default
# values. For more options look at:
#
#  http://www.atk4.com/doc/config

