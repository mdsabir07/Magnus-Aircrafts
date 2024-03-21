<?php
namespace MsiThemeEssentialAddons\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly
}


function msitheme_post_cat_list( ) {
    $elements = get_terms( 'category', array('hide_empty' => true) );
    $post_cat_array = array();

    if ( !empty($elements) ) {
        foreach ( $elements as $element ) {
            $info = get_term($element, 'category');
            $post_cat_array[ $info->term_id ] = $info->name;
        }
    }
    return $post_cat_array;
}
class Blogs extends Widget_Base {

	/**
	 * Retrieve the widget name.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'blogs';
	}

	/**
	 * Retrieve the widget title.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return __( 'Blogs', 'msitheme' );
	}

	/**
	 * Retrieve the widget icon.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-posts-ticker';
	}

	/**
	 * Retrieve the list of categories the widget belongs to.
	 *
	 * Used to determine where to display the widget in the editor.
	 *
	 * Note that currently Elementor supports only one category.
	 * When multiple categories passed, Elementor uses the first one.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return array Widget categories.
	 */
	public function get_categories() {
		return [ 'msitheme' ];
	}

	/**
	 * Retrieve the list of scripts the widget depended on.
	 *
	 * Used to set scripts dependencies required to run the widget.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return array Widget scripts dependencies.
	 */
	public function get_script_depends() {
		return [ 'msitheme' ];
	}

	/**
	 * Register the widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since 1.0.0
	 *
	 * @access protected
	 */
	protected function _register_controls() {
		$this->start_controls_section(
			'section_content',
			[
				'label' => __( 'Section title', 'msitheme' ),
			]
		);
		
        $this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'background',
				'label' => esc_html__( 'Background', 'msitheme' ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .msitheme-news-wrap',
			]
		);
        		
