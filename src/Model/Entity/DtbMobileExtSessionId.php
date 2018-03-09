<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DtbMobileExtSessionId Entity
 *
 * @property string $session_id
 * @property string $param_key
 * @property string $param_value
 * @property string $url
 * @property \Cake\I18n\FrozenTime $create_date
 */
class DtbMobileExtSessionId extends Entity
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
        'param_key' => true,
        'param_value' => true,
        'url' => true,
        'create_date' => true
    ];
}
