<?php

namespace Tests\Unit;

use App\Contact;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ContactsTest extends TestCase
{
    /** @test */
    public function userCanAddContact()
    {
        $this->json('POST', url('/contacts'), [
            'first_name' => "nabile",
            'last_name' => "boudlal",
            'email' => "boudlal98@gmail.com",
            'phone_number' => "212652317330",
            'birth_date' => "1998/07/12",
            'function' => "Full stack web developer",
            'city' => "Kenitra",
            'company_name' => "Matious",
            'company_address' => "Mohammedia"
            ]);


        $this->assertDatabaseHas('contacts', [
            'first_name' => 'nabile',
            'last_name' => 'boudlal',
            'email' => 'boudlal98@gmail.com'
        ]);
    }



    /** @test */
    public function userCanDeleteContact()
    {
        $contact = factory(Contact::class)->create();

        $this->json('GET', url('/contacts/'.$contact->id.'/delete'));

        $this->assertDatabaseMissing('contacts', [
            'first_name' => 'Contact'
        ]);
    }


    /** @test */
    public function datatablesContactListWorks()
    {
        $response = $this->get('/contactsList');

        $response->assertStatus(200);
    }
}
