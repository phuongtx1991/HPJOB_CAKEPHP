<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MtbJob Model
 *
 * @method \App\Model\Entity\MtbJob get($primaryKey, $options = [])
 * @method \App\Model\Entity\MtbJob newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MtbJob[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MtbJob|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MtbJob patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MtbJob[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MtbJob findOrCreate($search, callable $callback = null, $options = [])
 */
class MtbJobTable extends Table
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

        $this->setTable('mtb_job');
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
