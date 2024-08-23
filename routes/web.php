<?php

use App\Livewire\Leads\LeadsContact;
use App\Livewire\Leads\LeadsSubscribe;
use App\Livewire\Leads\LeadsSubscribeSuccess;
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;








// --------------------------------------------------------------------------
// --------------------------------------------------------------------------
// --------------------------------------------------------------------------
// --------------------------------------------------------------------------
// --------------------------------------------------------------------------
// ** ----------------------------- GENERAL ---------------------------------









// :: linkStorage
Route::get('/storage-link', function () {

    $return = Artisan::call('storage:link');

});








// :: LivewireServerDeployment in subRoute
if (env('APP_ENV') == 'production') {

    Livewire::setUpdateRoute(function ($handle) {
        return Route::post(env('LIVEWIRE_UPDATE_PATH'), $handle);
    });


    Livewire::setScriptRoute(function ($handle) {
        return Route::get(env('LIVEWIRE_JAVASCRIPT_PATH'), $handle);
    });

} // end if



















// --------------------------------------------------------------------------
// --------------------------------------------------------------------------
// --------------------------------------------------------------------------
// --------------------------------------------------------------------------
// --------------------------------------------------------------------------
// ** ------------------------------ LEADS ----------------------------------






// 1: leads
Route::get('/', LeadsSubscribe::class)->name('leads.subscribe');
Route::get('/success', LeadsSubscribeSuccess::class)->name('leads.success');




// 2: reach-us
Route::get('/contact-us', LeadsContact::class)->name('leads.contact');
