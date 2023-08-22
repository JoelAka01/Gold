@extends('client_layout.master')
@section('title')
SERVICE
@endsection

@section('content')
<div class="data ">
<section class="datanalyse p-0 text-center text-white " >
    <div class="container">
        <div class="row align-items-center" >
            <div class="col">
                <img style="height:295px ;width:254px" src="{{ asset('frontend/css/images/ampouleDatanalyse.png')}}"/>

                <h1 >
                    GOLDSTREET
                    <span style="color:#D9D9D9">DATANALYSE </span>
                </h1>
                <p >
                    PROPULSE TES RÉSULTATS EN TRADING FOREX AVEC DES INFOS, DATAS ET RECHERCHES PROFESSIONNELS JOURNALIÈRES
    
                </p>
                <a href="#plans" style="background-color: #B5DDDA" class="btn btn-outline-dark  px-4 py-2">
                 REJOINDRE
                </a>
            </div>
        </div>
    </div>

</section>


{{-- ANNALYSE --}}
<section class="analyse "  >
    <div class="container ">
        <h3>RAPPORT FONDAMENTAL JOURNALIER</h3>
        <div class="row ">
            <div class="col-lg-4 ">
                <div class="journalier">
                    <h4>ANALYSE JOURNALIER SUR LES MATIERES PREMIERES</h4>
                    <p>Découvrez les avantages inestimables de ma formation qui vous permettra d'exploiter au maximum les opportunités lucratives du marché des matières premières. 
                        En vous appuyant sur mes analyses expertes, vous serez en mesure de prendre des décisions éclairées et d'optimiser vos investissements. Ne manquez pas cette occasion unique de booster 
                        vos résultats et de réaliser des profits significatifs grâce à ma formation exceptionnelle.
                    </p>
                </div>
                <div class="rapport">
                    <h4>RAPPORT FONDAMENTALE JOURNALIER</h4>
                    <p>
                        Nous vous offrons un rapport fondamental inestimable qui vous permettra d'avoir une vision complète et approfondie du marché. Il est basé sur une analyse minutieuse des événements majeurs, tels que les réunions du FOMC et les actualités les plus impactantes. Ne manquez pas cette occasion de bénéficier d'un avantage stratégique et de rester en avance sur vos concurrents.
                    </p>
                </div>
            </div>
            <div class="col text-center ">
                <div class="d-flex justify-content-center align-items-center">
                    <img  src="{{ asset('frontend/css/images/datanalyse1.png')}}"/>
                </div>
                <div style="text-center ">
                    <a href="#plans">
                        <button  class="btn" >EN SAVOIR PLUS>> </button>
                    </a>   
                </div>
    
            </div>
        </div>
    </div>
</section>



