</div> <!-- Killing .max-width-->
<div class="full-width">
  <section id="related_posts">
    <div id="related_container">
      <h2 id="related_title">
        Related tags
      </h2>
      <div id="related_posts_container">
        <?php $i=0;
        foreach ($post['tags'] as $tag) {
          $i++;
          if($i==6) break; ?>
          <div class="related-post-column">
          <?php echo $tag; ?>
        <ul class="related-posts-list">
          <?php $i=0;
            foreach ($posts as $query){
              if (in_array($post['tags'], $query['tags']) && $query['published'] == "true") {
                $i++;
                if($i==3) break;
                echo '<li><a href="' . $query['url'] . '">' . $query['title'] . '</a></li>';
              };
            } ?>
            </ul>
          </div>
        <?php  } ?>
      </div>
    </div>
  </section>
</div>
<div class="max-width"> <!-- Reviving max-width -->
