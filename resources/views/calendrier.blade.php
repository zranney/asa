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
    @foreach($calendrier_event as $matchday)
      
    
    <article class="game-result">
      <div class="game-info game-info-creative">
        <p class="game-info-subtitle">{{$matchday->lieu}} - 
          <time datetime="08:30"> {{$matchday->heure}} </time>
        </p>
        <h3 class="game-info-title">{{$matchday->title}}</h3>
        <div class="game-info-main">
          <div class="game-info-team game-info-team-first">
            <figure><img src="images/team-sportland-75x99.png" alt="" width="75" height="99"/>
            </figure>
            <div class="game-result-team-name">{{$matchday->domicile}}</div>
            <div class="game-result-team-country">{{$matchday->position_dom}}</div>
          </div>
          <div class="game-info-middle game-info-middle-vertical">
            <time class="time-big" datetime="2020-04-17"><span class="heading-3">{{$matchday->date}}</span> Février 2025
            </time>
            <div class="game-result-divider-wrap"><span class="game-info-team-divider">VS</span></div>
            <div class="group-sm">
              <a class="button button-sm button-primary" href="#">Achetez vos tickets</a>
            </div>
          </div>
          <div class="game-info-team game-info-team-second">
            <figure><img src="images/team-dream-team-91x91.png" alt="" width="91" height="91"/>
            </figure>
            <div class="game-result-team-name">{{$matchday->exterieur}}</div>
            <div class="game-result-team-country">{{$matchday->position_ext}}</div>
          </div>
        </div>
      </div>
      <div class="game-info-countdown">
        <div class="countdown countdown-bordered" data-type="until" data-time="{{$matchday->date}}" data-format="dhms" data-style="short"></div>
      </div>
    </article>

    @endforeach
    <div class="main-component1">
    <article class="heading-component">
        <div class="heading-component-inner">
          <h5 class="heading-component-title">Matchs à venir
          </h5>
        </div>
      </article>
    </div>

    <ul class="equipe">

      @foreach($calendrier_event as $matchday)

    <div class="main-component">
    
    <article class="game-result game-result-creative">
        <div class="game-result-main-vertical">
          <div class="game-result-team game-result-team-horizontal game-result-team-first">
            <figure class="game-result-team-figure"><img src="images/team-sportland-31x41.png" alt="" width="31" height="41"/>
            </figure>
            <div class="game-result-team-title">
              <div class="game-result-team-name">{{$matchday->domicile}}</div>
              <div class="game-result-team-country">{{$matchday->position_dom}}</div>
            </div>
            <div class="game-result-score game-result-score-big game-result-team-win">-
            </div>
          </div><span class="game-result-team-divider">VS</span>
          <div class="game-result-team game-result-team-horizontal game-result-team-second">
            <figure class="game-result-team-figure"><img src="images/team-fenix-40x32.png" alt="" width="31" height="41"/>
            </figure>
            <div class="game-result-team-title">
              <div class="game-result-team-name">{{$matchday->exterieur}}</div>
              <div class="game-result-team-country">{{$matchday->position_ext}}</div>
            </div>
            <div class="game-result-score game-result-score-big">-
            </div>
          </div>
        </div>
        <div class="game-result-footer">
          <ul class="game-result-details">
            <li>{{$matchday->camp}}</li>
            <li>{{$matchday->lieu}}</li>
            <li>
              <time datetime="{{$matchday->date}}">{{$matchday->date}}</time>
            </li>
          </ul>
        </div>
      </article>
      
    </div>
    @endforeach

    {{-- <div class="main-component2">
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
    </div> --}}
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
            <div class="aside-component">
              <div class="owl-carousel-outer-navigation-1">
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
          </aside>
        </div>
</div>
</div>
</section>


@endsection