<?php get_header(); ?>


<div id="main">
    <div id="content">
        <h1>Main Area</h1>
        
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="row">
            <div class="small-9 large-9 columns">
                <div class="panel">

                    <h1><?php the_title(); ?></h1>

                    <h4>Posted on <?php the_time('F jS, Y') ?></h4>

                    <?php the_content(__('(more...)')); ?>
                </div>
            </div>
            <hr> <?php endwhile; else: ?>
            <div class="small-9 large-9 columns">
                <p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
            </div>
            
        </div>
   
    </div>

    <div class="small-3 large-3 columns">
                <?php get_sidebar(); ?>

    </div>
    

</div>
<div id="delimiter">
</div>
<?php get_footer(); ?>