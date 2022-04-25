<?php

/**
 * @file
 * Generates markup to be displayed. Functionality in this Controller is 
 * wired to Drupal in mymodule.routing.yml.
 */

namespace Drupal\mymodule\Controller;

use Drupal\Core\Controller\ControllerBase;

class FirstController extends ControllerBase {

  public function simpleContent() {
  	return [
  		'#type' => 'markup',
  		'#markup' => t(string: 'Hello Dupal World.                                                                                                                                                                                          Time flies like an arrow, fruit flies like a banana')  							   
  	];
  }
}