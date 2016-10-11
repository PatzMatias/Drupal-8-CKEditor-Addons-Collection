<?php
namespace Drupal\dialogui\Plugin\CKEditorPlugin;
use Drupal\ckeditor\CKEditorPluginInterface;
use Drupal\Component\Plugin\PluginBase;
use Drupal\ckeditor\Annotation\CKEditorPlugin;
use Drupal\Core\Annotation\Translation;
use Drupal\editor\Entity\Editor;
/**
 * Defines the "dialogui" plugin.
 *
 * @CKEditorPlugin(
 *   id = "dialogui",
 *   label = @Translation("CKEditor Dialog UI"),
 *   module = "ckeditor"
 * )
 */
class DialogUi extends PluginBase implements CKEditorPluginInterface
{
  /**
   * Implements \Drupal\ckeditor\Plugin\CKEditorPluginInterface::getDependencies().
   */
  function getDependencies(Editor $editor)
  {
    return [];
  }
  /**
   * Implements \Drupal\ckeditor\Plugin\CKEditorPluginInterface::getLibraries().
   */
  function getLibraries(Editor $editor)
  {
    return [];
  }
  /**
   * Implements \Drupal\ckeditor\Plugin\CKEditorPluginInterface::isInternal().
   */
  function isInternal()
  {
    return FALSE;
  }
  /**
   * Implements \Drupal\ckeditor\Plugin\CKEditorPluginInterface::getFile().
   */
  function getFile()
  {
    $plugin = drupal_get_path('module', 'dialogui') . '/js/plugins/dialogui/plugin.js';
    return $plugin;
  }
  /**
   * Implements \Drupal\ckeditor\Plugin\CKEditorPluginInterface::getConfig().
   */
  public function getConfig(Editor $editor)
  {
    return [];
  }
}
