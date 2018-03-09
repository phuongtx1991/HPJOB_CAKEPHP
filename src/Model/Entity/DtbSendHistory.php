<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DtbSendHistory Entity
 *
 * @property int $send_id
 * @property int $mail_method
 * @property string $subject
 * @property string $body
 * @property int $send_count
 * @property int $complete_count
 * @property \Cake\I18n\FrozenTime $start_date
 * @property \Cake\I18n\FrozenTime $end_date
 * @property string $search_data
 * @property int $del_flg
 * @property int $creator_id
 * @property \Cake\I18n\FrozenTime $create_date
 * @property \Cake\I18n\FrozenTime $update_date
 *
 * @property \App\Model\Entity\Creator $creator
 */
class DtbSendHistory extends Entity
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
        'mail_method' => true,
        'subject' => true,
        'body' => true,
        'send_count' => true,
        'complete_count' => true,
        'start_date' => true,
        'end_date' => true,
        'search_data' => true,
        'del_flg' => true,
        'creator_id' => true,
        'create_date' => true,
        'update_date' => true,
        'creator' => true
    ];
}
