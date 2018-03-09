<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DtbClient Model
 *
 * @method \App\Model\Entity\DtbClient get($primaryKey, $options = [])
 * @method \App\Model\Entity\DtbClient newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DtbClient[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DtbClient|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DtbClient patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DtbClient[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DtbClient findOrCreate($search, callable $callback = null, $options = [])
 */
class DtbClientTable extends Table
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

        $this->setTable('dtb_client');
        $this->setDisplayField('name');
        $this->setPrimaryKey('client_id');
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
            ->integer('client_id')
            ->allowEmpty('client_id', 'create');

        $validator
            ->scalar('name')
            ->allowEmpty('name');

        $validator
            ->scalar('kana')
            ->allowEmpty('kana');

        $validator
            ->scalar('owner_name01')
            ->allowEmpty('owner_name01');

        $validator
            ->scalar('owner_name02')
            ->allowEmpty('owner_name02');

        $validator
            ->scalar('zip01')
            ->allowEmpty('zip01');

        $validator
            ->scalar('zip02')
            ->allowEmpty('zip02');

        $validator
            ->allowEmpty('pref');

        $validator
            ->scalar('addr01')
            ->allowEmpty('addr01');

        $validator
            ->scalar('tel')
            ->allowEmpty('tel');

        $validator
            ->scalar('fax')
            ->allowEmpty('fax');

        $validator
            ->date('contract_date')
            ->allowEmpty('contract_date');

        $validator
            ->scalar('hr_charger_name01')
            ->allowEmpty('hr_charger_name01');

        $validator
            ->scalar('hr_charger_name02')
            ->allowEmpty('hr_charger_name02');

        $validator
            ->scalar('hr_charger_tel')
            ->allowEmpty('hr_charger_tel');

        $validator
            ->scalar('hr_charger_email')
            ->allowEmpty('hr_charger_email');

        $validator
            ->scalar('employment_status')
            ->allowEmpty('employment_status');

        $validator
            ->scalar('memo')
            ->allowEmpty('memo');

        $validator
            ->scalar('establishment_date')
            ->allowEmpty('establishment_date');

        $validator
            ->scalar('establishment_date_vn')
            ->allowEmpty('establishment_date_vn');

        $validator
            ->scalar('capital')
            ->allowEmpty('capital');

        $validator
            ->scalar('capital_vn')
            ->allowEmpty('capital_vn');

        $validator
            ->scalar('scale')
            ->allowEmpty('scale');

        $validator
            ->scalar('scale_vn')
            ->allowEmpty('scale_vn');

        $validator
            ->scalar('introduction')
            ->allowEmpty('introduction');

        $validator
            ->scalar('introduction_vn')
            ->allowEmpty('introduction_vn');

        $validator
            ->allowEmpty('del_flg');

        $validator
            ->dateTime('create_date')
            ->allowEmpty('create_date');

        $validator
            ->dateTime('update_date')
            ->allowEmpty('update_date');

        return $validator;
    }
}
