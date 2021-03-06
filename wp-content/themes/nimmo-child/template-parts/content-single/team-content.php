<?php
/**
 * Template part for displaying posts in loop
 *
 * @package Nimmo
 */
if (is_rtl()) {
    $carousel_rtl = 'true';
} else {
    $carousel_rtl = 'false';
}
$post_social_share_on = nimmo_get_opt( 'post_social_share_on', false );
$post_tags_on = nimmo_get_opt( 'post_tags_on', true );
$post_feature_image_on = nimmo_get_opt( 'post_feature_image_on', true );
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('single-hentry'); ?>>
    <div class="entry-blog">
        <div class="memebr_outer">
        <?php if (has_post_format('gallery')) : ?>
            <div class="entry-featured entry-gallery">
                <?php
                $light_box = nimmo_get_post_format_value('post-gallery-lightbox', '0');
                $gallery_list = explode(',', nimmo_get_post_format_value('post-gallery-images', ''));
                wp_enqueue_script( 'owl-carousel' );
                wp_enqueue_script( 'nimmo-carousel' );
                ?>
                <div class="ct-carousel owl-carousel featured-active <?php if($light_box) {echo 'images-light-box';} ?>" data-item-xs="1" data-item-sm="1" data-item-md="1" data-item-lg="1" data-margin="30" data-loop="true" data-autoplay="false" data-autoplaytimeout="5000" data-smartspeed="250" data-center="false" data-arrows="true" data-bullets="false" data-stagepadding="0" data-stagepaddingsm="0" data-rtl="<?php echo esc_attr( $carousel_rtl ); ?>">
                    <?php
                    foreach ($gallery_list as $img_id):
                        ?>
                        <div class="ct-carousel-item">
                            <a class="light-box" href="<?php echo esc_url(wp_get_attachment_image_url($img_id, 'full'));?>"><img src="<?php echo esc_url(wp_get_attachment_image_url($img_id, 'large'));?>" alt="<?php echo esc_attr(get_post_meta( $img_id, '_wp_attachment_image_alt', true )) ?>"></a>
                        </div>
                        <?php
                    endforeach;
                    ?>
                </div>
            </div>
            
        <?php elseif (has_post_format('quote')) : ?>

            <div class="entry-featured">
                <?php
                    $quote_text = nimmo_get_post_format_value('post-quote-cite', '');
                    echo esc_attr($quote_text);
                ?>
            </div>
        <?php elseif (has_post_format('link')) : ?>
            <div class="entry-featured">
                <?php
                    $link_pf = nimmo_get_post_format_value('post-link-url', '#');
                    echo esc_url($link_pf);
                ?>
            </div>

        <?php elseif (has_post_format('video')) : ?>
            <div class="entry-featured">
                <div class="entry-video featured-active">
                    <?php
                    $video_url = nimmo_get_post_format_value('post-video-url', '#');
                    $video_file = nimmo_get_post_format_value('post-video-file', '');
                    $video_html = nimmo_get_post_format_value('post-video-html', '');
                    $video = '';
                    if (!empty($video_url)) {
                        global $wp_embed;
                        echo ' '.$wp_embed->run_shortcode('[embed]' . $video_url . '[/embed]');
                    } elseif (!empty($video_file)) {
                        if (strpos('[embed', $video_file)) {
                            global $wp_embed;
                            echo esc_html($wp_embed->run_shortcode($video_file));
                        } else {
                            echo do_shortcode($video_file);
                        }
                    } else {
                        if ('' != $video_html) {
                            echo esc_html($video_html);
                        }
                    }
                    ?>
                </div>
            </div>
        <?php elseif (has_post_format('audio')) : ?>
            <div class="entry-featured">
                <?php
                    $audio_url = nimmo_get_post_format_value('post-audio-url', '#');
                    echo esc_url($audio_url);
                ?>
            </div>
        <?php else :
            if (has_post_thumbnail() && $post_feature_image_on ) {
                echo '<div class="entry-featured"><div class="post-image">'; ?>
                    <?php the_post_thumbnail(); ?>
                <?php echo '</div></div>';
            } ?>
        <?php endif; ?>
        <?php 
        $title = get_the_title();
        $job_title = get_field('job_title');
        $location = get_field('location');
        $type = get_field('type');
        $rate_per_hour = get_field('rate_per_hour');
        $contact_no = get_field('contact_no');
        $contact_email = get_field('contact_email');
        $skills = get_field('skills');
        $experience = get_field('experience');    
        $discount_price = get_field('discount_price');   

        ?>
        
        <div class="member-details">
        <ul>    
          <li><span class="member-bio"> Name : </span><?php the_title();?></li>
        <?php if($job_title){ ?> 
          <li><span class="member-bio"> Job Title :</span> <?php the_field('job_title');?></li> 
        <?php } ?> 
         <?php if($location){ ?> 
          <li><span class="member-bio"> Location :</span> <?php echo $location;?></li>
        <?php } ?> 
         <?php if($type){ ?> 
          <li><span class="member-bio"> Type :</span> <?php echo $type;?></li>
        <?php } ?> 
         <?php if($rate_per_hour){ ?> 
          <li><span class="member-bio"> Rate Per Hour :</span> <?php echo $rate_per_hour;?></li>
        <?php } ?> 
         <?php if($contact_no){ ?> 
          <li><span class="member-bio"> Contact Number :</span> <?php echo $contact_no;?></li>
        <?php } ?> 
         <?php if($contact_email){ ?> 
           <li><span class="member-bio"> Contact Email :</span> <?php echo $contact_email;?></li>
        <?php } ?>   
         <?php if($skills){ ?> 
           <li><span class="member-bio"> Skills :</span> <?php echo $skills;?></li>
        <?php } ?> 
         <?php if($experience){ ?> 
           <li><span class="member-bio"> Experience  :</span> <?php echo $experience;?></li>
        <?php } ?> 
         <?php if($discount_price){ ?> 
           <li><span class="member-bio"> Discount Price  :</span> <?php echo $discount_price;?></li>
        <?php } ?>   
           
        </ul>   
        </div>
       </div>

        <div class="entry-body">
            <?php //nimmo_post_meta(); ?>
            <div class="entry-content team-desc clearfix">
                <?php
                    the_content();
                    wp_link_pages( array(
                        'before'      => '<div class="page-links">',
                        'after'       => '</div>',
                        'link_before' => '<span>',
                        'link_after'  => '</span>',
                    ) );
                ?>
            </div>
        </div>
    </div>

    <!-- Hire Us Form -->
    <div class="container">
    <div class="hireus-form">
     <?php echo do_shortcode('[contact-form-7 id="2091" title="Hire Now"]');?>
    </div>
    </div>

</article><!-- #post -->