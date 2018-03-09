<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MtbCountry Model
 *
 * @method \App\Model\Entity\MtbCountry get($primaryKey, $options = [])
 * @method \App\Model\Entity\MtbCountry newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MtbCountry[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MtbCountry|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MtbCountry patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MtbCountry[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MtbCountry findOrCreate($search, callable $callback = null, $options = [])
 */
class MtbCountryTable extends Table
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

        $this->setTable('mtb_country');
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('name')
            ->allowEmpty('name');

        $validator
            ->integer('rank')
            ->requirePresence('rank', 'create')
            ->notEmpty('rank');

        return $validator;
    }
}
