<!--banner-->
<section id="banner">
   <div class="bg-color">
      <header id="header">
         <div class="container">
            <div id="mySidenav" class="sidenav">
               <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
               <a href="#about">About</a>
               <a href="#event">Event</a>
               <a href="#menu-list">Menu</a>
               <a href="#contact">Book a table</a>
            </div>
            <!-- Use any element to open the sidenav -->
            <span onclick="openNav()" class="pull-right menu-icon">☰</span>
         </div>
      </header>
      <div class="container">
         <div class="row">
            <div class="inner text-center">
               <h2>Restaurant</h2>
               <h1 class="logo-name">Le New Saigon</h1>
               <p>Sp&eacute;cialis&eacute; en cuisine Vietnamienne et Chinoise !!!</p>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- / banner -->

<!--about-->
<section id="about" class="section-padding">
   <div class="container">
      <div class="row">
         <div class="col-md-12 text-center marb-35">
            <h1 class="header-h">Le temps d'un voyage gastronomique.</h1>
            <p class="header-p">Localisé à Craponne, Le New Saigon est un restaurant asiatique qui vous propose des spécialités chinoises et vietnamiennes. Réputé pour sa cuisine traditionnelle, vous dégusterez dans notre restaurant les meilleures spécialités de l'Asie du sud-est le temps d'un voyage gastronomique. Ce site vous donne la possibilité de consulter des informations concernant le restaurant ainsi que notre carte, et ainsi découvrir la variété de nos menus.</p>
         </div>
         <div class="col-md-1"></div>
         <div class="col-md-10">
            <div class="col-md-6 col-sm-6">
               <div class="about-info">
                  <h2 class="heading">Découvrez le restaurant Le New Saigon :</h2>
                  <p>Appréciez le goût des plats chinois et vietnamiens.</p>
                  <div class="details-list">
                     <ul>
                        <li><i class="fa fa-check"></i>La carte du restaurant propose un choix important d'entrées, plats, menus et spécialités en tout genres.</li>
                        <li><i class="fa fa-check"></i>Le restaurant vous accueil en groupes pour des repas d'affaire ou d'anniversaire.</li>
                        <li><i class="fa fa-check"></i>Le restaurant vous permet aussi d'effectuer les commandes à emporter sur une séléction de plats.</li>
                        <li><i class="fa fa-check"></i>Vous avez la possibilité, si vous le souhaitez, de visiter la cuisine du restaurant afin de découvrir notre façon de cuisiner les spécialités asiatiques.</li>
                     </ul>
                  </div>
               </div>
           </div>
           <div class="col-md-6 col-sm-6">
              <img src="{{ URL::asset('img/resto/res01.jpg') }}" alt="" class="img-responsive">
           </div>
         </div>
         <div class="col-md-1"></div>
      </div>
   </div>
</section>
<!--/about-->

<!-- event -->
<!--section id="event">
   <div class="bg-color" class="section-padding">
      <div class="container">
         <div class="row">
            <div class="col-xs-12 text-center" style="padding:60px;">
               <h1 class="header-h">Up Coming events</h1>
               <p class="header-p">Decorations 100% complete here</p>
            </div>
            <div class="col-md-12" style="padding-bottom:60px;">
               <div class="item active left">
                  <div class="col-md-6 col-sm-6 left-images">
                     <img src="{{ URL::asset('img/resto/res02.jpg') }}" class="img-responsive">
                  </div>
                  <div class="col-md-6 col-sm-6 details-text">
                     <div class="content-holder">
                        <h2>Joyful party</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore eos suscipit earum voluptas aliquam recusandae, quae iure adipisci, inventore quia, quos delectus quaerat praesentium id expedita nihil illo accusantium, tempora.</p>
                        <address>
                           <strong>Place: </strong>
                           1612 Collins Str, Victoria 8007
                           <br>
                           <strong>Time: </strong>
                           07:30pm
                        </address>
                        <a class="btn btn-imfo btn-read-more" href="events-details.html">Read more</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!--/ event -->

