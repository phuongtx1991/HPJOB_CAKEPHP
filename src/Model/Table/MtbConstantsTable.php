<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MtbConstants Model
 *
 * @method \App\Model\Entity\MtbConstant get($primaryKey, $options = [])
 * @method \App\Model\Entity\MtbConstant newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MtbConstant[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MtbConstant|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MtbConstant patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MtbConstant[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MtbConstant findOrCreate($search, callable $callback = null, $options = [])
 */
class MtbConstantsTable extends Table
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

        $this->setTable('mtb_constants');
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
            ->scalar('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('name')
            ->allowEmpty('name');

        $validator
            ->requirePresence('rank', 'create')
            ->notEmpty('rank');

        $validator
            ->scalar('remarks')
            ->allowEmpty('remarks');

        return $validator;
    }
}
