<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MtbSalaryRange Model
 *
 * @property \App\Model\Table\CurrenciesTable|\Cake\ORM\Association\BelongsTo $Currencies
 *
 * @method \App\Model\Entity\MtbSalaryRange get($primaryKey, $options = [])
 * @method \App\Model\Entity\MtbSalaryRange newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MtbSalaryRange[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MtbSalaryRange|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MtbSalaryRange patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MtbSalaryRange[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MtbSalaryRange findOrCreate($search, callable $callback = null, $options = [])
 */
class MtbSalaryRangeTable extends Table
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

        $this->setTable('mtb_salary_range');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('Currencies', [
            'foreignKey' => 'currency_id'
        ]);
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

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['currency_id'], 'Currencies'));

        return $rules;
    }
}
