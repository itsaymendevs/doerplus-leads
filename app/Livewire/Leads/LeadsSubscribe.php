<?php

namespace App\Livewire\Leads;

use App\Livewire\Forms\ClientLeadForm;
use App\Models\CountryCode;
use App\Traits\HelperTrait;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;


#[Layout('livewire.layouts.leads')]
class LeadsSubscribe extends Component
{


    use HelperTrait;
    use WithFileUploads;




    // :: variables
    public ClientLeadForm $instance;
    public $isUploaded;






    public function mount()
    {

        // 1: init
        $this->isUploaded = false;

        $this->instance->phoneKey = '+971';
        $this->instance->landlineKey = '+971';
        $this->instance->contactPersonPhoneKey = '+971';
        $this->instance->contactPersonWhatsappKey = '+971';




        // 1.2: reset
        Session::forget('businessName');



    } // end function








    // --------------------------------------------------------------------------------------







    public function store()
    {



        // 1: validation
        $this->instance->validate();





        // 1.2: uploadFile
        if ($this->instance->tradeFile)
            $this->instance->tradeFileName = $this->uploadFile($this->instance->tradeFile, 'clients/trades', 'TRD');




        // 1.3: makeRequest
        $response = $this->makeRequest('subscription/clients/store', $this->instance);






        // 1.4: toSuccess
        Session::put('businessName', $this->instance->name);

        return $this->redirect(route('leads.success'), navigate: false);



    } // end function









    // --------------------------------------------------------------------------------------







    public function uploaded()
    {


        // 1: changeStatus
        $this->isUploaded = true;




    } // end function







    // -------------------------------------------------------------------------








    public function render()
    {


        // 1: dependencies
        $countryCodes = CountryCode::all();

        return view('livewire.leads.leads-subscribe', compact('countryCodes'));


    } // end function





} // end class
