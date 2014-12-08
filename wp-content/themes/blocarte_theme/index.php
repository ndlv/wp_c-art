<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Foundation | Welcome</title>
    <link rel="stylesheet" href="wp-content/themes/blocarte_theme/css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
<body>
    <div id="wrapper">
        <div id="header">
            <!-- Inclusion of the content of header -->
            <?php include 'header.php'; ?>
            <?php get_header(); ?>
        </div>


        <div id="main">
            <div id="content">
                <div class="row">

                    <div class="small-12 large-12 columns panel top">
                        <h1>Main Area</h1>

                    </div>
                </div>
                <div class="row">
                    <div class="small-1 large-1 columns">
                        <!-- rien du tout -->
                    </div>
                    <div class="article small-10 large-10 columns">
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <div class="panel article">
                            <h1><?php the_title(); ?></h1>
                            <h4>Posted on <?php the_time('F jS, Y') ?></h4>
                            <?php the_content(__('(more...)')); ?>
                        </div>

                    </div>

                    <?php endwhile; else: ?>

                    <div class="panel article">
                        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
                    </div>

                    <div class="small-1 large-1 columns">
                        <!-- rien du tout -->
                    </div>
                </div>
            </div>
        </div>

        <!--
        <div class="small-4 large-4 columns">
            <div class="panel">
            <?php get_sidebar(); ?>
        </div>
    -->

        
    </div>

    <!--

    <div id="delimiter">
    </div>

-->

    <div id="footer">
        <?php include 'footer.php'; ?>
    </div>

</body>
</html>



















