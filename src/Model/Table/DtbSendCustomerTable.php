<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DtbSendCustomer Model
 *
 * @property \App\Model\Table\CustomersTable|\Cake\ORM\Association\BelongsTo $Customers
 * @property \App\Model\Table\SendsTable|\Cake\ORM\Association\BelongsTo $Sends
 *
 * @method \App\Model\Entity\DtbSendCustomer get($primaryKey, $options = [])
 * @method \App\Model\Entity\DtbSendCustomer newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DtbSendCustomer[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DtbSendCustomer|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DtbSendCustomer patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DtbSendCustomer[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DtbSendCustomer findOrCreate($search, callable $callback = null, $options = [])
 */
class DtbSendCustomerTable extends Table
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

        $this->setTable('dtb_send_customer');
        $this->setDisplayField('name');
        $this->setPrimaryKey(['send_id', 'customer_id']);

        $this->belongsTo('Customers', [
            'foreignKey' => 'customer_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Sends', [
            'foreignKey' => 'send_id',
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
            ->email('email')
            ->allowEmpty('email');

        $validator
            ->scalar('name')
            ->allowEmpty('name');

        $validator
            ->allowEmpty('send_flag');

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
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->existsIn(['customer_id'], 'Customers'));
        $rules->add($rules->existsIn(['send_id'], 'Sends'));

        return $rules;
    }
}
