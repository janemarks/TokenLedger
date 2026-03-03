<?php
/**
 * Tests for TokenLedger
 */

use PHPUnit\Framework\TestCase;
use Tokenledger\Tokenledger;

class TokenledgerTest extends TestCase {
    private Tokenledger $instance;

    protected function setUp(): void {
        $this->instance = new Tokenledger(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Tokenledger::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