<!-- menu -->
<section id="menu-list" class="section-padding">
   <div class="container">
      <div class="row">
         <div class="col-md-12 text-center marb-35">
            <h1 class="header-h">Menu List</h1>
            <p class="header-p">Un choix important d'entrées, plats, menus et spécialités.</p>
         </div>
         <div class="col-md-12  text-center gallery-trigger">
            <ul>
               <li><a class="filter" data-filter="all">Show All</a></li>
               <li><a class="filter" data-filter=".category-1">Entr&eacute;es</a></li>
               <li><a class="filter" data-filter=".category-2">Soupes</a></li>
               <li><a class="filter" data-filter=".category-3">Vapeurs</a></li>
               <li><a class="filter" data-filter=".category-4">Salades</a></li>
               <li><a class="filter" data-filter=".category-5">Sp&eacute;cialit&eacute;s</a></li>
               <li><a class="filter" data-filter=".category-6">Accompagnement</a></li>
               <li><a class="filter" data-filter=".category-7">Plats</a></li>
               <li><a class="filter" data-filter=".category-8">Desserts</a></li>
               <li><a class="filter" data-filter=".category-9">Menus</a></li>
            </ul>
         </div>
         <div id="Container">
            <?php 
            $entrees = array(
                         array('num' => 1, 'quantite' => 5, 'nom' => 'Nem au porc', 'viande' => 'Porc', 'unite' => 'pieces par portion', 'prix' =>'5.50', 'commentaire' => ''),
                         array('num' => 2, 'quantite' => 6, 'nom' => 'Nem aux crevettes', 'viande' => 'Crevettes', 'unite' => 'pieces par portion', 'prix' =>'6.50', 'commentaire' => ''),
                         array('num' => 3, 'quantite' => 5, 'nom' => 'Raviolis aux crevettes croustillants', 'viande' => 'Crevettes', 'unite' => 'pieces par portion', 'prix' =>'6.50', 'commentaire' => ''),
                         array('num' => 4, 'quantite' => 5, 'nom' => 'Samousa aux boeuf', 'viande' => 'Boeuf', 'unite' => 'pieces par portion', 'prix' =>'6.50', 'commentaire' => ''),
                         array('num' => 5, 'quantite' => 5, 'nom' => 'Beignets aux crettes', 'viande' => 'Crevettes', 'unite' => 'pieces par portion', 'prix' =>'6.50', 'commentaire' => ''),
                         array('num' => 6, 'quantite' => 2, 'nom' => 'Rouleau de printemps', 'viande' => 'Crevettes/Porc', 'unite' => 'pieces par portion', 'prix' =>'5.50', 'commentaire' => ''),
                         array('num' => 7, 'quantite' => 8, 'nom' => 'Plateau de bonheur', 'viande' => 'Boeuf/Crevettes/Porc', 'unite' => 'pieces par portion', 'prix' =>'10.00', 'commentaire' => '2 nems, 2 beignets aux crettes, 2 samousas aux boeuf, 2 raviolis aux crettes')
                 ); ?>

            @foreach($entrees as $entree)
               <div class="mix category-1 menu-restaurant" data-myorder="2">
                  <span class="clearfix">
                     <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">{{ $entree['num'] }}&nbsp;.&nbsp;{{ $entree['nom'] }}</a>
                     <span style="left: 166px; right: 44px;" class="menu-line"></span>
                     <span class="menu-price">&euro;{{ $entree['prix'] }}</span>
                  </span>
                  <span class="menu-subtitle">Type de viande : {{ $entree['viande'] }}</span>
                  <br><span class="menu-subtitle">Quantité : {{ $entree['quantite'] }}&nbsp;{{ $entree['unite'] }}s</span>
                  @if ( $entree['commentaire'] != '')
                     <br><span class="menu-subtitle">Commentaire : {{ $entree['commentaire'] }}</span>
                  @endif
               </div>
            @endforeach

            <?php 
            $soupes = array(
                        array('num' => 8, 'nom' => 'Soupe Maison', 'viande' => 'Crevettes/Porc',  'prix' => '9.00', 'commentaire' => 'pate de riz, crevettes et viande de porc'),
                        array('num' => 9, 'nom' => 'Soupe aux raviolis', 'viande' => 'Crevettes', 'prix' => '9.00', 'commentaire' => ''),
                        array('num' => 10, 'nom' => 'Potage aux asperges et au crabe', 'viande' => 'Surimi', 'prix' => '8.00', 'commentaire' => 'crabe = surimi'),
                        array('num' => 11, 'nom' => 'Potage pekinois epice', 'viande' => 'Tofu', 'prix' => '8.00', 'commentaire' => ''),
                        array('num' => 12, 'nom' => 'Soupe Pho', 'viande' => 'Boeuf', 'prix' => '10.00', 'commentaire' => 'Pate de riz, boeuf'),
                        ); ?>

            @foreach($soupes as $soupe)
               <div class="mix category-2 menu-restaurant" data-myorder="2">
                  <span class="clearfix">
                     <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">{{ $soupe['num'] }}&nbsp;.&nbsp;{{ $soupe['nom'] }}</a>
                     <span style="left: 166px; right: 44px;" class="menu-line"></span>
                     <span class="menu-price">&euro;{{ $soupe['prix'] }}</span>
                  </span>
                  <span class="menu-subtitle">Type de viande : {{ $soupe['viande'] }}</span>
                  @if ( $soupe['commentaire'] != '')
                     <br><span class="menu-subtitle">Commentaire : {{ $soupe['commentaire'] }}</span>
                  @endif
               </div>
            @endforeach

            <?php 
            $vapeurs = array(
                         array('num' => 13, 'quantite' => 6, 'nom' => 'Raviolis aux crevettes / Hakao', 'viande' =>  'Crevette', 'unite' => 'pieces par portion', 'prix' => '7.00', 'commentaire' => ''),
                         array('num' => 14, 'quantite' => 6, 'nom' => 'Bouchee aux porc et aux crevettes / Siu Mai', 'viande' => 'Crevette/Porc', 'unite' => 'pieces par portion', 'prix' => '7.00', 'commentaire' => ''),
                         array('num' => 15, 'quantite' => 6, 'nom' => 'Croissant aux crevettes et au porc', 'viande' => 'Crevette/Porc', 'unite' => 'pieces par portion', 'prix' => '7.00', 'commentaire' => ''),
                         array('num' => 16, 'quantite' => 9, 'nom' => 'Assortiment a la vapeur', 'viande' => 'Crevette/Porc', 'unite' => 'pieces par portion', 'prix' => '10.00', 'commentaire' => '')
                 ); ?>

            @foreach($vapeurs as $vapeur)
               <div class="mix category-3 menu-restaurant" data-myorder="2">
                  <span class="clearfix">
                     <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">{{ $vapeur['num'] }}&nbsp;.&nbsp;{{ $vapeur['nom'] }}</a>
                     <span style="left: 166px; right: 44px;" class="menu-line"></span>
                     <span class="menu-price">&euro;{{ $vapeur['prix'] }}</span>
                  </span>
                  <span class="menu-subtitle">Type de viande : {{ $vapeur['viande'] }}</span>
                  <br><span class="menu-subtitle">Quantité : {{ $vapeur['quantite'] }}&nbsp;{{ $vapeur['unite'] }}s</span>
                  @if ( $vapeur['commentaire'] != '')
                     <br><span class="menu-subtitle">Commentaire : {{ $vapeur['commentaire'] }}</span>
                  @endif
               </div>
            @endforeach

            <?php 
            $salades = array(
                         array('num' => 17, 'nom' => 'Salade de soja au poulet', 'viande' => 'Poulet', 'prix' => '7.00', 'commentaire' => '' ),
                         array('num' => 18, 'nom' => 'Salade aux crevettes', 'viande' => 'Crevette', 'prix' => '8.00', 'commentaire' => '' ),
                         array('num' => 19, 'nom' => 'Salade au crabe', 'viande' => 'Surimi', 'prix' => '7.50', 'commentaire' => '' ),
                         array('num' => 20, 'nom' => 'Salade au boeuf', 'viande' => 'Boeuf', 'prix' => '9.00', 'commentaire' => '' ),
                         array('num' => 21, 'nom' => 'Salade au poulet grille', 'viande' => 'Poulet', 'prix' => '8.00', 'commentaire' => '' ),
                         array('num' => 22, 'nom' => 'Salade speciale', 'viande' => '', 'prix' => '9.50', 'commentaire' => 'Poulet/Crevettes/Crabe')
                 ); ?>

            @foreach($salades as $salade)
               <div class="mix category-4 menu-restaurant" data-myorder="2">
                  <span class="clearfix">
                     <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">{{ $salade['num'] }}&nbsp;.&nbsp;{{ $salade['nom'] }}</a>
                     <span style="left: 166px; right: 44px;" class="menu-line"></span>
                     <span class="menu-price">&euro;{{ $salade['prix'] }}</span>
                  </span>
                  <span class="menu-subtitle">Type de viande : {{ $salade['viande'] }}</span>
                  @if ( $salade['commentaire'] != '')
                     <br><span class="menu-subtitle">Commentaire : {{ $salade['commentaire'] }}</span>
                  @endif
               </div>
            @endforeach

            <?php 
            $specialites = array(
                         array('num' => 23, 'quantite' => 1, 'nom' => 'Nouille royale sautee', 'viande' => 'Boeuf/Crevette/Poulet', 'prix' => '10.00', 'commentaire' => '' ),
                         array('num' => 24, 'quantite' => 3, 'nom' => 'Crepe de riz vietnamien', 'viande' => 'Porc', 'unite' => 'pieces par portion', 'prix' => '7.50', 'commentaire' => 'Banh cuon'),
                         array('num' => 25, 'quantite' => 1, 'nom' => 'Vermicelles de riz avec nem et boeuf', 'viande' => 'Porc/Boeuf', 'prix' => '8.00', 'commentaire' => ''),
                         array('num' => 26, 'quantite' => 1, 'nom' => 'Marmite variee a la viande', 'viande' => 'Boeuf/Poulet/Canard', 'prix' => '13.00', 'commentaire' => ''),
                         array('num' => 27, 'quantite' => 1, 'nom' => 'Marmite variee aux fruits de mer', 'viande' => 'Crevette/Coquille St Jacques', 'prix' => '16.00', 'commentaire' => ''),
                         array('num' => 28, 'quantite' => 5, 'nom' => 'Brochettes de poulet grille', 'viande' => 'Poulet', 'unite' => 'brochettes par portion', 'prix' => '8.50', 'commentaire' => '' ),
                         array('num' => 29, 'quantite' => 2, 'nom' => 'Brochettes de boeuf grille', 'viande' => 'Boeuf', 'unite' => 'brochettes par portion', 'prix' => '9.50', 'commentaire' => '' ),
                         array('num' => 30, 'quantite' => 3, 'nom' => 'Brochettes de crevette grille', 'viande' => 'Crevette', 'unite' => 'brochettes par portion', 'prix' => '11.00', 'commentaire' => '' ),
                         array('num' => 31, 'quantite' => 3, 'nom' => 'Brochettes de gambas grille', 'viande' => 'Gambas', 'unite' => 'brochettes par portion', 'prix' => '16.00', 'commentaire' => '' ),
                         array('num' => 32, 'quantite' => 1, 'nom' => 'Crabe farci', 'viande' => 'Crabe/Porc', 'prix' => '7.50', 'commentaire' => ''),
                         array('num' => 33, 'quantite' => 1, 'nom' => 'Omelette au crabe', 'viande' => 'Crabe', 'prix' => '7.00', 'commentaire' => 'crabe = surimi'),
                         array('num' => 34, 'quantite' => 1, 'nom' => 'Porc au caramel', 'viande' => 'Porc', 'prix' => '8.50', 'commentaire' => ''),
                         array('num' => 35, 'quantite' => 1, 'nom' => 'Fondue Vietnamien', 'viande' => 'Boeuf/Crevette/Calamar/Legumes', 'prix' => '45.00', 'commentaire' => 'Pour 2 personnes'),
                         array('num' => 36, 'quantite' => 1, 'nom' => 'Fondue Thailandaise epice', 'viande' => 'Boeuf/Crevette/Calamar/Legumes', 'prix' => '45.00', 'commentaire' => 'Pour 2 personnes')
                 ); ?>

            @foreach($specialites as $specialite)
               <div class="mix category-5 menu-restaurant" data-myorder="2">
                  <span class="clearfix">
                     <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">{{ $specialite['num'] }}&nbsp;.&nbsp;{{ $specialite['nom'] }}</a>
                     <span style="left: 166px; right: 44px;" class="menu-line"></span>
                     <span class="menu-price">&euro;{{ $specialite['prix'] }}</span>
                  </span>
                  <span class="menu-subtitle">Type de viande : {{ $specialite['viande'] }}</span>
                  @if ( $specialite['quantite'] != 1)
                     <br><span class="menu-subtitle">Quantité : {{ $specialite['quantite'] }}&nbsp;{{ $specialite['unite'] }}s</span>
                  @endif

                  @if ( $specialite['commentaire'] != '')
                     <br><span class="menu-subtitle">Commentaire : {{ $specialite['commentaire'] }}</span>
                  @endif
               </div>
            @endforeach

            <?php 
            $accompagnements = array(
                         array('num' => 37, 'nom' => 'Legumes Chop-Suey', 'prix' => '5.00'),
                         array('num' => 38, 'nom' => 'Nouilles nature', 'prix' => '4.00'),
                         array('num' => 39, 'nom' => 'Nouilles sautees aux legumes', 'prix' => '5.00'),
                         array('num' => 40, 'nom' => 'Riz nature parfumee', 'prix' => '2.00'),
                         array('num' => 41, 'nom' => 'Riz cantonnais', 'prix' => '3.50'),
                         array('num' => 42, 'nom' => 'Riz saute aux crevettes', 'prix' => '5.50'),
                         array('num' => 43, 'nom' => 'Riz saute du chef', 'prix' => '6.00')
                 ); ?>

            @foreach($accompagnements as $accompagnement)
               <div class="mix category-6 menu-restaurant" data-myorder="2">
                  <span class="clearfix">
                     <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">{{ $accompagnement['num'] }}&nbsp;.&nbsp;{{ $accompagnement['nom'] }}</a>
                     <span style="left: 166px; right: 44px;" class="menu-line"></span>
                     <span class="menu-price">&euro;{{ $accompagnement['prix'] }}</span>
                  </span>
               </div>
            @endforeach

            <?php 
            $plats = array(
                         array('num' => 44, 'nom' => 'Poulet grille', 'viande' => 'Poulet', 'prix' => '8.50'),
                         array('num' => 45, 'nom' => 'Poulet a la sauce aigre-douce/piquante', 'viande' => 'Poulet', 'prix' => '8.50'),
                         array('num' => 46, 'nom' => 'Poulet au basilic', 'viande' => 'Poulet', 'prix' => '8.50', 'piquant'),
                         array('num' => 47, 'nom' => 'Poulet au curry', 'viande' => 'Poulet', 'prix' => '8.50'),
                         array('num' => 48, 'nom' => 'Poulet au citron', 'viande' => 'Poulet', 'prix' => '8.50'),
                         array('num' => 49, 'nom' => 'Poulet saute a ananas', 'viande' => 'Poulet', 'prix' => '8.50'),
                         array('num' => 50, 'nom' => 'Poulet aux champignons noirs', 'viande' => 'Poulet', 'prix' => '8.50'),
                         array('num' => 51, 'nom' => 'Poulet caramel', 'viande' => 'Poulet', 'prix' => '8.50'),
                         array('num' => 52, 'nom' => 'Canard laque', 'viande' => 'Canards', 'prix' => '11.00'),
                         array('num' => 53, 'nom' => 'Canard au citron', 'viande' => 'Canards', 'prix' => '11.00'),
                         array('num' => 54, 'nom' => 'Canard saute a ananas', 'viande' => 'Canards', 'prix' => '11.00'),
                         array('num' => 55, 'nom' => 'Canard aux champignons noir', 'viande' => 'Canards', 'prix' => '11.00'),
                         array('num' => 56, 'nom' => 'Canard a la sauce aigne-douce', 'viande' => 'Canards', 'prix' => '11.00'),
                         array('num' => 57, 'nom' => 'Boeuf aux oignons', 'viande' => 'Boeuf', 'prix' => '10.00'),
                         array('num' => 58, 'nom' => 'Boeuf au sate', 'viande' => 'Boeuf', 'prix' => '10.00'),
                         array('num' => 59, 'nom' => 'Boeuf a la sauce aigre-douce/piquante', 'viande' => 'Boeuf', 'prix' => '10.00'),
                         array('num' => 60, 'nom' => 'Boeuf aux champignons noirs', 'viande' => 'Boeuf', 'prix' => '10.00'),
                         array('num' => 61, 'nom' => 'Boeuf au basilic', 'viande' => 'Boeuf', 'prix' => '10.00', 'piquant'),
                         array('num' => 62, 'nom' => 'Boeuf aux legumes', 'viande' => 'Boeuf', 'prix' => '10.00'),
                         array('num' => 63, 'nom' => 'Crevettes sautees aux legumes', 'viande' => 'Fruits de mer', 'prix' => '12.00'),
                         array('num' => 64, 'nom' => 'Crevettes sautees au basilic', 'viande' => 'Fruits de mer', 'prix' => '12.00'),
                         array('num' => 65, 'nom' => 'Crevettes a la sauce aigre-douce/piquante', 'viande' => 'Fruits de mer', 'prix' => '12.00'),
                         array('num' => 66, 'nom' => 'Crevettes aux champignons noirs', 'viande' => 'Fruits de mer', 'prix' => '12.00'),
                         array('num' => 67, 'nom' => 'Gambas au sel et poivre', 'viande' => 'Fruit de mer', 'prix' => '16.00'),
                         array('num' => 68, 'nom' => 'Filet de poisson au gingembre et ciboulettes', 'viande' => 'Fruit de mer', 'prix' => '11.00'),
                         array('num' => 69, 'nom' => 'Filet de poisson au citron', 'viande' => 'Fruit de mer', 'prix' => '11.00'),
                         array('num' => 70, 'nom' => 'Filet de poisson a la sauce aigre-douce', 'viande' => 'Fruit de mer', 'prix' => '11.00'),
                         array('num' => 71, 'nom' => 'Coquille St Jacques sautee aux legumes', 'viande' => 'Fruit de mer', 'prix' => '13.00'),
                         array('num' => 72, 'nom' => 'Coquille St Jacques a la sauce aigre-douce/piquante', 'viande' => 'Fruit de mer', 'prix' => '13.00'),
                         array('num' => 73, 'nom' => 'Coquille St Jacques au basilic', 'viande' => 'Fruit de mer', 'prix' => '13.00'),
                         array('num' => 74, 'nom' => 'Calamar au sate', 'viande' => 'Fruit de mer', 'prix' => '12.00'),
                         array('num' => 75, 'nom' => 'Calamar aux legumes', 'viande' => 'Fruit de mer', 'prix' => '12.00'),
                         array('num' => 76, 'nom' => 'Calamar au curry', 'viande' => 'Fruit de mer', 'prix' => '12.00'),
                         array('num' => 77, 'nom' => 'Cuisse de grenouille sautee au sel et poivre', 'viande' => 'Grenouille', 'prix' => '11.00'),
                         array('num' => 78, 'nom' => 'Cuisse de grenouille au beurre', 'viande' => 'Grenouille', 'prix' => '11.00'),
                         array('num' => 79, 'nom' => 'Cuisse de grenouille au curry', 'viande' => 'Grenouille', 'prix' => '11.00')
                 ); ?>

            @foreach($plats as $plat)
               <div class="mix category-7 menu-restaurant" data-myorder="2">
                  <span class="clearfix">
                     <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">{{ $plat['num'] }}&nbsp;.&nbsp;{{ $plat['nom'] }}</a>
                     <span style="left: 166px; right: 44px;" class="menu-line"></span>
                     <span class="menu-price">&euro;{{ $plat['prix'] }}</span>
                  </span>
                  <span class="menu-subtitle">Type de viande : {{ $plat['viande'] }}</span>
               </div>
            @endforeach

            <?php 
            $desserts = array(
                         array('num' => 80, 'nom' => 'Nougats mous Vietnamiens', 'prix' => '4.00', 'commentaire' => ''),
                         array('num' => 81, 'nom' => 'Gingembre confit', 'prix' => '4.00', 'commentaire' => ''),
                         array('num' => 82, 'nom' => 'Perles de coco', 'prix' => '4.00', 'commentaire' => ''),
                         array('num' => 83, 'nom' => 'Gateau Maison', 'prix' => '4.00', 'commentaire' => 'banane et lait de coco'),
                         array('num' => 84, 'nom' => 'Coupe de lychee au sirop', 'prix' => '3.50', 'commentaire' => ''),
                         array('num' => 85, 'nom' => 'Beignets aux fruits', 'prix' => '3.50', 'commentaire' => 'Banane/Pomme/Ananas'),
                         array('num' => 86, 'nom' => 'Assortiment de beignets', 'prix' => '5.50', 'commentaire' => ''),
                         array('num' => 87, 'nom' => 'Supplement flambe au sake', 'prix' => '1.50', 'commentaire' => '')
                 ); ?>

            @foreach($desserts as $dessert)
               <div class="mix category-8 menu-restaurant" data-myorder="2">
                  <span class="clearfix">
                     <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">{{ $dessert['num'] }}&nbsp;.&nbsp;{{ $dessert['nom'] }}</a>
                     <span style="left: 166px; right: 44px;" class="menu-line"></span>
                     <span class="menu-price">&euro;{{ $dessert['prix'] }}</span>
                  </span>
                  @if ( $dessert['commentaire'] != '')
                     <br><span class="menu-subtitle">Commentaire : {{ $dessert['commentaire'] }}</span>
                  @endif
               </div>
            @endforeach

            <?php 
            $menus = array(
                         array('nom' => 'Menu du jour', 'prix' => '11.00', 'commentaire' => 'Sauf weekend et jours fériés'),
                         array('nom' => 'Menu Enfant', 'prix' => '8.00', 'commentaire' => 'Moins de 10 ans'),
                         array('nom' => 'Menu Vapeur', 'prix' => '15.00', 'commentaire' => ''),
                         array('nom' => 'Menu 16', 'prix' => '16.00', 'commentaire' => ''),
                         array('nom' => 'Menu du chef', 'prix' => '18', 'commentaire' => ''),
                         array('nom' => 'Menu Amoureux', 'prix' => '55', 'commentaire' => 'Pour 2 personnes')
                 ); ?>

            @foreach($menus as $menu)
               <div class="mix category-9 menu-restaurant" data-myorder="2">
                  <span class="clearfix">
                     <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">{{ $menu['nom'] }}</a>
                     <span style="left: 166px; right: 44px;" class="menu-line"></span>
                     <span class="menu-price">&euro;{{ $menu['prix'] }}</span>
                  </span>
                  @if ( $dessert['commentaire'] != '')
                     <br><span class="menu-subtitle">Commentaire : {{ $dessert['commentaire'] }}</span>
                  @endif
               </div>
            @endforeach

         </div>
      </div>
   </div>
