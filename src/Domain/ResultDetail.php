<?php
// src/Domain/ResultDetail.php
namespace Rom\Result\Domain;

class ResultDetail
{
    public function __construct(
        public ResultType $type,
        public string $message = '',
        public $data = null,
        public ?array $errors = null
    ) {}
}
