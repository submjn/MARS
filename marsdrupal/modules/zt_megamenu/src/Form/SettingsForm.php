<?php

namespace Drupal\zt_megamenu\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\system\Entity\Menu;

/**
 * Class SettingsForm.
 *
 * @package Drupal\zt_megamenu\Form
 */
class SettingsForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      'zt_megamenu.settings',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'settings_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('zt_megamenu.settings');
    $elements = array(
      'main' => 'Main Menu',
      'secondary-menu' => 'Secondary Menu',
    );

    $form['zt_megamenu_menu_id'] = array(
      '#type' => 'select',
      '#title' => $this->t('Select menu for ZT Megamenu'),
      '#default_value' => $config->get('zt_megamenu_menu_id'),
      '#options' => $this->ztGetMenuList(),
    );

    $form['zt_megamenu_image_machine_name'] = array(
      '#type' => 'textfield',
      '#title' => t('Machine name of the image field for ZT Megamenu'),
      '#default_value' => $config->get('zt_megamenu_image_machine_name'),
    );

    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    parent::validateForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $config = \Drupal::service('config.factory')->getEditable('zt_megamenu.settings');
    $config->set('zt_megamenu_menu_id', $form_state->getValue('zt_megamenu_menu_id'))
      ->save();
    $config->set('zt_megamenu_image_machine_name', $form_state->getValue('zt_megamenu_image_machine_name'))
      ->save();
    parent::submitForm($form, $form_state);
  }

  /**
   * Return an associative array of the custom menus names.
   */
  private function ztGetMenuList() {
    $all_menus = Menu::loadMultiple();
    $menus = array();
    foreach ($all_menus as $id => $menu) {
      $menus[$id] = $menu->label();
    }
    asort($menus);
    return $menus;
  }

}
