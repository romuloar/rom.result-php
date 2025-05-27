<?php
// src/Extensions/ResultDetailExtensions.php
namespace Rom\Result\Extensions;

use Rom\Result\Domain\ResultDetail;

class ResultDetailExtensions
{
    /**
     * Returns true if the result is Success
     */
    public static function getResultDetailIsSuccess(ResultDetail $result): bool
    {
        return $result->type === \Rom\Result\Domain\ResultType::Success;
    }
    /**
     * Returns true if the result is Error
     */
    public static function getResultDetailIsError(ResultDetail $result): bool
    {
        return $result->type === \Rom\Result\Domain\ResultType::Error;
    }
    /**
     * Returns true if the result is Warning
     */
    public static function getResultDetailIsWarning(ResultDetail $result): bool
    {
        return $result->type === \Rom\Result\Domain\ResultType::Warning;
    }
    /**
     * Returns true if the result is Info
     */
    public static function getResultDetailIsInfo(ResultDetail $result): bool
    {
        return $result->type === \Rom\Result\Domain\ResultType::Info;
    }
    // Async versions (simulated)
    /**
     * Simulates async check for Success
     */
    public static function getResultDetailIsSuccessAsync(ResultDetail $result): \Closure
    {
        return function() use ($result) {
            return $result->type === \Rom\Result\Domain\ResultType::Success;
        };
    }
    /**
     * Simulates async check for Error
     */
    public static function getResultDetailIsErrorAsync(ResultDetail $result): \Closure
    {
        return function() use ($result) {
            return $result->type === \Rom\Result\Domain\ResultType::Error;
        };
    }
    /**
     * Simulates async check for Warning
     */
    public static function getResultDetailIsWarningAsync(ResultDetail $result): \Closure
    {
        return function() use ($result) {
            return $result->type === \Rom\Result\Domain\ResultType::Warning;
        };
    }
    /**
     * Simulates async check for Info
     */
    public static function getResultDetailIsInfoAsync(ResultDetail $result): \Closure
    {
        return function() use ($result) {
            return $result->type === \Rom\Result\Domain\ResultType::Info;
        };
    }
}
