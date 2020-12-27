<?php
extract(shortcode_atts(array(

    'ct_portfolio_list'               => '',
    'gap'                  => '30',
    'col_xl'               => 4,
    'col_lg'               => 4,
    'col_md'               => 3,
    'col_sm'               => 1,
    'col_xs'               => 1,
    'layout'               => 'masonry',
    'pagination_type'      => 'loadmore',
    'filter'               => 'true',
    'filter_default_title' => 'All',
    'filter_alignment'     => 'center',
    'el_class'             => '',
    'img_size'             => '600x600',
    'custom_column'        => 'false',
    'cms_list_column'        => '',

), $atts));
$tax = array();
$ct_portfolio_list = (array) vc_param_group_parse_atts($ct_portfolio_list);
$filter_default_title = !empty($filter_default_title) ? $filter_default_title : 'All';
$col_xl = 12 / $col_xl;
$col_lg = 12 / $col_lg;
$col_md = 12 / $col_md;
$col_sm = 12 / $col_sm;
$col_xs = 12 / $col_xs;
$grid_sizer = "col-xl-{$col_xl} col-lg-{$col_lg} col-md-{$col_md} col-sm-{$col_sm} col-xs-{$col_xs}";
$gap_item = intval($gap / 2);
wp_enqueue_style(
    'inline-style',
    get_template_directory_uri() . '/assets/css/inline-style.css'
);
$grid_class = '';
if ($layout == 'masonry') {
    wp_enqueue_script('isotope');
    wp_enqueue_script('imagesloaded');
    wp_enqueue_script('nimmo-isotope', get_template_directory_uri() . '/assets/js/isotope.ct.js', array('jquery'), '1.0.0', true);
    $grid_class = 'ct-grid-inner ct-grid-masonry row';
    if($pagination_type == 'loadmore' || $pagination_type === 'pagination') {
        $html_id = str_replace('-', '_', $html_id);
        wp_enqueue_script('ct-loadmore-grid', get_template_directory_uri() . '/assets/js/ct-loadmore-grid.js', array('jquery'), 'all', true);
        wp_localize_script('ct-loadmore-grid', 'ct_load_more_' . $html_id, array(
            'startPage' => $paged,
            'maxPages'  => $max,
            'total'     => $total,
            'perpage'   => $limit,
            'nextLink'  => $next_link,
            'layout'    => $layout
        ));
    }
} else {
    $grid_class = 'ct-grid-inner row';
}
$html_id = cmsHtmlID('ct-portfolio-grid');
$html_id_el = '#'.$html_id;
$custom_css = "
        $html_id_el .ct-grid-inner {
            margin: 0 -{$gap_item}px;
        }
        $html_id_el .ct-grid-inner .grid-item, $html_id_el .ct-grid-inner .grid-sizer {
            padding: {$gap_item}px;
        }";
wp_add_inline_style('inline-style', $custom_css);
wp_enqueue_script( 'waypoints' );
wp_enqueue_script( 'vc_waypoints' );
wp_enqueue_style( 'vc_animate-css' );
$cms_list_columns = array();
$cms_list_columns = (array) vc_param_group_parse_atts( $cms_list_column );
?>

<div id="<?php echo esc_attr($html_id) ?>" class="ct-grid ct-grid-portfolio-layout1 images-light-box <?php echo esc_attr($el_class); ?>">

    <div class="<?php echo esc_attr($grid_class); ?> animation-time" data-gutter="<?php echo esc_attr($gap_item); ?>" style="margin-top:-<?php echo esc_attr($gap_item).'px'; ?>">
        <?php if ($layout == 'masonry') : ?>
            <div class="grid-sizer <?php echo esc_attr($grid_sizer); ?>"></div>
        <?php endif; ?>
        <?php
            $sizes = explode(',',$img_size);
            $i = 0;
            foreach ($ct_portfolio_list as $key => $value) {
                $title = isset($value['title']) ? $value['title'] : '';
                $description = isset($value['description']) ? $value['description'] : '';
                $item_link = isset($value['item_link']) ? $value['item_link'] : '';
                $link = vc_build_link($item_link);
                $a_href = '';
                $a_target = '';
                if ( strlen( $link['url'] ) > 0 ) {
                    $a_href = $link['url'];
                    $a_target = strlen( $link['target'] ) > 0 ? $link['target'] : '_self';
                }
                $image_id = isset($value['image']) ? $value['image'] : '';
                $image_url = '';
                if (!empty($image_id)) {
                    $attachment_image = wp_get_attachment_image_src($image_id, 'full');
                    $image_url = $attachment_image[0];
                }
                $default_size = end($sizes);
                if(!empty($sizes[$i])){
                    $default_size = $sizes[$i];
                }
                $img = wpb_getImageBySize( array(
                    'attach_id'  => $image_id,
                    'thumb_size' => $default_size,
                    'class'      => '',
                ));
                $thumbnail = $img['thumbnail'];
                $item_class   = "grid-item col-xl-{$col_xl} col-lg-{$col_lg} col-md-{$col_md} col-sm-{$col_sm} col-xs-{$col_xs}";
                if($custom_column == 'true' && !empty($cms_list_columns[$key])){
                    $custom_col_xl = 12 / $cms_list_columns[$key]['custom_col_xl'];
                    $custom_col_lg = 12 / $cms_list_columns[$key]['custom_col_lg'];
                    $custom_col_md = 12 / $cms_list_columns[$key]['custom_col_md'];
                    $custom_col_xs = 12 / $cms_list_columns[$key]['custom_col_xs'];
                    $custom_col_sm = 12 / $cms_list_columns[$key]['custom_col_sm'];
                    $item_class   = "grid-item col-xl-{$custom_col_xl} col-lg-{$custom_col_lg} col-md-{$custom_col_md} col-sm-{$custom_col_sm} col-xs-{$custom_col_xs}";
                }
                $filter_class = cms_get_term_of_post_to_class($value, array_unique($tax));
                ?>
                <div class="<?php echo esc_attr($item_class . ' ' . $filter_class); ?>">
                    <div class="grid-item-inner">
                        <div class="item-featured">
                            <?php echo wp_kses_post( $thumbnail ); ?>
                        </div>
                        <div class="item-holder">
                            <?php if(!empty($a_href)) { ?>
                                <a class="item-link" href="<?php echo esc_url($a_href);?>" target="<?php  echo esc_attr($a_target); ?>"><i class="fa fa-long-arrow-right"></i></a>
                            <?php } else { ?>
                                <a class="light-box" href="<?php echo esc_url($image_url); ?>"><i class="fa fa-long-arrow-right"></i></a>
                            <?php } ?>
                            <?php if(!empty($title) || !empty($description)) : ?>
                                <div class="item-holder-inner">
                                    <?php if(!empty($title)) : ?>
                                        <h3 class="item-title"><?php echo esc_attr( $title ); ?></h3>
                                    <?php endif; ?>
                                    <?php if(!empty($description)) : ?>
                                        <p><?php echo esc_attr( $description ); ?></p>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php $i++; } 
        ?>
    </div>

</div>