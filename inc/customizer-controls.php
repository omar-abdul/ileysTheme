<?php

/*

Custom customizer controls 

*/

if(class_exists('WP_Customize_Control')){
    class Skyrocket_Dropdown_Posts_Custom_Control extends WP_Customize_Control {
		/**
		 * The type of control being rendered
		 */
		public $type = 'dropdown_posts';
		/**
		 * Posts
		 */
		private $posts = array();
		/**
		 * Constructor
		 */
		public function __construct( $manager, $id, $args = array(), $options = array() ) {
			parent::__construct( $manager, $id, $args );
			// Get our Posts
			$this->posts = get_posts( $this->input_attrs );
		}
		/**
		 * Render the control in the customizer
		 */
		public function render_content() {
		?>
			<div class="dropdown_posts_control">
				<?php if( !empty( $this->label ) ) { ?>
					<label for="<?php echo esc_attr( $this->id ); ?>" class="customize-control-title">
						<?php echo esc_html( $this->label ); ?>
					</label>
				<?php } ?>
				<?php if( !empty( $this->description ) ) { ?>
					<span class="customize-control-description"><?php echo esc_html( $this->description ); ?></span>
				<?php } ?>
				<select name="<?php echo $this->id; ?>" id="<?php echo $this->id; ?>" <?php $this->link(); ?>>
					<?php
						if( !empty( $this->posts ) ) {
							foreach ( $this->posts as $post ) {
								printf( '<option value="%s" %s>%s</option>',
									$post->ID,
									selected( $this->value(), $post->ID, false ),
									$post->post_title
								);
							}
						}
					?>
				</select>
			</div>
		<?php
		}
	}

	
	class My_Dropdown_Category_Control extends WP_Customize_Control {

		public $type = 'dropdown-category';
	
		protected $dropdown_args = false;
	
		protected function render_content() {
			?><label><?php
	
			if ( ! empty( $this->label ) ) :
				?><span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span><?php
			endif;
	
			if ( ! empty( $this->description ) ) :
				?><span class="description customize-control-description"><?php echo $this->description; ?></span><?php
			endif;
	
			$dropdown_args = wp_parse_args( $this->dropdown_args, array(
				'taxonomy'          => 'category',
				'show_option_none'  => ' ',
				'selected'          => $this->value(),
				'show_option_all'   => '',
				'orderby'           => 'id',
				'order'             => 'ASC',
				'show_count'        => 1,
				'hide_empty'        => 1,
				'child_of'          => 0,
				'exclude'           => '',
				'hierarchical'      => 1,
				'depth'             => 0,
				'tab_index'         => 0,
				'hide_if_empty'     => false,
				'option_none_value' => 0,
				'value_field'       => 'term_id',
			) );
	
			$dropdown_args['echo'] = false;
	
			$dropdown = wp_dropdown_categories( $dropdown_args );
			$dropdown = str_replace( '<select', '<select ' . $this->get_link(), $dropdown );
			echo $dropdown;
	
			?></label><?php
	
		}
	}

}
