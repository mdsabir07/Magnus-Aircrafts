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
class SocialShare extends Widget_Base
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
		return 'social-share';
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
		return esc_html__('Social Share', 'coderdevsbd');
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
				'label' => __('Social Share', 'coderdevsbd'),
			]
		);

		$this->add_control(
			'share_label',
			[
				'label' => __('Share heading', 'coderdevsbd'),
				'type' => Controls_Manager::TEXT,
				'label_block' => true,
			]
		);


		$this->add_control(
			'insta',
			[
				'label' => __('Instagram link', 'coderdevsbd'),
				'type' => Controls_Manager::TEXT,
				'label_block' => true,
			]
		);

		$this->add_control(
			'linked',
			[
				'label' => __('Linkedin link', 'coderdevsbd'),
				'type' => Controls_Manager::TEXT,
				'label_block' => true,
			]
		);

		$this->add_control(
			'twitter',
			[
				'label' => __('Twitter link', 'coderdevsbd'),
				'type' => Controls_Manager::TEXT,
				'label_block' => true,
			]
		);

		$this->add_control(
			'facebook',
			[
				'label' => __('Facebook link', 'coderdevsbd'),
				'type' => Controls_Manager::TEXT,
				'label_block' => true,
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
			<div class="social-shares flex align-center">
                <?php if ( !empty($settings['share_label']) ) : ?>
                    <div class="share clr-white fw-500"><?php echo esc_html( $settings['share_label'] ); ?></div>
                <?php endif; ?>
                <div class="share-line"></div>
                <div class="share-icons flex aling-center clr-white">
                    <?php if ( !empty($settings['insta']) ) : ?>
                        <a href="<?php echo esc_url($settings['insta']); ?>" class="social-icon clr-white"><i class="fab fa-instagram"></i></a>
                    <?php endif; if ( !empty($settings['linked']) ) : ?>
                        <a href="<?php echo esc_url($settings['linked']); ?>" class="social-icon clr-white"><i class="fab fa-linkedin-in"></i></a>
                    <?php endif; if ( !empty($settings['twitter']) ) : ?>
                        <a href="<?php echo esc_url($settings['twitter']); ?>" class="social-icon clr-white"><i class="fab fa-twitter"></i></a>
                    <?php endif; if ( !empty($settings['facebook']) ) : ?>
                        <a href="<?php echo esc_url($settings['facebook']); ?>" class="social-icon clr-white"><i class="fab fa-facebook-f"></i></a>
                    <?php endif; ?>
                </div>
            </div>
		<?php
	}

}
