<?php
namespace Vivala\RestAPI\Exceptions\Parse;

use Vivala\RestAPI\Exceptions\ApiException;
use Vivala\RestAPI\Exceptions\ErrorCodes;

class NotAllowedToFilterOnThisFieldException extends ApiException
{
    protected $code = ErrorCodes::REQUEST_PARSE_EXCEPTION;

    protected $innerError = ErrorCodes::INNER_NOT_ALLOWED_TO_FILTER_ON_THIS_FIELD;

    protected $message = "Applying filter on one of the specified fields is not allowed";
}