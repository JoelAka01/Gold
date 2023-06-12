@extends('client_layout.master')
@section('title')
home
@endsection

@section('content')
<!--Home-->

{{-- banner --}}

<div class="home text-center text-white">
    <div class="container">
    <div class="row align-items-center" style="height: 900px;">
        <div class="col">
        <h1 class="display-1">
            YOUR  <span style="background-color: #1EA47A">TIME</span> TO LEVEL UP
        </h1>

        </div>
    </div>
    </div>
</div>    
    
 
<div class=" text-justify"  style="padding:5% ;background:#242323 ;color:#ffff; height:640px " >
    <div class="container " >
        <h2 class="text-center ">ABOUT</h2>          
        <h1 class="text-center my-5  ">JEAN LOREL AKA</h1>
        <p class="px-5  ">My name is Elliot, I am a Multi-Asset trader specialized in the Foreign Exchange Market and a Private Portfolio Manager based in Monaco, 
            London & Panama. I had the chance to start trading FX and Commodities at the age of thirteen 
            allowing me to acquire experience early as I got mentored alongside institutional
        <br>
                traders and FX researchers in major Banks. Trading became second nature and a passion. I now live off trading as my full-time income and career which allows me a certain lifestyle I always perceived as unachievable. On my Instagram profile @elliothewitt.off (all posts are mine) I only post the most photogenic parts of my life as people are sadly more interested in the outcome rather than the process.
            Sharing my passion with others is something I love doing as trading is a rather "lonely" job. Teaching others has allowed me to meet and mentor very promising traders that I keep close to my entourage for future projects and plans. Moreover, seeing some of my student's lives changed, and achieving financial freedom gives me a real purpose in life which I am proud of.
        </p>
    </div>
    <div class=" d-flex justify-content-center" >
    <a href="https://www.instagram.com/afro_french_touch/"><img src="https://static.wixstatic.com/media/40898a93cfff4578b1779073137eb1b4.png/v1/fill/w_53,h_53,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/40898a93cfff4578b1779073137eb1b4.png"></a>
    <a href="https://www.instagram.com/afro_french_touch/"><img src="https://static.wixstatic.com/media/aeb686ff41244d85bc1232fcf7325ec0.png/v1/fill/w_53,h_53,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/aeb686ff41244d85bc1232fcf7325ec0.png"></a>
    <a href="https://www.instagram.com/afro_french_touch/"><img src="https://static.wixstatic.com/media/a1fed5f687844a6e8f42e017f71dfcb4.png/v1/fill/w_53,h_53,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/a1fed5f687844a6e8f42e017f71dfcb4.png"></a>
    </div>
</div>   
<div class="container">
    <div class="d-flex justify-content-center p-3">
        <img src="https://static.wixstatic.com/media/faa724_1ccccbc23d1944889ce83b7244399a91~mv2.png/v1/fill/w_642,h_36,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/Screenshot%202023-05-30%20at%2010_52_36.png"/>
    </div>
</div>
<div class="container">
    <div class="row " style="height:800px">
        <div class="col-6 bg-dark m-4"   style="height:400px"></div>
        <div class="col bg-danger m-4" style="height:400px"></div>
    </div>
</div>
@endsection