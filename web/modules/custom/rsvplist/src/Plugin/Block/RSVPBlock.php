<?php

/**
* @file
* Creates a block wich displays the RSVPForm contained in RSVPForm.php
*/

namespace Drupal\rsvplist\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;

/**
 * Provides the RSVP main block.
 * 
 * @Block(
 *   id = "rsvp_block",
 *   admin_label = @Translation("The RSVP Block")
 * )
 */
class RSVPBlock extends BlockBase {
	/**
	 * {@inheritdoc}
	 */
	public function build() {
	  return \Drupal::formBuilder()->getForm('Drupal\rsvplist\Form\RSVPForm');
	}

    /**
	 * {@inheritdoc}
	 */
    public function blockAccess(AccountInterface $account) {
      // If viewing a node, get the fully loadded node object.
      $node = \Drupal::routeMatch()->getParameter('node');

      if ( !(is_null($node)) ) {
      	return AccessResult::allowedIfHasPermission($account, 'view resvplist');
      }

      return AccessResult::forbidden();

    }
}