<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DtbPlugin Entity
 *
 * @property int $plugin_id
 * @property string $plugin_name
 * @property string $plugin_code
 * @property string $class_name
 * @property string $author
 * @property string $author_site_url
 * @property string $plugin_site_url
 * @property string $plugin_version
 * @property string $compliant_version
 * @property string $plugin_description
 * @property int $priority
 * @property int $enable
 * @property string $free_field1
 * @property string $free_field2
 * @property string $free_field3
 * @property string $free_field4
 * @property \Cake\I18n\FrozenTime $create_date
 * @property \Cake\I18n\FrozenTime $update_date
 */
class DtbPlugin extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'plugin_name' => true,
        'plugin_code' => true,
        'class_name' => true,
        'author' => true,
        'author_site_url' => true,
        'plugin_site_url' => true,
        'plugin_version' => true,
        'compliant_version' => true,
        'plugin_description' => true,
        'priority' => true,
        'enable' => true,
        'free_field1' => true,
        'free_field2' => true,
        'free_field3' => true,
        'free_field4' => true,
        'create_date' => true,
        'update_date' => true
    ];
}
