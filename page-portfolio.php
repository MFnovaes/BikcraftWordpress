<?php
//Template Name: Portfolio
get_header();
?>
<?php if (have_posts()) : while (have_posts()) : the_post();  ?>
    <?php include(TEMPLATEPATH . "/inc/intro.php"); ?>

    <section data-anime="1200" data-slide="quote" class="container fadeInDown">
      <?php if (have_rows('quote_portfolio')) : while (have_rows('quote_portfolio')) : the_row(); ?>
          <li>
            <blockquote class="quote_cliente">
              <?php the_sub_field('quote'); ?>
              <cite><?php the_sub_field('nome_quote'); ?></cite>
            </blockquote>
          </li>
      <?php endwhile;
      else : endif; ?>
    </section>

    <section class="portfolio">
      <?php include(TEMPLATEPATH . "/inc/clientes-portfolio.php"); ?>
    </section>
<?php endwhile;
else :
endif; ?>
<?php get_footer(); ?>