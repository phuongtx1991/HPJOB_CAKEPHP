<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MtbAllowedTag Model
 *
 * @method \App\Model\Entity\MtbAllowedTag get($primaryKey, $options = [])
 * @method \App\Model\Entity\MtbAllowedTag newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MtbAllowedTag[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MtbAllowedTag|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MtbAllowedTag patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MtbAllowedTag[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MtbAllowedTag findOrCreate($search, callable $callback = null, $options = [])
 */
class MtbAllowedTagTable extends Table
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

        $this->setTable('mtb_allowed_tag');
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
