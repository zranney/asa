@extends('./layouts/app')

@section('title', 'ASA - Accueil')


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
            <!-- Heading Component-->
            <article class="heading-component">
              <div class="heading-component-inner">
                <h5 class="heading-component-title">Actualités
                </h5><a class="button button-xs button-gray-outline" href="#">Tout voir</a>
              </div>
            </article>
            <div class="row row-30">
              <div class="col-md-6">
                <!-- Post Future-->
                <article class="post-future"><a class="post-future-figure" href="#"><img src="images/news-2-1-368x287.jpg" alt="" width="368" height="287"/></a>
                  <div class="post-future-main">
                    <h4 class="post-future-title"><a href="#">Sadio mane still makes a difference, sam wilson admits</a></h4>
                    <div class="post-future-meta">
                      <!-- Badge-->
                      <div class="badge badge-secondary">The Team
                      </div>
                      <div class="post-future-time"><span class="icon mdi mdi-clock"></span>
                        <time datetime="2020">April 15, 2020</time>
                      </div>
                    </div>
                    <hr/>
                    <div class="post-future-text">
                      <p>Liverpool would love to welcome Philippe Coutinho back, but Sadio Mane is carrying...</p>
                    </div>
                    <div class="post-future-footer group-flex group-flex-xs"><a class="button button-gray-outline" href="#">Read more</a>
                      <div class="post-future-share">
                        <div class="inline-toggle-parent">
                          <div class="inline-toggle icon material-icons-share"></div>
                          <div class="inline-toggle-element">
                            <ul class="list-inline">
                              <li>Share</li>
                              <li><a class="icon fa-facebook" href="#"></a></li>
                              <li><a class="icon fa-twitter" href="#"></a></li>
                              <li><a class="icon fa-google-plus" href="#"></a></li>
                              <li><a class="icon fa-instagram" href="#"></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </article>
              </div>
              <div class="col-md-6">
                <!-- Post Future-->
                <article class="post-future"><a class="post-future-figure" href="#"><img src="images/news-2-2-368x287.jpg" alt="" width="368" height="287"/></a>
                  <div class="post-future-main">
                    <h4 class="post-future-title"><a href="#">Robertson's decent debut at european cup 2020</a></h4>
                    <div class="post-future-meta">
                      <!-- Badge-->
                      <div class="badge badge-secondary">The Team
                      </div>
                      <div class="post-future-time"><span class="icon mdi mdi-clock"></span>
                        <time datetime="2020">April 15, 2020</time>
                      </div>
                    </div>
                    <hr/>
                    <div class="post-future-text">
                      <p>Robertson, in his first Anfield outing as a Liverpool player, looked assured at left-back...</p>
                    </div>
                    <div class="post-future-footer group-flex group-flex-xs"><a class="button button-gray-outline" href="#">Read more</a>
                      <div class="post-future-share">
                        <div class="inline-toggle-parent">
                          <div class="inline-toggle icon material-icons-share"></div>
                          <div class="inline-toggle-element">
                            <ul class="list-inline">
                              <li>Share</li>
                              <li><a class="icon fa-facebook" href="#"></a></li>
                              <li><a class="icon fa-twitter" href="#"></a></li>
                              <li><a class="icon fa-google-plus" href="#"></a></li>
                              <li><a class="icon fa-instagram" href="#"></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </article>
              </div>
              <div class="col-md-6">
                <!-- Post Future-->
                <article class="post-future"><a class="post-future-figure" href="#"><img src="images/news-2-3-368x287.jpg" alt="" width="368" height="287"/></a>
                  <div class="post-future-main">
                    <h4 class="post-future-title"><a href="#">Pochettino and ‘gaffer’s son’ Rose estranged – reports</a></h4>
                    <div class="post-future-meta">
                      <!-- Badge-->
                      <div class="badge badge-secondary">The Team
                      </div>
                      <div class="post-future-time"><span class="icon mdi mdi-clock"></span>
                        <time datetime="2020">April 15, 2020</time>
                      </div>
                    </div>
                    <hr/>
                    <div class="post-future-text">
                      <p>Danny Rose and Mauricio Pochettino were once so close that he was nicknamed “the gaffer’s...</p>
                    </div>
                    <div class="post-future-footer group-flex group-flex-xs"><a class="button button-gray-outline" href="#">Read more</a>
                      <div class="post-future-share">
                        <div class="inline-toggle-parent">
                          <div class="inline-toggle icon material-icons-share"></div>
                          <div class="inline-toggle-element">
                            <ul class="list-inline">
                              <li>Share</li>
                              <li><a class="icon fa-facebook" href="#"></a></li>
                              <li><a class="icon fa-twitter" href="#"></a></li>
                              <li><a class="icon fa-google-plus" href="#"></a></li>
                              <li><a class="icon fa-instagram" href="#"></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </article>
              </div>
              <div class="col-md-6">
                <!-- Post Future-->
                <article class="post-future"><a class="post-future-figure" href="#"><img src="images/news-2-4-368x287.jpg" alt="" width="368" height="287"/></a>
                  <div class="post-future-main">
                    <h4 class="post-future-title"><a href="#">Coutinho’s camp: It was all Barca’s fault and we can prove it</a></h4>
                    <div class="post-future-meta">
                      <!-- Badge-->
                      <div class="badge badge-secondary">The Team
                      </div>
                      <div class="post-future-time"><span class="icon mdi mdi-clock"></span>
                        <time datetime="2020">April 15, 2020</time>
                      </div>
                    </div>
                    <hr/>
                    <div class="post-future-text">
                      <p>Philippe Coutinho is reportedly seeking clear-the-air talks with Liverpool after...</p>
                    </div>
                    <div class="post-future-footer group-flex group-flex-xs"><a class="button button-gray-outline" href="#">Read more</a>
                      <div class="post-future-share">
                        <div class="inline-toggle-parent">
                          <div class="inline-toggle icon material-icons-share"></div>
                          <div class="inline-toggle-element">
                            <ul class="list-inline">
                              <li>Share</li>
                              <li><a class="icon fa-facebook" href="#"></a></li>
                              <li><a class="icon fa-twitter" href="#"></a></li>
                              <li><a class="icon fa-google-plus" href="#"></a></li>
                              <li><a class="icon fa-instagram" href="#"></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </article>
              </div>
              <div class="col-md-12">
                <!-- Swiper-->
                <div class="swiper-container swiper-slider post-slider" data-loop="false" data-autoplay="false" data-simulate-touch="false">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="swiper-slide-caption">
                                            <!-- Post Alice-->
                                            <article class="post-alice"><img src="images/post-slide-1-769x397.jpg" alt="" width="769" height="397"/>
                                              <div class="post-alice-main">
                                                <!-- Badge-->
                                                <div class="badge badge-secondary">the team
                                                </div>
                                                <h3 class="post-alice-title"><a href="#">Lewis named AIG MCAA Sevens head coach</a></h3>
                                                <div class="divider"></div>
                                                <div class="post-alice-time"><span class="icon mdi mdi-clock"></span>
                                                  <time datetime="2020">April 15, 2020</time>
                                                </div>
                                              </div>
                                            </article>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="swiper-slide-caption">
                                            <!-- Post Alice-->
                                            <article class="post-alice"><img src="images/post-slide-2-769x397.jpg" alt="" width="769" height="397"/>
                                              <div class="post-alice-main">
                                                <!-- Badge-->
                                                <div class="badge badge-primary">The League
                                                </div>
                                                <h3 class="post-alice-title"><a href="#">rumors about world soccer championship 2020</a></h3>
                                                <div class="divider"></div>
                                                <div class="post-alice-time"><span class="icon mdi mdi-clock"></span>
                                                  <time datetime="2020">April 15, 2020</time>
                                                </div>
                                              </div>
                                            </article>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="swiper-slide-caption">
                                            <!-- Post Alice-->
                                            <article class="post-alice"><img src="images/post-slide-3-769x397.jpg" alt="" width="769" height="397"/>
                                              <div class="post-alice-main">
                                                <!-- Post Video Button--><a class="post-video-button" href="#modal1" data-toggle="modal"><span class="icon material-icons-play_arrow"></span></a>
                                                <h3 class="post-alice-title"><a href="#">2020 Europa League Final</a></h3>
                                                <div class="divider"></div>
                                                <div class="post-alice-time"><span class="icon mdi mdi-clock"></span>
                                                  <time datetime="2020">April 15, 2020</time>
                                                </div>
                                              </div>
                                            </article>
                      </div>
                    </div>
                  </div>
                  <!-- Swiper Pagination-->
                  <div class="swiper-pagination"></div>
                  <!-- Swiper Navigation-->
                  <div class="swiper-button-prev"></div>
                  <div class="swiper-button-next"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="main-component">
            <!-- Heading Component-->
            <article class="heading-component">
              <div class="heading-component-inner">
                <h5 class="heading-component-title">Matchs à venir
                </h5><a class="button button-xs button-gray-outline" href="/calendrier">Calendrier</a>
              </div>
            </article>
            <!-- Game Result Bug-->
            <article class="game-result">
              <div class="game-info game-info-creative">
                <p class="game-info-subtitle">Stade Robert Champroux - 
                  <time datetime="08:30"> 15:30 </time>
                </p>
                <h3 class="game-info-title">National 2 - Journée 3</h3>
                <div class="game-info-main">
                  <div class="game-info-team game-info-team-first">
                    <figure><img src="images/team-sportland-75x99.png" alt="" width="75" height="99"/>
                    </figure>
                    <div class="game-result-team-name">ASA</div>
                    <div class="game-result-team-country">Abidjan</div>
                  </div>
                  <div class="game-info-middle game-info-middle-vertical">
                    <time class="time-big" datetime="2020-04-17"><span class="heading-3">Sam 15</span> Février 2025
                    </time>
                    <div class="game-result-divider-wrap"><span class="game-info-team-divider">VS</span></div>
                    <div class="group-sm">
                      <a class="button button-sm button-primary" href="#">Achetez vos tickets</a>
                    </div>
                  </div>
                  <div class="game-info-team game-info-team-second">
                    <figure><img src="images/team-dream-team-91x91.png" alt="" width="91" height="91"/>
                    </figure>
                    <div class="game-result-team-name">Dream Team</div>
                    <div class="game-result-team-country">San-Pédro</div>
                  </div>
                </div>
              </div>
              <div class="game-info-countdown">
                <div class="countdown countdown-bordered" data-type="until" data-time="15 Feb 2025 15:30" data-format="dhms" data-style="short"></div>
              </div>
            </article>
          </div>
        </div>
        <!-- Aside Block-->
        <div class="col-lg-4">
          <aside class="aside-components">
            <div class="aside-component">
              <div class="owl-carousel-outer-navigation-1">
                <!-- Heading Component-->
                <article class="heading-component">
                  <div class="heading-component-inner">
                    <h5 class="heading-component-title">Derniers résultats
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
                <div class="owl-carousel owl-spacing-1" data-items="1" data-dots="false" data-nav="true" data-autoplay="true" data-autoplay-speed="4000" data-stage-padding="0" data-loop="true" data-margin="30" data-mouse-drag="false" data-animation-in="fadeIn" data-animation-out="fadeOut" data-nav-custom=".owl-carousel-outer-navigation-1">
                  <!-- Game Result Creative-->
                  <article class="game-result game-result-creative">
                    <div class="game-result-main-vertical">
                      <div class="game-result-team game-result-team-horizontal game-result-team-first">
                        <figure class="game-result-team-figure"><img src="images/team-sportland-31x41.png" alt="" width="31" height="41"/>
                        </figure>
                        <div class="game-result-team-title">
                          <div class="game-result-team-name">Sportland</div>
                          <div class="game-result-team-country">Los angeles</div>
                        </div>
                        <div class="game-result-score game-result-score-big game-result-team-win">2<span class="game-result-team-label game-result-team-label-right">Win</span>
                        </div>
                      </div><span class="game-result-team-divider">VS</span>
                      <div class="game-result-team game-result-team-horizontal game-result-team-second">
                        <figure class="game-result-team-figure"><img src="images/team-fenix-40x32.png" alt="" width="40" height="32"/>
                        </figure>
                        <div class="game-result-team-title">
                          <div class="game-result-team-name">Real madrid</div>
                          <div class="game-result-team-country">Spain</div>
                        </div>
                        <div class="game-result-score game-result-score-big">1
                        </div>
                      </div>
                    </div>
                    <div class="game-result-footer">
                      <ul class="game-result-details">
                        <li>Home</li>
                        <li>New Yorkers Stadium</li>
                        <li>
                          <time datetime="2020-04-14">April 14, 2020</time>
                        </li>
                      </ul>
                    </div>
                  </article>
                  <!-- Game Result Creative-->
                  <article class="game-result game-result-creative">
                    <div class="game-result-main-vertical">
                      <div class="game-result-team game-result-team-horizontal game-result-team-first">
                        <figure class="game-result-team-figure"><img src="images/team-bavaria-fc-26x34.png" alt="" width="26" height="34"/>
                        </figure>
                        <div class="game-result-team-title">
                          <div class="game-result-team-name">Bavaria FC</div>
                          <div class="game-result-team-country">Germany</div>
                        </div>
                        <div class="game-result-score game-result-score-big">2
                        </div>
                      </div><span class="game-result-team-divider">VS</span>
                      <div class="game-result-team game-result-team-horizontal game-result-team-second">
                        <figure class="game-result-team-figure"><img src="images/team-athletic-33x30.png" alt="" width="33" height="30"/>
                        </figure>
                        <div class="game-result-team-title">
                          <div class="game-result-team-name">Atletico</div>
                          <div class="game-result-team-country">USA</div>
                        </div>
                        <div class="game-result-score game-result-score-big game-result-team-win">3<span class="game-result-team-label game-result-team-label-right">Win</span>
                        </div>
                      </div>
                    </div>
                    <div class="game-result-footer">
                      <ul class="game-result-details">
                        <li>Away</li>
                        <li>Bavaria Stadium</li>
                        <li>
                          <time datetime="2020-04-14">April 14, 2020</time>
                        </li>
                      </ul>
                    </div>
                  </article>
                </div>
              </div>
            </div>
            <div class="aside-component">
              <!-- Heading Component-->
              <article class="heading-component">
                <div class="heading-component-inner">
                  <h5 class="heading-component-title">Classement
                  {{-- </h5><a class="button button-xs button-gray-outline" href="#">Tout voir</a> --}}
                </div>
              </article>
              <!-- Table team-->
              <div class="table-custom-responsive">
                <table class="table-custom table-standings table-classic">
                  <thead>
                    <tr>
                      <th colspan="2">Position</th>
                      <th>V</th>
                      <th>N</th>
                      <th>D</th>
                      <th>PTS</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><span>1</span></td>
                      <td class="team-inline">
                        <div class="team-figure"><img src="images/team-sportland-31x41.png" alt="" width="31" height="41"/>
                        </div>
                        <div class="team-title">
                          <div class="team-name">Sportland</div>
                          <div class="team-country">USA</div>
                        </div>
                      </td>
                      <td>153</td>
                      <td>30</td>
                      <td>30</td>
                      <td>186</td>
                    </tr>
                    <tr>
                      <td><span>2</span></td>
                      <td class="team-inline">
                        <div class="team-figure"><img src="images/team-dream-team-34x34.png" alt="" width="34" height="34"/>
                        </div>
                        <div class="team-title">
                          <div class="team-name">Dream team</div>
                          <div class="team-country">Spain</div>
                        </div>
                      </td>
                      <td>120</td>
                      <td>30</td>
                      <td>30</td>
                      <td>186</td>
                    </tr>
                    <tr>
                      <td><span>3</span></td>
                      <td class="team-inline">
                        <div class="team-figure"><img src="images/team-real-madrid-28x37.png" alt="" width="28" height="37"/>
                        </div>
                        <div class="team-title">
                          <div class="team-name">Real Madrid</div>
                          <div class="team-country">Spain</div>
                        </div>
                      </td>
                      <td>100</td>
                      <td>30</td>
                      <td>30</td>
                      <td>186</td>
                    </tr>
                    <tr>
                      <td><span>4</span></td>
                      <td class="team-inline">
                        <div class="team-figure"><img src="images/team-celta-vigo-35x39.png" alt="" width="35" height="39"/>
                        </div>
                        <div class="team-title">
                          <div class="team-name">Celta Vigo</div>
                          <div class="team-country">Italy</div>
                        </div>
                      </td>
                      <td>98</td>
                      <td>30</td>
                      <td>30</td>
                      <td>186</td>
                    </tr>
                    <tr>
                      <td><span>5</span></td>
                      <td class="team-inline">
                        <div class="team-figure"><img src="images/team-barcelona-30x35.png" alt="" width="30" height="35"/>
                        </div>
                        <div class="team-title">
                          <div class="team-name">Barcelona</div>
                          <div class="team-country">Spain</div>
                        </div>
                      </td>
                      <td>98</td>
                      <td>30</td>
                      <td>30</td>
                      <td>186</td>
                    </tr>
                    <tr>
                      <td><span>6</span></td>
                      <td class="team-inline">
                        <div class="team-figure"><img src="images/team-bavaria-fc-26x34.png" alt="" width="26" height="34"/>
                        </div>
                        <div class="team-title">
                          <div class="team-name">Bavaria FC</div>
                          <div class="team-country">Germany</div>
                        </div>
                      </td>
                      <td>98</td>
                      <td>30</td>
                      <td>30</td>
                      <td>186</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
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