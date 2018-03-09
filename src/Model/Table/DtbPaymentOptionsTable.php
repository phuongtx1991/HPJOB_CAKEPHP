<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DtbPaymentOptions Model
 *
 * @property \App\Model\Table\DelivsTable|\Cake\ORM\Association\BelongsTo $Delivs
 * @property \App\Model\Table\PaymentsTable|\Cake\ORM\Association\BelongsTo $Payments
 *
 * @method \App\Model\Entity\DtbPaymentOption get($primaryKey, $options = [])
 * @method \App\Model\Entity\DtbPaymentOption newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DtbPaymentOption[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DtbPaymentOption|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DtbPaymentOption patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DtbPaymentOption[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DtbPaymentOption findOrCreate($search, callable $callback = null, $options = [])
 */
class DtbPaymentOptionsTable extends Table
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

        $this->setTable('dtb_payment_options');
        $this->setDisplayField('deliv_id');
        $this->setPrimaryKey(['deliv_id', 'payment_id']);

        $this->belongsTo('Delivs', [
            'foreignKey' => 'deliv_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Payments', [
            'foreignKey' => 'payment_id',
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
            ->integer('rank')
            ->allowEmpty('rank');

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
        $rules->add($rules->existsIn(['deliv_id'], 'Delivs'));
        $rules->add($rules->existsIn(['payment_id'], 'Payments'));

        return $rules;
    }
}
