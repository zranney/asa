
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
                <th>BP</th>
                <th>BC</th>
                <th>PTS</th>
              </tr>
            </thead>
            <tbody>
              @php
                $n = 1; // Initialisation de la position à 1
              @endphp
      
              @foreach ($classements as $classement)
              <tr class="{{ $n === 1 ? 'highlight' : ($n === count($classements) ? 'highlight-red' : '') }}">
                <td><span>{{$n++}}</span></td>
                <td class="team-inline">
                  <div class="team-figure"><img src="images/team-sportland-31x41.png" alt="" width="31" height="41"/>
                  </div>
                  <div class="team-title">
                    <div class="team-name">{{ $classement['nom'] }}</div>
                  </div>
                </td>
                <td>{{ $classement['gagnes'] }}</td>
                <td>{{ $classement['nuls'] }}</td>
                <td>{{ $classement['perdus'] }}</td>
                <td>{{ $classement['buts_marques'] }}</td>
                <td>{{ $classement['buts_encaisses'] }}</td>
                <td>{{ $classement['points'] }}</td>
              </tr>
              @endforeach
              
            </tbody>
          </table>
        </div>
      </div>
      </div>