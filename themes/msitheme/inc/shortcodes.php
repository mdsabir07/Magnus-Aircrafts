<?php 
/**
 * Theme shortcodes
 */

// featured post shortcode
function msitheme_featured_post_shortcode( $atts ) {
    extract( shortcode_atts( array(
            'count' => '1',
            'post_type' => 'post',
            'order' => 'DESC',
        ), $atts  )
    );

    $q = new WP_Query( array(
        'post_type' => $post_type,
        'posts_per_page'    => $count,
        'order' => $order
    ));
    ?>
    <div class="featured-post-wrap">
        <?php 
        while ( $q->have_posts() ) : 
            $q->the_post();

            $post_id = get_the_ID();
            $title = get_the_title( $post_id );
            $excerpt = word_count( get_the_excerpt( $post_id ), '20' );

        ?>

            <div class="single-featured-post flex relative">
                <?php if ( has_post_thumbnail( $post_id ) ) : 
                    the_post_thumbnail( $post_id, 'full' ); 
                endif; ?>

                <div class="featured-post-content absolute">
                    <div class="post-inner-content theme-border relative">
                        <h4><?php echo esc_html( $title ); ?></h4>
                        <div class="featured-post-excerpt">
                            <?php echo wp_kses_post( $excerpt ); ?>
                        </div>
                    </div>
                </div>

            </div>

        <?php endwhile; ?>
    </div>
    <?php 
    wp_reset_query();

}
add_shortcode( 'featured_post', 'msitheme_featured_post_shortcode' );

// popular post shortcode
function msitheme_popular_post_shortcode( $atts ) {
    extract( shortcode_atts( array(
            'count' => '3',
            'post_type' => 'post',
            'order' => 'DESC',
            'orderby' => 'comment_count',
        ), $atts  )
    );

    $q = new WP_Query( array(
        'post_type'	=> 'post',  
        'posts_per_page' => $count,
        'orderby'	=> $orderby,
        'order'	=> $order,
        'post_status'	=> 'publish',
    ));
    ?>
    <div class="msitheme-news-wrap">
        <div class="container-default">
            <div class="section-title">
                <h6 class="theme-border relative uppercase lh-18 fz-18">
                    <?php esc_html_e( 'learn to fly', 'msitheme' ); ?>
                </h6>
                <h3 class="uppercase lh-48 fz-48">
                    <?php esc_html_e( 'recommended', 'msitheme' ); ?>
                </h3>
            </div>

            <div class="news-posts grid grid-3 g-gap-25">
                <?php 
                while($q->have_posts()) : $q->the_post(); 
                    $post_id = get_the_ID(); 
                    $excerpt = word_count(get_the_excerpt($post_id), '20');
                    if (get_post_meta( $post_id, 'msitheme_post_meta', true ) ) {
                        $msitheme_meta = get_post_meta( $post_id, 'msitheme_post_meta', true );
                    } else {
                        $msitheme_meta = array();
                    }
                    
                    if(array_key_exists('post_extra_img', $msitheme_meta)) {
                        $post_extra_img = $msitheme_meta['post_extra_img'];
                    } else {
                        $post_extra_img = '';
                    }
                ?>
                    <div class="single-news-post theme-border">
                        <div class="entry-media">
                            <?php if(has_post_thumbnail( $post_id )) :
                                if ( !empty($msitheme_meta['post_extra_img']) ) : ?>
                                    <a class="post-thumbnail" href="<?php esc_url( the_permalink() ); ?>">
                                        <img class="custom-blog-img" src="<?php echo esc_url($post_extra_img['url']); ?>" alt="<?php echo esc_attr( the_title() ); ?>">
                                    </a>
                                <?php else : ?>
                                    <a class="post-thumbnail" href="<?php esc_url( the_permalink() ); ?>">
                                        <?php the_post_thumbnail($post_id); ?>
                                    </a>
                                <?php endif;
                            endif; ?>
                        </div>

                        <div class="entry-details">
                            <h4 class="entry-title">
                                <a href="<?php esc_url(the_permalink($post_id)); ?>">
                                    <?php esc_html( the_title() ); ?>
                                </a>
                            </h4>
                            <p class="excerpt"><?php echo esc_html( $excerpt ); ?></p>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
    <?php 
    wp_reset_query();

}
add_shortcode( 'popular_post', 'msitheme_popular_post_shortcode' );


// Event filter shortcode
function msitheme_event_shortcode( $atts ){
    extract( shortcode_atts( 
        array(
            'count' => -1,
            'post_type' => 'event',
            'order' => 'DESC',
            'orderby' => 'comment_count',
        ), $atts  )
    );

    ?>
    <div class="msitheme-event-filter">
        <div class="container-default">
            <ul class="event-filter-cats list-unstyled flex align-center f-gap-20 cursor-pointer">
                <!-- <li class="event-cat-list active clrWhite fz-12 fw-700 lh-18 uppercase" data-filter="all">All</li> -->
                <?php 
                $cat_info = get_terms( 'event_cat', array('hide_empty' => true) );
                foreach ($cat_info as $cat) : ?>
                     <li class="event-cat-list clrWhite fz-12 fw-700 lh-18 uppercase" data-filter="<?php echo esc_attr( $cat->slug ); ?>"><?php echo esc_attr( $cat->name ); ?></li>
                <?php endforeach; ?>
            </ul>
            <div class="all-events flex align-center f-gap-25">
                <?php 
                $q = new WP_Query( 
                    array(
                        'post_type'	=> $post_type,
                        'posts_per_page' => $count,
                        'order' => $order,
                        'orderby' => $orderby
                    ) 
                );

                while($q->have_posts()) : $q->the_post();
                    $post_id = get_the_ID();
                    $event_category = get_the_terms( $post_id, 'event_cat' );
                    if ( !empty( $event_category && ! is_wp_error( $event_category ) ) ) {
                        $event_cat_list = array();
                        foreach ($event_category as $category) {
                            $event_cat_list[] = $category->slug;
                        }
                        $event_assigned_cat = join(" ", $event_cat_list);
                    } else {
                        $event_assigned_cat = '';
                    }
                    ?>
                    <div class="eventBox relative flex align-center <?php echo esc_attr( $event_assigned_cat ) ?>">
                        <div class="event-img absolute">
                            <img src="<?php the_post_thumbnail_url( $post_id, 'large' ); ?>" alt="<?php echo esc_attr( the_title() ); ?>">
                        </div>
                        <div class="event-content">
                            <div class="theme-border relative event-cat-name clrWhite fz-12 fw-700 lh-18 uppercase">
                                <?php echo esc_html( $category->name ); ?>
                            </div>
                            <div class="event-title">
                                <h6 class="clrWhite fz-24 lh-36 uppercase"><?php echo esc_html( the_title() ); ?></h6>
                            </div>
                        </div>
                    </div>
                <?php endwhile; wp_reset_query(); ?>
            </div>
        </div>
    </div>
    <?
} 
add_shortcode( 'event_filter', 'msitheme_event_shortcode'); 