<section class="fondamental ">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col my-2">
                <div class="d-flex  align-items-center">
                    <div class="card">
                        <img   src="{{ asset('frontend/css/images/tweedeck.png')}}"/>
                        <div class="card-body">
                            <h4 class="card-title">Rapport Fondamentale Avant annonce du taux d’intérêt USD :</h4>
                            <p class="card-text">
                                Selon les prévisions, une augmentation du taux d'intérêt est anticipée. Cependant, avant même cette annonce, on observe une rupture de résistance sur les obligations à long terme dans l'analyse quotidienne. Cela suggère que l'or est susceptible de connaître une baisse, car il est inversement corrélé aux taux d'intérêt.                        
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col my-2">
                <div class="d-flex   align-items-center">
                    <div class="card "  >
                        <img   src="{{ asset('frontend/css/images/tweedeck.png')}}"/>
                        <div class="card-body">
                        <h4 class="card-title">Rapport Fondamentale Inflation Notion Priced :</h3>
                        <p  class="card-text">
                            Quelques jours avant l'annonce de la baisse du CPI, une tendance à la baisse du dollar se manifeste. 
                            Le jour de l'annonce, on observe une augmentation soudaine du dollar, ce qui suggère que le marché avait déjà anticipé cette nouvelle et ajusté les prix en conséquence. . En restant attentif à ces mouvements prédictifs, vous serez en mesure de prendre des décisions éclairées dans vos activités de trading ou d'investissement.   
                        </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
{{-- IDEES DE TRADERS --}}
<section class="idees ">
    <div class="container">
        <div class="row">
            <h3>IDEES DE TRADES CHARTISTES:</h3>
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row align-items-center justify-content-center mt-5">
                            <div class="col-md-6 col-12">
                                <div class="d-flex justify-content-center my-4 align-items-center">
                                    <img src="https://img.freepik.com/photos-gratuite/ecran-montrant-donnees-crise-financiere-cause-du-coronavirus_181624-59374.jpg?size=626&ext=jpg&ga=GA1.1.1667228577.1684525808&semt=sph" alt="">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="d-flex justify-content-center my-4 align-items-center">
                                    <img src="https://img.freepik.com/photos-gratuite/ecran-montrant-donnees-crise-financiere-cause-du-coronavirus_181624-59374.jpg?size=626&ext=jpg&ga=GA1.1.1667228577.1684525808&semt=sph" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row align-items-center justify-content-center mt-5">
                            <div class="col-md-6 col-12">
                                <div class="d-flex justify-content-center my-4 align-items-center">
                                    <img src="https://img.freepik.com/photos-gratuite/ecran-montrant-donnees-crise-financiere-cause-du-coronavirus_181624-59374.jpg?size=626&ext=jpg&ga=GA1.1.1667228577.1684525808&semt=sph" alt="">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="d-flex justify-content-center my-4 align-items-center">
                                    <img src="https://img.freepik.com/photos-gratuite/ecran-montrant-donnees-crise-financiere-cause-du-coronavirus_181624-59374.jpg?size=626&ext=jpg&ga=GA1.1.1667228577.1684525808&semt=sph" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon position-absolute start-0" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon position-absolute end-0" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</section>
<section class="fondamental1 ">
    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-lg-3 my-2">

                <div class="d-flex justify-content-center align-items-center">
                        <div class="card">
                            <img   src="{{ asset('frontend/css/images/tweedeck.png')}}"/>
                            <div class="card-body">
                            <h3 class="card-title">Corrélation</h3>
                            <p class="card-text">
                                Nous fournissons des analyses sur l'or basées sur les corrélations avec les indices boursiers. Cela nous permet d'évaluer les relations entre l'or et les marchés boursiers, ce qui peut nous aider à prendre des décisions de positionnement sur l'or                        </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 my-2">
                <div class="d-flex justify-content-center   align-items-center">
                    <div class="card "  >
                        <img   src="{{ asset('frontend/css/images/tweedeck.png')}}"/>
                        <div class="card-body">
                        <h3 class="card-title">Volatilités</h3>
                        <p  class="card-text">
                            Nous fournissons la volatilité de l'or et de nombreux indices de marché majeurs dans diverses classes d'actifs pour mettre en évidence la façon dont il se compare à ces actifs sur divers horizons temporels et conditions de marché. Cet outil dynamique permet aux investisseurs d'analyser historiquement la volatilité de l'or et de la comparer à celle des principaux actifs sur différents marchés  
                        </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 my-2">
                <div class="d-flex justify-content-center   align-items-center">
                    <div class="card "  >
                        <img   src="{{ asset('frontend/css/images/tweedeck.png')}}"/>
                        <div class="card-body">
                        <h3 class="card-title">COT</h3>
                        <p  class="card-text">
                            Les gestionnaires de portefeuille sont actuellement engagés dans des achats d'or depuis le 11/04/2022. Cette décision stratégique témoigne de leur confiance dans le potentiel de l'or en tant qu'actif précieux et refuge
                        </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="assistance hidden">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <img src="{{ asset('frontend/css/images/ampoule.png')}}"  />
                <ul >
                    <li>Suivi et assistance personnalisés pour maximiser vos résultats</li>
                    <li>Accès à des outils et des indicateurs professionnels pour affiner vos analyses</li>
                    <li>Stratégies d'investissement basées sur des modèles éprouvés</li>
                    <li>Sans engagement, vous avez la liberté de choisir</li>
                    <li>Analyses techniques avancées pour identifier les tendances du marché</li>

                </ul>
            </div>
            <div class="col text-center " >
                <div class="d-flex justify-content-center align-items-center">
                      <img  src="{{ asset('frontend/css/images/desk1.png')}}"/>
                      
                </div>
                <a href="#plans" style="background-color: none; width:100%" >
                    <button  class="btn  " style="">Rejoindre>> </button>
                </a>
            </div>
        </div>
    </div>
