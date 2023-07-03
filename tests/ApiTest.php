<?php

use PHPUnit\Framework\TestCase;
use SorenmesselierSentis\InfernalDependance\Api;

class ApiTest extends TestCase
{
    public function testGetName()
    {
        $api = new Api();
        $this->assertIsString($api->getName("Lillith"));
    }
}