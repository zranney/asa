@extends('./layouts/app')

@section('title', 'ASA')


@section('content')

<!-- Swiper-->
<section class="section swiper-container swiper-slider swiper-classic bg-gray-2" data-loop="true" data-autoplay="4000" data-simulate-touch="false" data-slide-effect="fade">
    <div class="swiper-wrapper">
      <div class="swiper-slide text-center" data-slide-bg="images/stade.jpg">
        <div class="container">
          <div class="row justify-content-center">
          </div>
        </div>
      </div>
    </div>
    <div class="swiper-overlay1">
      <span id="leader-text" data-message="{{ $message }}"></span>
  </div>

  <script>

document.addEventListener("DOMContentLoaded", function () {
    const legendLeader = document.getElementById("leader-text");
    const textLeader = legendLeader.getAttribute("data-message"); // 🔥 Récupération du message de la BDD
    const wordsLeader = textLeader.split(" ");
    
    let indexLeader = 0;
    function typeWriterLeader() {
        if (indexLeader < wordsLeader.length) {
            let wordSpan = document.createElement("span");
            wordSpan.innerHTML = wordsLeader[indexLeader] + " ";
            
            if (indexLeader === 0) {
                wordSpan.classList.add("first-word"); // 🔴 Style spécial pour le premier mot
            } else {
                wordSpan.style.color = "white"; 
            }
            
            legendLeader.appendChild(wordSpan);
            indexLeader++;
            setTimeout(typeWriterLeader, 300); // ⏳ Délai entre chaque mot
        } else {
            legendLeader.style.opacity = 1;
            legendLeader.style.transform = "translateY(0)";
        }
    }

    setTimeout(typeWriterLeader, 2500); // ⏳ Lancer après 1.5s
});

  </script>


    <div class="swiper-overlay">
      <div class="swiper-message" id="message1">Découvrez nos équipes et compétitions</div>
      <div class="swiper-message" id="message2">Découvrez nos équipes et compétitions</div>
      <div class="swiper-message" id="message3">Rejoignez-nous pour une expérience unique</div>
  </div>
<script>
 document.addEventListener("DOMContentLoaded", function () {
    const overlay = document.querySelector(".swiper-overlay");
    const messages = [
        document.getElementById("message1"),
        document.getElementById("message2"),
        document.getElementById("message3")
    ];
    
    const delayStart = 5000; // Apparition de l'overlay après 5s
    const delayBetween = 1000; // 1s entre chaque message

    function showMessages() {
        messages.forEach((msg, index) => {
            setTimeout(() => {
                msg.classList.add("show-message");
            }, index * delayBetween);
        });
    }

    // Affiche l'overlay puis les messages
    setTimeout(() => {
        overlay.classList.add("show-overlay");
        setTimeout(showMessages, 1000);
    }, delayStart);
});

</script>  
    
  </section>
  <section class="quicklinks" id="quicklinks">
    <div class="quicklinks__container">
        <ul class="quicklinks__menu">
            <span class="quicklinks__title">Abonnez-vous à nos pages pour ne rien manquer !</span>
            {{-- <li class="quicklinks__item">
                <a class="quicklinks__link" href="/culers-membership">Devenez Membre</a>
            </li> --}}
        </ul>
    </div>
</section>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const quicklinks = document.getElementById("quicklinks");
    const slider = document.querySelector(".swiper-container"); // Sélectionne le slider

    if (!quicklinks || !slider) {
        console.error("❌ Élément non trouvé : Vérifie que l'ID `quicklinks` et la classe `.swiper-container` existent.");
        return;
    }

    function handleScroll() {
        const sliderBottom = slider.getBoundingClientRect().bottom;
        console.log("🖥️ Position du slider :", sliderBottom); // Vérification

        if (sliderBottom < window.innerHeight * 0.75) { 
            quicklinks.classList.add("show"); // Afficher la section après 75% de l'écran
        } else {
            quicklinks.classList.remove("show"); // Cacher si on revient en haut
        }
    }

    window.addEventListener("scroll", handleScroll);
});


