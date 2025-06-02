<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Services\Interfaces\IContactService;
use App\Http\Requests\StoreContactRequest;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{

    protected IContactService $contactService;

    public function __construct(IContactService $contactService)
    {
        $this->contactService = $contactService;
    }

    public function getView(Request $request) 
    { 
        try {
            $services = Service::all();

            return view('contact.form', compact('services'));
        } catch (\Exception $e) {
            Log::error('Error loading contact form: ' . $e->getMessage());
            // return redirect()->back()->with('error', 'Unable to load contact form. Please try again.');
        }
    }

    public function createContact(StoreContactRequest $request) 
    { 
        try {
            $contact = $this->contactService->createContact($request);
            
            return redirect()->back()->with('success', 'Thank you for your message! We will get back to you soon.');
        } catch (\Exception $e) {
            Log::error('Error creating contact: ' . $e->getMessage());
            return redirect()->back()->with('error', 'There was an error submitting your message. Please try again.');
        }
    }

}