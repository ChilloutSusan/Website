<!-- header styles -->

<?php
   $localFonts = apply_filters('get_local_fonts', '');
?>
<?php if ($localFonts) : ?> 
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/<?php echo $localFonts; ?>" media="screen" type="text/css" />
<?php else : ?>
   <?php endif; ?>
<link id="u-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
<style> .u-header {
  background-image: none;
}
.u-header .u-sheet-1 {
  min-height: 80px;
}
.u-header .u-menu-1 {
  margin: 22px 0 0 auto;
}
.u-header .u-nav-1 {
  font-weight: 700;
  font-size: 1rem;
  letter-spacing: normal;
}
.u-header .u-nav-2 {
  font-size: 1.25rem;
}
.u-header .u-social-icons-1 {
  white-space: nowrap;
  height: 66px;
  min-height: 16px;
  width: 258px;
  min-width: 108px;
  margin: -51px auto 7px 0;
}
.u-header .u-icon-1 {
  height: 32px;
}
.u-header .u-icon-2 {
  height: 100%;
}
.u-header .u-icon-3 {
  height: 100%;
}</style>
