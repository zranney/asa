<!-- Actualités --> 
<article class="heading-component">
    <div class="heading-component-inner">
        <h5 class="heading-component-title">Actualités</h5>
        {{-- <a class="button button-xs button-gray-outline" href="#">Tout voir</a> --}}
    </div>
</article>
<div class="row row-30">
    @foreach($actualites as $actualite)
    <div class="col-md-6">
        <article class="post-future">
            <a class="post-future-figure" href="#">
                <img src="images/news-2-1-368x287.jpg" alt="" width="368" height="287"/>
            </a>
            <div class="post-future-main">
                <h4 class="post-future-title"><a href="#">{{$actualite->titre}}</a></h4>
                <div class="post-future-meta">
                    <div class="badge badge-secondary">The Team</div>
                    <div class="post-future-time">
                        <span class="icon mdi mdi-clock"></span>
                        <time datetime="{{$actualite->created_at}}">
                            {{ \Carbon\Carbon::parse($actualite->date_publication)->format('d F Y') }}
                        </time>
                    </div>
                </div>
                <hr/>
                <div class="post-future-text">
                    <!-- Texte tronqué -->
                    <p class="actualite-content" id="contenu-{{$actualite->id}}">
                        {{ strlen($actualite->contenu) > 80 ? substr($actualite->contenu, 0, 80) . '...' : $actualite->contenu }}
                    </p>

                    <!-- Boutons -->
                    @if(strlen($actualite->contenu) > 80)
                        <button class="button button-gray-outline" onclick="showFullContent({{ $actualite->id }})" id="btn-lire-plus-{{$actualite->id}}">
                            Lire plus
                        </button>
                        <button class="button button-gray-outline" onclick="hideFullContent({{ $actualite->id }})" id="btn-reduire-{{$actualite->id}}" style="display: none;">
                            Réduire
                        </button>
                    @endif
                </div>
            </div>
        </article>
    </div>
    @endforeach
</div>

<!-- Script -->
<script>
    let actualites = @json($actualites->pluck('contenu', 'id'));

    function showFullContent(id) {
        document.getElementById('contenu-' + id).innerText = actualites[id];
        document.getElementById('btn-lire-plus-' + id).style.display = 'none';
        document.getElementById('btn-reduire-' + id).style.display = 'inline-block';
    }

    function hideFullContent(id) {
        let content = actualites[id];
        let truncated = content.length > 10 ? content.substring(0, 80) + '...' : content;
        
        document.getElementById('contenu-' + id).innerText = truncated;
        document.getElementById('btn-lire-plus-' + id).style.display = 'inline-block';
        document.getElementById('btn-reduire-' + id).style.display = 'none';
    }
</script>


    {{-- <div class="col-md-12">
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
    </div> --}}
  
 
