<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MtbJlpt Model
 *
 * @method \App\Model\Entity\MtbJlpt get($primaryKey, $options = [])
 * @method \App\Model\Entity\MtbJlpt newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MtbJlpt[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MtbJlpt|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MtbJlpt patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MtbJlpt[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MtbJlpt findOrCreate($search, callable $callback = null, $options = [])
 */
class MtbJlptTable extends Table
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

        $this->setTable('mtb_jlpt');
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
