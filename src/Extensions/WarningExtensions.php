<?php
// src/Extensions/WarningExtensions.php
namespace Rom\Result\Extensions;

use Rom\Result\Domain\ResultDetail;
use Rom\Result\Domain\ResultType;

class WarningExtensions
{
    /**
     * Returns a standard warning result
     */
    public static function getResultDetailWarning(string $message, $data = null): ResultDetail
    {
        return new ResultDetail(ResultType::Warning, $message, $data);
    }

    /**
     * Returns a warning result with only a message
     */
    public static function getResultDetailWarningMessage(string $message): ResultDetail
    {
        return new ResultDetail(ResultType::Warning, $message);
    }

    /**
     * Returns a warning result with data only
     */
    public static function getResultDetailWarningWithData($data): ResultDetail
    {
        return new ResultDetail(ResultType::Warning, '', $data);
    }

    // Async versions (simulated)
    /**
     * Simulates an async warning result
     */
    public static function getResultDetailWarningAsync(string $message, $data = null): \Closure
    {
        return function() use ($message, $data) {
            return new ResultDetail(ResultType::Warning, $message, $data);
        };
    }
    /**
     * Simulates an async warning result with only a message
     */
    public static function getResultDetailWarningMessageAsync(string $message): \Closure
    {
        return function() use ($message) {
            return new ResultDetail(ResultType::Warning, $message);
        };
    }
    /**
     * Simulates an async warning result with data only
     */
    public static function getResultDetailWarningWithDataAsync($data): \Closure
    {
        return function() use ($data) {
            return new ResultDetail(ResultType::Warning, '', $data);
        };
    }
}
