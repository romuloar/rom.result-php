<?php
// src/Helpers/ResultDetailHelper.php
namespace Rom\Result\Helpers;

use Rom\Result\Domain\ResultDetail;

class ResultDetailHelper
{
    public static function getMessage(ResultDetail $result): string
    {
        return $result->message;
    }
    public static function getData(ResultDetail $result)
    {
        return $result->data;
    }
    public static function getErrors(ResultDetail $result): ?array
    {
        return $result->errors;
    }
}
