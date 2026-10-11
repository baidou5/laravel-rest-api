<?php

namespace Vivala\RestAPI\Tests\Controllers;

use Vivala\RestAPI\ApiController;
use Vivala\RestAPI\Tests\Models\DummyUser;

class UserController extends ApiController
{
    protected $model = DummyUser::class;
}