</section>
<!--/ menu -->

<!-- contact -->
<section id="contact" class="section-padding">
   <div class="container">
      <div class="row">
         <div class="col-md-12 text-center">
            <h1 class="header-h">Réservation</h1>
            <p class="header-p">Vous connaissez bien la maison déjà, vous souhaitez faire une réservation ?</p>
         </div>
      </div>
      <div class="row msg-row">
         <div class="col-md-4 col-sm-4 mr-15">
            <div class="media-2">
               <div class="media-left">
                  <div class="contact-phone bg-1 text-center"><span class="phone-in-talk fa fa-phone"></span></div>
               </div>
               <div class="media-body">
                  <h4 class="dark-blue regular">Phone Numbers</h4>
                  <p class="light-blue regular alt-p">+33 4 78 57 52 14 - <span class="contacts-sp">Phone Booking</span></p>
               </div>
            </div>
            <div class="media-2">
               <div class="media-left">
                  <div class="contact-email bg-14 text-center"><span class="hour-icon fa fa-clock-o"></span></div>
               </div>
               <div class="media-body">
                  <h4 class="dark-blue regular">Horaire d'ouverture</h4>
                  <p class="light-blue regular alt-p"> Lundi soir : <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;18.00 - 24:00</p>
                  <p class="light-blue regular alt-p"> Mardi - Samedi : <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;11.00 - 14:00<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;18:00 - 24.00</p>
                  </p>
               </div>
            </div>
         </div>
         <div class="col-md-8 col-sm-8">
            <form action="" method="post" role="form" class="contactForm">
               <div id="sendmessage">Your booking request has been sent. Thank you!</div>
               <div id="errormessage"></div>
               <div class="col-md-6 col-sm-6 contact-form pad-form">
                  <div class="form-group label-floating is-empty">
                     <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                     <div class="validation"></div>
                  </div>
               </div>
               <div class="col-md-6 col-sm-6 contact-form">
                  <div class="form-group">
                     <input type="date" class="form-control label-floating is-empty" name="date" id="date" placeholder="Date" data-rule="required" data-msg="This field is required" />
                     <div class="validation"></div>
                  </div>
               </div>
               <div class="col-md-6 col-sm-6 contact-form pad-form">
                  <div class="form-group">
                     <input type="email" class="form-control label-floating is-empty" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                     <div class="validation"></div>
                  </div>
               </div>
               <div class="col-md-6 col-sm-6 contact-form">
                  <div class="form-group">
                     <input type="time" class="form-control label-floating is-empty" name="time" id="time" placeholder="Time" data-rule="required" data-msg="This field is required" />
                     <div class="validation"></div>
                  </div>
               </div>
               <div class="col-md-6 col-sm-6 contact-form">
                  <div class="form-group">
                     <input type="text" class="form-control label-floating is-empty" name="phone" id="phone" placeholder="Phone" data-rule="required" data-msg="This field is required" />
                     <div class="validation"></div>
                  </div>
               </div>
               <div class="col-md-6 col-sm-6 contact-form">
                  <div class="form-group">
                     <input type="text" class="form-control label-floating is-empty" name="people" id="people" placeholder="People" data-rule="required" data-msg="This field is required" />
                     <div class="validation"></div>
                  </div>
               </div>
               <div class="col-md-12 contact-form">
                  <div class="form-group label-floating is-empty">
                     <textarea class="form-control" name="message" rows="5" rows="3" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                     <div class="validation"></div>
                  </div>
               </div>
               <div class="col-md-12 btnpad">
                  <div class="contacts-btn-pad">
                     <button class="contacts-btn">R&eacute;server</button>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</section>
<!-- / contact -->

<!-- footer -->
<footer class="footer text-center">
   <div class="footer-top">
      <div class="row">
         <div class="col-md-offset-3 col-md-6 text-center">
            <div class="widget">
               <h4 class="widget-title">Restaurant<br>Le New Saigon</h4>
               <address>46 Bis Avenue Edouard Millaud<br>69290 Craponne</address>
               <div class="social-list">
                 <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                 <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
               </div>
               <p class="copyright clear-float">
                  © Delicious Theme. All Rights Reserved
                  <div class="credits">
                     <!--
                     All the links in the footer should remain intact.
                     You can delete the links only if you purchased the pro version.
                     Licensing information: https://bootstrapmade.com/license/
                     Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Delicious
                     -->
                     Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                     <br>Modified by <a href="https://bootstrapmade.com/">bornbygoogle</a>
                  </div>
               </p>
            </div>
         </div>
      </div>
   </div>
</footer>
<!-- / footer -->
