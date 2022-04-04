@extends('layouts.format')

@section('title','IoT Challenge')

@section('content')
<div class="judul d-flex align-items-end">
    <div class="mx-auto px-3 text-center pt-5 pb-4 mb-0"  >
    <div class="fade-first ">
        <h1 clas>SEBELAS MARET</h1>
        <h2 >International IoT Challenge 2022</h2>
        <p class="mt-4 mb-1 fs-3 fst-italic">COMING SOON!!!</p>
        {{-- <a href="">
            <button class="" type="button">
                Learn More
            </button>
        </a> --}}
    </div>
    </div>
</div>
<div>
<svg id="wave" style="transform:rotate(180deg); transition: 0.3s ;margin:-1px;" viewBox="0 0 1440 180" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(39, 46, 72, 1)" offset="0%"></stop><stop stop-color="rgba(39, 46, 72, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,90L80,75C160,60,320,30,480,36C640,42,800,84,960,96C1120,108,1280,90,1440,81C1600,72,1760,72,1920,75C2080,78,2240,84,2400,96C2560,108,2720,126,2880,120C3040,114,3200,84,3360,60C3520,36,3680,18,3840,9C4000,0,4160,0,4320,18C4480,36,4640,72,4800,72C4960,72,5120,36,5280,33C5440,30,5600,60,5760,60C5920,60,6080,30,6240,33C6400,36,6560,72,6720,81C6880,90,7040,72,7200,78C7360,84,7520,114,7680,120C7840,126,8000,108,8160,90C8320,72,8480,54,8640,39C8800,24,8960,12,9120,6C9280,0,9440,0,9600,12C9760,24,9920,48,10080,48C10240,48,10400,24,10560,21C10720,18,10880,36,11040,54C11200,72,11360,90,11440,99L11520,108L11520,180L11440,180C11360,180,11200,180,11040,180C10880,180,10720,180,10560,180C10400,180,10240,180,10080,180C9920,180,9760,180,9600,180C9440,180,9280,180,9120,180C8960,180,8800,180,8640,180C8480,180,8320,180,8160,180C8000,180,7840,180,7680,180C7520,180,7360,180,7200,180C7040,180,6880,180,6720,180C6560,180,6400,180,6240,180C6080,180,5920,180,5760,180C5600,180,5440,180,5280,180C5120,180,4960,180,4800,180C4640,180,4480,180,4320,180C4160,180,4000,180,3840,180C3680,180,3520,180,3360,180C3200,180,3040,180,2880,180C2720,180,2560,180,2400,180C2240,180,2080,180,1920,180C1760,180,1600,180,1440,180C1280,180,1120,180,960,180C800,180,640,180,480,180C320,180,160,180,80,180L0,180Z"></path></svg>
</div>
<div class="about hideme" id="about">
    <div class="container" style="max-width: 48rem;">
        <div class="">
            <h1 class="pb-5 mb-1 fs-1 text-center subjudul">About</h1>
            <p>As students who will become pillars of the nation's economy, we have an obligation to increase the value of the nation and increasing nation’s economy. UNS presents Semar IoT theme "Harmony of IoT's Contribution to Global EconomicGrowth" which provides a platform for students to present IoT increase and boosting the nation's economic growth. Give your best ideas and win awesome 
            prizes.</p>
            <div class="text-center mt-5">
                <button class="btn btn-warning" type="button" style="width: 200;height:60px;">
                    <a href="" class="fst-italic fw-bold px-3 py-3" style="color: white; ">COMING SOON!!!</a>
                </button>
            </div>
        </div>
    </div>
</div>
{{-- <div class="container poster hideme py-5" id="poster">
    <h3 class="pb-5 mb-1 fs-1 text-center subjudul ">Webinar and Awarding Session</h3>
    <div class="baris mb-3" >
         <div class="kolom pe-3">
            <img src="images/poster_fix.jpeg" alt="poster" width="100%">
        </div>
        <div class="kolom ps-4">
            <h3>Innovation for Pandemic Recovery in Sustainable Society 5.0</h3>
            <h5>Registration</h5>
            <p>Register via .......</p>
            <h5>Benefits</h5>
            <p>📃 E-Certificate</p>
            <h5>Term and Condition</h5>
            <ol>
                <li>Follow IG
                    <a href="https://instagram.com/hmteuns" target="_blank">hmteuns</a>
                    &
                    <a href="https://instagram.com/semariot.uns" target="_blank">semariot</a>
                </li>
                <li>Upload Twibbon (
                    <a href="https://twb.nz/twibbonsemariot2021" target="_blank">Twibbon</a>
                    ) 
                </li>
            </ol>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
            <h5>Event Details</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
            <h5>For further information, please contact us</h5>
            <ul>
                <li>
                    WhatsApp: 
                    <a href="https://wa.me/6289693553019" target="_blank" class="text-blue-500">
                        +62 89693553019
                    </a> (Azalia)
                </li>
                <li>
                    WhatsApp: 
                    <a href="https://wa.me/6281326185668" target="_blank" class="text-blue-500">
                        +62 81326185668
                    </a> (Dheanera)
                </li>
                <li>
                    Email: 
                    <a href="mailto:iotlab@ft.uns.ac.id" target="_blank" class="text-blue-500">
                        iotlab@ft.uns.ac.id
                    </a>
                </li>
            </ul>
        </div>
    </div>
    </div>
</div> --}}
<div class="timeline hideme mt-5" id="timeline">
    <div class="container">
        <div class="timeline  ">
            <h1>Timeline</h1>
                <div class="timeline-row">
                    <div class="timeline-time">
                    </div>
                    <div class="timeline-content">
                        <i class="icon-attachment"></i>
                        <h4>Open Submission</h4>
                        <p>10 April - 15 May 2022</p>
                    </div>
                </div>
                <div class="timeline-row">
                    <div class="timeline-time">
                    </div>
                    <div class="timeline-content">
                        <i class="icon-attachment"></i>
                        <h4>Desk Evaluation</h4>
                        <p>16 May - 31 May 2022</p>
                    </div>
                </div>
                <div class="timeline-row">
                    <div class="timeline-time">
                    </div>
                    <div class="timeline-content">
                        <i class="icon-attachment"></i>
                        <h4>Finalist Announcement</h4>
                        <p>01 June 2022</p>
                    </div>
                </div>
                <div class="timeline-row">
                    <div class="timeline-time">
                    </div>
                    <div class="timeline-content">
                        <i class="icon-attachment"></i>
                        <h4>Finalist Evaluation</h4>
                        <p>06 July 2022</p>
                    </div>
                </div>
                <div class="timeline-row">
                    <div class="timeline-time">
                    </div>
                    <div class="timeline-content">
                        <i class="icon-attachment"></i>
                        <h4>Awarding Session</h4>
                        <p>07 July 2022</p>
                    </div>
                </div>
            </div>
        </div>
</div>
<div class="terms hideme" id="terms">
    <div class="container hideme">
        <div class="row py-5">
            <div class="col-lg-9 mx-auto">
                <div class="card shadow mb-4" style="border-radius:50px">
                    <div class="card-body p-5 s">
                        <h3 class="mb-4 text-center fs-2">Terms</h3>
                        <!-- Unordered list -->
                        <ul style="list-style-type:circle;">
                            <li class="mb-2">All Participants must be an active student in Bachelor or Diploma degree from universities around the world as evidenced by including a Scan of Student ID 
                                Card.</li>
                            <li class="mb-2"> Each team consists of a minimum of 3 peoples and maximum of 5 peoples with 
                                1 person as the leader and the others as group members. Each team must has 
                                1 Supervisor.</li>
                            <li class="mb-2">Team members can consist of various faculties or departments within the 
                                same university.</li>
                            <li class="mb-2">Each participant is only allowed to join 1 team.</li>
                            <li class="mb-2">Each team is only allowed to submit 1 title.</li>
                            <li class="mb-2">The submitted idea must be an original work which that never been published and has never won in another event.</li>
                            <li class="mb-2">Participants must read and follow the competition regulations, writing 
                                regulations, and the timeline that has been determined in the Guidelines.</li>
                            <li class="mb-2">Participants are not allowed to change the team members during the 
                                competition.</li>
                            <li class="mb-2"> Teams that qualify for the Grand Final must present their work through Zoom 
                                Cloud Meetings on Thursday, May 19, 2022</li>
                            <li class="mb-2">Participants who are not eligible may be disqualified.</li>
                            <li class="mb-2">All provisions and decisions of the Judges are absolute and inviolable.</li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="prize hideme" id="prize">
    <div class="container">
        <h1 class="fs-2 py-4 text-center my-3">Prize</h1>
        <div class="prizebox mb-3">
            <div class="dua">
              <h1 class="fw-bold fs-3">2nd</h1>
              {{-- <h5 class="mb-0 fs-2">$850.00</h5><span class="small text-uppercase text-muted">(IDR 12,250,000.00)</span> --}}
              <h5 class="mb-0 fs-5">Coaching Money</h5>

            </div>
            <div class="satu" >
                <h1 class="fw-bold fs-3">1st</h1>
                {{-- <h5 class="mb-0 fs-1">$1,000.00</h5>
                <span class="small text-uppercase text-muted">(IDR 14,400,000.00)</span> --}}
              <h5 class="mb-0 fs-4">Coaching Money</h5>
            </div>
            <div class="tiga" >
                <h1 class="fw-bold fs-3">3rd</h1>
                {{-- <h5 class="mb-0 fs-3">$700.00</h5><span class="small text-uppercase text-muted">(IDR 10,000,000.00)</span> --}}
              <h5 class="mb-0 fs-5">Coaching Money</h5>
            </div>

        </div>
        <div class="row text-center pb-5">
            {{-- <h3>and, $70.00 for each favorite winners</h3>
            <h4>(IDR 1,000,000.00)</h4>
            <h5>+ e-certificate</h5>          --}}
        </div>
    </div>
</div>

{{-- <div class="judges hideme" id="judges">
    <div class="container py-5 ">
        <h1 class="text-center subjudul">Judges</h1>
        <div class="row text-center">
            <!-- Team item -->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="bg-white rounded shadow-sm py-5 px-4"><img src="/images/zhongli.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0">Zhongli</h5><span class="small text-uppercase text-muted">CEO</span>
                    <ul class="social mb-0 list-inline mt-3">
                        <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div><!-- End -->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="bg-white rounded shadow-sm py-5 px-4"><img src="/images/hutao.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0">Hutao</h5><span class="small text-uppercase text-muted">CEO</span>
                    <ul class="social mb-0 list-inline mt-3">
                        <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div><!-- End -->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="bg-white rounded shadow-sm py-5 px-4"><img src="/images/ayaka.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0">Ayaka</h5><span class="small text-uppercase text-muted">CEO</span>
                    <ul class="social mb-0 list-inline mt-3">
                        <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div><!-- End -->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="bg-white rounded shadow-sm py-5 px-4"><img src="/images/shenhe.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0">Shenhe</h5><span class="small text-uppercase text-muted">CEO</span>
                    <ul class="social mb-0 list-inline mt-3">
                        <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div><!-- End -->
        </div>
    </div>
</div> --}}
<div class="faq py-5 hideme" id="faq">
    <div class="container">
        <div class=" row d-flex justify-content-center shadow mb-4">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body text-center">
                        <h4 class="card-title m-b-0">FAQ</h4>
                    </div>
                    <ul class="list-style-none">
                        <li class="d-flex no-block card-body"> 
                            <div>
                                <i class="fa fa-plus w-30px m-t-5"></i>
                            </div>
                            <div> 
                                <a href="#" class="m-b-0 font-medium p-0" data-abc="true">
                                    What is IoT Challenge?
                                </a> 
                                <span class="text-muted">
                                    An event for every undergraduate student around the world to share their ideas about the application of the Internet of Things (IoT) to find solutions for dealing with some specific problem around the world.
                                </span> 
                            </div>
                        </li>
                        <li class="d-flex no-block card-body"> 
                            <div>
                                <i class="fa fa-plus w-30px m-t-5"></i>
                            </div>
                            <div> 
                                <a href="#" class="m-b-0 font-medium p-0" data-abc="true">
                                    Why you should join the IoT Challenge ?
                                </a> 
                                <span class="text-muted">
                                    By participating in this activity, it means the students have contributed their best ideas related to IoT to be used as a solution for the problem and if you got lucky you can earn some pocket money.
                                </span> 
                            </div>
                        </li>
                        {{-- <li class="d-flex no-block card-body"> 
                            <div>
                                <i class="fa fa-plus w-30px m-t-5"></i>
                            </div>
                            <div> 
                                <a href="#" class="m-b-0 font-medium p-0" data-abc="true">
                                    The benefits for joining this event?
                                </a> 
                                <span class="text-muted">
                                    - 1st Prize USD 1000 (IDR 14,400,000) + e-certificate<br>
                                    - 2nd Prize USD 850 (IDR 12,250,000) + e-certificate<br>
                                    - 3rd Prize USD 700 (IDR 10,000,000) + e-certificate<br>
                                    - Special award Prize USD 70 (IDR 1,000,000) + e-certificate<br>
                                    - Every participants will receive e-certificate
                                </span> 
                            </div>
                        </li> --}}
                        <li class="d-flex no-block card-body"> 
                            <div>
                                <i class="fa fa-plus w-30px m-t-5"></i>
                            </div>
                            <div> 
                                <a href="#" class="m-b-0 font-medium p-0" data-abc="true">
                                    Can register more than 1 team?
                                </a> 
                                <span class="text-muted">
                                    Each participants can only register in 1 team
                                </span> 
                            </div>
                        </li>
                        <li class="d-flex no-block card-body"> 
                            <div>
                                <i class="fa fa-plus w-30px m-t-5"></i>
                            </div>
                            <div> 
                                <a href="#" class="m-b-0 font-medium p-0" data-abc="true">
                                    Assessment Criteria?
                                </a> 
                                <span class="text-muted">
                                    - Innovation and originality <br>
                                    - Impact <br>
                                    - Technical feasibility <br>
                                    - Document and Short Video 
                                </span> 
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="organizedby pb-5 mt-5 hideme " id="organized">
    <div class="container pb-5">
        <h2 class="text-center fs-1 subjudul" style="padding:7rem 0 "> Organized By </h2>
        <div class="d-flex flex-row flex-wrap justify-content-center mb-5" style=" gap: 9rem">
            {{-- <img src="images\Logo-Dies-UNS.png" alt="" width="120px " height="120px"> --}}
            <img src="/images/logo-hmte.png" alt=""width="120px" height="120px">
            <img src="images\Logo-UNS-Biru.png" alt="" width="120px" height="120px">
            {{-- <img src="images\1519889957811.png" alt="" width="120px" height="120px">
            <img src="images\1462853_logo_1572951228_n.png" alt="" width="120px" height="120px">
            <img src="images\Arms_of_KMITL.png" alt="" width="120px" height="120px">  --}}
        </div>
    </div>

</div>
{{-- <div class="organizedby  py-5 hideme">
    <div class="container">
    <h2 class="font-weight-bold mb-5 subjudul text-center">Organized By</h2>
    <div class="row pb-5 mb-4">
        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
            <!-- Card-->
            <div class="card shadow-sm border-0 rounded">
            <div class="card-body p-0"><img src="images\Logo-UNS-Biru.png" alt="" class="w-100 card-img-top">
            </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
            <!-- Card-->
            <div class="card shadow-sm border-0 rounded">
            <div class="card-body p-0"><img src="images\logo-hmte.png" alt="" class="w-100 card-img-top">
            </div>
            </div>
        </div> --}}
        {{-- <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
            <!-- Card-->
            <div class="card shadow-sm border-0 rounded">
            <div class="card-body p-0"><img src="/images/Hydro.png" alt="" class="w-100 card-img-top">
            </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
            <!-- Card-->
            <div class="card shadow-sm border-0 rounded">
            <div class="card-body p-0"><img src="/images/Anemo.png" alt="" class="w-100 card-img-top">
            </div>
            </div>
        </div>   --}}
    </div>
</div>
</div>
{{-- <div class="sponsors  py-5 hideme">
    <div class="container">
        <h2 class="font-weight-bold mb-2 subjudul text-center mb-5">Sponsors</h2>
            <div class="row pb-5 mb-4">
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                <!-- Card-->
                    <div class="card shadow-sm border-0 rounded">
                        <div class="card-body p-0"><img src="/images/Pyro.png" alt="" class="w-100 card-img-top">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                <!-- Card-->
                    <div class="card shadow-sm border-0 rounded">
                        <div class="card-body p-0"><img src="/images/Cryo.png" alt="" class="w-100 card-img-top">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                <!-- Card-->
                    <div class="card shadow-sm border-0 rounded">
                        <div class="card-body p-0"><img src="/images/Electro.png" alt="" class="w-100 card-img-top">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection