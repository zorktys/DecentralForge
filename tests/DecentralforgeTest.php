<?php
/**
 * Tests for DecentralForge
 */

use PHPUnit\Framework\TestCase;
use Decentralforge\Decentralforge;

class DecentralforgeTest extends TestCase {
    private Decentralforge $instance;

    protected function setUp(): void {
        $this->instance = new Decentralforge(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Decentralforge::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
