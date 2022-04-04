@extends('layouts.format')

@section('title','Register')
@section('content')
<div class="registrasi " style="background:linear-gradient(243.3deg, rgba(9, 249, 228, 0.8) 2.08%, rgba(4, 93, 233, 0.8) 97.68%);">
    <div class="bg-light" style="height: auto;border-radius : 20px" >
        <div class="row row-cols-1 row-cols-lg-2 " >
            <div class="col-lg-4 regisimagecontainer" >
                <img src="/images/Vector_2677.jpg" alt="gambar" class="registimg" >
                <div class="text-center regislogo"  >
                    <img src="/images/logocrop.png" width="180px" height="140px" alt="IOT" style="margin-bottom: 20px">
                    <h1 class="fs-3">
                        SEBELAS MARET INTERNASIONAL IOT CHALLANGE 2022
                    </h1>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="container mb-4">
                    <div class="mt-4">
                        <h4 style="font-size:2.5rem">Registrasi</h4>
                        <p style="font-family: var(--bs-body-font-family);">Welcome to the Sebelas Maret International IoT Challenge 2022!                           Before registering your team, please read guidelines carefully and download registration form first.                            
                        </p>
                    </div>
                    <form action="" method="POST">
                        <div class="formregis">
                            <label for="teamleader" class="form-label mt-2"> Team leader</label>
                            <input type="text" class="form-control " name="teamleader" id="teamleader" style="border-radius: 20px" placeholder="Enter your leader name">
                            <label for="groupname" class="form-label mt-2">Group Name</label>
                            <input type="text"  class="form-control " name="groupname" id="groupname" style="border-radius: 20px" placeholder="Enter your group name">
                            <label for="country" class="form-label mt-2">Country</label>
                            <input type="text"  class="form-control" name="country" id="country" style="border-radius: 20px" placeholder="Enter your country">
                            <div class="mt-3">
                                <span class="form-label">
                                    File Submission : 
                                </span>
                                <div class="row row-col-lg-2">
                                    <div class="col-6 mt-2">
                                        <label for="Regisform" class="form-label">Fulfilled Registration Form (.pdf)</label>
                                        <input class="form-control" type="file" id="Regisform " style="border-radius: 20px">
                                    </div>
                                    <div class="col-6 mt-2">
                                        <label for="CV" class="form-label">Curriculum Vitae (.pdf)</label>
                                        <input type="file" class="form-control" name="CV" id="CV" style="border-radius: 20px">
                                    </div>
                                    <div class="col-6 mt-2">
                                        <label for="FormalPhoto" class="form-label">Formal Photo 3x4 (.pdf)</label>
                                        <input type="file" class="form-control" name="FormalPhoto" id="FormalPhoto " style="border-radius: 20px">
                                    </div>
                                    <div class="col-6 mt-2">
                                        <label for="PresentationDOC" class="form-label">Presentation Document (.pdf)</label>
                                        <input type="file" class="form-control" name="PresentationDOC" id="PresentationDOC" style="border-radius: 20px">
                                    </div>
                                    <div class="col mt-2">
                                        <label for="VideoProject" class="form-label">Video Clip of The Project (link))</label>
                                        <input type="file" class="form-control" name="VideoProject" id="VideProject" style="border-radius: 20px">
                                    </div>
                            </div>
                            <div class="mt-4 d-flex justify-content-end">
                                <button type="submit" class="btn px-4" style=" background: #58CDFF; color:white; border-radius:20px">
                                    Submit
                                </button>
                            </div>
                        </div>

                    </div>
                    </form>
                    
                    
                </div>

            </div>

        </div>
    </div>
</div>
@endsection