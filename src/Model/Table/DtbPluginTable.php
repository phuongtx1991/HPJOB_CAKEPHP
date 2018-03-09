<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DtbPlugin Model
 *
 * @method \App\Model\Entity\DtbPlugin get($primaryKey, $options = [])
 * @method \App\Model\Entity\DtbPlugin newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DtbPlugin[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DtbPlugin|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DtbPlugin patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DtbPlugin[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DtbPlugin findOrCreate($search, callable $callback = null, $options = [])
 */
class DtbPluginTable extends Table
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

        $this->setTable('dtb_plugin');
        $this->setDisplayField('plugin_id');
        $this->setPrimaryKey('plugin_id');
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
            ->integer('plugin_id')
            ->allowEmpty('plugin_id', 'create');

        $validator
            ->scalar('plugin_name')
            ->requirePresence('plugin_name', 'create')
            ->notEmpty('plugin_name');

        $validator
            ->scalar('plugin_code')
            ->requirePresence('plugin_code', 'create')
            ->notEmpty('plugin_code');

        $validator
            ->scalar('class_name')
            ->requirePresence('class_name', 'create')
            ->notEmpty('class_name');

        $validator
            ->scalar('author')
            ->allowEmpty('author');

        $validator
            ->scalar('author_site_url')
            ->allowEmpty('author_site_url');

        $validator
            ->scalar('plugin_site_url')
            ->allowEmpty('plugin_site_url');

        $validator
            ->scalar('plugin_version')
            ->allowEmpty('plugin_version');

        $validator
            ->scalar('compliant_version')
            ->allowEmpty('compliant_version');

        $validator
            ->scalar('plugin_description')
            ->allowEmpty('plugin_description');

        $validator
            ->integer('priority')
            ->requirePresence('priority', 'create')
            ->notEmpty('priority');

        $validator
            ->requirePresence('enable', 'create')
            ->notEmpty('enable');

        $validator
            ->scalar('free_field1')
            ->allowEmpty('free_field1');

        $validator
            ->scalar('free_field2')
            ->allowEmpty('free_field2');

        $validator
            ->scalar('free_field3')
            ->allowEmpty('free_field3');

        $validator
            ->scalar('free_field4')
            ->allowEmpty('free_field4');

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
