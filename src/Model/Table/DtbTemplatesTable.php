<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DtbTemplates Model
 *
 * @property \App\Model\Table\DeviceTypesTable|\Cake\ORM\Association\BelongsTo $DeviceTypes
 *
 * @method \App\Model\Entity\DtbTemplate get($primaryKey, $options = [])
 * @method \App\Model\Entity\DtbTemplate newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DtbTemplate[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DtbTemplate|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DtbTemplate patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DtbTemplate[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DtbTemplate findOrCreate($search, callable $callback = null, $options = [])
 */
class DtbTemplatesTable extends Table
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

        $this->setTable('dtb_templates');
        $this->setDisplayField('template_code');
        $this->setPrimaryKey('template_code');

        $this->belongsTo('DeviceTypes', [
            'foreignKey' => 'device_type_id',
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
            ->scalar('template_code')
            ->allowEmpty('template_code', 'create');

        $validator
            ->scalar('template_name')
            ->allowEmpty('template_name');

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
        $rules->add($rules->existsIn(['device_type_id'], 'DeviceTypes'));

        return $rules;
    }
}
