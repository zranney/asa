@extends('./layouts/app')

@section('title', 'ASA - Contact')


@section('content')

<section class="section section-md bg-gray-100">
    <div class="container">
      <div class="row row-50">
        <div class="col-lg-8">
          <div class="main-component">
        <!-- Heading Component-->
        <article class="heading-component">
          <div class="heading-component-inner">
            <h5 class="heading-component-title">Contact
            </h5>
          </div>
        </article>
        <section class="section section-sm section-first bg-default">
            <div class="container">
              <div class="row row-30 justify-content-center">
                <div class="col-sm-8 col-md-6 col-lg-4">
                  <article class="box-contacts">
                    <div class="box-contacts-body">
                      <div class="box-contacts-icon fl-bigmug-line-cellphone55"></div>
                      <div class="box-contacts-decor"></div>
                      <p class="box-contacts-link"><a href="tel:#">+225 2722347894</a></p>
                      <p class="box-contacts-link"><a href="tel:#">+225 0708303116</a></p>
                    </div>
                  </article>
                </div>
                
                <div class="col-sm-8 col-md-6 col-lg-4">
                  <article class="box-contacts">
                    <div class="box-contacts-body">
                      <div class="box-contacts-icon fl-bigmug-line-chat55"></div>
                      <div class="box-contacts-decor"></div>
                      <p class="box-contacts-link"><a href="mailto:infos@asa.com">infos@asa.com</a></p>
                      <p class="box-contacts-link"><a href="mailto:secretariat">secretariat@asa.com</a></p>
                    </div>
                  </article>
                </div>
              </div>
            </div>
          </section>
          <!-- Message de succès ou d'échec (initialement masqué) -->
  <div id="message" style="display:none; padding: 15px; text-align: center; font-weight: bold;">
  </div>
  <section class="section section-sm section-last bg-default text-left">
    <div class="container">
            <article class="title-classic">
              <div class="title-classic-title">
                <h3>Message direct</h3>
              </div>
              <div class="title-classic-text">
                <p>Si vous avez une question, remplissez le formulaire de contact et nous vous repondrons rapidement.</p>
              </div>
            </article><br>
      
      <form id="contact-form" method="POST" action="mailform.php">
      <div class="row row-14 gutters-14">
          <div class="col-md-4">
              <div class="form-wrap">
                  <input class="form-input" id="contact-your-name-2" type="text" name="name">
                  <label class="form-label" for="contact-your-name-2">Nom et prénom</label>
              </div>
          </div>
          <div class="col-md-4">
              <div class="form-wrap">
                  <input class="form-input" id="contact-email-2" type="email" name="email">
                  <label class="form-label" for="contact-email-2">E-mail</label>
              </div>
          </div>
          <div class="col-md-4">
              <div class="form-wrap">
                  <input class="form-input" id="contact-phone-2" type="text" name="phone">
                  <label class="form-label" for="contact-phone-2">Téléphone</label>
              </div>
          </div>
          <div class="col-12">
              <div class="form-wrap">
                  <label class="form-label" for="contact-message-2">Message</label>
                  <textarea class="form-input textarea-lg" id="contact-message-2" name="message"></textarea>
              </div>
          </div>
      </div>
      <button class="button button-primary button-pipaluk" type="submit">Envoyer</button>
      </form>
    </section>
    <script>
        // Écouteur d'événement sur le formulaire pour l'envoi avec AJAX
        document.getElementById('contact-form').addEventListener('submit', function(event) {
          event.preventDefault(); // Empêcher le comportement par défaut du formulaire
    
          var formData = new FormData(this);
    
          // Envoi de la requête AJAX
          fetch('mailform.php', {
            method: 'POST',
            body: formData
          })
          .then(response => response.json())
          .then(data => {
            // Afficher le message de succès ou d'échec
            var messageDiv = document.getElementById('message');
            
            if (data.status === 'success') {
              messageDiv.style.backgroundColor = 'green';
              messageDiv.style.color = 'white';
              messageDiv.innerHTML = data.message; // Afficher le message de succès
            } else {
              messageDiv.style.backgroundColor = 'red';
              messageDiv.style.color = 'white';
              messageDiv.innerHTML = data.message; // Afficher le message d'erreur
            }
            
            messageDiv.style.display = 'block'; // Afficher le message
          })
          .catch(error => {
            console.error('Erreur:', error);
            alert('Une erreur est survenue.');
          });
        });
      </script>
</div>
</div>
<div class="col-lg-4">
    <aside class="aside-components">
      <div class="aside-component">
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
    </aside>
  </div>
</section>

@endsection