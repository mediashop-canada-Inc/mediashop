<?php
/**
 * The template for displaying all single posts
 *
 * @package Nimmo
 */
get_header();
$sidebar_pos = nimmo_get_opt( 'post_sidebar_pos', 'right' );
?>
<div class="container content-container">
    <div class="row content-row">
        
        <div id="primary" >
            <main id="main" class="site-main">
                <?php

                    while ( have_posts() )
                    {
                        the_post();
                        get_template_part( 'template-parts/content-single/team-content', get_post_format() );
                      /*  if ( comments_open() || get_comments_number() )
                        {
                            comments_template();
                        }*/
                    }

                ?>
            </main><!-- #main -->
        </div><!-- #primary -->

       
        
    </div>
</div>
<?php
nimmo_related_post();
nimmo_set_post_views(get_the_ID());
get_footer();
