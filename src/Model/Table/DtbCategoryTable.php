<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DtbCategory Model
 *
 * @property \App\Model\Table\ParentCategoriesTable|\Cake\ORM\Association\BelongsTo $ParentCategories
 * @property \App\Model\Table\CreatorsTable|\Cake\ORM\Association\BelongsTo $Creators
 *
 * @method \App\Model\Entity\DtbCategory get($primaryKey, $options = [])
 * @method \App\Model\Entity\DtbCategory newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DtbCategory[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DtbCategory|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DtbCategory patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DtbCategory[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DtbCategory findOrCreate($search, callable $callback = null, $options = [])
 */
class DtbCategoryTable extends Table
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

        $this->setTable('dtb_category');
        $this->setDisplayField('category_id');
        $this->setPrimaryKey('category_id');

        $this->belongsTo('ParentCategories', [
            'foreignKey' => 'parent_category_id',
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
            ->integer('category_id')
            ->allowEmpty('category_id', 'create');

        $validator
            ->scalar('category_name')
            ->allowEmpty('category_name');

        $validator
            ->integer('level')
            ->requirePresence('level', 'create')
            ->notEmpty('level');

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
        $rules->add($rules->existsIn(['parent_category_id'], 'ParentCategories'));
        $rules->add($rules->existsIn(['creator_id'], 'Creators'));

        return $rules;
    }
}
