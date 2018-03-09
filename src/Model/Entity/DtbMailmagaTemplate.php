<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DtbMailmagaTemplate Entity
 *
 * @property int $template_id
 * @property string $subject
 * @property int $mail_method
 * @property string $body
 * @property int $del_flg
 * @property int $creator_id
 * @property \Cake\I18n\FrozenTime $create_date
 * @property \Cake\I18n\FrozenTime $update_date
 *
 * @property \App\Model\Entity\Creator $creator
 */
class DtbMailmagaTemplate extends Entity
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
        'subject' => true,
        'mail_method' => true,
        'body' => true,
        'del_flg' => true,
        'creator_id' => true,
        'create_date' => true,
        'update_date' => true,
        'creator' => true
    ];
}
