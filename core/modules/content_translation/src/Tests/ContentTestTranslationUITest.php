<?php

/**
 * @file
 * Contains \Drupal\content_translation\Tests\ContentTestTranslationUITest.
 */

namespace Drupal\content_translation\Tests;

/**
 * Tests the test content translation UI with the test entity.
 *
 * @group content_translation
 */
class ContentTestTranslationUITest extends ContentTranslationUITestBase {

  /**
   * {@inheritdoc}
   */
  protected $testHTMLEscapeForAllLanguages = TRUE;

  /**
   * Modules to enable.
   *
   * @var array
   */
  public static $modules = array('language', 'content_translation', 'entity_test');

  /**
   * {@inheritdoc}
   */
  protected $defaultCacheContexts = [
    'languages:language_interface',
    'theme',
    'url.path',
    'url.query_args',
    'user.permissions',
    'user.roles:authenticated',
  ];

  /**
   * Overrides \Drupal\simpletest\WebTestBase::setUp().
   */
  protected function setUp() {
    // Use the entity_test_mul as this has multilingual property support.
    $this->entityTypeId = 'entity_test_mul_changed';
    parent::setUp();
  }

  /**
   * Overrides \Drupal\content_translation\Tests\ContentTranslationUITestBase::getTranslatorPermission().
   */
  protected function getTranslatorPermissions() {
    return array_merge(parent::getTranslatorPermissions(), array('administer entity_test content', 'view test entity'));
  }

}
