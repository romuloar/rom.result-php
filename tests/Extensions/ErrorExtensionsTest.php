<?php
// tests/Extensions/ErrorExtensionsTest.php
use PHPUnit\Framework\TestCase;
use Rom\Result\Extensions\ErrorExtensions;
use Rom\Result\Domain\ResultType;

class ErrorExtensionsTest extends TestCase
{
    public function testGetResultDetailError()
    {
        $result = ErrorExtensions::getResultDetailError('Error!', ['foo' => 'bar'], ['code' => 123]);
        $this->assertEquals(ResultType::Error, $result->type);
        $this->assertEquals('Error!', $result->message);
        $this->assertEquals(['foo' => 'bar'], $result->data);
        $this->assertEquals(['code' => 123], $result->errors);
    }
    public function testGetResultDetailErrorWithData()
    {
        $result = ErrorExtensions::getResultDetailErrorWithData('Error with data', ['foo' => 'bar']);
        $this->assertEquals(ResultType::Error, $result->type);
        $this->assertEquals('Error with data', $result->message);
        $this->assertEquals(['foo' => 'bar'], $result->data);
    }
    public function testGetResultDetailErrorMessage()
    {
        $result = ErrorExtensions::getResultDetailErrorMessage('Only message');
        $this->assertEquals(ResultType::Error, $result->type);
        $this->assertEquals('Only message', $result->message);
    }
    public function testGetResultDetailErrorWithDataOnly()
    {
        $result = ErrorExtensions::getResultDetailErrorWithDataOnly(['foo' => 'bar']);
        $this->assertEquals(ResultType::Error, $result->type);
        $this->assertEquals('', $result->message);
        $this->assertEquals(['foo' => 'bar'], $result->data);
    }
    public function testGetResultDetailErrorAsync()
    {
        $closure = ErrorExtensions::getResultDetailErrorAsync('Async error', ['foo' => 'bar'], ['code' => 123]);
        $result = $closure();
        $this->assertEquals(ResultType::Error, $result->type);
        $this->assertEquals('Async error', $result->message);
        $this->assertEquals(['foo' => 'bar'], $result->data);
        $this->assertEquals(['code' => 123], $result->errors);
    }
    public function testGetResultDetailErrorWithDataAsync()
    {
        $closure = ErrorExtensions::getResultDetailErrorWithDataAsync('Async error with data', ['foo' => 'bar']);
        $result = $closure();
        $this->assertEquals(ResultType::Error, $result->type);
        $this->assertEquals('Async error with data', $result->message);
        $this->assertEquals(['foo' => 'bar'], $result->data);
    }
    public function testGetResultDetailErrorMessageAsync()
    {
        $closure = ErrorExtensions::getResultDetailErrorMessageAsync('Async only message');
        $result = $closure();
        $this->assertEquals(ResultType::Error, $result->type);
        $this->assertEquals('Async only message', $result->message);
    }
    public function testGetResultDetailErrorWithDataOnlyAsync()
    {
        $closure = ErrorExtensions::getResultDetailErrorWithDataOnlyAsync(['foo' => 'bar']);
        $result = $closure();
        $this->assertEquals(ResultType::Error, $result->type);
        $this->assertEquals('', $result->message);
        $this->assertEquals(['foo' => 'bar'], $result->data);
    }
}
