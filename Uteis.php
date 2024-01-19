<?php

class Uteis{
    static function antiinject($var,$quotes=ENT_NOQUOTES,$keeptags=false){
		if(!is_array($var)){
			$var = stripslashes($var);
			$var = html_entity_decode($var,$quotes,'utf-8');
			if(!$keeptags) {
				$var = strip_tags($var);
			}
			$var = trim($var);
			//$var = utf8_decode($var);
			/**/
			$var = htmlentities($var,$quotes);
			if($keeptags) {
				$var = str_replace('&lt;','<',$var);
				$var = str_replace('&gt;','>',$var);
			}			
			/**/
			$var = addslashes($var);
		} else {
			foreach($var as $k=>$ar){
				$var[$k] = self::antiinject($ar);
			}
		}	
		return $var;        
    }
}