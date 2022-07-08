<?php

function Rectangle($c,$r ){
for($i =1; $i <= $r; $i++){
	
	for($j = 1; $j <= $c; $j++)
		if($i ==1 || $i == $r || $j ==1 || $j == $c)
			echo "* ";
			
		else 
			echo " ";
}

echo "\n";
}
Rectangle(7,9);
?>