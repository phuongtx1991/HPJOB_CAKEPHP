<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DtbApiAccount Model
 *
 * @method \App\Model\Entity\DtbApiAccount get($primaryKey, $options = [])
 * @method \App\Model\Entity\DtbApiAccount newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DtbApiAccount[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DtbApiAccount|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DtbApiAccount patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DtbApiAccount[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DtbApiAccount findOrCreate($search, callable $callback = null, $options = [])
 */
class DtbApiAccountTable extends Table
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

        $this->setTable('dtb_api_account');
        $this->setDisplayField('api_account_id');
        $this->setPrimaryKey('api_account_id');
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
            ->integer('api_account_id')
            ->allowEmpty('api_account_id', 'create');

        $validator
            ->scalar('api_access_key')
            ->requirePresence('api_access_key', 'create')
            ->notEmpty('api_access_key');

        $validator
            ->scalar('api_secret_key')
            ->requirePresence('api_secret_key', 'create')
            ->notEmpty('api_secret_key');

        $validator
            ->requirePresence('enable', 'create')
            ->notEmpty('enable');

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

        return $validator;
    }
}
