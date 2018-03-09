<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MtbCustomerStatus Model
 *
 * @method \App\Model\Entity\MtbCustomerStatus get($primaryKey, $options = [])
 * @method \App\Model\Entity\MtbCustomerStatus newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MtbCustomerStatus[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MtbCustomerStatus|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MtbCustomerStatus patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MtbCustomerStatus[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MtbCustomerStatus findOrCreate($search, callable $callback = null, $options = [])
 */
class MtbCustomerStatusTable extends Table
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

        $this->setTable('mtb_customer_status');
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
