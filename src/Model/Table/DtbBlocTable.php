<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DtbBloc Model
 *
 * @property \App\Model\Table\DeviceTypesTable|\Cake\ORM\Association\BelongsTo $DeviceTypes
 * @property \App\Model\Table\BlocsTable|\Cake\ORM\Association\BelongsTo $Blocs
 * @property \App\Model\Table\PluginsTable|\Cake\ORM\Association\BelongsTo $Plugins
 *
 * @method \App\Model\Entity\DtbBloc get($primaryKey, $options = [])
 * @method \App\Model\Entity\DtbBloc newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DtbBloc[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DtbBloc|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DtbBloc patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DtbBloc[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DtbBloc findOrCreate($search, callable $callback = null, $options = [])
 */
class DtbBlocTable extends Table
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

        $this->setTable('dtb_bloc');
        $this->setDisplayField('device_type_id');
        $this->setPrimaryKey(['device_type_id', 'bloc_id']);

        $this->belongsTo('DeviceTypes', [
            'foreignKey' => 'device_type_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Blocs', [
            'foreignKey' => 'bloc_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Plugins', [
            'foreignKey' => 'plugin_id'
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
            ->scalar('bloc_name')
            ->allowEmpty('bloc_name');

        $validator
            ->scalar('tpl_path')
            ->allowEmpty('tpl_path');

        $validator
            ->scalar('filename')
            ->requirePresence('filename', 'create')
            ->notEmpty('filename');

        $validator
            ->dateTime('create_date')
            ->requirePresence('create_date', 'create')
            ->notEmpty('create_date');

        $validator
            ->dateTime('update_date')
            ->requirePresence('update_date', 'create')
            ->notEmpty('update_date');

        $validator
            ->scalar('php_path')
            ->allowEmpty('php_path');

        $validator
            ->requirePresence('deletable_flg', 'create')
            ->notEmpty('deletable_flg');

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
        $rules->add($rules->existsIn(['device_type_id'], 'DeviceTypes'));
        $rules->add($rules->existsIn(['bloc_id'], 'Blocs'));
        $rules->add($rules->existsIn(['plugin_id'], 'Plugins'));

        return $rules;
    }
}
