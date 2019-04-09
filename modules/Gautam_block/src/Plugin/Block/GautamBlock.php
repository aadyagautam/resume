<?php
/**
 * @file
 * Contains \Drupal\article\Plugin\Block\XaiBlock.
 */
namespace Drupal\Gautam_block\Plugin\Block;
/**
 * Provides a block with a simple text.
 *
 * @Block(
 *   id = "gautam_block",
 *   admin_label = @Translation("Gautam block"),
 * )
 */
use Drupal\Core\Access\AccessResult;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Session\AccountInterface;

class GautamBlock extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {
    return array(
      '#type' => 'markup',
      '#markup' => 'This block list the custom.',
    );
  }
}