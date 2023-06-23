@extends('client_layout.master')
@section('title')
financial
@endsection

@section('content')
{{-- FINANCIAL --}}

<div class="financial  ">
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
                <img style=" height:90% ;width:90%" src="{{ asset('frontend/css/images/graph2.jpg')}}"/>
            </div>
            <form action="{{url('/service')}}" method="get">
                @csrf
                <button  class="btn    " >RESERVATION </button>
            </form>
        </div>
    </div>
</div>
{{-- ABOUT --}}

<div class="about">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
            {{-- <img style="height:328px ;width:90%" src="{{ asset('frontend/css/images/devise.png')}}"/> --}}
            </div>
            <div class="col">
                <h4>CONNAISSEZ-VOUS LE SECRET DE LA RÉUSSITE DU VAUTOUR QUI OBTIENT TOUJOURS LA MEILLEURE PART ?</h4>
                <p>Cette formation vous offre l'opportunité de vous démarquer en utilisant des stratégies simples et éprouvées. En développant vos compétences,
                    vous serez en mesure de prendre des décisions éclairées et d'adopter une approche gagnante, vous démarquant ainsi de la masse</p>
            </div>
        </div>
    </div>
</div>
{{-- OUTILS --}}

<div class="outils">
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
                        <div class="col-lg-6">
                            <div class="d-flex justify-content-center align-items-center">
                                <img style="height:130px" class="my-2" width="280px" src="{{ asset('frontend/css/images/graph.png')}}"/>
                            </div>
                            <div class="d-flex justify-content-center align-items-center">
                                <img style="height:130px" class="my-2" width="280px" src="{{ asset('frontend/css/images/graph.png')}}"/>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex justify-content-center align-items-center">
                                <img style="height:130px" class="my-2" width="280px" src="{{ asset('frontend/css/images/graph.png')}}"/>
                            </div>
                            <div class="d-flex justify-content-center align-items-center">
                                <img style="height:130px" class="my-2" width="280px" src="{{ asset('frontend/css/images/graph.png')}}"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>

{{-- MODULES --}}

<div class="module">
    <div class="container">
        <h1 style="margin-bottom: 38px; color:black">LE CURRICULUM DU PROGRAMME</h1>
        <div class="row module">
            <div class="col-lg-6">
                <div class="d-flex justify-content-center align-items-center">
                    <img style=" height:90% ;width:90%" src="{{ asset('frontend/css/images/img.png')}}" />
                </div>
            </div>
            <div class="col">
                <h4>MODULE 1: COMPRENDRE ET GÉRER
                    LES COMPTES DE TRADING
                </h4>
                <ul>   
                    <li>
                        Processus d'ouverture et de gestion des comptes
                    </li>
                    <li>
                        Utiliser l'analyse fondamentale
                    </li>

                    <li>
                        Calculateur de positionnement pour déterminer les tailles de position
                    </li>

                    <li>
                        Suivi des performances dans le trading
                    </li>

                    <li>

                        Conseils et expériences personnelles dans la finance
                    </li>

                    <li>
                        Gestion de la psychologie durant les périodes de pertes
                    </li>

                </ul>
            </div>
        </div>
        <div class="row module">
            <div class="col-lg-6">
                <div class="d-flex justify-content-center align-items-center">
                    <img style=" height:90% ;width:90%" src="{{ asset('frontend/css/images/img.png')}}" />
                </div>
            </div>
            <div class="col">
                <h4>
                    Module 2 : Analyse approfondie du marché et outils de trading
                </h4>
                <ul>   
                    <li>
                        Compréhension approfondie du marché
                    </li>

                    <li>
                        Analyse approfondie de l'analyse technique et fondamentale
                    </li>

                    <li>
                        Les plateformes et logiciels préférés des traders professionnels
                    </li>

                    <li>
                        Mon plan de trading personnel et mes critères d'entrée
                    </li>

                    <li>
                	    Outils et fiches Excel personnelles à télécharger et utiliser    
                    </li>
                </ul>
            </div>
        </div>
        <div class="row module">
            <div class="col-lg-6">
                <div class="d-flex justify-content-center align-items-center">
                    <img style=" height:90% ;width:90%" src="{{ asset('frontend/css/images/img.png')}}" />
                </div>
            </div>
            <div class="col">
                <h4>
                    Module 3 : Optimisation et suivi à vie
                </h4>
                <ul>   
                    <li>
                        Optimisation de la gestion des trades malgré un manque de temps disponible
                    </li>

                    <li>
                        Un suivi à vie par le groupe membre de traders privé
                    </li>

                    <li>
                        Outils et fiches Excel personnelles à télécharger et utiliser
                    </li>
                </ul>
            </div>
        </div>
        <div class="row module">
            <div class="col-lg-6">
                <div class="d-flex justify-content-center align-items-center">
                    <img style=" height:90% ;width:90%" src="{{ asset('frontend/css/images/img.png')}}" />
                </div>
            </div>
            <div class="col">
                <h4>
                    Module 4 : Contrattaquer (ce module est déconseillé aux professionnelles de la finance)                </h4>
                <ul>   
                    <li>
                        La manipulation du marché
                    </li>

                    <li>
                        Être un vautour sur le march  
                    </li>

                    <li>
                        Les indicateurs clés pour comprendre la manipulation du marché
                    </li>
                    <li>
                        L'effet inverse et comment se positionner
                    </li>                   
                    <li>
                        Effets saisonniers et cycles de marché
                    </li>
                    <li>
                        La fin du mois et le début du mois
                    </li>
                    <li>
                        La notion de "priced"
                    </li>
                    <li>
                        Techniques pour identifier la manipulation du marché
                    </li>
                    <li>
                        Stratégies pour profiter de l'effet inverse
                    </li>
                    <li>
                        Approches pour tirer parti des phénomènes temporels
                    </li>
                    <li>
                        Gestion des risques associés à la        
                    </li>
                </ul>
            </div>
        </div>
    </div>


