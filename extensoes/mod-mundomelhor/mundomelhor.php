<?php
/**
* @version $Id:  mod_pensamentos.php, V1.0.0  2009-01-01 $
* @module Joomla
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
*
* Adaptado do módulo vivi_code do Serra Antonio (tonio@vivigrosseto.it)
* http://www.vivigrosseto.it/ 
*/

// no direct access
defined('_JEXEC') or die('Restricted access');
use Joomla\CMS\Uri\Uri;

class palavras
{
	function palavra_aleatoria(){
		$f_contents = file ('modules/mod_mundomelhor/mundomelhor.txt');
		srand ((double)microtime()*1000000);
		$linha_aleatoria = $f_contents[ rand (0, (count ($f_contents) - 1)) ];
		return $linha_aleatoria;
	}
}
$aleatoria = new palavras();
print '<div id="palavras">'.$aleatoria->palavra_aleatoria().'</div></ br>';
?>
