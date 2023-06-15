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
    
 
<div class=" text-justify"  style="background:#242323 ;color:#ffff; height:70% " >
    <div class="container " >
        <h2 class="text-center ">ABOUT</h2>          
        <h1 class="text-center my-5  ">Jean Laurel</h1>
        <p class="px-5  ">
            Je m&#39;appelle Jean, je suis un trader spécialisé dans les marchés financiers et un gestionnaire de portefeuille privé basé à
            Paris et Miami. Passionné par les marchés financiers, j&#39;aimerais partager mon expertise avec vous, en utilisant toute
            l&#39;expérience que j&#39;ai acquise depuis l&#39;âge de 13 ans. Ayant suivi des études en finance, j&#39;ai eu la chance d&#39;être encadré par
            des traders institutionnels, ce qui m&#39;a permis de développer une solide expérience et expertise dans ce domaine.
            Le trading est bien plus qu&#39;une simple passion pour moi, c&#39;est une véritable vocation. Grâce à mon expérience en tant
            que trader, j&#39;ai pu acquérir une compréhension approfondie des marchés financiers et des mécanismes économiques qui
            les influencent.
            Je suis fier de dire que je vis du trading en tant que source de revenus, ce qui me permet de mener un style de vie que je
            considérais auparavant comme inaccessible. Grâce à mon expertise et à mes stratégies éprouvées, j&#39;ai obtenu des
            résultats concrets et généré des gains significatifs pour moi-même et mes clients. Les chiffres parlent d&#39;eux-mêmes et
            témoignent de ma capacité à naviguer avec succès dans les marchés financiers.
            Mon approche pédagogique repose sur mes années d&#39;expérience, ma formation en finance et mon encadrement par des
            traders institutionnels. Je suis déterminé à offrir à mes étudiants des conseils et des stratégies qui sont fondés sur une
            analyse approfondie des marchés financiers et une compréhension précise des tendances économiques.
            Je souhaite partager avec vous non seulement mes connaissances et mes compétences en trading, mais aussi les
            histoires de succès de mes étudiants qui ont pu réaliser leurs rêves financiers grâce à mes conseils. Mon objectif est de
            vous guider vers le succès financier en vous fournissant des informations précises, des stratégies éprouvées et un soutien
            continu.
            En me basant sur mon expérience, mon expertise et mes résultats concrets, je suis convaincu que je peux vous aider à
            atteindre vos objectifs financiers. Rejoignez-moi dans cette aventure passionnante et ensemble, nous pourrons
            construire un avenir financier solide.
        </p>
    </div>
    <div class=" d-flex justify-content-center" >
        <a href="https://www.instagram.com/afro_french_touch/"><img src="https://static.wixstatic.com/media/40898a93cfff4578b1779073137eb1b4.png/v1/fill/w_53,h_53,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/40898a93cfff4578b1779073137eb1b4.png"></a>
        <a href="https://www.instagram.com/afro_french_touch/"><img src="https://static.wixstatic.com/media/aeb686ff41244d85bc1232fcf7325ec0.png/v1/fill/w_53,h_53,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/aeb686ff41244d85bc1232fcf7325ec0.png"></a>
        <a href="https://www.instagram.com/afro_french_touch/"><img src="https://static.wixstatic.com/media/a1fed5f687844a6e8f42e017f71dfcb4.png/v1/fill/w_53,h_53,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/a1fed5f687844a6e8f42e017f71dfcb4.png"></a>
    </div>
</div>   


<div class="container"  >
    <div class="d-flex justify-content-center " >
        <img style="width: 65%"   src="https://static.wixstatic.com/media/faa724_1ccccbc23d1944889ce83b7244399a91~mv2.png/v1/fill/w_642,h_36,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/Screenshot%202023-05-30%20at%2010_52_36.png"  />
    </div>
</div>