</div>

{{-- AVANTAGES --}}

<div class="avantages">
    <div class="container">
        <h1>LES AVANTAGES</h1>
        <div class="row">
            <div class="col">
                <div class="d-flex justify-content-center my-2 " >
                    <div class="card "  >
                        <img  src="{{ asset('frontend/css/images/avantage2.jpeg')}}" class="card-img-top" alt="...">
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
                        <img  src="{{ asset('frontend/css/images/avantage2.jpeg')}}" class="card-img-top" alt="...">
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
                        <img  src="{{ asset('frontend/css/images/avantage2.jpeg')}}" class="card-img-top" alt="...">
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

{{-- PRIX --}}

<div class="prix">
    <div class="container">
        <div class="row">
            <div class="col">
                <img src="{{ asset('frontend/css/images/logo.png')}}"   style="width:350px ;268px" alt="logo"/>
                <ul>
                    <li>
                        Accès à vie et illimité au programme
                    </li>
                    <li>
                        Plateforme disponible 24/24
                    </li>
                    <li>
                        Aucun paiement mensuel
                    </li>
                    <li>
                        Accès à toutes les futures mises à jour
                    </li>
                    <li>
                        Accès immédiat
                    </li>
                </ul>
            </div>
            <div class="col">
                <img style="width:341px ; heigth:267px" src="{{ asset('frontend/css/images/B.png')}}"/>
                <h1 >790$ >> 690$</h1>
                <p>La note importante à prendre en compte est que le prix augmentera progressivement.
                    Pour bénéficier de ce tarif, rejoignez la formation dès aujourd'hui</p>
            </div>
            {{-- button --}}
            <form action="{{url('/service')}}" method="get">
                @csrf
                <button  class="btn   mx-5  " >RESERVATION </button>
            </form>

        </div>
    </div>
</div>

{{-- FAQ --}}

<div class="faq">
    <div class="container">
        <h1 >FAQ</h1>
        <div class="row">
            <div class="col-lg-6">
                <h4>
                    Je suis salarié à temps plein et je n'ai pas le temps de trader. 
                    Est-il possible pour moi de suivre la formation ?
                </h4>
            </div>
            <div class="col">

                    <p>               
                        Absolument ! La formation est conçue pour s'adapter aux emplois du temps chargés. 
                        Vous pouvez suivre les modules de la formation à votre propre rythme, selon votre disponibilité. 
                        Vous aurez accès aux ressources de formation en ligne et pourrez les consulter lorsque vous aurez du temps libre.
                    </p>
    
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <h4>
                    Quelle somme de départ faut-il pour commencer le trading ?
                </h4>
            </div>
            <div class="col">

                    <p>               
                        Le montant de départ pour le trading peut varier en fonction de vos objectifs et de votre niveau de confort. Il est recommandé de commencer avec un capital que vous êtes prêt à investir sans compromettre vos besoins financiers essentiels. Il est important de gérer votre risque de manière responsable et de ne jamais investir plus que ce que vous pouvez vous permettre de perdre.
                    </p>
    
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <h4>
                    Dois-je être constamment sur mes graphiques ?

                </h4>
            </div>
            <div class="col">

                    <p>               
                        Non, vous n'êtes pas obligé d'être constamment devant vos graphiques. La formation vous apprendra à analyser les marchés et à identifier les opportunités de trading, mais vous apprendrez également à mettre en place des stratégies et des ordres automatiques. Cela vous permettra de gérer vos trades de manière efficace, même lorsque vous n'êtes pas constamment devant votre écran
                    </p>
    
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <h4>
                    Est-ce que je dois arrêter mon travail ou mes études parce que je n'aurai pas suffisamment de temps ?

                </h4>
            </div>
            <div class="col">

                    <p>               
                        Non, vous n'avez pas besoin d'arrêter votre travail ou vos études pour suivre la formation. Vous pouvez concilier votre emploi du temps actuel avec l'apprentissage du trading. La flexibilité de la formation vous permet de l'adapter à votre disponibilité. Cependant, assurez-vous de bien gérer votre temps et de consacrer des moments dédiés à l'apprentissage et à la pratique du trading.                    </p>
    
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <h4>
                    Combien de temps ai-je accès à la formation ?
                </h4>
            </div>
            <div class="col">

                    <p>               
                        La durée d'accès à la formation dépendra des conditions spécifiques de celle-ci. Généralement, vous aurez un accès continu aux ressources de formation pendant une période déterminée, par exemple, six mois ou un an. Cela vous permettra de revoir le contenu, de consulter les modules à votre rythme et de bénéficier de mises à jour régulières, si disponibles.
                    </p>    
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <h4>
                    Si je suis souvent en déplacement ou que je ne réside pas en France, est-ce que cela posera des difficultés ?               
                 </h4>
            </div>
            <div class="col">

                    <p>               
                        La formation en ligne offre une grande flexibilité géographique. Peu importe où vous vous trouvez, tant que vous avez accès à une connexion Internet, vous pouvez suivre la formation. Vous pourrez consulter les ressources de formation à partir de n'importe quel endroit, que vous soyez en déplacement ou que vous résidiez en dehors de la France. Assurez-vous simplement de disposer d'une connexion Internet stable pour accéder au contenu de la formation.
                    </p>    
            </div>
        </div>
    </div>


</div>
@endsection