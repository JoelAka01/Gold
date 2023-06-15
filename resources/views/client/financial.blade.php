@extends('client_layout.master')
@section('title')
financial
@endsection

@section('content')

<div class="service text-center text-white">
    <div class="container">
        <div class=" align-items-center" style="height: 100vh;">
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
    <div class="container "  >
        <h1 class="text-dark"> SMART finance pro c'est quoi?</h1>
        <h4>Investissement Long Terme Passif / Finance Personnelle / Compréhension du Monde Financier</h4>
        <p>
            Faire de l'argent, c'est bien. Mais le garder et le multiplier, c'est mieux. Smart Finance Pro est l'aboutissement de tout ce que j'ai appris, compris et expérimenté en bâtissant un portfolio de plusieurs millions d'euros et en ayant travaillé en finance institutionnelle. Ce programme est à l'heure d’aujourd’hui le plus gros projet de ma vie. 
            Découvre un monde où ta fortune personnelle grandit en continu, un monde où tu construis une richesse générationnelle durable et stable tout en gérant ton lifestyle pour pouvoir profiter au maximum de ta fortune, sans jamais la compromettre.  
            Lorsque j'ai créé Smart Finance Pro, je n'avais qu'un seul objectif en tête : permettre à n'importe qui d'avoir les mêmes informations et outils de développement de richesse que les plus grandes fortunes de notre monde. 
        </p>
        <img class="d-flex justify-content-center " style="width:60%"  src="https://static.wixstatic.com/media/faa724_bcb356db2fc5469d9a74921e75a12b36~mv2.png/v1/crop/x_352,y_129,w_1357,h_771/fill/w_764,h_434,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/4.png"/>
            
    </div>
</div>

<div style="background-color:#242323 " class="text-center " >
    <div class="container "  style="padding:90px ">
    <h1 > 
        Le curriculum du programme
    </h1>
    
        <h4>Investissement Long Terme Passif / Finance Personnelle / Compréhension du Monde Financier</h4>
{{-- start --}}
<div class="row text-center py-5">

    <div class="col">
        <img src="https://static.wixstatic.com/media/faa724_92edcf717caf454ba3cc0e0a42920754~mv2.jpg/v1/crop/x_0,y_18,w_1280,h_684/fill/w_434,h_231,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/17.jpg" alt="">
    </div>
        <div class="col">
            <h5>MODULE 1:  REPROGRAMMER SA RELATION À L'ARGENT</h5>
            <p class="text-white">
                1. Ton Empreinte Financière (8min)
                2. Polarisation à l'Argent (12min)
                3. Valorisation et Importance de l'Argent (9min)
                4. Ton Entourage (12min)
                5. Les Habitudes (16min)
                6. La Méritocratie (13min)
                7. Une Commodité Limitée dans l'Infini (13min)
            </p>
    </div>
</div>
<div class="row  py-5">

    <div class="col">
        <img src="https://static.wixstatic.com/media/faa724_08fce83571bd4a95b506e240d741de33~mv2.jpg/v1/crop/x_0,y_18,w_1280,h_684/fill/w_434,h_231,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/18.jpg" alt="">
    </div>
        <div class="col">
            <h5>MODULE 1:  REPROGRAMMER SA RELATION À L'ARGENT</h5>
            <p class="text-white">
                1. Ton Empreinte Financière (8min)
                2. Polarisation à l'Argent (12min)
                3. Valorisation et Importance de l'Argent (9min)
                4. Ton Entourage (12min)
                5. Les Habitudes (16min)
                6. La Méritocratie (13min)
                7. Une Commodité Limitée dans l'Infini (13min)
            </p>
    </div>
    </div>
    <div class="row py-5">

        <div class="col">
            <img src="https://static.wixstatic.com/media/faa724_a044cf53e9f040b2b5885a6a4f4f4e46~mv2.jpg/v1/crop/x_0,y_18,w_1280,h_684/fill/w_434,h_231,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/22.jpg" alt="">
        </div>
            <div class="col">
                <h5>MODULE 1:  REPROGRAMMER SA RELATION À L'ARGENT</h5>
                <p class="text-white">
                    1. Ton Empreinte Financière (8min)
                    2. Polarisation à l'Argent (12min)
                    3. Valorisation et Importance de l'Argent (9min)
                    4. Ton Entourage (12min)
                    5. Les Habitudes (16min)
                    6. La Méritocratie (13min)
                    7. Une Commodité Limitée dans l'Infini (13min)
                </p>
        </div>

    </div>
    <form action="{{url('/service')}}" method="get">
        @csrf
        <button class="btn btn-info " >preinscription >></button>
    </form>
  
</div>


@endsection