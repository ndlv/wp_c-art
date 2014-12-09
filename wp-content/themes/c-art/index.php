<!DOCTYPE html>

<head>

    <meta charset="UTF-8">

    <title>How To Convert HTML Template to WordPress Theme - WPExplorer</title>


    <link rel="stylesheet" type="text/css" media="all" href="wp-content/themes/c-art/knacss.css"/>

    <link rel="stylesheet" type="text/css" media="all" href="wp-content/themes/c-art/styles.css"/>

</head>

<body>

    <div id="wrap">
     <header id="header" role="banner" class="line pas">

        <p>This is header section. Put your logo and other details here.</p>

        <?php get_header(); ?>

    </header><!-- .header -->

    <aside class="mod left mrs pam w10 aside">
        <!-- sidebar gauche -->
    </aside>

    <aside class="pam mod right mls w10 aside">
        <!-- sidebar droit -->
    </aside>

    <div id="main" role="main" class="mod pam">

        <p>This is the main content area.</p>

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h1><?php the_title(); ?></h1>

        <h4>Posted on <?php the_time('F jS, Y') ?></h4>

        <p><?php the_content(__('(more...)')); ?></p>

        <hr> <?php endwhile; else: ?>

        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>

    </div><!-- .content -->



    <footer id="footer" role="contentinfo" class="line pam txtcenter">

        <p>And this is the footer.</p>
        <?php get_footer(); ?>

    </footer><!-- .footer -->

</div><!-- #wrap -->

</body>

</html>