		$this->add_control(
			'show_top_heading',
			[
				'label' => __( 'Show top heading', 'msitheme' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'yes',
				'options' => [
					'yes'	=> __( 'Yes', 'msitheme' ), 
					'no'	=> __( 'No', 'msitheme' ), 
				],
			]
		);

		$this->add_control(
			'top_heading',
			[
				'label' => __( 'Top heading', 'msitheme' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'show_label' => true,
				'condition'	=> [
					'show_top_heading'	=> 'yes',
				],
			]
		);

		$this->add_control(
			'show_section_title',
			[
				'label' => __( 'Show section title', 'msitheme' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'yes',
				'options' => [
					'yes'	=> __( 'Yes', 'msitheme' ), 
					'no'	=> __( 'No', 'msitheme' ), 
				],
			]
		);

		$this->add_control(
			'section_title',
			[
				'label' => __( 'Section title', 'msitheme' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'show_label' => true,
				'condition'	=> [
					'show_section_title'	=> 'yes',
				],
			]
		);

		$this->add_control(
			'count',
			[
				'label' => __( 'Post count', 'msitheme' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => '2',
			]
		);

        $this->add_control(
            'cat_ids',
            [
                'label' => __( 'Select Categories', 'msitheme' ),
                'type' => \Elementor\Controls_Manager::SELECT2,
                'multiple' => true,
                'options' => msitheme_post_cat_list(),
            ]
        );

		
		$this->add_control(
			'show_date',
			[
				'label' => __( 'Show date', 'msitheme' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => __( 'Show', 'msitheme' ),
				'label_off' => __( 'Hide', 'msitheme' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

		
		$this->add_control(
			'show_cats',
			[
				'label' => __( 'Show categories', 'msitheme' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => __( 'Show', 'msitheme' ),
				'label_off' => __( 'Hide', 'msitheme' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
	
		$this->add_control(
			'show_img',
			[
				'label' => __( 'Show Image', 'msitheme' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => __( 'Show', 'msitheme' ),
				'label_off' => __( 'Hide', 'msitheme' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		
		$this->add_control(
			'show_title',
			[
				'label' => __( 'Show title', 'msitheme' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => __( 'Show', 'msitheme' ),
				'label_off' => __( 'Hide', 'msitheme' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		
		$this->add_control(
			'show_excerpt',
			[
				'label' => __( 'Show excerpt', 'msitheme' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => __( 'Show', 'msitheme' ),
				'label_off' => __( 'Hide', 'msitheme' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
        $this->add_control(
			'excerpt_count',
			[
				'label' => __( 'Excerpt count (letter only)', 'msitheme' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'show_label' => true,
				'condition'	=> [
					'show_excerpt'	=> 'yes',
				],
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'section_style',
			[
				'label' => __( 'Style', 'msitheme' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'top_heading_typography',
				'label' => __( 'Typography for top heading', 'msitheme' ),
				'selector' => '{{WRAPPER}} .section-title h6',
			]
		);
        $this->add_control(
			'top_heading_color',
			[
				'label' => __( 'TOp Heading Color', 'msitheme' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '#B1DEE3',
				'scheme' => [
					'type' => \Elementor\Core\Schemes\Color::get_type(),
					'value' => \Elementor\Core\Schemes\Color::COLOR_1,
				],
				'selectors' => [
					'{{WRAPPER}} .section-title h6' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'section_heading_typography',
				'label' => __( 'Typography for section heading', 'msitheme' ),
				'selector' => '{{WRAPPER}} .section-title h3',
			]
		);

        $this->add_control(
			'section_heading_color',
			[
				'label' => __( 'Section Heading Color', 'msitheme' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '#FFF',
				'scheme' => [
					'type' => \Elementor\Core\Schemes\Color::get_type(),
					'value' => \Elementor\Core\Schemes\Color::COLOR_1,
				],
				'selectors' => [
					'{{WRAPPER}} .section-title h3' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'title_typography',
				'label' => __( 'Typography for post heading', 'msitheme' ),
				'selector' => '{{WRAPPER}} .entry-details h4 a',
			]
		);
		$this->add_control(
			'title_color',
			[
				'label' => __( 'Post Heading Color', 'msitheme' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '#fff',
				'scheme' => [
					'type' => \Elementor\Core\Schemes\Color::get_type(),
					'value' => \Elementor\Core\Schemes\Color::COLOR_1,
				],
				'selectors' => [
					'{{WRAPPER}} .entry-details h4 a' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'excerpt_typography',
				'label' => __( 'Typography for post excerpt', 'msitheme' ),
				'selector' => '{{WRAPPER}} .entry-details .excerpt',
			]
		);
		$this->add_control(
			'excerpt_color',
			[
				'label' => __( 'Post excerpt Color', 'msitheme' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '#B1DEE3',
				'scheme' => [
					'type' => \Elementor\Core\Schemes\Color::get_type(),
					'value' => \Elementor\Core\Schemes\Color::COLOR_1,
				],
				'selectors' => [
					'{{WRAPPER}} .entry-details .excerpt' => 'color: {{VALUE}}',
				],
			]
		);
		
		$this->end_controls_section();
	}
	/**
	 * Render the widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 *
	 * @access protected
	 */
	protected function render()
	{
		$settings = $this->get_settings_for_display();

		if ($settings['cat_ids']) {
			$q = new \WP_Query( array(
				'post_type'	=> 'post', 
				'posts_per_page' => $settings['count'],
				'post_status'	=> 'publish',
				'tax_query'	=> array(
					array(
						'taxonomy'	=> 'category',
						'field'		=> 'term_id',
						'terms'		=> $settings['cat_ids']
					)
				),
			) );
		} else {
			$q = new \WP_Query( array(
				'post_type'	=> 'post', 
				'posts_per_page' => $settings['count'],
				'post_status'	=> 'publish'
			) );
		} ?>

			<div class="msitheme-news-wrap">
                <div class="container-default">
                    <?php if($settings['show_section_title'] === 'yes') : ?>
                        <div class="section-title">
                            <?php if($settings['show_top_heading'] === 'yes') : ?>
                                <h6 class="theme-border relative"><?php echo esc_html( $settings['top_heading'] ); ?></h6>
                            <?php endif; ?>
                            <h3><?php echo esc_html( $settings['section_title'] ); ?></h3>
                        </div>
                    <?php endif; ?>

                    <div class="news-posts grid grid-3 g-gap-25">
                        <?php 
                            while($q->have_posts()) : $q->the_post(); 
                            $post_id = get_the_ID(); 
                            $categories = get_the_category($post_id);

                            if ( $settings['excerpt_count'] ) {
                                $excerpt = word_count(get_the_excerpt($post_id), ''.$settings['excerpt_count'].'');
                            } else {
                                $excerpt = word_count(get_the_excerpt($post_id), '20');
                            }

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
                            <div class="single-news-post">
                                <?php if($settings['show_img'] === 'yes') : ?>
                                    <div class="entry-media">
                                        <?php 
                                        if(has_post_thumbnail( $post_id )) :
                                            if ( !empty($msitheme_meta['post_extra_img']) ) { ?>
                                                <img class="custom-blog-img" src="<?php echo esc_url($post_extra_img['url']); ?>" alt="<?php echo esc_attr( the_title() ); ?>">
                                            <?php 
                                            } else {
                                                the_post_thumbnail($post_id); 
                                            }
                                        endif; 
                                        ?>
                                        <?php if($settings['show_cats'] === 'yes') : $categories = get_the_category($post_id);  foreach($categories as $category) : ?>
                                            <button><?php echo esc_html($category->cat_name); ?></button>
                                        <?php endforeach; endif; ?>
                                    </div>
                                <?php endif; ?>

                                <div class="entry-details">
                                    <?php if($settings['show_title'] === 'yes') : ?>
                                        <h4>
                                            <a href="<?php esc_url(the_permalink($post_id)); ?>">
                                                <?php esc_html( the_title() ); ?>
                                            </a>
                                        </h4>
                                    <?php endif; ?>
                                    <?php if($settings['show_excerpt'] === 'yes') : ?>
                                        <p class="excerpt"><?php echo esc_html( $excerpt ); ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
			</div>
		<?php wp_reset_query(); 
	}

}