</script>


  <!-- Latest News-->
  <section class="section section-md custom-gradient-bg">
    <div class="container" style="background:white; padding: 50px; border-radius: 25px;">
      <div class="row row-50 distance">
        <div class="col-lg-8">
          <div class="main-component">

            @include('partiels.actualites', ['actualites' => $actualites])
          </div>

          <div class="main-component">
            <!-- Heading Component-->
            <article class="heading-component">
              <div class="heading-component-inner">
                <h5 class="heading-component-title">Prochain match
                </h5><a class="button button-xs button-gray-outline" href="/calendrier">Calendrier</a>
              </div>
            </article>
            @if ($matchs->count() > 0)
            @foreach($matchs->reverse()->take(1) as $match)
              
            
            <!-- Game Result Bug-->
            <article class="game-result">
              <div class="game-info game-info-creative">
                <p class="game-info-subtitle">{{ $match->lieu }} - 
                  <time datetime="{{ $match->heure }}">
                    {{ \Carbon\Carbon::parse($match->heure)->format('H\hi') }}
                </time>
                </p>
                <h3 class="game-info-title">{{ $match->titre }}</h3>
                <div class="game-info-main">
                  <div class="game-info-team game-info-team-first">
                    <figure><img src="images/team-sportland-75x99.png" alt="" width="75" height="99"/>
                    </figure>
                    <div class="game-result-team-name">{{ $match->domicile->nom }}</div>
                    {{-- <div class="game-result-team-country">Abidjan</div> --}}
                  </div>
                  <div class="game-info-middle game-info-middle-vertical">
                    <time class="time-big" datetime="{{ \Carbon\Carbon::parse($match->date)->format('Y-m-d') }}">
                      <span class="heading-3">
                          {{ ucfirst(\Carbon\Carbon::parse($match->date)->translatedFormat('D d')) }}
                      </span> 
                      {{ \Carbon\Carbon::parse($match->date)->translatedFormat('F Y') }}
                  </time>
                    <div class="game-result-divider-wrap"><span class="game-info-team-divider">VS</span></div>
                    <div class="group-sm">
                      <a class="button button-sm button-primary" href="#">Achetez vos tickets</a>
                    </div>
                  </div>
                  <div class="game-info-team game-info-team-second">
                    <figure><img src="images/team-dream-team-91x91.png" alt="" width="91" height="91"/>
                    </figure>
                    <div class="game-result-team-name">{{ $match->exterieur->nom }}</div>
                    {{-- <div class="game-result-team-country">San-Pédro</div> --}}
                  </div>
                </div>
              </div>
              @if (\Carbon\Carbon::parse($match->date)->isToday())
        <div class="game-info-countdown">
          <div class="countdown countdown-bordered" data-type="until" data-time="{{ $match->date }} {{ $match->heure }}" data-format="dhms" data-style="short">Match aujourd'hui dans {{ $match->date }} {{ $match->heure }}</div>
      </div>
          @else
        <div class="game-info-countdown">
            <div class="countdown countdown-bordered" data-type="until" data-time="{{ $match->date }} {{ $match->heure }}" data-format="dhms" data-style="short">{{ $match->date }} {{ $match->heure }}</div>
        </div>
        
        @endif
            </article>
            @endforeach
          </div>
          <div class="main-component">
            <article class="heading-component">
                <div class="heading-component-inner">
                    <h5 class="heading-component-title">Notre Équipe</h5>
                </div>
            </article>
        
            <div class="row row-30" style="justify-content: center;">
                @foreach ($categories as $poste => $joueurs)
                    @if ($joueurs->count() > 0)
                        <div class="poste-section">
                            <h3 class="poste-titre">
                                <i class="{{ App\Http\Controllers\JoueurController::getPosteIcon($poste) }}"></i> 
                                {{ $poste }}
                            </h3>
        
                            <div class="new-effectif-slider">
                              <!-- Flèche gauche -->
                              <button class="new-slide-btn new-prev-btn"><i class="fas fa-chevron-left"></i></button>
                          
                              <!-- Conteneur des joueurs -->
                              <div class="new-player-wrapper">
                                  <div class="new-player-list">
                                      @foreach ($joueurs as $joueur)
                                          <div class="new-player-card">
                                              <img src="{{ asset('storage/'. $joueur->photo) }}" alt="{{ $joueur->nom }} {{ $joueur->prenom }}">
                                              <div class="new-player-details">
                                                  <h5>{{ $joueur->numero }}</h5>
                                                  <div class="new-player-name">
                                                      <h6>{{ $joueur->prenom }}</h6>
                                                      <h4>{{ $joueur->nom }}</h4>
                                                  </div>
                                              </div>
                                          </div>
                                      @endforeach
                                  </div>
                              </div>
                          
                              <!-- Flèche droite -->
                              <button class="new-slide-btn new-next-btn"><i class="fas fa-chevron-right"></i></button>
                          
                              <!-- Pagination -->
                              <div class="new-swiper-pagination"></div>
                          </div>
                          
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
        
        
<script>

