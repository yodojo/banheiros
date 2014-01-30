<?php namespace App;

class Banheiros{
	private $mictorios = array();

	public function __construct( $mictorios = array() ){
		if(!empty($mictorios)){
			$this->mictorios = $mictorios;
		}else{
			$this->mictorios = array(0);
		}
	}

	public function getMictorios()
	{
		return $this->mictorios;
	}
	public function setMictorios($mictorios)
	{
		return $this->mictorios = $mictorios;
	}

	public function ondeMijar()
	{
		$result = array();
		$mictoriosOcupados = array_filter(
			$this->mictorios, 
			function ($var){
			    return($var & 1);
			});
		$mictoriosVazios = array_filter(
			$this->mictorios, 
			function ($var){
			    return(!($var & 1));
			});
		$size = sizeof($mictoriosVazios);
		foreach ($mictoriosVazios as $key => $value) {
			if( !array_key_exists(($key-1), $mictoriosOcupados) 
				&& !array_key_exists(($key+1), $mictoriosOcupados) ){
				$result[] = $key;
			}
		}

		return empty($result) ? null : $result;
	}

}