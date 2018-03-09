<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DtbPluginHookpointPluginHookpointIdSeq Model
 *
 * @method \App\Model\Entity\DtbPluginHookpointPluginHookpointIdSeq get($primaryKey, $options = [])
 * @method \App\Model\Entity\DtbPluginHookpointPluginHookpointIdSeq newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DtbPluginHookpointPluginHookpointIdSeq[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DtbPluginHookpointPluginHookpointIdSeq|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DtbPluginHookpointPluginHookpointIdSeq patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DtbPluginHookpointPluginHookpointIdSeq[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DtbPluginHookpointPluginHookpointIdSeq findOrCreate($search, callable $callback = null, $options = [])
 */
class DtbPluginHookpointPluginHookpointIdSeqTable extends Table
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

        $this->setTable('dtb_plugin_hookpoint_plugin_hookpoint_id_seq');
        $this->setDisplayField('sequence');
        $this->setPrimaryKey('sequence');
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
            ->integer('sequence')
            ->allowEmpty('sequence', 'create');

        return $validator;
    }
}
