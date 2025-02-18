@extends('./layouts/app')

@section('title', 'ASA - Accueil')


@section('content')

<section class="section section-md bg-gray-100">
    <div class="container">
      <div class="row row-50">
        <div>
          <div class="main-component">
            <!-- Heading Component-->
            <article class="heading-component">
              <div class="heading-component-inner">
                <h5 class="heading-component-title">Notre équipe </h5>
              </div>
            </article>
            <div><h5>Gardiens</h5> 
                <div>
                <ul class="equipe">
                    <li> <img src="images/joueurs/gardien.jpg" alt="image du gardien numéro 1" width="200px" height="70px"></li>
                    <li> <img src="images/joueurs/gardien.jpg" alt="image du gardien numéro 2" width="200px" height="70px"></li>
                    <li> <img src="images/joueurs/gardien.jpg" alt="image du gardien numéro 3" width="200px" height="70px"></li>
                </ul>
                </div>
            </div>
            <div><h5>Défenseurs</h5>
                <div>
                <ul class="equipe">
                    <li> <img src="images/joueurs/milieu.jpg" alt="image du milieu numéro 1" width="200px" height="70px"></li>
                    <li> <img src="images/joueurs/milieu.jpg" alt="image du milieu numéro 2" width="200px" height="70px"></li>
                    <li> <img src="images/joueurs/milieu.jpg" alt="image du milieu numéro 3" width="200px" height="70px"></li>
                    <li> <img src="images/joueurs/milieu.jpg" alt="image du milieu numéro 4" width="200px" height="70px"></li>
                    <li> <img src="images/joueurs/milieu.jpg" alt="image du milieu numéro 5" width="200px" height="70px"></li>
                    <li> <img src="images/joueurs/milieu.jpg" alt="image du milieu numéro 6" width="200px" height="70px"></li>
                    <li> <img src="images/joueurs/milieu.jpg" alt="image du milieu numéro 7" width="200px" height="70px"></li>
                </ul>
                </div>
            </div>
            <div><h5>Milieux</h5> 
                <div>
                <ul class="equipe">
                    <li> <img src="images/joueurs/attaquant.jpg" alt="image du attaquant numéro 1" width="200px" height="70px"></li>
                    <li> <img src="images/joueurs/attaquant.jpg" alt="image du attaquant numéro 2" width="200px" height="70px"></li>
                    <li> <img src="images/joueurs/attaquant.jpg" alt="image du attaquant numéro 3" width="200px" height="70px"></li>
                    <li> <img src="images/joueurs/attaquant.jpg" alt="image du attaquant numéro 4" width="200px" height="70px"></li>
                    <li> <img src="images/joueurs/attaquant.jpg" alt="image du attaquant numéro 5" width="200px" height="70px"></li>
                    <li> <img src="images/joueurs/attaquant.jpg" alt="image du attaquant numéro 6" width="200px" height="70px"></li>
                </ul>
                </div>
            </div>
            <div><h5>Attaquants</h5> 
                <div>
                <ul>
                    <li>Guillaume</li>
                    <li>Adabe</li>
                    <li>Loïc</li>
                </ul>
                </div>
            </div>
            <div><h5>Coachs</h5> 
                <div>
                <ul>
                    <li>Guillaume</li>
                    <li>Adabe</li>
                    <li>Loïc</li>
                </ul>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>

@endsection