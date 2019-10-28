<?php

/* PHP System Class
*
* 	GM5
* 	24/03/2014
*	Author: Alexandre Mattos Torrão
*
*/

error_reporting(E_ALL);

/**
*OBJETO SYSTEM
*@author Alexandre Mattos
*/
class System
{

	/**	
	*VERIFICA PÁGINA ATUAL
	*@method page()
	*@param $page string pagina
	*@return retorna se a pagina é igual a comparada
	*/
    public static function page( $page ){
		$pg = str_replace(".php", "", end(explode("/", $_SERVER['PHP_SELF'])) );
		if ( $pg == $page){return true;}else{return false;}
	}

	/**	
	*RETORNA PÁGINA ATUAL
	*@method getPageName()
	*@return retorna nome da pagina atual
	*/
    public static function getPageName(){
		$pg = str_replace(".php", "", end(explode("/", $_SERVER['PHP_SELF'])) );
		print $pg;
	}

}
?>