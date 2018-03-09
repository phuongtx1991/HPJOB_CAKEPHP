<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MtbSalaryType Model
 *
 * @method \App\Model\Entity\MtbSalaryType get($primaryKey, $options = [])
 * @method \App\Model\Entity\MtbSalaryType newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MtbSalaryType[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MtbSalaryType|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MtbSalaryType patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MtbSalaryType[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MtbSalaryType findOrCreate($search, callable $callback = null, $options = [])
 */
class MtbSalaryTypeTable extends Table
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

        $this->setTable('mtb_salary_type');
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
            ->scalar('name_vn')
            ->allowEmpty('name_vn');

        $validator
            ->requirePresence('rank', 'create')
            ->notEmpty('rank');

        return $validator;
    }
}
