<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DtbClasscategory Model
 *
 * @property \App\Model\Table\ClassesTable|\Cake\ORM\Association\BelongsTo $Classes
 * @property \App\Model\Table\CreatorsTable|\Cake\ORM\Association\BelongsTo $Creators
 *
 * @method \App\Model\Entity\DtbClasscategory get($primaryKey, $options = [])
 * @method \App\Model\Entity\DtbClasscategory newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DtbClasscategory[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DtbClasscategory|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DtbClasscategory patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DtbClasscategory[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DtbClasscategory findOrCreate($search, callable $callback = null, $options = [])
 */
class DtbClasscategoryTable extends Table
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

        $this->setTable('dtb_classcategory');
        $this->setDisplayField('name');
        $this->setPrimaryKey('classcategory_id');

        $this->belongsTo('Classes', [
            'foreignKey' => 'class_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Creators', [
            'foreignKey' => 'creator_id',
            'joinType' => 'INNER'
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
            ->integer('classcategory_id')
            ->allowEmpty('classcategory_id', 'create');

        $validator
            ->scalar('name')
            ->allowEmpty('name');

        $validator
            ->integer('rank')
            ->allowEmpty('rank');

        $validator
            ->dateTime('create_date')
            ->requirePresence('create_date', 'create')
            ->notEmpty('create_date');

        $validator
            ->dateTime('update_date')
            ->requirePresence('update_date', 'create')
            ->notEmpty('update_date');

        $validator
            ->requirePresence('del_flg', 'create')
            ->notEmpty('del_flg');

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
        $rules->add($rules->existsIn(['class_id'], 'Classes'));
        $rules->add($rules->existsIn(['creator_id'], 'Creators'));

        return $rules;
    }
}
