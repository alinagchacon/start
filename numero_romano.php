<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title></title>
</head>
<body>

<?php
//notacion heredoc

$imprimir= <<<HERE
<form method="get" action="">
Dame un numero y te diré su equivalente en numeración  árabe: <input type="text" maxlength="4" size="4" name="arabes" />
<br />
<input type="submit" name="ok" value="Calcula!" />
</form>
HERE;
print $imprimir;

if (isset($_GET["ok"])  ){

	$arabes=$_GET["arabes"];
	
	  if (is_numeric($arabes) && $arabes>0 and $arabes<5000){
					
			conversor($arabes);//llamo al procedimiento
			
	   }
	   else{
			echo "Error en el n&uacute;mero introducido";
	  }
	
	
}
	
	
	
	
function conversor($arabes){
			$conversor=array("M"=>1000, "D"=>500, "C"=>100,"L"=>50, "X"=>10, "V"=>5, "I"=>1 );
			
			foreach ($conversor as $key => $value){
				while ($arabes >= $value){
					echo $key;
					$arabes=$arabes - $value;//4832, 3832, 2832, 1832, 832, 382, 282, 182, 82, 32, 22, 12, 2, 
				}

			}
}


?>


</body>
</html>
