# Rom.Result PHP

A PHP library for encapsulating method results, inspired by the .NET package [rom.result](https://github.com/romuloar/rom.result). It provides a standardized way to return operation results with status, messages, data, and errors, supporting both synchronous and simulated asynchronous (Closure) APIs.

## Features
- Standardized result objects for Success, Error, Warning, and Info
- Rich result details: type, message, data, errors
- Extension methods for easy creation of results
- Synchronous and simulated asynchronous (Closure) APIs
- 100% unit tested
- Easy integration with any PHP project

## Installation

```bash
composer require romuloar/rom.result
```

## Quick Start

### Creating Results

#### Success
```php
use Rom\Result\Extensions\SuccessExtensions;

// Synchronous
$result = SuccessExtensions::getResultDetailSuccess('Operation succeeded', ['id' => 1]);
$resultWithData = SuccessExtensions::getResultDetailSuccessWithData(['id' => 1]);
$resultOnlyMessage = SuccessExtensions::getResultDetailSuccessMessage('Just a message');

// Asynchronous (simulated)
$resultAsync = SuccessExtensions::getResultDetailSuccessAsync('Async success', ['id' => 1]);
$actualResult = $resultAsync(); // Call closure to get ResultDetail
```

#### Error
```php
use Rom\Result\Extensions\ErrorExtensions;

$result = ErrorExtensions::getResultDetailError('Operation failed', null, ['code' => 500]);
$resultWithData = ErrorExtensions::getResultDetailErrorWithData('Failed with data', ['id' => 1]);
$resultOnlyMessage = ErrorExtensions::getResultDetailErrorMessage('Just a message');
$resultWithDataOnly = ErrorExtensions::getResultDetailErrorWithDataOnly(['id' => 1]);

// Asynchronous (simulated)
$resultAsync = ErrorExtensions::getResultDetailErrorAsync('Async error', null, ['code' => 500]);
$actualResult = $resultAsync();
```

#### Warning
```php
use Rom\Result\Extensions\WarningExtensions;

$result = WarningExtensions::getResultDetailWarning('Be careful!', ['field' => 'email']);
$resultWithData = WarningExtensions::getResultDetailWarningWithData(['field' => 'email']);
$resultOnlyMessage = WarningExtensions::getResultDetailWarningMessage('Just a warning');

// Asynchronous (simulated)
$resultAsync = WarningExtensions::getResultDetailWarningAsync('Async warning', ['field' => 'email']);
$actualResult = $resultAsync();
```

#### Info
```php
use Rom\Result\Extensions\InfoExtensions;

$result = InfoExtensions::getResultDetailInfo('Just FYI', ['step' => 2]);
$resultWithData = InfoExtensions::getResultDetailInfoWithData(['step' => 2]);
$resultOnlyMessage = InfoExtensions::getResultDetailInfoMessage('Just info');

// Asynchronous (simulated)
$resultAsync = InfoExtensions::getResultDetailInfoAsync('Async info', ['step' => 2]);
$actualResult = $resultAsync();
```

### Checking Result Types

```php
use Rom\Result\Extensions\ResultDetailExtensions;

if (ResultDetailExtensions::getResultDetailIsSuccess($result)) {
    // handle success
}
if (ResultDetailExtensions::getResultDetailIsError($result)) {
    // handle error
}
if (ResultDetailExtensions::getResultDetailIsWarning($result)) {
    // handle warning
}
if (ResultDetailExtensions::getResultDetailIsInfo($result)) {
    // handle info
}

// Asynchronous (simulated)
$checkAsync = ResultDetailExtensions::getResultDetailIsSuccessAsync($result);
if ($checkAsync()) {
    // handle async success
}
```

### Accessing Result Details

```php
use Rom\Result\Helpers\ResultDetailHelper;

$message = ResultDetailHelper::getMessage($result);
$data = ResultDetailHelper::getData($result);
$errors = ResultDetailHelper::getErrors($result);
```

### Using the Factory

```php
use Rom\Result\Factories\ResultDetailFactory;
use Rom\Result\Domain\ResultType;

$result = ResultDetailFactory::create(ResultType::Success, 'Created', ['id' => 1]);
```

## ResultDetail Structure

```php
ResultDetail {
    ResultType $type; // Success, Error, Warning, Info
    string $message;
    mixed $data;
    ?array $errors;
}
```

## Advanced Usage

- You can extend or wrap the result pattern for your own domain needs.
- Combine with service layers to standardize all method returns.
- Use the async (Closure) pattern to integrate with event loops or promise libraries if needed.

## Testing

Run all tests with PHPUnit:

```bash
vendor/bin/phpunit --testdox
```

## License
MIT