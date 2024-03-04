<!DOCTYPE html>
<html class="no-js" lang="en">

<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>DeliceDelice</title>
    <meta name="description" content="Délice Délice accompagne les hôteliers,Restaurant,Pâtisserie,... du monde entier en proposant vos offres et services directement sur le smartphone de manière automatisée, vous réduisez les frictions et augmentez considérablement vos revenus sur chaque séjour">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="./css/font-awesome/css/fontawesome-all.min.css">


    <!-- script
    ================================================== -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="js/modernizr.js"></script>
    <script src="js/pace.min.js"></script>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="./images/logo.png" type="image/x-icon">
    <link rel="icon" href="./images/logo.png" type="image/x-icon">

</head>

<body id="top">

    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader" class="dots-jump">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>


    <!-- header 
    ================================================== -->
    <header class="s-header">

        <div class="row">
            <div class="header-logo">
                <a class="site-logo" href="index.html">
                    <img src="images/logo.png" alt="Homepage">
                </a>
            </div>

            <nav class="header-nav-wrap">
                <ul class="header-main-nav">
                    <li class="current"><a class="smoothscroll" href="#home" title="intro">Intro</a></li>
                    <li><a class="smoothscroll" href="#about" title="about">A propos</a></li>
                    <li><a class="smoothscroll" href="#features" title="features">Fonctionnalités</a></li>
                    <li><a class="smoothscroll" href="#faqs" title="faqs">FAQs</a></li>
                    <li><a class="smoothscroll" href="#download" title="download">Télécharger</a></li>

                </ul>

                <div class="header-cta">
                    <a class="btn btn--primary header-cta__btn smoothscroll" onclick="openModal('modelConfirm')">Demander une Démo</a>
                </div>
            </nav> <!-- end header-nav-wrap -->

            <a class="header-menu-toggle" href="#"><span>Menu</span></a>
        </div>

    </header> <!-- end header -->


    <!-- home
    ================================================== -->
    <section id="home" class="s-home target-section" data-parallax="scroll" data-image-src="images/hero-bg.jpg" data-natural-width=3000 data-natural-height=2000 data-position-y=center>

        <div class="shadow-overlay"></div>

        <div class="home-content">

            <div class="row home-content__main">

                <div class="home-content__left">
                    <h1 style="color: white !important;">
                        DeliceDelice
                    </h1>

                    <h3>
                        Depuis plusieurs années, Délice Délice accompagne les hôteliers du monde entier en proposant vos offres et services directement sur le smartphone de manière automatisée, vous réduisez les frictions et augmentez considérablement vos revenus sur chaque séjour
                    </h3>

                    <div class="home-content__btn-wrap">
                        <a class="btn btn--primary home-content__btn smoothscroll" href="#download">
                            Télecharger l'App
                        </a>
                    </div>
                </div> <!-- end home-content__left-->

                <div class="home-content__right">
                    <img src="images/hero-section1.png" srcset="images/hero-section1.png 1x, images/hero-section1.png 2x">
                </div> <!-- end home-content__right -->

            </div> <!-- end home-content__main -->

            <ul class="home-content__social">
                <li><a href="#0">Facebook</a></li>
                <li><a href="#0">twitter</a></li>
                <li><a href="#0">Instagram</a></li>
            </ul>

        </div> <!-- end home-content -->

        <a href="#about" class="home-scroll smoothscroll">
            <span class="home-scroll__text">Scroll</span>
            <span class="home-scroll__icon"></span>
        </a>

    </section> <!-- end s-home -->


    <!-- about
    ================================================== -->
    <section id="about" class="s-about target-section">

        <div class="row section-header has-bottom-sep" data-aos="fade-up">
            <div class="col-full">
                <h1 class="display-1">
                    Expérience et qualité de service
                </h1>
                <p class="lead">
                    Augmentez votre niveau de service et proposez une expérience client supérieure, personnalisée et innovante tout en soulageant vos équipes. Supprimez les interactions qui ne créent pas de valeur, automatisez les tâches chronophages et permettez à vos équipes de se concentrer sur l’essentiel, Donnez à vos clients un accès direct aux informations qui comptent pour vous, communiquez avec eux avant, pendant et après leur séjour et identifiez mieux que jamais leur réelles attentes.
                </p>
            </div>
        </div> <!-- end section-header -->

        <div class="row wide about-desc" data-aos="fade-up">

            <div class="col-full slick-slider about-desc__slider">

                <div class="about-desc__slide">
                    <h3 class="item-title">Intuitive.</h3>

                    <p>
                        Prise de commande simple et efficace
                        permettant aux établissements de prendre des commandes de manière efficace et rapide.
                    </p>
                </div> <!-- end about-desc__slide -->

                <div class="about-desc__slide">
                    <h3 class="item-title">Smart.</h3>

                    <p>
                        Gestion des commandes adaptée aux réalités africaines
                        Facilité le suivi et la gestion des commandes tout au long du processus.
                    </p>
                </div> <!-- end about-desc__slide -->

                <div class="about-desc__slide">
                    <h3 class="item-title">Efficace.</h3>

                    <p>
                        Gestion de Stocks rapide et sécurisée
                        Permet de surveiller et de gérer les niveaux de stock pour une meilleure planification
                    </p>
                </div> <!-- end about-desc__slide -->

                <div class="about-desc__slide">
                    <h3 class="item-title">Fiable.</h3>

                    <p>
                        Transaction sécurisé, rapide et simplifié pour tout utilisateur.
                    </p>
                </div> <!-- end about-desc__slide -->

            </div> <!-- end about-desc__slider -->

        </div> <!-- end about-desc -->

    </section> <!-- end s-about -->


    <!-- about-how
    ================================================== -->
    <section id="about-how" class="s-about-how">

        <div class="row">
            <div class="col-full video-bg" data-aos="fade-up">

                <div class="shadow-overlay"></div>

                <a class="btn-video" href="https://player.vimeo.com/video/14592941?color=00a650&title=0&byline=0&portrait=0" data-lity>
                    <span class="video-icon"></span>
                </a>

                <div class="stats">
                    <div class="item-stats">
                        <span class="item-stats__num">
                            100
                        </span>
                        <span class="item-stats__title">
                            Télechargement
                        </span>
                    </div> <!-- end item-stats -->
                    <div class="item-stats">
                        <span class="item-stats__num">
                            50+
                        </span>
                        <span class="item-stats__title">
                            Retour Positif
                        </span>
                    </div> <!-- end item-stats -->
                </div>
            </div> <!-- end video-bg -->
        </div>

        <div class="row process-wrap">

            <h2 class="display-2 text-center" data-aos="fade-up">Comment ça marche?</h2>

            <p class="display-5 text-center" data-aos="fade-up">Le parcours service ( Restaurant, Hôtel, Boulangerie, Pâtisserie ) est très simple et éfficace</p>

            <div class="process" data-aos="fade-up">
                <div class="process__steps block-1-2 block-tab-full group">

                    <div class="col-block step">
                        <h3 class="item-title">Créer un compte.</h3>
                        <p>Faites une demande vers DeliceDelice pour recevoir vos identifiants de connexion vendeur en quelque clique. <a href="">Cliquez ici</a>
                        </p>
                    </div>

                    <div class="col-block step">
                        <h3 class="item-title">Ajouter.</h3>
                        <p>Une fois votre compte créer ajouter des produits (Repas, Boisson, Déssert, ...), les regrouper par groupe. Mais aussi créer les menus du jour et des tables.
                        </p>
                    </div>

                    <div class="col-block step">
                        <h3 class="item-title">Consulter.</h3>
                        <p>Consulter son dashboard, voir la liste des commandes, des réservations et confirmer ou pas une commande. Consulter aussi son portefeuil vendeur et factures clients.
                        </p>
                    </div>

                    <div class="col-block step">
                        <h3 class="item-title">Retirer.</h3>
                        <p>Si vous avez du solde dans votre portefeuil vendeur résultant des commandes clients. Vous pouvez envoyer une demande de retrait et rentrer en posession de ce dernier.
                        </p>
                    </div>

                </div> <!-- end process__steps -->
            </div> <!-- end process -->
        </div> <!-- end about-how -->

    </section> <!-- end s-about-how -->


    <!-- features
    ================================================== -->
    <section id="features" class="s-features target-section">

        <div class="row section-header has-bottom-sep" data-aos="fade-up">
            <div class="col-full">
                <h1 class="display-1">
                    Les clients aiment DeliceDelice
                </h1>
                <p class="lead">
                    Nous avons aussi penser au parcours utilisateur pour simplifier son expérience chaque fois qu'il utilise l'application.
                </p>
            </div>
        </div> <!-- end section-header -->

        <div class="row features block-1-3 block-m-1-2">

            <div class="col-block item-feature" data-aos="fade-up">
                <div class="item-feature__icon">
                    <i class="icon-notes"></i>
                </div>
                <div class="item-feature__text">
                    <h3 class="item-title">Avis.</h3>
                    <p>
                        Vous pouvez désormais partager vos commentaires, suggestions et expériences. Que ce soit pour exprimer votre satisfaction ou signaler un problème, laisser un avis pour un service.
                    </p>
                </div>
            </div>

            <div class="col-block item-feature" data-aos="fade-up">
                <div class="item-feature__icon">
                    <i class="icon-search"></i>
                </div>
                <div class="item-feature__text">
                    <h3 class="item-title">Recherche.</h3>
                    <p>
                        Cette fonctionnalité de recherche vous simplifiera la vie et vous permettra de tirer le meilleur parti de notre application. Rechercher un repas et vous aurez la liste de tous les services qui offrent ce plat.
                    </p>
                </div>
            </div>

            <div class="col-block item-feature" data-aos="fade-up">
                <div class="item-feature__icon">
                    <i class="fa fa-regular fa-cart-plus"></i>
                </div>
                <div class="item-feature__text">
                    <h3 class="item-title">Commande.</h3>
                    <p>
                        Ajouter un repas, menu, boisson, ... ou autre à votre panier et commander ensuite à l'endroit d'un restaurant. C'est simple, automatique et très pratique.
                    </p>
                </div>
            </div>

            <div class="col-block item-feature" data-aos="fade-up">
                <div class="item-feature__icon">
                    <i class="icon-list"></i>
                </div>
                <div class="item-feature__text">
                    <h3 class="item-title">Réservation.</h3>
                    <p>
                        Quoi de plus simple que d'accéder à un service sans avoir à se déplacer. C'est exactement le cas réserver des tables sans avoir à vous déplacez et attendez la confirmation du service.
                    </p>
                </div>
            </div>

            <div class="col-block item-feature" data-aos="fade-up">
                <div class="item-feature__icon">
                    <i class="icon-bell"></i>
                </div>
                <div class="item-feature__text">
                    <h3 class="item-title">Notification.</h3>
                    <p>
                        Lorsque vous commandez ou que vous réserver, reçevez une notification sur le statut de votre commande/réservation selon qu'il soit Annuler ou Confirmer.
                    </p>
                </div>
            </div>

            <div class="col-block item-feature" data-aos="fade-up">
                <div class="item-feature__icon">
                    <i class="icon-wallet"></i>
                </div>
                <div class="item-feature__text">
                    <h3 class="item-title">Paiement.</h3>
                    <p>
                        Payer directement via l'application. C'est simple et sécurisé vous recevrez une facture après validation de votre paiement.
                    </p>
                </div>
            </div>

        </div> <!-- end features -->


    </section> <!-- end s-features -->

    <!-- FAQs
    ================================================== -->
    <section id="faqs" class="s-about-how">

        <div class="row">
            <br>
            <h2 class="display-2 text-center" data-aos="fade-up">FAQs</h2>

            <p class="display-5 text-center" data-aos="fade-up">Le parcours service ( Restaurant, Hôtel, Boulangerie, Pâtisserie ) est très simple et éfficace</p>

            <div class="container mx-auto">
                <div class="m-8 rounded-3xl overflow-hidden">
                    <div class="group outline-none accordion-section" tabindex="1">
                        <div class="group bg-gray-300 flex justify-between px-10 py-10 items-center text-gray-500 transition ease duration-500 cursor-pointer pr-10 relative">
                            <div class="group-focus:text-gray transition ease duration-500">
                                Title
                            </div>
                            <div class="h-12 w-12 border border-gray-700 rounded-full items-center inline-flex justify-center transform transition ease duration-500 group-focus:text-gray group-focus:-rotate-180 absolute top-5 right-10 mb-auto ml-auto mt-2 mr-2">
                                <i class="fas fa-chevron-down"></i>
                            </div>
                        </div>
                        <div class="group-focus:max-h-screen max-h-0 bg-gray-200 px-4 overflow-hidden ease duration-500">
                            <p class="p-5 text-gray-400 text-justify">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat,
                                repellat amet doloribus consequuntur eos similique provident
                                tempora voluptates iure quia fuga dicta voluptatibus culpa
                                mollitia recusandae delectus id suscipit labore?
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat,
                                repellat amet doloribus consequuntur eos similique provident
                                tempora voluptates iure quia fuga dicta voluptatibus culpa
                                mollitia recusandae delectus id suscipit labore?
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat,
                                repellat amet doloribus consequuntur eos similique provident
                                tempora voluptates iure quia fuga dicta voluptatibus culpa
                                mollitia recusandae delectus id suscipit labore?
                            </p>
                        </div>
                    </div>
                </div>
                <div class="m-8 rounded-3xl overflow-hidden">
                    <div class="group outline-none accordion-section" tabindex="1">
                        <div class="group bg-gray-300 flex justify-between px-10 py-10 items-center text-gray-500 transition ease duration-500 cursor-pointer pr-10 relative">
                            <div class="group-focus:text-gray transition ease duration-500">
                                Title
                            </div>
                            <div class="h-12 w-12 border border-gray-700 rounded-full items-center inline-flex justify-center transform transition ease duration-500 group-focus:text-gray group-focus:-rotate-180 absolute top-5 right-10 mb-auto ml-auto mt-2 mr-2">
                                <i class="fas fa-chevron-down"></i>
                            </div>
                        </div>
                        <div class="group-focus:max-h-screen max-h-0 bg-gray-200 px-4 overflow-hidden ease duration-500">
                            <p class="p-5 text-gray-400 text-justify">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat,
                                repellat amet doloribus consequuntur eos similique provident
                                tempora voluptates iure quia fuga dicta voluptatibus culpa
                                mollitia recusandae delectus id suscipit labore?
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat,
                                repellat amet doloribus consequuntur eos similique provident
                                tempora voluptates iure quia fuga dicta voluptatibus culpa
                                mollitia recusandae delectus id suscipit labore?
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat,
                                repellat amet doloribus consequuntur eos similique provident
                                tempora voluptates iure quia fuga dicta voluptatibus culpa
                                mollitia recusandae delectus id suscipit labore?
                            </p>
                        </div>
                    </div>
                </div>
                <div class="m-8 rounded-3xl overflow-hidden">
                    <div class="group outline-none accordion-section" tabindex="1">
                        <div class="group bg-gray-300 flex justify-between px-10 py-10 items-center text-gray-500 transition ease duration-500 cursor-pointer pr-10 relative">
                            <div class="group-focus:text-gray transition ease duration-500">
                                Title
                            </div>
                            <div class="h-12 w-12 border border-gray-700 rounded-full items-center inline-flex justify-center transform transition ease duration-500 group-focus:text-gray group-focus:-rotate-180 absolute top-5 right-10 mb-auto ml-auto mt-2 mr-2">
                                <i class="fas fa-chevron-down"></i>
                            </div>
                        </div>
                        <div class="group-focus:max-h-screen max-h-0 bg-gray-200 px-4 overflow-hidden ease duration-500">
                            <p class="p-5 text-gray-400 text-justify">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat,
                                repellat amet doloribus consequuntur eos similique provident
                                tempora voluptates iure quia fuga dicta voluptatibus culpa
                                mollitia recusandae delectus id suscipit labore?
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat,
                                repellat amet doloribus consequuntur eos similique provident
                                tempora voluptates iure quia fuga dicta voluptatibus culpa
                                mollitia recusandae delectus id suscipit labore?
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat,
                                repellat amet doloribus consequuntur eos similique provident
                                tempora voluptates iure quia fuga dicta voluptatibus culpa
                                mollitia recusandae delectus id suscipit labore?
                            </p>
                        </div>
                    </div>
                </div>
                <div class="m-8 rounded-3xl overflow-hidden">
                    <div class="group outline-none accordion-section" tabindex="1">
                        <div class="group bg-gray-300 flex justify-between px-10 py-10 items-center text-gray-500 transition ease duration-500 cursor-pointer pr-10 relative">
                            <div class="group-focus:text-gray transition ease duration-500">
                                Title
                            </div>
                            <div class="h-12 w-12 border border-gray-700 rounded-full items-center inline-flex justify-center transform transition ease duration-500 group-focus:text-gray group-focus:-rotate-180 absolute top-5 right-10 mb-auto ml-auto mt-2 mr-2">
                                <i class="fas fa-chevron-down"></i>
                            </div>
                        </div>
                        <div class="group-focus:max-h-screen max-h-0 bg-gray-200 px-4 overflow-hidden ease duration-500">
                            <p class="p-5 text-gray-400 text-justify">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat,
                                repellat amet doloribus consequuntur eos similique provident
                                tempora voluptates iure quia fuga dicta voluptatibus culpa
                                mollitia recusandae delectus id suscipit labore?
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat,
                                repellat amet doloribus consequuntur eos similique provident
                                tempora voluptates iure quia fuga dicta voluptatibus culpa
                                mollitia recusandae delectus id suscipit labore?
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat,
                                repellat amet doloribus consequuntur eos similique provident
                                tempora voluptates iure quia fuga dicta voluptatibus culpa
                                mollitia recusandae delectus id suscipit labore?
                            </p>
                        </div>
                    </div>
                </div>
            </div>



        </div> <!-- end about-how -->

    </section> <!-- end s-about-how -->


    <!-- download
    ================================================== -->
    <section id="download" class="s-download target-section">

        <div class="row section-header align-center" data-aos="fade-up">
            <div class="col-full">
                <h1 class="display-1">
                    Rejoignez notre communauté de plus de 100 utilisateurs.
                </h1>
                <p class="lead">
                    Découvrez DeliceDelice et laissez-vous emporteer par un univers de confort et de fiabilité.
                </p>
            </div>
        </div> <!-- end section-header -->

        <div class="row" style="margin-bottom: 80px;">
            <div class="col-full text-center">
                <ul class="download-badges" data-aos="fade-up">
                    <li><a href="#0" title="" class="badge-appstore">App Store</a></li>
                    <li><a href="#0" title="" class="badge-googleplay">Play Store</a></li>
                </ul>
            </div>
        </div>

    </section> <!-- end s-download -->

    <!-- Modal -->
    <div id="modelConfirm" class="fixed hidden z-30 inset-0 bg-gray-900 bg-opacity-60 overflow-y-auto h-full w-full p-40">
        <div class="relative mx-auto shadow-xl rounded-md bg-white max-w-8xl">
            <div class="grid md:grid-cols-2 grid-cols-1">
                <div class="md:block hidden bg-gray-700">
                    <img src="images/logo.png" alt="Homepage" class="rounded-full w-1/2 mt-96 mx-auto">
                    <!-- <img src="images/bg.jpg" srcset="" class="object-cover w-full h-full"> -->
                </div>

                <div class="p-5">
                    <div class="flex justify-end p-2 ">
                        <button onclick="closeModal('modelConfirm')" type="button" class="text-gray-400 bg-transparent border-transparent hover:bg-transparent hover:text-gray-900 rounded-lg text-xl p-2 ml-auto inline-flex items-center tracking-normal h-0">
                            <i class="fa fa-times"></i>
                        </button>
                    </div>
                    <h3 class=" mb-0.5 font-medium"></h3>
                    <p class="mb-4 text-sm font-normal text-gray-800"></p>

                    <div class="text-center">
                        <p class="mb-3 text-4xl font-semibold leading-5 text-slate-900">
                            Demander une Démo
                        </p>
                    </div>

                    <div class="flex w-full items-center gap-2 py-6 text-sm text-slate-600">
                        <div class="h-px w-full bg-slate-400"></div>
                    </div>

                    <form class="w-full" id="demo-form">
                        <div class="p-2">
                            <label for="restaurant" class="sr-only">Nom du restaurant</label>
                            <input name="restaurant" type="text" required="" class="block w-full rounded-lg border border-gray-300 px-3 py-2 shadow-sm outline-none placeholder:text-gray-400 focus:ring-2 bg-slate-200" placeholder="Nom du Restaurant" value="">
                        </div>

                        <div class="p-2 grid grid-cols-2">
                            <div class="pr-5">
                                <label for="restaurant" class="sr-only">Prénoms</label>
                                <input name="surname" type="text" required="" class="block w-full rounded-lg border border-gray-300 px-3 py-2 shadow-sm outline-none placeholder:text-gray-400 focus:ring-2 bg-slate-200" placeholder="Prénoms" value="">
                            </div>
                            <div class="pl-5">
                                <label for="email" class="sr-only">Nom</label>
                                <input name="name" type="text" autocomplete="name" required="" class="block w-full rounded-lg border border-gray-300 px-3 py-2 shadow-sm outline-none placeholder:text-gray-400 focus:ring-2 bg-slate-200" placeholder="Nom" value="">
                            </div>
                        </div>

                        <div class="p-2">
                            <label for="restaurant" class="sr-only">Email</label>
                            <input name="email" type="email" required="" class="block w-full rounded-lg border border-gray-300 px-3 py-2 shadow-sm outline-none placeholder:text-gray-400 focus:ring-2 bg-slate-200" placeholder="Email" value="">
                        </div>
                        <div class="p-2">
                            <label for="restaurant" class="sr-only">Télephone</label>
                            <input name="phone" type="tel" required="" class="block w-full rounded-lg border border-gray-300 px-3 py-2 shadow-sm outline-none placeholder:text-gray-400 focus:ring-2 bg-slate-200" placeholder="Télephone" value="">
                        </div>
                        <div class="p-2">
                            <label for="restaurant" class="sr-only">Adresse</label>
                            <input name="adress" type="text" required="" class="block w-full rounded-lg border border-gray-300 px-3 py-2 shadow-sm outline-none placeholder:text-gray-400 focus:ring-2 bg-slate-200" placeholder="Adresse" value="">
                        </div>

                        <div class="p-2 grid grid-cols-2">
                            <div class="pr-5">
                                <label for="restaurant" class="sr-only">Code Postal</label>
                                <input name="zip" type="text" required="" class="block w-full rounded-lg border border-gray-300 px-3 py-2 shadow-sm outline-none placeholder:text-gray-400 focus:ring-2 bg-slate-200" placeholder="Code Postal" value="">
                            </div>
                            <div class="pl-5">
                                <label for="email" class="sr-only">Ville</label>
                                <input name="city" type="text" autocomplete="name" required="" class="block w-full rounded-lg border border-gray-300 px-3 py-2 shadow-sm outline-none placeholder:text-gray-400 focus:ring-2 bg-slate-200" placeholder="Ville" value="">
                            </div>
                        </div>

                        <div class="p-2">
                            <label for="" class="sr-only">Pays</label>
                            <select name="country" id="" class="block w-full rounded-lg border border-gray-300 px-3 py-2 shadow-sm outline-none placeholder:text-gray-400 focus:ring-2 ">
                                <option value="">Pays</option>
                                <option value="Bénin">Bénin</option>
                                <option value="Togo">Togo</option>
                                <option value="Niger">Niger</option>
                                <option value="Nigeria">Nigeria</option>
                            </select>
                        </div>

                        <div class="p-2">
                            <label for="" class="sr-only">Comment connaissez-vous Zenchef</label>
                            <select name="response" id="" class="block w-full rounded-lg border border-gray-300 px-3 py-2 shadow-sm outline-none placeholder:text-gray-400 focus:ring-2 ">
                                <option value="">Comment connaissez-vous Zenchef</option>
                                <option value="Sur le net">Sur le net</option>
                                <option value="D'un ami">D'un ami</option>
                            </select>
                        </div>
                        <br>
                        <button type="submit" class="inline-flex w-full items-center justify-center rounded-lg bg-black p-2 py-3 text-2xl font-medium text-white outline-none focus:ring-2 focus:ring-black focus:ring-offset-1 disabled:bg-gray-400">
                            Valider
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>

    <!-- Message modal -->
    <div id="modelConfirm1" class="fixed z-30 hidden inset-0 bg-gray-900 bg-opacity-60 overflow-y-auto h-full w-full p-40">
        <div class="relative mx-auto shadow-xl rounded-md bg-white max-w-3xl">

            <div class="p-5 text-center">
                <div class="flex justify-end p-2 ">
                    <button onclick="closeModal('modelConfirm1')" type="button" class="text-gray-400 bg-white border-transparent hover:bg-transparent hover:text-gray-900 rounded-lg text-xl p-2 ml-auto inline-flex items-center tracking-normal h-0">
                        <i class="fa fa-times"></i>
                    </button>
                </div>
                <h3 class="mb-2 text-4xl text-orange-500 font-bold"> Succès </h3>
                <p class="mb-2 text-3xl font-normal font-semibold text-gray-800"> Votre demande de démo a bien été envoyée</p>



            </div>


        </div>
    </div>




    <!-- footer
    ================================================== -->
    <footer class="s-footer footer">

        <div class="row section-header align-center">
            <div class="col-full">
                <h1 class="display-1">
                    Restons en contact.
                </h1>
                <p class="lead">
                    Abonnez-vous pour recevoir des mises à jour, des offres spéciales et d'autres choses étonnantes..
                </p>
            </div>
        </div> <!-- end section-header -->

        <div class="row footer__top">

            <div class="col-full footer__subscribe end">
                <div class="subscribe-form">
                    <form id="mc-form" class="group" novalidate="true">

                        <input type="email" value="" name="EMAIL" class="email" id="mc-email" placeholder="Adresse Email" required="">

                        <input type="submit" name="abonner" value="S'abonner">

                        <label for="mc-email" class="subscribe-message"></label>

                    </form>
                </div>
            </div>

        </div> <!-- end footer__top -->

        <div class="row footer__bottom">

            <div class="footer__about col-five tab-full left">

                <h4>A propos de DeliceDelice.</h4>

                <p>
                    Delice delice est une nouvelle entreprise à croissance rapide. Les rôles et les responsabilités changent et nous réfléchissons toujours à des moyens de nous améliorer
                </p>

                <ul class="footer__social">
                    <li><a href="#0"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                    <li><a href="#0"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#0"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                </ul>
            </div>

            <div class="col-five md-seven tab-full right end">
                <div class="row">

                    <div class="footer__site-links col-five mob-full">
                        <h4>Liens.</h4>

                        <ul class="footer__site-links">
                            <li><a href="#home" class="smoothscroll">Intro</a></li>
                            <li><a href="#about" class="smoothscroll">A propos</a></li>
                            <li><a href="#features" class="smoothscroll">Fonctionnalités</a></li>
                            <li><a href="#faq" class="smoothscroll">FAQ</a></li>
                            <li><a href="#download" class="smoothscroll">Télecharger</a></li>
                            <li><a href="#0">Politique de confidentialité</a></li>
                        </ul>
                    </div>

                    <div class="footer__contact col-seven mob-full">
                        <h4>Contactez-nous.</h4>

                        <p>
                            Phone: (+33) 7 74 45 40 11 <br>
                        </p>
                        <p>
                            Besoin d'aide ou une question ? Contactez-nous maintenant: <br>
                            <a href="mailto:#0" class="footer__mail-link">support@delicedelice.com</a>
                        </p>
                    </div>

                </div>
            </div>

            <div class="col-full ss-copyright">
                <span>&copy; Copyright DeliceDelice 2023</span>
                <span>Tout droit réservé</span>
            </div>

        </div> <!-- end footer__bottom -->

        <div class="go-top">
            <a class="smoothscroll" title="Back to Top" href="#top"></a>
        </div>

    </footer> <!-- end s-footer -->


    <!-- Java Script
    ================================================== -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

    <script type="text/javascript">
        window.openModal = function(modalId) {
            document.getElementById(modalId).style.display = 'block'
            document.getElementsByTagName('body')[0].classList.add('overflow-y-hidden')
        }

        window.closeModal = function(modalId) {
            document.getElementById(modalId).style.display = 'none'
            document.getElementsByTagName('body')[0].classList.remove('overflow-y-hidden')

        }

        // Close all modals when press ESC
        document.onkeydown = function(event) {
            event = event || window.event;
            if (event.keyCode === 27) {
                document.getElementsByTagName('body')[0].classList.remove('overflow-y-hidden')
                let modals = document.getElementsByClassName('modal');
                Array.prototype.slice.call(modals).forEach(i => {
                    i.style.display = 'none'
                })
            }
        };
    </script>

    <script>
        document.getElementById("demo-form").addEventListener("submit", function(event) {
            event.preventDefault(); // Empêche le formulaire de se soumettre normalement

            // Récupérer les données du formulaire
            var formData = new FormData(this);

            // Envoyer les données au script PHP en utilisant AJAX
            fetch("send_form_to_mail.php", {
                    method: "POST",
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    // Traiter la réponse du serveur
                    window.closeModal('modelConfirm')
                    window.openModal('modelConfirm1')
                    document.getElementById("demo-form").reset()


                })
                .catch(error => {
                    console.error("Erreur lors de l'envoi des données au serveur:", error);
                });
        });
    </script>


</body>