@extends('client_layout.master')
@section('title')
home
@endsection

@section('content')
<!--Home-->

{{-- banner --}}

<section class="home text-center text-white">
    <div class="container">
        <div class="row align-items-center" >
            <div class="col">
            <h1 style="padding: 78px 0 17px 0px">
            <span style="background-color: #EBE789">GOLD</span> STREET 
            </h1>
            <p style="padding-bottom: 26px" >Le secret du succès financier !</p>
                <img style="max-width:100% ;height:400px" src="{{ asset('frontend/css/images/Mobile.png')}}" alt="Mobile"/>
            </div>
        </div>
    </div>
</section>    
    
<section class="session2">
    <div class=" text-justify"  >
        <h2 class="text-center ">ABOUT</h2>          
        <h1 class="text-center  ">Jean Laurel</h1>
        <p class=" text-center " >
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
</section>
  


<section class="container-fluid"  >
    <div class="d-flex justify-content-center " >
        <img style="width: 80% ;height:50%" src="{{ asset('frontend/css/images/barreHome.png')}}"/>
    </div>
</section>



<section class="Retail" >
    <div class="container"  >
        <h2  > RETAIL SERVICES</h2>
        <div class="row  "  >
            <div class="col-lg-6 "   >
                <div class="d-flex justify-content-center p-0  align-items-center">
                   <img   src="{{ asset('frontend/css/images/L.png')}}"/>
                </div>
                <p>
                    Fruit d'une expertise accumulée au fil des années dans le domaine du trading, je puis affirmer sans réserve que les traders sont souvent influencés par l'effet social, reléguant ainsi la compréhension de l'analyse fondamentale au second plan.

                    L'essence même de cette formation réside dans le développement d'un sixième sens, d'une perception supérieure du marché financier, que je qualifie volontiers de vision audacieuse et novatrice.
                   Ces connaissances sont le fruit d'années d'études en école de commerce et d'une expérience auprès de traders institutionnels émérites.
                   À travers mes modules, je vous guiderai dans l'art de riposter avec finesse et de vous ériger en tant que prédateur avisé sur le marché financier.
                   
                </p>
                {{-- <form action="{{url('/financial')}}" method="get">
                    @csrf
                     <button class="btn btn-default" >en savoir plus >></button>
                </form> --}}
            </div>
            <div class="col " >
                    <div   class="d-flex justify-content-center  align-items-center">
                        <img style="width:100%"  src="{{ asset('frontend/css/images/A .png')}}"/>
                        <hr>
                    </div>
            </div>
        </div>
    </div>
</section>

<section class="service" >
    <div class="container"  >
        <div class="row  "  >
            <div class="col-lg-6 "   >
                <img style="width: 100%"  src="https://s3-alpha-sig.figma.com/img/e4ee/9166/1dc12ed586e80a26e7b1cd6aafd27adc?Expires=1691971200&Signature=HUqHert-tW5Yt263JDI0xp3DoObyapRw--aW-hUIYTbk-MStEG~1NRms3LG~kjGmCUK0WKSuQOcC1D7OlY74zocknfStClIappcdrd0gskhHcaB7PH20Yz0wXBfcxY5DD2NNwPALq6BydLawp-6ICe8ycRx7reLQ9v-NQEjsnWzUe-CFHJ8zpQBt-FHchgtR~duwahvnx7tAsAprXu8s53rUkJTlzNHyyTou3B7fJogAAMop3av61qhQAHrcchfuJ~CdZxJwMB548YTh3ue1SBvo7bvSmZSTgUTSZUVRCJiUooT8bD7l3G5FWGlM7Q-Hj14FyqRHrv4KcETRb047lg__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4" class="w-10%">
            </div>

            <div class="col " >
                <img style="width:50%"  src="{{ asset('frontend/css/images/ampoule.png')}}"/>
                <p>
                    Ce service vous offre une vision d'ensemble de la situation économique d'un pays. Les données seront analysées de manière précise, vous permettant ainsi de trader les positions les plus rentables chaque semaine. De plus, cela se fait sans aucun engagement de votre part          
                </p>
                <form action="{{url('/service')}}" method="get">
                    @csrf
                     <button class="btn btn-default" >en savoir plus >></button>
                </form>
            </div>
        </div>
    </div>
