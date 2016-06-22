<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['header']: Header of the page
 * - $page['menu']: Menu strip (responsive) below header
 * - $page['slider']: Large picture or slider below menu
 * - $page['content']: Required by Drupal 7, put 3 tabs there
 * - $page['product_components']: Section below content for "reader, speaker, and app"
 * - $page['action']: Section for calling for action, 
 * - $page['footer']: Fat footer for social media link and disclaimer. 
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
?>

<div id="page-wrapper">
    <div id="page">
      <div class="hum-header">
        <?php if ($page['header']): ?>
            <?php print render($page['header']); ?>
        <?php endif; ?>
    
      </div>
      <div class="hum-menu">
        <div class="nav-menu center-axis-y ">
          <?php if ($page['menu']): ?>
            <?php print render($page['menu']); ?>
          <?php endif; ?>
        </div>
      </div>
      <div class="hum-slider">
        <?php if ($page['slider']): ?>
            <?php print render($page['slider']); ?>
        <?php endif; ?>
      </div>
      <?php print $messages; ?>
      <div class="hum-tabs">
        <?php if(drupal_is_front_page()): ?>
          <?php unset($page['content']['system_main']['default_message']); ?>
        <?php endif; ?>
        <?php print render($page['content']); ?>
      </div>
      <div class="hum-system">
        system components
        <?php if ($page['product_components']): ?>
            <?php print render($page['product_components']); ?>
        <?php endif; ?>
      </div>
      <div class="hum-get-hum">
        action
        <?php if ($page['action']): ?>
            <?php print render($page['action']); ?>
        <?php endif; ?>
      </div> 
      <div class="hum-footer">
        footer
        <?php if ($page['footer']): ?>
            <?php print render($page['footer']); ?>
        <?php endif; ?>
      </div>
    </div>
</div> <!-- /#page-wrapper --><!-- /#page, /#page-wrapper -->
