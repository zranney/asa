@extends('./layouts/app')

@section('title', 'ASA - Equipe')
@section('content')
<div class="container effectif-container">
  <div class="effectif-header">
    <h2 class="text-center">
        <i class="fas fa-users"></i> Effectif de l'Équipe
    </h2>
    <div class="underline"></div>
</div>


    @foreach ($categories as $poste => $joueurs)
        @if ($joueurs->count() > 0)
        <div class="poste-section">
          <h3 class="poste-titre">
            <i class="{{ App\Http\Controllers\JoueurController::getPosteIcon($poste) }}"></i> 
            {{ $poste }}
        </h3>
        

            <div class="effectif-slider">
                <button class="slide-btn prev-btn"><i class="fas fa-chevron-left"></i></button>
                
                <div class="player-wrapper">
                    <div class="player-list">
                        @foreach ($joueurs as $joueur)
                        <div class="player-card">
                          <img src="{{ asset('storage/'. $joueur->photo) }}" alt="{{ $joueur->nom }} {{ $joueur->prenom }}">
                          <div class="player-info">
                              <h5>{{ $joueur->numero }}</h5>
                              <div class="player-name">
                                  <h6>{{ $joueur->prenom }}</h6>
                                  <h4>{{ $joueur->nom }}</h4>
                              </div>
                          </div>
                      </div>
                        @endforeach
                    </div>
                </div>
                
                <button class="slide-btn next-btn"><i class="fas fa-chevron-right"></i></button>
            </div>
        </div>
        @endif
    @endforeach
</div>
@endsection
<script src="{{ asset('js/swiper-init.js') }}"></script>
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
