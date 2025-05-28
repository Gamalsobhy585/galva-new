<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactSeeder extends Seeder
{
    public function run()
    {
        $contacts = [
            [
                'name' => 'Alice Johnson',
                'email' => 'alice.johnson@example.com',
                'phone' => '123-456-7890',
                'message' => 'Hello, I would like to know more about your services.',
            ],
            [
                'name' => 'Bob Smith',
                'email' => 'bob.smith@example.com',
                'phone' => '234-567-8901',
                'message' => 'Can you please provide a quote?',
            ],
            [
                'name' => 'Charlie Davis',
                'email' => 'charlie.davis@example.com',
                'phone' => '345-678-9012',
                'message' => 'I have a question about your product.',
            ],
            [
                'name' => 'Diana Prince',
                'email' => 'diana.prince@example.com',
                'phone' => '456-789-0123',
                'message' => 'Thank you for the quick response.',
            ],
            [
                'name' => 'Ethan Hunt',
                'email' => 'ethan.hunt@example.com',
                'phone' => '567-890-1234',
                'message' => 'Can we schedule a meeting next week?',
            ],
            [
                'name' => 'Fiona Gallagher',
                'email' => 'fiona.gallagher@example.com',
                'phone' => '678-901-2345',
                'message' => 'I am interested in your latest offers.',
            ],
            [
                'name' => 'George Clark',
                'email' => 'george.clark@example.com',
                'phone' => '789-012-3456',
                'message' => 'Please send me the brochure.',
            ],
            [
                'name' => 'Hannah Lee',
                'email' => 'hannah.lee@example.com',
                'phone' => '890-123-4567',
                'message' => 'Do you offer discounts for bulk orders?',
            ],
            [
                'name' => 'Ian Wright',
                'email' => 'ian.wright@example.com',
                'phone' => '901-234-5678',
                'message' => 'How long is the delivery time?',
            ],
            [
                'name' => 'Jessica Jones',
                'email' => 'jessica.jones@example.com',
                'phone' => '012-345-6789',
                'message' => 'Is there a warranty on your products?',
            ],
            [
                'name' => 'Kevin Brown',
                'email' => 'kevin.brown@example.com',
                'phone' => '111-222-3333',
                'message' => 'I want to update my order details.',
            ],
            [
                'name' => 'Linda Martinez',
                'email' => 'linda.martinez@example.com',
                'phone' => '222-333-4444',
                'message' => 'Can you provide technical support?',
            ],
            [
                'name' => 'Michael Scott',
                'email' => 'michael.scott@example.com',
                'phone' => '333-444-5555',
                'message' => 'Thank you for your excellent service.',
            ],
            [
                'name' => 'Nina Patel',
                'email' => 'nina.patel@example.com',
                'phone' => '444-555-6666',
                'message' => 'Please add me to your mailing list.',
            ],
            [
                'name' => 'Oliver Stone',
                'email' => 'oliver.stone@example.com',
                'phone' => '555-666-7777',
                'message' => 'I have some feedback on your website.',
            ],
        ];

        foreach ($contacts as $contact) {
            Contact::create($contact);
        }
    }
}
