<?php
/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.iteverywhere.co.uk/
 * @since             1.0.0
 * @package           Woocommerce_course_booking
 *
 * @wordpress-plugin
 * Plugin Name:       Woocommerce Course Booking
 * Plugin URI:        https://www.iteverywhere.co.uk/
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            IT Everywhere Ltd
 * Author URI:        https://www.iteverywhere.co.uk/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       woocommerce_course_booking
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'PLUGIN_NAME_VERSION', '1.0.0' );

/**
 * Register the custom product type after init
 */

function register_bookable_product_type() {

	/**
	 * This should be in its own separate file.
	 */

	class WC_Product_Bookable_Product extends WC_Product_Simple {

		public function __construct( $product = 0 ) {
            $this->supports[] = 'ajax_add_to_cart';
			$this->product_type = 'bookable_product';

			parent::__construct( $product );

		}

		public function get_type() {
		return 'bookable_product';
	    }

	}

}
add_action( 'plugins_loaded', 'register_bookable_product_type' );

function add_bookable_product( $types ){

	// Key should be exactly the same as in the class product_type parameter
	$types[ 'bookable_product' ] = __( 'Bookable Product' );

	return $types;

}
add_filter( 'product_type_selector', 'add_bookable_product' );



/**
 * Add a custom product tab.
 */

function custom_product_tabs( $tabs) {
	$tabs['course'] = array(
		'label'		=> __( 'Course Details', 'woocommerce' ),
		'target'	=> 'course_options',
		'class'		=> array( 'show_if_bookable_product' ),
	);
	return $tabs;
}
add_filter( 'woocommerce_product_data_tabs', 'custom_product_tabs' );

/**
 * Contents of the rental options product tab.
 */

function course_details_product_tab_content() {
	global $post;
	?>
	<div id='course_options' class='panel woocommerce_options_panel'>
		<div class='options_group'>

			<?php
				woocommerce_wp_text_input( array(
					'id'			=> '_director_name',
					'label'			=> __( 'Course Director Name', 'woocommerce' ),
					'desc_tip'		=> 'true',
					'description'	=> __( 'Course Director Name', 'woocommerce' ),
					'type' 			=> 'text',
				) );
		    ?>
			
		</div>

	</div>
	<?php
     }
     
add_action( 'woocommerce_product_data_panels', 'course_details_product_tab_content' );


/**
 * Save the custom fields.
 */

function save_course_details_field( $post_id ) {
	
	
	if ( isset( $_POST['_director_name'] ) ) :
		update_post_meta( $post_id, '_director_name', sanitize_text_field( $_POST['_director_name'] ) );
	endif;
	
}
add_action( 'woocommerce_process_product_meta_bookable_product', 'save_course_details_field'  );

/**
 * Hide Shipping data panel.
 */
function hide_shipping_data_panel( $tabs) {
	
	
	$tabs['shipping']['class'][] = 'hide_if_bookable_product';

	return $tabs;

}
add_filter( 'woocommerce_product_data_tabs', 'hide_shipping_data_panel' );


add_action('woocommerce_product_options_general_product_data', 'woocommerce_product_custom_fields');
 

 
function woocommerce_product_custom_fields()
{
    global $woocommerce, $post;
    echo '<div class="course_general_field show_if_bookable_product">';

    // Course Overview
    woocommerce_wp_textarea_input(
        array(
            'id' => '_course_overview',
            'class'=> 'show_if_bookable_product',
            'placeholder' => 'Enter Course Overview Here',
            'label' => __('Course Overview', 'woocommerce'),
            'style' => 'height:300px;',
            'rows' => 10,
            'cols' => 20,
            'desc_tip' => 'true'
        )
    );

    //Who Attend Course
    woocommerce_wp_textarea_input(
        array(
            'id' => '_who_attend_course',
            'class'=> 'show_if_bookable_product',
            'placeholder' => 'Who Attend Course',
            'label' => __('Who Attend Course', 'woocommerce'),
            'style' => 'height:300px;',
            'rows' => 10,
            'cols' => 20,
            'desc_tip' => 'true'
            )
    );

    //Benefits of this course
    woocommerce_wp_textarea_input(
        array(
            'id' => '_benefits_of_this_course',
            'class'=> 'show_if_bookable_product',
            'placeholder' => 'Benefits of this course',
            'label' => __('Benefits of this course', 'woocommerce'),
            'style' => 'height:300px;',
            'rows' => 50,
            'cols' => 20,
            'desc_tip' => 'true'
        )
    );
    echo '</div>';
 
}

