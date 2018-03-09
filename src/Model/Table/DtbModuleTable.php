<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DtbModule Model
 *
 * @method \App\Model\Entity\DtbModule get($primaryKey, $options = [])
 * @method \App\Model\Entity\DtbModule newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DtbModule[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DtbModule|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DtbModule patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DtbModule[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DtbModule findOrCreate($search, callable $callback = null, $options = [])
 */
class DtbModuleTable extends Table
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

        $this->setTable('dtb_module');
        $this->setDisplayField('module_id');
        $this->setPrimaryKey('module_id');
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
            ->integer('module_id')
            ->allowEmpty('module_id', 'create');

        $validator
            ->scalar('module_code')
            ->requirePresence('module_code', 'create')
            ->notEmpty('module_code');

        $validator
            ->scalar('module_name')
            ->requirePresence('module_name', 'create')
            ->notEmpty('module_name');

        $validator
            ->scalar('sub_data')
            ->allowEmpty('sub_data');

        $validator
            ->requirePresence('auto_update_flg', 'create')
            ->notEmpty('auto_update_flg');

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
