@extends('client_layout.master')
@section('title')
financial
@endsection

@section('content')

<div class="financial   ">
    <div class="container-fluid">
        <div class="row ">
            
            <div class="col-lg-6">
                <h1>
                    <span style="color:#F2CB05">GOLD</span>
                    STREETFINANCIAL
                </h1>
                <p>Le secret du succès financier !</p>
                
                <h3 style="color:#89856E" >
                    Si vous pouvez obtenir des autres qu’ils creusent eux-mêmes leur propre tombe, Pourquoi vous fatiguer ?
                </h3>
                <p style="color: #eceff0">
                    Apprends des stratégies pratiques éprouvées pour devenir un trader qui gagne régulièrement de l'argent sur le marché boursier en moins de 3 mois
                </p>     
            </div>
            <div class="col">
                <img style=" height:90% ;width:90%" src="{{ asset('frontend/css/graph2.jpg')}}"/>
            </div>
            <form action="{{url('/service')}}" method="get">
                @csrf
                <button style="background: #F2CB05;color:#000000" class="btn   mx-5  " >RESERVATION </button>
            </form>
        </div>
    </div>
</div>

<div class="session2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
            <img style="height:328px ;width:90%" src="{{ asset('frontend/css/devise.png')}}"/>
            </div>
            <div class="col">
                <h4>CONNAISSEZ-VOUS LE SECRET DE LA RÉUSSITE DU VAUTOUR QUI OBTIENT TOUJOURS LA MEILLEURE PART ?</h4>
                <p>Cette formation vous offre l'opportunité de vous démarquer en utilisant des stratégies simples et éprouvées. En développant vos compétences,
                    vous serez en mesure de prendre des décisions éclairées et d'adopter une approche gagnante, vous démarquant ainsi de la masse</p>
            </div>
        </div>
    </div>
</div>
<div class="session3">
    <div class="py-2 ">
        <div class="container "  >
            <div class="row my-4">
                <div class="col-lg-6">
                    <div class="text-center align-middle">
                        <h3>Outils <span style="color:#F2CB05">à utiliser</span></h3>
                    </div>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col">
                            <div class="d-flex justify-content-center align-items-center" style="height:130px">
                                <img style="height:130px" class="my-2" width="280px" src="{{ asset('frontend/css/graph.png')}}"/>
                            </div>
                            <div class="d-flex justify-content-center align-items-center" style="height:130px">
                                <img style="height:130px" width="280px" src="{{ asset('frontend/css/graph.png')}}"/>
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-flex justify-content-center align-items-center" style="height:130px">
                                <img style="height:130px" width="280px" class="my-2" src="{{ asset('frontend/css/graph.png')}}"/>
                            </div>
                            <div class="d-flex justify-content-center align-items-center" style="height:130px">
                                <img style="height:130px" width="280px" src="{{ asset('frontend/css/graph.png')}}"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
<div class="module">
    <div class="container">
        <h1 style="margin-bottom: 38px; color:black">LE CURRICULUM DU PROGRAMME</h1>
        <div class="row module">
            <div class="col-lg-6">
                <div class="d-flex justify-content-center align-items-center">
                    <img style=" height:90% ;width:90%" src="{{ asset('frontend/css/img.png')}}" />
                </div>
            </div>
            <div class="col">
                <h4>MODULE 1: COMPRENDRE ET GÉRER
                    LES COMPTES DE TRADING</h4>
                    <p>               
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
        <div class="row module">
            <div class="col-lg-6">
                <div class="d-flex justify-content-center align-items-center">
                    <img style=" height:90% ;width:90%" src="{{ asset('frontend/css/img.png')}}" />
                </div>
            </div>
            <div class="col">
                <h4>MODULE 1: COMPRENDRE ET GÉRER
                    LES COMPTES DE TRADING</h4>
                    <p>               
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
        <div class="row module">
            <div class="col-lg-6">
                <div class="d-flex justify-content-center align-items-center">
                    <img style=" height:90% ;width:90%" src="{{ asset('frontend/css/img.png')}}" />
                </div>
            </div>
            <div class="col">
                <h4>MODULE 1: COMPRENDRE ET GÉRER
                    LES COMPTES DE TRADING</h4>
                    <p>               
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
    </div>


</div>
<div class="session4">
    <div class="container">
        <h1>LES AVANTAGES</h1>
        <div class="row">
            <div class="col">
                <div class="d-flex justify-content-center my-2 " >
                    <div class="card "  >
                        <img  src="{{ asset('frontend/css/avantage2.jpeg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h3 class="card-title">UN SOUTIEN COMPLET POUR ATTEINDRE RAPIDEMENT VOS OBJECTIFS DE TRADING ET
                            TRANSFORMER VOTRE VIE</h3>
                        <p class="card-text">formateur dédié, échanges directs, communauté solidaire. Changez votre vie en atteignant rapidement vos
                            objectifs grâce à un soutien complet et une opportunité de réseautage précieuse.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="d-flex justify-content-center my-2 " >
                    <div class="card "  >
                        <img  src="{{ asset('frontend/css/avantage2.jpeg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h3 class="card-title">UN SOUTIEN COMPLET POUR ATTEINDRE RAPIDEMENT VOS OBJECTIFS DE TRADING ET
                            TRANSFORMER VOTRE VIE</h3>
                        <p class="card-text">formateur dédié, échanges directs, communauté solidaire. Changez votre vie en atteignant rapidement vos
                            objectifs grâce à un soutien complet et une opportunité de réseautage précieuse.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="d-flex justify-content-center my-2 " >
                    <div class="card "  >
                        <img  src="{{ asset('frontend/css/avantage2.jpeg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h3 class="card-title">UN SOUTIEN COMPLET POUR ATTEINDRE RAPIDEMENT VOS OBJECTIFS DE TRADING ET
                            TRANSFORMER VOTRE VIE</h3>
                        <p class="card-text">formateur dédié, échanges directs, communauté solidaire. Changez votre vie en atteignant rapidement vos
                            objectifs grâce à un soutien complet et une opportunité de réseautage précieuse.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="prix">
<div class="container">
    <div class="row">
        <div class="col">
            <img src="{{ asset('frontend/css/logo.png')}}"   style="width:350px ;268px" alt="logo"/>
            <ul>
                <li>
                    Accès à vie et illimité au programme

                </li>
                <li>
                    .Plateforme disponible 24/24
                </li>
                <li>
                    .Aucun paiement mensuel
                </li>
                <li>
                    .Accès à toutes les futures mises à jour
                </li>
                <li>
                    .Accès immédiat
                </li>
            </ul>
        </div>
    </div>
</div>
</div>
@endsection