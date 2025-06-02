<?php

namespace App\Repositories\Implementations;

use App\Models\Contact;
use App\Repositories\Interfaces\IContact;
use Illuminate\Support\Facades\DB;

class ContactRepository implements IContact
{
    public function save($model)
    {
             return  Contact::create($model);

    }
    public function getView()
    {
        return [];

    }

}
