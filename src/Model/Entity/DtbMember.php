<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DtbMember Entity
 *
 * @property int $member_id
 * @property string $name
 * @property string $department
 * @property string $login_id
 * @property string $password
 * @property string $salt
 * @property int $authority
 * @property int $rank
 * @property int $work
 * @property string $tel
 * @property string $email
 * @property int $workplace
 * @property string $career
 * @property string $message
 * @property string $image
 * @property int $del_flg
 * @property int $creator_id
 * @property \Cake\I18n\FrozenTime $create_date
 * @property \Cake\I18n\FrozenTime $update_date
 * @property \Cake\I18n\FrozenTime $login_date
 *
 * @property \App\Model\Entity\Login $login
 * @property \App\Model\Entity\Creator $creator
 */
class DtbMember extends Entity
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
        'name' => true,
        'department' => true,
        'login_id' => true,
        'password' => true,
        'salt' => true,
        'authority' => true,
        'rank' => true,
        'work' => true,
        'tel' => true,
        'email' => true,
        'workplace' => true,
        'career' => true,
        'message' => true,
        'image' => true,
        'del_flg' => true,
        'creator_id' => true,
        'create_date' => true,
        'update_date' => true,
        'login_date' => true,
        'login' => true,
        'creator' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
}