</section>


<section class="reviews" style="margin-bottom: 20px;">
    <div class="container-fluid">
        <h2 class="text-center">REVIEWS</h2>
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                
                <div class="carousel-item active">
                    <div class="row justify-content-center mt-5">
                        <div class="col-lg-4 col-md-6">
                            <div class="card border-0">
                                <div class="card-body">
                                    <p class="lead text-uppercase">GOOD EXPERIENCE</p>
                                    <p>
                                        I am extremely satisfied with the trading course I've taken. The knowledge and tools I've acquired have enabled me to analyze market trends accurately and make informed decisions.
                                    </p>
                                    <h4>Melvin</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="card border-0">
                                <div class="card-body">
                                    <p class="lead text-uppercase">EXCELLENT TRAINING</p>
                                    <p>
                                        The trading course I attended has transformed my understanding of financial markets. I've learned effective strategies that have improved my trading results, allowing me to achieve more significant profits.
                                    </p>
                                    <h4>Faustine</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="card border-0">
                                <div class="card-body">
                                    <p class="lead text-uppercase">HIGHLY RECOMMENDED</p>
                                    <p>
                                        The trading course I took has revolutionized my comprehension of financial markets. I've gained valuable insights into trading strategies that have significantly enhanced my profitability.
                                    </p>
                                    <h4>Theo</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- You can add additional carousel items here with similar structure -->
                <div class="carousel-item ">
                    <div class="row justify-content-center mt-5">
                        <div class="col-lg-4 col-md-6">
                            <div class="card border-0">
                                <div class="card-body">
                                    <p class="lead text-uppercase">GOOD EXPERIENCE</p>
                                    <p>
                                        I am extremely satisfied with the trading course I've taken. The knowledge and tools I've acquired have enabled me to analyze market trends accurately and make informed decisions.
                                    </p>
                                    <h4>Melvin</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="card border-0">
                                <div class="card-body">
                                    <p class="lead text-uppercase">EXCELLENT TRAINING</p>
                                    <p>
                                        The trading course I attended has transformed my understanding of financial markets. I've learned effective strategies that have improved my trading results, allowing me to achieve more significant profits.
                                    </p>
                                    <h4>Faustine</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="card border-0">
                                <div class="card-body">
                                    <p class="lead text-uppercase">HIGHLY RECOMMENDED</p>
                                    <p>
                                        The trading course I took has revolutionized my comprehension of financial markets. I've gained valuable insights into trading strategies that have significantly enhanced my profitability.
                                    </p>
                                    <h4>Theo</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>

{{-- <div  >
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
</div> --}}
<section class="reviews2">
    <div class="container">
        <div class="row  "  >
            <div class="col " >
                <div   class="d-flex justify-content-center  align-items-center">
                    <img style="width:100%"  src="{{ asset('frontend/css/images/complet.png')}}"/>
                    <hr>
                </div>
            </div>
            <div class="col-lg-6 "   >
                <h3>
                    Si vous recherchez la formation
                    la plus complète sur le trading de l'or en France,
                    vous devriez considérer la formation proposée par 
                    Gold Street Financial.
                </h3>
                <p>
                    Cette formation en ligne est hautement appréciée 
                    grâce à son approche méthodique du trading sur le marché de l'or.
                    Avec de nombreux commentaires vérifiés, ce programme a aidé de nombreux traders particuliers
                    à développer leurs compétences et à atteindre un niveau institutionnel
                </p>
                <form action="{{url('/financial')}}" method="get">
                    @csrf
                    <button class="btn btn-default" >en savoir plus >></button>
                </form>
            </div>

        </div>
    </div>
</section>
@endsection