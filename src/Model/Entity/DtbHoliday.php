<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DtbHoliday Entity
 *
 * @property int $holiday_id
 * @property string $title
 * @property int $month
 * @property int $day
 * @property int $rank
 * @property int $creator_id
 * @property \Cake\I18n\FrozenTime $create_date
 * @property \Cake\I18n\FrozenTime $update_date
 * @property int $del_flg
 *
 * @property \App\Model\Entity\Creator $creator
 */
class DtbHoliday extends Entity
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
        'title' => true,
        'month' => true,
        'day' => true,
        'rank' => true,
        'creator_id' => true,
        'create_date' => true,
        'update_date' => true,
        'del_flg' => true,
        'creator' => true
    ];
}
