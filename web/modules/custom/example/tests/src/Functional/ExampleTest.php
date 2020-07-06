<?php

namespace Drupal\Tests\example\Functional;

use Drupal\Tests\BrowserTestBase;

/**
 * Tests nothing.
 *
 * @group test
 */
class ExampleTest extends BrowserTestBase {

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'classy';

  /**
   * Tests nothing.
   */
  public function testExample() {
    $this->drupalGet('');
    $this->assertSession()->statusCodeEquals(200);
  }

}
