<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DtbModuleUpdateLogs Model
 *
 * @property \App\Model\Table\ModulesTable|\Cake\ORM\Association\BelongsTo $Modules
 *
 * @method \App\Model\Entity\DtbModuleUpdateLog get($primaryKey, $options = [])
 * @method \App\Model\Entity\DtbModuleUpdateLog newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DtbModuleUpdateLog[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DtbModuleUpdateLog|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DtbModuleUpdateLog patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DtbModuleUpdateLog[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DtbModuleUpdateLog findOrCreate($search, callable $callback = null, $options = [])
 */
class DtbModuleUpdateLogsTable extends Table
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

        $this->setTable('dtb_module_update_logs');
        $this->setDisplayField('log_id');
        $this->setPrimaryKey('log_id');

        $this->belongsTo('Modules', [
            'foreignKey' => 'module_id',
            'joinType' => 'INNER'
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
            ->integer('log_id')
            ->allowEmpty('log_id', 'create');

        $validator
            ->scalar('buckup_path')
            ->allowEmpty('buckup_path');

        $validator
            ->allowEmpty('error_flg');

        $validator
            ->scalar('error')
            ->allowEmpty('error');

        $validator
            ->scalar('ok')
            ->allowEmpty('ok');

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

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['module_id'], 'Modules'));

        return $rules;
    }
}
