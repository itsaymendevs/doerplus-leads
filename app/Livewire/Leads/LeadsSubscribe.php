<?php

namespace App\Livewire\Leads;

use App\Models\CountryCode;
use Livewire\Component;

class LeadsSubscribe extends Component
{
    public function render()
    {


        // 1: dependencies
        $countryCodes = CountryCode::all();

        return view('livewire.leads.leads-subscribe', compact('countryCodes'));


    } // end function





} // end class
