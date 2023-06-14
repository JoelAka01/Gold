@extends('client_layout.master')
@section('title')
financial
@endsection

@section('content')

<div class="service text-center text-white">
    <div class="container">
        <div class="row align-items-center" style="height: 100vh;">
            <div class="container p-4" >
                <img src="https://static.wixstatic.com/media/faa724_d16bb82cbe48421aa53ff3e7d8d6cdc6~mv2.png/v1/fill/w_202,h_60,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/Screen_Shot_2023-05-10_at_5_51_58_PM-removebg-preview.png">

            </div>
            <video autoplay muted loop id="myVideo" style=" height:500px ">
                <source src="https://video.wixstatic.com/video/faa724_d7c6be0112bb47a79c5e2eabb53772a9/1080p/mp4/file.mp4"   type="video/mp4">
            </video>
            <h1 >
                Transforme ton épargne en fortune et atteints l'indépendance financière de manière prouvé
            </h1>
            <form action="{{url('/service')}}" method="get">
                @csrf
                <button class="btn btn-info" >preinscription >></button>
            </form>


        </div>
    </div>
</div>




<div style="background-color:#eceff0 " >
    <div class="container "  style="padding:90px ">
        <video  
        style="width:100% ; height:100% " ></video>
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