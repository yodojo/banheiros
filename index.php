<?PHP

	const NUM = 5;
	#$var = array();
	$var = array(1,1,0,0,0);
	print_r($var);
	echo "<br />";
	$pos = "";
	for($i = 0; $i < sizeof($var); $i++)
	{
		if($var[$i] == 0)
		{
			if($i == 0){
				if($var[$i+1] == 0){
					echo 'Utilize a posicao '.$i.'<br />';
					#$var[$i] = 1;
				}
			}else{
				if($i == NUM){
					if($var[$i-1] == 0){
						echo 'Utilize a posição '.$i.'<br />';
					}						
				}else{
					if($var[$i-1] == 0 && $var[$i+1] == 0 && $var[$i]==0){	
						echo 'Utilize a posição nº '.$i.'<br />';
					}else{
						echo 'Você não deve usar aqui.<br />';
					}
				}
		    }
		}
	}

?>