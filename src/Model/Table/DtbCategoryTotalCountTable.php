<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DtbCategoryTotalCount Model
 *
 * @method \App\Model\Entity\DtbCategoryTotalCount get($primaryKey, $options = [])
 * @method \App\Model\Entity\DtbCategoryTotalCount newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DtbCategoryTotalCount[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DtbCategoryTotalCount|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DtbCategoryTotalCount patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DtbCategoryTotalCount[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DtbCategoryTotalCount findOrCreate($search, callable $callback = null, $options = [])
 */
class DtbCategoryTotalCountTable extends Table
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

        $this->setTable('dtb_category_total_count');
        $this->setDisplayField('category_id');
        $this->setPrimaryKey('category_id');
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
            ->integer('product_count')
            ->allowEmpty('product_count');

        $validator
            ->dateTime('create_date')
            ->requirePresence('create_date', 'create')
            ->notEmpty('create_date');

        return $validator;
    }
}