document.addEventListener("DOMContentLoaded", function () {
    const sliders = document.querySelectorAll(".new-effectif-slider");

    sliders.forEach(slider => {
        const prevBtn = slider.querySelector(".new-prev-btn");
        const nextBtn = slider.querySelector(".new-next-btn");
        const playerList = slider.querySelector(".new-player-list");
        const pagination = slider.querySelector(".new-swiper-pagination");
        const players = Array.from(playerList.children);
        let index = 0;
        const maxVisible = 4; // 🔹 Afficher 4 cartes maximum par page

        if (players.length === 0) return;

        function updateSlider() {
            const playerWidth = players[0].offsetWidth + 20; // Largeur + espace entre cartes
            const totalPlayers = players.length;
            let maxIndex = Math.max(0, totalPlayers - maxVisible);

            // 🔹 Ajustement pour la dernière page (éviter les espaces vides)
            if (index + maxVisible > totalPlayers) {
                index = totalPlayers - maxVisible;
            }

            playerList.style.transition = "transform 0.6s ease-in-out"; 
            playerList.style.transform = `translateX(-${index * playerWidth}px)`;

            // 🔹 Afficher ou cacher les flèches
            prevBtn.style.display = index > 0 ? "flex" : "none";
            nextBtn.style.display = index + maxVisible < totalPlayers ? "flex" : "none";

            updatePagination();
        }

        function updatePagination() {
            if (!pagination) return;
            pagination.innerHTML = "";
            const pageCount = Math.ceil(players.length / maxVisible);

            for (let i = 0; i < pageCount; i++) {
                const bullet = document.createElement("span");
                bullet.classList.add("new-swiper-pagination-bullet");
                if (i === Math.floor(index / maxVisible)) {
                    bullet.classList.add("active");
                }
                bullet.addEventListener("click", () => {
                    index = i * maxVisible;
                    updateSlider();
                });
                pagination.appendChild(bullet);
            }
        }

        nextBtn.addEventListener("click", function () {
            const totalPlayers = players.length;
            let maxIndex = Math.max(0, totalPlayers - maxVisible);

            if (index + maxVisible < totalPlayers) {
                index += maxVisible;
                if (index > maxIndex) index = maxIndex;
                updateSlider();
            }
        });

        prevBtn.addEventListener("click", function () {
            if (index > 0) {
                index -= maxVisible;
                if (index < 0) index = 0;
                updateSlider();
            }
        });

        window.addEventListener("resize", () => {
            index = 0;
            updateSlider();
        });

        updateSlider();
    });
});



