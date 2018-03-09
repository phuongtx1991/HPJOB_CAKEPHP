<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DtbDeliv Model
 *
 * @property \App\Model\Table\ProductTypesTable|\Cake\ORM\Association\BelongsTo $ProductTypes
 * @property \App\Model\Table\CreatorsTable|\Cake\ORM\Association\BelongsTo $Creators
 *
 * @method \App\Model\Entity\DtbDeliv get($primaryKey, $options = [])
 * @method \App\Model\Entity\DtbDeliv newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DtbDeliv[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DtbDeliv|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DtbDeliv patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DtbDeliv[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DtbDeliv findOrCreate($search, callable $callback = null, $options = [])
 */
class DtbDelivTable extends Table
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

        $this->setTable('dtb_deliv');
        $this->setDisplayField('name');
        $this->setPrimaryKey('deliv_id');

        $this->belongsTo('ProductTypes', [
            'foreignKey' => 'product_type_id'
        ]);
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
            ->integer('deliv_id')
            ->allowEmpty('deliv_id', 'create');

        $validator
            ->scalar('name')
            ->allowEmpty('name');

        $validator
            ->scalar('service_name')
            ->allowEmpty('service_name');

        $validator
            ->scalar('remark')
            ->allowEmpty('remark');

        $validator
            ->scalar('confirm_url')
            ->allowEmpty('confirm_url');

        $validator
            ->integer('rank')
            ->allowEmpty('rank');

        $validator
            ->requirePresence('status', 'create')
            ->notEmpty('status');

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
        $rules->add($rules->existsIn(['product_type_id'], 'ProductTypes'));
        $rules->add($rules->existsIn(['creator_id'], 'Creators'));

        return $rules;
    }
}
