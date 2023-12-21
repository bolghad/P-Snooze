<?php get_header(); ?>

<section class="first">
  <div class="container-fluid mont">
    <div class="row">
      <!-- Profil et Menu -->
      <div class="col-12 col-md-2 offset-md-1">
        <div class="user-profile mb-3 p-3 text-center animate-de-gauche">
          <img src="<?php echo get_template_directory_uri(); ?>/img/pp.jpg" alt="Profil" class="img-fluid rounded-circle">
          <h4 class="mt-2 porto">ANNE DUBOIS</h4>
          <button class="btn">Modifier</button>
        </div>
        <div class="sidebar-menu p-3 animate-de-gauche">
          <button type="button" class="d-block p-2 mb-2">Dashboard <i class="icon-dashboard"></i></button>
          <button type="button" class="d-block p-2 mb-2 active">Carnet <i class="icon-carnet"></i></button>
          <button type="button" class="d-block p-2">Paramètres <i class="icon-parametres"></i></button>
        </div>
      </div>

      <!-- Contenu principal -->
      <div class="col-12 col-md-8 animate-de-haut">
        <div class="dashboard-header p-2 mb-3 d-flex justify-content-between text-center">
          <h1 class="h3 porto">CARNET</h1>
          <button class="btn">Notifications <i class="icon-notifications"></i></button>
        </div>

        <div class="dashboard-content p-3 mb-3 pt-4 animate-de-haut">
          <div class="row">
            <div class="col-md-6">
              <h3>Libérez vos émotions</h3>
              <textarea class="form-control" rows="5" placeholder="Parlez-nous de votre sommeil et des sentiments que vous avez ressenti au matin par exemple ..."></textarea>
              <button class="btn btn-primary mt-3">Enregistrer</button>
            </div>
            <div class="col-md-6">
              <!-- Section du calendrier -->
              <div class="calendar-section animate-de-droite">
                <div class="calendar-header d-flex justify-content-between align-items-center">
                    <button id="prev-month" class="calendar-nav btn">&lt;</button>
                    <h3 id="calendar-month" class="mb-0 flex-grow-1 text-center">Novembre 2023</h3>
                    <button id="next-month" class="calendar-nav btn">&gt;</button>
                </div>
                <div id="calendar" class="mt-3 w-100">Le calendrier sera généré ici par le JavaScript.</div>
                </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>