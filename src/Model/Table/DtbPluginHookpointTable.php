<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DtbPluginHookpoint Model
 *
 * @property \App\Model\Table\PluginsTable|\Cake\ORM\Association\BelongsTo $Plugins
 *
 * @method \App\Model\Entity\DtbPluginHookpoint get($primaryKey, $options = [])
 * @method \App\Model\Entity\DtbPluginHookpoint newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DtbPluginHookpoint[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DtbPluginHookpoint|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DtbPluginHookpoint patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DtbPluginHookpoint[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DtbPluginHookpoint findOrCreate($search, callable $callback = null, $options = [])
 */
class DtbPluginHookpointTable extends Table
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

        $this->setTable('dtb_plugin_hookpoint');
        $this->setDisplayField('plugin_hookpoint_id');
        $this->setPrimaryKey('plugin_hookpoint_id');

        $this->belongsTo('Plugins', [
            'foreignKey' => 'plugin_id',
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
            ->integer('plugin_hookpoint_id')
            ->allowEmpty('plugin_hookpoint_id', 'create');

        $validator
            ->scalar('hook_point')
            ->requirePresence('hook_point', 'create')
            ->notEmpty('hook_point');

        $validator
            ->scalar('callback')
            ->allowEmpty('callback');

        $validator
            ->requirePresence('use_flg', 'create')
            ->notEmpty('use_flg');

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
        $rules->add($rules->existsIn(['plugin_id'], 'Plugins'));

        return $rules;
    }
}
