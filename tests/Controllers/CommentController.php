<?php

namespace Vivala\RestAPI\Tests\Controllers;

use Vivala\RestAPI\ApiController;
use Vivala\RestAPI\Tests\Models\DummyComment;

class CommentController extends ApiController
{
    protected $model = DummyComment::class;
}