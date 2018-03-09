<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DtbPagelayout Entity
 *
 * @property int $device_type_id
 * @property int $page_id
 * @property string $page_name
 * @property string $url
 * @property string $filename
 * @property int $header_chk
 * @property int $footer_chk
 * @property int $edit_flg
 * @property string $author
 * @property string $description
 * @property string $keyword
 * @property string $update_url
 * @property \Cake\I18n\FrozenTime $create_date
 * @property \Cake\I18n\FrozenTime $update_date
 * @property string $meta_robots
 *
 * @property \App\Model\Entity\DeviceType $device_type
 * @property \App\Model\Entity\Page $page
 */
class DtbPagelayout extends Entity
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
        'page_name' => true,
        'url' => true,
        'filename' => true,
        'header_chk' => true,
        'footer_chk' => true,
        'edit_flg' => true,
        'author' => true,
        'description' => true,
        'keyword' => true,
        'update_url' => true,
        'create_date' => true,
        'update_date' => true,
        'meta_robots' => true,
        'device_type' => true,
        'page' => true
    ];
}
