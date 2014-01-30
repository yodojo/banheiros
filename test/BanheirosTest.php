<?php

use App\Banheiros;

class BanheirosTest extends PHPUnit_Framework_TestCase{

	public function setUp()
	{
		$this->banheiros = new Banheiros;
	}
	public function inputMictorios()
	{
		return [
			[[0,0,0,1,1,0], [0,1]],
			[[0,0,0,1,1,0,0,0,0,1,1,0], [0,1,6,7]],
			[[1,0,0,1,1,], null],
			[[0,0,1,1,0,0,1,1,0], [0]],
			[[1,1,0,0,0,0,1], [3,4]],
			[[0,0,1,0,0,0,0,1], [0,4,5]],
			[[0], [0]],
			[[1], null],
			[[0,0], [0,1]],
			[[1,1], null],
			[[0,1,0,1,0,0], [5]]
		];
	}

	/**
	 * @dataProvider inputMictorios
	 */
	public function testOndeMijar( $entrada, $saida)
	{
		$this->assertNotEmpty($entrada);
		$this->banheiros->setMictorios($entrada);
		$this->assertEquals( $saida, $this->banheiros->ondeMijar() );	
	}
}