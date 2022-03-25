<?php

use JacsonSantos\Controllers\BeerController;
use PHPUnit\Framework\TestCase;

class BeerControllerTest extends TestCase
{
    /**
     * @var BeerController
     */
    private $controller;

    protected function setUp()
    {
        $mockStatement = Mockery::mock(\PDOStatement::class);
        $mockStatement
            ->shouldReceive('fetchAll')
            ->once()
            ->with(\PDO::FETCH_ASSOC)
            ->andReturn([]);

        $mockPDO = Mockery::mock(\PDO::class);
        $mockPDO
            ->shouldReceive('query')
            ->once()
            ->andReturn($mockStatement);

        $this->controller = new BeerController($mockPDO);
    }

    public function testListOfBeerIsJsonEmpty()
    {
        $data = $this->controller->getIndex();

        $this->assertEquals('[]', $data);
    }
}