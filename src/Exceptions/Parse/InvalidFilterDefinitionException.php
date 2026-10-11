<?php

namespace Vivala\RestAPI\Exceptions\Parse;

use Vivala\RestAPI\Exceptions\ApiException;
use Vivala\RestAPI\Exceptions\ErrorCodes;

class InvalidFilterDefinitionException extends ApiException
{

    protected $code = ErrorCodes::REQUEST_PARSE_EXCEPTION;

    protected $innerError = ErrorCodes::INNER_INVALID_FILTER_DEFINITION;

    protected $message = "Filter defined incorrectly";

}