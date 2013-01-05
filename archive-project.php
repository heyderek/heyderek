<?php get_header(); ?>
      <section class="work">
         <div class="wrapper">
            <header class="page-tag-blue grey-double-border">
              <h3 class="blue">My Work</h3>
            </header><!-- /.page-tag-wrap -->
            <h4 class="content description"><p>My complete web portfolio.</p></h4>
            <ul class="gallery">
                <?php while(have_posts()) : the_post(); ?>
                <li>
                  <div class="frame">
                    <?php the_post_thumbnail(); ?>
                  </div><!-- /.frame -->
                  <article class="content brief">
                    <div class="port-devices">
                      <?php $propic = get_post_meta($post->ID, '_cmb_project_image', true); ?>
                      <img src="<?php echo $propic; ?>" />
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
            <footer class="panel-nav grey-double-border">
              <div class="ns-button-wrap-blue">
                <button class="tothetop"><span>To The Top!</span></button>
              </div><!-- /.ns-button-wrap -->
            </footer><!-- /.panel-nav -->
        </div><!-- /.wrapper -->
      </section><!-- /.work -->
<?php get_footer(); ?>