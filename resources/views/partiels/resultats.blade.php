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
        @foreach ($rencontres as $rencontre)
    <article class="game-result game-result-creative">
        <div class="game-result-main-vertical">
            <!-- Équipe 1 -->
            <div class="game-result-team game-result-team-horizontal game-result-team-first">
                <figure class="game-result-team-figure">
                    <img src="images/team-sportland-31x41.png" alt="" width="31" height="41"/>
                </figure>
                <div class="game-result-team-title">
                    <div class="game-result-team-name">{{ $rencontre->equipe1->nom }}</div>
                </div>
                <div class="game-result-score game-result-score-big 
                    @if($rencontre->score_equipe_1 > $rencontre->score_equipe_2) game-result-team-win @endif">
                    {{ $rencontre->score_equipe_1 }}
                    @if($rencontre->score_equipe_1 > $rencontre->score_equipe_2)
                        <span class="game-result-team-label game-result-team-label-right">Win</span>
                    @endif
                </div>
            </div>

            <span class="game-result-team-divider">VS</span>

            <!-- Équipe 2 -->
            <div class="game-result-team game-result-team-horizontal game-result-team-second">
                <figure class="game-result-team-figure">
                    <img src="images/team-fenix-40x32.png" alt="" width="40" height="32"/>
                </figure>
                <div class="game-result-team-title">
                    <div class="game-result-team-name">{{ $rencontre->equipe2->nom }}</div>
                </div>
                <div class="game-result-score game-result-score-big 
                    @if($rencontre->score_equipe_2 > $rencontre->score_equipe_1) game-result-team-win @endif">
                    {{ $rencontre->score_equipe_2 }}
                    @if($rencontre->score_equipe_2 > $rencontre->score_equipe_1)
                        <span class="game-result-team-label game-result-team-label-right">Win</span>
                    @endif
                </div>
            </div>
        </div>
        {{-- 
        <div class="game-result-footer">
            <ul class="game-result-details">
                <li>Home</li>
                <li>New Yorkers Stadium</li>
                <li>
                    <time datetime="2020-04-14">April 14, 2020</time>
                </li>
            </ul>
        </div> --}}
    </article>
@endforeach
      </div>
    </div>
  </div>