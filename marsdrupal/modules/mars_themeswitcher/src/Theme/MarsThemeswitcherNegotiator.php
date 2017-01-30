<?php
/**
 * Created by PhpStorm.
 * User: smaharjan
 * Date: 1/23/2017
 * Time: 2:35 PM
 */

namespace Drupal\mars_themeswitcher\Theme;

use Drupal\Core\Routing\RouteMatchInterface;
use Drupal\Core\Theme\ThemeNegotiatorInterface;

class MarsThemeswitcherNegotiator implements ThemeNegotiatorInterface
{
    public function applies(RouteMatchInterface $route_match) {
        $applies = FALSE;
        $section_menus = array('section1', 'section2', 'section3');
        foreach ($section_menus as $menu_name) {
            $link = \Drupal::service('menu.active_trail')->getActiveLink($menu_name);
            if (!empty($link)) {
                $applies = TRUE;
            }
        }
        // Use this theme negotiator.
        return $applies;
    }

    /**
     * {@inheritdoc}
     */
    public function determineActiveTheme(RouteMatchInterface $route_match) {
        $section_menus = array('section1', 'section2', 'section3');
        foreach ($section_menus as $menu_name) {
            $link = \Drupal::service('menu.active_trail')->getActiveLink($menu_name);
            if (!empty($link)) {
                return 'subtheme_' . $menu_name;
            }
        }
    }
}