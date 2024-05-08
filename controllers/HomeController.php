<?php

namespace test20240508\controllers;

use test20240508\requests\ProcessEventRequest;

class HomeController extends BaseController
{
    public function processEvent()
    {
        $request = new ProcessEventRequest($this->getRequest());
    }
}