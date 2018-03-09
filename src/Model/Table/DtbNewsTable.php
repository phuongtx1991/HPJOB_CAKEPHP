<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DtbNews Model
 *
 * @property \App\Model\Table\CreatorsTable|\Cake\ORM\Association\BelongsTo $Creators
 *
 * @method \App\Model\Entity\DtbNews get($primaryKey, $options = [])
 * @method \App\Model\Entity\DtbNews newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DtbNews[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DtbNews|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DtbNews patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DtbNews[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DtbNews findOrCreate($search, callable $callback = null, $options = [])
 */
class DtbNewsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('dtb_news');
        $this->setDisplayField('news_id');
        $this->setPrimaryKey('news_id');

        $this->belongsTo('Creators', [
            'foreignKey' => 'creator_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('news_id')
            ->allowEmpty('news_id', 'create');

        $validator
            ->dateTime('news_date')
            ->allowEmpty('news_date');

        $validator
            ->integer('rank')
            ->allowEmpty('rank');

        $validator
            ->scalar('news_title')
            ->requirePresence('news_title', 'create')
            ->notEmpty('news_title');

        $validator
            ->scalar('news_title_vn')
            ->allowEmpty('news_title_vn');

        $validator
            ->scalar('news_comment')
            ->allowEmpty('news_comment');

        $validator
            ->scalar('news_comment_vn')
            ->allowEmpty('news_comment_vn');

        $validator
            ->scalar('news_url')
            ->allowEmpty('news_url');

        $validator
            ->requirePresence('news_select', 'create')
            ->notEmpty('news_select');

        $validator
            ->scalar('link_method')
            ->allowEmpty('link_method');

        $validator
            ->dateTime('create_date')
            ->requirePresence('create_date', 'create')
            ->notEmpty('create_date');

        $validator
            ->dateTime('update_date')
            ->requirePresence('update_date', 'create')
            ->notEmpty('update_date');

        $validator
            ->requirePresence('del_flg', 'create')
            ->notEmpty('del_flg');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['creator_id'], 'Creators'));

        return $rules;
    }
}