</script>     
        </div>
        @endif
        <!-- Aside Block-->
        <div class="col-lg-4">
          <aside class="aside-components">
            
            @include('partiels.resultats', ['rencontres' => $classements])
            @include('partiels.classement', ['classements' => $classements])
           
            <div class="aside-component">
              <!-- Heading Component-->
              <article class="heading-component">
                <div class="heading-component-inner">
                  <h5 class="heading-component-title">Nos récompenses
                  </h5>
                </div>
              </article>
              <!-- Owl Carousel-->
              <div class="owl-carousel owl-carousel-dots-modern awards-carousel" data-items="1" data-autoplay="true" data-autoplay-speed="4000" data-dots="true" data-nav="false" data-stage-padding="0" data-loop="true" data-margin="0" data-mouse-drag="true">
                                  <!-- Awards Item-->
                                  <div class="awards-item"> 
                                    <div class="awards-item-main">
                                      <h4 class="awards-item-title"><span class="text-accent">World</span>Champions
                                      </h4>
                                      <div class="divider"></div>
                                      <h5 class="awards-item-time">December 2014</h5>
                                    </div>
                                    <div class="awards-item-aside"> <img src="images/thumbnail-minimal-1-67x147.png" alt="" width="67" height="147"/>
                                    </div>
                                  </div>
                                  <!-- Awards Item-->
                                  <div class="awards-item"> 
                                    <div class="awards-item-main">
                                      <h4 class="awards-item-title"><span class="text-accent">Best</span>Forward
                                      </h4>
                                      <div class="divider"></div>
                                      <h5 class="awards-item-time">June 2015</h5>
                                    </div>
                                    <div class="awards-item-aside"> <img src="images/thumbnail-minimal-2-68x126.png" alt="" width="68" height="126"/>
                                    </div>
                                  </div>
                                  <!-- Awards Item-->
                                  <div class="awards-item"> 
                                    <div class="awards-item-main">
                                      <h4 class="awards-item-title"><span class="text-accent">Best</span>Coach
                                      </h4>
                                      <div class="divider"></div>
                                      <h5 class="awards-item-time">November 2016</h5>
                                    </div>
                                    <div class="awards-item-aside"> <img src="images/thumbnail-minimal-3-73x135.png" alt="" width="73" height="135"/>
                                    </div>
                                  </div>
              </div>
            </div>
            <div class="aside-component">
              <!-- Heading Component-->
              <article class="heading-component">
                <div class="heading-component-inner">
                  <h5 class="heading-component-title">Galerie
                  </h5>
                </div>
              </article>
              <article class="gallery" data-lightgallery="group">
                <div class="row row-10 row-narrow">
                  <div class="col-6 col-sm-4 col-md-6 col-lg-4"><a class="thumbnail-creative" data-lightgallery="item" href="images/gallery-soccer-1-original.jpg"><img src="images/gallery-soccer-1-212x212.jpg" alt=""/>
                      <div class="thumbnail-creative-overlay"></div></a>
                  </div>
                  <div class="col-6 col-sm-4 col-md-6 col-lg-4"><a class="thumbnail-creative" data-lightgallery="item" href="images/gallery-soccer-2-original.jpg"><img src="images/gallery-soccer-2-212x212.jpg" alt=""/>
                      <div class="thumbnail-creative-overlay"></div></a>
                  </div>
                  <div class="col-6 col-sm-4 col-md-6 col-lg-4"><a class="thumbnail-creative" data-lightgallery="item" href="images/gallery-soccer-3-original.jpg"><img src="images/gallery-soccer-3-212x212.jpg" alt=""/>
                      <div class="thumbnail-creative-overlay"></div></a>
                  </div>
                  <div class="col-6 col-sm-4 col-md-6 col-lg-4"><a class="thumbnail-creative" data-lightgallery="item" href="images/gallery-soccer-4-original.jpg"><img src="images/gallery-soccer-4-212x212.jpg" alt=""/>
                      <div class="thumbnail-creative-overlay"></div></a>
                  </div>
                  <div class="col-6 col-sm-4 col-md-6 col-lg-4"><a class="thumbnail-creative" data-lightgallery="item" href="images/gallery-soccer-5-original.jpg"><img src="images/gallery-soccer-5-212x212.jpg" alt=""/>
                      <div class="thumbnail-creative-overlay"></div></a>
                  </div>
                  <div class="col-6 col-sm-4 col-md-6 col-lg-4"><a class="thumbnail-creative" data-lightgallery="item" href="images/gallery-soccer-6-original.jpg"><img src="images/gallery-soccer-6-212x212.jpg" alt=""/>
                      <div class="thumbnail-creative-overlay"></div></a>
                  </div>
                </div>
              </article>
            </div>
            {{-- <div class="aside-component">
              <div class="owl-carousel-outer-navigation">
                <!-- Heading Component-->
                <article class="heading-component">
                  <div class="heading-component-inner">
                    <h5 class="heading-component-title">Boutique
                    </h5>
                    <div class="owl-carousel-arrows-outline">
                      <div class="owl-nav">
                        <button class="owl-arrow owl-arrow-prev"></button>
                        <button class="owl-arrow owl-arrow-next"></button>
                      </div>
                    </div>
                  </div>
                </article>
                <!-- Owl Carousel-->
                <div class="owl-carousel owl-spacing-1" data-items="1" data-dots="false" data-nav="true" data-autoplay="true" data-autoplay-speed="7000" data-stage-padding="0" data-loop="true" data-margin="30" data-mouse-drag="false" data-animation-in="fadeIn" data-animation-out="fadeOut" data-nav-custom=".owl-carousel-outer-navigation-1">
                  <article class="product">
                    <header class="product-header">
                      <!-- Badge-->
                      <div class="badge badge-red">hot<span class="icon material-icons-whatshot"></span>
                      </div>
                      <div class="product-figure"><img src="images/shop/product-1.png" alt=""/></div>
                      <div class="product-buttons">
                        <div class="product-button product-button-share fl-bigmug-line-share27" style="font-size: 22px">
                          <ul class="product-share">
                            <li class="product-share-item"><span>Partager</span></li>
                            <li class="product-share-item"><a class="icon fa fa-facebook" href="#"></a></li>
                            <li class="product-share-item"><a class="icon fa fa-instagram" href="#"></a></li>
                            <li class="product-share-item"><a class="icon fa fa-twitter" href="#"></a></li>
                            <li class="product-share-item"><a class="icon fa fa-google-plus" href="#"></a></li>
                          </ul>
                        </div><a class="product-button fl-bigmug-line-shopping202" href="#" style="font-size: 26px"></a><a class="product-button fl-bigmug-line-zoom60" href="images/shop/product-1-original.jpg" data-lightgallery="item" style="font-size: 25px"></a>
                      </div>
                    </header>
                    <footer class="product-content">
                      <h6 class="product-title"><a href="#">Nike hoops elite backpack</a></h6>
                      <div class="product-price"><span class="product-price-old">$400</span><span class="heading-6 product-price-new">$290</span>
                      </div>
                      <ul class="product-rating">
                        <li><span class="material-icons-star"></span></li>
                        <li><span class="material-icons-star"></span></li>
                        <li><span class="material-icons-star"></span></li>
                        <li><span class="material-icons-star"></span></li>
                        <li><span class="material-icons-star_half"></span></li>
                      </ul>
                    </footer>
                  </article>
                  <article class="product">
                    <header class="product-header">
                      <!-- Badge-->
                      <div class="badge badge-shop">new
                      </div>
                      <div class="product-figure"><img src="images/shop/product-2.png" alt=""/></div>
                      <div class="product-buttons">
                        <div class="product-button product-button-share fl-bigmug-line-share27" style="font-size: 22px">
                          <ul class="product-share">
                            <li class="product-share-item"><span>Share</span></li>
                            <li class="product-share-item"><a class="icon fa fa-facebook" href="#"></a></li>
                            <li class="product-share-item"><a class="icon fa fa-instagram" href="#"></a></li>
                            <li class="product-share-item"><a class="icon fa fa-twitter" href="#"></a></li>
                            <li class="product-share-item"><a class="icon fa fa-google-plus" href="#"></a></li>
                          </ul>
                        </div><a class="product-button fl-bigmug-line-shopping202" href="#" style="font-size: 26px"></a><a class="product-button fl-bigmug-line-zoom60" href="images/shop/product-2-original.jpg" data-lightgallery="item" style="font-size: 25px"></a>
                      </div>
                    </header>
                    <footer class="product-content">
                      <h6 class="product-title"><a href="#">Nike Air Zoom Pegasus</a></h6>
                      <div class="product-price"><span class="heading-6 product-price-new">$290</span>
                      </div>
                      <ul class="product-rating">
                        <li><span class="material-icons-star"></span></li>
                        <li><span class="material-icons-star"></span></li>
                        <li><span class="material-icons-star"></span></li>
                        <li><span class="material-icons-star"></span></li>
                        <li><span class="material-icons-star_half"></span></li>
                      </ul>
                    </footer>
                  </article>
                  <article class="product">
                    <header class="product-header">
                      <!-- Badge-->
                      <div class="badge badge-red">hot<span class="icon material-icons-whatshot"></span>
                      </div>
                      <div class="product-figure"><img src="images/shop/product-3.png" alt=""/></div>
                      <div class="product-buttons">
                        <div class="product-button product-button-share fl-bigmug-line-share27" style="font-size: 22px">
                          <ul class="product-share">
                            <li class="product-share-item"><span>Share</span></li>
                            <li class="product-share-item"><a class="icon fa fa-facebook" href="#"></a></li>
                            <li class="product-share-item"><a class="icon fa fa-instagram" href="#"></a></li>
                            <li class="product-share-item"><a class="icon fa fa-twitter" href="#"></a></li>
                            <li class="product-share-item"><a class="icon fa fa-google-plus" href="#"></a></li>
                          </ul>
                        </div><a class="product-button fl-bigmug-line-shopping202" href="#" style="font-size: 26px"></a><a class="product-button fl-bigmug-line-zoom60" href="images/shop/product-3-original.jpg" data-lightgallery="item" style="font-size: 25px"></a>
                      </div>
                    </header>
                    <footer class="product-content">
                      <h6 class="product-title"><a href="#">Nike distressed baseball hat</a></h6>
                      <div class="product-price"><span class="product-price-old">$400</span><span class="heading-6 product-price-new">$290</span>
                      </div>
                      <ul class="product-rating">
                        <li><span class="material-icons-star"></span></li>
                        <li><span class="material-icons-star"></span></li>
                        <li><span class="material-icons-star"></span></li>
                        <li><span class="material-icons-star"></span></li>
                        <li><span class="material-icons-star_half"></span></li>
                      </ul>
                    </footer>
                  </article>
                </div>
              </div>
            </div> --}}
            <div class="aside-component">
              <!-- Heading Component-->
              <article class="heading-component">
                <div class="heading-component-inner">
                  <h5 class="heading-component-title">Suivez-nous
                  </h5>
                </div>
              </article>
              <!-- Buttons Media-->
              <div class="group-sm group-flex"><a class="button-media button-media-facebook" href="#">
                  <h4 class="button-media-title">8.4k</h4>
                  <p class="button-media-action">Like<span class="icon material-icons-add_circle_outline icon-sm"></span></p><span class="button-media-icon fa-facebook"></span></a><a class="button-media button-media-twitter" href="#">
                    <h4 class="button-media-title">2.7k</h4>
                    <p class="button-media-action">Follow<span class="icon material-icons-add_circle_outline icon-sm"></span></p><span class="button-media-icon fa-instagram"></span></a></div>
            </div>
            <div class="aside-component app-download">
              <!-- Titre -->
              <article class="heading-component">
                  <div class="heading-component-inner">
                      <h5 class="heading-component-title1">Téléchargez notre application</h5>
                  </div>
              </article>
          
              <!-- Section de téléchargement -->
              <div class="app-download-container">
                  <!-- Image du téléphone -->
                  <div class="app-image">
                      <img src="https://asec.ci/assets/images/footer/mobile.png" alt="Télécharger l'application">
                  </div>
          
                  <!-- Texte et boutons -->
                  <div class="app-download-content">
                      <p class="app-download-text">Disponible sur Android & iOS</p>
                      <div class="app-buttons">
                          <a href="#" class="app-download-button">
                              <img src="https://upload.wikimedia.org/wikipedia/commons/7/78/Google_Play_Store_badge_EN.svg" alt="Google Play">
                          </a>
                          <a href="#" class="app-download-button">
                            <i class="fab fa-apple"></i> Télécharger sur l'App Store
                        </a>
                      </div>
                  </div>
              </div>
          </div>
          
            
          </aside>
        </div>
      </div>
    </div>
  </section>

@endsection