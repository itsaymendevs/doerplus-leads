<div class="wrapper">



    {{-- head --}}
    @section('head')




    {{-- title - description - keywords meta --}}
    <title>DOer Solution - Subscribe</title>

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










    {{-- mainRow --}}
    <div class="section section-inner m-description my-0">
        <div class="container">




            {{-- wrapper --}}
            <div class="login--wrapper">

                {{-- logo --}}
                <div class="d-flex justify-content-center align-content-center" style="margin-bottom: 40px">
                    <img class="of-contain mx-auto login--logo"
                        src='{{ url("{$storagePath}/profile/{$globalProfile->imageFile}") }}' />
                </div>





                {{-- credientials --}}
                <div class="row">


                    {{-- 1: name --}}
                    <div class="col-6">
                        <div class="login--input form--input-wrapper mb-4">

                            <label><span>Business Name</span></label>
                            <div class="d-flex align-items-center">
                                <i class="bi bi-person-badge"></i>
                                <input type="text" class='form--input' autocomplete="off"
                                    placeholder="Company Name LLC.">
                            </div>
                        </div>
                    </div>








                    {{-- 2: email --}}
                    <div class="col-6">
                        <div class="login--input form--input-wrapper mb-4">

                            <label><span>Official Email</span></label>
                            <div class="d-flex align-items-center">
                                <i class="bi bi-envelope-at"></i>
                                <input type="emal" class='form--input' autocomplete="off">
                            </div>
                        </div>
                    </div>





                    {{-- 3: address --}}
                    <div class="col-12">
                        <div class="login--input form--input-wrapper mb-4">

                            <label><span>Your Address</span></label>
                            <div class="d-flex align-items-center">
                                <i class="bi bi-pin-map-fill"></i>
                                <input type="text" class='form--input' autocomplete="off">
                            </div>
                        </div>
                    </div>







                    {{-- 4: Landline --}}
                    <div class="col-6">
                        <div class="login--input form--input-wrapper mb-4">

                            <label><span>Landline Number</span></label>
                            <div class="d-flex align-items-center">
                                <i class="bi bi-pin-map-fill"></i>
                                <input type="text" class='form--input' autocomplete="off">
                            </div>
                        </div>
                    </div>













                    {{-- ---------------------------------------------- --}}
                    {{-- ---------------------------------------------- --}}






                    {{-- submit --}}
                    <div class="d-flex justify-content-center mt-5">
                        <livewire:leads.components.items.button-blob title='SEND DETAILS' type="submit" />
                    </div>






                </div>
                {{-- endCredientials --}}







                {{-- forgot --}}
                <div class='d-flex justify-content-start login--footer'>
                    <p class='login--forgot me-4'><span class='fw-semibold'>Get in touch</span></p>
                    <p class='login--forgot'><span class='fw-semibold border-0'>Our Website</span>
                    </p>
                </div>



            </div>
            {{-- endWrapper --}}






        </div>
    </div>
    {{-- endSection --}}





</div>
{{-- endWrapper --}}