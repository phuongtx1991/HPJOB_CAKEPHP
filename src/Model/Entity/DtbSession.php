<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DtbSession Entity
 *
 * @property string $sess_id
 * @property string $sess_data
 * @property \Cake\I18n\FrozenTime $create_date
 * @property \Cake\I18n\FrozenTime $update_date
 */
class DtbSession extends Entity
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
        'sess_data' => true,
        'create_date' => true,
        'update_date' => true
    ];
}
