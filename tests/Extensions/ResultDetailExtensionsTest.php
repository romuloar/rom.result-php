<?php
// tests/Extensions/ResultDetailExtensionsTest.php
use PHPUnit\Framework\TestCase;
use Rom\Result\Extensions\ResultDetailExtensions;
use Rom\Result\Domain\ResultDetail;
use Rom\Result\Domain\ResultType;

class ResultDetailExtensionsTest extends TestCase
{
    public function testIsResultDetailSuccess()
    {
        $result = new ResultDetail(ResultType::Success, 'ok');
        $this->assertTrue(ResultDetailExtensions::isResultDetailSuccess($result));
    }
    public function testIsResultDetailError()
    {
        $result = new ResultDetail(ResultType::Error, 'fail');
        $this->assertTrue(ResultDetailExtensions::isResultDetailError($result));
    }
    public function testIsResultDetailWarning()
    {
        $result = new ResultDetail(ResultType::Warning, 'warn');
        $this->assertTrue(ResultDetailExtensions::isResultDetailWarning($result));
    }
    public function testIsResultDetailInfo()
    {
        $result = new ResultDetail(ResultType::Info, 'info');
        $this->assertTrue(ResultDetailExtensions::isResultDetailInfo($result));
    }
    public function testGetResultDetailIsSuccess()
    {
        $result = new ResultDetail(ResultType::Success, 'ok');
        $this->assertTrue(ResultDetailExtensions::getResultDetailIsSuccess($result));
    }
    public function testGetResultDetailIsError()
    {
        $result = new ResultDetail(ResultType::Error, 'fail');
        $this->assertTrue(ResultDetailExtensions::getResultDetailIsError($result));
    }
    public function testGetResultDetailIsWarning()
    {
        $result = new ResultDetail(ResultType::Warning, 'warn');
        $this->assertTrue(ResultDetailExtensions::getResultDetailIsWarning($result));
    }
    public function testGetResultDetailIsInfo()
    {
        $result = new ResultDetail(ResultType::Info, 'info');
        $this->assertTrue(ResultDetailExtensions::getResultDetailIsInfo($result));
    }
    public function testGetResultDetailIsSuccessAsync()
    {
        $result = new ResultDetail(ResultType::Success, 'ok');
        $closure = ResultDetailExtensions::getResultDetailIsSuccessAsync($result);
        $this->assertTrue($closure());
    }
    public function testGetResultDetailIsErrorAsync()
    {
        $result = new ResultDetail(ResultType::Error, 'fail');
        $closure = ResultDetailExtensions::getResultDetailIsErrorAsync($result);
        $this->assertTrue($closure());
    }
    public function testGetResultDetailIsWarningAsync()
    {
        $result = new ResultDetail(ResultType::Warning, 'warn');
        $closure = ResultDetailExtensions::getResultDetailIsWarningAsync($result);
        $this->assertTrue($closure());
    }
    public function testGetResultDetailIsInfoAsync()
    {
        $result = new ResultDetail(ResultType::Info, 'info');
        $closure = ResultDetailExtensions::getResultDetailIsInfoAsync($result);
        $this->assertTrue($closure());
    }
}
