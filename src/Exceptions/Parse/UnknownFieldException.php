<?php

namespace Vivala\RestAPI\Exceptions\Parse;

use Vivala\RestAPI\Exceptions\ApiException;
use Vivala\RestAPI\Exceptions\ErrorCodes;

class UnknownFieldException extends ApiException
{

    protected $code = ErrorCodes::REQUEST_PARSE_EXCEPTION;

    protected $innerError = ErrorCodes::INNER_UNKNOWN_FILED_EXCEPTION;

    protected $message = "One of the specified fields does not exist";
}