<div style="background: #2E2E2E;color:#ffff ">
    <div class="container" style="height:60% ;" >
        <h2 class="text-center  "> RETAIL SERVICES</h2>
        <div class="row  "  >

            <div class="col-lg-6 d-flex justify-content-center "   >
                
                <img src="https://static.wixstatic.com/media/faa724_f96390b9af4541cb825a7a965c8089df~mv2.png/v1/crop/x_12,y_0,w_324,h_287/fill/w_156,h_138,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/Screenshot_2020-09-04_at_09_21_edited_pn.png"/>
    
            </div>
            <div class="col " >
                <h1 >
                    GOLD STREET FINANCIAL
                </h1>
                <hr>
                <p>
                    Fruit d'une expertise accumulée au fil des années dans le domaine du trading, je puis affirmer sans réserve que les traders sont souvent influencés par l'effet social, reléguant ainsi la compréhension de l'analyse fondamentale au second plan.

                    L'essence même de cette formation réside dans le développement d'un sixième sens, d'une perception supérieure du marché financier, que je qualifie volontiers de vision audacieuse et novatrice.
                   Ces connaissances sont le fruit d'années d'études en école de commerce et d'une expérience auprès de traders institutionnels émérites.
                   À travers mes modules, je vous guiderai dans l'art de riposter avec finesse et de vous ériger en tant que prédateur avisé sur le marché financier.
                   
                </p>
                <form action="{{url('/financial')}}" method="get">
                    @csrf
                     <button class="btn btn-success" >en savoir plus >></button>
                </form>
            </div>
        </div>
    </div>
</div>

<div style="background:#242323 ;color:#ffff ">
    <div class="container"  >
        <div class="row  "  >
            <div class="col " >
                <img  src="https://static.wixstatic.com/media/faa724_2dd967b5832044e0a926c8756418a8c6~mv2.png/v1/crop/x_0,y_0,w_280,h_287/fill/w_136,h_135,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/image_PA-removebg-preview%20orngae.png"/>
                <h2> 
                    DATANALYSE
                    PRO service
                </h2>
                <hr>
                <p>
                    Données, recherches et prévisions de niveau institutionnel sur le marché du Forex, le tout en un seul abonnement. Le Datanalyse Pro Service vous donne l'opportunité de trader mes positions les plus rentables chaque semaine et de recevoir des informations techniques et fondamentales directes sur le marché du Forex.   
                </p>
                <form action="{{url('/financial')}}" method="get">
                    @csrf
                     <button class="btn btn-warning" >en savoir plus >></button>
                </form>
            </div>
            <div class="col-lg-6   "   >
                 <img style="width: 65%"  src="https://static.wixstatic.com/media/faa724_8fcb01c231314108b9a4a1559b781c7d~mv2.png/v1/crop/x_11,y_0,w_584,h_416/fill/w_495,h_350,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/Screenshot_2020-09-18_at_11_36_55-remove.png" class="w-10%">
            </div>

        </div>
    </div>
</div>
<div class="container"  >
    <div class="d-flex justify-content-center " >
        <img style="width: 65%"   src="https://static.wixstatic.com/media/faa724_1ccccbc23d1944889ce83b7244399a91~mv2.png/v1/fill/w_642,h_36,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/Screenshot%202023-05-30%20at%2010_52_36.png"  />
    </div>
</div>

<div  style="background:#242323 ;color:#ffff ">
    <div class="container">
        <div class="row  "  >
            <div class="d-flex  col justify-content-center   " >
                <img  src="https://static.wixstatic.com/media/faa724_e3376c4d181249899b676ee838fbd7bf~mv2.png/v1/crop/x_0,y_13,w_4100,h_7264/fill/w_324,h_574,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/IMG_1931_PNG.png"/>
            </div>
            <div class="col-lg-6 d-flex justify-content-center   "   >
                <img  src="https://static.wixstatic.com/media/faa724_b1a1813d05f549fea5b4fac08d18af19~mv2.png/v1/fill/w_325,h_574,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/IMG_1932_PNG.png">
            </div>
        </div>
    </div>
</div>

@endsection