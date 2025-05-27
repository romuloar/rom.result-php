<?php
// tests/Extensions/WarningExtensionsTest.php
use PHPUnit\Framework\TestCase;
use Rom\Result\Extensions\WarningExtensions;
use Rom\Result\Domain\ResultType;

class WarningExtensionsTest extends TestCase
{
    public function testGetResultDetailWarning()
    {
        $result = WarningExtensions::getResultDetailWarning('Warning!', ['foo' => 'bar']);
        $this->assertEquals(ResultType::Warning, $result->type);
        $this->assertEquals('Warning!', $result->message);
        $this->assertEquals(['foo' => 'bar'], $result->data);
    }
    public function testGetResultDetailWarningMessage()
    {
        $result = WarningExtensions::getResultDetailWarningMessage('Only warning message');
        $this->assertEquals(ResultType::Warning, $result->type);
        $this->assertEquals('Only warning message', $result->message);
    }
    public function testGetResultDetailWarningWithData()
    {
        $result = WarningExtensions::getResultDetailWarningWithData(['foo' => 'bar']);
        $this->assertEquals(ResultType::Warning, $result->type);
        $this->assertEquals('', $result->message);
        $this->assertEquals(['foo' => 'bar'], $result->data);
    }
    public function testGetResultDetailWarningAsync()
    {
        $closure = WarningExtensions::getResultDetailWarningAsync('Async warning', ['foo' => 'bar']);
        $result = $closure();
        $this->assertEquals(ResultType::Warning, $result->type);
        $this->assertEquals('Async warning', $result->message);
        $this->assertEquals(['foo' => 'bar'], $result->data);
    }
    public function testGetResultDetailWarningMessageAsync()
    {
        $closure = WarningExtensions::getResultDetailWarningMessageAsync('Async only warning message');
        $result = $closure();
        $this->assertEquals(ResultType::Warning, $result->type);
        $this->assertEquals('Async only warning message', $result->message);
    }
    public function testGetResultDetailWarningWithDataAsync()
    {
        $closure = WarningExtensions::getResultDetailWarningWithDataAsync(['foo' => 'bar']);
        $result = $closure();
        $this->assertEquals(ResultType::Warning, $result->type);
        $this->assertEquals('', $result->message);
        $this->assertEquals(['foo' => 'bar'], $result->data);
    }
}
