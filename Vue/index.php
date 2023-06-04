<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jacques Battaglini</title>
    <!--  CSS Files  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/skins/color-1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!-- Style Switcher -->
    <link rel="stylesheet" href="css/skins/color-1.css" class="alternate-style" title="color-1" disabled>
    <link rel="stylesheet" href="css/skins/color-2.css" class="alternate-style" title="color-2" disabled>
    <link rel="stylesheet" href="css/skins/color-3.css" class="alternate-style" title="color-3" disabled>
    <link rel="stylesheet" href="css/skins/color-4.css" class="alternate-style" title="color-4" disabled>
    <link rel="stylesheet" href="css/skins/color-5.css" class="alternate-style" title="color-5" disabled>
    <link rel="stylesheet" href="css/style-switcher.css">
</head>

<body class="dark">
    <!--  Main Container Start  -->
    <div class="main-container">
        <!--  Aside Start  -->
        <div class="aside">
            <div class="logo">
                <a href="#"><span>J</span>acques</a>
            </div>
            <div class="nav-toggler">
                <span></span>
            </div>
            <ul class="nav">
                <li><a href="#home" class="active"><i class="fa fa-home"></i> Accueil</a></li>
                <li><a href="#about"><i class="fa fa-user"></i> Présentation</a></li>
                <li><a href="#portfolio"><i class="fa fa-briefcase"></i>Portfolio</a></li>
                <li><a href="#contact"><i class="fa fa-comments"></i>Contact</a></li>
                <li><a href="login.php"><i class="fa fa-laptop-code"></i>Backoffice</a></li>
            </ul>
        </div>
        <!--  Aside End  -->
        <!-- Main content Start -->
        <div class="main-content">
            <!-- Home Section Start -->
            <section class="home active section" id="home">
                <div class="container">
                    <div class="row">
                        <div class="home-info padd-15">
                            <h3 class="hello">Salut, je m'appelle <span class="name">Jacques Battaglini</span></h3>
                            <h3 class="my-profession">Je suis <span class="typing"></span></h3>
                            <p><?php 
                            require ('../Controleur/controleur.php');
                            get_description('Description');
                            ?></p>
                            <a href="<?php get_cv('CV'); ?>" class="btn">Télécharger mon CV</a>
                        </div>
                        <div class="home-img padd-15">
                            <?php get_image('Description'); ?>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Home Section End -->
            <!-- About Section Start -->
            <section class="about section" id="about">
                <div class="container">
                    <div class="row">
                        <div class="section-title padd-15">
                            <h2>A propos de moi</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="about-content padd-15">
                            <div class="row">
                                <div class="about-text padd-15">
                                    <h3>Je m'appelle Jacques Battaglini et je suis <span>un étudiant</span></h3>
                                    <p><?php get_description('Creations'); ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="personal-info padd-15">
                                    <div class="row">
                                        <div class="info-item padd-15">
                                            <p>Date de naissance : <span>8 Septembre 1994</span></p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>Age : <span>28 ans</span></p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>Email : <span>jacques.battaglini@hotmail.fr</span></p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>Tel : <span>0640243976</span></p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>Ville : <span>Bastia</span></p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>Disponibilité : <span>Immédiate</span></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="buttons padd-15">
                                            <a href="<?php get_cv('CV'); ?>" class="btn">Télécharger mon CV</a>
                                            <a href="#contact" data-section-index="1" class="btn contact">Contactez
                                                moi</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="skills padd-15">
                                    <div class="row">
                                        <div class="skill-item padd-15">
                                            <h5>HTML/CSS</h5>
                                            <div class="progress">
                                                <div class="progress-in" style="width: 50%;"></div>
                                                <div class="skill-percent">50%</div>
                                            </div>
                                        </div>
                                        <div class="skill-item padd-15">
                                            <h5>PHP</h5>
                                            <div class="progress">
                                                <div class="progress-in" style="width: 66%;"></div>
                                                <div class="skill-percent">66%</div>
                                            </div>
                                        </div>
                                        <div class="skill-item padd-15">
                                            <h5>Suite adobe</h5>
                                            <div class="progress">
                                                <div class="progress-in" style="width: 30%;"></div>
                                                <div class="skill-percent">30%</div>
                                            </div>
                                        </div>
                                        <div class="skill-item padd-15">
                                            <h5>Ecriture</h5>
                                            <div class="progress">
                                                <div class="progress-in" style="width: 60%;"></div>
                                                <div class="skill-percent">60%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="education padd-15">
                                    <h3 class="title">Scolarité</h3>
                                    <div class="row">
                                        <div class="timeline-box padd-15">
                                            <div class="timeline shadow-dark">
                                                <!-- timeline item -->
                                                <div class="timeline-item">
                                                    <div class="circle-dot"></div>
                                                    <h3 class="timeline-date">
                                                        <i class="fa fa-calendar"></i> 2012 - 2013
                                                    </h3>
                                                    <h4 class="timeline-title">Bac STI2D</h4>
                                                    <p class="timeline-text">Bacchalauréat Sciences et Technologies de
                                                        l'Industrie et du Développement Durable, option SIN (Système
                                                        d'Information et Numérique), à Bastia.</p>
                                                </div>
                                                <!-- timeline item -->
                                                <div class="timeline-item">
                                                    <div class="circle-dot"></div>
                                                    <h3 class="timeline-date">
                                                        <i class="fa fa-calendar"></i> 2013 - 2015
                                                    </h3>
                                                    <h4 class="timeline-title">BTS IRIS</h4>
                                                    <p class="timeline-text">BTS Informatique et Réseaux pour
                                                        l'Industrie et les Services, niveau Bac+2</p>
                                                </div>
                                                <!-- timeline item -->
                                                <div class="timeline-item">
                                                    <div class="circle-dot"></div>
                                                    <h3 class="timeline-date">
                                                        <i class="fa fa-calendar"></i> 2021 - 2024?
                                                    </h3>
                                                    <h4 class="timeline-title">BUT MMI</h4>
                                                    <p class="timeline-text">BUT Métiers du Multimédia et de l'Internet,
                                                        reprise des études qui dureront (normalement) 3 ans</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="experience padd-15">
                                    <h3 class="title">Expérience</h3>
                                    <div class="row">
                                        <div class="timeline-box padd-15">
                                            <div class="timeline shadow-dark">
                                                <!-- timeline item -->
                                                <div class="timeline-item">
                                                    <div class="circle-dot"></div>
                                                    <h3 class="timeline-date">
                                                        <i class="fa fa-calendar"></i> Déc - 2016
                                                    </h3>
                                                    <h4 class="timeline-title">Formation Installateur de réseaux câblés
                                                        de communications (module fibre optique)</h4>
                                                    <p class="timeline-text">Formation de deux mois a l'Afpa de Corte
                                                        consistant a apprendre le métier d'installateur de fibre
                                                        optique, du transport a la distribution chez les particuliers.
                                                    </p>
                                                </div>
                                                <!-- timeline item -->
                                                <div class="timeline-item">
                                                    <div class="circle-dot"></div>
                                                    <h3 class="timeline-date">
                                                        <i class="fa fa-calendar"></i> Août - 2017
                                                    </h3>
                                                    <h4 class="timeline-title">CDD de Technicien FTTH</h4>
                                                    <p class="timeline-text">CDD de 6 mois chez Grimaldi TPI en tant que
                                                        Technicien FTTH sur la Haute-Corse (installation de fibre
                                                        optique chez des particuliers/professionels).</p>
                                                </div>
                                                <!-- timeline item -->
                                                <div class="timeline-item">
                                                    <div class="circle-dot"></div>
                                                    <h3 class="timeline-date">
                                                        <i class="fa fa-calendar"></i> Juillet - 2020
                                                    </h3>
                                                    <h4 class="timeline-title">Piscine Ecole 42</h4>
                                                    <p class="timeline-text">Participation a une piscine de langage C et
                                                        Shell à l'école 42 à Paris pendant 1 mois.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- About Section End -->
            <!-- Portfolio Section Start -->
            <section class="portfolio section" id="portfolio">
                <div class="container">
                    <div class="row">
                        <div class="section-title padd-15">
                            <h2>Portfolio</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="portfolio-heading padd-15">
                            <h2>Mes SAE :</h2>
                        </div>
                    </div>
                    <div class="row">
                        <!-- portfolio item start -->
                        <div class="card mb-3" style="width: 18rem;">
                            <img class="card-img-top" src="Media/lavieestbelt_mini.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">SAE 101</h5>
                                <p class="card-text">Nous avons réalisé l'audit du site Lavieestbelt.fr, site de vente
                                    de ceintures crées à partir de pneus recyclés.</p>
                                <a href="#sae101" id="openSae101" class="btn btn-primary">En savoir plus</a>
                            </div>
                        </div>
                        <!-- portfolio item end -->
                        <!-- portfolio item start -->
                        <div class="card mb-3" style="width: 18rem;">
                            <img class="card-img-top" src="Media/carnaval_mini.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">SAE 102</h5>
                                <p class="card-text">Un article de presse destiné au web, sur le carnaval de Brando.</p>
                                <a href="#sae102" id="openSae102" class="btn btn-primary">En savoir plus</a>
                            </div>
                        </div>
                        <!-- portfolio item end -->
                        <!-- portfolio item start -->
                        <div class="card mb-3" style="width: 18rem;">
                            <img class="card-img-top" src="Media/affiche_mini.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">SAE 103</h5>
                                <p class="card-text">L'objectif de cette SAE était de créer une charte graphique
                                    complète pour le carnaval de Brando.</p>
                                <ul class="nav">
                                    <li><a href="#sae103" id="openSae103" class="btn btn-primary">En savoir plus</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- portfolio item end -->
                        <!-- portfolio item start -->
                        <div class="card mb-3" style="width: 18rem;">
                            <img class="card-img-top" src="Media/TMFEv4_mini.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">SAE 202</h5>
                                <p class="card-text">Faire un trailer pour le film The Man From Earth, ainsi que tous
                                    les éléments en prévision de sa "seconde sortie"</p>
                                <ul class="nav">
                                    <li><a href="#sae202" id="openSae202" class="btn btn-primary">En savoir plus</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- portfolio item end -->
                        <!-- portfolio item start -->
                        <div class="card mb-3" style="width: 18rem;">
                            <img class="card-img-top" src="Media/203_mini.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">SAE 203</h5>
                                <p class="card-text">Créer une interface de gestion pour alimenter un portfolio via une
                                    base de données.</p>
                                <ul class="nav">
                                    <li><a href="#sae203" id="openSae203" class="btn btn-primary">En savoir plus</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- portfolio item end -->
                        <!-- portfolio item start -->
                        <div class="card mb-3" style="width: 18rem;">
                            <img class="card-img-top" src="Media/presence_mini.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">SAE 204</h5>
                                <p class="card-text">Etablir et gérer sa présence en ligne en vue de se créer un réseau
                                    de contacts.</p>
                                <ul class="nav">
                                    <li><a href="#sae204" id="openSae204" class="btn btn-primary">En savoir plus</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- portfolio item end -->
                        <!-- portfolio item start -->
                        <div class="card mb-3" style="width: 18rem;">
                            <img class="card-img-top" src="Media/portfolio_mini.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">SAE 205</h5>
                                <p class="card-text">L'objectif de cette SAE était de créer une charte graphique
                                    complète pour le carnaval de Brando.</p>
                                <ul class="nav">
                                    <li><a href="#sae205" id="openSae205" class="btn btn-primary">En savoir plus</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- portfolio item end -->
                        <!-- portfolio item start -->
                        <div class="card mb-3" style="width: 18rem;">
                            <img class="card-img-top" src="Media/birbone_mini.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">SAE 301</h5>
                                <p class="card-text">Création du site internet Birbone, une marque de prêt a porter.</p>
                                <ul class="nav">
                                    <li><a href="#sae301" id="openSae301" class="btn btn-primary">En savoir plus</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- portfolio item end -->
                        <!-- portfolio item start -->
                        <div class="card mb-3" style="width: 18rem;">
                            <img class="card-img-top" src="Media/Pub_Orsinu_mini.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">SAE 302</h5>
                                <p class="card-text">Création d'une marque de bière fictive, de son packaging et sa
                                    stratégie de communication.</p>
                                <ul class="nav">
                                    <li><a href="#sae302" id="openSae302" class="btn btn-primary">En savoir plus</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- portfolio item end -->
                        <!-- portfolio item start -->
                        <div class="card mb-3" style="width: 18rem;">
                            <img class="card-img-top" src="Media/graph_mini.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">SAE 303</h5>
                                <p class="card-text">Analyse et extraction de données pour la création de graphiques
                                    animés.</p>
                                <ul class="nav">
                                    <li><a href="#sae303" id="openSae303" class="btn btn-primary">En savoir plus</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- portfolio item end -->
                        <!-- portfolio item start -->
                        <div class="card mb-3" style="width: 18rem;">
                            <img class="card-img-top" src="Media/manteau_mini.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">SAE 401</h5>
                                <p class="card-text">Création d'un manteau basé sur l'oeuvre d'un artiste.</p>
                                <ul class="nav">
                                    <li><a href="#sae401" id="openSae401" class="btn btn-primary">En savoir plus</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- portfolio item end -->
                        <!-- portfolio item start -->
                        <div class="card mb-3" style="width: 18rem;">
                            <img class="card-img-top" src="Media/paghjella_affiche_simple_mini.jpg"
                                alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">SAE 402</h5>
                                <p class="card-text">Création d'une affiche animée sur le thème de la Paghjella.</p>
                                <ul class="nav">
                                    <li><a href="#sae402" id="openSae402" class="btn btn-primary">En savoir plus</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- portfolio item end -->
                        <div class="portfolio-heading padd-15">
                            <h2>Autres projets :</h2>
                        </div>
                        <!-- portfolio item start -->
                        <div class="portfolio-item padd-15">
                            <div class="portfolio-item-inner shadow-dark">
                                <div class="portfolio-img">
                                    <?php get_projet('3'); ?>
                                </div>
                            </div>
                        </div>
                        <!-- portfolio item end -->
                        <!-- portfolio item start -->
                        <div class="portfolio-item padd-15">
                            <div class="portfolio-item-inner shadow-dark">
                                <div class="portfolio-img">
                                    <?php get_projet('4'); ?>
                                </div>
                            </div>
                        </div>
                        <!-- portfolio item end -->
                        <!-- portfolio item start -->
                        <div class="portfolio-item padd-15">
                            <div class="portfolio-item-inner shadow-dark">
                                <div class="portfolio-img">
                                    <?php get_projet('5'); ?>
                                </div>
                            </div>
                        </div>
                        <!-- portfolio item end -->
                        <!-- portfolio item start -->
                        <div class="portfolio-item padd-15">
                            <div class="portfolio-item-inner shadow-dark">
                                <div class="portfolio-video">
                                    <?php get_media('Kedge'); ?>
                                </div>
                            </div>
                        </div>
                        <!-- portfolio item end -->
                    </div>
                </div>
            </section>
            <!-- Portfolio Section End -->
            <!-- SAE 101 Section Start -->
            <section class="101 section" id="sectionSae101">
                <div class="container">
                    <div class="row">
                        <div class="home-info padd-15">
                            <p><a href="#" id="closeSae101">← Retour</a></p>
                            <h1>SAE 101</h1>
                            <h3>Audit du site La Vie est Belt</h3>
                            <img src="Media/lavieestbelt.png" alt="La Vie est Belt" class="img-fluid">
                            </br></br>
                            <p>Pour faire l’audit du site La Vie est Belt, j’ai tout d’abord commencé par rechercher des
                                informations sur la marque : qui sont-ils ? depuis quand existe-elle ? Quel genre de
                                produits sont-ils proposés ? etc… Beaucoup de réponses à ces questions étaient présentes
                                sur leur site lavieestbelt.fr, mais par curiosité je suis allé rechercher plus
                                d’informations sur le web. J’ai trouvé pas mal d’articles, parlant souvent du passage à
                                l’émission « Qui veut être mon associé » du fondateur de la marque Hubert Motte, et où
                                ce dernier discute en détails de son parcours et de ses motivations. Grâce à ces
                                informations, j’ai établi une introduction globale pour l’audit, puis je me suis mis à
                                effectuer des recherches pour la partie marketing de la marque.</p>
                            <a href="Media/Rapports/Rapport_audit.pdf" class="btn" target="_blank">Voir mon rapport</a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- SAE 101 Section End -->
            <!-- SAE 102 Section Start -->
            <section class="102 section" id="sectionSae102">
                <div class="container">
                    <div class="row">
                        <div class="home-info padd-15">
                            <p><a href="#" id="closeSae102">← Retour</a></p>
                            <h1>SAE 102</h1>
                            <h3>Article sur le carnaval de Brandu</h3>
                            <img src="Media/article.jpg" alt="Carnaval de Brandu" class="img-fluid"
                                style="max-width: 80%;">
                            <p>Comme chaque année à cette période, de mystérieux portails s’ouvrent dans la commune de
                                Brandu, apportant un lot d’étranges personnages envahissant les rues. Certains de ces
                                individus à
                                forme humanoïde défilent et amassent la foule en se donnant en spectacle, mais d’autres,
                                qu’on
                                appelle Orchi, créatures légèrement plus grandes qu’un être humain, pourvues
                                d’imposantes cornes
                                et dont la fourrure leur donne plus l’aspect d’une bête que d’un homme, sèment la
                                terreur parmi les
                                villageois en les prenant en embuscade ou en les chargeant comme des bêtes sauvages. Ils
                                sont
                                tenus en respect par I Vecchjoni, qui les chassent à grands coups de bâton et qui
                                maintiennent ceux
                                qui ont été capturés en laisse, pour éviter qu’ils ne se jettent sur les passants. Les
                                enfants quant à
                                eux, venus accompagnés de leurs parents, admirent les créatures monstrueuses en ce jour
                                si spécial.</p>
                            <a href="Media/Rapports/Article_Brandu.pdf" class="btn" target="_blank">Voir l'article</a>
                            <a href="Media/Rapports/Rapport_article.pdf" class="btn" target="_blank">Voir mon
                                rapport</a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- SAE 102 Section End -->
            <!-- SAE 103 Section Start -->
            <section class="103 section" id="sectionSae103">
                <div class="container">
                    <div class="row">
                        <div class="home-info padd-15">
                            <p><a href="#" id="closeSae103">← Retour</a></p>
                            <h1>SAE 103</h1>
                            <h3>Charte graphique du carnaval di Brandu</h3>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <img src="Media/Affiche.png" alt="Carnaval de Brandu" class="img-fluid"
                                        style="max-width: 80%;">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <img src="Media/Affiche2.png" alt="Carnaval de Brandu" class="img-fluid"
                                        style="max-width: 80%;">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <img src="Media/Mug.jpg" alt="Carnaval de Brandu" class="img-fluid"
                                        style="max-width: 80%;">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <img src="Media/T-shirt.jpg" alt="Carnaval de Brandu" class="img-fluid"
                                        style="max-width: 80%;">
                                </div>
                            </div>
                            <p>Pour cette SAE, il nous a été demandé de créer un ensemble d'items pour couvrir le
                                carnaval di Brandu. Parmi ceux-ci, affiche, t-shirts, goodies etc...<br>
                                Cette SAE nous a permis de nous familiariser avec les logiciels de la suite Adobe, et de
                                nous initier à la création graphique.
                            </p>
                            <a href="Media/Rapports/Rapport_SAE_Brando.pdf" class="btn" target="_blank">Voir mon
                                rapport</a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- SAE 103 Section End -->
            <!-- SAE 202 Section Start -->
            <section class="202 section" id="sectionSae202">
                <div class="container">
                    <div class="row">
                        <div class="home-info padd-15">
                            <p><a href="#" id="closeSae202">← Retour</a></p>
                            <h1>SAE 202</h1>
                            <h3>The Man From Earth</h3>
                            <img src="Media/TMFE.png" alt="Affiche TMFE" class="img-fluid" style="max-width: 80%;">
                            <p>Le sujet de cette SAE est construit autour du film « The Man From
                                Earth » de Richard Schenkman et concerne l’élaboration de la
                                communication de ce film, dans l’hypothèse de sa sortie en octobre
                                prochain.
                                Réunis en groupe de quatre, nous devions travailler sur trois axes
                                spécifique de la communication : La stratégie de communication, la
                                création d’éléments graphiques et la réalisation de produits audiovisuels
                                telles qu’un court métrage et une bande annonce.
                                En nous basant sur le film original, il nous est demandé d’élaborer la
                                stratégie de communication et d’en fournir un plan de communication
                                détaillé. Les conclusions issues de l’analyse guideront l’ensemble de la
                                production graphique.</p>
                            <a href="Media/Rapports/Rapport_TMFE.pdf" class="btn" target="_blank">Voir mon rapport</a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- SAE 202 Section End -->
            <!-- SAE 203 Section Start -->
            <section class="203 section" id="sectionSae203">
                <div class="container">
                    <div class="row">
                        <div class="home-info padd-15">
                            <p><a href="#" id="closeSae203">← Retour</a></p>
                            <h1>SAE 203</h1>
                            <h3>Interface de gestion de Portfolio</h3>
                            <img src="Media/portfolio.png" alt="Portfolio" class="img-fluid" style="max-width: 80%;">
                            <p>L’exercice demandé dans cette SAE est de reprendre le portfolio que nous avions crée pour
                                une
                                SAE du semestre précédent, et de l’améliorer en lui ajoutant une interface
                                d’administration
                                permettant de modifier et d’agrémenter le portfolio sans devoir passer par le code en
                                lui-même. Pour
                                cela, il faudra que cette interface soit reliée a une base de données qui regroupera
                                toutes les
                                informations nécessaires au portfolio (images, textes, vidéos, etc…). Un autre objectif
                                de cette SAE est
                                de mettre en place un patron de conception Modèle-Vue-Contrôleur (MVC) pour le
                                portfolio, qui
                                consiste a regrouper les fichiers du portfolio en 3 parties : le modèle, qui permet la
                                connexion a la
                                base de données, la vue qui regroupe toute la partie graphique du portfolio et le
                                contrôleur qui
                                s’occupe de faire les requêtes entre la BDD et le site.
                            </p>
                            <a href="Media/Rapports/Rapport_SAE_203.pdf" class="btn" target="_blank">Voir mon
                                rapport</a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- SAE 203 Section End -->
            <!-- SAE 204 Section Start -->
            <section class="204 section" id="sectionSae204">
                <div class="container">
                    <div class="row">
                        <div class="home-info padd-15">
                            <p><a href="#" id="closeSae204">← Retour</a></p>
                            <h1>SAE 204</h1>
                            <h3>Présence en ligne</h3>
                            <img src="Media/online.png" alt="Présence en ligne" class="img-fluid"
                                style="max-width: 80%;">
                            <p>La présence en ligne est aujourd’hui indispensable que ce soit pour une entreprise, pour
                                présenter
                                son activité, pour que les internautes puissent nous trouver facilement ou pour pouvoir
                                communiquer
                                avec nos clients. De nos jours, on peut même dire que bénéficier d’une présence en ligne
                                est plus
                                important que de bénéficier d’une présence dans les médias traditionnels (journaux, TV,
                                etc…)
                                En vue de mon futur métier de développeur web, j’ai décidé de baser ma présence en ligne
                                principalement sur Twitter et Facebook, mais aussi via Instagram, LinkedIn et un site
                                internet, ce
                                dernier étant surtout le point de convergence de mes réseaux. Je me sers principalement
                                de ces
                                derniers pour attirer les internautes vers mes créations web grâce a des posts contenant
                                des
                                démonstrations pour les rediriger vers mon site où ils pourront consulter les offres et
                                les prestations
                                plus en détail.</p>
                            <a href="Media/Rapports/Rapport_SAE_204.pdf" class="btn" target="_blank">Voir mon
                                rapport</a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- SAE 204 Section End -->
            <!-- SAE 205 Section Start -->
            <section class="205 section" id="sectionSae205">
                <div class="container">
                    <div class="row">
                        <div class="home-info padd-15">
                            <p><a href="#" id="closeSae205">← Retour</a></p>
                            <h1>SAE 205</h1>
                            <h3>Portfolio 2.0</h3>
                            <img src="Media/portfolio.jpg" alt="Portfolio 2.0" class="img-fluid"
                                style="max-width: 80%;">
                            <p>Le but de cette SAE est de perfectionner notre portfolio réalisé pendant le S1 dans le
                                but de mettre en avant nos compétences acquises pendant ce BUT MMI. Pour ma part, j’ai
                                choisi de repartir complétement de zéro et de revoir l’entièreté de mon portfolio afin
                                de lui donner un aspect plus professionnel. </p>
                            <a href="Media/Rapports/Rapport_SAE_205.pdf" class="btn" target="_blank">Voir mon
                                rapport</a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- SAE 205 Section End -->
            <!-- SAE 301 Section Start -->
            <section class="301 section" id="sectionSae301">
                <div class="container">
                    <div class="row">
                        <div class="home-info padd-15">
                            <p><a href="#" id="closeSae301">← Retour</a></p>
                            <h1>SAE 301</h1>
                            <h3>Création de site e-commerce</h3>
                            <img src="Media/birbone.png" alt="Birbone" class="img-fluid" style="max-width: 80%;">
                            <p>L’objectif de cette SAE est d’intégrer efficacement des interfaces utilisateurs au sein
                                d’un
                                système d’information. Nous allons donc devoir créer un site de e-commerce pour la
                                marque
                                Birbone, et mon objectif est de créer toute la partie Front office de ce site. Pour
                                cela, nous allons
                                passer par plusieurs phases. En premier lieu, une phase d’analyse permettant de
                                structurer notre
                                futur site internet en fonction du cahier des charges imposé, puis une phase de design
                                dont le but
                                est de créer une interface utilisateur ergonomique et efficace, interface qui sera
                                construite dans la
                                phase d’intégration et qui devra respecter les normes W3C et être responsive, et pour
                                finir une
                                phase d’hébergement qui verra le site hébergé chez un prestataire de service pour la
                                mise en ligne.</p>
                            <a href="Media/Rapports/Rapport_SAE_301.pdf" class="btn" target="_blank">Voir mon
                                rapport</a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- SAE 301 Section End -->
            <!-- SAE 302 Section Start -->
            <section class="302 section" id="sectionSae302">
                <div class="container">
                    <div class="row">
                        <div class="home-info padd-15">
                            <p><a href="#" id="closeSae302">← Retour</a></p>
                            <h1>SAE 302</h1>
                            <h3>Création d'une bière artisanale fictive</h3>
                            <img src="Media/Pub_Orsinu.png" alt="Orsinu" class="img-fluid" style="max-width: 80%;">
                            <p>L’objectif de cette SAE est de créer le packaging d’une bière fictive. J’ai choisi de
                                créer une bière
                                artisanale corse au miel et qui s’appelle Orsinu. Ce rapport va passer en revue toutes
                                les étapes de la
                                création de cette bière, du concept jusqu’à la création de visuels pour des publications
                                sur le web.</p>
                            <a href="Media/Rapports/Rapport_SAE_302.pdf" class="btn" target="_blank">Voir mon
                                rapport</a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- SAE 302 Section End -->
            <!-- SAE 303 Section Start -->
            <section class="303 section" id="sectionSae303">
                <div class="container">
                    <div class="row">
                        <div class="home-info padd-15">
                            <p><a href="#" id="closeSae303">← Retour</a></p>
                            <h1>SAE 303</h1>
                            <h3>Visualisation de données</h3>
                            <img src="Media/graph.png" alt="Graphiques" class="img-fluid" style="max-width: 80%;">
                            <p>L’objectif de cette SAE est de concevoir des visualisations de données pour le web. Pour
                                cela, il
                                nous a été demandé de récupérer un jeu de données de notre choix, puis de les utiliser
                                pour en faire
                                différents graphiques qui permettent d’analyser ces données. L’utilisation d’une
                                librairie JavaScript
                                nous sera nécessaire, et j’ai choisi pour ma part d’utiliser Echarts qui possède un bon
                                nombre de
                                templates de graphiques animés et simples d’utilisation. Pour le jeu de données, je me
                                suis servi de
                                Prométhée, un site qui regroupe toutes les données sur les feux qui se sont produits
                                dans le sud de
                                la France ces cinquante dernières années.
                            </p>
                            <a href="Media/Rapports/Rapport_SAE_303.pdf" class="btn" target="_blank">Voir mon
                                rapport</a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- SAE 303 Section End -->
            <!-- SAE 401 Section Start -->
            <section class="401 section" id="sectionSae401">
                <div class="container">
                    <div class="row">
                        <div class="home-info padd-15">
                            <p><a href="#" id="closeSae401">← Retour</a></p>
                            <h1>SAE 401</h1>
                            <h3>Création d'un manteau inspiré de Chopin</h3>
                            <img src="Media/Manteau.jpg" alt="Chopin" class="img-fluid" style="max-width: 80%;">
                            <p>Le but de cette SAE est la création d’une marque fictive et d’un manteau dont le design
                                intègre des visuels à forte valeur ajoutée artistique présentant l’univers visuel d’un
                                artiste. Dans
                                notre cas, nous avons décidé de créer un manteau sur Frédéric Chopin et plus
                                particulièrement sur
                                une de ses œuvres les plus emblématiques : La Fantaisie-Impromptu.</p>
                            <a href="Media/Rapports/Rapport_SAE_401.pdf" class="btn" target="_blank">Voir mon
                                rapport</a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- SAE 401 Section End -->
            <!-- SAE 402 Section Start -->
            <section class="402 section" id="sectionSae402">
                <div class="container">
                    <div class="row">
                        <div class="home-info padd-15">
                            <p><a href="#" id="closeSae402">← Retour</a></p>
                            <h1>SAE 402</h1>
                            <h3>Affiche animée sur la Paghjella</h3>
                            <img src="Media/Paghjella_affiche_simple.jpg" alt="Paghjella" class="img-fluid" style="max-width: 80%;">
                            <p>Dans cette SAE, nous avons pour objectif de créer un visuel animé sur un des deux thèmes
                                proposés.
                                Pour ma part, j’ai choisi de faire mon affiche sur la paghjella, un chant polyphonique
                                traditionnel
                                corse. Nous allons voir dans ce rapport le cheminement entrepris pour la création de
                                cette affiche.</p>
                            <a href="Media/Rapports/Rapport_SAE_402.pdf" class="btn" target="_blank">Voir mon rapport</a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- SAE 402 Section End -->
            <!-- Contact Section Start -->
            <section class="contact section" id="contact">
                <div class="container">
                    <div class="row">
                        <div class="section-title padd-15">
                            <h2>Me contacter</h2>
                        </div>
                    </div>
                    <h3 class="contact-title padd-15">Avez vous des questions?</h3>
                    <h4 class="contact-sub-title padd-15">Je suis a votre disposition</h4>
                    <div class="row">
                        <!-- Contact info item start -->
                        <div class="contact-info-item padd-15">
                            <div class="icon"><i class="fa fa-phone"></i></div>
                            <h4>Contactez moi au</h4>
                            <p>0640243976</p>
                        </div>
                        <!-- Contact info item end -->
                        <!-- Contact info item start -->
                        <div class="contact-info-item padd-15">
                            <div class="icon"><i class="fa fa-map-marker-alt"></i></div>
                            <h4>Localisation</h4>
                            <p>Bastia</p>
                        </div>
                        <!-- Contact info item end -->
                        <!-- Contact info item start -->
                        <div class="contact-info-item padd-15">
                            <div class="icon"><i class="fa fa-envelope"></i></div>
                            <h4>Email</h4>
                            <p>jacques.battaglini@hotmail.fr</p>
                        </div>
                        <!-- Contact info item end -->
                    </div>
                    <h3 class="contact-title padd-15">Laissez moi un message</h3>
                    <h4 class="contact-sub-title padd-15">Je réponds très rapidement</h4>
                    <!-- Contact Form -->
                    <div class="row">
                        <div class="contact-form padd-15">
                            <form name="formulaire" method="post" action="../Controleur/envoi_formulaire.php">
                                <div class="row">
                                    <div class="form-item col-6 padd-15">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="nom" placeholder="Nom">
                                        </div>
                                    </div>
                                    <div class="form-item col-6 padd-15">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" placeholder="Email">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-item col-12 padd-15">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="sujet" placeholder="Sujet">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-item col-12 padd-15">
                                        <div class="form-group">
                                            <textarea class="form-control" name="message"
                                                placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-item col-12 padd-15">
                                        <input type="submit" class="btn" name="valider" value="Envoyer" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Contact Section End -->
        </div>
        <!-- Main content End -->
    </div>
    <!--  Main Container End  -->
    <!-- Style Switcher Start -->
    <div class="style-switcher">
        <div class="style-switcher-toggler s-icon">
            <i class="fas fa-cog fa-spin"></i>
        </div>
        <div class="day-night s-icon">
            <i class="fas "></i>
        </div>
        <h4>Theme Colors</h4>
        <div class="colors">
            <span class="color-1" onclick="setActiveStyle('color-1')"></span>
            <span class="color-2" onclick="setActiveStyle('color-2')"></span>
            <span class="color-3" onclick="setActiveStyle('color-3')"></span>
            <span class="color-4" onclick="setActiveStyle('color-4')"></span>
            <span class="color-5" onclick="setActiveStyle('color-5')"></span>
        </div>
    </div>
    <!-- Style Switcher End -->
    <!--  JS Files  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js" referrerpolicy="no-referrer">
    </script>
    <script src="js/script.js"></script>
    <script src="js/style-switcher.js"></script>
</body>

</html>