<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DtbApiAccount Entity
 *
 * @property int $api_account_id
 * @property string $api_access_key
 * @property string $api_secret_key
 * @property int $enable
 * @property int $del_flg
 * @property \Cake\I18n\FrozenTime $create_date
 * @property \Cake\I18n\FrozenTime $update_date
 */
class DtbApiAccount extends Entity
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
        'api_access_key' => true,
        'api_secret_key' => true,
        'enable' => true,
        'del_flg' => true,
        'create_date' => true,
        'update_date' => true
    ];
}
