<?php
add_action( 'admin_menu', 'snwb_add_admin_menu' );
add_action( 'admin_init', 'snwb_settings_init' );


function snwb_add_admin_menu(  ) { 

	add_options_page( 'snowbotica-wordpress-blog', 'snowbotica-wordpress-blog', 'manage_options', 'snowbotica-wordpress-blog', 'snwb_options_page' );

}


function snwb_settings_init(  ) { 

	register_setting( 'pluginPage', 'snwb_settings' );

	add_settings_section(
		'snwb_pluginPage_section', 
		__( 'Your section description', 'wordpress' ), 
		'snwb_settings_section_callback', 
		'pluginPage'
	);
    /*
	add_settings_field( 
		'snwb_checkbox_field_0', 
		__( 'Settings field description', 'wordpress' ), 
		'snwb_checkbox_field_0_render', 
		'pluginPage', 
		'snwb_pluginPage_section' 
	);

	add_settings_field( 
		'snwb_text_field_1', 
		__( 'Settings field description', 'wordpress' ), 
		'snwb_text_field_1_render', 
		'pluginPage', 
		'snwb_pluginPage_section' 
	);

	add_settings_field( 
		'snwb_radio_field_2', 
		__( 'Settings field description', 'wordpress' ), 
		'snwb_radio_field_2_render', 
		'pluginPage', 
		'snwb_pluginPage_section' 
	);
	*/
    // there is only six of these
	add_settings_field( 
		'snwb_blog_cat_select_1', 
		__( 'Box 1 Cat', 'wordpress' ), 
		'snwb_blog_cat_select_1_render', 
		'pluginPage', 
		'snwb_pluginPage_section' 
	);

	add_settings_field( 
		'snwb_blog_cat_select_2', 
		__( 'Box 2 Cat', 'wordpress' ), 
		'snwb_blog_cat_select_2_render', 
		'pluginPage', 
		'snwb_pluginPage_section' 
	);
	add_settings_field( 
		'snwb_blog_cat_select_3', 
		__( 'Box 3 Cat', 'wordpress' ), 
		'snwb_blog_cat_select_3_render', 
		'pluginPage', 
		'snwb_pluginPage_section' 
	);
	add_settings_field( 
		'snwb_blog_cat_select_4', 
		__( 'Box 4 Cat', 'wordpress' ), 
		'snwb_blog_cat_select_4_render', 
		'pluginPage', 
		'snwb_pluginPage_section' 
	);

	add_settings_field( 
		'snwb_blog_cat_select_5', 
		__( 'Box 5 Cat', 'wordpress' ), 
		'snwb_blog_cat_select_5_render', 
		'pluginPage', 
		'snwb_pluginPage_section' 
	);

	add_settings_field( 
		'snwb_blog_cat_select_6', 
		__( 'Box 6 Cat', 'wordpress' ), 
		'snwb_blog_cat_select_6_render', 
		'pluginPage', 
		'snwb_pluginPage_section' 
	);


}

/*
function snwb_checkbox_field_0_render(  ) { 

	$options = get_option( 'snwb_settings' );
	?>
	<input type='checkbox' name='snwb_settings[snwb_checkbox_field_0]' <?php checked( $options['snwb_checkbox_field_0'], 1 ); ?> value='1'>
	<?php

}


function snwb_text_field_1_render(  ) { 

	$options = get_option( 'snwb_settings' );
	?>
	<input type='text' name='snwb_settings[snwb_text_field_1]' value='<?php echo $options['snwb_text_field_1']; ?>'>
	<?php

}


function snwb_radio_field_2_render(  ) { 

	$options = get_option( 'snwb_settings' );
	?>
	<input type='radio' name='snwb_settings[snwb_radio_field_2]' <?php checked( $options['snwb_radio_field_2'], 1 ); ?> value='1'>
	<?php

}


function snwb_textarea_field_3_render(  ) { 

	$options = get_option( 'snwb_settings' );
	?>
	<textarea cols='40' rows='5' name='snwb_settings[snwb_textarea_field_3]'> 
		<?php echo $options['snwb_textarea_field_3']; ?>
 	</textarea>
	<?php

}
*/

function snwb_blog_cat_select_1_render( ) {
	chooseCategory('snwb_blog_cat_select_1');
}
function snwb_blog_cat_select_2_render( ) {
	chooseCategory('snwb_blog_cat_select_2');
}
function snwb_blog_cat_select_3_render( ) {
	chooseCategory('snwb_blog_cat_select_3');
}
function snwb_blog_cat_select_4_render( ) {
	chooseCategory('snwb_blog_cat_select_4');
}
function snwb_blog_cat_select_5_render( ) {
	chooseCategory('snwb_blog_cat_select_5');
}
function snwb_blog_cat_select_6_render( ) {
	chooseCategory('snwb_blog_cat_select_6');
}


function chooseCategory($settings_field){
	$options = get_option( 'snwb_settings' );
	?>
	<select name='snwb_settings[<?php echo $settings_field;?>]'>
	    <?php
		$cats = get_terms('category');
		$blog_cats = array("all" => "All");
		foreach ($cats as $cat) :?>
			<option value='<?php echo $cat->slug;?>' <?php selected( $options[$settings_field], $cat->slug ); ?>><?php echo $cat->name;?></option>
		<?php endforeach;?>
	</select>
	<?php
}

function snwb_radio_field_5_render(  ) { 

	$options = get_option( 'snwb_settings' );
	?>
	<input type='radio' name='snwb_settings[snwb_radio_field_5]' <?php checked( $options['snwb_radio_field_5'], 1 ); ?> value='1'>
	<?php

}


function snwb_settings_section_callback(  ) { 

	echo __( 'This section description', 'wordpress' );

}


function snwb_options_page(  ) { 

	?>
	<form action='options.php' method='post'>

		<h2>snowbotica-wordpress-blog</h2>

		<?php
		settings_fields( 'pluginPage' );
		do_settings_sections( 'pluginPage' );
		submit_button();
		?>

	</form>
	<?php

}
?>