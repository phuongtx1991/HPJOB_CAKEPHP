<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MtbCustomerOrderStatus Model
 *
 * @method \App\Model\Entity\MtbCustomerOrderStatus get($primaryKey, $options = [])
 * @method \App\Model\Entity\MtbCustomerOrderStatus newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MtbCustomerOrderStatus[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MtbCustomerOrderStatus|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MtbCustomerOrderStatus patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MtbCustomerOrderStatus[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MtbCustomerOrderStatus findOrCreate($search, callable $callback = null, $options = [])
 */
class MtbCustomerOrderStatusTable extends Table
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

        $this->setTable('mtb_customer_order_status');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');
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
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('name')
            ->allowEmpty('name');

        $validator
            ->requirePresence('rank', 'create')
            ->notEmpty('rank');

        return $validator;
    }
}
