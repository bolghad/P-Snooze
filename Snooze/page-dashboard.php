<?php get_header(); ?>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <section class="main-content">

    <div class="container-fluid mont">
  <div class="row">
    <div class="col-12 col-md-2 offset-md-1">
      <!-- Profil -->
      <div class="user-profile mb-3 p-3 text-center animate-de-gauche">
        <img src="<?php echo get_template_directory_uri(); ?>/img/med1.jpg" alt="Profil" class="img-fluid rounded-circle">
        <h4 class="mt-2 porto">Ahmadreza Bolghad</h4>
        <button class="btn">Modifier</button>
      </div>
      <!-- Menu -->
      <div class="sidebar-menu p-3 animate-de-gauche">
        <a class="d-block p-2 mb-2" href="<?php echo home_url('dashboard') ?>">Dashboard <i class="icon-dashboard"></i></a>
        <a class="d-block p-2 mb-2" href="<?php echo home_url('carnet') ?>">Carnet <i class="icon-carnet"></i></a>
        <a class="d-block p-2" href="<?php echo home_url('parametres') ?>">Paramètres <i class="icon-parametres"></i></a>
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
                <label>en moyenne par nuit.</label>
                <label> Je me suis reveillé.e </label>
                <select name="wakeUpFrequency">
                <option value="">choisissez</option>
                <option value="often">souvent</option>
                <option value="sometimes">parfois</option>
                <option value="rarely">rarement</option>
                </select>
                <label>durant la nuit.</label>
                <label>Ma routine de sommeil se résume à</label>
                <input type="text" name="routine" placeholder="ta routine de sommeil." />
                <label>L'environnement qui m'aide à dormir est </label>
                <input type="text" name="screenTime" placeholder="ton environnement." />
                <label>Malgré tout j'ai du mal à m'endormir à cause de </label>
                <input type="text" name="sleepIssues" placeholder="tes problèmes de sommeil." /> 
                <div class="form-group d-flex justify-content-center col-md-9">
                    <button type="submit" class="btn btn-primary">Envoyer mes réponses</button>
                </div>
            </form>
        </div>

      </div>
      <!-- Graphiques -->
      <div class="p-3 animate-de-droite">
        <div class="row">
            <div class="graph-section col-12 col-sm-12 col-md-4 p-4 mx-2">
                <canvas id="myDoughnutChart" width="250" height="200"></canvas>
            </div>
            <div class="graph-section col-12 col-sm-12 col-md-4 p-4 mx-2">
                <canvas id="myBarChart" width="250" height="200"></canvas>
            </div>
            <div class="graph-section col-12 col-sm-12 col-md-4 p-4 mx-2">
                <canvas id="myLineChart" width="250" height="200"></canvas>
            </div>
        </div>
    </div>


  </div>
</div>



    </section>
<?php get_footer(); ?>