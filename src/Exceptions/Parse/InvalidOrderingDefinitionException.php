<?php

namespace Vivala\RestAPI\Exceptions\Parse;

use Vivala\RestAPI\Exceptions\ApiException;
use Vivala\RestAPI\Exceptions\ErrorCodes;

class InvalidOrderingDefinitionException extends ApiException
{
    protected $code = ErrorCodes::REQUEST_PARSE_EXCEPTION;

    protected $innerError = ErrorCodes::INNER_ORDERING_INVALID;

    protected $message = "Ordering defined incorrectly";
}