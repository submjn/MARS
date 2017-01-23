<?php
  /**
   * Pantheon drush alias file, to be placed in your ~/.drush directory or the aliases
   * directory of your local Drush home. Once it's in place, clear drush cache:
   *
   * drush cc drush
   *
   * To see all your available aliases:
   *
   * drush sa
   *
   * See http://helpdesk.getpantheon.com/customer/portal/articles/411388 for details.
   */

  $aliases['ams-mars.test'] = array(
    'uri' => 'test-ams-mars.pantheonsite.io',
    'db-url' => 'mysql://pantheon:88e34f937b034d679649451497205e17@dbserver.test.9b78bcd3-0fff-4f23-9e5e-bb9691c8e8af.drush.in:15144/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.test.9b78bcd3-0fff-4f23-9e5e-bb9691c8e8af.drush.in',
    'remote-user' => 'test.9b78bcd3-0fff-4f23-9e5e-bb9691c8e8af',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['ams-mars.live'] = array(
    'uri' => 'live-ams-mars.pantheonsite.io',
    'db-url' => 'mysql://pantheon:130bd28191d041f59a6d1852c8a05be2@dbserver.live.9b78bcd3-0fff-4f23-9e5e-bb9691c8e8af.drush.in:22807/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.live.9b78bcd3-0fff-4f23-9e5e-bb9691c8e8af.drush.in',
    'remote-user' => 'live.9b78bcd3-0fff-4f23-9e5e-bb9691c8e8af',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['ams-mars.dev'] = array(
    'uri' => 'dev-ams-mars.pantheonsite.io',
    'db-url' => 'mysql://pantheon:b7b84873d40e4729842e9aed32ab8476@dbserver.dev.9b78bcd3-0fff-4f23-9e5e-bb9691c8e8af.drush.in:15143/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.dev.9b78bcd3-0fff-4f23-9e5e-bb9691c8e8af.drush.in',
    'remote-user' => 'dev.9b78bcd3-0fff-4f23-9e5e-bb9691c8e8af',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
