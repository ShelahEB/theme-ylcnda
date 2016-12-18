<?php get_header();?>
<?php get_sidebar():?>
<div id="content"><!--start content div-->
    <!--the loop-->
    <?php if(have_post()) : while(have_posts()): the_post();?>

    <div class="entry"><!--start class entry-->
        <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>

        <div id="content"><!--start content-->
            <div class="post-metadata"><!--start post-metadata-->
                <span class="author">By <?php the_author_posts_link();?></span>
                <span class="date"> <?php the_time('F jS, Y');?></span>
                <span class="categories">See more in: <?php the_category('&middot; ');?></span>

            </div><!--end post-metadata-->

        </div><!--end content-->


    </div><!--end class entry-->



    <?php endwhile; else: ?>
    <p><?php _('Sorry, no posts match your criteria.');?></p>
    <?php endif();?>
    <!--end loop-->
</div><!--end content div-->
<?php get_footer();?>

