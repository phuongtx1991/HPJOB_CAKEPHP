<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MtbTarget Model
 *
 * @method \App\Model\Entity\MtbTarget get($primaryKey, $options = [])
 * @method \App\Model\Entity\MtbTarget newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MtbTarget[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MtbTarget|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MtbTarget patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MtbTarget[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MtbTarget findOrCreate($search, callable $callback = null, $options = [])
 */
class MtbTargetTable extends Table
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

        $this->setTable('mtb_target');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');
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
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('name')
            ->allowEmpty('name');

        $validator
            ->requirePresence('rank', 'create')
            ->notEmpty('rank');

        return $validator;
    }
}
