<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DtbNews Entity
 *
 * @property int $news_id
 * @property \Cake\I18n\FrozenTime $news_date
 * @property int $rank
 * @property string $news_title
 * @property string $news_title_vn
 * @property string $news_comment
 * @property string $news_comment_vn
 * @property string $news_url
 * @property int $news_select
 * @property string $link_method
 * @property int $creator_id
 * @property \Cake\I18n\FrozenTime $create_date
 * @property \Cake\I18n\FrozenTime $update_date
 * @property int $del_flg
 *
 * @property \App\Model\Entity\Creator $creator
 */
class DtbNews extends Entity
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
        'news_date' => true,
        'rank' => true,
        'news_title' => true,
        'news_title_vn' => true,
        'news_comment' => true,
        'news_comment_vn' => true,
        'news_url' => true,
        'news_select' => true,
        'link_method' => true,
        'creator_id' => true,
        'create_date' => true,
        'update_date' => true,
        'del_flg' => true,
        'creator' => true
    ];
}
