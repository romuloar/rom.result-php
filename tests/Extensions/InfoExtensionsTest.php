<?php
// tests/Extensions/InfoExtensionsTest.php
use PHPUnit\Framework\TestCase;
use Rom\Result\Extensions\InfoExtensions;
use Rom\Result\Domain\ResultType;

class InfoExtensionsTest extends TestCase
{
    public function testGetResultDetailInfo()
    {
        $result = InfoExtensions::getResultDetailInfo('Info!', ['foo' => 'bar']);
        $this->assertEquals(ResultType::Info, $result->type);
        $this->assertEquals('Info!', $result->message);
        $this->assertEquals(['foo' => 'bar'], $result->data);
    }
    public function testGetResultDetailInfoMessage()
    {
        $result = InfoExtensions::getResultDetailInfoMessage('Only info message');
        $this->assertEquals(ResultType::Info, $result->type);
        $this->assertEquals('Only info message', $result->message);
    }
    public function testGetResultDetailInfoWithData()
    {
        $result = InfoExtensions::getResultDetailInfoWithData(['foo' => 'bar']);
        $this->assertEquals(ResultType::Info, $result->type);
        $this->assertEquals('', $result->message);
        $this->assertEquals(['foo' => 'bar'], $result->data);
    }
    public function testGetResultDetailInfoAsync()
    {
        $closure = InfoExtensions::getResultDetailInfoAsync('Async info', ['foo' => 'bar']);
        $result = $closure();
        $this->assertEquals(ResultType::Info, $result->type);
        $this->assertEquals('Async info', $result->message);
        $this->assertEquals(['foo' => 'bar'], $result->data);
    }
    public function testGetResultDetailInfoMessageAsync()
    {
        $closure = InfoExtensions::getResultDetailInfoMessageAsync('Async only info message');
        $result = $closure();
        $this->assertEquals(ResultType::Info, $result->type);
        $this->assertEquals('Async only info message', $result->message);
    }
    public function testGetResultDetailInfoWithDataAsync()
    {
        $closure = InfoExtensions::getResultDetailInfoWithDataAsync(['foo' => 'bar']);
        $result = $closure();
        $this->assertEquals(ResultType::Info, $result->type);
        $this->assertEquals('', $result->message);
        $this->assertEquals(['foo' => 'bar'], $result->data);
    }
}
