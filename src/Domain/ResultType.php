<?php
// src/Domain/ResultType.php
namespace Rom\Result\Domain;

enum ResultType: string
{
    case Success = 'Success';
    case Error = 'Error';
    case Warning = 'Warning';
    case Info = 'Info';
}
