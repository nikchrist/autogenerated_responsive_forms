<?php
function is_assoc($params){
	foreach(array_keys($params) as $key){
		if(!is_int($key)){
			 return true;
		 }
	    else {
			 return false;
	    }
	}
			
}
?>