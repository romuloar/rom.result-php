<?php
// tests/Helpers/ResultDetailHelperTest.php
use PHPUnit\Framework\TestCase;
use Rom\Result\Helpers\ResultDetailHelper;
use Rom\Result\Domain\ResultDetail;
use Rom\Result\Domain\ResultType;

class ResultDetailHelperTest extends TestCase
{
    public function testGetMessage()
    {
        $result = new ResultDetail(ResultType::Success, 'msg');
        $this->assertEquals('msg', ResultDetailHelper::getMessage($result));
    }
    public function testGetData()
    {
        $result = new ResultDetail(ResultType::Success, 'msg', ['foo' => 'bar']);
        $this->assertEquals(['foo' => 'bar'], ResultDetailHelper::getData($result));
    }
    public function testGetErrors()
    {
        $result = new ResultDetail(ResultType::Error, 'fail', null, ['code' => 123]);
        $this->assertEquals(['code' => 123], ResultDetailHelper::getErrors($result));
    }
}
