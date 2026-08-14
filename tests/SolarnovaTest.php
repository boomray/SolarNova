<?php
/**
 * Tests for SolarNova
 */

use PHPUnit\Framework\TestCase;
use Solarnova\Solarnova;

class SolarnovaTest extends TestCase {
    private Solarnova $instance;

    protected function setUp(): void {
        $this->instance = new Solarnova(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Solarnova::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
