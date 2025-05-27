<?php
// tests/Factories/ResultDetailFactoryTest.php
use PHPUnit\Framework\TestCase;
use Rom\Result\Factories\ResultDetailFactory;
use Rom\Result\Domain\ResultType;

class ResultDetailFactoryTest extends TestCase
{
    public function testCreateResultDetail()
    {
        $result = ResultDetailFactory::create(ResultType::Success, 'ok', ['foo' => 'bar']);
        $this->assertEquals(ResultType::Success, $result->type);
        $this->assertEquals('ok', $result->message);
        $this->assertEquals(['foo' => 'bar'], $result->data);
    }
}