// Save Fields
add_action('woocommerce_process_product_meta', 'woocommerce_product_custom_fields_save');

function woocommerce_product_custom_fields_save($post_id)
{
    // Course Overview
    $course_overview = $_POST['_course_overview'];
    if (!empty($course_overview))
        update_post_meta($post_id, '_course_overview', esc_attr($course_overview));

// Who Attend Course
    $who_attend_course = $_POST['_who_attend_course'];
    if (!empty($who_attend_course))
        update_post_meta($post_id, '_who_attend_course', esc_attr($who_attend_course));

// Custom Product Textarea Field
    $benefits_of_this_course = $_POST['_benefits_of_this_course'];
    if (!empty($benefits_of_this_course))
        update_post_meta($post_id, '_benefits_of_this_course', esc_html($benefits_of_this_course));
 
}


/**
 * Fix for tabs showing errors. Also showing general tab with price ranges.
 */

function bookable_product_custom_js() {

	if ( 'product' != get_post_type() ) :
		return;
	endif;

	?><script type='text/javascript'>
		jQuery( document ).ready( function() {
		
			var selectedProductType = jQuery('#product-type').val();
           if(selectedProductType == 'bookable_product') {

             jQuery('.general_options').addClass('active').show();
             jQuery('#general_product_data').show();
             jQuery( '.course_general_field' ).show();
			  jQuery( '.options_group.pricing').addClass( 'show_if_bookable_product' ).show();
			  jQuery('.course_tab').removeClass('active');
			  jQuery('#course_options').hide();

		    }

		    jQuery('#product-type').change(function (){
		    	var selectedProductType = jQuery('#product-type').val();
	           if(selectedProductType == 'bookable_product') {

				  jQuery('.general_options').addClass('active').show();
	             jQuery('#general_product_data').show();
	             jQuery( '.course_general_field' ).show();
				  jQuery( '.options_group.pricing').addClass( 'show_if_bookable_product' ).show();
				  jQuery('.course_tab').removeClass('active');
				  jQuery('#course_options').hide();
			    }

		    });
		});
	</script><?php
}

add_action( 'admin_footer', 'bookable_product_custom_js' );


/*if( function_exists('acf_add_local_field_group') ):
acf_add_local_field_group(array (
	'key' => 'acf_product_options',
	'title' => 'Product Options',
	'fields' => array (
		array (
			'key' => 'acf_product_options_tabbedcontent_label',
			'label' => 'Tabbed Content',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array (
			'key' => 'acf_product_options_tabbedcontent_tabs',
			'label' => 'Tabs',
			'name' => 'tabs',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'min' => '',
			'max' => '',
			'layout' => 'row',
			'button_label' => 'Add Tab',
			'sub_fields' => array (
				array (
					'key' => 'acf_product_options_tabbedcontent_tab_title',
					'label' => 'Tab Title',
					'name' => 'tab_title',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
				array (
					'key' => 'acf_product_options_tabbedcontent_tab_content',
					'label' => 'Tab Content',
					'name' => 'tab_content',
					'type' => 'wysiwyg',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'tabs' => 'all',
					'toolbar' => 'full',
					'media_upload' => 1,
				),
			),
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'product',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
));
endif;*/

/*$data['rules'] = array(
	array(
		'referrer' => 1,
		'rule' => 13,
		'amount' => 100
	),
	array(
		'referrer' => 2,
		'rule' => 13,
		'amount' => 10
	)
);

update_post_meta( $post_id, 'referrers', count( $data['rules'] ) );

foreach ( $data['rules'] as $key => $row ) {
	update_post_meta( $post_id, "referrers_{$key}_contact_id", $row['referrer'] );
	update_post_meta( $post_id, "referrers_{$key}_rule", $row['rule'] );
	update_post_meta( $post_id, "referrers_{$key}_amount", $row['amount'] );
}*/


https://gist.github.com/hereswhatidid/3654843605397fe0e484
?>