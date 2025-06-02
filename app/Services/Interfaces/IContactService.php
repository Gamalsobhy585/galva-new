<?php

namespace App\Services\Interfaces;

interface IContactService
{
    public function getView();
    public function createContact($request);
}