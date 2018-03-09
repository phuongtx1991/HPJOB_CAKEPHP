<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DtbKiyaku Model
 *
 * @property \App\Model\Table\CreatorsTable|\Cake\ORM\Association\BelongsTo $Creators
 *
 * @method \App\Model\Entity\DtbKiyaku get($primaryKey, $options = [])
 * @method \App\Model\Entity\DtbKiyaku newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DtbKiyaku[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DtbKiyaku|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DtbKiyaku patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DtbKiyaku[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DtbKiyaku findOrCreate($search, callable $callback = null, $options = [])
 */
class DtbKiyakuTable extends Table
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

        $this->setTable('dtb_kiyaku');
        $this->setDisplayField('kiyaku_id');
        $this->setPrimaryKey('kiyaku_id');

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
            ->integer('kiyaku_id')
            ->allowEmpty('kiyaku_id', 'create');

        $validator
            ->scalar('kiyaku_title')
            ->requirePresence('kiyaku_title', 'create')
            ->notEmpty('kiyaku_title');

        $validator
            ->scalar('kiyaku_title_vn')
            ->allowEmpty('kiyaku_title_vn');

        $validator
            ->scalar('kiyaku_text')
            ->requirePresence('kiyaku_text', 'create')
            ->notEmpty('kiyaku_text');

        $validator
            ->scalar('kiyaku_text_vn')
            ->allowEmpty('kiyaku_text_vn');

        $validator
            ->integer('rank')
            ->requirePresence('rank', 'create')
            ->notEmpty('rank');

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
