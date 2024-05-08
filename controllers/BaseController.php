<?php

namespace test20240508\controllers;

abstract class BaseController
{
    protected function getRequest()
    {
        return [];
    }

    protected function sendOk()
    {
        //@todo send 200 ok
    }

    protected function sendInternalError()
    {
        //@todo send 500 Internal error
    }
}