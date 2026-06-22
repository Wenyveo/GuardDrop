<?php
/**
 * Tests for GuardDrop
 */

use PHPUnit\Framework\TestCase;
use Guarddrop\Guarddrop;

class GuarddropTest extends TestCase {
    private Guarddrop $instance;

    protected function setUp(): void {
        $this->instance = new Guarddrop(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Guarddrop::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
