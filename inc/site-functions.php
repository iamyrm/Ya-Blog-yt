<?php
// Adding the content to header via wp_head hook
add_action('wp_head', 'siteHeaderContents');

function siteHeaderContents()
{
?>
   <link rel="apple-touch-icon" sizes="180x180" href="<?php echo esc_url(get_template_directory_uri() . '/assets/apple-touch-icon.png'); ?>">
   <link rel="icon" type="image/png" sizes="32x32" href="<?php echo esc_url(get_template_directory_uri() . '/assets/favicon-32x32.png'); ?>">
   <link rel="icon" type="image/png" sizes="16x16" href="<?php echo esc_url(get_template_directory_uri() . '/assets/favicon-16x16.png'); ?>">
   <link rel="manifest" href="<?php echo esc_url(get_template_directory_uri() . '/site.webmanifest'); ?>">

   <script>
      document.documentElement.classList.remove('no-js');
      document.documentElement.classList.add('js');
   </script>
<?php
}
