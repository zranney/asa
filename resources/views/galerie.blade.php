@extends('./layouts/app')

@section('title', 'ASA - Galerie')


@section('content')

<section class="section section-md bg-gray-100">
    <div class="container">
      <div class="row row-50">
        <div class="col-lg-8">
          <div class="main-component">
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
            <div class="col-6 col-sm-4 col-md-6 col-lg-4"><a class="thumbnail-creative" data-lightgallery="item" href="images/gallery-soccer-6-original.jpg"><img src="images/gallery-soccer-6-212x212.jpg" alt=""/>
                <div class="thumbnail-creative-overlay"></div></a>
            </div>
            <div class="col-6 col-sm-4 col-md-6 col-lg-4"><a class="thumbnail-creative" data-lightgallery="item" href="images/gallery-soccer-6-original.jpg"><img src="images/gallery-soccer-6-212x212.jpg" alt=""/>
                <div class="thumbnail-creative-overlay"></div></a>
            </div>
          </div>
        </article>
</div>
</div>
<div class="col-lg-4">
    <aside class="aside-components">
      <div class="aside-component">
        <article class="heading-component">
            <div class="heading-component-inner">
              <h5 class="heading-component-title">Temps forts
              </h5>
        <div class="col-md-12">
            <!-- Swiper-->
            <div class="swiper-container swiper-slider post-slider" data-loop="false" data-autoplay="false" data-simulate-touch="false">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="swiper-slide-caption">
                                        <!-- Post Alice-->
                                        <article class="post-alice"><img src="images/post-slide-3-769x397.jpg" alt="" width="769" height="397"/>
                                          <div class="post-alice-main">
                                            <!-- Post Video Button--><a class="post-video-button" href="#modal1" data-toggle="modal"><span class="icon material-icons-play_arrow"></span></a>
                                            <h3 class="post-alice-title"><a href="#">journée 2</a></h3>
                                            <div class="divider"></div>
                                            <div class="post-alice-time"><span class="icon mdi mdi-clock"></span>
                                              <time datetime="2020">15 Janvier, 2025</time>
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
        </article>
      </div>
    </aside>
  </div>
</section>


@endsection