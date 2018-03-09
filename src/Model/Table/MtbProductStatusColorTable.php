<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MtbProductStatusColor Model
 *
 * @method \App\Model\Entity\MtbProductStatusColor get($primaryKey, $options = [])
 * @method \App\Model\Entity\MtbProductStatusColor newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MtbProductStatusColor[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MtbProductStatusColor|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MtbProductStatusColor patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MtbProductStatusColor[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MtbProductStatusColor findOrCreate($search, callable $callback = null, $options = [])
 */
class MtbProductStatusColorTable extends Table
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

        $this->setTable('mtb_product_status_color');
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
