<?php
// src/Extensions/SuccessExtensions.php
namespace Rom\Result\Extensions;

use Rom\Result\Domain\ResultDetail;
use Rom\Result\Domain\ResultType;

class SuccessExtensions
{
    /**
     * Returns a standard success result
     */
    public static function getResultDetailSuccess(string $message = '', $data = null): ResultDetail
    {
        return new ResultDetail(ResultType::Success, $message, $data);
    }

    /**
     * Returns a success result with only a message
     */
    public static function getResultDetailSuccessMessage(string $message): ResultDetail
    {
        return new ResultDetail(ResultType::Success, $message);
    }

    /**
     * Returns a success result with data only
     */
    public static function getResultDetailSuccessWithData($data): ResultDetail
    {
        return new ResultDetail(ResultType::Success, '', $data);
    }

    // Async versions (PHP does not have native async/await, but for API compatibility, we can return a Promise-like or Closure)
    /**
     * Simulates an async success result (for API compatibility)
     */
    public static function getResultDetailSuccessAsync(string $message = '', $data = null): \Closure
    {
        return function() use ($message, $data) {
            return new ResultDetail(ResultType::Success, $message, $data);
        };
    }
    /**
     * Simulates an async success result with only a message
     */
    public static function getResultDetailSuccessMessageAsync(string $message): \Closure
    {
        return function() use ($message) {
            return new ResultDetail(ResultType::Success, $message);
        };
    }
    /**
     * Simulates an async success result with data only
     */
    public static function getResultDetailSuccessWithDataAsync($data): \Closure
    {
        return function() use ($data) {
            return new ResultDetail(ResultType::Success, '', $data);
        };
    }
}
