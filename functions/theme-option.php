<?php
add_action( 'admin_menu', 'theme_prefix_add_admin_menu' );
add_action( 'admin_init', 'theme_prefix_settings_init' );


function theme_prefix_add_admin_menu(  ) {

	add_menu_page( 'theme_option', 'theme_option', 'manage_options', 'theme_option', 'theme_prefix_options_page' );

}


function theme_prefix_settings_init(  ) {

	register_setting( 'pluginPage', 'theme_prefix_settings' );

	add_settings_section(
		'theme_prefix_pluginPage_section',
		__( 'Your section description', 'theme_text_domein' ),
		'theme_prefix_settings_section_callback',
		'pluginPage'
	);

	add_settings_field(
		'theme_prefix_text_field_0',
		__( 'Settings field description', 'theme_text_domein' ),
		'theme_prefix_text_field_0_render',
		'pluginPage',
		'theme_prefix_pluginPage_section'
	);

	add_settings_field(
		'theme_prefix_text_field_1',
		__( 'Settings field description', 'theme_text_domein' ),
		'theme_prefix_text_field_1_render',
		'pluginPage',
		'theme_prefix_pluginPage_section'
	);

	add_settings_field(
		'theme_prefix_text_field_2',
		__( 'Settings field description', 'theme_text_domein' ),
		'theme_prefix_text_field_2_render',
		'pluginPage',
		'theme_prefix_pluginPage_section'
	);


}


function theme_prefix_text_field_0_render(  ) {

	$options = get_option( 'theme_prefix_settings' );
	?>
	<input type='text' name='theme_prefix_settings[theme_prefix_text_field_0]' value='<?php echo $options['theme_prefix_text_field_0']; ?>'>
	<?php

}


function theme_prefix_text_field_1_render(  ) {

	$options = get_option( 'theme_prefix_settings' );
	?>
	<input type='text' name='theme_prefix_settings[theme_prefix_text_field_1]' value='<?php echo $options['theme_prefix_text_field_1']; ?>'>
	<?php
}


function theme_prefix_text_field_2_render(  ) {

	$options = get_option( 'theme_prefix_settings' );
	?>
	<input type='text' name='theme_prefix_settings[theme_prefix_text_field_2]' value='<?php echo $options['theme_prefix_text_field_2']; ?>'>
	<?php
}


function theme_prefix_settings_section_callback(  ) {

	echo __( 'This section description', 'theme_text_domein' );

}


function theme_prefix_options_page(  ) {

		?>
		<form action='options.php' method='post'>

			<h2>theme_option</h2>

			<?php
			settings_fields( 'pluginPage' );
			do_settings_sections( 'pluginPage' );
			submit_button();
			?>

		</form>
		<?php

}
