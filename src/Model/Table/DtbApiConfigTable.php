<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DtbApiConfig Model
 *
 * @method \App\Model\Entity\DtbApiConfig get($primaryKey, $options = [])
 * @method \App\Model\Entity\DtbApiConfig newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DtbApiConfig[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DtbApiConfig|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DtbApiConfig patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DtbApiConfig[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DtbApiConfig findOrCreate($search, callable $callback = null, $options = [])
 */
class DtbApiConfigTable extends Table
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

        $this->setTable('dtb_api_config');
        $this->setDisplayField('api_config_id');
        $this->setPrimaryKey('api_config_id');
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
            ->integer('api_config_id')
            ->allowEmpty('api_config_id', 'create');

        $validator
            ->scalar('operation_name')
            ->requirePresence('operation_name', 'create')
            ->notEmpty('operation_name');

        $validator
            ->scalar('operation_description')
            ->allowEmpty('operation_description');

        $validator
            ->scalar('auth_types')
            ->requirePresence('auth_types', 'create')
            ->notEmpty('auth_types');

        $validator
            ->requirePresence('enable', 'create')
            ->notEmpty('enable');

        $validator
            ->requirePresence('is_log', 'create')
            ->notEmpty('is_log');

        $validator
            ->scalar('sub_data')
            ->allowEmpty('sub_data');

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
