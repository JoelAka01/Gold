@extends('client_layout.master')
@section('title')
SERVICE
@endsection

@section('content')

<div class="service text-center text-white">
    <div class="container">
    <div class="row align-items-center" style="height: 616px;">
        <div class="col">
        <h1 class="display-1">
           
            GOLDSTREET
            FINANCIAL

        </h1>
        <p style="font-size:17px">
            PROPULSE TES RÉSULTATS EN TRADING FOREX AVEC DES INFOS, DATAS ET RECHERCHES PROFESSIONNELS JOURNALIÈRES

        </p>
        <a href="#" style="background-color: #FF9A38" class="btn btn-outline-dark  px-4 py-2">
           REJOINDRE
        </a>
        </div>
    </div>
    </div>
</div>

<div>
    <img src="https://static.wixstatic.com/media/faa724_9ef590388f86454c8e505e9dee70b01f~mv2.png/v1/fill/w_1823,h_171,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/faa724_9ef590388f86454c8e505e9dee70b01f~mv2.png" 
    style="width:100% ; height:137px"/>
</div>

<div style="background-color:#333B3D ;height:630px" >

    <div id="myVideoContainer">
        <video id="myVideo" playsinline>
            <source src="https://video.wixstatic.com/video/faa724_d7c6be0112bb47a79c5e2eabb53772a9/1080p/mp4/file.mp4" type="video/mp4">
        </video>
        <div class="video-controls">
            <button id="play-pause-button"><i class="fas fa-play"></i></button>
            <button id="mute-button"><i class="fas fa-volume-up"></i></button>
            <button id="fullscreen-button"><i class="fas fa-expand"></i></button>
        </div>
    </div>
</div>


<div style="background-color:#242323 " >
    <div class="container "  style="padding:90px ">
    <h1 class="text-center "> UN SERVICE UNIQUE EN FRANCE POUR LES TRADERS CONFIRMÉS </h1>
    <div class="row py-5">
        <div class="col">
            <div class="p-2">
            <img src="https://static.wixstatic.com/media/faa724_12e1f0ec0e194d969bf0f69697b37bfb~mv2.png/v1/fill/w_64,h_51,al_c,lg_1,q_85,enc_auto/trade-tracking-updates.png" style="float: left ;position: fixe;">                  
            <h4 class="text-center text-white"> OPPORTUNITÉES DE TRADES À FORT POTENTIEL </h4>
                <p>Tracking du marché du Forex, des matières premières et des indices pour trouver des opportunités de trade. Chaque idée est envoyée avec des explications et une capture d'écran du graphique et de l'analyse.</p>
                <img src="https://static.wixstatic.com/media/faa724_9877f4ad20134839926e682ad0c217f5~mv2.png/v1/fill/w_66,h_55,al_c,lg_1,q_85,enc_auto/objeto2.png" style="float: left ;position: fixe;">                  
                <h4 class="text-center text-white"> OPPORTUNITÉES DE TRADES À FORT POTENTIEL </h4>
                    <p>Tracking du marché du Forex, des matières premières et des indices pour trouver des opportunités de trade. Chaque idée est envoyée avec des explications et une capture d'écran du graphique et de l'analyse.</p>
            </div>
            </div>
        <div class="col">
            <div class="p-2">
                <img src="https://static.wixstatic.com/media/faa724_c577779da34047fba6c86d067130ecb3~mv2.png/v1/fill/w_66,h_55,al_c,lg_1,q_85,enc_auto/objeto1.png" style="float: left ;position: fixe;">                  
                <h4 class="text-center text-white"> OPPORTUNITÉES DE TRADES À FORT POTENTIEL </h4>
                    <p>Tracking du marché du Forex, des matières premières et des indices pour trouver des opportunités de trade. Chaque idée est envoyée avec des explications et une capture d'écran du graphique et de l'analyse.</p>

                    
                    <img src="https://static.wixstatic.com/media/faa724_8721c61a477444bdb6e04c7b56fb527e~mv2.png/v1/fill/w_55,h_63,al_c,lg_1,q_85,enc_auto/objeto6.png" style="float: left ;position: fixe;">                  
                    <h4 class="text-center text-white"> OPPORTUNITÉES DE TRADES À FORT POTENTIEL </h4>
                        <p>Tracking du marché du Forex, des matières premières et des indices pour trouver des opportunités de trade. Chaque idée est envoyée avec des explications et une capture d'écran du graphique et de l'analyse.</p>
                </div>
        </div>

    </div>
    <button type="button" class="btn btn-block btn-lg " style="background-color: #FF9A38 ; margin: auto; display: block;"> REJOINDRE </button>
    </div>
</div>


@endsection
@section('script')
<script>
    var video = document.getElementById("myVideo");
    var playPauseButton = document.getElementById("play-pause-button");
    var muteButton = document.getElementById("mute-button");
    var fullscreenButton = document.getElementById("fullscreen-button");

    playPauseButton.addEventListener("click", function() {
        if (video.paused || video.ended) {
            video.play();
            playPauseButton.innerHTML = '<i class="fas fa-pause"></i>';
        } else {
            video.pause();
            playPauseButton.innerHTML = '<i class="fas fa-play"></i>';
        }
    });

    muteButton.addEventListener("click", function() {
        if (video.muted) {
            video.muted = false;
            muteButton.innerHTML = '<i class="fas fa-volume-up"></i>';
        } else {
            video.muted = true;
            muteButton.innerHTML = '<i class="fas fa-volume-mute"></i>';
        }
    });

    fullscreenButton.addEventListener("click", function() {
        if (video.requestFullscreen) {
            video.requestFullscreen();
        } else if (video.mozRequestFullScreen) {
            video.mozRequestFullScreen();
        } else if (video.webkitRequestFullscreen) {
            video.webkitRequestFullscreen();
        } else if (video.msRequestFullscreen) {
            video.msRequestFullscreen();
        }
    });
</script>
@endsection