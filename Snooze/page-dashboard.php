<?php get_header(); ?>

    <section class="main-content">

    <div class="container-fluid mont">
  <div class="row">
    <div class="col-12 col-md-2 offset-md-1">
      <!-- Profil -->
      <div class="user-profile mb-3 p-3 text-center animate-de-gauche">
        <img src="<?php echo get_template_directory_uri(); ?>/img/pp.jpg" alt="Profil" class="img-fluid rounded-circle">
        <h4 class="mt-2 porto">ANNE DUBOIS</h4>
        <button class="btn">Modifier</button>
      </div>
      <!-- Menu -->
      <div class="sidebar-menu p-3 animate-de-gauche">
        <button type="button" class="d-block p-2 mb-2">Dashboard <i class="icon-dashboard"></i></button>
        <button type="button" class="d-block p-2 mb-2">Carnet <i class="icon-carnet"></i></button>
        <button type="button" class="d-block p-2">Paramètres <i class="icon-parametres"></i></button>
      </div>
    </div>
    <div class="col-12 col-md-8 animate-de-haut">
      <!-- Header -->
      <div class="dashboard-header p-2 mb-3 d-flex justify-content-between text-center">
        <h1 class="h3 porto">JOURNAL</h1>
        <button class="btn">Notifications <i class="icon-notifications"></i></button>
      </div>
      <!-- Main Content -->
      <div class="dashboard-content p-3 mb-3 pt-4 animate-de-haut">
        <h3>Aidez-nous à mieux comprendre votre situation</h3>
        
        <div class="container my-form">
            <form id="sleepForm">
                <label>Je dors</label>
                <select name="sleepDuration">
                <option value="">choisissez</option>
                <option value="less4">moins de 4h</option>
                <option value="4to6">4-6h</option>
                <option value="7to9">7-9h</option>
                <option value="more9">plus de 9h</option>
                </select>
                <label>de sommeil par nuit environ.</label>
                <label> Je me reveille </label>
                <select name="wakeUpFrequency">
                <option value="">choisissez</option>
                <option value="often">souvent</option>
                <option value="sometimes">parfois</option>
                <option value="rarely">rarement</option>
                </select>
                <label>de réveil durant ma nuit.</label>
                <label>Je dispose d'un</label>
                <input type="text" name="routine" placeholder="une routine de sommeil." />
                <label>un environnement propice au sommeil.</label>
                <input type="text" name="screenTime" placeholder="des écrans 2h avant de m'endormir." />
                <label>J'ai</label>
                <input type="text" name="sleepIssues" placeholder="comme problèmes de sommeil diagnostiqué," />
                <label>de l'anxiété et stress avant de m'endormir.</label>
                <div class="form-group d-flex justify-content-center col-md-9">
                    <button type="submit" class="btn btn-primary">Envoyer mes réponses</button>
                </div>
            </form>
        </div>

      </div>
      <!-- Graphiques -->
      <div class="p-3 animate-de-droite">
        <div class="row">
        <div class="graph-section col-12 col-md-4 p-4 mx-2">
            <div class="graph-placeholder">Graphique 1</div>
        </div>
        <div class="graph-section col-12 col-md-4 p-4 mx-2">
            <div class="graph-placeholder">Graphique 2</div>
        </div>
        <div class="graph-section col-12 col-md-4 p-4 mx-2">
            <div class="graph-placeholder">Graphique 3</div>
        </div>
        </div>
        </div>
  </div>
</div>



    </section>
<?php get_footer(); ?>