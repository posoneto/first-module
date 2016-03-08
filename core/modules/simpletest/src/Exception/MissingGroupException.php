<?php

/**
 * @file
 * Contains \Drupal\simpletest\Exception\MissingGroupException.
 */

namespace Drupal\simpletest\Exception;

/**
 * Exception thrown when a simpletest class is missing an @group annotation.
 */
class MissingGroupException extends \LogicException {
}
