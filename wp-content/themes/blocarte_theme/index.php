<?php get_header(); ?>


<div id="main">
    <div id="content">
        <div class="row">
            <div class="small-12 large-12 columns panel top">
                    <h1>Main Area</h1>

            </div>
            <div class="article small-7 large-7 columns">



                


                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>


                <div class="panel">

                    <h1><?php the_title(); ?></h1>

                    <h4>Posted on <?php the_time('F jS, Y') ?></h4>

                    <?php the_content(__('(more...)')); ?>
                </div>

            <?php endwhile; else: ?>


            <div class="panel">
                <p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
            </div>


        </div>
        <div class="small-1 large-1 columns">
        </div>

        <!--
        <div class="small-4 large-4 columns">
            <div class="panel">
            <?php get_sidebar(); ?>
        </div>
    -->

        
    </div>
</div>
<div id="delimiter">
</div>
<?php get_footer(); ?>