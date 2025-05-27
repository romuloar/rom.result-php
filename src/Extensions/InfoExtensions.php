<?php
// src/Extensions/InfoExtensions.php
namespace Rom\Result\Extensions;

use Rom\Result\Domain\ResultDetail;
use Rom\Result\Domain\ResultType;

class InfoExtensions
{
    /**
     * Returns a standard info result
     */
    public static function getResultDetailInfo(string $message, $data = null): ResultDetail
    {
        return new ResultDetail(ResultType::Info, $message, $data);
    }

    /**
     * Returns an info result with only a message
     */
    public static function getResultDetailInfoMessage(string $message): ResultDetail
    {
        return new ResultDetail(ResultType::Info, $message);
    }

    /**
     * Returns an info result with data only
     */
    public static function getResultDetailInfoWithData($data): ResultDetail
    {
        return new ResultDetail(ResultType::Info, '', $data);
    }

    // Async versions (simulated)
    /**
     * Simulates an async info result
     */
    public static function getResultDetailInfoAsync(string $message, $data = null): \Closure
    {
        return function() use ($message, $data) {
            return new ResultDetail(ResultType::Info, $message, $data);
        };
    }
    /**
     * Simulates an async info result with only a message
     */
    public static function getResultDetailInfoMessageAsync(string $message): \Closure
    {
        return function() use ($message) {
            return new ResultDetail(ResultType::Info, $message);
        };
    }
    /**
     * Simulates an async info result with data only
     */
    public static function getResultDetailInfoWithDataAsync($data): \Closure
    {
        return function() use ($data) {
            return new ResultDetail(ResultType::Info, '', $data);
        };
    }
}
