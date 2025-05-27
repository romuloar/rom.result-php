<?php
// tests/Extensions/SuccessExtensionsTest.php
use PHPUnit\Framework\TestCase;
use Rom\Result\Extensions\SuccessExtensions;
use Rom\Result\Domain\ResultType;

class SuccessExtensionsTest extends TestCase
{
    public function testGetResultDetailSuccess()
    {
        $result = SuccessExtensions::getResultDetailSuccess('Success!', ['foo' => 'bar']);
        $this->assertEquals(ResultType::Success, $result->type);
        $this->assertEquals('Success!', $result->message);
        $this->assertEquals(['foo' => 'bar'], $result->data);
    }
    public function testGetResultDetailSuccessMessage()
    {
        $result = SuccessExtensions::getResultDetailSuccessMessage('Only success message');
        $this->assertEquals(ResultType::Success, $result->type);
        $this->assertEquals('Only success message', $result->message);
    }
    public function testGetResultDetailSuccessWithData()
    {
        $result = SuccessExtensions::getResultDetailSuccessWithData(['foo' => 'bar']);
        $this->assertEquals(ResultType::Success, $result->type);
        $this->assertEquals('', $result->message);
        $this->assertEquals(['foo' => 'bar'], $result->data);
    }
    public function testGetResultDetailSuccessAsync()
    {
        $closure = SuccessExtensions::getResultDetailSuccessAsync('Async success', ['foo' => 'bar']);
        $result = $closure();
        $this->assertEquals(ResultType::Success, $result->type);
        $this->assertEquals('Async success', $result->message);
        $this->assertEquals(['foo' => 'bar'], $result->data);
    }
    public function testGetResultDetailSuccessMessageAsync()
    {
        $closure = SuccessExtensions::getResultDetailSuccessMessageAsync('Async only message');
        $result = $closure();
        $this->assertEquals(ResultType::Success, $result->type);
        $this->assertEquals('Async only message', $result->message);
    }
    public function testGetResultDetailSuccessWithDataAsync()
    {
        $closure = SuccessExtensions::getResultDetailSuccessWithDataAsync(['foo' => 'bar']);
        $result = $closure();
        $this->assertEquals(ResultType::Success, $result->type);
        $this->assertEquals('', $result->message);
        $this->assertEquals(['foo' => 'bar'], $result->data);
    }
}
