<?php if (!defined('APPLICATION')) exit(); ?>
   <div class="Help Aside">
      <?php
      echo '<h2>', T('Need More Help?'), '</h2>';
      echo '<ul>';
      echo Wrap(Anchor('Using OAuth 2.0 for Login (OpenID Connect)', 'https://developers.google.com/accounts/docs/OAuth2Login'), 'li');
      echo Wrap(Anchor('Google Developers Console', 'https://console.developers.google.com/'), 'li');
      echo '</ul>';
      ?>
   </div>
<h1><?php echo $this->Data('Title'); ?></h1>
<?php
$Cf = $this->ConfigurationModule;

$Cf->Render();
?>