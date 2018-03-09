<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DtbKiyaku Entity
 *
 * @property int $kiyaku_id
 * @property string $kiyaku_title
 * @property string $kiyaku_title_vn
 * @property string $kiyaku_text
 * @property string $kiyaku_text_vn
 * @property int $rank
 * @property int $creator_id
 * @property \Cake\I18n\FrozenTime $create_date
 * @property \Cake\I18n\FrozenTime $update_date
 * @property int $del_flg
 *
 * @property \App\Model\Entity\Creator $creator
 */
class DtbKiyaku extends Entity
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
        'kiyaku_title' => true,
        'kiyaku_title_vn' => true,
        'kiyaku_text' => true,
        'kiyaku_text_vn' => true,
        'rank' => true,
        'creator_id' => true,
        'create_date' => true,
        'update_date' => true,
        'del_flg' => true,
        'creator' => true
    ];
}
