<?php
namespace MsiThemeEssentialAddons\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly
}

class Productdata extends Widget_Base {

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
		return 'product-data';
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
		return __( 'Product data', 'msitheme' );
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
		return 'eicon-product-info';
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
				'label' => __( 'Prodcut hero content', 'msitheme' ),
			]
		);
		
        $this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'background',
				'label' => esc_html__( 'Background', 'msitheme' ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .product-hero-wrap',
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
			'top_heading_border',
			[
				'label' => __( 'Top heading border?', 'msitheme' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'yes',
				'options' => [
					'yes'	=> __( 'Yes', 'msitheme' ), 
					'no'	=> __( 'No', 'msitheme' ), 
				],
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
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'show_label' => true,
				'condition'	=> [
					'show_section_title'	=> 'yes',
				],
			]
		);
		$this->add_control(
			'sup',
			[
				'label' => __( 'Title sup text', 'msitheme' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'show_label' => true,
				'condition'	=> [
					'show_section_title'	=> 'yes',
				],
			]
		);


        $this->add_control(
			'section_title_tag',
			[
				'type' => \Elementor\Controls_Manager::SELECT,
				'label' => esc_html__( 'HTML title tag', 'msitheme' ),
				'default' => 'h2',
				'options' => [
					'h1' => esc_html__( 'H1', 'msitheme' ),
					'h2' => esc_html__( 'H2', 'msitheme' ),
					'h3' => esc_html__( 'H3', 'msitheme' ),
					'h4' => esc_html__( 'H4', 'msitheme' ),
					'h5' => esc_html__( 'H5', 'msitheme' ),
					'h6' => esc_html__( 'H6', 'msitheme' ),
					'div' => esc_html__( 'div', 'msitheme' ),
					'span' => esc_html__( 'span', 'msitheme' ),
					'p' => esc_html__( 'p', 'msitheme' ),
				],
				'condition'	=> [
					'show_section_title'	=> 'yes',
				],
			]
		);

        $this->add_control(
			'text_align',
			[
				'label' => esc_html__( 'Alignment', 'msitheme' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', 'msitheme' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'msitheme' ),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'msitheme' ),
						'icon' => 'eicon-text-align-right',
					],
					'justify' => [
						'title' => esc_html__( 'Justify', 'msitheme' ),
						'icon' => 'eicon-text-align-justify',
					],
				],
				'default' => 'center',
				'toggle' => true,
				'selectors' => [
					'{{WRAPPER}} .section-title-wrap' => 'text-align: {{VALUE}};',
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
				'selector' => '{{WRAPPER}} .section-top-heading',
			]
		);
        $this->add_control(
			'top_heading_color',
			[
				'label' => __( 'Top Heading Color', 'msitheme' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '#B1DEE3',
				'scheme' => [
					'type' => \Elementor\Core\Schemes\Color::get_type(),
					'value' => \Elementor\Core\Schemes\Color::COLOR_1,
				],
				'selectors' => [
					'{{WRAPPER}} .section-top-heading' => 'color: {{VALUE}}',
				],
			]
		);
		
        $this->add_control(
			'heading_border_color',
			[
				'label' => __( 'Top Heading Border Color', 'msitheme' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '#fff',
				'scheme' => [
					'type' => \Elementor\Core\Schemes\Color::get_type(),
					'value' => \Elementor\Core\Schemes\Color::COLOR_1,
				],
				'selectors' => [
					'{{WRAPPER}} .section-top-heading::before, .section-top-heading::after' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'heading_border_width',
			[
				'label' => __( 'Top Heading Border width', 'msitheme' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => '100',
				'selectors' => [
					'{{WRAPPER}} .section-top-heading::before' => 'width: {{VALUE}}%',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'section_heading_typography',
				'label' => __( 'Typography for section heading', 'msitheme' ),
				'selector' => '{{WRAPPER}} .section-heading',
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
					'{{WRAPPER}} .section-heading' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Text_Stroke::get_type(),
			[
				'name' => 'heading_stroke',
				'selector' => '{{WRAPPER}} .section-heading',
			]
		);

        
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'sup_typography',
				'label' => __( 'Typography for section heading', 'msitheme' ),
				'selector' => '{{WRAPPER}} .section-heading sup',
			]
		);

        $this->add_control(
			'sup_color',
			[
				'label' => __( 'Sup Color', 'msitheme' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '#FFF',
				'scheme' => [
					'type' => \Elementor\Core\Schemes\Color::get_type(),
					'value' => \Elementor\Core\Schemes\Color::COLOR_1,
				],
				'selectors' => [
					'{{WRAPPER}} .section-heading sup' => 'color: {{VALUE}}',
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

        ?>
            <div class="section-title-wrap product-data">
                <?php 
                if($settings['show_top_heading'] === 'yes') : 
                    if ( !empty($settings['top_heading']) ) : 
                        if ( $settings['top_heading_border'] === 'yes' ) :
                            $border = ' theme-border relative';
                        else : 
                            $border = '';
                        endif;
                ?>
                    <h6 class="section-top-heading<?php echo esc_attr( $border ); ?>">
                        <?php echo esc_html( $settings['top_heading'] ); ?>
                    </h6>
                <?php endif; endif;
                if($settings['show_section_title'] === 'yes') : ?>
                    <<?php echo esc_attr( $settings['section_title_tag'] ); ?> class="section-heading">
                        <?php echo wp_kses_post( $settings['section_title'] ); ?> 
						<?php if ( !empty( $settings['sup'] ) ) : ?>
							<sup><?php echo esc_html( $settings['sup'] ); ?></sup>
						<?php endif; ?>
                    </<?php echo esc_attr( $settings['section_title_tag'] ); ?>>
                <?php endif; ?>
            </div>
		<?php	
	}
}




