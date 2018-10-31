<?php

namespace Drupal\aidsfree_taxonomy_validation\Plugin\views\argument_validator;

//use Drupal\Core\Plugin\Context\ContextDefinition;
use Drupal\views\Plugin\views\argument_validator\ArgumentValidatorPluginBase;

/**
 * Validate the New boolean.
 *
 * @ingroup views_argument_validate_plugins
 *
 * @ViewsArgumentValidator(
 *   id = "aidsfree_taxonomy_validation",
 *   title = @Translation("AIDSFree Taxonomy Validation")
 * )
 */
class AidsfreeTaxonomyValidation extends ArgumentValidatorPluginBase {

  public function validateArgument($argument) {

    if($argument == 'new' || $argument == 'New' || $argument == '1') {
      $this->argument->argument = '1';
      return TRUE;
    }
    return FALSE;

  }

}