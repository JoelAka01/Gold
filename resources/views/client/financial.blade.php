@extends('client_layout.master')
@section('title')
financial
@endsection

@section('content')

<div class="financial text-center text-white ">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h1>
                <span style="color:#F2CB05">GOLDSTREET</span>
                FINANCIAL
                </h1>
                <span>Le secret du succès financier !</span>
                <div>
                    <h3 style="color:#F2CB05" >
                        Si vous pouvez obtenir des autres qu’ils creusent eux-mêmes leur propre tombe, Pourquoi vous fatiguer ?
                    </h3>
                    <p style="color: #eceff0">
                        Apprends des stratégies pratiques éprouvées pour devenir un trader qui gagne régulièrement de l'argent sur le marché boursier en moins de 3 mois
                    </p>
                </div>
            </div>
            <div class="col">
                <video autoplay muted loop id="myVideo" style=" height:311px ">
                    <source src="https://video.wixstatic.com/video/faa724_d7c6be0112bb47a79c5e2eabb53772a9/1080p/mp4/file.mp4"   type="video/mp4">
                </video>
                <form action="{{url('/service')}}" method="get">
                    @csrf
                    <button style="background-color:#F2CB05 " class="btn " >inscription >></button>
                </form>
            </div>
        </div>
    </div>
    {{-- section, 2 --}}
    <div class="py-2 ">
        <div class="container "  >
            <div class="row">
                <div class="col-lg-6">
                    <div class="d-flex justify-content-center " >
                        <img  style="height:311px"  src="{{ asset('frontend/css/A.png')}}"/>       
                    </div>
                    <div >
                        <h3 style="color:#F2CB05"> Connaissez-vous le secret de la réussite du vautour qui obtient toujours la meilleure part ? </h3>
                        <p style="color: #eceff0">
                            Cette formation vous offre l'opportunité de vous démarquer en utilisant des stratégies simples et éprouvées. 
                            En développant vos compétences,
                             vous serez en mesure de prendre des décisions éclairées et d'adopter une approche gagnante, vous démarquant ainsi de la masse
                        </p>
                    </div>
                </div>
                <div class="col" >

                    <div class="row " >
                        <div class="container" style="height:130px">
                        </div>
                        <h1 >Outils a utiliser</h1>

                        <div class="col">
                            <img style="height:130px" class="m-2" src="{{ asset('frontend/css/graph.jpg')}}"/>
                            <img style="height:130px" width="280px" src="{{ asset('frontend/css/graph2.jpg')}}"/>
                        </div>
                        <div class="col ">
                            <img style="height:130px" width="280px" class="m-2" src="{{ asset('frontend/css/graph3.jpg')}}"/>
                            <img style="height:130px" width="280px" src="{{ asset('frontend/css/graph4.jpg')}}"/>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


