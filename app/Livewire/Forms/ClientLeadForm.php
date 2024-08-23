<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class ClientLeadForm extends Form
{


    // :: variables
    #[Validate('required')]
    public $name, $email, $address, $phone, $phoneKey, $landline, $landlineKey, $contactPerson, $contactPersonPhone, $contactPersonPhoneKey, $contactPersonWhatsapp, $contactPersonWhatsappKey, $tradeFile, $users, $websiteURL;




    public $country, $isConfirmed;



    // helpers
    public $tradeFileName;


} // end form
