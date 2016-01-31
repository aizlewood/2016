    <?php snippet('header') ?>

      <main class="project main" role="main">

      <article class="project-detail">

<?php foreach(page('projects')->children()->limit(1) as $project): ?>

      <div class="strip" style="background-color:<?php echo $page->bgcolour() ?>;">
        &nbsp;
      </div>
             
      <div class="single row <?php echo $page->uid() ?>">

            <div class="proposition">
              <p class="explanation condensed"><?php echo $page->lede()->html() ?></p>
              <h1 class="animated fadeIn"><?php echo $page->title()->html() ?></h1>
              <p class="blurb font-neuton-regular"><?php echo $page->summary()->html() ?></p>
            </div>

<?php endforeach ?>

      </div>

        <div class="row">

        <div class="project-meta condensed smaller">
          <ul>
            <li><b>Role:</b> <?php echo $page->role()->html() ?></li>
            <li><b>Agency:</b> <?php echo $page->with()->html() ?></li>
            <li><b>Year:</b> <?php echo $page->year()->html() ?></li>
<?php if($page->website() != ''): ?>
            <li><a class="text-btn" href="<?php echo $page->website()->html() ?>">See it live&nbsp;➜</a></li>
<?php endif ?>            
          </ul>
        </div>

          <?php echo $page->text()->kirbytext() ?>

        </div>

          <?php foreach($page->children() as $subpage): ?>

            <div class="row--full" style="background-color:<?php echo $subpage->rowcolour()?>;">

              <h2><?php echo html($subpage->title()) ?></h2>
              <?php echo $subpage->text()->kirbytext() ?>

            </div>        
          <?php endforeach ?>        
    
    <div class="segue">
          <?php if($next = $page->nextVisible()): ?>
          <a href="<?php echo $next->url() ?>">
            <button class="btn btn-4 btn-4a icon-arrow-right">Next: <?php echo $next->title() ?></button>
          </a>
          <!-- <a href="<?php echo $next->url() ?>">Next: <?php echo $next->title() ?></a> -->
          <?php else : ?>
          <?php endif ?>
    </div>

    </article>

    </main>

    <?php snippet('footer') ?>