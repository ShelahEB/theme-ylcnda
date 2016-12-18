<?php get_header(); ?>
<?php get_sidebar(); ?>
<div id="content"><!--div content-->

    <?php if (have_post()) : while(have_posts()) : the_post(); ?>

        <div class="entry"><!--div entry-->
            <h2><a href="<?php the_permalink();?>"<?php the_title(); ?></a></h2>

            <div class="entry-body"><!--div entry body-->
                <?php the_content(); ?>
            </div><!--end div entry body-->

        </div><!--end div entry-->
        <?php endwhile; else: ?>
        <p><?php ('Sorry, no posts matched you criteria'):?></p>
        <?php endif; ?>


</div><!--edn div content-->
