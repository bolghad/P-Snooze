<?php
add_theme_support('title-tag'); // support de mon title tag
add_theme_support('post-thumbnails'); // support du thumbnail sur mes articles
add_theme_support('menus');

register_nav_menu('header-left', 'En tête du menu Gauche');
register_nav_menu('header-right', 'En tête du menu Droit');




//inscription et connexion
function create_account() {
  if (isset($_POST['uname'], $_POST['upass'], $_POST['uemail'])) {
      $user = sanitize_text_field($_POST['uname']);
      $pass = $_POST['upass'];
      $email = sanitize_email($_POST['uemail']);

      if (!username_exists($user) && !email_exists($email)) {
          $user_data = array(
              'user_login' => $user,
              'user_pass'  => $pass,
              'user_email' => $email,
              'role'       => 'subscriber' // ou 'contributor', selon vos besoins
          );

          $user_id = wp_insert_user($user_data);

          if (!is_wp_error($user_id)) {
              // Connecter l'utilisateur après l'inscription
              wp_set_current_user($user_id);
              wp_set_auth_cookie($user_id);
              wp_redirect(home_url('connexion')); // Rediriger vers la page d'accueil
              exit;
          } else {
              // Gérer l'erreur
              // Par exemple: echo $user_id->get_error_message();
          }
      }
  }
}
add_action('init', 'create_account');


function handle_custom_login() {
  if (isset($_POST['email'], $_POST['password'])) {
      $creds = array(
          'user_login'    => $_POST['email'],
          'user_password' => $_POST['password'],
          'remember'      => true
      );

      $user = wp_signon($creds, false);

      if (!is_wp_error($user)) {
          wp_redirect(home_url('dashboard')); // Modifier si nécessaire
          exit;
      } else {
          // Gérer l'erreur de connexion ici
          // Vous pouvez rediriger vers une page d'erreur ou afficher un message
      }
  }
}
add_action('admin_post_nopriv_custom_login', 'handle_custom_login');
