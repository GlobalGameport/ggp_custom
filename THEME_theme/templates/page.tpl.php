﻿<div id="incredible_bg">
<div id="lines_top">


<div id="page" class="container <?php print $classes; ?>">
  <!-- region: Leaderboard -->
  <?php print render($page['leaderboard']); ?>

  <header class="clearfix" role="banner">

    <?php if ($linked_site_logo): ?>
      <div id="logo"><?php print $linked_site_logo; ?></div>
    <?php endif; ?>

    <!-- region: Header -->
    <?php print render($page['header']); ?>

  </header>

  <!-- Messages and Help -->
  <?php print $messages; ?>
  <?php print render($page['help']); ?>

  <?php print render($page['secondary_content']); ?>

  <div id="columns">
    <div class="columns-inner clearfix">
      <div id="content-column">
        <div class="content-inner">

        <?php if ($breadcrumb): ?>
          <nav id="breadcrumb"><?php print $breadcrumb; ?></nav>
        <?php endif; ?>

        <?php print render($page['highlighted']); ?>

        <<?php print $tag; ?> id="main-content" role="main">

          <?php if ($title || $primary_local_tasks || $secondary_local_tasks || $action_links = render($action_links)): ?>
            <header id="main-content-header" class="clearfix">

              <?php if ($title): ?>
                <h1 id="page-title"><?php print $title; ?></h1>
              <?php endif; ?>

              <?php if ($primary_local_tasks || $secondary_local_tasks || $action_links): ?>
                <div id="tasks" class="clearfix">
                  <?php if ($primary_local_tasks): ?>
                    <ul class="tabs primary clearfix"><?php print render($primary_local_tasks); ?></ul>
                  <?php endif; ?>
                  <?php if ($secondary_local_tasks): ?>
                    <ul class="tabs secondary clearfix"><?php print render($secondary_local_tasks); ?></ul>
                  <?php endif; ?>
                  <?php if ($action_links = render($action_links)): ?>
                    <ul class="action-links clearfix"><?php print $action_links; ?></ul>
                  <?php endif; ?>
                </div>
              <?php endif; ?>
            </header>
          <?php endif; ?>
          <?php print render($title_suffix); ?>

          <?php if ($content = render($page['content'])): ?>
            <div id="content">
              <?php print $content; // Main content region ?>
            </div>
          <?php endif; ?>


        </<?php print $tag; ?>> <!-- /main-content -->

        <?php print render($page['content_aside']); ?>

      </div>
    </div> <!-- /content-column -->

    <?php print render($page['sidebar_first']); ?>
    <?php print render($page['sidebar_second']); ?>

  </div>
</div> <!-- /columns -->

  <?php print render($page['tertiary_content']); ?>

  <?php if ($page['three_25_25_50_first'] || $page['three_25_25_50_second'] || $page['three_25_25_50_third']): ?>
    <div class="three-25-25-50 gpanel clearfix">
      <?php print render($page['three_25_25_50_first']); ?>
      <?php print render($page['three_25_25_50_second']); ?>
      <?php print render($page['three_25_25_50_third']); ?>
    </div>
  <?php endif; ?>

  <?php if ($page['footer']): ?>
    <footer id="footer" role="contentinfo">
      <div id="footer-inner" class="clearfix">
		
       <div class="copyright">

        <p>Diese Webseite ist eine von Ubisoft offiziell anerkannte Assassin's Creed-Fanseite & Teil von GLOBAL GAMEPORT, einem seit 2006 bestehenden, nicht kommerziell orientierten Videogame-Netzwerk von Fans für Fans.<br />
		Alle Logos, Markenzeichen & Bilder sind das geistige Eigentum der jeweiligen Inhaber. GGP Theme 1.03 &copy; 2014 by Valkum & vandit the bandit, Theme-Grafiker vandit the bandit.</p>
		
		<p><a href="<?php echo base_path(); ?>impressum">Impressum</a>
		<a href="<?php echo base_path(); ?>disclaimer">Disclaimer</a>
		<a href="<?php echo base_path(); ?>sitemap.xml">Sitemap</a>
		<a href="<?php echo base_path(); ?>user/login">Mitarbeiter-Login</a></p>
		
		<p>&copy; 2006 - <?php echo date("Y"); ?> GlobalGameport.com - Alle Rechte vorbehalten</p>
		
		<hr />
		
		<p>Mehr über das Global Gameport-Netzwerk erfahren unter:<br />
		<a href="<?php echo base_path(); ?>ueber-global-gameport">&Uuml;ber Global Gameport</a>
		<a target="_blank" href="http://jobs.globalgameport.com">Jobs</a>
		<a target="_blank" href="http://www.globalgameport.com">Forum</a>
		<a target="_blank" href="http://www.globalgameport.com/register.php">Bei GGP registrieren</a>
		<a target="_blank" href="http://www.facebook.com/globalgameport">GGP @ Facebook</a>
		<a target="_blank" href="http://twitter.com/globalgameport">GGP @ Twitter</a>
		<a target="_blank" href="http://www.youtube.com/user/globalgameport">GGP @ You Tube</a></p>
				
    	  </div>
      </div>
    </footer>  
  <?php endif; ?>

</div>

</div> <!-- /lines_top -->
</div> <!-- /incredible_bg -->