<div style="background-color:#242323 " class="text-center " >
    <div class="container"  >
        <h1 > 
            Le curriculum du programme
        </h1>
        <h4>Investissement Long Terme Passif / Finance Personnelle / Compréhension du Monde Financier</h4>
        {{-- start --}}
        <div class="row text-center my-3">
            <div class="col-lg-6">
                <img style="height:100% ;  box-shadow: 0px 5px 10px 0px rgba(0, 0, 0, 0.5)" class="rounded " src="{{ asset('frontend/css/1.png')}}" alt="">
            </div>
            <div class="col">
                <h5>MODULE 1: Comprendre et gérer les comptes de trading</h5>
                <p class="text-white">
                    •	Processus d'ouverture et de gestion des comptes
                    <br>
                    •	Utiliser l'analyse fondamentale
                    <br>
                    •	Calculateur de positionnement pour déterminer les tailles de position
                    <br>
                    •	Suivi des performances dans le trading
                    <br>

                    •	Conseils et expériences personnelles dans la finance
                    <br>
                    •	Gestion de la psychologie durant les périodes de pertes
                    
                </p>
            </div>
        </div>
        <div class="row my-3">
                <div class="col-lg-6">
                    <img  style="width: 100%  ;height:100%" src="https://image.lexica.art/full_jpg/f2a19d22-674f-4dcc-8260-e21dfffe97c5" alt="">
                </div>
                <div class="col">
                        <h5>Module 2 : Analyse approfondie du marché et outils de trading</h5>
                        <p class="text-white">
                            •	Compréhension approfondie du marché
                            <br>
                            •	Analyse approfondie de l'analyse technique et fondamentale
                            <br>

                            •	Les plateformes et logiciels préférés des traders professionnels
                            <br>

                            •	Mon plan de trading personnel et mes critères d'entrée
                            <br>

                            •	Outils et fiches Excel personnelles à télécharger et utiliser
                            
                        </p>
                </div>
        </div>

        <div class="row my-3">

            <div class="col-lg-6">
                <img style="width: 100%  ;height:100%" src="https://image.lexica.art/full_jpg/01a6f259-ac3d-4795-b801-3ec53e279273" alt="">
            </div>
                <div class="col">
                    <h5>Module 3 : Optimisation et suivi à vie</h5>
                    <p class="text-white">
                        •	Optimisation de la gestion des trades malgré un manque de temps disponible
                    <br>

                        •	Un suivi à vie par le groupe membre de traders privé
                    <br>

                        •	Outils et fiches Excel personnelles à télécharger et utiliser
                        
                    </p>
            </div>

        </div>

        <div class="row my-3">

            <div class="col-lg-6">
                <img style="width: 100%  ;height:100%" src="https://image.lexica.art/full_jpg/f7384334-ea72-4fef-915d-c8ed61893b2d" alt="">
            </div>
                <div class="col">
                    <h5>Module 3 : Optimisation et suivi à vie</h5>
                    <p class="text-white">
                        •	Optimisation de la gestion des trades malgré un manque de temps disponible
                    <br>

                        •	Un suivi à vie par le groupe membre de traders privé
                    <br>

                        •	Outils et fiches Excel personnelles à télécharger et utiliser
                        
                    </p>
            </div>

        </div>

        <form action="{{url('/service')}}" method="get">
            @csrf
            <button class="btn btn-info my-3" >preinscription >></button>
        </form>
    
</div>

<div class="container"  >
    <div class="d-flex justify-content-center " >
        <img src="{{ asset('frontend/css/mar.jpeg')}}"/>
    </div>
</div>
{{-- les avantages --}}
<div class="financial  ">

    <div class="container">
        <h1>avantages</h1>
        <div class="row">
            <div class="col-lg-6">
                <h6 style="color: #F2CB05">Un soutien complet pour atteindre rapidement vos objectifs de trading et transformer votre vie</h6>
                <p style="color: #eceff0">
                    formateur dédié, échanges directs, communauté solidaire. Changez votre vie en atteignant rapidement vos objectifs grâce à un soutien complet et une opportunité de réseautage précieuse.
                </p>
            </div>
            <div class="col">
                <img style="height: 60% ;width:60%" src="{{ asset('frontend/css/avantage2.jpeg')}}"/>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <h2 style="color: #F2CB05">Un soutien complet pour atteindre rapidement vos objectifs de trading et transformer votre vie</h2>
                <p style="color: #eceff0">
                    Nous serons là pour vous aider tout au long de votre parcours 
                    afin que vous puissiez atteindre vos objectifs le plus rapidement possible. Vous aurez un formateur qui vous accompagnera et avec qui vous pourrez communiquer directement par message. En plus de cela, vous pourrez rejoindre une communauté de traders qui sont unis et solidaires. Vous pourrez partager vos expériences avec eux,
                    poser vos questions et créer un réseau qui pourrait vraiment changer votre vie
                </p>
            </div>
            <div class="col">
                <img style="height: 60% ;width:60%" src="{{ asset('frontend/css/avantage2.jpeg')}}"/>
            </div>
        </div>
    </div>
</div>

@endsection