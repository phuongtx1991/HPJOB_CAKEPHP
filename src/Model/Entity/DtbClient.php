<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DtbClient Entity
 *
 * @property int $client_id
 * @property string $name
 * @property string $kana
 * @property string $owner_name01
 * @property string $owner_name02
 * @property string $zip01
 * @property string $zip02
 * @property int $pref
 * @property string $addr01
 * @property string $tel
 * @property string $fax
 * @property \Cake\I18n\FrozenDate $contract_date
 * @property string $hr_charger_name01
 * @property string $hr_charger_name02
 * @property string $hr_charger_tel
 * @property string $hr_charger_email
 * @property string $employment_status
 * @property string $memo
 * @property string $establishment_date
 * @property string $establishment_date_vn
 * @property string $capital
 * @property string $capital_vn
 * @property string $scale
 * @property string $scale_vn
 * @property string $introduction
 * @property string $introduction_vn
 * @property int $del_flg
 * @property \Cake\I18n\FrozenTime $create_date
 * @property \Cake\I18n\FrozenTime $update_date
 */
class DtbClient extends Entity
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
        'kana' => true,
        'owner_name01' => true,
        'owner_name02' => true,
        'zip01' => true,
        'zip02' => true,
        'pref' => true,
        'addr01' => true,
        'tel' => true,
        'fax' => true,
        'contract_date' => true,
        'hr_charger_name01' => true,
        'hr_charger_name02' => true,
        'hr_charger_tel' => true,
        'hr_charger_email' => true,
        'employment_status' => true,
        'memo' => true,
        'establishment_date' => true,
        'establishment_date_vn' => true,
        'capital' => true,
        'capital_vn' => true,
        'scale' => true,
        'scale_vn' => true,
        'introduction' => true,
        'introduction_vn' => true,
        'del_flg' => true,
        'create_date' => true,
        'update_date' => true
    ];
}
