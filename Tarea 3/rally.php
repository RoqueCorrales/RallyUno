<?php  
$array = [1, 2, "Second", "Third", true, "Third", false, "Roque", "Josue", "Kevin"];
foreach ($array as $key) {
	if(is_string($key)){
		 echo "$key\n";
	}

}

?>