<?php
namespace CoderdevsbdEssentialAddons\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly
}
/**
 * Elementor widget for hero slider.
 *
 * @since 1.0.0
 */
class HeroSlider extends Widget_Base
{

	/**
	 * Retrieve the widget name.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name()
	{
		return 'hero-slider';
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
	public function get_title()
	{
		return esc_html__('Hero Slider', 'coderdevsbd');
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
	public function get_icon()
	{
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
	public function get_categories()
	{
		return ['coderdevsbd'];
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
	public function get_script_depends()
	{
		return ['coderdevsbd'];
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
	protected function _register_controls()
	{
		$this->start_controls_section(
			'section_content',
			[
				'label' => __('Slider content', 'coderdevsbd'),
			]
		);

		$repeater = new \Elementor\Repeater();
		$repeater->add_control(
			'image',
			[
				'label' => esc_html__( 'Choose Image', 'coderdevsbd' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$repeater->add_control(
			'top_heading',
			[
				'label'	=> __( 'Top heading', 'coderdevsbd' ),
				'type'	=> Controls_Manager::TEXT,
				'label_block'	=> true,
			]
		);

		$repeater->add_control(
			'bottom_heading',
			[
				'label'	=> __( 'Bottom heading', 'coderdevsbd' ),
				'type'	=> Controls_Manager::TEXT,
				'label_block'	=> true,
			]
		);

		$repeater->add_control(
			'btn_label',
			[
				'label'	=> __( 'Button label', 'coderdevsbd' ),
				'type'	=> Controls_Manager::TEXT,
				'label_block'	=> true,
			]
		);

		$repeater->add_control(
			'btn_link',
			[
				'label' => esc_html__( 'Button Link', 'coderdevsbd' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://domain-link.com', 'coderdevsbd' ),
				'show_external' => true,
				'default' => [
					'url' => '',
					'is_external' => true,
					'nofollow' => true,
				],
			]
		);

		$this->add_control(
			'sliders',
			[
				'label' => esc_html__( 'Sliders', 'coderdevsbd' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
			]
		);
		$this->end_controls_section();


		$this->start_controls_section(
			'section_style',
			[
				'label' => __('Style', 'coderdevsbd'),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'top_heading_typography',
				'label' => __('Typography for top heading', 'coderdevsbd'),
				'selector' => '{{WRAPPER}} .slider-txts h2',
				'default' => '36px',
			]
		);
		$this->add_control(
			'top_heading_color',
			[
				'label' => __('Top Heading Color', 'coderdevsbd'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '#ffffff',
				'scheme' => [
					'type' => \Elementor\Core\Schemes\Color::get_type(),
					'value' => \Elementor\Core\Schemes\Color::COLOR_1,
				],
				'selectors' => [
					'{{WRAPPER}} .slider-txts h2' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bottom_heading_typography',
				'label' => __('Typography for bottom heading', 'coderdevsbd'),
				'selector' => '{{WRAPPER}} .slider-txts h1',
				'default' => '100px',
			]
		);
		$this->add_control(
			'bottom_heading_color',
			[
				'label' => __('Bottom Heading Color', 'coderdevsbd'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '#ffffff',
				'scheme' => [
					'type' => \Elementor\Core\Schemes\Color::get_type(),
					'value' => \Elementor\Core\Schemes\Color::COLOR_1,
				],
				'selectors' => [
					'{{WRAPPER}} .slider-txts h1' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'button_typography',
				'label' => __('Typography for button', 'coderdevsbd'),
				'selector' => '{{WRAPPER}} .slider-txts a.btn',
				'default' => '100px',
			]
		);
		$this->add_control(
			'button_color',
			[
				'label' => __('Button Color', 'coderdevsbd'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '#ffffff',
				'scheme' => [
					'type' => \Elementor\Core\Schemes\Color::get_type(),
					'value' => \Elementor\Core\Schemes\Color::COLOR_1,
				],
				'selectors' => [
					'{{WRAPPER}} .slider-txts a.clr-white' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'btn_bg_color',
			[
				'label' => __('Button background Color', 'coderdevsbd'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '#FA6400',
				'scheme' => [
					'type' => \Elementor\Core\Schemes\Color::get_type(),
					'value' => \Elementor\Core\Schemes\Color::COLOR_1,
				],
				'selectors' => [
					'{{WRAPPER}} .slider-txts a.clr-orange-bg' => 'background: {{VALUE}}',
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
		if(!empty($settings['sliders'])) : 
		?>
			<!-- start of hero -->
			<div class="hero-slider overflow-hidden">
				<?php 
					foreach ( $settings['sliders'] as $slider ) : 
						$target = $slider['btn_link']['is_external'] ? ' target="_blank"' : '';
						$nofollow = $slider['btn_link']['nofollow'] ? ' rel="nofollow"' : '';
				?>
					<div class="single-slide relative">
						<img width="100%" src="<?php echo esc_url(wp_get_attachment_image_url( $slider['image']['id'], '' )); ?>" alt="<?php echo esc_attr( $slider['top_heading'] ); ?>">
						<div class="slider-txts absolute text-center">
							<?php if( !empty($slider['top_heading'])) : ?>
								<h2 class="caveat fw-400 clr-white">
									<?php echo esc_html( $slider['top_heading'] ); ?>
								</h2>
							<?php endif; if( !empty($slider['bottom_heading'])) : ?>
								<h1 class="brygada-1918 fw-500 clr-white">
									<?php echo esc_html( $slider['bottom_heading'] ); ?>
								</h1>
							<?php endif; if( !empty($slider['btn_label'])) : ?>
								<a href="<?php echo esc_url( $slider['btn_link']['url'] ); ?>" <?php echo esc_attr( $target ); ?> <?php echo esc_attr( $nofollow ); ?> class="btn rounded-btn clr-orange-bg clr-white">
									<?php echo esc_html( $slider['btn_label'] ); ?> <i class="fa fa-arrow-right"></i>
								</a>
							<?php endif; ?>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
			<!-- end of hero slider -->

		<?php
		endif;
	}

}
