@extends('layouts.format')

@section('title','Past Event')
@section('content')
<div class="judul d-flex align-items-end">
    <div class="mx-auto px-3 text-center pt-4 pb-5 mb-0"  >
    <div class="fade-first ">
        <h1 >SEBELAS MARET</h1>
        <h2 >International IoT Challenge </h2>
        <h2> 2021 </h2>
        </a>
    </div>
    </div>
    </div>
<div>
    <svg id="wave" style="transform:rotate(180deg); transition: 0.3s ;margin:-1px;" viewBox="0 0 1440 180" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(39, 46, 72, 1)" offset="0%"></stop><stop stop-color="rgba(39, 46, 72, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,90L80,75C160,60,320,30,480,36C640,42,800,84,960,96C1120,108,1280,90,1440,81C1600,72,1760,72,1920,75C2080,78,2240,84,2400,96C2560,108,2720,126,2880,120C3040,114,3200,84,3360,60C3520,36,3680,18,3840,9C4000,0,4160,0,4320,18C4480,36,4640,72,4800,72C4960,72,5120,36,5280,33C5440,30,5600,60,5760,60C5920,60,6080,30,6240,33C6400,36,6560,72,6720,81C6880,90,7040,72,7200,78C7360,84,7520,114,7680,120C7840,126,8000,108,8160,90C8320,72,8480,54,8640,39C8800,24,8960,12,9120,6C9280,0,9440,0,9600,12C9760,24,9920,48,10080,48C10240,48,10400,24,10560,21C10720,18,10880,36,11040,54C11200,72,11360,90,11440,99L11520,108L11520,180L11440,180C11360,180,11200,180,11040,180C10880,180,10720,180,10560,180C10400,180,10240,180,10080,180C9920,180,9760,180,9600,180C9440,180,9280,180,9120,180C8960,180,8800,180,8640,180C8480,180,8320,180,8160,180C8000,180,7840,180,7680,180C7520,180,7360,180,7200,180C7040,180,6880,180,6720,180C6560,180,6400,180,6240,180C6080,180,5920,180,5760,180C5600,180,5440,180,5280,180C5120,180,4960,180,4800,180C4640,180,4480,180,4320,180C4160,180,4000,180,3840,180C3680,180,3520,180,3360,180C3200,180,3040,180,2880,180C2720,180,2560,180,2400,180C2240,180,2080,180,1920,180C1760,180,1600,180,1440,180C1280,180,1120,180,960,180C800,180,640,180,480,180C320,180,160,180,80,180L0,180Z"></path></svg>
</div>
<div class="about hideme" id="about">
    <div class="container" style="max-width: 48rem;">
        <div>
            <h1 class="pb-5 mb-1 fs-1 text-center subjudul" >About</h1>
            <p>The Covid-19 pandemic has changed the human lifestyle around the world. In everything limited, the internet is a technology that can be relied on to break through these limitations. Therefore, the Sebelas Maret International IoT Challenge 2021 was present. This competition’s theme is "IoT Innovation For Covid-19 Pandemic Recovery, “ held by the Faculty of Engineering Universitas Sebelas Maret Surakarta. We invite undergraduate students worldwide to participate in this competition by providing Internet of Things (IoT) ideas in dealing with the Covid-19 pandemic. Through the Sebelas Maret International IoT Challenge 2021, we hope that the resulting ideas can help deal with the Covid-19 pandemic in various sectors.</p>
        </div>
    </div>
</div>
<div class="container poster hideme py-5" id="poster">
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
</div>
<div class="champions hideme backgroundbiru" id="champion">
    <div class="container py-5 my-5">
        <div class="text-center pt-5 mb-3">
            <h1 class="fs-1 pb-5 mb-1 subjudul">Champions</h1>
        </div>
        <div class="row row-cols-3 row-cols-lg-1 mb-5 g-4" style="justify-content: center;">
          <div class="col-10 col-lg-4">
            <div class="card" style="height: 500px" >
              <img src="https://cdn.discordapp.com/attachments/699803800956829746/844820172165349417/unknown.png" height="250px"  class="card-img-top" alt="...">
              <div class="card-body text-center">
                <button class="nomorjuara" type="button"  >
                  <span class="fs-4" style="color:white">1</span>
                </button>
                <h5 class="card-title pt-5 pb-2 fw-bold" style="color: #8b5cf6">I-MASK</h5>
                <span class="card-text subjudul fw-bolder pb-2">Institut Teknologi Sepuluh November</span>
                <p class="card-text"><small class="text-muted">Indonesia</small></p>
              </div>
            </div>
          </div>
          <div class="col-10 col-lg-4">
            <div class="card "style="height: 500px">
              <img src="https://cdn.discordapp.com/attachments/699803800956829746/844819309900333097/unknown.png" height="250px" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <button class="nomorjuara" type="button" >
                <span class="fs-4 " style="color:white">2</span>
              </button>
              <h5 class="card-title pt-5 pb-2 fw-bold" style="color: #8b5cf6">KROWD</h5>
              <span class="card-text subjudul pb-2 fw-bolder">King Mongkuts Institute of Technology Ladkrabang</span>
              <p class="card-text"><small class="text-muted">Thailand</small></p>
            </div>
            </div>
          </div>
          <div class="col-10 col-lg-4">
            <div class="card" style="height: 500px">
              <img src="https://cdn.discordapp.com/attachments/699803800956829746/844820534021980190/unknown.png" height="250px"class="card-img-top" alt="..." style="object-fit: cover">
            <div class="card-body text-center">
              <button class="nomorjuara" type="button" >
                <span class="fs-4" style="color:white">3</span>
              </button>
              <h5 class="card-title pt-5 pb-2 fw-bold" style="color: #8b5cf6">INO-G</h5>
              <p class="card-text mb-0 subjudul pb-2 fw-bolder"  >Institut Teknologi Sepuluh November</p>
              <p class="card-text"><small class="text-muted">Indonesia</small></p>
            </div>
            </div>
          </div>
        </div>
    </div>
</div>

<div class="Judges hideme " id="Judges">
    <div class="container">
        <h2 class="text-center fs-1 py-5 my-1 subjudul">Judges</h2>
        <div class="row mb-5"  style="overflow-x:auto; flex-wrap:nowrap">
            <div class="col px-4">
              <div class="card judgescard">
                <div class="text-center imgbox">
                    <img src="/images/DrFethma.jpg" class="card-img-top" alt="...">
                </div>
                <div class="card-body px-4 text-center">
                    <h5 class="card-title mb-4 fs-4">Dr. Fethma M Nor</h5>
                <blockquote>
                    Department of Mechanical Engineering | Faculty of Engineering and Science, Curtin University
                </blockquote>
                </div>
              </div>
            </div>
            <div class="col px-4">
              <div class="card judgescard">
                <div class="text-center imgbox">
                    <img src="/images/DrDenni3.jpg" class="card-img-top" alt="...">
                </div>
                <div class="card-body px-4 text-center">
                    <h5 class="card-title mb-4 fs-4">Asst. Prof. Dr. Denni Kurniawan, B.ENG., M.ENG., D.ENG.</h5>
                  <blockquote>Faculty of Engineering, Universiti Teknologi Brunei</blockquote>
                </div>
              </div>
            </div>
            <div class="col px-4">
              <div class="card judgescard">
                <div class="text-center imgbox">
                    <img src="/images/ProfKuncoroo.jpg" class="card-img-top" alt="..." style="height:inherit">
                </div>
                <div class="card-body px-4 text-center">
                  <h5 class="card-title mb-4 fs-4">Prof. Dr. Kuncoro Diharjo, S.T., M.T</h5>
                  <blockquote>
                    Vice Rector of Research and Inovation, Universitas Sebelas Maret
                  </blockquote>
                </div>
              </div>
            </div>
            <div class="col px-4">
              <div class="card judgescard">
                <div class="text-center imgbox">
                    <img src="/images/PriagungUtomo.jpg" class="card-img-top" alt="...">
                </div>
                <div class="card-body px-4 text-center">
                  <h5 class="card-title mb-4 fs-4">Priagung Utomo</h5>
                  <blockquote>Senior Vice President - Head of Core Product & Solution, Indosat Ooredoo</blockquote>
                </div>
              </div>
            </div>
            <div class="col px-4">
                <div class="card judgescard">
                    <div class="text-center imgbox">
                        <img src="/images/DrSarinporn.jpg" class="card-img-top" alt="...">
                    </div>
                  <div class="card-body px-5 text-center ">
                    <h5 class="card-title mb-3">Asst. Prof. Dr. Sarinporn Visitsattapongse</h5>
                    <p class="card-text">Head of Department of Biomedical Engineering, Faculty of Engineering KMITL</p>
                  </div>
                </div>
              </div>
          </div>
          
    </div>
</div>
<div class="organized  hideme backgroundbiru" id="organized">
    <div class="container pb-5">
        <h2 class="text-center fs-1 subjudul" style="padding:7rem 0 "> Organized By </h2>
        <div class="d-flex flex-row flex-wrap justify-content-center mb-5" style=" gap: 9rem">
            <img src="images\Logo-Dies-UNS.png" alt="" width="120px " height="120px">
            <img src="/images/logo-hmte.png" alt=""width="120px" height="120px">
            <img src="images\Logo-UNS-Biru.png" alt="" width="120px" height="120px">
            <img src="images\1519889957811.png" alt="" width="120px" height="120px">
            <img src="images\1462853_logo_1572951228_n.png" alt="" width="120px" height="120px">
            <img src="images\Arms_of_KMITL.png" alt="" width="120px" height="120px">
        </div>
    </div>

</div>
<div class="sponsors container hideme"  id="sponsor">
    <div class="text-center my-5 pb-5">
        <h2 class="fs-1  0 subjudul" style="padding:7rem">Sponsors</h2>
        <img src="images\indosat.png" alt="" width="220px" height="220px" class="mb-5">
    </div>


</div>

@endsection