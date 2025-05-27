<?php
// src/Factories/ResultDetailFactory.php
namespace Rom\Result\Factories;

use Rom\Result\Domain\ResultDetail;
use Rom\Result\Domain\ResultType;

class ResultDetailFactory
{
    public static function create(ResultType $type, string $message = '', $data = null, ?array $errors = null): ResultDetail
    {
        return new ResultDetail($type, $message, $data, $errors);
    }
}
