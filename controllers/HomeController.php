<?php

namespace test20240508\controllers;

use test20240508\apps\EventApp;
use test20240508\requests\ProcessEventRequest;

class HomeController extends BaseController
{
    private EventApp $eventApp;

    public function __construct(EventApp $eventApp)
    {
        $this->eventApp = $eventApp;
    }

    public function processEvent()
    {
        $request = new ProcessEventRequest($this->getRequest());

        if (!$this->eventApp->processEvent($request->userId, $request->payload)) {
            $this->sendInternalError();
        }

        $this->sendOk();
    }
}