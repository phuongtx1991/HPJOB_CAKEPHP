<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DtbSession Model
 *
 * @method \App\Model\Entity\DtbSession get($primaryKey, $options = [])
 * @method \App\Model\Entity\DtbSession newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DtbSession[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DtbSession|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DtbSession patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DtbSession[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DtbSession findOrCreate($search, callable $callback = null, $options = [])
 */
class DtbSessionTable extends Table
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

        $this->setTable('dtb_session');
        $this->setDisplayField('sess_id');
        $this->setPrimaryKey('sess_id');
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
            ->scalar('sess_id')
            ->allowEmpty('sess_id', 'create');

        $validator
            ->scalar('sess_data')
            ->allowEmpty('sess_data');

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
