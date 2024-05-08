<?php

namespace test20240508\requests;

class ProcessEventRequest
{
    public int $id;
    public array $payload;

    public function __construct($request)
    {
        //@todo Validate $request
    }
}