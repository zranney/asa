@extends('./layouts/app')

@section('title', 'ASA - Calendrier')


@section('content')

<section class="section section-md bg-gray-100">
    <div class="container">
      <div class="row row-50">
        <div class="col-lg-8">
          <div class="main-component">
    <!-- Heading Component-->
    <article class="heading-component">
      <div class="heading-component-inner">
        <h5 class="heading-component-title">Prochain match
        </h5>
      </div>
    </article>
    <!-- Game Result Bug-->
    @if ($matchs->count() > 0)
    <article class="game-result">
        <div class="game-info game-info-creative">
            <p class="game-info-subtitle">{{ $matchs[0]->lieu }} - 
                <time datetime="{{ $matchs[0]->date }}">{{ \Carbon\Carbon::parse($matchs[0]->date)->format('d F Y') }}</time>
            </p>
            <h3 class="game-info-title">{{ $matchs[0]->titre }}</h3>
            <div class="game-info-main">
                <div class="game-info-team game-info-team-first">
                    <figure>
                        <img src="images/team-sportland-75x99.png" alt="" width="75" height="99"/>
                    </figure>
                    <div class="game-result-team-name">{{ $matchs[0]->domicile->nom }}</div>
                </div>
                <div class="game-info-middle game-info-middle-vertical">
                  <time datetime="{{ $matchs[0]->heure }}">
                    {{ \Carbon\Carbon::parse($matchs[0]->heure)->format('H\hi') }}
                </time>
                    <div class="game-result-divider-wrap">
                        <span class="game-info-team-divider">VS</span>
                    </div>
                    <div class="group-sm">
                        <a class="button button-sm button-primary" href="#">Achetez vos tickets</a>
                    </div>
                </div>
                <div class="game-info-team game-info-team-second">
                    <figure>
                        <img src="images/team-dream-team-91x91.png" alt="" width="91" height="91"/>
                    </figure>
                    <div class="game-result-team-name">{{ $matchs[0]->exterieur->nom }}</div>
                </div>
            </div>
        </div>
        <div class="game-info-countdown">
            <div class="countdown countdown-bordered" data-type="until" data-time="{{ $matchs[0]->date }}" data-format="dhms" data-style="short"></div>
        </div>
    </article>
@endif

<ul class="equipe">
    @foreach ($matchs->slice(1, 4) as $matchday)
        <div class="main-component">
            <article class="game-result game-result-creative">
                <div class="game-result-main-vertical">
                    <div class="game-result-team game-result-team-horizontal game-result-team-first">
                        <figure class="game-result-team-figure">
                            <img src="images/team-sportland-31x41.png" alt="" width="31" height="41"/>
                        </figure>
                        <div class="game-result-team-title">
                            <div class="game-result-team-name">{{ $matchday->domicile->nom }}</div>
                        </div>
                       {{--  <div class="game-result-score game-result-score-big game-result-team-win">-</div> --}}
                    </div>
                    <span class="game-result-team-divider">VS</span>
                    <div class="game-result-team game-result-team-horizontal game-result-team-second">
                        <figure class="game-result-team-figure">
                            <img src="images/team-fenix-40x32.png" alt="" width="31" height="41"/>
                        </figure>
                        <div class="game-result-team-title">
                            <div class="game-result-team-name">{{ $matchday->exterieur->nom }}</div>
                        </div>
                        {{-- <div class="game-result-score game-result-score-big">-</div> --}}
                    </div>
                </div>
                <div class="game-result-footer">
                    <ul class="game-result-details">
                        <li>{{ $matchday->lieu }}</li>
                        <li>
                            <time datetime="{{ \Carbon\Carbon::parse($matchday->date)->format('d F Y') }}">{{ \Carbon\Carbon::parse($matchday->date)->format('d F Y') }}</time>
                        </li>
                    </ul>
                </div>
            </article>
        </div>
    @endforeach
</ul>

   {{--  <ul class="equipe">
        <div class="main-component">
            
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
          
        </div>
        <div class="main-component2">
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
        </div>
        </ul> --}}
  </div>
</div> 
<!-- Aside Block-->
<div class="col-lg-4">
  <aside class="aside-components">
@include('partiels.classement', ['classements' => $classements])

</aside>
</div>
</div>
</div>
</section>


@endsection