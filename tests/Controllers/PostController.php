<?php

namespace Vivala\RestAPI\Tests\Controllers;

use Vivala\RestAPI\ApiController;
use Vivala\RestAPI\Tests\Models\DummyPost;

class PostController extends ApiController
{
    protected $model = DummyPost::class;
}