</section>
<section id="plans " class="plans">
    <div class="container">
        <a href="https://t.me/GoldStreetDatanalyseBot">
            <div class="row">
                <img src="{{ asset('frontend/css/images/PLANS.png')}}"/>
            </div>
        </a>
    </div>
</section>

{{-- <div style="background-color:#D9D9D9 " >
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
    <button type="button" class="btn btn-block btn-lg " style="background-color:  ; margin: auto; display: block;"> REJOINDRE </button>
    </div>
</div> --}}
<div class="question ">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="d-flex justify-content-center  align-items-center">
                    <div class="card2 "   >
                        <div class="d-flex justify-content-center align-items-center">
                            <img  style="width:178px ; height:178px" src="{{ asset('https://s3-alpha-sig.figma.com/img/392f/29a4/fc55349cf7b55f2035ef462a7f1da0c8?Expires=1692576000&Signature=laCH7JO3n-rpPP~Q7WImLXRr8Jr9vq9uJeWk1iBMNuleqU1PMFw4SHK5HsJaEUNfbFvR2Gd1BIU0MD876DUW~BCGrBo4EFg4Xr6p1ZF3eP4wsteeLv-~VwFgHJ4nECfv-JTgcH9GS6S7gIf8MGSoySARoVnrMbfweLCndl9kmQ46CKuSZ93SAhTk1ocHqT6kNB2idFVd6b4EcV7XsrqGoV3lrBUVwx4Fh2pCc07wYHK~6MXPooteXKuekYnkj7W8fgHTIaYgDKMMLSCYpR4BI3inz6hc4yrX02dzVvgo3oUX1mIyBNbXT-9qzTsGs8WutuT2aFdZa0ClJTyyKT2GmA__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4')}}" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                j’ai approfondie des marchés financiers et des stratégies de trading efficaces. 
                                Grâce à cela, j'ai pu améliorer mes résultats de trading et réaliser des profits plus significatifs. 
                                Je recommande vivement cette formation à tous ceux qui souhaitent développer leurs compétences en trading." - Anne
                            </p>
                            <div class="d-flex justify-content-center align-items-center">
                                <a href="https://t.me/GoldStreetDatanalyseBot">
                                    <button  class="btn" >EN SAVOIR PLUS </button>
                                </a> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="d-flex justify-content-center  align-items-center">
                    <div class="card2 "   >
                        <div class="d-flex justify-content-center align-items-center">
                            <img  style="width:178px ; height:178px" src="{{ asset('https://s3-alpha-sig.figma.com/img/3f26/ef10/bbb3d23104e1c99ae6f9c9c4b710c93a?Expires=1692576000&Signature=jzyxq5eqBcuJqFhDGzQNB4mrB~bgrsBLZdEVvtlJlCHNwiwiQ-XVkxVy8l1LH-UYYyIQvFQlUZHZdiI1gtc0SiDYgPCZRLWMLDe369tFAa5QE8HADITGqILi5qXwZUnh0araGJxMmcmsUvkUawUAE7fEJ2kItRSsgKoiFsx97q0FEBmT7uYCvk2so4qqczJ3q~aW4Y9L4t59-ywm1KuzptNYJJ53qgJ8cZdiKt70RqZ3dgdZevPrFdcHJ9~kYr7Fx13tgr4nzcwR9LNaJHUoc7vvajvxT2Ls1x3zIu~jb-mHxjmU~3y7MMS7bI~tuHl20ehaVGfnfJOmDGRRXzjkTQ__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4')}}" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                Grâce à la formation de Gold Street Financial, j'ai pu maîtriser les subtilités des marchés de l'or et développer des stratégies de trading efficaces. Cela m'a permis d'obtenir des résultats plus cohérents et d'accroître mes gains en trading de l'or. Je recommande vivement cette formation à tous ceux qui veulent se perfectionner dans ce domaine." - Sophie
                            </p>
                            <div class="d-flex justify-content-center align-items-center">
                                <a href="https://t.me/GoldStreetDatanalyseBot">
                                    <button  class="btn" >EN SAVOIR PLUS </button>
                                </a> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="d-flex justify-content-center  align-items-center">
                    <div class="card2 "   >
                        <div class="d-flex justify-content-center align-items-center">
                            <img  style="width:178px " src="https://s3-alpha-sig.figma.com/img/b93b/1f42/a3ee7acf3c685805fb7a4acab9db8e95?Expires=1692576000&Signature=FG1duP7CV2YmE1QqNTnR~1lMOV0~nfsY0MzVnV~LPS7vnv6LdKW41DVgj42uC8-Wly8zOBe1Skacdt5v~OzHS3vpXwU5Bbrd8DLN5j~nnfmzEw4fSDHUV5pPqFSs8NcnsiDhjoQJTZZU08gUufi8UvjFA-7KqufUIPFZoD6THSKw4ZV1cb8NauGgW5yQcjvu0-h~B8S0IUPAwx07yKXpUlFT8BznHCAubT1Ajau9uPk6JF8Cl7QN1nBgZ57A4heaxzvE2pisxcH3ZGtqI2I5sUwr0UooeuKYOr1XXuprZkLqE9zyCb521DKlr8-ruC17iLINnL8Xb46jv520yZNjEg__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                La formation de Gold Street Financial m'a donné une perspective approfondie sur le trading de l'or. J'ai appris des techniques précieuses pour analyser les tendances du marché et prendre des décisions de trading rentables. Depuis que j'ai suivi cette formation, mes résultats ont connu une nette amélioration et je me sens beaucoup plus confiant dans mes décisions de trading
                            </p>
                            <div class="d-flex justify-content-center align-items-center">
                                <a href="https://t.me/GoldStreetDatanalyseBot">
                                    <button  class="btn" >EN SAVOIR PLUS </button>
                                </a> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h2>questions</h2>
        <div class="row">
            <h4>
                Ce système est-il un signaux e trading ?
            </h4>
            <p>
                Ce service n'est pas recommandé pour les débutants car il nécessite une certaine connaissance préalable du trading. Les analyses complexes et les positions prises peuvent être difficiles à comprendre pour les novices. Il est plutôt conçu pour les personnes ayant déjà des connaissances en trading, leur permettant ainsi d'approfondir leurs compétences d'analyse et de prendre des décisions plus éclairées.
            </p>
            <h4>
                Y a-t-il une période d'essai ou une garantie de satisfaction offerte ?            </h4>
            <p>
                Ce service n'est pas recommandé pour les débutants car il nécessite une certaine connaissance préalable du trading. Les analyses complexes et les positions prises peuvent être difficiles à comprendre pour les novices. Il est plutôt conçu pour les personnes ayant déjà des connaissances en trading, leur permettant ainsi d'approfondir leurs compétences d'analyse et de prendre des décisions plus éclairées.            </p>
            <h4>
                Quelle est la méthode de livraison des signaux de trading (par e-mail, SMS, application mobile, etc.) ?            </h4>
            <p>
                Ce service n'est pas recommandé pour les débutants car il nécessite une certaine connaissance préalable du trading. Les analyses complexes et les positions prises peuvent être difficiles à comprendre pour les novices. Il est plutôt conçu pour les personnes ayant déjà des connaissances en trading, leur permettant ainsi d'approfondir leurs compétences d'analyse et de prendre des décisions plus éclairées.
            </p>
            <h4>
                À quelle heure les recherches seront-elles disponibles pour moi
            </h4>
            <p>
                Ce service n'est pas recommandé pour les débutants car il nécessite une certaine connaissance préalable du trading. Les analyses complexes et les positions prises peuvent être difficiles à comprendre pour les novices. Il est plutôt conçu pour les personnes ayant déjà des connaissances en trading, leur permettant ainsi d'approfondir leurs compétences d'analyse et de prendre des décisions plus éclairées.
            </p>
        </div>
    </div>
</div>



@endsection
