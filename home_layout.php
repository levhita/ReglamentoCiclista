<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>#ReglamentoCiclista - Inicio</title>
	<?php include 'headers.php'; ?>
  </head>
  <body>

  <h1><a href="<?= web_root ?>" title="Inicio">#ReglamentoCiclista</a> - Inicio</h1>
	<!-- AddThis Button BEGIN -->
	<div class="addthis_toolbox addthis_default_style ">
	<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
	<a class="addthis_button_tweet"></a>
	<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
	<a class="addthis_counter addthis_pill_style"></a>
	</div>
	<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=<?=pubid?>"></script>
	<!-- AddThis Button END -->
  <?php include 'twitter.php' ?>

  <div class="rules">
  <?php
    foreach ($rules AS $rule) {
      include "rule.php"; 
    }  
  ?>
  </div>
  
  <p class="note">Usa el hashtag para proponer reglas al <a href="https://twitter.com/#!/search?q=%23ReglamentoCiclista">#ReglamentoCiclista</a></p>

  <?php include 'google_analytics.php' ?>
  </body>
</html>
