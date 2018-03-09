<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DtbBkup Entity
 *
 * @property string $bkup_name
 * @property string $bkup_memo
 * @property \Cake\I18n\FrozenTime $create_date
 */
class DtbBkup extends Entity
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
        'bkup_memo' => true,
        'create_date' => true
    ];
}
