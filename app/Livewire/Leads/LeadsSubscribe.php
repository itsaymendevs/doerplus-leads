<?php

namespace App\Livewire\Leads;

use App\Models\CountryCode;
use Livewire\Attributes\Layout;
use Livewire\Component;


#[Layout('livewire.layouts.leads')]
class LeadsSubscribe extends Component
{
    public function render()
    {


        // 1: dependencies
        $countryCodes = CountryCode::all();

        return view('livewire.leads.leads-subscribe', compact('countryCodes'));


    } // end function





} // end class
