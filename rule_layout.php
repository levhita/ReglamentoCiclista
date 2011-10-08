<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>#ReglamentoCiclista - #<?=$rule['number']?> <?=$rule['name']?></title>
	<?php include 'headers.php'; ?>
  </head>
  <body>
    <h1><a href="<?= web_root ?>" title="Inicio">#ReglamentoCiclista</a> - <span>#<?=$rule['number']?> <?=$rule['name']?></span></h1>
	<!-- AddThis Button BEGIN -->
	<div class="addthis_toolbox addthis_default_style ">
	<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
	<a class="addthis_button_tweet"></a>
	<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
	<a class="addthis_counter addthis_pill_style"></a>
	</div>
	<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4e906de04dcb0610"></script>
	<!-- AddThis Button END -->
    
    <div class="rule_detail">
      <p class="description"><?=$rule['description']?></p>
      <?php
      $filename = "details/{$rule['id']}.php";
      if ( file_exists($filename) ) {
        include $filename;
      }
      ?>
  	</div>
    
    <p class="note"><a href="https://twitter.com/#!/search?q=%23ReglamentoCiclista">#ReglamentoCiclista</a> es un trabajo en proceso, comenta para que tu opinión sea tomada en cuenta.</p>
    
    <div id="disqus_thread"></div>
    <script type="text/javascript">
          /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
          var disqus_shortname  = '<?=disqus_shortname?>'; // required: replace example with your forum shortname
          var disqus_identifier = '<?=$rule['id']?>';
          var disqus_url = 'http://reglamentocliclista.levhita.net/regla/<?=$rule['id']?>/';
          
          <?= (production)?"":"var disqus_developer = 1;"?>

          /* * * DON'T EDIT BELOW THIS LINE * * */
          (function() {
              var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
              dsq.src = 'http://' + disqus_shortname + '.disqus.com/embed.js';
              (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
          })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    <a href="http://disqus.com" class="dsq-brlink">blog comments powered by <span class="logo-disqus">Disqus</span></a>

    <?php include 'google_analytics.php' ?>
  
  </body>
</html>
