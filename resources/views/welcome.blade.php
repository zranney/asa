@extends('./layouts/app')

@section('title', 'ASA')


@section('content')

<!-- Swiper-->
<section class="section swiper-container swiper-slider swiper-classic bg-gray-2" data-loop="true" data-autoplay="4000" data-simulate-touch="false" data-slide-effect="fade">
    <div class="swiper-wrapper">
      <div class="swiper-slide text-center" data-slide-bg="images/slider-1-slide-1-1920x671.jpg">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-6">
              <div class="swiper-slide-caption">
                <h1 data-caption-animate="fadeInUp" data-caption-delay="100">We play Soccer</h1>
                <h4 data-caption-animate="fadeInUp" data-caption-delay="200">like no one else in the united states</h4><a class="button button-primary" data-caption-animate="fadeInUp" data-caption-delay="300" href="/about-us">Voir plus</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide" data-slide-bg="images/slider-1-slide-2-1920x671.jpg">
        <div class="container">
          <div class="row justify-content-end">
            <div class="col-xl-5">
              <div class="swiper-slide-caption">
                <h1 data-caption-animate="fadeInUp" data-caption-delay="100">We Are Pros</h1>
                <h4 data-caption-animate="fadeInUp" data-caption-delay="200">in Everything Concerning Soccer</h4><a class="button button-primary" data-caption-animate="fadeInUp" data-caption-delay="300" href="/about-us">Voir plus</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide" data-slide-bg="images/slider-1-slide-3-1920x671.jpg">
        <div class="container">
          <div class="row">
            <div class="col-xl-5">
              <div class="swiper-slide-caption">
                <h1 data-caption-animate="fadeInUp" data-caption-delay="100">Best Website</h1>
                <h4 data-caption-animate="fadeInUp" data-caption-delay="200">for soccer news, updates, <br class="d-none d-xl-block"> and game results</h4><a class="button button-primary" data-caption-animate="fadeInUp" data-caption-delay="300" href="/about-us">Voir plus</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="swiper-button swiper-button-prev"></div>
    <div class="swiper-button swiper-button-next"></div>
    <div class="swiper-pagination"></div>
  </section>

  <!-- Latest News-->
  <section class="section section-md bg-gray-100">
    <div class="container">
      <div class="row row-50">
        <div class="col-lg-8">
          <div class="main-component">

            @include('partiels.actualites', ['actualites' => $actualites])
          </div>

          <div class="main-component">
            <!-- Heading Component-->
            <article class="heading-component">
              <div class="heading-component-inner">
                <h5 class="heading-component-title">Matchs à venir
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
            <div class="aside-component">
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
            </div>
          </aside>
        </div>
      </div>
    </div>
  </section>

@endsection