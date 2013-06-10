<?php 

/* ------------------------------------------------------------------------
 * PHP loader, to load all the plugins in subdirectories. 
 *
 * WordPress only looks for PHP files right inside the mu-plugins direcotry
 * and (unlike for normal plugins) not for files in subdirectories
 * ------------------------------------------------------------------------ */

require WPMU_PLUGIN_DIR . '/path-to-subdir/plugin-name.php';