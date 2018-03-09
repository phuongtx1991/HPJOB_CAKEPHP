<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DtbShipping Model
 *
 * @property \App\Model\Table\ShippingsTable|\Cake\ORM\Association\BelongsTo $Shippings
 * @property \App\Model\Table\OrdersTable|\Cake\ORM\Association\BelongsTo $Orders
 * @property \App\Model\Table\ShippingCountriesTable|\Cake\ORM\Association\BelongsTo $ShippingCountries
 * @property \App\Model\Table\TimesTable|\Cake\ORM\Association\BelongsTo $Times
 *
 * @method \App\Model\Entity\DtbShipping get($primaryKey, $options = [])
 * @method \App\Model\Entity\DtbShipping newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DtbShipping[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DtbShipping|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DtbShipping patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DtbShipping[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DtbShipping findOrCreate($search, callable $callback = null, $options = [])
 */
class DtbShippingTable extends Table
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

        $this->setTable('dtb_shipping');
        $this->setDisplayField('shipping_id');
        $this->setPrimaryKey(['shipping_id', 'order_id']);

        $this->belongsTo('Shippings', [
            'foreignKey' => 'shipping_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Orders', [
            'foreignKey' => 'order_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('ShippingCountries', [
            'foreignKey' => 'shipping_country_id'
        ]);
        $this->belongsTo('Times', [
            'foreignKey' => 'time_id'
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
            ->scalar('shipping_name01')
            ->allowEmpty('shipping_name01');

        $validator
            ->scalar('shipping_name02')
            ->allowEmpty('shipping_name02');

        $validator
            ->scalar('shipping_kana01')
            ->allowEmpty('shipping_kana01');

        $validator
            ->scalar('shipping_kana02')
            ->allowEmpty('shipping_kana02');

        $validator
            ->scalar('shipping_company_name')
            ->allowEmpty('shipping_company_name');

        $validator
            ->scalar('shipping_tel01')
            ->allowEmpty('shipping_tel01');

        $validator
            ->scalar('shipping_tel02')
            ->allowEmpty('shipping_tel02');

        $validator
            ->scalar('shipping_tel03')
            ->allowEmpty('shipping_tel03');

        $validator
            ->scalar('shipping_fax01')
            ->allowEmpty('shipping_fax01');

        $validator
            ->scalar('shipping_fax02')
            ->allowEmpty('shipping_fax02');

        $validator
            ->scalar('shipping_fax03')
            ->allowEmpty('shipping_fax03');

        $validator
            ->allowEmpty('shipping_pref');

        $validator
            ->scalar('shipping_zip01')
            ->allowEmpty('shipping_zip01');

        $validator
            ->scalar('shipping_zip02')
            ->allowEmpty('shipping_zip02');

        $validator
            ->scalar('shipping_zipcode')
            ->allowEmpty('shipping_zipcode');

        $validator
            ->scalar('shipping_addr01')
            ->allowEmpty('shipping_addr01');

        $validator
            ->scalar('shipping_addr02')
            ->allowEmpty('shipping_addr02');

        $validator
            ->scalar('shipping_time')
            ->allowEmpty('shipping_time');

        $validator
            ->dateTime('shipping_date')
            ->allowEmpty('shipping_date');

        $validator
            ->dateTime('shipping_commit_date')
            ->allowEmpty('shipping_commit_date');

        $validator
            ->integer('rank')
            ->allowEmpty('rank');

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
        $rules->add($rules->existsIn(['shipping_id'], 'Shippings'));
        $rules->add($rules->existsIn(['order_id'], 'Orders'));
        $rules->add($rules->existsIn(['shipping_country_id'], 'ShippingCountries'));
        $rules->add($rules->existsIn(['time_id'], 'Times'));

        return $rules;
    }
}
