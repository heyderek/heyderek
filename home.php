<?php get_header(); ?>
      <section class="work">
         <div class="wrapper">
            <header class="page-tag-blue grey-double-border">
              <h3 class="blue">My Work</h3>
            </header><!-- /.page-tag-wrap -->
            <ul class="gallery">
                <?php
                $args = array(
                  'post_type' => 'project',
                  'tax_query' => array(
                    array(
                      'taxonomy' => 'featured',
                      'field' => 'slug',
                      'terms' => 'featured'
                    )
                  ),
                  'posts_per_page' => 3
                );
                $project = new WP_Query($args); ?>
                <?php while($project->have_posts()) : $project->the_post(); ?>
                <li>
                  <div class="frame">
                    <?php the_post_thumbnail(); ?>
                  </div><!-- /.frame -->
                  <article class="content brief">
                    <div class="port-devices">
                      <?php $propic = get_post_meta($post->ID, '_cmb_project_image', true); ?>
                      <img src="<?php echo $propic; ?>" alt="<?php the_title(); ?>"/>
                    </div><!-- /.port-devices -->
                    <div class="info">
                      <h5><?php the_title(); ?></h5>
                      <?php the_content(); ?>
                      <footer class="tags">
                        <?php the_terms($project->ID, 'ptags','', ''); ?>
                      </footer><!--/.tags-->
                    </div><!-- /.info -->
                  </article><!-- /.brief -->
                </li>
                <?php endwhile; ?>
            </ul><!-- /.gallery -->
            <div class="teaser"><em>Want More?  <a href="<?php echo home_url('/');?>project">Get more portfolio action here.</a></em></div>
            <footer class="panel-nav grey-double-border">
              <div class="ns-button-wrap-blue">
                <button class="tothetop"><span>To The Top!</span></button>
              </div><!-- /.ns-button-wrap -->
            </footer><!-- /.panel-nav -->
        </div><!-- /.wrapper -->
      </section><!-- /.work -->
      <section class="about" id="aboutme">
        <div class="wrapper">
          <header class="page-tag-white white-double-border">
            <h3 class="white">About Derek</h3>
          </header><!-- /.page-tag-wrap -->
          <article class="copy content largeMarge">
            <h3>I need something to go here.  Now.</h3>
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
      <section class="contact" id="contactme">
        <div class="wrapper">
          <header class="page-tag-blue grey-double-border">
            <h3 class="blue">Contact</h3>
          </header><!-- /.page-tag-wrap -->
          <article class="copy content" id="contact_container">
            <h3>Let&rsquo;s talk.</h3>
            <h4>Like my work?  Let&rsquo;s chat about what I can do for you.</h4>
              <form id="contact-form" action="<?php bloginfo('template_directory'); ?>/admin/form.php" method="post">
              <ol class="forms">
                <li>
                  <input name="name" type="text" placeholder="Your Name (required)">
                </li>
                <li>
                  <input name="email" type="email" placeholder="Your Email (required)">
                </li>
                <li>
                  <textarea name="message" placeholder="What can I do for you?" rows="5"></textarea>
                </li>
                <li>
                  <input id="submit" name="submit" type="submit" class="button orange" value="Email Me!">
                </li>
              </ol><!-- /.forms -->
              </form><!-- end #contact-form -->
          </article><!-- /.copy -->
          <article id="response" class="copy content"></article><!-- /#response -->
            <footer class="panel-nav grey-double-border">
              <div class="ns-button-wrap-blue">
                <button class="tothetop"><span>To The Top!</span></button>
              </div><!-- /.ns-button-wrap -->
            </footer><!-- /.panel-nav -->
        </div><!-- /.wrapper -->
      </section><!-- /.contact -->
<?php get_footer(); ?>