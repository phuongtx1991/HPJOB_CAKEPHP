<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DtbCustomerCareer Model
 *
 * @property \App\Model\Table\CustomersTable|\Cake\ORM\Association\BelongsTo $Customers
 *
 * @method \App\Model\Entity\DtbCustomerCareer get($primaryKey, $options = [])
 * @method \App\Model\Entity\DtbCustomerCareer newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DtbCustomerCareer[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DtbCustomerCareer|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DtbCustomerCareer patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DtbCustomerCareer[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DtbCustomerCareer findOrCreate($search, callable $callback = null, $options = [])
 */
class DtbCustomerCareerTable extends Table
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

        $this->setTable('dtb_customer_career');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Customers', [
            'foreignKey' => 'customer_id',
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->date('start_date')
            ->allowEmpty('start_date');

        $validator
            ->date('end_date')
            ->allowEmpty('end_date');

        $validator
            ->numeric('working_year')
            ->allowEmpty('working_year');

        $validator
            ->scalar('working_company_name')
            ->allowEmpty('working_company_name');

        $validator
            ->scalar('company_addr')
            ->allowEmpty('company_addr');

        $validator
            ->scalar('job_description')
            ->allowEmpty('job_description');

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
        $rules->add($rules->existsIn(['customer_id'], 'Customers'));

        return $rules;
    }
}
