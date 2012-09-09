<?php 
/**
 * Contains static functions. Agile Toolkit does not generally use
 * static functions, so please do not use any functions here.
 * 
 * This file have been modified from atk4/lib/static.php to integrate
 * with Joomla component system. See http://agiletoolkit.org/a/joomla
 */

define('undefined','_atk4_undefined_value');

if(!function_exists('lowlevel_error')){
    function lowlevel_error($error,$lev=null){
        /*
         * This function will be called for low level fatal errors
         */
        JFactory::getApplication()
        	->enqueueMessage( JText::_( $error ), 'error' );
    }
};if(!function_exists('loadClass')){
    function loadClass($class){
        if(isset($GLOBALS['atk_pathfinder'])){
            return $GLOBALS['atk_pathfinder']->loadClass($class);
        }
        $file = str_replace('_',DIRECTORY_SEPARATOR,$class).'.php';
        $file = str_replace('\\','/',$file);
        foreach (explode(PATH_SEPARATOR, get_include_path()) as $path){
            $fullpath = $path . DIRECTORY_SEPARATOR . $file;
            if (file_exists($fullpath)) {
                include_once($fullpath);
                return;
            }
        }
        lowlevel_error("Class is not defined and couldn't be loaded: $class. Consult documentation on __autoload()");
        return false;
    }
    function __xagileautoload($class){
        loadClass($class);
        if(class_exists($class) || interface_exists($class))return;
        return JLoader::load($class);
        lowlevel_error("Class $class is not defined in included file");
    }
};if(!function_exists('unix_dirname')){
    function unix_dirname($path){
        $chunks=explode('/',$path);
        array_pop($chunks);
        if(!$chunks)return '/';
        return implode('/',$chunks);
    }
};if(!function_exists('htmlentities_utf8')){
    function htmlentities_utf8($string, $quote_style = ENT_COMPAT, $charset='UTF-8'){
        return htmlentities($string,$quote_style,$charset);
    }
}
