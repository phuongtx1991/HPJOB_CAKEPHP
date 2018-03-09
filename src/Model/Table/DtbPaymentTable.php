<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DtbPayment Model
 *
 * @property \App\Model\Table\CreatorsTable|\Cake\ORM\Association\BelongsTo $Creators
 * @property \App\Model\Table\ModulesTable|\Cake\ORM\Association\BelongsTo $Modules
 *
 * @method \App\Model\Entity\DtbPayment get($primaryKey, $options = [])
 * @method \App\Model\Entity\DtbPayment newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DtbPayment[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DtbPayment|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DtbPayment patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DtbPayment[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DtbPayment findOrCreate($search, callable $callback = null, $options = [])
 */
class DtbPaymentTable extends Table
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

        $this->setTable('dtb_payment');
        $this->setDisplayField('payment_id');
        $this->setPrimaryKey('payment_id');

        $this->belongsTo('Creators', [
            'foreignKey' => 'creator_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Modules', [
            'foreignKey' => 'module_id'
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
            ->integer('payment_id')
            ->allowEmpty('payment_id', 'create');

        $validator
            ->scalar('payment_method')
            ->allowEmpty('payment_method');

        $validator
            ->decimal('charge')
            ->allowEmpty('charge');

        $validator
            ->decimal('rule_max')
            ->allowEmpty('rule_max');

        $validator
            ->integer('rank')
            ->allowEmpty('rank');

        $validator
            ->scalar('note')
            ->allowEmpty('note');

        $validator
            ->allowEmpty('fix');

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

        $validator
            ->scalar('payment_image')
            ->allowEmpty('payment_image');

        $validator
            ->decimal('upper_rule')
            ->allowEmpty('upper_rule');

        $validator
            ->allowEmpty('charge_flg');

        $validator
            ->decimal('rule_min')
            ->allowEmpty('rule_min');

        $validator
            ->decimal('upper_rule_max')
            ->allowEmpty('upper_rule_max');

        $validator
            ->scalar('module_path')
            ->allowEmpty('module_path');

        $validator
            ->scalar('memo01')
            ->allowEmpty('memo01');

        $validator
            ->scalar('memo02')
            ->allowEmpty('memo02');

        $validator
            ->scalar('memo03')
            ->allowEmpty('memo03');

        $validator
            ->scalar('memo04')
            ->allowEmpty('memo04');

        $validator
            ->scalar('memo05')
            ->allowEmpty('memo05');

        $validator
            ->scalar('memo06')
            ->allowEmpty('memo06');

        $validator
            ->scalar('memo07')
            ->allowEmpty('memo07');

        $validator
            ->scalar('memo08')
            ->allowEmpty('memo08');

        $validator
            ->scalar('memo09')
            ->allowEmpty('memo09');

        $validator
            ->scalar('memo10')
            ->allowEmpty('memo10');

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
        $rules->add($rules->existsIn(['module_id'], 'Modules'));

        return $rules;
    }
}
