<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DtbCustomer Model
 *
 * @property \App\Model\Table\CountriesTable|\Cake\ORM\Association\BelongsTo $Countries
 *
 * @method \App\Model\Entity\DtbCustomer get($primaryKey, $options = [])
 * @method \App\Model\Entity\DtbCustomer newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DtbCustomer[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DtbCustomer|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DtbCustomer patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DtbCustomer[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DtbCustomer findOrCreate($search, callable $callback = null, $options = [])
 */
class DtbCustomerTable extends Table
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

        $this->setTable('dtb_customer');
        $this->setDisplayField('customer_id');
        $this->setPrimaryKey('customer_id');

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
            ->integer('customer_id')
            ->allowEmpty('customer_id', 'create');

        $validator
            ->scalar('name01')
            ->requirePresence('name01', 'create')
            ->notEmpty('name01');

        $validator
            ->scalar('name02')
            ->requirePresence('name02', 'create')
            ->notEmpty('name02');

        $validator
            ->scalar('kana01')
            ->allowEmpty('kana01');

        $validator
            ->scalar('kana02')
            ->allowEmpty('kana02');

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
            ->scalar('addr02')
            ->allowEmpty('addr02');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email');

        $validator
            ->requirePresence('phone', 'create')
            ->notEmpty('phone');

        $validator
            ->allowEmpty('sex');

        $validator
            ->date('birth_day')
            ->allowEmpty('birth_day');

        $validator
            ->scalar('password')
            ->allowEmpty('password');

        $validator
            ->allowEmpty('reminder');

        $validator
            ->scalar('reminder_answer')
            ->allowEmpty('reminder_answer');

        $validator
            ->scalar('salt')
            ->allowEmpty('salt');

        $validator
            ->scalar('secret_key')
            ->requirePresence('secret_key', 'create')
            ->notEmpty('secret_key')
            ->add('secret_key', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->requirePresence('status', 'create')
            ->notEmpty('status');

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

        $validator
            ->allowEmpty('receive_work_info');

        $validator
            ->scalar('image')
            ->allowEmpty('image');

        $validator
            ->scalar('cv')
            ->allowEmpty('cv');

        $validator
            ->scalar('cv_name')
            ->allowEmpty('cv_name');

        $validator
            ->date('cv_update')
            ->allowEmpty('cv_update');

        $validator
            ->allowEmpty('marital_status');

        $validator
            ->allowEmpty('current_address');

        $validator
            ->scalar('pref_by_text')
            ->allowEmpty('pref_by_text');

        $validator
            ->allowEmpty('education');

        $validator
            ->scalar('school_name')
            ->allowEmpty('school_name');

        $validator
            ->scalar('major')
            ->allowEmpty('major');

        $validator
            ->scalar('desired_work')
            ->allowEmpty('desired_work');

        $validator
            ->scalar('desired_position')
            ->allowEmpty('desired_position');

        $validator
            ->decimal('current_salary')
            ->allowEmpty('current_salary');

        $validator
            ->decimal('desired_salary')
            ->allowEmpty('desired_salary');

        $validator
            ->scalar('desired_region')
            ->allowEmpty('desired_region');

        $validator
            ->allowEmpty('work_experience');

        $validator
            ->allowEmpty('jp_level');

        $validator
            ->scalar('jp_other')
            ->allowEmpty('jp_other');

        $validator
            ->scalar('toeic')
            ->allowEmpty('toeic');

        $validator
            ->scalar('ielts')
            ->allowEmpty('ielts');

        $validator
            ->scalar('eng_other')
            ->allowEmpty('eng_other');

        $validator
            ->scalar('other_language')
            ->allowEmpty('other_language');

        $validator
            ->scalar('qualification')
            ->allowEmpty('qualification');

        $validator
            ->scalar('skill')
            ->allowEmpty('skill');

        $validator
            ->scalar('self_pr')
            ->allowEmpty('self_pr');

        return $validator;
    }

    public function getMaxId()
    {
        try {
            $result = $this->find()
                ->select(['customer_id'])
                ->order(['customer_id' => 'DESC'])
                ->hydrate(false)
                ->first();
            return $result;
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function isMatchEmail($email)
    {
        $email = str_replace(' ', '', $email);

        try {
            $result = $this->find()
                ->select(['email'])
                ->where(['email' => $email])
                ->hydrate(false)
                ->first();
            if (!empty($result)) {
                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {
            return false;
            throw $e;
        }
    }

    public function getPasswordInfo($email)
    {
        try {
            $result = $this->find()
                ->select(['password', 'salt', 'customer_id'])
                ->where(['email' => $email])
                ->hydrate(false)
                ->first();
            return $result;
        } catch (Exception $e) {
            return false;
            throw $e;
        }
    }

    public function getBasicInfoCustumer($customer_id)
    {
        try {
            $result = $this->find()
                ->select(['name01', 'name02', 'email', 'customer_id'])
                ->where(['customer_id' => $customer_id])
                ->hydrate(false)
                ->first();
            return $result;
        } catch (Exception $e) {
            return false;
            throw $e;
        }
    }

    public function getCustomerInfoById($customer_id)
    {
        try {
            $result = $this->find()
                ->where(['customer_id' => $customer_id])
                ->hydrate(false)
                ->first();
            return $result;
        } catch (Exception $e) {
            return false;
            throw $e;
        }
    }

    public function getCustomerCVById($customer_id)
    {
        try {
            $result = $this->find()
                ->select(['cv'])
                ->where(['customer_id' => $customer_id])
                ->hydrate(false)
                ->first();
            return $result;
        } catch (Exception $e) {
            return false;
            throw $e;
        }
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
        $rules->add($rules->isUnique(['secret_key']));
//        $rules->add($rules->existsIn(['country_id'], 'Countries'));

        return $rules;
    }
}
