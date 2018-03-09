<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DtbMobileExtSessionId Model
 *
 * @method \App\Model\Entity\DtbMobileExtSessionId get($primaryKey, $options = [])
 * @method \App\Model\Entity\DtbMobileExtSessionId newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DtbMobileExtSessionId[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DtbMobileExtSessionId|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DtbMobileExtSessionId patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DtbMobileExtSessionId[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DtbMobileExtSessionId findOrCreate($search, callable $callback = null, $options = [])
 */
class DtbMobileExtSessionIdTable extends Table
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

        $this->setTable('dtb_mobile_ext_session_id');
        $this->setDisplayField('session_id');
        $this->setPrimaryKey('session_id');
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
            ->scalar('session_id')
            ->allowEmpty('session_id', 'create');

        $validator
            ->scalar('param_key')
            ->allowEmpty('param_key');

        $validator
            ->scalar('param_value')
            ->allowEmpty('param_value');

        $validator
            ->scalar('url')
            ->allowEmpty('url');

        $validator
            ->dateTime('create_date')
            ->requirePresence('create_date', 'create')
            ->notEmpty('create_date');

        return $validator;
    }
}
