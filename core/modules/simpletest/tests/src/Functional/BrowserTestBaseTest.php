<?php

/**
 * @file
 * Definition of Drupal\simpletest\Tests\BrowserTestBaseTest.
 */

namespace Drupal\simpletest\Tests;

use Drupal\simpletest\BrowserTestBase;

/**
 * Tests BrowserTestBase functionality.
 *
 * @group simpletest
 * @group modern
 */
class BrowserTestBaseTest extends BrowserTestBase {

  /**
   * Modules to enable.
   *
   * @var array
   */
  public static $modules = array('simpletest_test');

  /**
   * The administrator user.
   */
  protected $adminUser = FALSE;

  /**
   * Tests basic page test.
   */
  function testGoTo() {
    // Go to the front page and make sure we can see some text.
    $this->drupalGet('');
    $this->assertPageTextContains("Enter your Drupal username.");

    // Test login.
    $this->adminUser = $this->drupalCreateUser();
    $this->drupalLogin($this->adminUser);
    $this->drupalUserIsLoggedIn($this->adminUser);

    // Click a link.

    // Test response code.


  }

  /**
   * Tests basic page test.
   */
  function testForm() {
    $this->drupalGet('');

    // Fill out form.


    // File uplaod.

    
  }

}