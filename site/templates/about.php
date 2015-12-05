<?php snippet('header') ?>

  <main class="main" role="main">
 
  <div class="split infoz">
    <div class="tidbit abril"><div id="career">0</div><span> years of experience</span></div>    
    <div class="tidbit abril"><div id="age">0</div><span> days old</span></div>
    <div class="tidbit abril"><div id="uk">0</div><span> days of living in UK (post-Canada)</span></div>    
    <div class="tidbit">ui &amp; ux<span> skills to pay the bills</span></div>    
    <div class="tidbit">3<span> cups of coffee a day (at least)</span></div>
<!--     <div class="tidbit">Stumpy<span> the name for my n+1</span></div>
    <div class="tidbit">Paragon<span class="condensed"> the name for my n+2</span></div> -->
  </div>

<div class="split last">
     <h2 class="post-title about">
      <div class="inner">
      <?php echo html($page->title()) ?>
      </div>
    </h2> 

  <article class="post">
    <?php echo kirbytext($page->text()) ?>
  </article>

</div>

  </main>

<?php snippet('footer') ?>