<?php get_header(); ?>
      <section class="work">
         <div class="wrapper">
            <header class="page-tag-blue grey-double-border">
              <h3 class="blue">My Work</h3>
            </header><!-- /.page-tag-wrap -->
            
            <ul class="gallery">
                <?php
                $args = array(
                  'post_type' => 'project'
                );
                
                $project = new WP_Query($args); ?>
                
                <?php while($project->have_posts()) : $project->the_post(); ?>
                
                <li>
                  <div class="frame">
                    <?php the_post_thumbnail(); ?>
                  </div><!-- /.frame -->
                  <article class="content brief">
                    <h5><?php the_title(); ?></h5>
                    <?php the_content(); ?>
                  </article><!-- /.brief -->
                </li>
                
                <?php endwhile; ?>
            </ul><!-- /.gallery -->
            <div class="teaser"><em>Want More?  <a href="#">Get more portfolio action here.</a></em></div>
            <footer class="panel-nav grey-double-border">
              <div class="ns-button-wrap-blue">
                <button class="tothetop"><span>To The Top!</span></button>
              </div><!-- /.ns-button-wrap -->
            </footer><!-- /.panel-nav -->
        </div><!-- /.wrapper -->
      </section><!-- /.work -->
      <section class="about">
        <div class="wrapper">
          <header class="page-tag-white white-double-border">
            <h3 class="white">About Derek</h3>
          </header><!-- /.page-tag-wrap -->
          <article class="copy content">
            <h3>The web is a beautiful place, I'm just doing my best to help keep it that way.</h3>
            <h4>And I do it using HTML5 and CSS3 to serve sparklingly responsive layouts to the masses.</h4>
            <h4>You can find me on Twitter <a href="http://twitter.com/dereknation" target="_blank">@dereknation</a>.</h4>
          </article><!-- /.copy -->
          <footer class="panel-nav white-double-border">
            <div class="ns-button-wrap-grey">
              <button class="tothetop"><span>To The Top!</span></button>
            </div><!-- /.ns-button-wrap -->
          </footer><!-- /.panel-nav -->
        </div><!-- /.wrapper -->
      </section><!-- /.about -->
      <section class="contact">
        <div class="wrapper">
          <header class="page-tag-blue grey-double-border">
            <h3 class="blue">Contact</h3>
          </header><!-- /.page-tag-wrap -->
          <article class="copy content">
            <h3>Let&rsquo;s talk.</h3>
            <h4>Like my work?  Let&rsquo;s chat about what I can do for you.</h4>
            <form>
              <input type="text">
              <input type="text">
              <textarea></textarea>
              <input type="submit" class="button orange">
            </form>
          </article><!-- /.copy -->
            <footer class="panel-nav grey-double-border">
              <div class="ns-button-wrap-blue">
                <button class="tothetop"><span>To The Top!</span></button>
              </div><!-- /.ns-button-wrap -->
            </footer><!-- /.panel-nav -->
        </div><!-- /.wrapper -->
      </section><!-- /.contact -->
<?php get_footer(); ?>