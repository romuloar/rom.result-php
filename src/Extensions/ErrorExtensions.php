<?php
// src/Extensions/ErrorExtensions.php
namespace Rom\Result\Extensions;

use Rom\Result\Domain\ResultDetail;
use Rom\Result\Domain\ResultType;

class ErrorExtensions
{
    /**
     * Returns a standard error result
     */
    public static function getResultDetailError(string $message, $data = null, ?array $errors = null): ResultDetail
    {
        return new ResultDetail(ResultType::Error, $message, $data, $errors);
    }

    /**
     * Returns an error result with message and data
     */
    public static function getResultDetailErrorWithData(string $message, $data): ResultDetail
    {
        return new ResultDetail(ResultType::Error, $message, $data);
    }

    /**
     * Returns an error result with only a message
     */
    public static function getResultDetailErrorMessage(string $message): ResultDetail
    {
        return new ResultDetail(ResultType::Error, $message);
    }

    /**
     * Returns an error result with data only
     */
    public static function getResultDetailErrorWithDataOnly($data): ResultDetail
    {
        return new ResultDetail(ResultType::Error, '', $data);
    }

    // Async versions (simulated)
    /**
     * Simulates an async error result
     */
    public static function getResultDetailErrorAsync(string $message, $data = null, ?array $errors = null): \Closure
    {
        return function() use ($message, $data, $errors) {
            return new ResultDetail(ResultType::Error, $message, $data, $errors);
        };
    }
    /**
     * Simulates an async error result with message and data
     */
    public static function getResultDetailErrorWithDataAsync(string $message, $data): \Closure
    {
        return function() use ($message, $data) {
            return new ResultDetail(ResultType::Error, $message, $data);
        };
    }
    /**
     * Simulates an async error result with only a message
     */
    public static function getResultDetailErrorMessageAsync(string $message): \Closure
    {
        return function() use ($message) {
            return new ResultDetail(ResultType::Error, $message);
        };
    }
    /**
     * Simulates an async error result with data only
     */
    public static function getResultDetailErrorWithDataOnlyAsync($data): \Closure
    {
        return function() use ($data) {
            return new ResultDetail(ResultType::Error, '', $data);
        };
    }
}
