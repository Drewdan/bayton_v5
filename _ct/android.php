<section id="archive_posts">
  <h2 id="archive_title">
    Android Enterprise
  </h2>
  <div id="archive_posts_container">

    <div id="android_post_container">
      <div class="android-topic">
        <div class="android-topic-title">
          Getting started
        </div>
        <?php
        foreach ($posts as $query){
          if (in_array('Getting started', $query['topic']) && $query['published'] == "true") {
            echo '<li><a href="' . $query['url'] . '">' . $query['title'] . '</a></li>';
          };
        } ?>
      </div>

      <div class="android-topic">
        <div class="android-topic-title">
          Diving deeper
        </div>
        <?php
        foreach ($posts as $query){
          if (in_array('Diving deeper', $query['topic']) && $query['published'] == "true") {
            echo '<li><a href="' . $query['url'] . '">' . $query['title'] . '</a></li>';
          };
        } ?>
      </div>

      <div class="android-topic">
        <div class="android-topic-title">
          Zero-touch
        </div>
        <?php
        foreach ($posts as $query){
          if (in_array('Zero-touch', $query['topic']) && $query['published'] == "true") {
            echo '<li><a href="' . $query['url'] . '">' . $query['title'] . '</a></li>';
          };
        } ?>
      </div>

      <div class="android-topic">
        <div class="android-topic-title">
          App management
        </div>
        <?php
        foreach ($posts as $query){
          if (in_array('App management', $query['topic']) && $query['published'] == "true") {
            echo '<li><a href="' . $query['url'] . '">' . $query['title'] . '</a></li>';
          };
        } ?>
      </div>

      <div class="android-topic">
        <div class="android-topic-title">
          Vendor specific
        </div>
        <?php
        foreach ($posts as $query){
          if (in_array('Vendor specific', $query['topic']) && $query['published'] == "true") {
            echo '<li><a href="' . $query['url'] . '">' . $query['title'] . '</a></li>';
          };
        } ?>
      </div>
    </div>

    </div>
  </section>
