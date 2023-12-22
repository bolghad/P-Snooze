<?php get_header(); ?>

<section class="main-content">
  <div class="container-fluid mont">
    <div class="row">
      <!-- Profil et Menu -->
      <div class="col-12 col-md-2 offset-md-1">
        <div class="user-profile mb-3 p-3 text-center animate-de-gauche">
          <img src="<?php echo get_template_directory_uri(); ?>/img/med1.jpg" alt="Profil" class="img-fluid rounded-circle">
          <h4 class="mt-2 porto">Ahmadreza Bolghad</h4>
          <button class="btn">Modifier</button>
        </div>
        <div class="sidebar-menu p-3 animate-de-gauche">
          <a class="d-block p-2 mb-2" href="<?php echo home_url('dashboard') ?>">Dashboard <i class="icon-dashboard"></i></a>
          <a class="d-block p-2 mb-2" href="<?php echo home_url('carnet') ?>">Carnet <i class="icon-carnet"></i></a>
          <a class="d-block p-2 active" href="<?php echo home_url('parametres') ?>">Paramètres <i class="icon-parametres"></i></a>
        </div>
      </div>

      <!-- Contenu principal -->
      <div class="col-12 col-md-8 animate-de-haut">
        <div class="dashboard-header p-2 mb-3 d-flex justify-content-between text-center">
          <h1 class="h3 porto">PARAMÈTRES</h1>
          <button class="btn">Notifications <i class="icon-notifications"></i></button>
        </div>

        <div class="dashboard-content p-3 mb-3 pt-4 animate-de-haut">
          <div class="row">
            <div class="col-md-4">
              <!-- Ici, votre menu de navigation pour les paramètres -->
              <div class="settings-menu">
                <a href="#change-password" class="list-group-item list-group-item-action active">Modifier le mot de passe</a>
                <a href="#change-profile-pic" class="list-group-item list-group-item-action">Modifier la photo de profil</a>
                <a href="#change-email" class="list-group-item list-group-item-action">Modifier l'adresse e-mail</a>
                <!-- Plus de boutons de paramètres ici -->
              </div>
            </div>
            <div class="col-md-8">
              <!-- Ici, le contenu qui change en fonction de l'élément de menu sélectionné -->
              <div id="change-password" class="settings-panel active">
                <h3>Ancien mot de passe</h3>
                    <input type="password" placeholder="Entrez votre mot de passe">
                    <h3>Nouveau mot de passe</h3>
                    <input type="password" placeholder="Entrez votre nouveau mot de passe">
              </div>
              <div id="change-profile-pic" class="settings-panel d-none">
                <h3>Modifier la photo de profil</h3>
                <!-- Formulaire de modification de la photo de profil ici -->
              </div>
              <div id="change-email" class="settings-panel d-none">
                <h3>Modifier l'adresse e-mail</h3>
                <!-- Formulaire de modification de l'adresse e-mail ici -->
              </div>
              <!-- Plus de panels de paramètres ici -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
