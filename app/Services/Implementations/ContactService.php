<?php

namespace App\Services\Implementations;
use App\Repositories\Interfaces\IContact;
use App\Services\Interfaces\IContactService;
use Illuminate\Support\Facades\Log;

class ContactService implements IContactService
{
    private IContact $Contactrepo;


    public function __construct(IContact $Contactrepo)
    {
        $this->Contactrepo = $Contactrepo;
    }

    public function getView()
    {
        try {
               return $this->Contactrepo->getView();

        } catch (\Throwable $e) {
            Log::error('Error loading contact form: ' . $e->getMessage()); 
            throw $e;
        }
    }

    public function createContact($request)
    {
        try {
                $ContactData = [
                    'name' => $request->input('name'),
                    'email' => $request->input('email'),
                    'phone' => $request->input('phone'),
                    'message' => $request->input('message'),
                
                ];
                return $this->Contactrepo->save($ContactData);

        } catch (\Throwable $e) {
            Log::error('Error creating contact: ' . $e->getMessage()); 
            throw $e;
        }
    }

}