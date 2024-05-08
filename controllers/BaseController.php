<?php

namespace test20240508\controllers;

abstract class BaseController
{
    protected $request;
    protected $response;

    protected function getRequest()
    {
        return [];
    }
}