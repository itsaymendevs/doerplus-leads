<?php

namespace App\Livewire\Leads;

use Livewire\Component;

class LeadsSubscribeSuccess extends Component
{






    public function mount()
    {


        // 1: checkValid
        if (empty(session('businessName'))) {

            return $this->redirect(route("leads.subscribe"), navigate: false);

        } // end if




    } // end function








    // --------------------------------------------------------------------------------







    public function render()
    {


        return view('livewire.leads.leads-subscribe-success');


    } // end function




} // end class
