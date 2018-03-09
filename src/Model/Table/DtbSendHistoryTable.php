<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DtbSendHistory Model
 *
 * @property \App\Model\Table\CreatorsTable|\Cake\ORM\Association\BelongsTo $Creators
 *
 * @method \App\Model\Entity\DtbSendHistory get($primaryKey, $options = [])
 * @method \App\Model\Entity\DtbSendHistory newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DtbSendHistory[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DtbSendHistory|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DtbSendHistory patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DtbSendHistory[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DtbSendHistory findOrCreate($search, callable $callback = null, $options = [])
 */
class DtbSendHistoryTable extends Table
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

        $this->setTable('dtb_send_history');
        $this->setDisplayField('send_id');
        $this->setPrimaryKey('send_id');

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
            ->integer('send_id')
            ->allowEmpty('send_id', 'create');

        $validator
            ->allowEmpty('mail_method');

        $validator
            ->scalar('subject')
            ->allowEmpty('subject');

        $validator
            ->scalar('body')
            ->allowEmpty('body');

        $validator
            ->integer('send_count')
            ->allowEmpty('send_count');

        $validator
            ->integer('complete_count')
            ->requirePresence('complete_count', 'create')
            ->notEmpty('complete_count');

        $validator
            ->dateTime('start_date')
            ->allowEmpty('start_date');

        $validator
            ->dateTime('end_date')
            ->allowEmpty('end_date');

        $validator
            ->scalar('search_data')
            ->allowEmpty('search_data');

        $validator
            ->requirePresence('del_flg', 'create')
            ->notEmpty('del_flg');

        $validator
            ->dateTime('create_date')
            ->requirePresence('create_date', 'create')
            ->notEmpty('create_date');

        $validator
            ->dateTime('update_date')
            ->requirePresence('update_date', 'create')
            ->notEmpty('update_date');

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
