<?php
function greenland_customizer($wp_customize)
{
   // Register the Custom Section
   $wp_customize->add_section(
      'section_header_and_footer',
      array(
         'title'       => 'Header and Footer Section',
         'description' => 'Header and Footer Section details',
      )
   );

   // Labels (0 to 9)
   $labels = array(
      0 => 'Footer Description',
      1 => 'Footer Heading 1',
      2 => 'Footer Heading 2',
      3 => 'Facebook',
      4 => 'Twitter',
      5 => 'Instagram',
      6 => 'Pinterest',
      7 => 'Copyright 1',
      8 => 'Copyright 2',
      9 => 'Copyright 2 URL',
   );

   foreach ($labels as $i => $label) {
      // Add setting
      $wp_customize->add_setting(
         "setting_site_details$i",
         array(
            'type'              => 'theme_mod',
            'default'           => '',
            'sanitize_callback' => 'sanitize_text_field'
         )
      );

      // Add control
      $wp_customize->add_control(
         "setting_site_details$i",
         array(
            'label'       => $label,
            'description' => "Please enter $label details.",
            'section'     => 'section_header_and_footer',
            'type'        => ($i === 0) ? 'textarea' : 'text'
         )
      );
   }
}
add_action('customize_register', 'greenland_customizer');
