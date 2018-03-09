<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DtbOtherDeliv Model
 *
 * @property \App\Model\Table\CustomersTable|\Cake\ORM\Association\BelongsTo $Customers
 * @property \App\Model\Table\CountriesTable|\Cake\ORM\Association\BelongsTo $Countries
 *
 * @method \App\Model\Entity\DtbOtherDeliv get($primaryKey, $options = [])
 * @method \App\Model\Entity\DtbOtherDeliv newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DtbOtherDeliv[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DtbOtherDeliv|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DtbOtherDeliv patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DtbOtherDeliv[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DtbOtherDeliv findOrCreate($search, callable $callback = null, $options = [])
 */
class DtbOtherDelivTable extends Table
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

        $this->setTable('dtb_other_deliv');
        $this->setDisplayField('other_deliv_id');
        $this->setPrimaryKey('other_deliv_id');

        $this->belongsTo('Customers', [
            'foreignKey' => 'customer_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Countries', [
            'foreignKey' => 'country_id'
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
            ->integer('other_deliv_id')
            ->allowEmpty('other_deliv_id', 'create');

        $validator
            ->scalar('name01')
            ->allowEmpty('name01');

        $validator
            ->scalar('name02')
            ->allowEmpty('name02');

        $validator
            ->scalar('kana01')
            ->allowEmpty('kana01');

        $validator
            ->scalar('kana02')
            ->allowEmpty('kana02');

        $validator
            ->scalar('company_name')
            ->allowEmpty('company_name');

        $validator
            ->scalar('zip01')
            ->allowEmpty('zip01');

        $validator
            ->scalar('zip02')
            ->allowEmpty('zip02');

        $validator
            ->scalar('zipcode')
            ->allowEmpty('zipcode');

        $validator
            ->allowEmpty('pref');

        $validator
            ->scalar('addr01')
            ->allowEmpty('addr01');

        $validator
            ->scalar('addr02')
            ->allowEmpty('addr02');

        $validator
            ->scalar('tel01')
            ->allowEmpty('tel01');

        $validator
            ->scalar('tel02')
            ->allowEmpty('tel02');

        $validator
            ->scalar('tel03')
            ->allowEmpty('tel03');

        $validator
            ->scalar('fax01')
            ->allowEmpty('fax01');

        $validator
            ->scalar('fax02')
            ->allowEmpty('fax02');

        $validator
            ->scalar('fax03')
            ->allowEmpty('fax03');

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
        $rules->add($rules->existsIn(['country_id'], 'Countries'));

        return $rules;
    }
}
