<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DtbUpdate Model
 *
 * @method \App\Model\Entity\DtbUpdate get($primaryKey, $options = [])
 * @method \App\Model\Entity\DtbUpdate newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DtbUpdate[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DtbUpdate|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DtbUpdate patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DtbUpdate[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DtbUpdate findOrCreate($search, callable $callback = null, $options = [])
 */
class DtbUpdateTable extends Table
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

        $this->setTable('dtb_update');
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
            ->scalar('module_name')
            ->requirePresence('module_name', 'create')
            ->notEmpty('module_name');

        $validator
            ->scalar('now_version')
            ->allowEmpty('now_version');

        $validator
            ->scalar('latest_version')
            ->requirePresence('latest_version', 'create')
            ->notEmpty('latest_version');

        $validator
            ->scalar('module_explain')
            ->allowEmpty('module_explain');

        $validator
            ->scalar('main_php')
            ->requirePresence('main_php', 'create')
            ->notEmpty('main_php');

        $validator
            ->scalar('extern_php')
            ->requirePresence('extern_php', 'create')
            ->notEmpty('extern_php');

        $validator
            ->scalar('install_sql')
            ->allowEmpty('install_sql');

        $validator
            ->scalar('uninstall_sql')
            ->allowEmpty('uninstall_sql');

        $validator
            ->scalar('other_files')
            ->allowEmpty('other_files');

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

        $validator
            ->dateTime('release_date')
            ->requirePresence('release_date', 'create')
            ->notEmpty('release_date');

        return $validator;
    }
}
