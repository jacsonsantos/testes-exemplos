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
        $this->controller = new BeerController();
    }

    public function testListOfBeerIsEmpty()
    {
        $data = $this->controller->getIndex();

        $this->assertEquals('[]', $data);
    }
}