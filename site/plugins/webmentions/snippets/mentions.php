<div class="webmentions">

  <?php if($reposts->count()): ?>
  <section class="webmentions-reposts">
    <h3><?php echo $reposts->count() ?> reposts</h3>
    <?php foreach($reposts as $repost): ?>
    <?php echo $repost ?>
    <?php endforeach ?>
  </section>
  <?php endif ?>

  <?php if($likes->count()): ?>
  <section class="webmentions-likes">
    <h3><?php echo $likes->count() ?> likes</h3>
    <?php foreach($likes as $like): ?>
    <?php echo $like ?>
    <?php endforeach ?>
  </section>
  <?php endif ?>

  <?php if($replies->count()): ?>
  <section class="webmentions-replies">

    <h3><?php echo $replies->count() ?> Responses</h3>
    <?php foreach($replies as $reply): ?> 
    <?php echo $reply ?>
    <?php endforeach ?>

  </section>
  <?php endif ?>

  <?php if($mentions->count()): ?>
  <section class="webmentions-mentions">

    <h3><?php echo $mentions->count() ?> Mentions</h3>
    <?php foreach($mentions as $mention): ?> 
    <?php echo $mention ?>
    <?php endforeach ?>

  </section>
  <?php endif ?>

</div>