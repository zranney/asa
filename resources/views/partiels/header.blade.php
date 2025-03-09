<div class="page">
    <!-- Page Header-->
    <header class="section page-header rd-navbar-dark">
      <!-- RD Navbar-->
      <div class="rd-navbar-wrap">
        <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="166px" data-xl-stick-up-offset="166px" data-xxl-stick-up-offset="166px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
          <div class="rd-navbar-panel">
            <!-- RD Navbar Toggle-->
            <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-main"><span></span></button>
            <!-- RD Navbar Panel-->
            <div class="rd-navbar-panel-inner container">
              <div class="rd-navbar-collapse rd-navbar-panel-item rd-navbar-panel-item-left">
                <!-- Owl Carousel-->
                <div class="owl-carousel-navbar owl-carousel-inline-outer">
                  <div class="owl-inline-nav">
                    <button class="owl-arrow owl-arrow-prev"></button>
                    <button class="owl-arrow owl-arrow-next"></button>
                  </div>
                  <div class="owl-carousel-inline-wrap">
                    <div class="owl-carousel owl-carousel-inline" data-items="1" data-dots="false" data-nav="true" data-autoplay="true" data-autoplay-speed="3200" data-stage-padding="0" data-loop="true" data-margin="10" data-mouse-drag="false" data-touch-drag="false" data-nav-custom=".owl-carousel-navbar">
                      <!-- Post Inline-->
                      @foreach($matchs->reverse()->slice(0,2) as $matchday)
                      <article class="post-inline">
                        <time class="post-inline-time" datetime="{{ \Carbon\Carbon::parse($matchday->date)->translatedFormat('d-m-Y') }}">{{ \Carbon\Carbon::parse($matchday->date)->translatedFormat('d-m-Y') }}</time>
                        <p class="post-inline-title">
                          {{ $matchday->domicile ? $matchday->domicile->nom : 'Équipe domicile inconnue' }}
                          <span style="color:yellow;">vs</span>
                          {{ $matchday->exterieur ? $matchday->exterieur->nom : 'Équipe extérieur inconnue' }}
                      </p>
                      </article>
                      @endforeach
                    </div>
                  </div>
                </div>
                {{-- <div class="rd-navbar-main-element">
                  <ul class="list-inline list-inline-sm">
                    <li><a class="icon icon-xs icon-light fa fa-facebook" href="#"></a></li>
                    <li><a class="icon icon-xs icon-light fa fa-instagram" href="#"></a></li>
                  </ul>
                </div> --}}
              </div>
              <div class="rd-navbar-panel-item rd-navbar-panel-item-center">
                <span id="typing-text"></span>
            </div>
            <script>
            document.addEventListener("DOMContentLoaded", function () {
    const text = "Bienvenue sur le site officiel de l'Association Sportive les Anges";
    let index = 0;
    const speed = 50; // Vitesse d'apparition des lettres
    const specialLetters = { "A": true, "S": true, "A": true };
    const delayBetweenLoops = 10000; // Temps avant de recommencer (2s)
    const target = document.getElementById("typing-text");

    function typeWriter() {
        if (index < text.length) {
          let char = text.charAt(index);
            if (specialLetters[char]) {
                char = `<span class="special-letter">${char}</span>`; // Ajoute une classe aux lettres spéciales
            }
            target.innerHTML += char;
            index++;
            setTimeout(typeWriter, speed);
        } else {
            setTimeout(resetTyping, delayBetweenLoops);
        }
    }

    function resetTyping() {
        target.innerHTML = ""; // Efface le texte
        index = 0;
        setTimeout(typeWriter, speed); // Relance l'animation
    }

    // Attendre le chargement total de la page
    window.onload = function () {
        if (target) {
            typeWriter(); // Démarre l’animation une fois la page chargée
        }
    };
});

          </script>
          
              <div class="rd-navbar-panel-item rd-navbar-panel-item-right">
                <!-- Section Contact -->
                <div class="rd-navbar-contact">
                    <a href="tel:0708303116" class="contact-item">
                        <span class="icon fa fa-phone"></span> &nbsp;0708303116
                    </a>
                    <a href="mailto:contact@asa.com" class="contact-item">
                        <span class="icon fa fa-envelope"></span>  &nbsp;contact@asa.com
                    </a>
                </div>
            
                <ul class="list-inline list-inline-bordered">
                    <li>
                        <!-- Select 2-->
                        <li ><a class="rd-navbar-list-link" href="#"><img class="circular-img" src="{{ asset('/storage/photos/orange.png') }}" alt="Orange" /></a></li>
                  <li ><a class="rd-navbar-list-link" href="#"><img class="circular-img" src="{{ asset('/storage/photos/ACI.jfif') }}" alt="Air Côte d'ivoire" /></a></li>
                  <li ><a class="rd-navbar-list-link" href="#"><img class="circular-img" src="{{ asset('/storage/photos/betclic.jfif') }}" alt="Betclic" /></a></li>
                    </li>
                </ul>
            </div>
            
              <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
            </div>
          </div>
          <div class="rd-navbar-main">
            
            <div class="rd-navbar-main-bottom rd-navbar-darker">
              <div class="largeur rd-navbar-main-container container">
                <!-- RD Navbar Nav-->
                                  <ul class="rd-navbar-nav">
                                    <li class="rd-nav-item" style="margin-right: 50px;"><img class="brand-logo " src="images/logo-soccer-default-95x126.png" alt="" width="55" height="72"  id="logo"/></li>
                                    <li class="rd-nav-item {{ request()->is('/') ? 'active' : '' }}"><a class="rd-nav-link" href="/">Accueil</a>
                                    </li>
                                    <li class="rd-nav-item {{ request()->is('club') ? 'active' : '' }}"><a class="rd-nav-link" href="{{ url('/club') }}">CLUB</a>
                                    </li>
                                    <li class="rd-nav-item {{ request()->is('equipe') ? 'active' : '' }}"><a class="rd-nav-link" href="/equipe">EQUIPE</a>
                                    </li>
                                    <li class="rd-nav-item {{ request()->is('calendrier') ? 'active' : '' }}"><a class="rd-nav-link" href="calendrier">CALENDRIER</a>
                                    </li>
                                    <li class="rd-nav-item {{ request()->is('galerie') ? 'active' : '' }}"><a class="rd-nav-link" href="/galerie">GALERIE</a>
                                    </li>
                                    <li class="rd-nav-item {{ request()->is('contact') ? 'active' : '' }}"><a class="rd-nav-link" href="/contact">CONTACT</a>
                                    </li>
                                  </ul>
                                  <div class="rd-navbar-search">
                                    <button class="rd-navbar-search-toggle" data-rd-navbar-toggle=".rd-navbar-search"><span></span></button>
                                    <form class="rd-search" action="#" data-search-live="rd-search-results-live" method="GET">
                                      <div class="form-wrap">
                                        <label class="form-label" for="rd-navbar-search-form-input">Entrer votre recherche ici...</label>
                                        <input class="rd-navbar-search-form-input form-input" id="rd-navbar-search-form-input" type="text" name="s" autocomplete="off">
                                        <div class="rd-search-results-live" id="rd-search-results-live"></div>
                                      </div>
                                      <button class="rd-search-form-submit fl-budicons-launch-search81" type="submit"></button>
                                    </form>
                                  </div>
                
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <script>
      document.getElementById('logo').addEventListener('click', function() {
          window.location.href = '/'; // Remplacez par l'URL de redirection souhaitée
      });
  </script>