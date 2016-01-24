<?php
/**
 * Template Name: Particles Page Template
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

<script> 
      var seconds = new Date().getTime();
      var dcolor;
      var lcolor;

      if ( seconds%2==0 ) {
        dcolor='#5cbdaa';
        lcolor= '#0000';
        /alert("even")/
      }
      else {
       / alert("odd") /
        dcolor= '#209624';
        lcolor= '#fff';
      }
      document.addEventListener('DOMContentLoaded', function () {
    particleground(document.getElementById('particles'), {
  <!-- data structure -->
      dotColor: dcolor,
      lineColor: lcolor

    });
    var intro = document.getElementById('intro');
    intro.style.marginTop = - intro.offsetHeight / 2 + 'px';
  }, false);
</script> 

  <section id="primary" class="site-content">
    <div id="content" role="main">

    <?php if ( have_posts() ) : ?>
      <!--header class="archive-header">
        <h1 class="archive-title"><?php printf( __( 'Technology', 'twentytwelve' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?></h1-->

      <?php if ( category_description() ) : // Show an optional category description ?>
        <div class="archive-meta"><?php echo category_description(); ?></div>
      <?php endif; ?>
      </header><!-- .archive-header -->

      <?php
      /* Start the Loop */
      query_posts('cat=10');
      while ( have_posts() ) : the_post();

        /* Include the post format-specific template for the content. If you want to
         * this in a child theme then include a file called called content-___.php
         * (where ___ is the post format) and that will be used instead.
         */
        get_template_part( 'content', get_post_format() );

      endwhile;

      twentytwelve_content_nav( 'nav-below' );
      ?>

    <?php else : ?>
      <?php get_template_part( 'content', 'none' ); ?>
    <?php endif; ?>

    </div><!-- #content -->
  </section><!-- #primary -->




<div id="particles"></div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
