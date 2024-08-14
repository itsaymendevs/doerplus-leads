<div class="wrapper">



    {{-- head --}}
    @section('head')




    {{-- title - description - keywords meta --}}
    <title>DOER Solution - Subscribe</title>

    <meta name="description" content="Meal Plan Solution">




    @endsection
    {{-- endHead --}}
















    {{-- ----------------------------------------------------------------- --}}
    {{-- ----------------------------------------------------------------- --}}
    {{-- ----------------------------------------------------------------- --}}
    {{-- ----------------------------------------------------------------- --}}










    {{-- blobBG --}}
    <livewire:leads.components.items.background-blob />







    {{-- ----------------------------------------------------------------- --}}
    {{-- ----------------------------------------------------------------- --}}
    {{-- ----------------------------------------------------------------- --}}
    {{-- ----------------------------------------------------------------- --}}






    {{-- logo --}}
    <div class="d-flex justify-content-center align-content-center login--logo-wrapper d-none d-xl-flex">
        <img class="of-contain mx-auto login--logo"
            src='{{ url("{$storagePath}/profile/{$globalProfile->imageFile}") }}' />
    </div>










    {{-- mainRow --}}
    <div class="section section-inner m-description my-0">
        <div class="container">
            <div class="login--wrapper position-relative">
                <div class="row align-items-start justify-content-start">


                    <div class="col-12 d-xl-none">
                        <img class="of-contain mx-auto login--regular-logo"
                            src='{{ url("{$storagePath}/profile/{$globalProfile->imageFile}") }}' />
                    </div>







                    {{-- main --}}
                    <div class="col-12 col-xl-12">


                        {{-- heading --}}
                        <h4 class='text-center login--heading'>General Details</h4>





                        {{-- topSection --}}
                        <div class="left--section section--padding">



                            {{-- topRow --}}
                            <div class="row">


                                {{-- 1: name --}}
                                <div class="col-12 col-lg-6">
                                    <div class="d-block">
                                        <div class="login--input form--input-wrapper mb-4">

                                            <label><span>Business Name</span></label>
                                            <div class="d-flex align-items-center">
                                                <i class="bi bi-person-badge"></i>
                                                <input type="text" class='form--input text-center' autocomplete="off"
                                                    placeholder="Company Name LLC.">
                                            </div>
                                        </div>
                                    </div>
                                </div>








                                {{-- 2: email --}}
                                <div class="col-12 col-lg-6">
                                    <div class="d-block">
                                        <div class="login--input form--input-wrapper mb-4">

                                            <label><span>Official Email</span></label>
                                            <div class="d-flex align-items-center">
                                                <i class="bi bi-envelope-at"></i>
                                                <input type="emal" class='form--input text-center' autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                </div>








                                {{-- 3: address --}}
                                <div class="col-12">
                                    <div class="d-block">
                                        <div class="login--input form--input-wrapper mb-4">

                                            <label><span>Full Address</span></label>
                                            <div class="d-flex align-items-center">
                                                <i class="bi bi-pin-map-fill"></i>
                                                <input type="text" class='form--input text-center' autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                </div>













                                {{-- ---------------------------------------------- --}}
                                {{-- ---------------------------------------------- --}}
                                {{-- ---------------------------------------------- --}}
                                {{-- ---------------------------------------------- --}}






                                {{-- 4: Landline --}}
                                <div class="col-12 col-lg-6" wire:ignore>

                                    <div class="login--input form--input-wrapper mb-xl-0 mb-4">

                                        <label><span>Landline Number</span></label>


                                        {{-- inputWithSelect --}}
                                        <div class="form--input-with-select">


                                            {{-- select --}}
                                            <div class="form--select-wrapper side--left text-center"
                                                style="min-width: 90px !important; width: 90px !important">
                                                <select class='form--select init--select'
                                                    data-instance='instance.whatsappKey' value='+971' required>

                                                    @foreach ($countryCodes as $countryCode)
                                                    <option value="{{ $countryCode->code }}">{{ str_replace('+', '',
                                                        $countryCode->code) }}</option>
                                                    @endforeach

                                                </select>
                                            </div>



                                            {{-- input --}}
                                            <input type="text" pattern="[0-9]+"
                                                class='form--input side--right text-center'
                                                style="width: 100% !important" wire:model='instance.whatsapp'
                                                minlength="9" maxlength="9" required>



                                        </div>
                                        {{-- endInputWithWrapper --}}




                                    </div>

                                </div>
                                {{-- endCol --}}








                                {{-- --------------------------------- --}}
                                {{-- --------------------------------- --}}






                                {{-- 4: mobile --}}
                                <div class="col-12 col-lg-6" wire:ignore>

                                    <div class="login--input form--input-wrapper mb-xl-0 mb-4">

                                        <label><span>Mobile Number</span></label>


                                        {{-- inputWithSelect --}}
                                        <div class="form--input-with-select">


                                            {{-- select --}}
                                            <div class="form--select-wrapper side--left text-center"
                                                style="min-width: 90px !important; width: 90px !important">
                                                <select class='form--select init--select'
                                                    data-instance='instance.whatsappKey' value='+971' required>

                                                    @foreach ($countryCodes as $countryCode)
                                                    <option value="{{ $countryCode->code }}">{{ str_replace('+', '',
                                                        $countryCode->code) }}</option>
                                                    @endforeach

                                                </select>
                                            </div>



                                            {{-- input --}}
                                            <input type="text" pattern="[0-9]+"
                                                class='form--input side--right text-center'
                                                style="width: 100% !important" wire:model='instance.whatsapp'
                                                minlength="9" maxlength="9" required>



                                        </div>
                                        {{-- endInputWithWrapper --}}



                                    </div>

                                </div>
                                {{-- endMobile --}}










                            </div>
                            {{-- endRow --}}





                        </div>
                    </div>
                    {{-- endCredientials --}}









                    {{-- ---------------------------------------------------- --}}
                    {{-- ---------------------------------------------------- --}}
                    {{-- ---------------------------------------------------- --}}
                    {{-- ---------------------------------------------------- --}}
                    {{-- ---------------------------------------------------- --}}
                    {{-- ---------------------------------------------------- --}}












                    {{-- contactPerson --}}
                    <div class="col-12 col-xl-6 mt-5">

                        <div class="personal--wrapper section--padding">
                            <div class="row">


                                {{-- 1: name --}}
                                <div class="col-12">
                                    <div class="d-block">
                                        <div class="login--input form--input-wrapper mb-4">

                                            <label><span>Contact Person</span></label>
                                            <div class="d-flex align-items-center">
                                                <i class="bi bi-person-badge"></i>
                                                <input type="text" class='form--input text-center' autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                </div>














                                {{-- 2: phone --}}
                                <div class="col-12" wire:ignore>
                                    <div class="login--input form--input-wrapper mb-4">

                                        <label><span>Phone Number</span></label>


                                        {{-- inputWithSelect --}}
                                        <div class="form--input-with-select">


                                            {{-- select --}}
                                            <div class="form--select-wrapper side--left text-center"
                                                style="min-width: 90px !important; width: 90px !important">
                                                <select class='form--select init--select'
                                                    data-instance='instance.whatsappKey' value='+971' required>

                                                    @foreach ($countryCodes as $countryCode)
                                                    <option value="{{ $countryCode->code }}">{{
                                                        str_replace('+', '',
                                                        $countryCode->code) }}</option>
                                                    @endforeach

                                                </select>
                                            </div>



                                            {{-- input --}}
                                            <input type="text" pattern="[0-9]+"
                                                class='form--input side--right text-center'
                                                style="width: 100% !important" wire:model='instance.whatsapp'
                                                minlength="9" maxlength="9" required>



                                        </div>
                                        {{-- endInputWithWrapper --}}




                                    </div>
                                </div>
                                {{-- endCol --}}











                                {{-- 3: Whatsapp --}}
                                <div class="col-12" wire:ignore>
                                    <div class="login--input form--input-wrapper mb-4">

                                        <label><span>Whatsapp Number</span></label>


                                        {{-- inputWithSelect --}}
                                        <div class="form--input-with-select">


                                            {{-- select --}}
                                            <div class="form--select-wrapper side--left text-center"
                                                style="min-width: 90px !important; width: 90px !important">
                                                <select class='form--select init--select'
                                                    data-instance='instance.whatsappKey' value='+971' required>

                                                    @foreach ($countryCodes as $countryCode)
                                                    <option value="{{ $countryCode->code }}">{{
                                                        str_replace('+', '',
                                                        $countryCode->code) }}</option>
                                                    @endforeach

                                                </select>
                                            </div>



                                            {{-- input --}}
                                            <input type="text" pattern="[0-9]+"
                                                class='form--input side--right text-center'
                                                style="width: 100% !important" wire:model='instance.whatsapp'
                                                minlength="9" maxlength="9" required>



                                        </div>
                                        {{-- endInputWithWrapper --}}




                                    </div>
                                </div>
                                {{-- endCol --}}






                            </div>
                        </div>

                    </div>
                    {{-- endWrapper --}}








                    {{-- ---------------------------------------------------- --}}
                    {{-- ---------------------------------------------------- --}}
                    {{-- ---------------------------------------------------- --}}
                    {{-- ---------------------------------------------------- --}}












                    {{-- contactPerson --}}
                    <div class="col-12 col-xl-6 mt-5">


                        <h6 class='text-center'>Trade License</h6>
                    </div>
                    {{-- endWrapper --}}






                    {{-- ---------------------------------------------------- --}}
                    {{-- ---------------------------------------------------- --}}
                    {{-- ---------------------------------------------------- --}}
                    {{-- ---------------------------------------------------- --}}
                    {{-- ---------------------------------------------------- --}}
                    {{-- ---------------------------------------------------- --}}







                    {{-- submit --}}
                    <div class="col-12 col-xl-12">
                        <div class="footer--wrapper mx-4 px-2">


                            {{-- submit --}}
                            <div class="d-flex justify-content-center mt-5">
                                <livewire:leads.components.items.button-blob title='REQUEST' type="submit" />
                            </div>





                            {{--links --}}
                            <div class='d-flex flex-column flex-md-row justify-content-between login--footer'>

                                <div class="d-flex justify-content-center justify-content-lg-start">
                                    <p class='login--forgot me-4'><span class='fw-semibold'>Get in touch</span></p>
                                    <p class='login--forgot'><span class='fw-semibold border-0'>Our Website</span>
                                    </p>
                                </div>


                                <div class="flex mt-3 mt-md-0">
                                    <p class='login--forgot fw-semibold'>@ {{ date('Y') }} All Right Reserved</p>
                                </div>

                            </div>



                        </div>
                    </div>
                    {{-- endCol --}}






                </div>
                {{-- endWrapper --}}






            </div>
        </div>
        {{-- endSection --}}





    </div>
    {{-- endWrapper --}}